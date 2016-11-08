<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;



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


	public function GetVData( $arrInputs )
	{
		return
		[
			'date'	=> date( "Y-m-d H:i:s" ),
			'time'	=> time(),
			'data'	=> $arrInputs,
		];
	}
}
