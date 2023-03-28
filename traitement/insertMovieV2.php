<?php 

require_once('./access.php');



if($_POST['input']) {
    

    $input = $_POST['input'];
    
    $search = "SELECT * FROM users WHERE username LIKE '{$input}%'";
    $request = $conn->prepare($search);
    $request->execute();
    $findName = $request->fetch();
    echo $findName['username'];
}



?>