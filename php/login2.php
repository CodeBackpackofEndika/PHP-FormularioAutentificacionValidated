


<?php

    $login=$_POST["user"];
    $password=$_POST["password"];

    if($login==="admin"&&$password==="admin"){
        echo "<H2><u><strong>Autentificación Correcta</strong></u></H2>";
    }else{
        header("location:../index.html");
    }


?>