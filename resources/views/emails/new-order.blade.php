
<h1>
    Grazie del tuo ordine, {{$order->customer_name}}!
</h1>

<p>
    Il tuo ordine verrà spedito a: {{$order->customer_address}} <br>
    Totale ordine: {{$order->total_price}}
</p>

@foreach($order->dishes as $dish)
    <p>{{ $dish->name }} - €{{ $dish->price }}</p>
@endforeach
