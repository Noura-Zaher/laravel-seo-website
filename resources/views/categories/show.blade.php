@extends('layout.app')

@section('content')
    <div style="padding: 20px;">
        <h2>Category: {{ $category->name }}</h2>
        <p style="color: #666;">{{ $category->description }}</p>

        <hr style="margin: 20px 0; border: 0; border-top: 1px solid #eee;">

        <h3>Products in this Category:</h3>

        @if($products->count() > 0)
            <div style="display: flex; flex-direction: column; gap: 20px;">
                @foreach($products as $product)
                    <div style="display: flex; align-items: center; gap: 20px; border: 1px solid #ddd; padding: 15px; border-radius: 8px; background: #fff;">
                        <img src="https://picsum.photos/seed/product{{ $product->id }}/100/100" alt="{{ $product->name }}" style="width: 100px; height: 100px; object-fit: cover; border-radius: 6px;">
                        <div>
                            <h4 style="margin: 0 0 5px 0;">
                                <a href="/products/{{ $product->slug }}" style="color: #2c3e50; text-decoration: none;">
                                    {{ $product->name }}
                                </a>
                            </h4>
                            <p style="margin: 0 0 5px 0; font-size: 13px; color: #666;">{{ $product->description }}</p>
                            <p style="margin: 0; color: #27ae60; font-weight: bold;">Price: ${{ $product->price }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div style="margin-top: 25px; text-align: center;">
                {{ $products->links() }}
            </div>
        @else
            <p style="color: #888;">No products found in this category yet.</p>
        @endif
    </div>
@endsection
