<?php



try {
    // $db = new mysqli('localhost', 'root', '', 'carolina');
    $db = mysqli_connect('sql10.freesqldatabase.com', 'sql10418608', 'DlcWI2qJhQ', 'sql10418608', 3306);
    $acentos = $db->query("SET NAMES 'utf8'");
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}
