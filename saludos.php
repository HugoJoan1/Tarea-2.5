<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html{
            background-color: #05a3ffa6;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Escoje un idioma</h1>
    <h2>Idiomas:</h2>
    <!--select y form para dar opciones -->
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
    <!--El button para que aparezca un boton -->
    <button type="submit" name="saludo">Enseñar saludo</button>
    <br><br>

    <?php
        if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['saludo'])){
        // definimos lenguajes
        $lenguaje = $_POST["idiomas"];

        // Esta etiquita para que el resultado sea mas grande
        echo "<h2>";
        
        // if para que se muestre el saludo correcto

        if($lenguaje === "Ingles"){
            echo "<strong>Hello!</strong>";
        }
        else if($lenguaje === "Italiano"){
            echo "<strong>Ciao!</strong>";
        }
        else if($lenguaje === "Aleman"){
            echo "<strong>Hallo!</strong>";
        }
        else if($lenguaje === "Frances"){
            echo "<strong>Bonjour!</strong>";
        }
        else if($lenguaje === "Ruso"){
            echo "<strong>Привет!</strong>";
        }
        echo "</h2>";
    }
    ?>


</body>
</html>