<?php
require('access.php');
var_dump($_FILES);
var_dump($_POST);

$idActor = $_POST['idActor'];



if(!empty($_POST['actorName'])) {
    $nameActor = $_POST['actorName'];
    $idActor = $_POST['idActor'];   
    $requestActor = "UPDATE actor SET name_actor = :nameActor WHERE Id_actor = :idActor";
    $request = $conn->prepare($requestActor);
    $request->bindParam(':nameActor', $nameActor);
    $request->bindParam(':idActor', $idActor);
    $request->execute();

}

if(!empty($_FILES['avatarActor'])) {

    $nameFile = $_FILES['avatarActor']['name'];
                $typeFile = $_FILES['avatarActor']['type'];
                $tmpFile = $_FILES['avatarActor']['tmp_name'];
                $errorFile = $_FILES['avatarActor']['error'];
                $sizeFile = $_FILES['avatarActor']['size'];

                $extensions = ['png', 'jpg', 'jpeg', 'gif', 'jiff'];
                $type = ['image/png', 'image/jpg', 'image/jpeg', 'image/gif', 'image/jiff'];
                $extension = explode('.', $nameFile);
                $max_size =50000000;
                 
                
                if(in_array($typeFile, $type))
                {
                    if(count($extension) <=2 && in_array(strtolower(end($extension)), $extensions))
                    {
                        if($sizeFile <= $max_size && $errorFile == 0)
                        {   $actorValid = FALSE; 
                            if(move_uploaded_file($tmpFile, $image = '../assets/upload/actor/' . uniqid() . '.' . end($extension)) )
                            {
                                   
                                $actorData = "UPDATE actor SET avatar_actor = :image  WHERE Id_actor = :idActor";
                                $insertData = $conn->prepare($actorData);
                                $insertData->bindParam(':image', $image);
                                $insertData->bindParam(':idActor', $idActor);
                                $insertData->execute();

                                header('Location: ../admin/insertActor.php');
                            }
                            
                        }
                        else
                        {
                            echo  "Erreur le poids de l'image est trop élevé !";
                        }
                    }
                    else
                    {
                        echo  "Merci d'upload une image !";
                    }
                }else  {
                    echo "Type non autorisé !";
                }

}


?>    