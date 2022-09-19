<?php
require_once('config.php');
 
$query = $conn->query("SELECT count(id) FROM users");
$totalRecords = $query->fetch_row()[0];
 
$length = $_GET['length'];
$start = $_GET['start'];
 
$sql = "SELECT fullname, email FROM users";
 
if (isset($_GET['search']) && !empty($_GET['search']['value'])) {
    $search = $_GET['search']['value'];
    $sql .= " WHERE fullname like '%$search%' OR email like '%$search%'";
}
 
$sql .= " LIMIT $start, $length";
 
$query = $conn->query($sql);
$result = [];
while ($row = $query->fetch_assoc()) {
    $result[] = [
        $row['fullname'],
        $row['email'],
    ];
}
 
echo json_encode([
    'draw' => $_GET['draw'],
    'recordsTotal' => $totalRecords,
    'recordsFiltered' => $totalRecords,
    'data' => $result,
]);
