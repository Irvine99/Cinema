<?php session_start(); ?>


<?php
 
    require_once('./access.php');
    

    $data =[];


    if($_POST) {
        
        $inputName = htmlspecialchars($_POST['name']);
        $inputSurname = htmlspecialchars($_POST['username']);
        $inputEmail = htmlspecialchars($_POST['email']);
        $inputPassword = htmlspecialchars($_POST['password']);
        $inputPassword2 = htmlspecialchars($_POST['password2']);
        
        if($inputPassword == $inputPassword2) {

            if(!($inputName == "") && !($inputSurname == "") && !($inputEmail == "") && !($inputPassword == "")  ){

                $utilisateur = "SELECT email FROM users WHERE email =  :email";
                $requetes = $conn->prepare($utilisateur);
                $requetes->execute(['email' => $inputEmail]);
                $emailFind = $requetes->fetch();
                var_dump($emailFind);
    
                if(empty($emailFind)) {
    
                    $insertForm = "INSERT INTO users (name, username, date_create, email, password)
                    VALUES (:name, :username,NOW(), :email, :password)";
         
                    $insertData = $conn->prepare($insertForm);
                    $insertData->execute([
                        'name' => $_POST['name'],
                        'username' => $_POST['username'],
                        'email' => $_POST['email'],
                        'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                        
                    ]);
                    $data['success'] = "Vous vous etes bien enregistrer";
                    // header('Location: ../index.php');    
                }else{
                    $data['error'] => ["msgError"] = "Une erreur est survenue.";
                    var_dump('erreur');
                    // header('Location: ../index.php');  
                }
                
              
            }else{
                $data['error'] => ["pasBon"] = "Un champs n'est pas remplie correctement";
                var_dump('pas bon');
                // header('Location: ../index.php');  
            } 
        }else{
            $data['error'] => ['sameMpd'] = "Vos mots de passe ne sont pas identique";
            var_dump('vos mdp ne sont pas identique');
        }

    }

?>  