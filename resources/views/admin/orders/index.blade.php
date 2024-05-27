@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <div class="page-title">
            {{-- go back to the dish list --}}
            <a class="btn btn1" href="{{route('admin.')}}"><i class="fa-solid fa-angle-left"></i> Home</a>
            <h2 class="title">I tuoi ordini</h2>
        </div>

        <div class="box-list">
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">N°</th>
                    <th scope="col" class="text-center">Data e ora</th>
                    <th scope="col" class="text-center">Totale</th>
                    <th scope="col" class="text-center">Cliente</th>
                    </tr>
                </thead>
                
                <tbody>
                    @forelse ($orders as $order)
                        <tr class="align-middle dish">
                            <td>
                                {{$order->id}}
                            </td>
                            
                            <td class="text-center">
                                {{$order->created_at}}
                            </td>
    
                            <td class="text-center">
                                {{$order->total_price}} €
                            </td>
    
                            <td class="text-center">
                                {{$order->customer_name}} {{$order->customer_lastname}}
                            </td>                 
                        </tr>
                    @empty
                        <tr>
                            <td>Nessun ordine ricevuto</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection