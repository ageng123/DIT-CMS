<?php 
namespace Cms\Post\Controllers;

use Cms\Post\Controllers\AbstractController;
use Cms\Post\Models\PostModel;
//Request List
use Cms\Post\Requests\PostRequest;
use Illuminate\Support\Str;

class PostController extends AbstractController
{
    
    public function index(){
        $data = PostModel::all();
       return $this->toApi($data);
    }
    public function show($posts){
        $data = PostModel::findOrfail($posts);
        return $this->toApi($data);
    }
    public function destroy($posts)
    {
        $data = PostModel::destroy($posts);
        return $this->toApi($data);
    }
    public function create()
    {
        
    }
    public function store(PostRequest $request)
    {
        
        $data = $request->validated();
        $output = (function() use ($data){
            PostModel::create($data);
        });
        $output($data);
        if(!$output) return $this->toApi('gagal');
        return $this->toApi($data);

    }

} 