@component('mail::message')
your order shipped, products:
@foreach ($order->products as $product)
    {{ $product->name }}
@endforeach

@component('mail::button', ['url' => route('index')])
info
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
