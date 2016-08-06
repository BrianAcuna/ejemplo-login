<?php
//si coincide el login y el password
if($_POST['login']==$_POST['password']){
  //redirige el navegador al menu
  header('Location: menu.html');
    //si no cincide
}else{
  //redirige el navegador al login
  header('Location: login.html');
}

