<?php 
session_start(); 
include "dbconect.php";
if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    if (empty($username)) {
        header("Location: login.php?error=User Name is required");
        exit();
    }else if(empty($password)){
        header("Location: login.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM loginform WHERE username='$username' AND password='$password'";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $password) {
                echo "Logged in!";
                echo $row['username'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['id'] = $row['id'];
              header("Location: navigation.php");
                exit();
            }else{
                header("Location: login.php?error=Incorect User name or password");
                exit();
            }
        }else{
            header("Location: login.php?error=Incorect User name or password");
            exit();
        }
    }
}else{
    header("Location: login.php");
    exit();
}
?>