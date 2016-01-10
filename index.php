<?
/*CONTROLLER*/
require __DIR__ . '/models/photo.php';

$items = photo_GetAll();
include __DIR__ . '/views/index.php';