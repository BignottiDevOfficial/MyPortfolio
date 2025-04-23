
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $to = "ollenittongib@gmail.com"; // <-- metti qui la tua email!
        $subject = "Messaggio dal sito";
        
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $message = htmlspecialchars($_POST["message"]);
        
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        
        $body = "Hai ricevuto un messaggio da $name ($email):\n\n$message";
        
        if (mail($to, $subject, $body, $headers)) {
            echo "Messaggio inviato con successo.";
        } else {
            echo "Errore nell'invio del messaggio.";
        }
    }
?>


</body>
</html>