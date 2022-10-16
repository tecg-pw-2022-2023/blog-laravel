<?php

namespace App\Http\Requests;

use Illuminate\Http\RedirectResponse;
use Illuminate\Foundation\Http\FormRequest;

class StoreCommentRequest extends FormRequest
{
    protected $redirect;

    public function __construct()
    {
        $this->redirect = url()->previous().'/#create-comment-form';
    }


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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'body' => 'required',
        ];
    }
}
