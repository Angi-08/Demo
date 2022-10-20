<?php
include_once 'includes/usuario.php';
include_once 'includes/user_session.php';


$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    //echo "hay sesion";
    $user->setUser($userSession->getCurrentUser());
    include_once 'Gestion/Inicio.php';

}else if(isset($_POST['Login']) && isset($_POST['Contrasena'])){
    
    $userForm = $_POST['Login'];
    $passForm = $_POST['Contrasena'];

    $user = new User();
    if($user->userExists($userForm, $passForm)){
        //echo "Existe el usuario";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);

        include_once 'Gestion/Inicio.php';
    }else{
        //echo "No existe el usuario";
        $errorLogin = "Nombre de usuario y/o password incorrecto";
        include_once 'Inicio/logout';
    }
}else{
    //echo "login";
    include_once 'Inicio/logout';

}

?>