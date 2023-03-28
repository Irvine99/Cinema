<?php 

function userAll() {

    if(require('access.php')) {

    $userName = "SELECT * FROM users ";
    $userRequest = $conn->prepare($userName);
    $userRequest->execute();
    $userFind = $userRequest->fetchAll();
    
    return $userFind;

   
    exit;

    }
}

function movieIdCompare($idMovieGet){
    if(require('access.php')) {
        
        $movieId = "SELECT * FROM movie where Id_movie = $idMovieGet";
        $movieIdRequest = $conn->prepare($movieId);
        $movieIdRequest->execute();
        $movieIdFind = $movieIdRequest->fetch();
        
        return $movieIdFind;
    
       
        exit;
    }
}

function movieAll() {

    if(require('access.php')) {

    $movieName = "SELECT * FROM movie ";
    $movieRequest = $conn->prepare($movieName);
    $movieRequest->execute();
    $movieFind = $movieRequest->fetchAll();
    
    return $movieFind;

   
    exit;

    }
}



function insertImg() {
    
    if(include "access.php") {
    
    $path = $_SERVER['DOCUMENT_ROOT'] . '/cinema/assets/upload/';
    $messImg = [];

    if(!empty($_FILES['afficheMovie']))
    {
        $nameFile = $_FILES['afficheMovie']['name'];
        $typeFile = $_FILES['afficheMovie']['type'];
        $tmpFile = $_FILES['afficheMovie']['tmp_name'];
        $errorFile = $_FILES['afficheMovie']['error'];
        $sizeFile = $_FILES['afficheMovie']['size'];

        $extensions = ['png', 'jpg', 'jpeg', 'gif', 'jiff'];
        $type = ['afficheMovie/png', 'afficheMovie/jpg', 'afficheMovie/jpeg', 'afficheMovie/gif', 'afficheMovie/jiff'];

        $extension = explode('.', $nameFile);

        $max_size =500000;

        if(in_array($typeFile, $type))
        {
            if(count($extension) <=2 && in_array(strtolower(end($extension)), $extensions))
            {
                if($sizeFile <= $max_size && $errorFile == 0)
                {
                    if(move_uploaded_file($tmpFile, $image = '../upload/' . uniqid() . '.' . end($extension)) )
                    {
                        $_SESSION['urlImg'] = $image;
                        return  [
                        'success' => "upload  effectué !",
                        'urlImg' => $image,
                        ]
                        ;
                    }
                    else
                    {
                        return $messImg['error'] =  "Echec de l'upload de l'image !";
                    }
                }
                else
                {
                    return $messImg['error'] =  "Erreur le poids de l'image est trop élevé !";
                }
            }
            else
            {
                return $messImg['error'] =  "Merci d'upload une image !";
            }
        }
        else
        {
            return $messImg['error'] = "Type non autorisé !";
        }
    }
    return $messImg;
    var_dump($messImg);
    exit;
} 

}

function movieTable() {
    if(require("access.php")) {

    $insertMovie = "SELECT title_movie FROM movie WHERE title_movie = $inputTitle";
    $requestMovie = $conn->prepare($insertMovie);
    $requestMovie->execute($inputTitle);
    $movieFind = $requestMovie->fetch();
    var_dump($movieFind);


    return $movieFind;
    exit;
    }

}

function insertMovie() {

    $insertForm = "INSERT INTO movie (name_movie, description_movie, date_sortie_movie, budget_movie, affiche_movie)
    VALUES (?;?.?;?,?";

    $insertData = $conn->prepare($insertForm);
    $insertData->execute([
        'title' => $_POST['titleMovie'],
        'resume' => $_POST['resumeMovie'],
        'date' => $_POST['dateMovie'],
        'budget' => $_POST['budgetMovie'],
        'affiche' => $urlImg,
        
    ]);

    return $insertData;
    exit;
}

function searchTablePri() {
    if(require("access.php")) {
        // Requête SQL pour récupérer les noms des tables dans la base de données
        $sqlTables = "SHOW TABLES";
        $stmtTables = $conn->query($sqlTables);

        // Récupération des noms de tables
        $tables = $stmtTables->fetchAll(PDO::FETCH_COLUMN);

        // Requête SQL pour récupérer les noms des colonnes avec une clé primaire pour une table donnée
        $sqlColumns = "SELECT COLUMN_NAME 
                    FROM INFORMATION_SCHEMA.COLUMNS 
                    WHERE TABLE_SCHEMA = :dbName 
                        AND TABLE_NAME = :tableName 
                        AND COLUMN_KEY = 'PRI'";
        $stmtColumns = $conn->prepare($sqlColumns);

        // Récupération des noms de colonnes pour chaque table
        foreach ($tables as $tableName) {
            $stmtColumns->execute([
                'dbName' => 'nom_de_votre_base_de_donnees',
                'tableName' => $tableName
            ]);
            $results = $stmtColumns->fetchAll(PDO::FETCH_COLUMN);
            
            echo "Colonnes avec une clé primaire dans la table $tableName : " . implode(', ', $results) . "<br>";
        }

    return $results;
    exit;
    }
}


function searchTableSec() {
    if(require("access.php")) {
        // Requête SQL pour récupérer les noms des tables dans la base de données
        $sqlTables = "SHOW TABLES";
        $stmtTables = $conn->query($sqlTables);

        // Récupération des noms de tables
        $tables = $stmtTables->fetchAll(PDO::FETCH_COLUMN);

        // Requête SQL pour récupérer les noms des colonnes avec une clé primaire pour une table donnée
        $sqlColumns = "SELECT COLUMN_NAME 
                    FROM INFORMATION_SCHEMA.COLUMNS 
                    WHERE TABLE_SCHEMA = :dbName 
                        AND TABLE_NAME = :tableName 
                        AND COLUMN_KEY = 'MUL'";
        $stmtColumns = $conn->prepare($sqlColumns);

        // Récupération des noms de colonnes pour chaque table
        foreach ($tables as $tableName) {
            $stmtColumns->execute([
                'dbName' => 'nom_de_votre_base_de_donnees',
                'tableName' => $tableName
            ]);
            $resultsSec = $stmtColumns->fetchAll(PDO::FETCH_COLUMN);
            
            echo "Colonnes avec une clé étrangère dans la table $tableName : " . implode(', ', $resultsSec) . "<br>";
        }

    return $resultsSec;
    exit;
    }
}

function searchCategorie() {
    if(require('access.php')) {
        $cate = "SELECT * FROM category ORDER BY name_category";
        $requestCate = $conn->prepare($cate);
        $requestCate->execute();
        $findCate = $requestCate->fetchALL();

        return $findCate;
        exit;
    }
}
?>