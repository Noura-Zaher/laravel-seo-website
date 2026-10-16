<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - Our SEO Store</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f8f9fa; margin: 0; padding: 0; }
        header { background-color: #5c768d; color: white; padding: 15px; text-align: center; }
        nav ul { display: flex; justify-content: center; list-style: none; padding: 0; gap: 20px; margin-top: 10px; }
        nav a { color: white; text-decoration: none; font-weight: bold; }
        .container { width: 80%; margin: 20px auto; }
        .product-card { background: white; padding: 15px; margin-bottom: 15px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); display: flex; gap: 20px; align-items: center; }
        .product-card img { width: 120px; height: 120px; object-fit: cover; border-radius: 6px; }
        .price { color: #28a745; font-weight: bold; }

nav role="navigation" svg {
    width: 20px;
    height: 20px;
}
.pagination {
    display: flex;
    justify-content: center;
    list-style: none;
    padding: 0;
    gap: 8px;
    margin-top: 20px;
}
.pagination li a, .pagination li span {
    padding: 8px 14px;
    border: 1px solid #ddd;
    border-radius: 6px;
    text-decoration: none;
    color: #5c768d;
    background-color: #fff;
    font-weight: bold;
    transition: all 0.3s ease;
}
.pagination li.active span {
    background-color: #5c768d;
    color: #fff;
    border-color: #5c768d;
}
.pagination li a:hover {
    background-color: #e9ecef;
}
    </style>
</head>
<body>

    <header>
        <h1>Our SEO Store</h1>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/products') }}">Products</a></li>
                <li><a href="{{ url('/categories') }}">Categories</a></li>
                <li><a href="{{ url('/about') }}">About Us</a></li>
                <li><a href="{{ url('/contact') }}">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h2>All Available Products</h2>

        @foreach($products as $product)
            <div class="product-card">
                {{-- <img src="{{ $product->image ? asset('storage/' . $product->image) : 'https://picsum.photos/200' }}" alt="{{ $product->name }}"> --}}
                 <img src="https://picsum.photos/seed/product{{ $product->id }}/120/120" alt="{{ $product->name }}" style="width: 120px; height: 120px; object-fit: cover; border-radius: 6px;">
                <div>
                    <h3>{{ $product->name }}</h3>
                    <p>{{ $product->description }}</p>
                    <p class="price">Price: ${{ $product->price }}</p>
                </div>
            </div>
        @endforeach

        <div style="margin-top: 20px;">
            {{ $products->links() }}
        </div>
    </div>

</body>
</html>
