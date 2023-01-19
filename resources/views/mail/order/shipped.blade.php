<x-mail::message>
you shipped order

<x-mail::button :url="{{ route('main.index') }}">
site
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
