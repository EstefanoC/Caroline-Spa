<?php



try {
    // $db = new mysqli('localhost', 'root', '', 'carolina');
    // $db = new mysqli('fdb27.runhosting.com', '3827358_carolinaspa', 'carolinaspa123.', '3827358_carolinaspa', 3306);
    $db = mysqli_connect('fdb27.runhosting.com', '3827358_carolinaspa', 'carolinaspa123.', '3827358_carolinaspa', 3306);
    $acentos = $db->query("SET NAMES 'utf8'");
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}
