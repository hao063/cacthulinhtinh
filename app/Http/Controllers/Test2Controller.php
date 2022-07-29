<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\TestRepository;

class Test2Controller extends Controller
{
    //
    protected $post;
    protected $validator;
    public function __construct(PostRepository $PostRepository, PostValidator $validator){
        $this->post = $PostRepository;
        $this->validator = $validator;
    }

}
