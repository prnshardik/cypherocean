<?php

    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class PortfolioRequest extends FormRequest{
        public function authorize(){
            return true;
        }

        public function rules(){
            if($this->method() == 'PATCH'){
                return [
                    'name' => 'required',
                    'portfolio_category_id' => 'required',
                    'description' => 'required'
                ];
            }else{
                return [
                    'name' => 'required',
                    'portfolio_category_id' => 'required',
                    'description' => 'required'
                ];
            }
        }

        public function messages(){
            return [
                'name.required' => 'Please enter name',
                'portfolio_category_id.required' => 'Please select portfolio category',
                'description.required' => 'Please enter description'
            ];
        }
    }
