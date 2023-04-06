async function ajax(){
    let formData = new FormData(form);
    
    let res = await fetch('/portfolioV3/projets/cinema/traitement/insertMovieV2.php', 
     {
            method: 'POST',
            body: formData,
          });
    console.log(res);
    let msg = await res.json();
    if (msg['success'] != undefined) {
        let _form = document.getElementById('form');
        _form.parentNode.removeChild(_form);
        document.getElementById('success').innerHTML = msg['success'];
        document.getElementById('successMsg').classList.remove('hidden');
        setTimeout(function() {
          window.location.href = "/portfolioV3/projets/cinema/admin/admin.php"; // Rediriger vers la page de connexion après 3 secondes
        }, 3000);
    } else {
      document.getElementById('error').innerHTML = msg['error'];
      document.getElementById('errorMsg').classList.remove('hidden');
    }
    console.log('bonjour');
    console.log(msg.toString());
    
  
  
    
  
  }
  form.onsubmit = (e) => {
    ajax();
    e.preventDefault();
  }