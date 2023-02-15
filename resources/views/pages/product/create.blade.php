@extends('layouts.main-layout')

@section('content')

    <div class="container">
        <h1>Create a new product</h1>

        <form method="POST">
            <div class="form-group">
                <label for="name">Enter the name of the product</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="description">Enter a description of the product</label>
                <input type="text" class="form-control" name="description">
            </div>
            <div class="form-group">
                <label for="price">Enter the price of the product</label>
                <input type="number" class="form-control" name="price">
            </div>
            <div class="form-group">
                <label for="weight">Enter the weight of the product</label>
                <input type="number" class="form-control" name="weight">
            </div>

            <input type="submit" class="btn btn-primary" value="Create">
        </form>
    </div>
    
@endsection