@extends('layouts.master')

@section('title')
Shopping Cart
@endsection

@section('content')

@foreach($products->chunk(3) as $productChunk)

<div class="row">
@foreach($productChunk as $product)
	<div class="clo-sm-6 col-md-4">
    <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="{{$product->imagePath}}" alt="Card image cap">
           <div class="card-block">
            <h4 class="card-title">{{$product->title}}</h4>
               <p class="card-text">{{$product->description}}</p>
                 <div class="pull-left price">${{$product->price}}</div> 
             <a href="#" class="btn btn-outline-primary pull-right" role="button">Add to Cart</a>
          </div>
        </div>
    </div>

    @endforeach

  @endforeach




@endsection


