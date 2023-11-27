<?php
$host = 'localhost';
$db   = 'guvi';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);


$email = $_POST['email'];
$password = $_POST['password'];


$stmt = $pdo->prepare("SELECT id, email, password FROM users WHERE email = ?");
$stmt->execute([$email]);
$userData = $stmt->fetch();

if ($userData) {
 
    if (password_verify($password, $userData['password'])) {
        
        echo("<script>window.location.href='profile.html'</script>");
       
    } else {
      
        echo ("<script>alert('Please enter correct credentials')</script> ");
    }
} else {

    echo 'User Does Not Exist';
    echo ("<script>alert('User Does Not Exist')</script> ");
}
?>
