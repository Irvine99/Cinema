<div class="md:hidden">
    <div class="md:hidden py-3 flex justify-between">
        <img class="h-[60px] w-auto" src="./../assets/img/Logo.png" alt="">
        <div class="flex j items-end">
            <h1 class="text-sm text-white mr-1">Bonjour</h1>
            <?php if(isset($_SESSION['id_user'])) { ?>
            <h1 class="text-sm text-white mr-3"><?php echo $_SESSION['username']; ?></h1>
            <?php }else{ ?>
            <h1 class="text-sm text-white mr-3">invité</h1> 
            <?php } ?> 
        </div>
    </div>
</div>

<!--Tablette-->

<div class="hidden md:block lg:hidden">
    <div class=" py-3 flex justify-between">
        <img class="h-[100px] w-auto" src="./../assets/img/Logo.png" alt="">
        <div class="flex j items-end">
            <h1 class="text-xl text-white mr-1">Bonjour</h1>
            <?php if(isset($_SESSION['id_user'])) { ?>
            <h1 class="text-sm text-white mr-3"><?php echo $_SESSION['username']; ?></h1>
            <a href="../page/profil.php"><img class="mb-[5px] h-[100px] w-[100px] rounded-full" src="./../assets/img/henrycavil.jpg" alt="" class=""></a> 
            <?php }else{ ?>
            <h1 class="text-sm text-white mr-3">invité</h1> 
            <?php } ?>
        </div>
    </div>
</div>

<!--Desktop-->

<div class="mb-10 hidden lg:block">
    <div class="py-3 flex justify-between">
        <img class="h-[100px] w-auto" src="./../assets/img/Logo.png" alt="">
        <div class="flex j items-end">
            <h1 class="text-2xl text-white mr-1">Bonjour</h1>
            <?php if(isset($_SESSION['id_user'])) { ?>
            <h1 class="text-sm text-white mr-3"><?php echo $_SESSION['username']; ?></h1>
            <a href="../page/profil.php"><img class="mb-[5px] h-[100px] w-[100px] rounded-full" src="./../assets/img/henrycavil.jpg" alt="" class=""></a> 
            <?php }else{ ?>
            <h1 class="text-sm text-white mr-3">invité</h1> 
            <?php } ?>
            
        </div>
    </div>
</div>