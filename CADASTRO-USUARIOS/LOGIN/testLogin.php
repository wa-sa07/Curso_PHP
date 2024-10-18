<?php 
   //print_r($_REQUEST)
   //teste para verificar se foi submitado
   
   if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) // e não estiver vazia 
    // se existir mh variavel post do tipo subimit vai deixar acessar o sistema 
   {
    //Acesso ao sistema 
    // Acessa
    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

     print_r('Email: ' . $email);
     print_r('<br>');
     print_r('Senha: ' . $senha);
   }
   else
   {
    // Não acessa /  retorna para o meu login
     header('Location: login.php');
   }

?>