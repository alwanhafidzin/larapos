<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

 class ApiDashboardController extends Controller{
	public function __construct() {}

		public function getLaporanPendapatan(Request $request) {
			$result = DB::select("SELECT DATE_FORMAT(tanggal, '%Y-%m') AS tgl, SUM(subtotal) AS total
				FROM t_nota GROUP BY DATE_FORMAT(tanggal, '%Y-%m') ORDER BY tanggal ASC", []);
			return response($result);
		}
	}