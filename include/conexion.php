<?php



try {
    $db = new mysqli('localhost', 'root', '', 'carolina-spaa');
    $acentos = $db->query("SET NAMES 'utf8'");
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}
