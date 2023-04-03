<?php 
if($_POST) {

    
    $idActor = $_POST['idActor'];
    var_dump($_POST);

    if(require('./access.php')) {
        $delete = "DELETE actor,movie_actor  FROM actor
        LEFT JOIN movie_actor ON actor.Id_actor = movie_actor.Id_actor

        WHERE actor.Id_actor = :idActor";
        $request = $conn->prepare($delete);
        $request->bindParam(':idActor', $idActor);
        $request->execute();
    

        echo "C'est Delete, wesh trop bien, tom paye moi un café";
        header('Location: ../admin/insertActor.php');

            
        
    }else{
        echo "Aucune entrée";
    }
} 
?>    