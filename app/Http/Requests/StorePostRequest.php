<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //return Auth::user()->isAdmin();
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'=> ['required', 'max:255'],
            'title_slug'=> ['required', 'unique:posts', 'max:255'],
            'body'=> ['required', 'max:500'],
            'author'=> ['required', 'max:255'],
            'post_creation'=> ['required', 'date', 'max:255'],
            'photo'=> ['nullable', 'image', 'mimes:jpg,bmp,png', 'max:500000'],
            'excerpt'=> ['required', 'max:255'],
        ];
    }
}
