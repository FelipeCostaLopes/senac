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
    <script>
        alert ("Trabalho de Felipe Lopes e Brian, 2º ano, Senac Caxias do Sul");
    </script>
<?php
// se não quiser bebida substitua a bebida por zero, tal qual o tamanho
$tamanho = "p";
$bebida = "5.99";
$preco= $bebida + 60;
echo "<h2>O valor total é $preco </h2>";

?> 
    
</body>
</html>