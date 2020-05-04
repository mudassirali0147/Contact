@component('mail::message')
# Introduction


{{ $message }}


From 

{{ $name }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
