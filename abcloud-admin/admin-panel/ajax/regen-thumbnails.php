<?php

if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) 
    || (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest')
) {
    exit;
}
require_once '../../config.php';
require_once '../../class/class.setup.php';
require_once '../../class/class.gatekeeper.php';

$setUp = new SetUp('../../');

if (!GateKeeper::isUserLoggedIn() ) {
    die('fa-times');
}

foreach (glob('../../_content/thumbs/*.jpg', GLOB_NOSORT) as $deletable) {
    unlink($deletable);
}
echo 'fa-check';

exit;