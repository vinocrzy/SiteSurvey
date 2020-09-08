<?php
require_once('./../config/config.php');

header('Content-type: application/json');


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['id'])) {

        $id = $_POST['id'];
        $result;

        $sql = "DELETE FROM survey_list WHERE sid=$id";

        $statement = $connection->prepare($sql);
        $statement->execute();
        
        $sql = "SELECT * FROM survey_list WHERE 1";

        $statement = $connection->prepare($sql);
        $statement->execute();
        if ($statement->rowCount()) {
            $row_all = $statement->fetchAll(PDO::FETCH_ASSOC);
            $data->result = $row_all;
        } elseif (!$statement->rowCount()) {
            //echo "[]";
        }



        echo json_encode($data);
    }
}
