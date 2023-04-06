<?php



?>


<div class="md:hidden">
    <div class="h-auto bg-cover bg-[url('<?= $movie['affiche_movie'] ?>')]">
        <div class="flex bg-[#1C1A29]/80 h-full">    
            <div class="mx-2 flex justify-between  my-5">
                <div class="flex w-1/2  flex-col ">
                    <h1 class=" text-white text-xl mb-5 font-bold"><?= $movie['name_movie'] ?></h1>
                    <div class="flex flex-col">
                        <div class="flex gap-3">
                            <img class="w-[25px] h-[25px]" src="./../assets/img/hourglass.png" alt="" class="">
                            <h3 class="text-white/80 text-md font-light">1 h 39 minute(s)</h3>
                        </div>
                        <div class="flex gap-3">
                            <img class="w-[25px] h-[25px]" src="./../assets/img/tags.png" alt="" class="">
                            <li class="flex flex-row gap-2">
                            <?php
                            
                            foreach ($categories as $categorie) { ?>
                                <ul class="text-white/80 text-sm font-light"><?= $categorie['name_category'] ?></ul>
                           <?php }
                            ?>
                            </li>
                        </div>

                        <div class="flex gap-3 items-center">
                            <img class="w-[25px] h-[25px]" src="./../assets/img/star.png" alt="" class="">
                            <h3 class="text-white/80 text-md font-light">8.9/10 sur IMDB</h3>
                        </div>
                        <div class="flex gap-3 items-center">
                            <img class="w-[25px] h-[25px]" src="./../assets/img/like.png" alt="" class="">
                            <h3 class="text-white/80  text-md font-light">98% des utilisateurs</h3>
                        </div>
                    </div>
                    <button class="bg-[#E82626] w-1/2 mt-5  rounded-lg text-white py-1 px-4">Regarder</button>
                </div>
                <div class="w-1/2">
                    <img  src="<?= $movie['affiche_movie'] ?>" alt="" class="rounded-lg  h-full w-full">
                </div>
                
            </div>
        </div>
    </div>
</div>

<!--Tablette-->
<div class="hidden md:block lg:hidden">
    <div class="">
        <h1 class="text-3xl text-center font-bold mt-5"><?= $movie['name_movie'] ?></h1>
        <div class="mx-2 flex my-5">
             <div class="w-[60%] items-center flex mr-5">
                <img  src="<?= $movie['affiche_movie'] ?>" alt="" class="rounded-lg block h-full w-full">
            </div>            
            <div class="w-[40%] flex flex-col ">
                <h1 class=" text-white text-xl font-bold">Informations</h1>
                <div class="flex flex-col gap-1">
                    <div class="flex gap-2">
                        <img class="w-[25px] h-[25px]" src="./../assets/img/hourglass.png" alt="" class="">
                        <h3 class="text-white/80 text-sm font-light">1 h 39 minute(s)</h3>
                    </div>
                    <div class="flex gap-2">
                        <img class="w-[25px] h-[25px]" src="./../assets/img/tags.png" alt="" class="">
                        <li class="flex flex-row gap-2">
                        <?php
                            
                            foreach ($categories as $categorie) { ?>
                                <ul class="text-white/80 text-sm font-light"><?= $categorie['name_category'] ?></ul>
                           <?php }
                            ?>
                        </li>
                    </div>

                    <div class="flex gap-2 items-center">
                        <img class="w-[25px] h-[25px]" src="./../assets/img/star.png" alt="" class="">
                        <h3 class="text-white/80 text-sm font-light">8.9/10 sur IMDB</h3>
                    </div>
                    <div class="flex gap-2 items-center">
                        <img class="w-[25px] h-[25px]" src="./../assets/img/like.png" alt="" class="">
                        <h3 class="text-white/80  text-sm font-light">98% des utilisateurs</h3>
                    </div>
                </div>
                <button class="bg-[#E82626]  rounded-lg text-white py-1  w-[30%] mt-4">Regarder</button>
                <div class="flex flex-col">
                    <div class=""><?php include('./sectionInfoMovie/infoMovieThree.php'); ?></div>
                    <div class=""><?php include('./sectionInfoMovie/infoMovieTwo.php'); ?></div>
                </div>
                <?php include('./sectionInfoMovie/infoMovieFour.php'); ?>
            </div>
        </div>
    </div>
</div>

<!--Desktop-->
<div class="hidden lg:block">
    <div class="h-auto bg-cover bg-[url(<?= $movie['affiche_movie'] ?>)]">
        <div class="flex flex-col bg-[#1C1A29]/80 h-full">
        <h1 class="text-5xl text-center font-bold py-5"><?= $movie['name_movie'] ?></h1>
        <div class="h-[500px] mx-2 flex my-5">
             <div class=" justify-center items-center flex mr-5">
                <img  src="<?= $movie['affiche_movie'] ?>" alt="" class="rounded-lg block h-full w-auto">
            </div>            
            <div class="w-[60%] flex flex-col ">
                <h1 class=" text-white text-2xl mb-5 font-bold">Informations</h1>
                <div class="flex flex-col gap-1">
                    <div class="flex gap-2">
                        <img class="w-[25px] h-[25px]" src="./../assets/img/hourglass.png" alt="" class="">
                        <h3 class="text-white/80 text-sm font-light">1 h 39 minute(s)</h3>
                    </div>
                    <div class="flex gap-2">
                        <img class="w-[25px] h-[25px]" src="./../assets/img/tags.png" alt="" class="">
                        <li class="flex flex-row gap-2">
                            <?php
                            
                            foreach ($categories as $categorie) { ?>
                                <ul class="text-white/80 text-sm font-light"><?= $categorie['name_category'] ?></ul>
                           <?php }
                            ?>
                     
                        </li>
                    </div>

                    <div class="flex gap-2 items-center">
                        <img class="w-[25px] h-[25px]" src="./../assets/img/star.png" alt="" class="">
                        <h3 class="text-white/80 text-sm font-light">8.9/10 sur IMDB</h3>
                    </div>
                    <div class="flex gap-2 items-center">
                        <img class="w-[25px] h-[25px]" src="./../assets/img/like.png" alt="" class="">
                        <h3 class="text-white/80  text-sm font-light">98% des utilisateurs</h3>
                    </div>
                </div>
                <button class="bg-[#E82626]  rounded-lg text-white py-1 px-2 w-1/4 mt-4">Regarder</button>
                <div class="flex flex-col">
                    
                    <div class=""><?php include('./sectionInfoMovie/infoMovieThree.php'); ?></div>
                </div>
                
                </div>        
            </div>
        </div>
    </div>
</div>