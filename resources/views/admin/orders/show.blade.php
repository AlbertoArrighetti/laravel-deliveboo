@extends('layouts.app')

@section('content')
<section>
    <div class="container">

        <div class="text-center">

            <span class="text-center">
                {{$order->created_at->format('d/m/Y')}}
            </span>
            <span class="text-center">
                {{$order->created_at->format('H:i')}}
            </span>
        
        </div>

        <h2>
            Dati cliente:
        </h2>
        <ul>
            <li>{{$order->customer_name}} {{$order->customer_lastname}} </li>
            <li>{{$order->customer_email}} </li>
            <li>+39 {{$order->customer_phone}} </li>
            <li>{{$order->customer_address}} </li>
        </ul>

        <h2>
            Dettagli ordine:
        </h2>
        <ul>
            @foreach ($dishes as $dish)
            <li>
                {{$dish->name}}
                x
                {{ $dish->pivot->where('dish_id', $dish->id)->where('order_id', $order->id)->first()->quantity}}
            </li>
            @endforeach
        </ul>

        <div>Totale:</div>
        <div class="mb-5">
            € {{$order->total_price}}
        </div>


        <a href="{{route('admin.orders.index')}}" class="btn btn1">Ordini</a>

    </div>
</section>
@endsection