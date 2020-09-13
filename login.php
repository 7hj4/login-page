<?php 
    // include some files 
    include 'config/config.php';

if(isset($_SESSION['logged_in'])){
    header ('location:dashborad.php');
    }

if(isset($_POST['login'])){

    // Prepare statment prevent Sql Injection 

    $email = mysqli_real_escape_string($connection,$_POST['email']);
    $password = mysqli_real_escape_string($connection,$_POST['password']);
    
    $query = $connection->query("select id , username , email ,password from users where email ='$email'");

    $result = $query->fetch_assoc();
  
    if(!$result){
              echo'Errors something worng :(';
    }else{
            if($password == $result['password']){
                $_SESSION['username'] = $result['username'];
                $_SESSION['logged_in'] = true;
                $_SESSION['user_id'] = $result['id'];
                header('location:dashborad.php');

        }
    }
}
?>
