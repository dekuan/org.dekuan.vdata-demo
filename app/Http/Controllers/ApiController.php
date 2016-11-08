<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiController;

use dekuan\delib\CLib;



class ApiController extends Controller
{
	public function VData()
	{
		return $this->_GetInstanceByVersion()->VData();
	}

	////////////////////////////////////////////////////////////////////////////////
	//	Private
	//

	private function _GetInstanceByVersion()
	{
		$oRet = null;

		if ( CLib::IsCaseSameString( "1.1", $this->m_sAcceptedVersion ) )
		{
			$oRet = ApiController\ApiController_V1_1::GetInstance();
		}
		else if ( CLib::IsCaseSameString( "1.0", $this->m_sAcceptedVersion ) )
		{
			$oRet = ApiController\ApiController_V1_0::GetInstance();
		}
		else
		{
			$oRet = ApiController\ApiController_V1_0::GetInstance();
		}

		return $oRet;
	}
}




