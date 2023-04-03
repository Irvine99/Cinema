<?php session_start() ?>
<?php
    require_once('./access.php');
    include('../traitement/function.php');

    if($_POST) {

        var_dump($_POST);
        var_dump($_FILES);
        
       
        $nameActor = htmlspecialchars($_POST['text']);

        var_dump($nameActor);

        $searchActor = "SELECT * FROM actor WHERE name_actor = ?";
        $requestActor = $conn->prepare($searchActor);
        $requestActor->execute([$nameActor]);
        $FindActor = $requestActor->fetch();
        var_dump($FindActor);

        if(empty($FindActor)) {

            if(!empty($_FILES['avatarActor']))
            {   
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
                                   
                                $actorData = "INSERT INTO actor (name_actor, avatar_actor) VALUE (:name_actor, :avatar_actor)";
                                $insertData = $conn->prepare($actorData);
                                $insertData->execute([
                                    'name_actor' => $_POST['text'],
                                    'avatar_actor' => $image,
                                ]);

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
            }else{
                    echo  "bug encore";
            }
                

        }else{
                echo "Wesh bro tu as vu, j'ai pas d'image, pikachu attaque tonnerre BZZZZzzZZZzzZZZzz!!!!!?";  
            }            

        }else{
            echo "Wesh bro tu as vu, j'ai deja ton film, reviens plus tard wesh wesh broo c'est trop cool zarma tu as vu le match hier?";
        }

?>