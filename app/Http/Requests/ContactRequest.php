<?php

    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class ContactRequest extends FormRequest{
        public function authorize(){
            return true;
        }

        public function rules(){
            return [
                'name' => 'required',
                'email' => 'required|email|unique:contact_us',
                'subject' => 'required',
                'message' => 'required'
            ];
        }

        public function messages(){
            return [
                'name.required' => 'Please enter name',
                'email.required' => 'Please enter email',
                'email.email' => 'Please enter valid email',
                'email.unique' => 'review already submitted using this email address, please select another email address',
                'subject.required' => 'Please enter subject',
                'message.required' => 'Please enter message'
            ];
        }
    }
