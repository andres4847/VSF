<?php  function mail_utf8($to, $subject, $message , $header) {    

     return mail($to, '=?UTF-8?B?'.base64_encode($subject).'?=', $message, $header);
 }
function form_mail()
{ 
   // $email_to =  "info@voluntariossf.org.ar"; 
    $email_to =  "silvaandres@hotmail.com"; 
    $email_subject = "Contacto Formulario Web";   
    $first_name = $_POST['firstName']; // required 
    $last_name = $_POST['lastName']; // required 
    $email_from = $_POST['userEmail']; // required 
    $comments = $_POST['userMessage']; // required
    $nacionalidad = $_POST['nacionalidad']; // required
    $fechaNacimiento = $_POST['fechaNacimiento']; // required

 
    $email_message = "Detalle del mensaje:\n\n";         
 
    $email_message .= "Nombre: ".$first_name."\n"; 
    $email_message .= "Apellido: ".$last_name."\n"; 
    $email_message .= "Email: ".$email_from."\n"; 
    $email_message .= "Nacionalidad: ".$nacionalidad."\n"; 
    $email_message .= "Fecha Nacimiento: ".$fechaNacimiento."\n"; 
    $email_message .= "Mensaje: ".$comments."\n";   
  
    $headers = "MIME-Version: 1.0\r\n"; 
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";   
    $headers .= "From: $email_from\nReply-To:".$email_from."\n"; 

return(mail_utf8($email_to, $email_subject, $email_message, $headers));
}
 
//cambiar aqui el email
 if (form_mail())  
 {
    echo 'Tu mensaje fue enviado, gracias por contactarte!';
 }
else
{
    echo 'Se produjo un error.';    
} ?>