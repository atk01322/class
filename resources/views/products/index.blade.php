@foreach($products as $product)

    {{$product->name}}

    {{$product->description}}

    {{$product->price}}

    <a href="{{route('products.show', $product)}}">Show</a>

    <a href="{{route('products.edit', $product)}}">edit</a> 

@endforeach


<a href="{{route('products.create')}}">New</a> 

