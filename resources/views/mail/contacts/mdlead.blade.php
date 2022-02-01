@component('mail::message')
# Introduction

{{ $contact['message'] }}

@component('mail::panel')
Name: {{ $contact['name'] }}

Email: {{ $contact['email'] }}
@endcomponent

@component('mail::button', ['url' => '$url'])
Back
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
