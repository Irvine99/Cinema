
let regexPassword = "^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[*.!@$%^&(){}[]:;<>,.?/~_+-=|\]).{8,32}$";

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
  let res = await fetch("../traitement/processForm.php");
  console.log(res);
  let msg =   await res.json();
  console.log("bonjour");
  console.log(msg.toString());
  console.log("hello");
  document.getElementById("error").innerHTML = msg.errors;

}
form.onsubmit = (e) => {
  ajax();
  e.preventDefault();
}

  

