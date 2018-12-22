<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {   

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    protected $rules = [
        'name' => 'required|unique:users|string|between:2,10',
        'email' => ['required','unique:users','email'],
        'password' => ['required', 'string', 'min:6', 'confirmed'],
        
        'name.required' => '昵称必需',
        'name.unique' => '昵称唯一',
        'name.string' => '昵称必须为字符串',
        'name.between' => '昵称在2到10位',
    ];
    

    public function rules()
    {
        // 拿到validated的参数
        $rules = $this->rules;

        return $rules;
        
        // 返回的是路由
        dd(StoreBlogPost::getPathInfo());die;

        // 根据不同的情况, 添加不同的验证规则
        if (StoreBlogPost::getPathInfo() == '/save')//如果是save方法
        {
            $rules['Student.addr'] = 'sometimes';
        }
        if (StoreBlogPost::getPathInfo() == '/edit')//如果是edit方法
        {
            $rules['Student.addr'] = 'required|min:5';
        }
        if (StoreBlogPost::getPathInfo() == '/store')//如果是edit方法
        {
            dd('吃屎了你');die;
        }
        // 进行验证                
        return $rules;
    }
  // //返回给前台的错误信息
  //   public function messages(){
  //       $rules = $this->rules();
  //       $k_array = $this->strings_key;
  //       $v_array = $this->strings_val;
  //       foreach ($rules as $key => $value) {
  //           $new_arr = explode('|', $value);//分割成数组
  //           foreach ($new_arr as $k => $v) {
  //               $head = strstr($v,':',true);//截取:之前的字符串
  //               if ($head) {$v = $head;}
  //               $array[$key.'.'.$v] = $k_array[$key].$v_array[$v];                  
  //           }
  //       }
  //       return $array;
  //   }



}
