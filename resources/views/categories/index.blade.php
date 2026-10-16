@extends('layout.app')

@section('content')
    <div style="padding: 20px;">
        <h2>All Categories</h2>
        <ul style="list-style: none; padding: 0;">
            @foreach($categories as $category)
                <li style="margin-bottom: 10px; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                    <a href="/categories/{{ $category->slug }}" style="font-size: 18px; font-weight: bold; color: #2c3e50; text-decoration: none;">
                        {{ $category->name }}
                    </a>
                    <p style="margin: 5px 0 0 0; color: #666; font-size: 14px;">{{ $category->description }}</p>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
