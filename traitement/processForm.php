<?php 

$errors = [];
$data = [];

if (empty($_POST['username'])) {
    $errors['usernename'] = 'Mettez votre prénom.';
}

if (empty($_POST['name'])) {
    $errors['name'] = 'Mettez votre nom.';
}

if (empty($_POST['email'])) {
    $errors['email'] = 'Mettez un email.';
}
if (empty($_POST['password'])) {
    $errors['password'] = 'Mettez un mot de passe.';
}
if (empty($_POST['password2'])) {
    $errors['password2'] = 'Mettez un mot de passe.';
}


if (!empty($errors)) {
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
    $data['message'] = 'Success!';
}

echo json_encode($data);

?>