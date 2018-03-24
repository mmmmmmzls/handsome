<?php
namespace App\Http\Requests;

use App\Http\Requests\Request;

class LoginRequest extends Request{

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
    public function rules()
    {
        return [

            // 验证表单选项
            'username' => 'required',
            'password' => 'required',
        ];
    }

    public function messages() {
        return [
            // 错误信息
            'username.required' => '用户名不能为空',
            'password.required' => '密码不能为空'
        ];
    }

}


?>