<?php
include("conexion.php");

if (isset($_POST['login'])) {

    $correo = $_POST['login_correo'];
    $contraseña = $_POST['login_contraseña'];
    $correo_aux = '';
    $contraseña_aux = '';
    $id=0;

    
    if($correo=="" || $contraseña==""){
        header("location: ../../formulario/index.php");

    }
    else{

    $consulta = "SELECT * FROM client where address='$correo' and pass='$contraseña';";
    $query = mysqli_query($conection, $consulta) or die("errrrrrrrrrr");

       while ($mostrar = mysqli_fetch_array($query)) {
              $id=$mostrar[0];
              $correo_aux=$mostrar[5];
              $contraseña_aux=$mostrar[6];
        }
        if($correo == $correo_aux && $contraseña==$contraseña_aux ){
            
                session_start();
                $_SESSION['cliente_id']=$id;
                $_SESSION['cliente_correo']=$correo;
                $_SESSION['cliente_clave']=$contraseña; 
    
                header("location: ../../index.php");
    
        }
        else{
      
                $consultaA = "SELECT *from admin where email='$correo' and pass='$contraseña';";
    
                $queryA = mysqli_query($conection, $consultaA) or die("errrorrrrrrrrrrrrrrrrrrr datos");
            
                $filas2 = mysqli_num_rows($queryA);
            
                if ($filas2) {
                    session_start();
                    $_SESSION['administrador']=$correo;
            
                    header("location:../pages/index.php");
            
                } else {
            
                    header("location: ../../formulario/index.php");
            
                }
                
            }
     
        }      
    }

if (isset($_POST['registrar'])) {
            $iten1 = $_POST['dni'];
            $iten2 = $_POST['nombres'];
            $iten3 = $_POST['apellidos'];
            $iten4 = $_POST['telefono'];
            $iten5 = $_POST['correo'];
            $iten6 = $_POST['contraseña'];
            $id2 = 0;
            
            if($iten1=="" || $iten2=="" || $iten3=="" || $iten4=="" || $iten5=="" || $iten6==""){
                header("location: ../../registro/registro.php");
        
            }
            else{
           
            $insertar = "INSERT INTO  client VALUES (0,'$iten2','$iten3','$iten1',$iten4,'$iten5','$iten6',1,1)";

            $query = mysqli_query($conection, $insertar) or die ( "error");
            

            $consultar = "SELECT id From client where address='$iten5' pass='$iten6'";


                while($mostrar = mysqli_fetch_array($query)){
                    $id2=$mostrar[0];
                }

                session_start();
                $_SESSION['cliente_id']=$id2;
                $_SESSION['cliente_correo']=$iten5;
                $_SESSION['cliente_clave']=$iten6; 

            header("location: ../../index.php");
}
}

?>
