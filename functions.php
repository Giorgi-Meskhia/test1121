<?php
function register(){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        $name = $_POST['name'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        
        if ($password === $repassword) {
            $_SESSION['name'] = $name;
            header("Location: page.php");
            exit(); 
        } else {
            
            echo '<p>Registration failed. Please try again.</p>'; 
        }
    }
}
?>