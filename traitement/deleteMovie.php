<?php 
if($_POST['movieId']) {

    $movieId = ($_POST['movieId']);
    if(require('./access.php')) {
        $delete = "DELETE movie, movie_actor, movie_category, movie_director, producer_movie  FROM movie
        INNER JOIN movie_actor ON movie.Id_movie = movie_actor.Id_movie
        INNER JOIN movie_category ON movie.Id_movie = movie_category.Id_movie
        INNER JOIN movie_director ON movie.Id_movie = movie_director.Id_movie
        INNER JOIN producer_movie ON movie.Id_movie = producer_movie.Id_movie
        WHERE movie.Id_movie = :movieId";
        $request = $conn->prepare($delete);
        $request->bindParam(':movieId', $movieId);
        $request->execute();
    
        if($request->rowCount() > 0) {
            echo "C'est Delete, wesh trop bien, tom paye moi un café";
            header('Location: ../admin/moviePage.php');
        } else {
            echo "Aucune entrée";
        }
    }
} 
?>    