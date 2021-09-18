<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
    <style>

    body {
        background-image: url(../Media/3.jpg);
        background-size: cover;
    }

    .container {
        margin-top: 75px;    
    }

    .border1 p{
       font-size: 15px;
    }
    .border2 {
        border-radius: 30px;
        box-shadow: 5px 5px 15px 5px black;
    }
</style>
</head>
<body>
<div class="container">
    <!-- <div class="row mb-2">
        <div class="col">
            <h1 class="text-center text-light">WELCOME TO MY WEBSITE</h1>
        </div>
    </div> -->
    <div class="row">
        <div class="col-md-3"></div>
        <div class="border2 col-md-5 bg-light p-5">
            <h2 class="text-primary mb-3">LOGIN FORM</h2>
            <?php 

            //  if(isset($_GET['username'])){
            //     $username = $_GET['username'];
            //     echo $username;
            // }
            include "../Library/function_form.php";
            buka_form("#",1,"edit");
            buat_textbox("Username", "username", "");
            buat_password("Password", "password", "");
            // buat_password("Repassword", "re_password", "");
            // buat_textbox("Email", "email", "");
            // buat_textarea("Alamat", "alamat", "");
            // $list = array();
                // $list[] = array('val' => 'islam', 'cap' => 'ISLAM');
            // $list[] = array('val' => 'kristen', 'cap' => 'KRISTEN');
            // $list[] = array('val' => 'katolik', 'cap' => 'KATOLIK');
            // $list[] = array('val' => 'hindu', 'cap' => 'HINDU');
            // buat_combobox("Agama", "agama", $list, "");
            echo "<br>";
            tutup_form("#");
            ?>

            <?php
                include "../Library/config.php";
                if(isset($_GET['username']) AND isset($_GET['password'])){
                    $DataNamaDariInputUser = $_GET['username'];
                    $DataPassDariInputUser = md5($_GET['password']) ;
                    $cek = 0;
                    $dataDariDatabase = $mysqli->query("SELECT * FROM `register`");
                    while($data = $dataDariDatabase->fetch_array()){
                        $DataNamaDariDatabase = $data['username'];
                        $DataPassDariDatabase = $data['password'];
                        $DataIdDariDatabase = $data['id'];

                        if ($DataNamaDariDatabase == $DataNamaDariInputUser) {
                            $cek += 1;
                            if($DataPassDariDatabase == $DataPassDariInputUser) {
                                header('location:menu.php');
                            }
                            else{
                                echo '<div class="alert alert-warning" role="alert">
                                    <strong>password salah</strong>
                                </div>';
                            }
                        }
                    } if ($cek <= 0) {
                        echo '<div class="alert alert-warning" role="alert">
                                    <strong>password salah</strong>
                                </div>';
                    }
                }
            ?>
        </div>
    </div>
</div>
</body>
</html>





