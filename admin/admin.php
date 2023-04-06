<?php session_start() ?>
<?php include('../traitement/function.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../assets/css/sliderOne.css">
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
    <div class="h-full bg-black/70">
    <div class="">
        <a href="../page/accueil.php"><div class=" p-4"><img class="w-[25px] h-[25px]" src="./../assets/img/back2.png" alt=""></div></a>
     </div>   
     <div class="py-5 flex flex-col justify-center items-center">
        <img class="rounded-full h-[150px] w-[150px]" src="./../assets/img/pikahead.jpg" alt="">
        <div class="flex gap-2 pt-1 ">
            <h3 class="text-xl"><?= $_SESSION['username'] ?></h3>
            <h3 class="text-xl"><?= $_SESSION['name'] ?></h3>
        </div>
     </div>
     <div class="flex flex-col justify-center items-center">
        <div class="bg-[#1C1A29]/80 p-1 rounded-lg md:w-1/2 lg:w-1/3 w-3/4">
            <div class="">
                <div class="mx-2">
                    <h1 class="text-white text-2xl mb-2">Partie Administrative</h1>
                    
                    <a href="./userPage.php"><h3 class="hover:text-blue-500">Voir les Utlisateurs</h3></a>
                    <a href="./moviePage.php"><h3 class="hover:text-blue-500">Voir les Films</h3></a>
                </div>
                <div class="mx-2 mt-10">
                    <h1 class="text-white  text-2xl mb-2">Partie Formulaire</h1>
                    <a href="./insertMovie.php"><h3 class="text-white  hover:text-blue-500">Ajouter un film</h3></a>
                    <a href="./insertActor.php"><h3 class="text-white  hover:text-blue-500">Ajouter un acteur</h3></a>
                    <a href="./insertMovie.php"><h3 class="text-white  hover:text-blue-500">Ajouter un producteur/réalisateur</h3></a>


                </div>
                <h1 class="mt-7 mb-2 text-xl mb-7 font-bold py-2 text-center">Vous deconnecter</h1>
                <div class="mb-3 flex justify-start mx-2 flex gap-1">
                <a  class ="bg-[#E82626] text-white py-1 px-4 rounded-lg" href="../traitement/logOut.php">Deconnection</a>
                </div>
 
            </div>
            <?php 

            ?>
            
        </div>    
     </div>     
    </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../assets/js/research.js"></script>
</html>