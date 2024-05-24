@extends('layouts.app')

@section('content')
<section>
    @forelse ($orders as $order)
        <h2>
            ordine numero {{$order->id}}
        </h2>

        <h2>
            cliente: {{$order->customer_name}}
        </h2>
    @empty
        <tr>
        <td>Nessun ordine ricevuto</td>
        </tr>
    @endforelse
</section>
@endsection