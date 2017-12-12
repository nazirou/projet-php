<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion de l'identifiant</title>
</head>
<form action="connexion.php" method="POST">
<body>
<table>
    <tr>
    <td>Identifiant :<input type="text" name="identifiant" value="identifiant"</td><br>
    <td>Mot de Passe<input type="password" name="password" value="password" </td><br>
    </tr>
    <select id="olio"><br>
    <option value="">Profil</option>
    <option value="">user</option>
    <option value="">admin</option>
    </select><br>
    </table>
    <input type="submit" name="connexion" value="connexion">
    </div>
</body>
</html>
<?php
if (isset($_POST["connexion"])){
    extract($_POST);
    if($identifiant=="user"){
        if($identifiant=="user" && $password=="user"){
            $_SESSION["$olio"]==header("location:site1.php");
            $_SESSION["$olio"];
        }elseif ($identifiant=="admin" && $password=="admin") {
            echo" vous n'etes pas éligible";
        }else{
            echo"identifiant ou password incorrect veuillez ressayer";
        }
    }
    elseif ($identifiant=="admin") {
        if($identifiant=="admin" && $password=="admin"){
            $_SESSION["$olio"]==header("location:anale.php");
            $_SESSION["$olio"];
        }elseif($identifiant=="user" && $password=="user"){
            echo"vous n'etes pas éligible";
        }else{
            echo"login ou password incorrect veuillez ressayer";
        }
    }
}