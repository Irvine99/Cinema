<?php session_start(); ?>


<?php
 
    require_once('./access.php');
    




    if($_POST) {
        
        $inputName = htmlspecialchars($_POST['name']);
        $inputSurname = htmlspecialchars($_POST['surname']);
        $inputAdress = htmlspecialchars($_POST['adress']);
        $inputTown = htmlspecialchars($_POST['town']);
        $inputEmail = htmlspecialchars($_POST['email']);
        $inputPassword = htmlspecialchars($_POST['password']);
        

        if(!($inputName == "") && !($inputSurname == "") && !($inputAdress == "") && !($inputTown == "") && !($inputEmail == "") && !($inputPassword == "")  ){

            $utilisateur = "SELECT email FROM users WHERE email =  :email";
            $requetes = $conn->prepare($utilisateur);
            $requetes->execute(['email' => $inputEmail]);
            $emailFind = $requetes->fetchALL();
            var_dump($emailFind);

            if(empty($emailFind)) {

                $insertForm = "INSERT INTO users (name, surname, adress, town, email, password)
                VALUES (:name, :surname, :adress, :town, :email, :password)";
     
                $insertData = $conn->prepare($insertForm);
                $insertData->execute([
                    'name' => $_POST['name'],
                    'surname' => $_POST['surname'],
                    'adress' => $_POST['adress'],
                    'town' => $_POST['town'],
                    'email' => $_POST['email'],
                    'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                ]);
                $_SESSION['tab'] = 'sign';
                $_SESSION['successMessage'] = "messageForm";
                header('Location: ../index.php');    
            }else{
                $_SESSION['tab'] = 'sign';
                $_SESSION['messageError'] = "emailIdem";
                header('Location: ../index.php');  
            }
            
          
        }else{
            $_SESSION['tab'] = 'sign';
            $_SESSION['messageError'] = "erreurChampvide";
            header('Location: ../index.php');  
        } 
    }

?>  