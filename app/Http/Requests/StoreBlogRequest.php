<?php

    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class StoreBlogRequest extends FormRequest {
        /**
         * Get the validation rules that apply to the request.
         *
         * @return array
         */
        public function rules() {
            return [
                'blog_categories' => ['integer', 'required'],
                'title' => ['string', 'required'],
                'caption' => ['string', 'required']
            ];
        }
    }
