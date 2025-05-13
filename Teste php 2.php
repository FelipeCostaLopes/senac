<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body {
   width: 600px; 
   margin: 0 auto; 
   background-color: ##a0aac9; 
   padding: 0 20px 20px 20px; 
   border: 10px  ##a0aac9; 
   background-image: url('img/Bg.jpg');
   background-repeat: no-repeat;
   background-attachment: fixed;
   background-size: cover;
} 
h1 {
    font-family: 'Comic Sans MS';
    color:rgb(20, 38, 54);
}
h2 {
    color:rgb(20, 38, 54);
    font-family: Arial;
}
p {
    color:rgb(20, 38, 54);
    font-family: Arial;
}
</style>
</head>
<body>
    <center>
    <?php
    $txt = "";
echo "Oque o Felipe quer esta $txt";
?>
<br>
<?php
$x = 7;
echo var_dump($x);
$nome = "Senac";
echo "<br>";
echo var_dump($nome);
$salario = "1890.99";
echo "<br>";
echo var_dump($salario);
?> 
<center>
</body>
</html>