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

    <title>Comment</title>
</head>
<body class="bg-[#1C1A29]">
    <main>
        <div class="flex justify-between items-center py-3 mx-3">
            <img class="lg:h-[100px] h-[50px] w-auto" src="./../assets/img/Logo.png" alt="">
            <h1 class="text-xl font-bold">Commentaires</h1>
            <a href="#commentAdd" class=""><img class="h-[50px] w-[50px]" src="./../assets/img/comment.png" alt=""></a>
        </div>
        <div class="">
         <?php include('../page/sectionComment/commentOne.php') ?>
         <?php include('../page/sectionComment/commentTwo.php') ?>
        </div>
    </main>   
    <header>
        <?php include('../content/navbar.php') ?>
    </header>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</html>