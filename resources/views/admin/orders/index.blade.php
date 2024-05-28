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
                    <th scope="col" class="text-center">Data</th>
                    <th scope="col" class="text-center">Ora</th>
                    <th scope="col" class="text-center">Totale</th>
                    <th scope="col" class="text-center">Cliente</th>
                    </tr>
                </thead>
                
                <tbody>
                    @forelse ($orders as $order)
                        <tr class="align-middle dish">

                            <td class="text-center">
                                {{$order->created_at->format('d/m/Y')}}
                            </td>
                            
                            <td class="text-center">
                                {{$order->created_at->format('H:i')}}
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