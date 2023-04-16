
<?php

//header('Content-Type: application/json');

$servername = "server";
$username = "wmigue";
$password = "pass";
$dbname = "db";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

$DATA = json_decode($_POST['data'], true);
$arr = '';

try {
    //$resultado = $conn->query("select option_value from testing where id = 1");
    $resultado = $conn->query("select option_value from wp_options where option_id = 2496282");
    while ($row = mysqli_fetch_assoc($resultado)) {
        $arrSerializado = $row['option_value'];
    }

    //echo $arrSerializado;

    /////////////////////////////

    $array = unserialize($arrSerializado);
    //$count = count($array);
    //dame solo los ID
    foreach ($array as $k => $v) {
        foreach ($v as $k2 => $v2) {
            if ($k2 == 1 or $k2 == 2 or $k2 == 3) {
            } else {
                //echo $v2 . '<br>';
                $arrID[] = $v2;
            }
        }
    }
    //OBTENER EL ID MAXIMO.
    $maxID = max($arrID);
 
    $tagsArr = explode(", ", $DATA[0]['tags']);
    $elementoNuevo = [$maxID + 1, $DATA[0]['query'], $tagsArr, 1];
    array_push($array, $elementoNuevo);
    $array = serialize($array);

    // Preparar consulta SQL
    $stmt = $conn->prepare("UPDATE wp_options SET option_value = ? WHERE option_id = 111");
    // Serializar y vincular parámetros
    $stmt->bind_param("s", $array);
    // Ejecutar consulta
    $stmt->execute();

    echo json_encode(array('response' => 1, 'idMax'=> $maxID));
    ////////////////////////////

} catch (Throwable $e) {
    echo json_encode(array('response' => 0, 'message' => $e->getMessage()));
}
