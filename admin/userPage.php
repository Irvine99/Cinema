<?php session_start() ?>

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
        <a href="./../page/accueil.php"><img src="./../assets/img/back.png" alt="" class="pt-3 pl-3"></a>
     </div>   
     <div class="py-5 flex flex-col justify-center items-center">
        <img class="rounded-full h-[150px] w-[150px]" src="./../assets/img/henrycavil.jpg" alt="">
        <div class="flex gap-2 pt-1 ">
            <h3 class="text-xl"><?= $_SESSION['username'] ?></h3>
            <h3 class="text-xl"><?= $_SESSION['name'] ?></h3>
        </div>
     </div>
     <div class="flex flex-col justify-center items-center">
        <div class="bg-[#1C1A29]/80 p-1 rounded-lg md:w-1/2 lg:w-1/3 w-3/4">
            

            
            
        </div>    
     </div>     
    </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</html>