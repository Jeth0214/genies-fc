<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsPostRequest extends FormRequest
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
            'fullname' => 'required|max:50',
            'email' => 'required|email',
            'phone' => ['required', 'regex:/^(?:\+966\d{9}|05\d{8})$/'],
            'message' => 'required|min:10|max:2000',
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => app()->getLocale() == 'en' ? 'Name is required' : 'الاسم مطلوب',
            'fullname.max' => app()->getLocale() == 'en' ? 'Name too long. Maximum of 50 characters only' : 'الاسم طويل جدًا. الحد الأقصى هو 50 حرفًا فقط',
            'email.required' => app()->getLocale() == 'en' ? 'Email Address is required' : 'عنوان البريد الإلكتروني مطلوب',
            'email.email' => app()->getLocale() == 'en' ? 'Email address is invalid' : 'عنوان البريد الإلكتروني غير صالح',
            'message.required' => app()->getLocale() == 'en' ? 'Message is required' : 'رقم الهاتف مطلوب',
            'message.min' => app()->getLocale() == 'en' ? 'Message too short. Please input at least 10 characters' : 'الرسالة قصيرة جدًا. يرجى إدخال 10 أحرف على الأقل',
            'message.max' => app()->getLocale() == 'en' ? 'Message too long. Maximum of 2000 characters only' :  'الرسالة طويلة جدًا. الحد الأقصى هو 2000 حرف فقط',
            'age.required' => app()->getLocale() == 'en' ? 'Age is required' : 'العمر مطلوب',
            'phone.required' => app()->getLocale() == 'en' ? 'The phone number field is required' : 'الرسالة مطلوبة',
            'phone.regex' => app()->getLocale() == 'en' ? 'The phone number is invalid' : 'صيغة رقم الهاتف غير صالحة'
        ];
    }
}
