<?php

namespace App\Http\Requests\Api;

use App\Exceptions\Api\ApiException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class ApiRequest extends FormRequest
{

// вызов исключения при провале авторизации пользователяы
   public function failedAuthorization()
   {
        throw new ApiException("Ошибка авторизации пользователя", 401);
   }
 //вызов исключения при провале валидцаии данных
   public function failedValidation(Validator $validator)
   {
        throw new ApiException("Ошибка валидации данных", 442, $validator->errors());
   }


}
