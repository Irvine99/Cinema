<?php session_start() ?>

<?php

require_once('./access.php');


if($_POST) {
    $inputEmail = htmlspecialchars($_POST['email']);
    $inputPassword = htmlspecialchars($_POST['password']);
    var_dump($inputEmail);
    var_dump($inputPassword);
}
    if(!($inputEmail == "") && !($inputPassword == "")){
       
        $utilisateur = "SELECT * FROM users WHERE email =  :email";
        $requetes = $conn->prepare($utilisateur);
        $requetes->execute(['email' => $inputEmail]);
        $passwordFind = $requetes->fetch();
        var_dump($passwordFind);

        
        if(password_verify( $inputPassword, $passwordFind['password'])) {
            $_SESSION['id_user'] = $passwordFind['Id_users'];
            $_SESSION['name'] = $passwordFind['name'];
            $_SESSION['surname'] = $passwordFind['surname'];

            // header('Location: ../login.php');
            var_dump('bon');

        }else{
            var_dump('mauvais');
            
            // header('Location: ../login.php');

        }
    }else {
        unset($_SESSION['password']);
        unset($_SESSION['email']);
        var_dump('mauvais encore');

        // header('Location: ../login.php');
    }


?>