<!DOCTYPE html>
<html lang="en">
<?php 
if (isset($_POST["submit"])) {
    if ($_POST["username"] == "" || $_POST["password"] == ""){
        $Kosong = true;
    }
    else if($_POST["username"] != "bagas" || $_POST["password"] != "admin"){
        $Salah = true;
    }
    else if($_POST["username"] == "bagas" || $_POST["password"] == "admin"){
        header("Location: Home.php");
        exit;
    } else {
        
    }
}
?>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Login.css" />
    <title>Login</title>
    <style>
        .p{
        margin: 0px 0px 0px 20px;
        font-size: 12px;
        color: red;
        }
    </style>
</head>

<body>
    <section>

        <form action="" method="post">
            <fieldset class="card">
                <legend>
                    <div class="div1">
                        <h1>ADMIN</h1>
                    </div><img class="img" src="./Image/coding.png" alt="">
                </legend>
                <label for="username">Username :</label><br />
                <input class="inp" type="text" name="username" id="username" title="Masukkan Username" maxlength="5"/><br />
                <label for="password">Password :</label><br />
                <input class="inp" type="password" name="password" id="password" title="Masukkan Password" onKeyPress="if(this.value.length==5 ) return false;"/>
                <?php
                if (isset($Kosong)) : ?>
                    <p class="p"> Username / Password Kosong</p>
                <?php endif; ?>
                <?php
                if (isset($Salah)) : ?>
                    <p class="p"> Username / Password Salah</p>
                <?php endif; ?>
                <button type="submit" name="submit">Login</button>
            </fieldset>
        </form>
    </section>
</body>
</hs