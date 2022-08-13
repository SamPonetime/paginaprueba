<?php
       
    if(isset($_POST['submit']) )
    {
        $Nombre = $_POST['camponombre'];
        $Email = $_POST['campoemail'];
        $Texto = $_POST['campotexto'];

        $campos = array();

        if($Nombre == "" || strlen($Nombre)>36)
        {
            array_push($campos, "El campo Nombre no puede estar vacío o tener más de 35 caracteres");
        }

        if($Email == "" || strlen($Email)>61 ||strpos($Email,"@" === false))
        {
            array_push($campos, "Ingrese correo válido con menos de 61 caracteres");
        }
      
        if($Texto == "")
        {
            array_push($campos, "El campo de Texto no puede estar vacío");
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