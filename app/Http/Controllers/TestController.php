<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PostRepository;

use App\Validators\PostValidator;
use App\Validators\BaseValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;

class TestController extends Controller
{
    //
    protected $post;
    protected $validator;
    public function __construct(PostRepository $PostRepository, PostValidator $validator){
        $this->post = $PostRepository;
        $this->validator = $validator;
    }

    public function viewCreate() {
        return view('create');
    }
    public function postCreate(Request $request){

        $dataForm = $request->all();
        try {
            $this->validator->with($dataForm)->passesOrFail(BaseValidatorInterface::RULE_CREATE);
        } catch (ValidatorException $e) {
           return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
        return $this->post->create($dataForm);
    }
}
