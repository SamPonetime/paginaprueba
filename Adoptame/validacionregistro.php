<?php
       
    if(isset($_POST['submit']) )
    {

        $Usuario = $_POST['campousuario'];
        $Email = $_POST['campoemail'];
        $Contrasena = $_POST['campocontrasena'];
        $Nombre = $_POST['camponombre'];
        $Apellidos = $_POST['campoapellidos'];
        $Telefono = $_POST['campotelefono'];

        $campos = array();

        if($Usuario == "" || strlen($Usuario)>26)
        {
            array_push($campos, "El campo Usuario no puede estar vacío o tener más de 25 caracteres");
        }

        if($Email == "" || strlen($Email)>61 ||strpos($Email,"@" === false) && strpos($Email,"." === false))
        {
            array_push($campos, "Ingrese correo válido y con menos de 61 caracteres");
        }
      
        if($Contrasena == "" || strlen($Contrasena)<9 && strlen($Contrasena)>21)
        {
            array_push($campos, "Contraseña debe tener entre 8 y 20 caracteres");
        }
        
        if($Nombre == ""|| strlen($Nombre)>=41 || is_numeric($Nombre))
        {
            array_push($campos, "Nombre maximo 40 caracteres y sin numeros");
        }
        if($Apellidos == ""|| strlen($Apellidos)>=41 || is_numeric($Nombre))
        {
            array_push($campos, "Apellidos maximo 40 caracteres y sin numeros");
        }
        if($Telefono == ""|| strlen($Telefono)>=11)
        {
            array_push($campos, "Su numero debe tener menos de 10 caracteres");
        }

        
        if(count($campos)> 0){
            echo "<div class='error'>";
            for($i=0; $i<count($campos); $i++)
            {
                echo "<li>".$campos[$i]."</li>";
            }
        } else {
            echo "<div class='correcto'>
            Datos correctos";
        }
        echo "</div>";

    }
    
    ?>