<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

use App\Http\Models\Students;
use App\Http\Models\Sample;

class SampleController extends Controller
{
    public function index() {
    	$obj = new Sample();	
		$data = $obj::all();															
		$parents = $obj->getParents();
		$childs = $obj->getChildss($parents);
		$obj = new Students();
		$data2 = $obj::all();
		return view('main',['data' => $data,'data2' => $data2,'parents' => $parents,'childs' => $childs]);
	}
}
