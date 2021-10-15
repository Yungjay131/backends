<?php
require_once 'DataManager.php';

$query_param = $_GET['users'] ?? null;
if ($query_param < 0 || $query_param > 299) $query_param = null;


$query_param_start = $_GET['from'] ?? 0;
$query_param_start = ($query_param_start < 0 || $query_param_start > 299) ? 0 : $query_param_start;

$query_param_end = $_GET['to'] ?? 50;
if ($query_param_end < 1 || $query_param_end > 299) $query_param_end = 50;

if ($query_param) {
    echo DataManager::getJSONData2($query_param);
    exit;
}

echo DataManager::getJSONData($query_param_start, $query_param_end);
exit;
