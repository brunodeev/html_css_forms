<?php

    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $name = $_POST['name'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $gender = $_POST['sexo'];
        $birth = $_POST['date_of_birth'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $address = $_POST['address'];

        $result = mysqli_query($connection, "INSERT INTO users(name,email,tel,gender,birth,city,state,address) VALUES ('$name','$email','$tel','$gender','$birth','$city','$state','$address')");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | BC</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <form action="form.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Clientes</b></legend>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="name" id="name" class="inputUser" required>
                    <label for="name" class="labelInput">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="tel" id="tel" class="inputUser" required>
                    <label for="tel" class="labelInput">Telefone</label>
                </div>
                <p>Sexo</p>
                <input type="radio" id="feminino" name="sexo" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="sexo" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="sexo" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                    <div class="date">
                        <label for="date_of_birth"><b>Data de Nascimento</b></label>
                        <input type="date" name="date_of_birth" id="date_of_birth" required>
                    </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="city" id="city" class="inputUser" required>
                    <label for="city" class="labelInput"><b>Cidade</b></label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="state" id="state" class="inputUser" required>
                    <label for="state" class="labelInput"><b>Estado</b></label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="address" id="address" class="inputUser" required>
                    <label for="address" class="labelInput"><b>Endereço</b></label>
                </div>
                <br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>