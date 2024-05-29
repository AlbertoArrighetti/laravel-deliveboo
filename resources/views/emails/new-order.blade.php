
        <h1>
            Grazie del tuo ordine, {{$order->customer_name}}!
        </h1>

        <p>
            Il tuo ordine verrà spedito a: {{$order->customer_address}} <br>

            Dati Ristorante:
            <ul>
                <li>
                   Nome: {{$restaurant->restaurant_name}} 
                </li>

                <li>
                  Indirizzo: {{$restaurant->address}} 

                </li>
                <li>
                   N° di telefono: {{$user->phone_number}}   

                </li>
                <li>
                    P.IVA: {{$user->vat}}   

                </li>
                <li>
                    E-mail: {{$user->email}}   

                </li>
            </ul>

        </p>

        <h1>Riepilogo Ordine</h1>

        <ul>

            @foreach($order->dishes as $dish)
            <li>
                {{ $dish->name }} - €{{ $dish->price }} x {{ $dish->pivot->where('dish_id', $dish->id)->where('order_id', $order->id)->first()->quantity}} = €{{ $dish->price *  $dish->pivot->where('dish_id', $dish->id)->where('order_id', $order->id)->first()->quantity}}
            </li>
            @endforeach
        </ul>

        <p>

            Totale ordine: €{{$order->total_price}} <br>
        </p>