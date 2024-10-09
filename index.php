<?php
const PSSW = "30/05/2023";
const USER = "Roselyn Cruz";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $input_user = $_POST['username'];
    $input_password = $_POST['password'];

    if($input_user == USER && $input_password == PSSW){
        header("Location: Menu.php");
        exit();
    }else{
        echo"<h3>Usuario o contraseña incorrecto</h3>";
    }
}

?>

<body>
    <div>
    <h3>Login</h3>
    <form method="post" action="">
        Nombre de Usuario: <input type="text" name="username"><br><br>
        Contraseña: <input type="password" name="password"><br><br>
        <input type="submit" value="Iniciar sesión">
    </form>
    </div>
</body>

<style>

body {
    background-color: #e5458d;
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

div {
    background-color: #d0d8e9;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
}

h3 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
}

input[type="text"], input[type="password"] {
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

h3 {
    color: #e74c3c;
}


</style>