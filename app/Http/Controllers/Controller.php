<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use dekuan\vdata\CRemote;



class Controller extends BaseController
{
	use AuthorizesRequests;
	use DispatchesJobs;
	use ValidatesRequests;

	//	...
	protected $m_sAcceptedVersion;


	function __construct()
	{
		$this->m_sAcceptedVersion = CRemote::GetAcceptedVersionEx();
	}
}