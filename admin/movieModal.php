<?php session_start() ?>
<?php include('../traitement/function.php'); ?>

<?php

$idMovie = $_POST['movieId'];
$movie = infoMovie($idMovie);
$actors = searchActors($idMovie);
$producers = searchProducers($idMovie);
$directors = searchDirectors($idMovie);
$categories = searchCategories($idMovie);




// var_dump($movie);
?>



        <!-- Modal content -->
        <div class="relative bg-[#1C1A29]/90 rounded-lg shadow dark:bg-gray-700">
            <button type="button"
                class="close-modal absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                data-modal-hide="authentication-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class=" sr-only">Close modal</span>
            </button>
            <div class="w-full px-6 py-6 lg:px-8">
                <h3 class="text-center mb-4 text-xl font-medium text-white dark:text-white">Modifier le film :
                    <?= $movie['name_movie'] ?>
                </h3>
                <form enctype="multipart/form-data" class="w-full space-y-6" action="../traitement/updateMovie.php"
                    method='post'>
                    <div class="flex flex-col md:flex-row md:justify-evenly w-full ">
                        <div class="flex flex-col">
                            <div>
                                <label for="text"
                                    class="block mb-2 text-sm font-medium text-white">Nom du
                                    film</label>
                                <input type="text" name="movieTitle" id="movieTitle"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="<?= $movie['name_movie'] ?>">
                            </div>
                            <div>
                                <label for="text"
                                    class="block my-2 text-sm font-medium text-white">Le resumé du
                                    film</label>
                                <textarea
                                    class="w-full   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg"
                                    placeholder="<?= $movie['description_movie'] ?>" value='' name="resumeMovie" id=""
                                    cols="30" rows="10"></textarea>
                            </div>
                            <div class="flex">
                                <div>
                                    <label for="text"
                                        class="block my-2 text-sm font-medium text-white">L'affiche
                                        du film</label>
                                    <img class="my-2 border-gray border-2 h-auto w-32"
                                        src="<?= $movie['affiche_movie'] ?>" alt="">
                                    <input type="file" name="afficheMovie" id="afficheMovie" placeholder=""
                                        class="bg-gray-50 ">
                                </div>

                            </div>
                            <div>
                                <label for="text"
                                    class="block my-2 text-sm font-medium text-white">Budget du
                                    film</label>
                                <input type="number" name="budgetMovie" id="budgetMovie"
                                    placeholder="<?= $movie['budget_movie'] ?>"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                            </div>
                            <div>
                                <label for="text"
                                    class="block my-2 text-sm font-medium text-white">date de
                                    sortie</label>
                                <input type="time" name="timeMovie" id="timeMovie"
                                    placeholder="<?= $movie['date_sortie_movie'] ?>"
                                    class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                            </div>
                            <div>
                                <label for="text"
                                    class="block my-2 text-sm font-medium text-white">date de
                                    sortie</label>
                                <input type="selected" name="timeMovie" id="timeMovie"
                                    placeholder="<?= $movie['date_sortie_movie'] ?>"
                                    class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                            </div>
                        </div>

                        <div class="flex gap-8 flex-col">
                            <div>
                                <label for="text"
                                    class="block mb-2 text-sm font-medium text-white">Acteur</label>
                                <select class="text-black-500" name="actors[]" id="actors" multiple>
                                    <?php


                                    foreach ($actors as $actor) {
                                        
                                        ?>

                                        <option class="color !text-dark bg-[#5E5E5E]/80" value="<?= $actor['Id_actor'] ?>"
                                            <?= $actor['lie_au_film'] ? 'selected' : '' ?>><?= $actor['name_actor'] ?>
                                        </option>

                                    <?php }

                                    ?>
                                </select>
                            </div>
                            <div>
                                <label for="text"
                                    class="block mb-2 text-sm font-medium text-white">Réalisateurs</label>
                                <select class="text-black-500" name="directors[]" id="directors" multiple>
                                    <?php
                                    
                                    foreach ($directors as $director) {

                                        ?>

                                        <option class="color !text-dark bg-[#5E5E5E]/80" value="<?= $director['Id_director'] ?>"
                                            <?= $director['lie_au_film'] ? 'selected' : '' ?>><?= $director['name_director'] ?>
                                        </option>


                                    <?php }

                                    ?>
                                </select>
                            </div>
                            <div>
                                <label for="text"
                                    class="block mb-2 text-sm font-medium text-white">Producteurs</label>
                                <select class="text-black-500" name="producers[]" id="producers" multiple>
                                    <?php
                                    
                                    foreach ($producers as $producer) {

                                        ?>

                                        <option class="color !text-dark bg-[#5E5E5E]/80" value="<?= $producer['Id_producer'] ?>"
                                            <?= $producer['lie_au_film'] ? 'selected' : '' ?>><?= $producer['name_producer'] ?>
                                        </option>


                                    <?php }

                                    ?>
                                </select>
                            </div>
                            <div>
                                <label for="text"
                                    class="block mb-2 text-sm font-medium text-white">Categories</label>
                                <select class="text-black-500" name="categories[]" id="categories" multiple>
                                    <?php
                                    

                                    foreach ($categories as $categorie) {

                                        ?>

                                        <option class="color !text-dark bg-[#5E5E5E]/80" value="<?= $categorie['Id_category'] ?>"
                                            <?= $categorie['lie_au_film'] ? 'selected' : '' ?>><?= $categorie['name_category'] ?>
                                        </option>


                                    <?php }

                                    ?>
                                </select>
                            </div>

                        </div>
                    </div>


                    <input type="hidden" value='<?= $idMovie ?>' name="movieId">
                    <div class="flex justify-center">
                        <button type="submit"
                            class="mt-5 w-1/4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Modifier</button>
                    </div>

                </form>
            </div>
        </div>

<script>new MultiSelectTag('actors')</script>
<script>new MultiSelectTag('directors')</script>
<script>new MultiSelectTag('producers')</script>
<script>new MultiSelectTag('categories')</script>