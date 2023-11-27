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


$name = $_POST['name']; 
$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);


$stmt = $pdo->prepare("SELECT COUNT(*) as count FROM users WHERE email = ?");
$stmt->execute([$email]);
$result = $stmt->fetch();

if ($result['count'] > 0) {  
   
    echo ("<script>alert('User already exists. Please login')</script> ");
   
} else {
    
    $sql = "INSERT INTO users (name, username, email, password) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $username, $email, $password]);
  
    // echo ("<script>alert('Registration successful')</script> ");
    echo ("<script>window.location.href='login.html'</script> ");
}
?>
