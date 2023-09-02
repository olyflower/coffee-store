<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

const BASE_DIR = __DIR__;

require_once BASE_DIR . '/vendor/autoload.php';
require_once BASE_DIR . '/configs/constants.php';

try {
    require_once BASE_DIR . '/configs/DB.php';
    require_once APP_DIR . 'index.php';

    $commonBlocks = getContent('name IN ("navigation", "footer")');

    require_once BASE_DIR . '/configs/router.php';

} catch (PDOException $exception) {
    d('PDOException');
    dd($exception->getCode() . ' - "' . $exception->getMessage() . '"');
} catch (Exception $exception) {
    dd($exception->getCode() . ' - "' . $exception->getMessage() . '"');
}
