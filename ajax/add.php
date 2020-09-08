<?php
require_once('./../config/config.php');

header('Content-type: application/json');


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['data'])) {

        $data = json_decode(json_encode($_POST['data']));
        $data->rooms = json_encode($data->rooms);
        $data->DoorSensor = json_encode($data->DoorSensor);

        $sql = "INSERT INTO `survey_list`(`name`, `clientid`, `address`, `city`, `phno`, `email`, `squarefeet`, `NewOrExisting`, `is_it_Modular`, `ModularBrand`, `Internet_Enabled`, `IoT_Needed`, `NoOfRooms`, `NoOfDooralarm`, `rooms`, `DoorSensor`, `remark`) VALUES ('$data->name', '$data->clientid', '$data->address', '$data->city', '$data->phno', '$data->email', '$data->squarefeet', '$data->NewOrExisting', '$data->is_it_Modular', '$data->ModularBrand', '$data->Internet_Enabled', '$data->IoT_Needed', '$data->NoOfRooms', '$data->NoOfDooralarm', '$data->rooms', '$data->DoorSensor',$data->remark)";
        $insert_res = mysqli_query($db, $sql);
        if ($insert_res) {
            $data->server_msg = 'List added';
            $data->error = 0;
        } else {
            $data->server_msg = $db->error;
            $data->error = 1;
        }

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
