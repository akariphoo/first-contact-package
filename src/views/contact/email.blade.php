@component('mail::message')
# Introduction

This is new email from {{ $name }}.
Message : {{ $message }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
