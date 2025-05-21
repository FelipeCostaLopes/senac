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
        alert ("Trabalho de Felipe Lopes, 2º ano, Senac Caxias do Sul");
    </script>
    <form method="post" >
        <h1>Tabuada</h1>
        <label for="fnum">Numero:</label><br>
        <imput type="number" id="num" name="num" value=""><br>
        <imput type="subtail"  value="Enviar"><br>
    </form>
        <?php
        echo "<br>"
        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            $num = $_POST["num"];
        echo "<center><h2>Tabuada do $num: </h2></center><br>";
            for($i=0;$i<=10;$i++) {
            $r = $i * $num;
            echo "<p>$i * $num = $r</p>"; 
            echo "<br>";
          }
        }       
        ?>
    </body>
</html>