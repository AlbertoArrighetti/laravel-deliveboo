
<h1>
    Hai ricevuto un nuovo ordine
</h1>

<p>
    Dati cliente:
    <ul>
        <li> Nome: {{$order->customer_name}} </li>
        <li> Cognome: {{$order->customer_lastname}} </li>
        <li> Indirizzo: {{$order->customer_address}} </li>
        <li> Telefono: {{$order->customer_phone}} </li>
    </ul>


    <h1>Riepilogo ordine:</h1>

    <ul>
        @foreach($order->dishes as $dish)
        <li>
            {{ $dish->name }} - €{{ $dish->price }} x {{ $dish->pivot->where('dish_id', $dish->id)->where('order_id', $order->id)->first()->quantity}} = €{{ $dish->price *  $dish->pivot->where('dish_id', $dish->id)->where('order_id', $order->id)->first()->quantity}}

        </li>
        @endforeach
    </ul>
        

    <p>Totale ordine: {{$order->total_price}}</p> 

</p>

