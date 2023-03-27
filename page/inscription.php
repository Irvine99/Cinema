<?php include('../traitement/message.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./../assets/css/main.css">


    <!--Script JS-->


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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <!--Swiper-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>



    <title>Acceuil</title>
</head>

<body class="h-auto bg-[url('./../assets/img/wallpaper.jpg')]">
    <div class="min-h-screen bg-black/70">
        <a href="./accueil.php">
            <div class="p-2"><img src="./../assets/img/back2.png" alt=""></div>
        </a>
        <div class="flex justify-center items-center"><img src="./../assets/img/Logo.png" alt="" class=""></div>
        
            <div id='successMsg' class="hidden flex justify-center">
            <div id='success' class=" w-1/2 text-black font-bold text-center p-2 bg-lime-500 rounded-lg">On essaie FDP</div>
            </div>
       

        <form id="form" action="" method="post">
            <div class="pb-7 flex flex-col justify-center items-center">

                <div class="bg-[#1C1A29]/80 p-1 rounded-lg md:w-1/2 lg:w-1/3 w-3/4">
                    <h1 class="text-xl mb-7 font-bold py-2 text-center">Identifiez vous</h1>


                    <div id='errorMsg' class="hidden flex justify-center">
                        <div id='error' class="text-white text-center w-[90%] mb-5 p-5 bg-red-500 rounded-lg "></div>
                    </div>
                    <div id="username-group" class="flex flex-col items-center gap-1">
                        <label for="" class="">Votre Prénom</label>
                        <input class="rounded-lg w-2/3 bg-[#5E5E5E]" type="text" name="username" id="username"
                            required="requise">
                    </div>
                    <div id="name-group" class="mt-5 flex flex-col items-center gap-1">
                        <label for="" class="">Votre Nom</label>
                        <input class="rounded-lg w-2/3 bg-[#5E5E5E]" type="text" name="name" id="name"
                            required="requise">
                    </div>
                    <div id="email-group" class="mt-5 flex flex-col items-center gap-1">
                        <label for="" class="">Votre email</label>
                        <input class="rounded-lg w-2/3 bg-[#5E5E5E]" type="email" name="email" id="email"
                            required="requise">
                    </div>
                    <div class="mt-5 flex flex-col items-center gap-1">
                        <label for="" class="">Votre mot de passe</label>
                        <input class="rounded-lg w-2/3 bg-[#5E5E5E]" type="password" name="password" id="password"
                            required="requise">
                    </div>
                    <div class="">
                        <ul class="flex flex-col items-start ml-[17%] my-5">
                            <li class="capi text-red-500">1 lettre capitale</li>
                            <li class="lower text-red-500">1 lettre miniscule</li>
                            <li class="number text-red-500">1 nombre</li>
                            <li class="special text-red-500">1 caractére spécial</li>
                            <li class="eightMin text-red-500">Au moins 8 caractéres</li>
                        </ul>
                    </div>
                    <div id="password-group" class="mt-5 flex flex-col items-center gap-1">
                        <label for="" class="">Confirmer votre mot de passe</label>
                        <input class="rounded-lg w-2/3 bg-[#5E5E5E]" type="password" name="password2" id="password2"
                            required="requise">
                    </div>
                    <div id="password2-group" class="flex justify-center mt-7 mb-2">
                        <button class="bg-[#5E5E5E] rounded-lg py-1 px-4" type="submit">Connexion</button>
                    </div>

                </div>

            </div>
        </form>
    </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
    crossorigin="anonymous"></script>
<script src="./../assets/js/form.js"></script>

</html>