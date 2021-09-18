<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link href="../Plugin/fontawesome/css/all.css" rel="stylesheet">
<script defer src="../Plugin/fontawesome/js/all.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<div class="container">
    <div class="row">
        <div class="col-md-2">
            
        </div>
    </div>
</div>

<div class="navbar navbar-expand-lg navbar-light bg-light">
    <ul class = "navbar-nav mr-auto mt-2 mt-lg-0" >
        <?php
            include "../Library/function_menu.php";
            session_start();
            $_SESSION['leveluser'] = "admin";
            buat_menu("dashboard", "home", "Menu", array("admin","author"));
            buat_menu("dashboard", "home", "Data", array("admin","author"));
            
            buka_dropdown("book", "", array("admin","author"));
                buat_submenu("conten1", "Content 1", array("admin", "author"));
                buat_submenu("conten2", "Content 2", array("admin", "author"));
                buat_submenu("conten3", "Content 3", array("admin", "author"));
            tutup_dropdown(array("admin","author"));
            buat_menu("About", "file", "About", array("admin","author"));

        ?>
    </ul>
</div>