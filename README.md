# doudian-sdk-php
composer安装  composer require zkl/doudian-sdk-php  


doudian-sdk-php
抖店开放平台API SDK PHP版本 

原版本为doudian-sdk-php-1.0.0-20220331152531

仅仅修改为composer包,引入的方式使用命名空间(命名方式和composer文件路径一致)

调用都和抖店原文档一致(https://op.jinritemai.com/docs/guide-docs/87/1072#doc_anchor0.8608195319890699)

示例:(调用订单详情接口)

use DoudianSdkPhp\Api\OrderOrderDetail\OrderOrderDetailRequest;  
use DoudianSdkPhp\Api\OrderOrderDetail\Param\OrderOrderDetailParam;  
use DoudianSdkPhp\Core\AccessTokenBuilder;  
use DoudianSdkPhp\Core\GlobalConfig;  

//自用型应用获取Access Token  
GlobalConfig::getGlobalConfig()->appKey    = "XXXXXXXXXXXX";  
GlobalConfig::getGlobalConfig()->appSecret = "XXXXXXXXXXXXXXXX";  
$accessToken = AccessTokenBuilder::build(XXXXXXXXXXXX, ACCESS_TOKEN_SHOP_ID);  
if(!accessToken->isSuccess()) {  
  //todo   
  return;   
}   

//构建Open Api请求参数  
$request = new OrderOrderDetailRequest();  
$param = new OrderOrderDetailParam();  
$request->setParam($param);  
$param->shop_order_id = "XXXXXXXXXXXXXXX";  
//调用Open Api  
$response = $request->execute($accessToken);  
var_dump($response);
