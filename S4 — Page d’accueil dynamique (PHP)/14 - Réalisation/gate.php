<?php
$page = $_GET['page'] ?? '';
if ($page == 'schedule') {
    $pageTitle = 'Schedule';
} else {
    $pageTitle = 'Holidays';
}
require 'gate-template.php';
