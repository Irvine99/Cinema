<?php $categories = searchCategorie();


?>
<div class="">
    <h1 class="text-3xl font-bold">Film</h1>
    <div class="my-3 flex flex-col items-center">
        <select class="rounded-lg bg-[#5E5E5E]" name="" id="">
            <option class="text-white/80" value="">Choississez votre catégorie</option>
            <?php 
            
            
            foreach($categories as $categorie) { ?>
                <option class="text-white/80" value="<?= $categorie['Id_category'] ?>"><?=$categorie['name_category'] ?></option>
                
            <?php 
            

            }?>
            
         
         </select>
    </div>

</div>