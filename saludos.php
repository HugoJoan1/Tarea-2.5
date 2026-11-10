<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Escoje un idioma</h2>
    <form method="POST" action="">
    <select id="idiomas" name="idiomas">
    <option value=""></option>
    <option value="Ingles">Ingles</option>
    <option value="Italiano">Italiano</option>
    <option value="Aleman">Aleman</option>
    <option value="Frances">Frances</option>
    <option value="Ruso">Ruso</option>
    </select>

    <br><br>
    <button type="submit" name="saludo">Enseñar saludo</button>
    <br><br>

    <?php
        if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['saludo'])){
        $lenguaje = $_POST["idiomas"];

        if($lenguaje === "Ingles"){
            echo "Hello!";
        }
        else if($lenguaje === "Italiano"){
            echo "Ciao!";
        }
        else if($lenguaje === "Aleman"){
            echo "Hallo!";
        }
        else if($lenguaje === "Frances"){
            echo "Bonjour!";
        }
        else if($lenguaje === "Ruso"){
            echo "Привет!";
        }
    }
    ?>


</body>
</html>