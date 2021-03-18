<?php

    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class RatingRequest extends FormRequest{
        public function authorize(){
            return true;
        }

        public function rules(){
            return [
                'name' => 'required',
                'email' => 'required|email|unique:review',
                'feedback' => 'required'
            ];
        }

        public function messages(){
            return [
                'name.required' => 'Please enter name',
                'email.required' => 'Please enter email',
                'email.email' => 'Please enter valid email',
                'email.unique' => 'review already submitted using this email address, please select another email address',
                'feedback.required' => 'Please enter feedback'
            ];
        }
    }
