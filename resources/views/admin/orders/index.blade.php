@extends('layouts.app')

@section('content')
<section>
    <a class="btn btn-warning" href="{{route('admin.')}}"><i class="fa-solid fa-angle-left"></i> Torna indietro</a>
    @dd($orders)
    @forelse ($orders as $order)
        <h2>
            ordine numero {{$order->id}}
        </h2>

        <h3>
            data: {{$order->created_at}}
        </h3>

        <h4>
            prezzo ordine: {{$order->total_price}} €
        </h4>

        <h4>
            nome cliente: {{$order->customer_name}} {{$order->customer_lastname}} 
        </h4>
    @empty
        <tr>
        <td>Nessun ordine ricevuto</td>
        </tr>
    @endforelse
</section>
@endsection