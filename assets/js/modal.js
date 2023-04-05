
$(document).ready(function() {
    // Ouverture de la modal
    $('.open-modal').click(function() {
        var modalId = $(this).data('modal-id');
        var movieId = $(this).data('movie-id');
        
        $.ajax({
            url: '../admin/movieModal.php',
            type: 'POST',
            data: { modalId: modalId, movieId: movieId },
            success: function(response) {
                $('#modal-container').html(response);
                $('#' + modalId).show();                
            }
        });
                // $('#' + modalId).show();
    });
    
    // Fermeture de la modal
    $('#modal-container').on('click', '.close-modal', function() { 
        var modalId = $(this).data('modal-hide');
        $('#' + modalId).hide();
    });
});



  