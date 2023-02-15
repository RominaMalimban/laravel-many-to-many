@extends('layouts.main-layout')

@section('content')
    <h1>Products</h1>

    @foreach ($categories as $category)
        <h2>Category: {{$category -> name}}</h2>

        <ul>
            @foreach ($category -> products as $product)
                <li>
                    <div>
                        <strong>Products name:</strong> {{$product -> name}} 
                    </div>  
                    <div>
                        <strong>Typology name:</strong> {{$product -> typology -> name}} 
                    </div> 
                    <div>
                        <strong>Digital:</strong> {{$product -> typology -> digital ? "Yes" : "No"}}
                    </div>
                </li>
            @endforeach
        </ul>
    @endforeach
@endsection