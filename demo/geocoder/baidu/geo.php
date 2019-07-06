<?php
/**
 * | ---------------------------------------------------------------------------------------------------
 * | ProjectName: map
 * | ---------------------------------------------------------------------------------------------------
 * | Author：johnxu <fsyzxz@163.com>
 * | ---------------------------------------------------------------------------------------------------
 * | Home: https://www.xfjpeter.cn
 * | ---------------------------------------------------------------------------------------------------
 * | Data: 201907062019-07-06
 * | ---------------------------------------------------------------------------------------------------
 * | Desc:
 * | ---------------------------------------------------------------------------------------------------
 */

require('../../../vendor/autoload.php');

use johnxu\map\Exception\InvalidConfigException as InvalidConfigExceptionAlias;
use johnxu\map\Exception\InvalidGatewayException as InvalidGatewayExceptionAlias;
use johnxu\map\Map;

$config = [
    'amap_key'  => '',
    'baidu_key' => 'f2P4pO8SvOV0ek4O3IkW1GrvF3WHQaDa',
    'qq_key'    => '',
];
$params = [
    'address' => '高新区',
];
try {
    $result = Map::getInstance($config)->geocoder('baidu')->geo($params);

    print_r($result);

    // $result['result']['location']['lng'];  // 获取经度
    // $result['result']['location']['lat'];  // 获取纬度

} catch (InvalidConfigExceptionAlias $e) {
    echo "配置文件错误：".$e->getMessage();
} catch (InvalidArgumentException $e) {
    echo "参数错误：".$e->getMessage();
} catch (InvalidGatewayExceptionAlias $e) {
    echo "网关或接口返回错误：".$e->getMessage();
}