


$('#password').on('keyup', function() {
  let passValue = $(this).val();
  
  function updateClass(selector, regex) {
    if (passValue.match(regex)) {
      $(selector).removeClass('text-red-500').addClass('text-lime-500');
      return true;
    } else {
      $(selector).removeClass('text-lime-500').addClass('text-red-500');
      return false;
    }
  }

  let lower = updateClass('.lower', /[a-z]/g);
  updateClass('.capi', /[A-Z]/g);
  updateClass('.number', /[0-9]/g);
  updateClass('.special', /[,?;.:/!§*]/g);
  updateClass('.eightMin', /^.{8,}$/);

  

});



  async function ajax(){
  let formData = new FormData(form);
  
  let res = await fetch('/portfolioV3/projets/cinema/traitement/processForm.php', 
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






// async function inscription(form_data){
//   try {
//     let response = await fetch('/portfolioV3/projets/cinema/traitement/processForm.php', {
//       method: 'POST',
//       body: form_data
//     });
//     let result = await response.json();
//     console.log(result);
//     return result;
//   } catch (error) {
//     console.error('Une erreur s\'est produite: ', error);
//     throw error;
//   }
// }

  

