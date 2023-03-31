

<div class="flex flex-col justify-center">
    <h1 class="mb-10 mx-2 text-md md:text-2xl w-full text-center">Choisissez les elements a ajouter</h1>
    <div class="flex flex-col gap-8">
        <div class="flex flex-col gap-12 ">
            <div class="flex w-[80%]">
                <div class="w-full"><?php include('../content/dropDownActor.php') ?></div>
                <?php include('./contentDropdown/downActor.php') ?>
            </div>       
        </div>
        <div class="flex flex-col gap-12 ">
            <div class="flex w-[80%]">
                <div class="w-full"><?php include('../content/dropDownProducer.php') ?></div>
                <?php include('./contentDropdown/downProducer.php') ?>
            </div>          
        </div>
        <div class="flex flex-col gap-12 ">
            <div class="flex w-[80%]">
                <div class="w-full"><?php include('../content/dropDownDirector.php') ?></div>
                <?php include('./contentDropdown/downDirector.php') ?>
            </div>           
        </div>
        <div class="flex flex-col gap-12 ">
            <div class="flex w-[80%]">
                <div class="w-full"><?php include('../content/dropDownCategory.php') ?></div>
                <?php include('./contentDropdown/downCategory.php') ?>
            </div>          
        </div>
    </div>
</div>

<div class="flex">
<div class="flex justify-start w-full mt-10">
    <a onclick = back1() class="bg-[#5E5E5E]/80 p-2 rounded-lg mb-5 w-[30%]">Back</a>
</div>
<div class="flex justify-end w-full mt-10">
    <a onclick = next2() class="bg-[#5E5E5E]/80 p-2 rounded-lg mb-5  w-[30%]">Suivant</a>
</div>
</div>