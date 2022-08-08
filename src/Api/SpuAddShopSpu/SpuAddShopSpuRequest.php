<?php
namespace DoudianSdkPhp\Api\SpuAddShopSpu;

//auto generated code
class SpuAddShopSpuRequest
{

	private $param;

	private $config;


	public function setParam($param)
	{
		$this->param = $param;
	}

	public function getParam()
	{
		return $this->param;
	}

	public function setConfig($config)
	{
		$this->config = $config;
	}

	public function getConfig()
	{
		return $this->config;
	}

	public function getUrlPath()
	{
		return "/spu/addShopSpu";
	}

	public function execute($accessToken)
	{
		return \DoudianSdkPhp\Core\DoudianOpClient::getInstance()->request($this, $accessToken);
	}

	public function __construct()
	{
		$this->config = \DoudianSdkPhp\Core\GlobalConfig::getGlobalConfig();
	}
}
