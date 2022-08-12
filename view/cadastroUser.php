<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro - Usuario</title>
</head>
<body>
    <header>
        <h1>Cadastro - Usuario</h1>
    </header>    
    <main>
        <h2>Realize seu cadastro</h2>

        <?php
        if ($_REQUEST){
            if ($_REQUEST['sucess'] == true){
                echo "Usuario Cadastrado com Sucesso";
            }
        }

        ?>
        <form action="../index.php?classe=User&metodo=store" method="post">
            <label for="user">
                Usuario:
                <input type="text" name="user" id="user">
            </label>

            <label for="password">
                Senha:
                <input type="password" name="password" id="password">
            </label>


            <input type="submit" value="Cadastrar" id="button">
        </form>
    </main>

</body>
</html>