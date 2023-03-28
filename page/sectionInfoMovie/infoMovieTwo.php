<?php
$idMovieGet = $_GET['value']; 
$idMovie = movieIdCompare($idMovieGet);

?>

<div class="md:hidden mx-2">
    <div class="mt-7 mb-2 text-white text-xl font-bold">Résumé</div>
    <div class="text-white/80"><?= $idMovie['description_movie'] ?></div>
</div>

<!--Tablette-->

<div class="hidden md:block lg:hidden">
    <div class="mt-7 mb-2 text-white text-xl font-bold">Résumé</div>
    <div class="text-white/80">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima dignissimos aspernatur, similique repudiandae maxime perspiciatis ipsam? Totam aut ipsum obcaecati amet illo veniam soluta. Nemo qui quae animi distinctio minus.</div>
</div>

<!--Desktop-->

<div class="hidden mx-2 lg:block flex flex-col">
    <div class=" mt-7 mb-2 text-white text-xl font-bold">Résumé</div>
    <div class="w-full text-white/80">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima dignissimos aspernatur, similique repudiandae maxime perspiciatis ipsam? Totam aut ipsum obcaecati amet illo veniam soluta. Nemo qui quae animi distinctio minus.</div>
</div>