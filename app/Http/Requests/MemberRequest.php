<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class MemberRequest extends FormRequest
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
            'name' => 'required',
            'information' => 'required|max:300',
            'phone' => 'required|regex:/^([+0][389][0-9\s\-\+\(\)\(.)\/]*)$/|max:20',
            'date_of_birth' => 'required|after:-60 years|before:today',
//            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:10240',
            'position' => ['required', Rule::in(['Intern', 'Senior', 'Pm', 'Ceo', 'Cto', 'Bo'])],
            'gender' => ['required', Rule::in(['Male', 'Female'])]
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = (new ValidationException($validator))->errors();
        throw new HttpResponseException(
            response()->json(['errors' => $errors], JsonResponse::HTTP_UNPROCESSABLE_ENTITY)
        );
    }
}
