<?php session_start() ?>
<?php require('../traitement/function.php') ?>

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
    <div class="min-h-full bg-black/70">
     <div class="">
        <a href="./admin.php"><img src="./../assets/img/back2.png" alt="" class="pt-3 pl-3"></a>
     </div>   
     <div class="py-5 flex flex-col justify-center items-center">
        <img class="rounded-full h-[150px] w-[150px]" src="./../assets/img/pikahead.jpg" alt="">
        <div class="flex gap-2 pt-1 ">
            <h3 class="text-xl"></h3>
            <h3 class="text-xl"></h3>
        </div>
     </div>

        <?php
        $users = userAll();
        foreach ($users as $user) {
            $id = $user['Id_users'];
            $username = $user['username'];
            $name = $user['name'];
            $timestamp = $user['date_create'];
            $date = DateTime::createFromFormat('Y-m-d H:i:s', $timestamp);
            
        ?>
        <div class="flex flex-col justify-center items-center">
            <div class="bg-[#1C1A29]/80 p-1 rounded-lg md:w-2/3 lg:w-2/3 w-3/4">    
                <div class="bg-[#5E5E5E]/80 p-2 ">
                    <div class="flex md:flex-row flex-col justify-between gap-4 ">
                        <div class="flex justify-start ">
                            <h3 class=""><?= $username ?></h3>
                            <h3 class="mx-2"><?= $name ?></h3>
                        </div>
                        <div class=" w-full flex justify-start">
                          <h3 class="text-center text-sm">inscrit depuis le : <?= $date->format('d/m/Y') ?></h3>
                        </div>
                        <div class="flex justify-center md:justify-end  w-full gap-4">
                            <form action="/updateUser.php" method="get">
                            <button class="bg-blue-500 p-1 rounded-lg " type="submit">Modifier</button>
                            </form>
                            <form action="" method="get">
                                <input type="hidden" value="<?= $id ?>" name="">
                             <button class="bg-red-500 p-1 rounded-lg " type="submit">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>    
        </div>        
    <?php }
    ?>

            
            
  
    </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</html>