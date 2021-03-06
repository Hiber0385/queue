<?php
/**
 * Created by PhpStorm.
 * User: su_
 * Date: 18-8-28
 * Time: 下午4:59
 */

use \Swoft\App;
// Constants
!defined('DS') && define('DS', DIRECTORY_SEPARATOR);
// 系统名称
!defined('APP_NAME') && define('APP_NAME', 'swoft');
// 基础根目录
!defined('BASE_PATH') && define('BASE_PATH', dirname(__DIR__, 1));
// cli命名空间
!defined('COMMAND_NS') && define('COMMAND_NS', "App\Commands");
// 注册别名
$aliases = [
    '@root'       => BASE_PATH,
    '@app'        => '@root/app',
    '@res'        => '@root/resources',
    '@runtime'    => '@root/runtime',
    '@configs'    => '@root/config',
    '@resources'  => '@root/resources',
    '@beans'      => '@configs/beans',
    '@properties' => '@configs/properties',
    '@console'    => '@beans/console.php',
];
App::setAliases($aliases);