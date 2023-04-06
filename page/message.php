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
    <a href="./accueil.php"><div class=" p-4"><img class="w-[25px] h-[25px]" src="./../assets/img/back2.png" alt=""></div></a>
    <div class="flex justify-center items-center"><img src="./../assets/img/Logo.png" alt="" class=""></div>
     <div class="flex flex-col justify-center items-center">
        <div class="bg-[#1C1A29]/80 p-1 rounded-lg w-2/4">
            <form action="../traitement/sendMessage.php" method="post">
              <h1 class="text-xl mb-7 font-bold py-2 text-center">Laissez nous un message</h1>
              <div class="flex flex-col items-center gap-1">
                  <label for="" class="">Votre Nom</label>
                  <input class="rounded-lg md:w-2/6 w-1/2 bg-[#5E5E5E]" type="text" name="name" id="name">
              </div>
              <div class="flex flex-col items-center gap-1">
                  <label for="" class="">Votre email</label>
                  <input class="rounded-lg md:w-2/6 w-1/2 bg-[#5E5E5E]" type="email" name="senderEmail" id="senderEmail">
              </div>
              <div class="mt-5 flex flex-col items-center gap-1">
                  <label for="" class="">Votre message</label>
                  <textarea class="rounded-lg w-5/6 md:w-1/2 3 bg-[#5E5E5E]" name="mailMessage" id="mailMessage" cols="30" rows="5"></textarea>
              </div>
              <div class="flex justify-center mt-7 mb-2">
                  <button class="bg-[#5E5E5E] rounded-lg py-1 px-4" type="submit">Envoyer</button>
              </div>
            </form>
            
        </div>    
     </div>     
    </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</html>