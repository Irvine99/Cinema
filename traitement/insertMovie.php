<?php session_start(); ?>


<?php
 
    require_once('./access.php');
    include ('../traitement/function.php');
    

    $data =[];

    

    if($_POST) {
        
        $inputTitle = htmlspecialchars($_POST['titleMovie']);
        $inputResume = htmlspecialchars($_POST['resumeMovie']);
        $inputDate = htmlspecialchars($_POST['dateMovie']);
        $inputbudget = htmlspecialchars($_POST['budgetMovie']);
        var_dump($_FILES);
        var_dump($_POST);

            if(!($inputTitle == "") && !($inputResume == "") && !($inputDate == "") && !($inputbudget == "")  ){
                
                $insertMovie = "SELECT name_movie FROM movie WHERE name_movie = :inputTitle";
                $requestMovie = $conn->prepare($insertMovie);
                $requestMovie->execute(['inputTitle' => $inputTitle]);
                $movieFind = $requestMovie->fetch();

                if(empty($movieFind)) {
                    
                    var_dump($movieFind);

                    if(!empty($_FILES['afficheMovie']))
                    {
                        $nameFile = $_FILES['afficheMovie']['name'];
                        $typeFile = $_FILES['afficheMovie']['type'];
                        $tmpFile = $_FILES['afficheMovie']['tmp_name'];
                        $errorFile = $_FILES['afficheMovie']['error'];
                        $sizeFile = $_FILES['afficheMovie']['size'];

                        var_dump($_FILES);
                        
                
                        $extensions = ['png', 'jpg', 'jpeg', 'gif', 'jiff'];
                        $type = ['image/png', 'image/jpg', 'image/jpeg', 'image/gif', 'image/jiff'];
                
                        $extension = explode('.', $nameFile);
                
                        $max_size =500000;
                
                        if(in_array($typeFile, $type))
                        {
                            if(count($extension) <=2 && in_array(strtolower(end($extension)), $extensions))
                            {
                                if($sizeFile <= $max_size && $errorFile == 0)
                                {
                                    if(move_uploaded_file($tmpFile, $image = '../assets/upload/' . uniqid() . '.' . end($extension)) )
                                    {
                                        var_dump($image);  
                                        $insertForm = "INSERT INTO movie (name_movie, description_movie, date_sortie_movie, budget_movie, affiche_movie)
                                        VALUES (:name_movie,:description_movie, :date_sortie_movie, :budget_movie, :affiche_movie )";
                                    
                                        $insertData = $conn->prepare($insertForm);
                                        $insertData->execute([
                                            'name_movie' => $_POST['titleMovie'],
                                            'description_movie' => $_POST['resumeMovie'],
                                            'date_sortie_movie' => $_POST['dateMovie'],
                                            'budget_movie' => $_POST['budgetMovie'],
                                            'affiche_movie' => $image,
                                        ]);

                                        
                                        header('Location: ../admin/insertMovie.php');
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
                 
                    


                    
                    
                    // header('Location: ../index.php');    
                }else{
                    echo 'film idem';
                    // header('Location: ../index.php');  
                }
                
              
            }else{
                echo 'champ pas remplie';
                // header('Location: ../index.php');  
            } 
        }else{
            echo 'bug connexion';
        }

    

?>  