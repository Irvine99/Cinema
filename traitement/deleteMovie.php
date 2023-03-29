<?php 
if($_POST['movieId']) {

    $movieId = ($_POST['movieId']);
        if(require('./access.php')) {
        $delete = "DELETE FROM movie WHERE Id_movie = :movieId";
        $request = $conn->prepare($delete);
        $request->bindParam(':movieId', $movieId);
        $request->execute();

        if($request->rowCount() > 0) {
            echo "C'est Delete, wesh trop bien, tom paye moi un café";
        } else {
            echo "Aucune entrée";
        }
    }
}
?>    