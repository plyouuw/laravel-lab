<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Validation\Rule;

class StoreBookRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => [
                'required',
                'string',
                'max:255',
                Rule::unique('books', 'title')->ignore($this->book?->id),
            ],
            'author' => ['required', 'string', 'max:120'],
            'year' => ['nullable', 'integer', 'between:1000,' . (date('Y') + 1)],
            'category' => ['nullable', 'string', 'max:100'],
            'description' => ['nullable', 'string'],
            'is_available' => ['nullable'],
        ];
    }

    public function attributes(): array
    {
        return [
            'title' => 'tytuł książki',
            'author' => 'autor książki',
            'year' => 'rok wydania',
            'category' => 'kategoria',
            'description' => 'opis książki',
            'is_available' => 'dostępność w bibliotece',
        ];
    }
}
