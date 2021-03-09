<?php 
namespace Cms\Post\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Str;

class AbstractController extends BaseController
{
    public function toApi($data) :Object
    {
        $output = [
            'data' => $data,
            'code' => 200
        ];
        if(!is_array($data)){
            return response()->json($output, 200);
        }
        if(!$data){
            $output['data'] = 'undefined';
            $output['code'] = 500;
            return response()->json($output, 500);
        }
        if(count($data) < 1){
            $output['data'] = 'Data Not Found';
            $output['code'] = 404;
            return response()->json($output, 404);
        }
        return response()->json($output, 200);
    }
}
