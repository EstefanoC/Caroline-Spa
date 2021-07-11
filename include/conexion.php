<?php



try {
    // $db = new mysqli('localhost', 'root', '', 'carolina');
    $db = mysqli_connect('sql10.freemysqlhosting.net', 'sql10424238', 'JGSwQ8hgAs', 'sql10424238');
    $acentos = $db->query("SET NAMES 'utf8'");
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}
