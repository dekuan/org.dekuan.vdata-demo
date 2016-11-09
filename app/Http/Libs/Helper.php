<?php

namespace App;

use dekuan\vdata\CResponse;


/**
 *	Helper Library
 */
class Helper
{
	static function ResponseVData( $nErrorId, $sErrorDesc = '', $arrVData = [], $sVersion = '1.0', $bCached = null )
	{
		$cResponse	= CResponse::GetInstance();

		$cResponse->SetCorsDomains
		([
			'localhost',
			'.ladep.cn',
			'.dekuan.org'
		]);
		return $cResponse->GetVDataResponse( $nErrorId, $sErrorDesc, $arrVData, $sVersion, $bCached );
	}
}