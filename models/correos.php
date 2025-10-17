<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../PHPMailer/Exception.php';
    require '../PHPMailer/PHPMailer.php';
    require '../PHPMailer/SMTP.php';

    class EnviarCorreo{
        public function enviarCorreo($nombres,$email,$telefono,$asunto,$mensaje){
            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = 0;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //ESTE VALOR CAMBIA SEGUN EL CORREO QUE SE ESTE USANDO COMO BASE EJ: GMAIL,HOTMAIL, ETC.
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'soportesenasoft@gmail.com';                     //SMTP username
                $mail->Password   = 'puhhcmfyhekhzlta';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('soportesenasoft@gmail.com', 'Soporte Tecnico Bicicletas');         //REMITENTE O QUIEN ENVIA EL MENSAJE
                $mail->addAddress('alejandro1202hs@gmail.com');     //RECEPTOR DEL MENSAJE
                // $mail->addAddress('ellen@example.com');               //Name is optional
                // $mail->addReplyTo('info@example.com', 'Information');
                // $mail->addCC('cc@example.com');
                // $mail->addBCC('bcc@example.com');

                //Attachments
                // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Has Recibido Un Mensaje Del Formulario De Contacto - Alquiler-Bicicletas';
                $mail->Body    = '
                
                
                            <!DOCTYPE html>
                                    <html lang="es">
                                    <head>
                                    <meta charset="UTF-8">
                                    <style>
                                        body {
                                            font-family: "Segoe UI", Arial, sans-serif;
                                            background-color: #f3f3f3;
                                            margin: 0;
                                            padding: 0;
                                            color: #333;
                                        }

                                        .container {
                                            max-width: 650px;
                                            margin: 40px auto;
                                            background-color: #fff;
                                            border-radius: 10px;
                                            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
                                            overflow: hidden;
                                        }

                                        header {
                                            background-color: #39ff14; /* Verde neón */
                                            color: #000;
                                            text-align: center;
                                            padding: 25px 20px;
                                        }

                                        header img {
                                            width: 90px;
                                            height: 90px;
                                            border-radius: 50%;
                                            object-fit: cover;
                                            margin-bottom: 10px;
                                        }

                                        header h1 {
                                            margin: 5px 0;
                                            font-size: 24px;
                                            letter-spacing: 1px;
                                            text-transform: uppercase;
                                        }

                                        header p {
                                            font-size: 14px;
                                            margin: 0;
                                        }

                                        main {
                                            padding: 30px 40px;
                                        }

                                        main h2 {
                                            color: #39ff14;
                                            font-size: 20px;
                                            margin-bottom: 20px;
                                            border-bottom: 2px solid #39ff14;
                                            display: inline-block;
                                            padding-bottom: 4px;
                                        }

                                        main p {
                                            font-size: 15px;
                                            line-height: 1.6;
                                            margin: 10px 0;
                                        }

                                        main strong {
                                            color: #111;
                                        }

                                        footer {
                                            background-color: #111;
                                            color: #bbb;
                                            text-align: center;
                                            padding: 15px;
                                            font-size: 13px;
                                        }

                                        footer a {
                                            color: #39ff14;
                                            text-decoration: none;
                                        }
                                    </style>
                                    </head>
                                    <body>
                                        <div class="container">
                                            <header>
                                                <!-- 👇 Aquí colocas la URL de tu logo -->
                                                <img src="https://i.pinimg.com/236x/71/ff/68/71ff682bd76bdbffba7678191f59e5c5.jpg" alt="Logo Alquiler de Bicicletas">
                                                <h1>Alquiler de Bicicletas</h1>
                                                <p>Nuevo mensaje desde el formulario de contacto</p>
                                            </header>

                                            <main>
                                                <h2>Se ha recibido un nuevo correo desdel formulario de contacto de la plataforma de alquiler de bicicletas</h2>
                                                <p><strong>👤 Nombres:</strong> '.$nombres.'</p>
                                                <p><strong>📧 Email:</strong> '.$email.'</p>
                                                <p><strong>📱 Teléfono:</strong> '.$telefono.'</p>
                                                <p><strong>📝 Asunto:</strong> '.$asunto.'</p>
                                                <p><strong>💬 Mensaje:</strong><br>'.$mensaje.'</p>
                                            </main>

                                            <footer>
                                                <p>© '.date('Y').' <a href="#">Alquiler de Bicicletas</a> | Todos los derechos reservados.</p>
                                            </footer>
                                        </div>
                                    </body>
                                    </html>
                ';
                // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
        }

        
    }

?>