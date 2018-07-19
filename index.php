<<?php
include 'Template.php';

$template = new Template;
$template->assign('username', '2Clutch');
$template->assign('age', 23);
$template->render('temp');

?>