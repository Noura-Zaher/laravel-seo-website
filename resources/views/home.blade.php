<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My E-Commerce - SEO Laravel</title>
    <style>
        body { font-family: Tahoma, sans-serif; background: #f9f9f9; padding: 20px; }
        .container { max-width: 900px; margin: auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        h1, h2 { color: #333; }
        .product-card { border: 1px solid #ddd; padding: 15px; margin-bottom: 10px; border-radius: 5px; background: #fff; }
        .product-card a { color: #2980b9; text-decoration: none; font-weight: bold; }
        .product-card a:hover { text-decoration: underline; }
        .slug { color: #666; font-size: 12px; }
        .price { color: #27ae60; font-weight: bold; }

.pagination {
    display: flex;
    justify-content: center;
    list-style: none;
    padding: 0;
    margin-top: 20px;
}
.pagination li {
    margin: 0 5px;
}
.pagination li a, .pagination li span {
    padding: 8px 12px;
    border: 1px solid #ddd;
    color: #2980b9;
    text-decoration: none;
    border-radius: 4px;
}
.pagination li.active span {
    background-color: #2980b9;
    color: white;
    border-color: #2980b9;
}
.pagination li.disabled span {
    color: #ccc;
}
    </style>
</head>
<body>
    <div class="container">

@extends('layout.app')

@section('content')
    <h2>Available Products:</h2>
    <div style="display: flex; flex-direction: column; gap: 20px;">
        @foreach($products as $product)
            <div style="display: flex; align-items: center; gap: 20px; border: 1px solid #ddd; padding: 15px; border-radius: 8px; background: #fff; box-shadow: 0 2px 5px rgba(0,0,0,0.02);">

                <div style="flex-shrink: 0;">
                    <img src="https://picsum.photos/seed/product{{ $product->id }}/120/120" alt="{{ $product->name }}" style="width: 120px; height: 120px; object-fit: cover; border-radius: 6px;">
                </div>


                <div style="flex-grow: 1;">
                    <h3 style="margin: 0 0 8px 0;">
                        <a href="/products/{{ $product->slug }}" style="color: #2c3e50; text-decoration: none;">
                            {{ $product->name }}
                        </a>
                    </h3>
                    <p style="margin: 0 0 8px 0; color: #666; font-size: 14px;">{{ $product->description }}</p>
                    <p style="margin: 0 0 5px 0; font-size: 13px;">Category: <strong>{{ $product->category->name ?? 'Uncategorized' }}</strong></p>
                    <p style="margin: 0; color: #27ae60; font-weight: bold;">Price: ${{ $product->price }}</p>
                </div>

            </div>
        @endforeach
    </div>

    <div style="margin-top: 30px; text-align: center;">
        {{ $products->links() }}
    </div>
@endsection
</body>
</html>
