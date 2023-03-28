$(document).ready(function() {
    $('#liveSearch').keyup(function() {
        var input = $(this).val();
        // alert(input);

        if(input != "") {
            $.ajax({
                url:"/portfolioV3/projets/cinema/traitement/insertMovieV2.php",
                method : "POST",
                data: {input :input},

                success:function(data){
                    $('#searchFind').html(data);
                }
            });
        }else{
            $('#searchFind').css("display", "none"); 
        }
        
         
    })
})