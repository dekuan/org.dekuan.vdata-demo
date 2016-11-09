<?php

namespace App\Http\Constants;

use Illuminate\Database\Eloquent\Model;

use dekuan\vdata\CConst;


class CConstApi extends CConst
{
	const CONST_API_ERROR_FAILED_QUERY_GAME		= CConst::ERROR_USER_START + 100;
	const CONST_API_ERROR_BAD_REQUEST		= CConst::ERROR_USER_START + 105;


}
