@component('mail::message')
# Introduction

Thanks so much for registering!

@component('mail::button', ['url' => 'https://laracasts.com'])
Start browsing
@endcomponent

@component('mail::panel', ['url' => ''])
Filler text for the panel.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
