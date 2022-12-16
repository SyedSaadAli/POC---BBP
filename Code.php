<?php 
include('security.php');

if(isset($_POST['login_btn']))
{
  //echo "Working";


    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    

 $_SESSION['Admin_Username'] = $Username;
 $_SESSION['Admin_Password'] = $Password;

   
   
          if('Admin' === $Username && 'Admin@123!+' === $Password)
          {
            header('Location: admin/index.php');
          }elseif ('User' === $Username && 'User@321!+' === $Password) {
             header('Location: user/index.php');
          }else{
            header('Location: login.php');
          }



}


?>

