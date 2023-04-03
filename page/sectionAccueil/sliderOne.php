<div class="md:hidden">
  <!--Slider-->


<swiper-container class="mySwiper"  slides-per-view="1.5"
    space-between="20" free-mode="true">
    <?php 
    $movies = movieAll();
    foreach ($movies as $movie) { ?>
      <swiper-slide><a value=" ?>" href="./infoMovie.php?value=<?php echo urlencode($movie['Id_movie']);?>"><img class="w-auto h-[10%]" src="<?= $movie['affiche_movie'] ?>" alt="" class=""></a></swiper-slide>
    <?php } ?>
      
    
    

    </swiper-container>


  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
</div>

<!--Tablette-->

<div class="hidden md:block lg:hidden">
  <!--Slider-->


<swiper-container class="mySwiper"  slides-per-view="4"
    space-between="20" free-mode="true">
    <?php 
    $movies = movieAll();
    foreach ($movies as $movie) { ?>
      <swiper-slide><a href="./infoMovie.php?value=<?php echo urlencode($movie['Id_movie']);?>"><img class="w-auto h-[10%]" src="<?= $movie['affiche_movie'] ?>" alt="" class=""></a></swiper-slide>
    <?php } ?>


    </swiper-container>


  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
</div>

<!--Desktop-->

<div class="mt-20 hidden lg:block">
  <!--Slider-->

<h1 class="text-3xl mb-2">Derniere sortie</h1>
<swiper-container class="mySwiper"  slides-per-view="5"
    space-between="20" free-mode="true">
    <?php 
    $movies = movieAll();
    foreach ($movies as $movie) { ?>
      <swiper-slide><a href="./infoMovie.php?value=<?php echo urlencode($movie['Id_movie']);?>"><img class="w-auto h-[10%]" src="<?= $movie['affiche_movie'] ?>" alt="" class=""></a></swiper-slide>
    <?php } ?>

    </swiper-container>


  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
</div>