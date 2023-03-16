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
     <div class="py-5 flex flex-col justify-center items-center">
        <img class="rounded-full h-[150px] w-[150px]" src="./../assets/img/henrycavil.jpg" alt="">
        <div class="flex gap-2 pt-1 ">
            <h3 class="text-xl">Stanislas</h3>
            <h3 class="text-xl">Gerardin</h3>
        </div>
     </div>
     <div class="flex flex-col justify-center items-center">
        <div class="bg-[#1C1A29]/80 p-1 rounded-lg w-3/4">
            <h1 class="text-xl mb-7 font-bold py-2 text-center">Modification de votre compte</h1>
            <div class="mx-2 flex flex-col gap-1">
                <h3 class="text-white/80">Modifier votre Prénom</h3>
                <h3 class="text-white/80">Modifier votre Nom</h3>
            </div>
            <h1 class="mt-7 mb-2 text-xl mb-7 font-bold py-2 text-center">Information de votre compte</h1>
            <div class="mx-2 flex gap-1">
                <h3 class="text-white/80">Votre email : </h3>
                <h3 class="text-white/80">Bougou@bougou.com </h3>
                
            </div>
            <h1 class="mt-7 mb-2 text-xl mb-7 font-bold py-2 text-center">Suppression de votre compte</h1>
            <div class="mb-3 flex justify-start mx-2 flex gap-1">
                <a class ="bg-[#E82626] text-white py-1 px-4 rounded-lg" href="http://">Supprimer</a>
                
            </div>
            
            
        </div>    
     </div>     
    </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</html>