<?php
header('Content-Type: application/json');
echo json_encode(array('status' => 'Ok'), JSON_NUMERIC_CHECK);
