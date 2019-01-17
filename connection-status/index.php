<?php
header('Content-Type: application/json');
echo json_encode(array('status' => 'OK'), JSON_NUMERIC_CHECK);
