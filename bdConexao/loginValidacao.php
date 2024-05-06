<?php 

print_r($_POST);

if(isset($_POST['submit']) && !empty($_POST["email"])&& !empty($_POST['senha'])){
    //acessar o sistema
    include_once('conexão.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    print_r('Email: ' . $email);
    echo "<br>";
    print_r('Senha: ' . $senha);

}else{
    //não acessa e retorna para o login
    header("Location: ../loginView.php");
}

?>