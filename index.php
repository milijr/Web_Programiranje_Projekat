<h1>ADMIN LOG</h1>
<form action="index.php" method="post">
    <span>Username:</span> <input type="text" name="username"> <br><br>
    <span>Password:</span> <input type="password" name="password"> <br><br>
    <input type="submit" value="Prijavi se">
</form>

<style>
    body {
        margin: 0;
        padding: 0;
        height: 100vh;
        background-color: #000; /* Crna pozadina */
        background: url("/slike/pocetnaSlika.webp");
        background-size: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    span{
        color: #FFD700;
    }

    h1 {
        color: #FFD700; /* Zlatna boja */
        font-size: 36px;
        margin-bottom: 30px;
        letter-spacing: 2px;
    }

    .form-container {
        background-color: #111; /* Tamna pozadina forme */
        padding: 40px 30px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(255, 215, 0, 0.3);
        width: 320px;
        text-align: center;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #FFD700;
        background-color: #222;
        color: #FFD700;
        border-radius: 5px;
        margin-top: 5px;
    }

    input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #FFD700;
        color: #000;
        font-weight: bold;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
        background-color: #e6c200;
    }
</style>

<?php

include "connection.php";
include "functions.php";
session_start();

if (!empty($_POST)){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $usernameValidation = validateUsername($username);
    if ($usernameValidation !== true) {
        echo "<script>alert('$usernameValidation')</script>";

    }

    $sql = "SELECT * FROM admins WHERE username = '$username' AND password = '$password'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<script>alert('Uspjesna konekcija')</script>";
        echo "<script>window.location.href='gym.php'</script>";
    }else{
        echo "<script>alert('Neuspjesna konekcija')</script>";
    }




}




