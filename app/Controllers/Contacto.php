<?php

namespace App\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class Contacto extends BaseController
{
    public function __construct()
    {
        helper(['url']);
    }

    public function redirect($uri)
    {
        return redirect()->to($uri);
    }

    public function send()
    {
        error_log(print_r($this->request->getPost(), true));
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $this->request->getPost('name') ?: 'Nombre no proporcionado';
            $phone = $this->request->getPost('phone') ?: 'Teléfono no proporcionado';
            $email = $this->request->getPost('email') ?: 'Email no proporcionado';
            
            log_message('info', "Datos recibidos: Nombre: $name, Teléfono: $phone, Email: $email");

            $mail = new PHPMailer(true);

            try {
                $mail->isSMTP();
                $mail->SMTPDebug = 2; // Cambia a 2 si necesitas depuración detallada
                $mail->Host = 'smtp.hostinger.com';
                $mail->SMTPAuth = true;
                $mail->Username = getenv('SMTP_USERNAME');
                $mail->Password = getenv('SMTP_PASSWORD');
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Mejora: Utiliza constante de PHPMailer
                $mail->Port = 465;
                
                // Destinatarios
                $mail->setFrom('contacto@saboresdeperu.es', 'Formulario de contacto');
                $mail->addAddress('contacto@saboresdeperu.es', 'Nancy');
                $mail->addReplyTo($email, $name);

                // Contenido
                $mail->isHTML(true);
                $mail->Subject = 'Consulta para nuevo pedido';
                $mail->Body = "Nombre: {$name}<br>Tel&eacute;fono: {$phone}<br>Email: {$email}";
                $mail->AltBody = "Nombre: {$name}\nTeléfono: {$phone}\nEmail: {$email}";
                

                $mail->send();
                log_message('info', 'Correo enviado con éxito.');
                return redirect()->to(base_url("Contacto"));
            } catch (Exception $e) {
                log_message('error', 'Error al enviar el correo: ' . $mail->ErrorInfo);
                return redirect()->to(base_url())->with('error', 'El mensaje no se pudo enviar. Error: ' . $mail->ErrorInfo);
            }
        } else {
            echo 'Método no permitido';
        }
    }
}
