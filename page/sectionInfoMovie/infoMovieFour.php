<div class="md:hidden mx-2">
    <div class="flex justify-center flex-wrap gap-4">
    <swiper-container class="mySwiper"  slides-per-view="auto"
        space-between="" free-mode="true">
        <?php 
        foreach ($actors as $actor) { ?>
        <swiper-slide>
        
            <div class="w-full mt-7 mb-1 items-center flex flex-col">
            <img src="<?= $actor['avatar_actor'] ?>" alt="" class=" h-[100px] w-[100px]">
            <h3 class=""><?= $actor['name_actor'] ?></h3>
            </div>

        </swiper-slide>
        <?php } ?>
        </swiper-container>

    
    </div>
</div>



<div class="hidden md:block lg:hidden">
<div class="w-[90%]">
        
        <swiper-container class="mySwiper"  slides-per-view="auto"
        space-between="3" free-mode="true">
        <?php 
        foreach ($actors as $actor) { ?>
        <swiper-slide>
        
            <div class=" mt-7 mb-1 items-center flex flex-col">
            <img src="<?= $actor['avatar_actor'] ?>" alt="" class=" h-[100px] w-[100px]">
            <h3 class=""><?= $actor['name_actor'] ?></h3>
            </div>

        </swiper-slide>
        <?php } ?>
        </swiper-container>
    
    
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
    
        </div>
</div>



<div class="hidden lg:block">
    <div class="w-[90%]">
        
    <swiper-container class="mySwiper"  slides-per-view="8"
    space-between="3" free-mode="true">
    <?php 
        foreach ($actors as $actor) { ?>
        <swiper-slide>
        
            <div class="mt-7 mb-1 items-center flex flex-col">
            <img src="<?= $actor['avatar_actor'] ?>" alt="" class=" h-[100px] w-[100px]">
            <h3 class=""><?= $actor['name_actor'] ?></h3>
            </div>

        </swiper-slide>
        <?php } ?>

    </swiper-container>


    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>

    </div>
</div>