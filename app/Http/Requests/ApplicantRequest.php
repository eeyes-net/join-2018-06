<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicantRequest extends FormRequest
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
    public function rules()
    {
        return [
            'name' => 'required|max:32',
            'gender' => 'required|gender',
            'birthday' => 'required|date_format:Y-m-d',
            'cellphone' => 'required|cellphone',
            'college' => 'required|max:16',
            'class' => 'required|max:32',
            'qq' => 'required|max:16',
            'first' => 'required',
            'second' => 'required',
            'third' => 'required',
            'method' => 'required|max:20',
            'wanna_say' => 'max:300'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '姓名为必填字段',
            'name.max' => '姓名输入过长',
            'gender.required' => '性别为必填字段',
            'gender.gender' => '性格输入格式有误',
            'birthday.required' => '出生日期为必填字段',
            'birthday.date_format' => '出生日期输入格式有误',
            'cellphone.required' => '手机号码为必填字段',
            'cellphone.cellphone' => '手机号码输入格式有误',
            'college.required' => '书院为必填字段',
            'college.max' => '书院输入过长',
            'class.required' => '专业班级为必填字段',
            'class.max' => '专业班级输入过长',
            'qq.required' => 'QQ号为必填字段',
            'qq.max' => 'QQ号输入过长',
            'first.required' => '志愿为必填字段',
            'first.max' => '志愿输入过长',
            'second.required' => '志愿为必填字段',
            'second.max' => '志愿输入过长',
            'third.required' => '志愿为必填字段',
            'third.max' => '志愿输入过长',
            'method.required' => '了解途径必填字段',
            'method.max' => '了解途径输入过长',
            'wanna_say.max' => '想说的话太长了哦',
        ];
    }
}
