<?php
/**
 * Created by PhpStorm.
 * Author: jiangxijun
 * Datetime: 2018/2/8 16:48
 */

namespace LikePHP\Core;

class App {

    public static function run() {
        echo 'app run';
        self::init();
    }

    private function init() {
        defined('APP_DEBUG') or define("APP_DEBUG", false);//默认调试模式关闭
        define("ROOT_PATH", getcwd() . DS);
        defined('APP_PATH') or define("APP_PATH", ROOT_PATH . 'app' . DS);
        defined('RUNTIME_PATH') or define("RUNTIME_PATH", ROOT_PATH . 'runtime' . DS);
    }
}