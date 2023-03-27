<?php
  
$erreurLogin ='';
$erreurForm ="";
$successForm= "";
$successLogin = "";
$erreurProduct = "";
$successProduct = "";
$disconnect = "";


$messageError = [
    'erreurChampvide' => 'Veuillez remplir les champs',
    'erreurEmail' => 'Email incorrect',
    'erreurMdp' => 'Connexion incorrect',
    'emailIdem' => "L'email est deja existant",
    'titleIdem' => 'Le titre est déjà existant',
    'disconnect' => 'Vous vous êtes deconnecté',
];

$successMessage = [

    'messageForm' => "Inscription reussi",
    'messageLogSuccess' => 'Connexion réussi',
    'productSuccess' => 'Ajout du produit réussi',
];
    


if(isset($_SESSION['messageError'])) {
    if($_SESSION['tab'] == 'login') {
        $erreurLogin = alert($messageError[$_SESSION['messageError']], 'alert' );
    }

    if($_SESSION['tab'] == 'sign') {
        $erreurForm = alert($messageError[$_SESSION['messageError']], 'alert');
    }
    if($_SESSION['tab'] == 'product') {
        $erreurProduct = alert($messageError[$_SESSION['messageError']], 'alert');
    }
    if($_SESSION['tab'] == 'disconnect') {
        $disconnect = alert($messageError[$_SESSION['messageError']], 'alert');
    }
    unset($_SESSION['messageError']);
}

if(isset($_SESSION['successMessage'])) {
    if($_SESSION['tab'] == 'sign') {
        $successForm = alert($successMessage[$_SESSION['successMessage']], 'success');
    }
    if($_SESSION['tab'] == 'login') {
        $successLogin = alert($successMessage[$_SESSION['successMessage']], 'success' );
    }
    if($_SESSION['tab'] == 'product') {
        $successProduct = alert($successMessage[$_SESSION['successMessage']], 'success');
    }
    unset($_SESSION['successMessage']);
}

function alert($messageError,$types) {
    $startDiv = '';
    $endDiv = '</p></div>';
    if($types == 'alert' ) {
        $startDiv = '<div class="w-full mt-5 mb-5 bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
        <p class="font-bold">ALERT</p><p>';
    }
    if($types == 'success' ) {
        $startDiv = '<div class="mt-5 mb-5 w-full bg-lime-300 border-l-4 border-lime-500 text-lime-700 p-4" role="success">
        <p class="font-bold">SUCCESS</p><p>';
        
    }
    return $startDiv.$messageError.$endDiv;
}


?>