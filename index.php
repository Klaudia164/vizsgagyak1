<?php

session_start();

require 'includes/db.php';
require 'model/felhasznalo.php';

$felhasznalo = new felhasznalok();

$page = 'page';

if(isset($_REQUEST['page'])) {

    if(file_exists('controller/'.$_REQUEST['page'].'.php')) {

            $page = $_REQUEST['page']; 

    }

}
$menupontok = array(
                        'page' => "Bejelentkezés", 
                        'bejelentkezes' => "Bejelentkezés",

                );



$title = $menupontok[$page];

include 'includes/htmlheader.php';
include 'includes/menu.php';
include 'controller/page.php';
?>