<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $error = FALSE;
    if (isset($_REQUEST['boton'])) {
        if (isset($_POST["correOrigen"])) {
            $correOrigen = $_POST["correOrigen"];
        }
        if (isset($_POST["correoDestino"])) {
            $correoDestino = $_POST["correoDestino"];
        }
        if (isset($_POST["subject"])) {
            $subject = $_POST["subject"];
        }
        if (isset($_POST["mensaje"])) {
            $mensaje = $_POST["mensaje"];
        }
        // echo $error;
        if (!$correOrigen) {
            $error = TRUE;
            $errorMensaje = "User from missing";
        } elseif (!$correoDestino) {
            $error = TRUE;
            $errorMensaje = "User to missing";
        } elseif (!$subject) {
            $error = TRUE;
            $errorMensaje = "Subject missing";
        } elseif (!$mensaje) {
            $error = TRUE;
            $errorMensaje = "message missing";
        }
        if (!$error) {


            // primero hay que incluir la clase phpmailer para poder instanciar
            //un objeto de la misma
            require "includes/class.phpmailer.php";

            //instanciamos un objeto de la clase phpmailer al que llamamos
            //por ejemplo mail
            $mail = new phpmailer();

            //Definimos las propiedades y llamamos a los m�todos
            //correspondientes del objeto mail

            //Con PluginDir le indicamos a la clase phpmailer donde se
            //encuentra la clase smtp que como he comentado al principio de
            //este ejemplo va a estar en el subdirectorio includes
            $mail->PluginDir = "includes/";
            //Con la propiedad Mailer le indicamos que vamos a usar un
            //servidor smtp
            $mail->IsSMTP();
            $mail->CharSet = 'UTF-8';
            $mail->SMTPSecure = "ssl";

            //Asignamos el puerto. Para GMail el 465
            $mail->Port = 465;

            //Asignamos a Host el nombre de nuestro servidor smtp
            $mail->Host = "smtp.gmail.com";

            //Le indicamos que el servidor smtp requiere autenticaci�n
            $mail->SMTPAuth = true;

            //Le decimos cual es nuestro nombre de usuario y password
            $mail->Username = $correOrigen;
            $mail->Password = "Jehova@361";

            //Indicamos cual es nuestra direcci�n de correo y el nombre que
            //queremos que vea el usuario que lee nuestro correo
            $mail->From = $correOrigen;
            $mail->FromName = "Francisco Days";

            //el valor por defecto 10 de Timeout es un poco escaso dado que voy a usar
            //una cuenta gratuita, por tanto lo pongo a 30
            $mail->Timeout = 30;

            //Indicamos cual es la direcci�n de destino del correo
            $mail->AddAddress($correoDestino);
            $valor = $correoDestino;

            //Asignamos asunto y cuerpo del mensaje
            //El cuerpo del mensaje lo ponemos en formato html, haciendo
            //que se vea en negrita
            $mail->Subject = $subject;
            $mail->Body = $mensaje;

            //Definimos AltBody por si el destinatario del correo no admite email con formato html
            $mail->AltBody = "Mensaje de prueba mandado con phpmailer en formato solo texto";

            //se envia el mensaje, si no ha habido problemas
            //la variable $exito tendra el valor true
            $exito = $mail->Send();

            //Si el mensaje no ha podido ser enviado se realizaran 4 intentos mas como mucho
            //para intentar enviar el mensaje, cada intento se hara 5 segundos despues
            //del anterior, para ello se usa la funcion sleep
            $intentos = 1;
            while ((!$exito) && ($intentos < 5)) {
                sleep(5);
                //echo $mail->ErrorInfo;
                $exito = $mail->Send();
                $intentos = $intentos + 1;
            }


            if (!$exito) {
                echo "<p>Problemas enviando correo electrónico a</p>" . $valor;
                echo "<br>" . $mail->ErrorInfo;
            } else {
                echo "<p>Mensaje enviado correctamente</p>";
            }
        } else {
            echo "<p>Error -> " . $errorMensaje . "</p>";
        }
    }
    ?>
    <h2>CORREO</h2>
    <form action="enviocorreo.php" method="POST">
        <input type="email" name="correOrigen" required /> Origen<br />
        <input type="email" name="correoDestino" required /> Destino<br />
        <input type="text" name="subject" required /> Subject<br />
        <!-- <input type="text" name="mensaje" /> Mensaje<br /><br /> -->
        <textarea name="mensaje" cols="40" rows="10" required></textarea> Mensaje <br />
        <input type="submit" name="boton" value="enviar" />
    </form>

</body>

</html>