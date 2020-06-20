<?php
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
$mail->Username = "amesnauprueba@gmail.com";
$mail->Password = "Jehova@361";

//Indicamos cual es nuestra direcci�n de correo y el nombre que
//queremos que vea el usuario que lee nuestro correo
$mail->From = "amesnauprueba@gmail.com";
$mail->FromName = "Francisco Days";

//el valor por defecto 10 de Timeout es un poco escaso dado que voy a usar
//una cuenta gratuita, por tanto lo pongo a 30
$mail->Timeout = 30;

//Indicamos cual es la direcci�n de destino del correo
$mail->AddAddress("luzbeida1409@gmail.com");
$valor = "amesnau@gmail.com";

//Asignamos asunto y cuerpo del mensaje
//El cuerpo del mensaje lo ponemos en formato html, haciendo
//que se vea en negrita
$mail->Subject = "TE AMO TE AMO TE AMO";
$mail->Body = "<b>Te amo mi amor bello, soy tu admirador secreto</b>";

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
    echo "<p>Problemas enviando correo electrónico a </p>" . $valor;
    echo "<br>" . $mail->ErrorInfo;
} else {
    echo "<p>Mensaje enviado correctamente</p>";
}
