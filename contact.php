<html lang="el">

<?php include "header.php"; ?>
<main>
    <form action="contact.php" method="POST">
        <p>Email Αποστολέα:</p><br>
        <input type="email" name="email" id="email" autocomplete="off" /> <br>
        <p> Μήνυμα:</p><br>
        <textarea name="message" id="message"></textarea>
        <br><br>
        <input type="submit" id="submit" value="Υποβολή" /><br>
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $email = $_POST["email"];
            $message = $_POST["message"];
            echo "To μήνυμα καταχωρήθηκε";
        }
        ?>
    </form>
</main>
<?php include "backend/config.php"; ?>
<?php
$sql_code = "INSERT INTO patients(email,message) VALUES('$email','$message')";
mysqli_query($conn, $sql_code);
mysqli_close($conn);
?>
<?php include "footer.php"; ?>
</body>

</html>