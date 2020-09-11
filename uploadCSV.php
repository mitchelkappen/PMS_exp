<?php
$post_data = json_decode(file_get_contents('php://input'), true);
// the directory "data" must be writable by the server
$name = "data/".$post_data['filename'].".csv";
// $name = "/var/www/html/limesurvey2/upload/surveys/957764/files/data/test_data.csv";
// $name = "data/test_data.csv";

$data = $post_data['filedata'];
// echo "Joehoe, PHP voor CSV wordt gebruikt!";
// write the file to disk
file_put_contents($name, $data);
?>

