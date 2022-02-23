<?php
    require_once 'config.php';

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->query("SELECT temp_1 FROM iot_data.temperature WHERE Device_ID='{$_GET['id']}' ORDER BY Timestamp DESC LIMIT 1");

    while($row = $result -> fetch_array(MYSQLI_ASSOC)) {
        $data = ["temp_1"=>$row['temp_1']]; 
    }

    echo json_encode($data);

    $conn->close();
?>
