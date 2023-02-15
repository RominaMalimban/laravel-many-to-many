@extends('layouts.main-layout')

@section('content')
    <h1>Products</h1>

    {{-- rotta che rimanda a form --}}
    <a href="{{route('product.create')}}">Create a new product</a>

    {{-- ciclo per stampare i prodotti --}}
    <ul>
        @foreach ($products as $product)
        <h2>Product: {{$product -> name}}</h2>

            <ul>
                <li>
                    <div>
                        <strong>Products code:</strong> {{$product -> code}} 
                    </div>  
                    <div>
                        <strong>Typology name:</strong> {{$product -> typology -> name}} 
                    </div> 
                    <div>
                        <strong>Products description:</strong> {{$product -> description}} 
                    </div>  
                    <div>
                        <strong>Products price:</strong> {{$product -> price}} euro
                    </div> 
                    <div>
                        <strong>Products weight:</strong> {{$product -> weight}} kg
                    </div> 
                    <div>
                        <strong>Digital:</strong> {{$product -> typology -> digital ? "Yes" : "No"}}
                    </div>
                </li>
            </ul>
        @endforeach
    </ul>
    
@endsection