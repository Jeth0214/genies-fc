<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'player' => 'required|min:5|max:50|regex:/^[^0-9]*$/',
            'id' => 'required',
            'bloodType' => 'required',
            'age' => 'required|numeric',
            'phone' => ['required', 'regex:/^(?:\+966\d{9}|05\d{8})$/'],
            'date' => 'required',
            'agreed' => 'required|in:1',
        ];
    }

    public function messages()
    {
        return [
            'player.required' => app()->getLocale() == 'en' ? 'Player name is required' : 'مطلوب اسم اللاعب',
            'player.min' => app()->getLocale() == 'en' ? 'Player name must be at least 5 characters long' : 'يجب أن يكون اسم اللاعب على الأقل 5 أحرف',
            'player.max' => app()->getLocale() == 'en' ? 'Player name must be less than 50 characters long' : 'يجب أن يكون اسم اللاعب أقل من 50 حرفًا',
            'player.regex' => app()->getLocale() == 'en' ? 'Player name must not contain any numeric characters' : 'يجب ألا يحتوي اسم اللاعب على أي أرقام',
            'parent.regex' => app()->getLocale() == 'en' ? 'Parent name must not contain any numeric characters' : 'يجب ألا يحتوي اسم الوالدين على أي أحرف رقمية',
            'id.required' => app()->getLocale() == 'en' ? 'Iqama or residents ID is required' : 'مطلوب رقم هوية',
            'bloodType.required' => app()->getLocale() == 'en' ? 'Blood Type is required' : 'فصيلة الدم مطلوبة',
            'age.required' => app()->getLocale() == 'en' ? 'Age is required' : 'العمر مطلوب',
            'agreed.required' => app()->getLocale() == 'en' ? 'Please read and agree to our Terms, Conditions and Policies.' : 'يرجى قراءة والموافقة على شروطنا وأحكامنا وسياساتنا.',
            'agreed.in' => app()->getLocale() == 'en' ? 'Please read and agree to our Terms, Conditions and Policies.' : 'يرجى قراءة والموافقة على شروطنا وأحكامنا وسياساتنا.',
            'phone.required' => app()->getLocale() == 'en' ? 'The phone number field is required' : 'مطلوب رقم الهاتف',
            'phone.regex' => app()->getLocale() == 'en' ? 'The phone number is invalid' : 'صيغة رقم الهاتف غير صالحة',
        ];
    }
}
