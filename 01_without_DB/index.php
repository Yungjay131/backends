<?php
require_once 'DataManager.php';

$query_param = $_GET['users'] ?? 15;

echo DataManager::getJSONData($query_param);
