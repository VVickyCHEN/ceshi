<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;

class ReController extends Controller
{
    //get.re  全部分类列表
    public function index($id = null){
        return view('re');
    }
       //get.re/create   添加分类
    public function create(){
        echo "这里是create方法不能传入参数";
    }
    //post.re  添加分类提交
    public function store(Request $request){
        $this->validate($request, [
           'title' => 'bail|required|string|between:2,32',
           'url' => 'sometimes|url|max:200',
           'picture' => 'nullable|string'
        ], [
           'title.required' => '标题字段不能为空',
           'title.string' => '标题字段仅支持字符串',
           'title.between' => '标题长度必须介于2-32之间',
           'url.url' => 'URL格式不正确，请输入有效的URL',
           'url.max' => 'URL长度不能超过200',
        ]);

        return response('表单验证通过');
    }
    //get.re/{id}  显示单个分类
    public function show($id){
        echo "这里是show方法传入的参数是：".$id;
        dd(Input::all());
    }
    //get.re/{id}/edit    更新分类
    public function edit($id){
        echo "这里是edit方法传入的参数是：".$id;
        dd(Input::all());
    }
    //put.re/{id}  显示单个分类信息
    public function update($id){
        echo "这里是update方法传入的参数是：".$id;
        dd(Input::all());
    }
    //delete.re/{id}   删除单个分类
    public function destroy($id){
        echo "这里是destory方法传入的参数是：".$id;
        dd(Input::all());
    }
}
