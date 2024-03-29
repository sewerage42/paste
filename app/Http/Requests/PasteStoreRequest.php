<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasteStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'text' => 'required|string',
            'status' => 'required|string',
            'user_id' => 'nullable|int',
            'expired_at' => 'nullable|date',
            'short_link' => 'required|string',
            ];
    }
}
