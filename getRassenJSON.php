<?php

$strJsonFileContents = file_get_contents("rassen.json");
$rassen = json_decode($strJsonFileContents, true);

header('Content-Type: application/json'); // <-- header declaration
echo json_encode($rassen, true); // <--- encode
exit();