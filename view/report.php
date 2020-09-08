<?php require_once('./../config/config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table,
        td,
        th {
            border: 1px solid black;
        }

        table {
            display: block;
            border: none;
            width: fit-content;
            margin: auto;
            padding: 30px;
        }

        td,
        th {
            padding: 4px 17px;
        }

        th {
            background-color: #dadada;
        }
    </style>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {

        if (isset($_GET['id'])) {

            $id = $_GET['id'];
            $result;

            $sql = "SELECT * FROM survey_list WHERE sid=$id";

            $statement = $connection->prepare($sql);
            $statement->execute();
            if ($statement->rowCount()) {
                $row_all = $statement->fetchAll(PDO::FETCH_ASSOC);
                $result = $row_all[0];
            } elseif (!$statement->rowCount()) {
                //echo "[]";
            }
        }
    }
    ?>

    <table>
        <tr>
            <td colspan="2">Name</td>
            <td colspan="7"><?php echo  $result['name']; ?></td>
        </tr>
        <tr>
            <td colspan="2">Client Id</td>
            <td colspan="7"><?php echo  $result['clientid']; ?></td>
        </tr>
        <tr>
            <td colspan="2">Address</td>
            <td colspan="7"><?php echo  $result['address']; ?></td>
        </tr>
        <tr>
            <td colspan="2">City</td>
            <td colspan="7"><?php echo  $result['city']; ?></td>
        </tr>
        <tr>
            <td colspan="2">Geo Tag</td>
            <td colspan="7"><?php echo  $result['geotag']; ?></td>
        </tr>
        <tr>
            <td colspan="2">Cell</td>
            <td colspan="7"><?php echo  $result['phno']; ?></td>
        </tr>
        <tr>
            <td colspan="2">E-Mail</td>
            <td colspan="7"><?php echo  $result['email']; ?></td>
        </tr>
        <tr>
            <td colspan="2">Square feet</td>
            <td colspan="7"><?php echo  $result['squarefeet']; ?></td>
        </tr>
        <tr>
            <td colspan="2">New or Existing</td>
            <td colspan="7"><?php echo  $result['NewOrExisting']; ?></td>
        </tr>
        <tr>
            <td colspan="2">If existing, is it modular?</td>
            <td colspan="7"><?php echo  $result['is_it_Modular']; ?></td>
        </tr>
        <tr>
            <td colspan="2">If Modular, Brand name</td>
            <td colspan="7"><?php echo  $result['ModularBrand']; ?></td>
        </tr>
        <tr>
            <td colspan="2">Internet Enabled</td>
            <td colspan="7"><?php echo  $result['Internet_Enabled']; ?></td>
        </tr>
        <tr>
            <td colspan="2">IoT needed? </td>
            <td colspan="7"><?php echo  $result['IoT_Needed']; ?></td>
        </tr>
        <tr>
            <td colspan="2">No. of rooms</td>
            <td colspan="7"><?php echo  $result['NoOfRooms']; ?></td>
        </tr>
        <tr>
            <td colspan="2">No. of Door alarm</td>
            <td colspan="7"><?php echo  $result['NoOfDooralarm']; ?></td>
        </tr>
        <tr>
            <th colspan="2">Rooms to be Automated</th>
            <th colspan="5"> Switches</th>
            <th colspan="2"> Motion Sensor</th>
        </tr>
        <tr>
            <th></th>
            <th>No. of panels:</th>
            <th>Panel id</th>
            <th>Size (in inches)</th>
            <th>Morning</th>
            <th>Evening</th>
            <th>Night</th>
            <th>Evening</th>
            <th>Night</th>
        </tr>
        <?php

        $rooms = json_decode($result['rooms']);
        $DoorSensor = json_decode($result['DoorSensor']);
        ?>


        <?php foreach ($rooms as $key => $room) {
            $tc = $room->panels;
            for ($i = 0; $i < $tc; $i++) {
        ?>
                <tr>
                    <?php if ($i == 0) { ?>
                        <td rowspan="<?php echo $tc; ?>">Room<?php echo $key + 1;
                                                                echo " ";
                                                                print_r($room->name); ?></td>
                        <td rowspan="<?php echo $tc; ?>"><?php print_r($room->panels); ?></td>
                    <?php } else { ?>

                    <?php } ?>



                    <td><?php echo $room->switche[$i]->id; ?></td>
                    <td></td>
                    <td><?php echo $room->switche[$i]->morning; ?></td>
                    <td><?php echo $room->switche[$i]->evening; ?></td>
                    <td><?php echo $room->switche[$i]->night; ?></td>
                    <td><?php echo $room->MotionSensor[$i]->evening; ?></td>
                    <td><?php echo $room->MotionSensor[$i]->night; ?></td>








                </tr>
        <?php }
        } ?>

        <tr>
            <th colspan="2">Door Sensor</th>
            <th>Panel id</th>
            <th>Doors to be fitted</th>
            <th>Morning</th>
            <th>Evening</th>
            <th>Night</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach ($DoorSensor as $key => $DoorSensor2) {

        ?>
            <tr>
                <td colspan="2"><?php echo $key + 1; ?></td>

                <td><?php echo $DoorSensor2->switche->id; ?></td>
                <td><?php echo $DoorSensor2->switche->Doors_to_be_fitted; ?></td>
                <td><?php echo $DoorSensor2->switche->morning; ?></td>
                <td><?php echo $DoorSensor2->switche->evening; ?></td>
                <td><?php echo $DoorSensor2->switche->night; ?></td>
                <td></td>
                <td></td>
            </tr>
        <?php
        } ?>
        <tr>
            <th colspan="9">Remarks</th>
        </tr>
        <tr>
            <td><?php echo $result['remark']; ?></td>
            <td colspan="8"></td>
        </tr>
    </table>

</body>

</html>