<form enctype="multipart/form-data" action="../traitement/insertMovie.php" method="post">

<div class="">
    <h1 class="mx-2 text-md md:text-2xl">Ajout d'un film</h1>
    <div class=" mx-2 mt-5 flex-col flex">
        <label for="">Titre du film</label>
        <input name="titleMovie" class="mt-2 w-3/4 &&& rounded-lg" type="text">
    </div>
    <div class=" mx-2 mt-5 flex-col flex">
        <label for="">Sypnosis du film</label>
        <textarea name="resumeMovie" class="mt-2 w-3/4 bg-[#5E5E5E]/80 rounded-lg" name="" id="" cols="30" rows="10"></textarea>
    </div>
    <div class=" mx-2 mt-5 flex-col flex">
        <label for="">date de sortie du film</label>
        <input name="dateMovie" class="mt-2 w-3/4 bg-[#5E5E5E]/80 rounded-lg" type="date">
    </div>
    <div class=" mx-2 mt-5 flex-col flex">
        <label for="">budget du film</label>
        <input name="budgetMovie" class="mt-2 w-3/4 bg-[#5E5E5E]/80 rounded-lg" type="number">
    </div>
    <div class=" mx-2 mt-5 flex-col flex">
        <label for="">budget du film</label>
        <input type="file" name="afficheMovie" id="affiche">
    </div>
    <!-- <div class="flex justify-center mt-5">
        <button class="bg-[#5E5E5E]/80 p-2 rounded-lg mb-5" type="submit">Envoyer</button>
    </div> -->

    
</div>
</form>
<div class="flex justify-end w-full mt-10">
    <button onclick = next1() class="bg-[#5E5E5E]/80 p-2 rounded-lg mb-5">Suivant</button>
</div>