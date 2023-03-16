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
                darkblue: '#1C1A29'
            }
            }
        }
        }
    </script>

    <!--Flowbite-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css"  rel="stylesheet" />
    <!--Swiper-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    <title>InfoMovie</title>
</head>
<body class="bg-[#1C1A29]">
    <div class="md:hidden">
        <img class="h-[500px] w-auto opacity-20" src="./../assets/img/pikadetective.jpg" alt="" class="">
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
        <img class="h-screen w-full opacity-20" src="./../assets/img/pikadetective.jpg" alt="" class="">
    </div>
    <div class="hidden lg:block">
        <div class="h-[800px] w-auto bg-cover bg-fixed bg-[url('./../assets/img/pikadetective.jpg')]">
            <div class="bg-[#1C1A29]/80 h-full"></div>
        </div>
        <?php include('./sectionInfoMovie/infoMovieOne.php'); ?>
        <?php include('./sectionInfoMovie/infoMovieFive.php'); ?>
    </div>    
    <header>
        <?php include('../content/navbar.php') ?>
    </header>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</html>