<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link rel="stylesheet" href="./../assets/css/main.css">
    

        <!--Tailwind-->
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
        tailwind.config = {
        theme: {
            extend: {
            colors: {
                red: '#E82626',
                gray: '#5E5E5E',
                darkblue: '#1C1A29',
            },
            screens: {
            sm: '500px',
            },
        }
        }
    </script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <!--Flowbite-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css"  rel="stylesheet" />
    <!--Swiper-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    <title>InfoMovie</title>
</head>
<body class="bg-[#1C1A29]">
    <div class="hidden md:block">
      <?php include('../content/navbar.php') ?>
    </div>
    <div class="md:hidden">
        <!-- <img  class="h-auto w-auto opacity-20" src="./../assets/img/pikadetective.jpg" alt="" class=""> -->
        <div>
            <?php include('./sectionInfoMovie/infoMovieOne.php'); ?>
            <?php include('./sectionInfoMovie/infoMovieTwo.php'); ?>
            <?php include('./sectionInfoMovie/infoMovieThree.php'); ?>
            
            <?php include('./sectionInfoMovie/infoMovieFour.php'); ?>
            <?php include('./sectionInfoMovie/infoMovieFive.php'); ?>
            <?php include('./sectionInfoMovie/infoMovieSix.php'); ?>
            <?php include('./sectionInfoMovie/infoMovieSeven.php'); ?>
        </div>   
    </div>
    <div class="hidden md:block lg:hidden">
    
        <?php include('./sectionInfoMovie/infoMovieOne.php'); ?>
        <?php include('./sectionInfoMovie/infoMovieSix.php'); ?>
        <?php include('./sectionInfoMovie/infoMovieSeven.php'); ?>
    </div>


    
    <div class="hidden lg:block">
     <?php include('./sectionInfoMovie/infoMovieOne.php'); ?>
     <?php include('./sectionInfoMovie/infoMovieTwo.php'); ?>
     <?php include('./sectionInfoMovie/infoMovieFour.php'); ?>
     <?php include('./sectionInfoMovie/infoMovieFive.php'); ?>
     <?php include('./sectionInfoMovie/infoMovieSix.php'); ?>
     <?php include('./sectionInfoMovie/infoMovieSeven.php'); ?>
    </div>    
    <footer>
    <div class="hidden md:block">
    <?php include('../content/footer.php') ?>
    </div>
    <div class="md:hidden">
        <?php include('../content/navbar.php') ?>
    </div>
    
    </footer>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

</html>