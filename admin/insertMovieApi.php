<?php session_start() ?>
<?php include('../traitement/function.php'); ?>
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
            gray: '#5E5E5E',
            black: '#1C1A29',
            red: '#E82626',
            lightBlue: '#38354B',
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

    <title>Acceuil</title>
</head>
<body class="h-screen bg-[url('./../assets/img/wallpaper.jpg')]">

    <div class="min-h-full bg-black/70">
     <div class="">
        <a href="./../page/accueil.php"><img src="./../assets/img/back2.png" alt="" class="pt-3 pl-3"></a>
     </div>   
     <div class="py-5 flex flex-col justify-center items-center">

        <?php

        ?>
     </div>
     <div class="w-full flex flex-col justify-center items-center">
        <div class="w-full flex flex-col items-center justify-center">
            <div class="flex justify-center items-center">
             <?php include('../content/stepForm.php'); ?> 
            </div>

            <div class="bg-[#1C1A29]/80 p-1 rounded-lg flex py-2 w-[90%] md:w-1/2 ">
              <div class="flex justify-between w-full mx-10">
                <div class=" flex flex-col w-full">
                <form id="movie-search-form">
                    <h1>Recherche de films</h1>
                    <input class='text-black' type="text" id="search" placeholder="Rechercher un film...">
                    <select class='text-black' id="movies" placeholder="Sélectionnez un film...">
                        <option class='text-black' value="">Sélectionnez un film</option>
                    </select>
                    <div id="movie-details"></div>
                    <button type="button" id="send-movie-data">Envoyer</button>
                </form>
                <button class="mt-2 w-3/4 bg-[#5E5E5E]/80 rounded-lg" type="submit">Envoyer</button>
                </div>
            </div>
            
        </div>
       

            
            
        </div>    
     </div>     
    </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="../assets/js/inputCheck.js"></script>
<script src="../assets/js/formMovieButton.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../assets/js/research.js"></script>

</html>