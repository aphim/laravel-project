@component('mail::message')
# Introduction

The body of your message.

-one

-two

-three

@component('mail::button', ['url' => 'https://laracasts.com'])
Button Text
@endcomponent

@component('mail::panel', ['url' => ''])
Filler text for the panel.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
