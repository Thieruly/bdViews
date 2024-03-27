<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turma</title>
    <style>
        .item {
            border: 4px solid #ccc;
            padding: 15px;
            margin-bottom: 15px;
        }
        p{
            font-family: arial;
            font-size: 18px;
        }
        
        h1{
            margin-top: 10px!important;
            color: #ffff;
            font-family: arial;
            font-size: 20px;
            align-items: center;
            text-align: center;
        }
        nav{
            width: 100%;
            height: 60px;
            background-color: #333; 
        }
    </style>
</head>
<body>
    <nav>
        <h1> | TURMAS | <h1>

    </nav>
    <br> <br>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "semaforo";
 
$conn = mysqli_connect($servername, $username, $password, $database);
 
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

$sql = "SELECT * FROM turmas";
$result = mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<div class='item'>";       
        echo "<p><strong>Turma:</strong> " . $row["nome_turma"] . "</p>";
        echo "<p><strong>Período:</strong> " . $row["periodo_turma"] . "</p>";
        echo "<p><strong>Cidade:</strong> " . $row["cidade_turma"] . "</p>";
        echo "</div>";
    }
} else {
    echo "Nenhum resultado encontrado";
}
 
mysqli_close($conn);
?>

</body>
</html>
