<?php 
session_start();
require_once('./access.php');
include('../traitement/function.php');

if($_POST) {
    
    $movies = verifHtml();
    $valid =  TRUE;
    foreach ($movies as $key => $movie) {
        
        if(empty($movie)) {
            echo $key.'<br>';
            $valid = FALSE;
        }
           
    }

    // Traitement
    if($valid) {
        
        var_dump($movies);
        $inputTitle = $movies['titlemMovie'];
        $actors = $movies['checkActors'];
        $producers = $movies['roleProducers'];
        $directors = $movies['roleDirectors'];
        $categories = $movies['categorie'];
        $links = $movies['linkIdYt'];
        
        

        $insertMovie = "SELECT name_movie FROM movie WHERE name_movie = :inputTitle";
        $requestMovie = $conn->prepare($insertMovie);
        $requestMovie->execute(['inputTitle' => $inputTitle]);
        $movieFind = $requestMovie->fetch();

      
        if(empty($movieFind)) {
            
            if(!empty($_FILES['afficheMovie']))
            {   
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
                            if(move_uploaded_file($tmpFile, $image = '../assets/upload/' . uniqid() . '.' . end($extension)) )
                            {
                                   
                                $actorValid = TRUE;
                                $insertForm = "INSERT INTO movie (name_movie, description_movie, date_sortie_movie, budget_movie, affiche_movie)
                                VALUES (:name_movie,:description_movie, :date_sortie_movie, :budget_movie, :affiche_movie )";
                                
                                $insertData = $conn->prepare($insertForm);
                                $insertData->execute([
                                    'name_movie' => $movies['titlemMovie'],
                                    'description_movie' => $movies['resumeMovie'],
                                    'date_sortie_movie' => $movies['dateMovie'],
                                    'budget_movie' => $movies['budgetMovie'],
                                    'affiche_movie' => $image,
                                    
                                ]);
                                $lastidMovie = $conn->lastInsertID();
                                if($actorValid == TRUE ) {
                                    var_dump($lastidMovie);
                                    var_dump($actors);
                                    
                                    try {
                                        foreach ($actors as $actor) {
                                            $insertActor = "INSERT INTO movie_actor (Id_movie,Id_actor) VALUES (:lastidMovie, :actor)";
                                            $actorData = $conn->prepare($insertActor);
                                            $actorData->execute(['lastidMovie' => $lastidMovie,'actor' => $actor]);
                                        }
                                         
                                        foreach ($producers as $producer) {
                                            $insertProducer = "INSERT INTO producer_movie (Id_movie,Id_producer) VALUES (:lastidMovie, :producer)";
                                            $producerData = $conn->prepare($insertProducer);
                                            $producerData->execute(['lastidMovie' => $lastidMovie,'producer' => $producer]);
                                        }
    
                                        foreach ($directors as $director) {
                                            $insertDirector = "INSERT INTO movie_director (Id_movie,Id_director) VALUES (:lastidMovie, :director)";
                                            $directorData = $conn->prepare($insertDirector);
                                            $directorData->execute(['lastidMovie' => $lastidMovie,'director' => $director]);
                                        }
    
                                        foreach ($categories as $categorie) {
                                            $insertCategorie = "INSERT INTO movie_category (Id_movie,Id_category) VALUES (:lastidMovie, :categorie)";
                                            $categorieData = $conn->prepare($insertCategorie);
                                            $categorieData->execute(['lastidMovie' => $lastidMovie,'categorie' => $categorie]);

                                           
                                        }

                                        
                                        $insertUrl = "INSERT INTO url_movie (name_url_movie, Id_movie) VALUES (:links, :lastidMovie)";
                                        $urlData = $conn->prepare($insertUrl);
                                        $urlData->execute(['links' => $links, 'lastidMovie' => $lastidMovie]);
                                        
                                        header('Location: ../admin/admin.php'); 
                                                 
                                    } catch (\Exc $th) {
                                        
                                    }
                                    
                                    
                                    
                                    
                                    die;
                                    
                                }

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
                }
                else
                {
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
    }
              
    
    
     
     
    



    






?>