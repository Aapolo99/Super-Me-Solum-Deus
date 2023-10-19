<?php

include_once 'db.php';

    class User extends DB{
        private $nombre;
        private $Email;

        // Verificando si el usuario existe en la base de datos.
        public function userExists($user, $pass, $ID_Rol){
            $query = $this->connect()->prepare("SELECT * FROM usuarios WHERE Email = :user AND contrasena = :pass");
            $query->execute(['user'=>$user, 'pass'=>$pass]);
            // $ID_Rol=1;
            // $Resultado=$query->fetchAll(PDO::FETCH_ASSOC);
            // foreach ($Resultado as $Row) {
            //     echo"Hola";
            //     echo $Row['ID_Rol'];
            // }
            // exit();
        
            if ($query->rowCount()){
                // $sesion->__construct();
                // $_SESSION['ID_Rol']=$ID_Rol;
                // $Rol2=$_SESSION['ID_Rol'];
                return $query->fetch();
            }else {
                return false;
            }
        }
        

        //Asignar a un nombre de usuario (Llenas las variables)
        public function setUser($user){
            $query = $this->connect()->prepare("SELECT * FROM usuarios WHERE Email = :user");
            $query->execute(['user'=>$user]);

            foreach ($query as $CurrentUser) {
                $this->nombre = $CurrentUser['Nombre'];
                $this->Email = $CurrentUser['Email'];
            }
            
        }

        //Traer el nombre del usuario
        public function getNombre() {
            return $this->nombre;
        }
  }
?>