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
function sameMovieCat(){
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

    $movieName = "SELECT * FROM movie ORDER BY Id_movie DESC ";
    $movieRequest = $conn->prepare($movieName);
    $movieRequest->execute();
    $movieFind = $movieRequest->fetchAll();
    
    return $movieFind;

   
    exit;

    }
}
function movieSameCat($Id_category) {

    if(require('access.php')) {

    $movieName = "SELECT * FROM movie 
    INNER JOIN movie_category ON movie_category.Id_category = category.Id_category
    WHERE movie_category.Id_category = ?";
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
    require('access.php');
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

function movieCategorie($idCat) {
    if(require('access.php')) {
        $cate = "SELECT * FROM category ORDER BY name_category ";
        $requestCate = $conn->prepare($cate);
        $requestCate->execute();
        $findCate = $requestCate->fetchALL();

        return $findCate;
        exit;
    }
}
function searchMovie() {
    if(require('access.php')) {
        $movie = "SELECT * FROM movie ORDER BY Id_movie";
        $requestmovie = $conn->prepare($movie);
        $requestmovie->execute();
        $findmovie = $requestmovie->fetchALL();

        return $findmovie;
        exit;
    }
}

function searchProducer() {
    if(require('access.php')) {
        $producer = "SELECT * FROM producer ORDER BY name_producer";
        $requestproducer = $conn->prepare($producer);
        $requestproducer->execute();
        $findproducer = $requestproducer->fetchALL();

        return $findproducer;
        exit;
    }
}


function searchMovies($idMovie) {
    if(require('access.php')) {
        $movies = "SELECT movie.*, mc.Id_category IS NOT NULL AS lie_au_film
        FROM movie
        LEFT JOIN movie_category mc ON movie.Id_movie = mc.Id_category AND mc.Id_category = ?";
        $requestactor = $conn->prepare($movies);
        $requestactor->execute([$idMovie]);
        $findactor = $requestactor->fetchALL();

        return $findactor;
        exit;
    }
}

function searchActors($idMovie) {
    if(require('access.php')) {
        $actor = "SELECT actor.*, ma.Id_movie IS NOT NULL AS lie_au_film
        FROM actor
        LEFT JOIN movie_actor ma ON actor.Id_actor = ma.Id_actor AND ma.Id_movie = ?";
        $requestactor = $conn->prepare($actor);
        $requestactor->execute([$idMovie]);
        $findactor = $requestactor->fetchALL();

        return $findactor;
        exit;
    }
}
function searchProducers($idMovie) {
    if(require('access.php')) {
        $producers = "SELECT producer.*, pm.Id_movie IS NOT NULL AS lie_au_film
        FROM producer
        LEFT JOIN producer_movie pm ON producer.Id_producer = pm.Id_producer AND pm.Id_movie = ?";
        $requestProducer = $conn->prepare($producers);
        $requestProducer->execute([$idMovie]);
        $findProducer = $requestProducer->fetchALL();

        return $findProducer;
        exit;
    }
}
function searchDirectors($idMovie) {
    if(require('access.php')) {
        $directors = "SELECT director.*, md.Id_movie IS NOT NULL AS lie_au_film
        FROM director
        LEFT JOIN movie_director md ON director.Id_director = md.Id_director AND md.Id_movie = ?";
        $requestDirector = $conn->prepare($directors);
        $requestDirector->execute([$idMovie]);
        $findDirector = $requestDirector->fetchALL();

        return $findDirector;
        exit;
    }
}
function searchCategories($idMovie) {
    if(require('access.php')) {
        $categories = "SELECT category.*, mc.Id_movie IS NOT NULL AS lie_au_film
        FROM category
        LEFT JOIN movie_category mc ON category.Id_category = mc.Id_category AND mc.Id_movie = ?";
        $requestCategory = $conn->prepare($categories);
        $requestCategory->execute([$idMovie]);
        $findCategory = $requestCategory->fetchALL();

        return $findCategory;
        exit;
    }
}
function searchActor() {
    if(require('access.php')) {
        $actor = "SELECT * FROM actor ORDER BY name_actor";
        $requestactor = $conn->prepare($actor);
        $requestactor->execute();
        $findactor = $requestactor->fetchALL();

        return $findactor;
        exit;
    }
}

// function OneActor() {
//     $actors = searchActor();
    
//     foreach ($actors as $actor) {
        
//         $actorName = [
//             'actor_name' => $actor['actor_name'],
//             'Id_actor' => $actor['Id_actor'],
//         ];
        
        
//     }
    
//     return $actorName;
// }


function searchDirector() {
    if(require('access.php')) {
        $director = "SELECT * FROM director ORDER BY name_director";
        $requestdirector = $conn->prepare($director);
        $requestdirector->execute();
        $finddirector = $requestdirector->fetchALL();

        return $finddirector;
        exit;
    }
}


// Function du MEGAFORM //


function verifHtml() {

    $titlemMovie = htmlspecialchars($_POST['titleMovie']);
    $resumeMovie = htmlspecialchars($_POST['resumeMovie']);
    $dateMovie = htmlspecialchars($_POST['dateMovie']);
    $budgetMovie = htmlspecialchars($_POST['budgetMovie']);
// Check le tableau des Acteurs
    $checkActors = isset($_POST['checkActor']) ? $_POST['checkActor'] : array();
    foreach ($checkActors as &$checkActor) {
    $checkActor = htmlspecialchars($checkActor);
    }
// Check le tableau des roles
    $roleActors = isset($_POST['roleActor']) ? $_POST['roleActor'] : array();
    foreach ($roleActors as &$roleActor) {
    $roleActor = htmlspecialchars($roleActor);
    }
// Check le tableau producer
    $roleProducers = isset($_POST['checkProducer']) ? $_POST['checkProducer'] : array();
    foreach ($roleProducers as &$roleProducer) {
    $roleProducer = htmlspecialchars($roleProducer);
    }
// Check le tableau director
    $roleDirectors = isset($_POST['checkDirector']) ? $_POST['checkDirector'] : array();
    foreach ($roleDirectors as &$roleDirector) {
    $roleDirector = htmlspecialchars($roleDirector);
    }
// Check le tableau director
    $categories = isset($_POST['checkCategory']) ? $_POST['checkCategory'] : array();
    foreach ($categories as $categorie) {
    $categorie = htmlspecialchars($categorie);
    }

    $linkIdYt = htmlspecialchars($_POST['linkIdYt']);



    return $movies = [
       'titlemMovie' => $titlemMovie,
       'resumeMovie' => $resumeMovie,
       'dateMovie' => $dateMovie,
       'budgetMovie' => $budgetMovie,
       'checkActors' => $checkActors,
       'roleActors' => $roleActors,
       'roleProducers' => $roleProducers,
       'roleDirectors' => $roleDirectors,
       'linkIdYt' => $linkIdYt,
       'categorie' => $categories,
    ];
    exit;    
}

function getRelatedColumns() {
    if(require('access.php')) {

    try {


        
        // Requête SQL pour récupérer les colonnes liées à la clé primaire de la table `id_movie`
        $sql = "SELECT 
                    t.table_name AS 'Nom de la table',
                    c.column_name AS 'Nom de la colonne',
                    c.data_type AS 'Type de données'
                FROM 
                    information_schema.columns c 
                    JOIN information_schema.tables t ON c.table_name = t.table_name
                    JOIN information_schema.key_column_usage kcu ON c.table_name = kcu.table_name AND c.column_name = kcu.column_name
                WHERE 
                    kcu.constraint_name IN (
                        SELECT constraint_name 
                        FROM information_schema.table_constraints 
                        WHERE table_name = 'movie' AND constraint_type = 'PRIMARY KEY'
                    )";

        $stmt = $conn->query($sql);

        // Récupération des résultats de la requête sous forme d'un tableau
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Fermeture de la connexion à la base de données
        $conn = null;

        // Retourner les résultats
        return $results;
    } catch(PDOException $e) {
        echo "Erreur de connexion à la base de données: " . $e->getMessage();
    }
}
}

function getRelatedData($Id_movie) {
    if (require('access.php')) {

        try {

            $sql = "SELECT TABLE_NAME 
                    FROM INFORMATION_SCHEMA.COLUMNS 
                    WHERE COLUMN_NAME = 'Id_movie' 
                      AND TABLE_SCHEMA = 'cinema'";

            // Connexion à la base de données

            // Définir le mode d'erreur PDO sur Exception


            // Exécution de la requête SQL
            $stmt = $conn->query($sql);

            // Récupération des résultats de la requête sous forme d'un tableau
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Parcourir chaque résultat et récupérer les données liées à l'id_movie de chaque table
            $tableResults = array();
            foreach ($results as $result) {
                // Récupérer le nom de la table à partir du tableau associatif
                $tableName = $result['TABLE_NAME'];

                // Requête SQL pour récupérer les données liées à l'id_movie de chaque table
                $bdd = "SELECT * FROM $tableName WHERE Id_movie = $Id_movie";

                // Exécution de la requête SQL
                $request = $conn->query($bdd);

                // Récupération des résultats de la requête sous forme d'un tableau
                $tableResults[$tableName] = $request->fetchAll(PDO::FETCH_ASSOC);
            }

            // Fermeture de la connexion à la base de données
            $conn = null;

            // Retourner les résultats
            return $tableResults;

        } catch(PDOException $e) {
            echo "Erreur de connexion à la base de données : " . $e->getMessage();
        }
    }
}

function refacto_array($data) {
    $result = array();
    
    // Récupération des informations sur le film
    $movie = $data['movie'][0];
    $result['Id_movie'] = $movie['Id_movie'];
    $result['name_movie'] = $movie['name_movie'];
    $result['description_movie'] = $movie['description_movie'];
    $result['date_sortie_movie'] = $movie['date_sortie_movie'];
    $result['budget_movie'] = $movie['budget_movie'];
    $result['affiche_movie'] = $movie['affiche_movie'];
    
    // Récupération des informations sur les acteurs
    $actors = array();
    foreach ($data['movie_actor'] as $movie_actor) {
        $actors[] = array(
            'Id_actor' => $movie_actor['Id_actor'],
            'role_actor' => $movie_actor['role_actor']
        );
    }
    $result['actors'] = $actors;
    
    // Récupération des informations sur les catégories
    $categories = array();
    foreach ($data['movie_category'] as $movie_category) {
        $categories[] = $movie_category['Id_category'];
    }
    $result['categories'] = $categories;
    
    // Récupération des informations sur le réalisateur
    $directors = array();
    foreach ($data['movie_director'] as $movie_director) {
        $directors[] = $movie_director['Id_director'];
    }
    $result['directors'] = $directors;
    
    // Récupération des informations sur les producteurs
    $producers = array();
    foreach ($data['producer_movie'] as $producer_movie) {
        $producers[] = $producer_movie['Id_producer'];
    }
    $result['producers'] = $producers;
    
    return $result;
}

function getMovieCategories($id_movie, $pdo) {
    $stmt = $pdo->prepare("
        SELECT category.*
        FROM movie_category 
        INNER JOIN category 
        ON movie_category.Id_category = category.Id_category 
        WHERE movie_category.Id_movie = ?
    ");
    $stmt->execute([$id_movie]);
    $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $categories;
}

function infoMovie($idMovie) {
    if(require('access.php')) {
        
        $movie = "SELECT * FROM movie
        WHERE movie.Id_movie = ?";
        $requestMovie = $conn->prepare($movie);
        $requestMovie->execute([$idMovie]);
        $findMovie = $requestMovie->fetch();


        $movieActor = "SELECT * FROM actor
        INNER JOIN movie_actor ON movie_actor.Id_actor = actor.Id_actor
        WHERE movie_actor.Id_movie = ?";
        $requestActor = $conn->prepare($movieActor);
        $requestActor->execute([$idMovie]);
        $findActor = $requestActor->fetchALL();


        $movieProducer = "SELECT * FROM producer
        INNER JOIN producer_movie ON producer_movie.Id_producer = producer.Id_producer
        WHERE producer_movie.Id_movie = ?";
        $requestProducer = $conn->prepare($movieProducer);
        $requestProducer->execute([$idMovie]);
        $findProducer = $requestProducer->fetchALL();


        $movieDirector = "SELECT * FROM director
        INNER JOIN movie_director ON movie_director.Id_director = director.Id_director
        WHERE movie_director.Id_movie = ?";
        $requestDirector = $conn->prepare($movieDirector);
        $requestDirector->execute([$idMovie]);
        $findDirector = $requestDirector->fetchALL();
 

        $movieCategorie = "SELECT * FROM category
        INNER JOIN movie_category ON movie_category.Id_category = category.Id_category
        WHERE movie_category.Id_movie = ?";
        $requestCategorie = $conn->prepare($movieCategorie);
        $requestCategorie->execute([$idMovie]);
        $findCategorie = $requestCategorie->fetchALL();
        
        $movieVideo = "SELECT * FROM url_movie
        WHERE url_movie.Id_movie = ?";
        $requestVideo = $conn->prepare($movieVideo);
        $requestVideo->execute([$idMovie]);
        $findVideo = $requestVideo->fetchALL();
    

        $dataMovie = $findMovie;
        
        return $dataMovie += [
            'actors[]' => $findActor,
            'producers[]' => $findProducer,
            'directors[]' => $findDirector,
            'categories[]' => $findCategorie,
            'links[]' => $findVideo,  
        ]; 
        
        
    }
}

// SELECT actor.*, ma.Id_movie IS NOT NULL AS lie_au_film
// FROM actor
// LEFT JOIN movie_actor ma ON actor.Id_actor = ma.Id_actor AND ma.Id_movie = 1
?>