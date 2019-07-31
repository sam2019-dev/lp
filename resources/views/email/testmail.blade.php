@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br> {{ $data["name"] }}
{{ config('app.name') }}
@endcomponent
