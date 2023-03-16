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
    <img src="./../assets/img/Logo.png" alt="" class="mb-10">
     <div class="flex flex-col justify-center items-center">
        <div class="bg-[#1C1A29]/80 p-1 rounded-lg w-3/4">
            <h1 class="text-xl mb-7 font-bold py-2 text-center">Identifiez vous</h1>
            <div class="flex flex-col items-center gap-1">
                <label for="" class="">Votre email</label>
                <input class="rounded-lg w-2/3 bg-[#5E5E5E]" type="email" name="" id="">
            </div>
            <div class="mt-5 flex flex-col items-center gap-1">
                <label for="" class="">Votre password</label>
                <input class="rounded-lg w-2/3 bg-[#5E5E5E]" type="password" name="" id="">
            </div>
            <div class="flex justify-center mt-7 mb-2">
                <button class="bg-[#5E5E5E] rounded-lg py-1 px-4" type="submit">Connexion</button>
            </div>
            <div class="flex justify-end mx-2">
                <a href="http://"><h3 class="text-[12px]">pas encore inscrit ?</h3></a>
            </div>
        </div>    
     </div>     
    </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</html>