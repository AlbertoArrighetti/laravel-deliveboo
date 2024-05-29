@extends('layouts.app')

@section('content')
<section>
    <div class="container">

        <div class="page-title">
            {{-- go back to the dish list --}}
            <a class="btn btn1" href="{{route('admin.orders.index')}}"><i class="fa-solid fa-angle-left"></i> Ordini</a>
            {{-- <h2 class="title">Ordine</h2> --}}
        </div>

        <div class="d-flex align-items-start gap-3">
            <div class="box-list flex-fill">
                <p>Ordine effettuato il {{$order->created_at->format('d/m/Y')}} alle ore {{$order->created_at->format('H:i')}}</p>
            
            
            
            
            
            
            </div>

            <div class="box-list col-4">
                <ul class="d-flex flex-column gap-2 ps-0">
                    <li>
                        <span class="fw-semibold">Cliente</span>
                        <br>
                        {{$order->customer_name}} {{$order->customer_lastname}}
                    </li>
                    <li>
                        <span class="fw-semibold">Indirizzo</span>
                        <br>
                        {{$order->customer_address}}
                    </li>
                    <li>
                        <span class="fw-semibold">Email</span>
                        <br>
                        {{$order->customer_email}}
                    </li>
                    <li>
                        <span class="fw-semibold">Telefono</span>
                        <br>
                        +39 {{$order->customer_phone}}
                    </li>
                </ul>
            </div>
        </div>


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