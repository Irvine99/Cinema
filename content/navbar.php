<div class="md:hidden ">
    <div class="fixed bottom-0 w-full z-[10000]">
        <div class=" h-[50px] bg-[#38354B]">
            <div class="mx-10 h-full flex justify-between items-center">
            <a href="./accueil.php"><img class="h-[30px] w-[30xp]" src="./../assets/img/home2.png" alt="" class=""></a>
            <a href="./accueil.php"><img class="h-[30px] w-[30xp]" src="./../assets/img/search2.png" alt="" class=""></a>
            <a href="./accueil.php"><img class="h-[30px] w-[30xp]" src="./../assets/img/star.png" alt="" class=""></a>
            <?php if(isset($_SESSION['id_user'])) { ?>
                <a href="./profil.php"><img class="rounded-full h-[50px] w-[50xp]" src="./../assets/img/henrycavil.jpg" alt="" class=""></a>
            <?php }else{ ?>  
                <a href="./connect.php"><img class="rounded-full h-[50px] w-[50xp]" src="./../assets/img/connect.png" alt="" class=""></a>
            <?php } ?>
            </div>
        </div>
    </div>
</div>

<!--tablette-->

<div class="hidden md:block ">
    <div class="py-5 bg-[#38354B]/30">
        
        <div class="mx-5 h-full flex justify-between items-end">

            <div class="flex items-end gap-2 ">
                <a class=" flex gap-2 items-center" href="./accueil.php"><img class="h-[30px] w-[30px]" src="./../assets/img/home2.png" alt="" class="">
                <h3 class="lg:text-xl text-xl">Accueil</h3></a>
            </div>
            <div class="flex items-end gap-2 ">
                <a class="flex gap-2 items-center" href="./categorie.php"><img class="h-[30px] w-[30px]" src="./../assets/img/search2.png" alt="" class="">
                <h3 class="lg:text-xl text-xl">Recherche</h3></a>
            </div>
            <div class="flex items-end gap-2 ">
                <a class="flex gap-2 items-center" href="./accueil.php"><img class="h-[30px] w-[30px]" src="./../assets/img/star.png" alt="" class="">
                <h3 class="lg:text-xl text-xl">Favoris</h3></a>
            </div>
            <div class="flex items-end gap-2  ">
                <h3 class="lg:text-xl text-xl">Bienvenue
                <?php if(isset($_SESSION['id_user'])) { ?> 
                <span><?= $_SESSION['username'] ?> </span></h3>
                
                <a href="./profil.php"><img class="rounded-full h-[50px] w-[50xp]" src="./../assets/img/henrycavil.jpg" alt="" class=""></a>
                 <?php }else { ?>
                    <span>invité </span></h3>  
                <a href="./connect.php"><img class="rounded-full h-[50px] w-[50xp]" src="./../assets/img/connect.png" alt="" class=""></a>
                <?php } ?>
                </div>
                
            </div>

        </div>
    </div>
</div>

<!--Desktop-->

