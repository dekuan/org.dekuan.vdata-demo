<?php

namespace App\Http\Controllers\ApiController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Models;

use App\Helper;


class ApiController_V1_1 extends ApiController_V1_0
{
	public function __construct()
	{
		parent::__construct();

		//	...
		$this->m_sServiceVersion	= '1.1';
	}
	static function GetInstance()
	{
		if ( is_null( self::$g_cStaticInstance ) || ! isset( self::$g_cStaticInstance ) )
		{
			self::$g_cStaticInstance = new self();
		}
		return self::$g_cStaticInstance;
	}

	public function GetInfo()
	{
		$cApiData	= new Models\CApiData();

		//
		//	...
		//
		$arrData	= [];
		$nCall		= $cApiData->GetInfo( Input::get(), $arrData );
		return Helper::ResponseVData( $nCall, "", $arrData, $this->m_sServiceVersion );
	}
}