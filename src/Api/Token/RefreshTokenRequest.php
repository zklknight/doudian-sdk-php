<?php
namespace DoudianSdkPhp\Api\Token;

class RefreshTokenRequest
{

    //通用变量
    private $param;

    private $config;

    public function getParam()
    {
        return $this->param;
    }

    public function setParam($param)
    {
        $this->param = $param;
    }

    //通用方法
    public function getUrlPath() {
        return "/token/refresh";
    }

    public function setConfig($config) {
        $this->config = $config;
    }

    public function getConfig() {
        return $this->config;
    }

    public function execute($accessToken) {
        return \DoudianSdkPhp\Core\DoudianOpClient::getInstance()->request($this, $accessToken);
    }

    public function __construct()
    {
        $this->config = \DoudianSdkPhp\Core\GlobalConfig::getGlobalConfig();
        $this->param = new \DoudianSdkPhp\Api\Token\Param\CreateTokenParam();
    }
}