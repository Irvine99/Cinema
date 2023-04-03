<?php


?>

<div class="md:hidden mx-2">
    <div class="mt-7 mb-2 text-white text-xl font-bold">Résumé</div>
    <div class="text-white/80"><?= $movie['description_movie'] ?></div>
</div>

<!--Tablette-->

<div class="hidden md:block lg:hidden">
    <div class="mt-7 mb-2 text-white text-xl font-bold">Résumé</div>
    <div class="text-white/80"><?= $movie['description_movie'] ?></div>
</div>

<!--Desktop-->

<div class="hidden mx-2 lg:block flex flex-col">
    <div class=" mt-7 mb-2 text-white text-xl font-bold">Résumé</div>
    <div class="w-full text-white/80"><?= $movie['description_movie'] ?></div>
</div>