<script type="text/javascript" src="../Plugin/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="js/tinymce_conf.js"></script>

<?php
if (!defined("INDEX")) header('location:../index.php');

$show = isset($_GET['show']) ? $_GET['show'] : "";
$link = "?content=artikel";
buka_form($link, 'id_artikel', 'edit');
buat_textarea('Isi artikel', 'isi', 'isi', 'richtext');
tutup_form($link, "save", 'cancel');

switch ($show) {
    default:
    //menampilkan gambar
    break;

    case "form":
        //menampilkan form edit dan tambah data
        break;
    
    case "action":
        //menyisipkan atau mengedit data di database
        break;

    case "delete":
        //menghapus data di database
        break;
}
?>