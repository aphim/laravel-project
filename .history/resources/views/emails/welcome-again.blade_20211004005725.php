@component('mail::message')
# Introduction

Thanks so much for registering!

@component('mail::button', ['url' => 'https://laracasts.com'])
Start browsing
@endcomponent

@component('mail::panel', ['url' => ''])
Some inspirational quote to go here. :P
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
