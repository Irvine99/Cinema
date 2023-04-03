function searchMovie() {
    var api_key = 'c3499304b1b986995d42726466d3cda1';
    var query = $('#search').val();
    var url = 'https://api.themoviedb.org/3/search/movie';
    
    $.ajax({
        url: url,
        data: {
            api_key: api_key,
            query: query
        },
        success: function(data) {
            if(data.results.length > 0) {
                var movie_id = data.results[0].id;
                var lang = 'fr';
                var movie_url = 'https://api.themoviedb.org/3/movie/' + movie_id;
                
                $.ajax({
                    url: movie_url,
                    data: {
                        api_key: api_key,
                        language: lang,
                        append_to_response: 'credits'
                    },
                    success: function(data) {
                        var movieDetails = '';
                        movieDetails += '<h2>' + data.title + '</h2>';
                        movieDetails += '<p><strong>Résumé :</strong> ' + data.overview + '</p>';
                        movieDetails += '<p><strong>Genres :</strong> ' + data.genres.map(genre => genre.name).join(', ') + '</p>';
                        movieDetails += '<p><strong>Date de sortie :</strong> ' + data.release_date + '</p>';
                        
                        if(data.poster_path) {
                            var poster_url = 'https://image.tmdb.org/t/p/w500' + data.poster_path;
                            movieDetails += '<img src="' + poster_url + '" alt="Affiche du film ' + data.title + '">';
                        }
                        
                        movieDetails += '<p><strong>Acteurs :</strong> ' + data.credits.cast.slice(0, 5).map(actor => actor.name).join(', ') + '</p>';
                        
                        var director = data.credits.crew.find(member => member.job === 'Director');
                        if(director) {
                            movieDetails += '<p><strong>Réalisateur :</strong> ' + director.name + '</p>';
                        }
                        
                        var producer = data.credits.crew.find(member => member.job === 'Producer');
                        if(producer) {
                            movieDetails += '<p><strong>Producteur :</strong> ' + producer.name + '</p>';
                        }
                        
                        movieDetails += '<p><strong>Temps de film :</strong> ' + data.runtime + ' minutes</p>';
                        
                        $('#movie-details').html(movieDetails);
                    }
                });
            } else {
                $('#movie-details').html('<p>Aucun film trouvé.</p>');
            }
        },
        error: function(error) {
            console.error(error);
            $('#movie-details').html('<p>Une erreur est survenue lors de la recherche de films.</p>');
        }
    });
}
