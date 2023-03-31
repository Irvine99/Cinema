

<div class="">
    <h1 class="mx-2 text-md md:text-2xl">Ajout d'un film</h1>
    <div class=" mx-2 mt-5 flex-col flex">
        <label for="">Titre du film</label>
        <input name="titleMovie" class="mt-2 w-3/4 bg-[#5E5E5E]/80 rounded-lg rounded-lg" type="text">
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
    <div class=" mx-2 mt-5 flex-col md:flex-col flex w-2/3">
        <label for="">Mettre une affiche de film</label>

        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
        <input name="afficheMovie" id="affiche" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">

    </div>


    
</div>

<div class="flex justify-end w-full mt-10">
    <a onclick = next1() class="bg-[#5E5E5E]/80 w-[10%] p-2 rounded-lg mb-5">Suivant</a>
</div>