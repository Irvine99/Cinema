<?php session_start();

 
    require_once('./access.php');


    $data = [];

    if($_POST) {
        
        $inputUsername = htmlspecialchars($_POST['username']);
        $inputName = htmlspecialchars($_POST['name']);
        $inputEmail = htmlspecialchars($_POST['email']);
        $inputPassword = htmlspecialchars($_POST['password']);
        $inputPassword2 = htmlspecialchars($_POST['password2']);

        

        if(!($inputUsername == "") && !($inputName == "") && !($inputEmail == "") && !($inputPassword == "") && !($inputPassword2 == "")  ){

            $utilisateur = "SELECT email FROM users WHERE email =  :email";
            $requetes = $conn->prepare($utilisateur);
            $requetes->execute(['email' => $inputEmail]);
            $emailFind = $requetes->fetch();
            var_dump($emailFind);

            if(empty($emailFind)) {

                $insertForm = "INSERT INTO users (username, name, email, password )
                VALUES (:username, :name, :email, :password)";
     
                $insertData = $conn->prepare($insertForm);
                $insertData->execute([
                    'username' => $_POST['username'],
                    'name' => $_POST['name'],
                    'email' => $_POST['email'],
                    'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
                ]);

                $data["success"] = "Vous avez valider votre inscription";
                
                
                    
            }else{

                $data["error"] = ["sameEmail" => "L'email est déja existant"];
                
            }
            
          
        }else{

            $data["error"] = ["champVide" => "Les champs sont vides."];
            
        } 
    }
var_dump($data);
echo json_encode($data);




        




    

