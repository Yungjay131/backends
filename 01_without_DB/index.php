<?php
require_once 'DataManager.php';

$query_param = $_GET['users'] ?? null;

$query_param_start = $_GET['from'] ?? 0;
$query_param_end = $_GET['to'] ?? 15;

if ($query_param) {
    echo DataManager::getJSONData2($query_param);
    exit;
}

echo DataManager::getJSONData($query_param_start, $query_param_end);
exit;
