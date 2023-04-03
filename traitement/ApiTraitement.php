<?php

if(require('access.php')) {
    if($_POST) {


    $movie_id = $_POST['movie_id'];
    $title = $_POST['title'];
    $overview = $_POST['overview'];
    $genres = $_POST['genres'];
    $release_date = $_POST['release_date'];
    $poster_path = $_POST['poster_path'];
    $runtime = $_POST['runtime'];
    $director = $_POST['director'];
    $producer = $_POST['producer'];
    $cast = $_POST['cast'];
    var_dump($_POST);


    }}    
?>


