<?php



try {
    // $db = new mysqli('localhost', 'root', '', 'carolina');
    $db = new mysqli('remotemysql.com', 'jvoawi5fVR', 'STCvlyUME7', 'jvoawi5fVR');
    $acentos = $db->query("SET NAMES 'utf8'");
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}
