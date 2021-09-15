@component('mail::message')
# Welcome to Instagram

Please click on the following button to validate your account.

@component('mail::button', ['url' => ''])
Validate
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
