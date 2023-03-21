<?php 

function userAll() {

    if(require('/access.php')) {

    $userName = "SELECT * FROM users ";
    $userRequest = $conn->prepare($userName);
    $userRequest->execute();
    $userFind = $userRequest->fetchAll();

    return $userFind;
   
    exit;

    }
}

function processForm() {


}

?>