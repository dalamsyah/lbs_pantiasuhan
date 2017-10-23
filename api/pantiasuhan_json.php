<?php 

header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "panti_asuhan");
$result = $conn->query("SELECT * FROM tabel_pa order by nama_panti asc");
$outp = array();
$outp = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp);

?>