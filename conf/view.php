<?php
/**
 * 配置文件-视图
 * Created by PhpStorm.
 * Author: jiangxijun
 * Datetime: 2018/2/8 17:18
 */
return [
    'tpl_path' => './view/',//模板文件目录
    'tpl_suffix' => '.html',//模板后缀
    'compile_path' => RUNTIME_PATH . 'cache/',//编译文件目录
    'compile_suffix' => '.php',//编译文件后缀
    'cache_switch' => true,//是否开启静态缓存
    'cache_path' => RUNTIME_PATH . 'cache/html/',//静态html缓存文件目录
    'cache_time' => 60,//静态html缓存时效（单位秒）
    'var_left' => '{{',//模板变量左标记
    'var_right' => '}}',//模板变量右标记
    'tag_left' => '<',//模板标签左标记
    'tag_right' => '>',//模板标签右标记
];