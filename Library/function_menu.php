<?php
function buat_menu($link, $ikon, $judul, $leveluser=array("admin")) {
	foreach($leveluser as $level) {
		if($_SESSION['leveluser']==$level)
			echo'<li class="nav-item">
					<a class="nav-item" href="?content='.$link.'">
					<i class="fas fa-'.$ikon.'"></i>'.$judul.'
					</a>
				</li>';
	}
}

function buat_submenu($link, $judul, $leveluser=array("admin")) {
	foreach($leveluser as $level) {
		if($_SESSION['leveluser']==$level)
			echo'<a class="dropdown-item" href="?content='.$link.'">'.$judul.'</a>';
		}
	}

function buka_dropdown($ikon, $judul, $leveluser=array("admin")) {
	foreach($leveluser as $level) {
		if($_SESSION['leveluser']==$level) 
			echo'<li class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
					<i class="fas fa-'.$ikon.'"></i>'.$judul.'<b class="caret"></b></a>
					<div class="dropdown-menu" aria-labelledby="dropdownId">';
	}
}

function tutup_dropdown($leveluser=array("admin")){
	foreach($leveluser as $level){
		if($_SESSION['leveluser']==$level)
		echo '</div></li>';
	}
}

?>