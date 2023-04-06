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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <!--Swiper-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    <title>Acceuil</title>
</head>

<body class="h-screen bg-[url('./../assets/img/wallpaper.jpg')]">
    <div class="min-h-full bg-black/70">
        <div class="">
            <a href="./admin.php"><div class=" p-4"><img class="w-[25px] h-[25px]" src="./../assets/img/back2.png" alt=""></div></a>
        </div>
        <div class="py-5 flex flex-col justify-center items-center">
            <img class="rounded-full h-[150px] w-[150px]" src="./../assets/img/pikahead.jpg" alt="">
            <div class="flex gap-2 pt-1 ">
                <h3 class="text-xl"></h3>
                <h3 class="text-xl"></h3>
            </div>
        </div>
        <div class="flex flex-col justify-center items-center">
            <div class="bg-[#1C1A29]/80 p-1 rounded-lg md:w-2/3 lg:w-2/3 w-3/4">

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <div class="flex items-center justify-between pb-4 bg-[#5E5E5E]/80">
                        <div>
                            <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction"
                                class="inline-flex bg-[#1C1A29]/80 mx-2 items-center text-gray-500 rounded-lg px-4 py-1 text-white"
                                type="button">
                                <span class="sr-only">Action button</span>
                                Action
                                <svg class="w-3 h-3 ml-2" aria-hidden="true" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdownAction"
                                class="flex justify-center z-10 hidden bg-white   rounded-lg  w-24 dark:bg-gray-700 ">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownActionButton">
                                    <li>
                                    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class=" text-black " type="button">
                                    Ajouter
                                    </button>
                                    </li>
                                    
                                </ul>

                            </div>
                        </div>
                        <label for="table-search" class=" sr-only">Search</label>
                        <div class="hidden md:block mt-2 mx-2 relative">
                            <div class=" absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" id="table-search-users"
                                class="bg-[#1C1A29]/80 block p-2 pl-10 text-sm text-gray-900  rounded-lg w-80 bg-gray-50 "
                                placeholder="Search for users">
                        </div>
                    </div>
                    <table class="bg-[#1C1A29]/80 flex flex-col w-full text-sm text-left  ">
                        <thead class=" text-xs uppercase bg-gray-50 ">
                            <tr class="bg-[#1C1A29] items-center flex justify-between">
                                <th scope="col" class="p-4">
                                    <div class="flex items-center">
                                        <input id="text-white checkbox-all-search" type="checkbox"
                                            class="w-4 h-4 text-blue-600  rounded ">
                                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                    </div>
                                </th>
                                <th scope="col" class=" w-3/4 text-white  mr-10 px-6 py-3">
                                    Nom
                                </th>

                                <th scope="col" class="text-white  mr-10 px-6 py-3">
                                    Action
                                </th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            
                             $actors = searchActor();
                             
                            foreach ($actors as $actor) {
                               


                                 ?>
                            <tr
                                class="flex flex-col md:flex-row items-center w-full bg-[#5E5E5E]/60 ">
                                <td class="flex justify-start items-center p-4">
                                    <div class="flex ">
                                        <input id="checkbox-table-search-1" type="checkbox"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row"
                                    class="flex w-3/4 items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="w-10 h-10 rounded-full" src="<?= $actor['avatar_actor'] ?>"
                                        alt="<?= $actor['name_actor'] ?>">
                                    <div class="pl-3">
                                        <div class="text-base text-white font-semibold"><?= $actor['name_actor'] ?></div>

                                    </div>
                                </th>

                                <td class="md:mr-10 flex justify-center items-center gap-4 text-white ">
                                <button  data-modal-target="popup-modal-modif.<?= $actor['Id_actor'] ?>" data-modal-toggle="popup-modal-modif.<?= $actor['Id_actor'] ?>" type='button' id="popup-modal-modif" class="rounded-lg w-2/3 bg-blue-500 py-1 px-4">Modifier</button>
                                <button  data-modal-target="popup-modal.<?= $actor['Id_actor'] ?>" data-modal-toggle="popup-modal.<?= $actor['Id_actor'] ?>" type='button' id="popup-modal" class="rounded-lg w-2/3 bg-red-500 py-1 px-4">Supprimer</button>
                                </td>

                            </tr>

                            <!---modal Supprimer-->


                                <form action="../traitement/deleteActor.php" method="post">
                                    <div id="popup-modal.<?= $actor['Id_actor'] ?>" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
                                        <div class="relative w-full h-full max-w-md md:h-auto">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-modal.<?= $actor['Id_actor'] ?>">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                                <div class="p-6 text-center">
                                                    <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Ets vous sur de vouloir supprimer <?= $actor['name_actor'] ?></h3>
                                                    <input type="hidden" value="<?= $actor['Id_actor'] ?>" name="idActor">
                                                    <button data-modal-hide="popup-modal.<?= $actor['Id_actor'] ?>" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                        Yes, I'm sure
                                                    </button>
                                                    <button data-modal-hide="popup-modal.<?= $actor['Id_actor'] ?>" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>


                            <!---modal Modifier-->


                            <form enctype="multipart/form-data" action="../traitement/updateActor.php" method="post">
                                    <div id="popup-modal-modif.<?= $actor['Id_actor'] ?>" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
                                        <div class="relative w-full h-full max-w-md md:h-auto">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-modal-modif.<?= $actor['Id_actor'] ?>">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                                <div class="p-6 text-center">
                                                    <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Modification de l'acteur <?= $actor['name_actor'] ?></h3>
                                                    <div class="flex flex-col gap-4">
                                                        <input class="rounded-lg text-black" name="actorName" type="text" placeholder="<?= $actor['name_actor'] ?>">
                                                        <input type="file" name='avatarActor'>
                                                    </div>
                                                    <div class="flex mt-10 justify-center gap-8">
                                                    <input type="hidden" value="<?= $actor['Id_actor'] ?>" name="idActor">
                                                    <button data-modal-hide="popup-modal-modif.<?= $actor['Id_actor'] ?>" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                        Yes, I'm sure
                                                    </button>
                                                    <button data-modal-hide="popup-modal-modif.<?= $actor['Id_actor'] ?>" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
 


                        <?php    }
                            
                            ?>


                        </tbody>
                    </table>
                </div>

            </div>
            </form>
        </div>
    </div>


    
<!-- Modal toggle -->


<!-- Main modal -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-md md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="authentication-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Ajouter un acteur</h3>
                <form enctype="multipart/form-data" class="space-y-6" action="../traitement/insertActor.php" method="post">
                    <div>
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom de l'acteur</label>
                        <input type="text" name="text" id="nameActor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Tom cruise" required>
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sa photo</label>
                        <input type="file" name="avatarActor" id="avatarActor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>

                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enregistrer l'acteur</button>

                </form>
            </div>
        </div>
    </div>
</div> 





    </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

</html>