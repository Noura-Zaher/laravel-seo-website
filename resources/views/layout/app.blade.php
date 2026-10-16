<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    @include('components.seo-meta', [
        'title' => $metaTitle ?? 'My E-Commerce - SEO Laravel',
        'metaDescription' => $metaDescription ?? 'Default meta description for our store.',
    ])

    <style>

        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f9f9f9; color: #333; }
        header { background: #7d9cbb; color: #fff; padding: 15px 20px; text-align: center; }
        nav { background: #6888a9; padding: 10px; text-align: center; }
        nav a { color: #white; color: #fff; margin: 0 15px; text-decoration: none; font-weight: bold; }
        nav a:hover { text-decoration: underline; }
        main { padding: 20px; max-width: 1000px; margin: auto; background: #fff; min-height: 400px; box-shadow: 0 0 10px rgba(0,0,0,0.05); }
        footer { text-align: center; padding: 15px; background: #2c3e50; color: #fff; margin-top: 20px; }
    </style>
</head>
<body>

    <header>
        <h1>Welcome to Our SEO Store</h1>
    </header>

    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/products') }}">Products</a>
        <a href="{{ url('/categories') }}">Categories</a>
        <a href="{{ url('/about') }}">About Us</a>
        <a href="{{ url('/contact') }}">Contact Us</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 My E-Commerce Store. All rights reserved.</p>
    </footer>

</body>
</html>
