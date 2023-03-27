<?php session_start() ?>

<?php

$data = [];

require_once('./access.php');


if($_POST) {
    $inputEmail = htmlspecialchars($_POST['email']);
    $inputPassword = htmlspecialchars($_POST['password']);

}
    if(!($inputEmail == "") && !($inputPassword == "")){
       
        $utilisateur = "SELECT * FROM users WHERE email =  :email";
        $requetes = $conn->prepare($utilisateur);
        $requetes->execute(['email' => $inputEmail]);
        $passwordFind = $requetes->fetch();
        

        
        if(password_verify($inputPassword, $passwordFind['password'])) {
            $_SESSION['id_user'] = $passwordFind['Id_users'];
            $_SESSION['username'] = $passwordFind['username'];
            $_SESSION['name'] = $passwordFind['name'];  

            $data['success'] = 'Vous êtes bien connecter';
            

        }else{
            
            $data['error'] = 'Mot de passe incorrect';
            

        }
    }else {
        unset($_SESSION['password']);
        unset($_SESSION['email']);
        $date['error'] = 'Veuillez remplir les champs';

        
    }

    echo json_encode($data);
?>