<?php declare(strict_types=1);

namespace App\Http\Requests\Posts;

use App\Http\Requests\BaseRequest;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Validation\Rule;

class StoreRequest extends BaseRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255',  Rule::unique('posts', 'title')],
            'body' => ['nullable', 'string'],
            'description' => ['nullable', 'string'],
            'user_id' => ['required', Rule::exists('users', 'id')]
        ];
    }
}

