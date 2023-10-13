<?php
require "settings/init.php";

$data = json_decode(file_get_contents('php://input'), true);

/*
 * password: Skal udfyldes og være YougotTh1s
 * nameSearch: Valgfri
 */

/*
 $header = "HTTP/1.1 400 Bad Request"; // Sending malformed data results in a 400 Bad Request response.
 */
$data["password"] = "YougotTh1s";

if($data["password"] == "YougotTh1s") {
    $sql = "SELECT * FROM produkter WHERE 1=1";
    $bind = [];


if(!empty ($data["nameSearch"])) {
    $sql .= " AND prodName LIKE CONCAT ('%', :prodName, '%' ";
    $bind[":prodName"] = $data["nameSearch"];
}

    $produkter = $db->sql(sql: $sql, binds: $bind);
    header("HTTP/1.1 200 OK");

    echo json_encode(value: $produkter);

} else {
    header(header: "HTTP/1.1 401 Unauthorized");
    $error["errormessage"] = "Unfortunately the password was incorrect";
    echo json_encode(value: $error);
}

?>
