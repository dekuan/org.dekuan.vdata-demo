<?php

namespace App\Http\Controllers\ApiController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Models;

use dekuan\vdata\CConst;
use dekuan\vdata\CResponse;


class ApiController_V1_0
{
	protected static $g_cStaticInstance;

	var $m_sServiceVersion	= '1.0';

	public function __construct()
	{
		$this->m_sServiceVersion	= '1.0';
	}
	static function GetInstance()
	{
		if ( is_null( self::$g_cStaticInstance ) || ! isset( self::$g_cStaticInstance ) )
		{
			self::$g_cStaticInstance = new self();
		}
		return self::$g_cStaticInstance;
	}


	public function VData()
	{
		$cResponse	= new CResponse();
		$cApiData	= new Models\CApiData();

		//
		//	...
		//
		$cResponse->SetCorsDomains
		([
			'localhost',
			'.ladep.cn',
			'.dekuan.org'
		]);
		$cResponse->Send
		(
			CConst::ERROR_SUCCESS,
			"",
			$cApiData->GetVData( Input::get() ),
			$this->m_sServiceVersion
		);
	}
}