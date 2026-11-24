<?php

require_once 'fonctions.php';

$articles = get_derniers_articles();
$categories = get_categories();

require 'index-template.php';

