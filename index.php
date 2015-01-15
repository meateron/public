<?php
require 'config.php';


header("Content-Type: text/html; charset={$_CONFIG['encoding']};");

require_once('/php/jqGridLoader.php');

$jq_loader = new jqGridLoader();

$jq_loader->set('grid_path', 'grids' . DIRECTORY_SEPARATOR);

$jq_loader->set('pdo_dsn', $_CONFIG['pdo_dsn']);
$jq_loader->set('pdo_user', $_CONFIG['pdo_user']);
$jq_loader->set('pdo_pass', $_CONFIG['pdo_pass']);

$jq_loader->set('debug_output', true);
$jq_loader->addInitQuery("SET NAMES 'utf8'");
$jq_loader->autorun();

$grid = 'jqSimple';


$rendered_grid = $jq_loader->render($grid);

preg_match('#<script>(.+?)</script>#is', $source_tpl, $m);


require 'templates/_layout.php';