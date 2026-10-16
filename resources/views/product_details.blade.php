<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $product->meta_title ?? $product->name }}</title>
    <meta name="description" content="{{ $product->meta_description ?? $product->description }}">

    {{-- @include('components.seo-schema', ['product' => $product]) --}}
    <style>
        body { font-family: Tahoma, sans-serif; background: #f9f9f9; padding: 20px; }
        .container { max-width: 800px; margin: auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        h1 { color: #333; }
        .price { color: #27ae60; font-size: 24px; font-weight: bold; margin: 15px 0; }
        .category { background: #eef2f7; padding: 5px 10px; border-radius: 4px; display: inline-block; color: #555; }
        .back-btn { display: inline-block; margin-top: 20px; text-decoration: none; background: #3498db; color: white; padding: 10px 15px; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <span class="category">Department: {{ $product->category->name ?? 'public' }}</span>
        <h1>{{ $product->name }}</h1>
        <p class="price">${{ $product->price }}</p>
        <p>{{ $product->description }}</p>

        <hr style="border: 0; border-top: 1px solid #eee; margin: 20px 0;">
        <p style="font-size: 13px; color: #888;">code SEO (Slug): <code>{{ $product->slug }}</code></p>

        <a href="/" class="back-btn">← Back</a>
    </div>
</body>
</html>
