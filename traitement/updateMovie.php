<?php
require('access.php');

var_dump($_POST);
var_dump($_FILES);

 $movieTitle = htmlspecialchars($_POST['movieTitle']);
 $budgetMovie = htmlspecialchars($_POST['budgetMovie']);
 $timeMovie = htmlspecialchars($_POST['timeMovie']);
 $resumeMovie = htmlspecialchars($_POST['resumeMovie']);
 $actors = $_POST['actors'];
 $idMovie = $_POST['movieId'];

 if(!empty($actors)) {
    // Supprime tous les enregistrements correspondant au film en cours
    $delActor = "DELETE FROM movie_actor WHERE Id_movie = :idMovie";
    $requestDel = $conn->prepare($delActor);
    $requestDel->execute(['idMovie' => $idMovie]);

    // Insère les nouveaux enregistrements
    $insertActor = "INSERT INTO movie_actor (Id_movie, Id_actor) VALUES (:idMovie, :idActor)";
    $requestInsert = $conn->prepare($insertActor);
    
    foreach ($actors as $actor) {
        
        $idActor = $actor;
        $requestInsert->execute(['idMovie' => $idMovie, 'idActor' => $idActor]);
    }
}




    if(!empty($movieTitle)) {


    
        $requestTitle = "UPDATE movie SET name_movie = :movieTitle WHERE Id_movie = :idMovie";
        $request = $conn->prepare($requestTitle);
        $request->bindParam(':movieTitle', $movieTitle);
        $request->bindParam(':idMovie', $idMovie);
        $request->execute();
    }

    if(!empty($resumeMovie)) {


    
        $requestResume = "UPDATE movie SET description_movie = :resumeMovie WHERE Id_movie = :idMovie";
        $request = $conn->prepare($requestResume);
        $request->bindParam(':resumeMovie', $resumeMovie);
        $request->bindParam(':idMovie', $idMovie);
        $request->execute();
    }

    if(!empty($budgetMovie)) {


    
        $requestBudget = "UPDATE movie SET budget_movie = :budgetMovie WHERE Id_movie = :idMovie";
        $request = $conn->prepare($requestBudget);
        $request->bindParam(':budgetMovie', $budgetMovie);
        $request->bindParam(':idMovie', $idMovie);
        $request->execute();
    }

    if(!empty($timeMovie)) {


    
        $requestTitle = "UPDATE movie SET date_sortie_movie = :timeMovie WHERE Id_movie = :idMovie";
        $request = $conn->prepare($requestTitle);
        $request->bindParam(':timeMovie', $timeMovie);
        $request->bindParam(':idMovie', $idMovie);
        $request->execute();
    }

    if(!empty($_FILES['afficheMovie'])) {

        $nameFile = $_FILES['afficheMovie']['name'];
                    $typeFile = $_FILES['afficheMovie']['type'];
                    $tmpFile = $_FILES['afficheMovie']['tmp_name'];
                    $errorFile = $_FILES['afficheMovie']['error'];
                    $sizeFile = $_FILES['afficheMovie']['size'];
    
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
                                       
                                    $actorData = "UPDATE movie SET affiche_movie = :image  WHERE Id_actor = :idMovie";
                                    $insertData = $conn->prepare($actorData);
                                    $insertData->bindParam(':image', $image);
                                    $insertData->bindParam(':idMovie', $idMovie);
                                    $insertData->execute();
    
                                    header('Location: ../admin/moviePage.php');
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
    


    header('Location: ../admin/moviePage.php');

?>