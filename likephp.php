<?php
/**
 * 核心文件
 * Created by PhpStorm.
 * Author: jiangxijun
 * Datetime: 2018/2/8 13:38
 */

namespace LikePHP;

use LikePHP\Core\App;

define('DS', DIRECTORY_SEPARATOR);
defined('LIKE_PATH') or define("LIKE_PATH", realpath(__DIR__) . DS);
require_once LIKE_PATH . 'vendor/autoload.php';
require_once LIKE_PATH . 'core/app.php';
App::run();