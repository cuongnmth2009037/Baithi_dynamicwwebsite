<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Event_Validate extends FormRequest
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
           'eventName'=>['required','min:20'],
            'bandName'=>['required'],
            'startDate'=>['required','after:today'],
            'endDate'=>['required','after:starDate'],
            'ticketPrice'=>['required','min:1'],
            'status'=>['required','min:0','max:3'],
            'portfolio'=>['required']
        ];
    }
    public function messages()
    {
        return [
          'eventName.required'=>'Vui lòng nhập tên sự kiện',
          'eventName.min'=>'Tên sự kiện phải lớn hơn 20 ký tự',
          'bandName.required'=>'Vui lòng nhập tên ban nhạc',
          'startDate.required'=>'Vui lòng nhập ngày bắt đầu sự kiện',
          'startDate.after'=>'Ngày bắt đầu sự kiện phải sau ngày hiện tại',
          'endDate.required'=>'Vui lòng nhập ngày kết thúc sự kiện',
          'endDate.after'=>'Ngày kết thúc sự kiện phải sau ngày bắt đầu',
          'ticketPrice.required'=>'Vui lòng nhập giá vé',
          'ticketPrice.min'=>'Bạn cần nhập tối thiểu 1$',
          'status.required'=>'Vui lòng nhập status',
          'portfolio.required'=>'Vui lòng nhập portfolio',
        ];
    }
    public function withValidator($validator){
        $validator->after(function ($validator){
            if ($this->get('status')!=[0,1,2,3]){
                $validator->errors()->add('status','Bạn cần nhập status từ (0-3)');
            }
        });
    }
}
