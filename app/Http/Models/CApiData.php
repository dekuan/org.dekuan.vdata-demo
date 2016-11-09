<?php

namespace App\Http\Models;

use dekuan\vdata\CConst;
use Illuminate\Database\Eloquent\Model;
use App\Http\Constants;

use dekuan\delib\CLib;


/**
 *	class of CApiData
 */
class CApiData
{
	protected static $g_cStaticInstance;

	public function __construct()
	{
	}
	static function GetInstance()
	{
		if ( is_null( self::$g_cStaticInstance ) || ! isset( self::$g_cStaticInstance ) )
		{
			self::$g_cStaticInstance = new self();
		}
		return self::$g_cStaticInstance;
	}


	/**
	 *	get info
	 *
	 *	@param $arrInputs	{array}
	 *	@param $arrInfo		{array}
	 *	@return int
	 */
	public function GetInfo( $arrInputs, array & $arrInfo = [] )
	{
		if ( ! CLib::IsArrayWithKeys( $arrInputs ) )
		{
			return CConst::ERROR_PARAMETER;
		}

		$nRet = CConst::ERROR_UNKNOWN;

		if ( $this->_IsAllowedRequest() )
		{
			$arrDbData	= [];
			if ( CConst::ERROR_SUCCESS ==
				$this->_FetchDataFromDb( $arrInputs, $arrDbData ) )
			{
				$arrInfo	= [
					'date'	=> date( "Y-m-d H:i:s" ),
					'time'	=> time(),
					'input'	=> $arrInputs,
					'data'	=> $arrDbData,
				];

				//	...
				$nRet = CConst::ERROR_SUCCESS;
			}
			else
			{
				$nRet = Constants\CConstApi::CONST_API_ERROR_FAILED_QUERY_GAME;
			}
		}
		else
		{
			$nRet = Constants\CConstApi::CONST_API_ERROR_BAD_REQUEST;
		}

		return $nRet;
	}



	////////////////////////////////////////////////////////////////////////////////
	//	Private
	//

	/**
	 *	check if the request is valid
	 *
	 *	@return boolean
	 */
	private function _IsAllowedRequest()
	{
		return true;
	}


	/**
	 *	Query data from database
	 *
	 *	@param $arrInputs	{array}
	 *	@param $arrDbData	{array}
	 *	@return int
	 */
	private function _FetchDataFromDb( $arrInputs, array & $arrDbData = [] )
	{
		if ( ! CLib::IsArrayWithKeys( $arrInputs ) )
		{
			return CConst::ERROR_PARAMETER;
		}

		//	...
		$nRet = CConst::ERROR_UNKNOWN;

		if ( true )
		{
			//	query data from database
			$arrDbData = [ 'list' => rand( 1000, 9999 ) ];
			$nRet = CConst::ERROR_SUCCESS;
		}

		return $nRet;
	}
}
