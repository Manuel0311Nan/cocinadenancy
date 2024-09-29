<?php

namespace App\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class Contacto extends BaseController
{
    public function __construct()
    {
        helper('url');
    }

    public function redirect($uri)
    {
        return redirect()->to($uri);
    }

    public function send()
    {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $name = isset($_POST['name']) ? $_POST['name'] : 'Nombre no proporcionado';
                $phone = isset($_POST['phone']) ? $_POST['phone'] : 'Teléfono no proporcionado';
                $email = isset($_POST['email']) ? $_POST['email'] : 'Email no proporcionado';
                $message = isset($_POST['message']) ? $_POST['message'] : 'Mensaje no proporcionado';
    
                $mail = new PHPMailer(true);
    
                try {
                    $mail->isSMTP();
                    $mail->SMTPDebug = 2;
                    $mail->Host = 'smtp.hostinger.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = getenv('SMTP_USERNAME');
                    $mail->Password = getenv('SMTP_PASSWORD');
                    $mail->SMTPSecure = 'ssl';
                    $mail->Port = 465;
    
                    // Destinatarios
                    $mail->setFrom('pruebasweb@littleodin.es', 'Formulario de contacto');
                    $mail->addAddress('pruebasweb@littleodin.es', 'Nancy');
                    $mail->addReplyTo($email, $name);

    
                    // Contenido
                    $mail->isHTML(true);
                    $mail->Subject = 'Consulta para nuevo pedido';
                    $mail->Body    = "Nombre: {$name}<br>Tel&eacute;fono: {$phone}<br>Email: {$email}}<br>Mensaje: {$message}";
                    $mail->AltBody = "Nombre: {$name}\nTel&eacute;fono: {$phone}\nEmail: {$email}\nMensaje: {$message}"; 
    
                    $mail->send();
                    return redirect()->to(base_url());
                } catch (Exception $e) {
                    echo 'El mensaje no se pudo enviar. Error: ' . $mail->ErrorInfo;
                }
            } else {
                echo 'Método no permitido';
            }
    }
}
