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
     <div class="flex flex-col justify-center items-center">
        <div class="bg-[#1C1A29]/80 p-1 rounded-lg md:w-1/2 lg:w-1/3 w-3/4">

        
         <form enctype="multipart/form-data" action="../traitement/insertMovie.php" method="post">
         <?php include('./sectionInsertMovie/movieOne.php') ?>
         <?php include('./sectionInsertMovie/movieTwo.php') ?>
         <?php include('./sectionInsertMovie/movieThree.php') ?>
            <!-- <div class="">
                <h1 class="mx-2 text-md md:text-2xl">Ajout d'un film</h1>
                <div class=" mx-2 mt-5 flex-col flex">
                    <label for="">Titre du film</label>
                    <input name="titleMovie" class="mt-2 w-3/4 bg-[#5E5E5E]/80 rounded-lg" type="text">
                </div>
                <div class=" mx-2 mt-5 flex-col flex">
                    <label for="">Sypnosis du film</label>
                    <textarea name="resumeMovie" class="mt-2 w-3/4 bg-[#5E5E5E]/80 rounded-lg" name="" id="" cols="30" rows="10"></textarea>
                </div>
                <div class=" mx-2 mt-5 flex-col flex">
                    <label for="">date de sortie du film</label>
                    <input name="dateMovie" class="mt-2 w-3/4 bg-[#5E5E5E]/80 rounded-lg" type="date">
                </div>
                <div class=" mx-2 mt-5 flex-col flex">
                    <label for="">budget du film</label>
                    <input name="budgetMovie" class="mt-2 w-3/4 bg-[#5E5E5E]/80 rounded-lg" type="number">
                </div>
                <div class=" mx-2 mt-5 flex-col flex">
                    <label for="">budget du film</label>
                    <input type="file" name="afficheMovie" id="affiche">
                </div>
                <div class="flex justify-center mt-5">
                    <button class="bg-[#5E5E5E]/80 p-2 rounded-lg mb-5" type="submit">Envoyer</button>
                </div>

                
            </div> -->
         </form>
            
            
        </div>    
     </div>     
    </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

</html>