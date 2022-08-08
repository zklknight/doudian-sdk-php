<?php
namespace DoudianSdkPhp\Api\SmsSignApply;

//auto generated code
class SmsSignApplyRequest
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
		return "/sms/sign/apply";
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
