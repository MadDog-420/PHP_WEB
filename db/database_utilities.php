<?php
    require_once('database_credentials.php');
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $result = '';
    if($mysqli->connect_errno){
        echo 'Error de conexión';
        exit;
    }

    function run_query(){
        global $mysqli, $result;
        $sql = 'SELECT * FROM productos';
        return $mysqli->query($sql);
    }
?>