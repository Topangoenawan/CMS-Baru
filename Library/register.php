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

    .border1 {
        border-radius: 30px 0px 0px 30px;
        box-shadow: 0px 5px 15px 5px black;

    }

    .border1 p{
       font-size: 15px;
    }
    .border2 {
        border-radius: 0px 30px 30px 0px;
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
        <div class="col-md-1"></div>
        <div class="border1 col-md-5 bg-primary p-5 text-light">
            <h2>INFORMATION</h2>
            <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore repellat minima fuga veniam ipsam, recusandae, in laborum impedit omnis odio sunt! Error sunt modi veniam fugiat accusantium eius recusandae fugit ab itaque eaque, assumenda doloribus animi vel iste eum enim ipsa vero neque exercitationem harum, voluptatem nisi odit, obcaecati corporis?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum unde neque praesentium similique laudantium quibusdam vero harum officia error. Quos, iste ducimus facere veniam quidem dicta minus fuga praesentium. </p>

            <button type="button" class="btn btn-light text-body">Primary</button>
        </div>

        <div class="border2 col-md-5 bg-light p-5">
            <h2 class="text-primary mb-3">REGISTER FORM</h2>
            <?php 

            //  if(isset($_GET['username'])){
            //     $username = $_GET['username'];
            //     echo $username;
            // }
            include "form.php";
            buka_form("#",1,"edit");
            buat_textbox("Username", "username", "");
            buat_password("Password", "password", "");
            buat_password("Repassword", "re_password", "");
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
        </div>
    </div>
</div>
</body>
</html>





