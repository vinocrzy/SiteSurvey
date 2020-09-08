<?php
require_once('./../config/config.php');
header('Content-type: application/json');
$respon = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['data'])) {
        
        $data = json_decode(json_encode($_POST['data']));
        $data->result = false;
        //echo json_encode($data->table[0]);



        $table = $data->table;


        $sql = "SELECT * FROM $table WHERE 1";


        $data->sql = $sql;


        $statement = $connection->prepare($sql);
        $statement->execute();
        if ($statement->rowCount()) {
            $row_all = $statement->fetchAll(PDO::FETCH_ASSOC);
            $data->result = $row_all;
            $data->error = 0;
            $respon = $data;
        } elseif (!$statement->rowCount()) {
            //echo "[]";
        }

        echo json_encode($respon);
    }
}
