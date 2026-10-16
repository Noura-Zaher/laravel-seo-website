@props([
    'title' => 'My E-Commerce - SEO Laravel',
    'metaDescription' => 'Discover the best products online with our SEO-optimized Laravel store.',
    'canonicalUrl' => url()->current()
])

<title>{{ $title }}</title>
<meta name="description" content="{{ $metaDescription }}">
<link rel="canonical" href="{{ $canonicalUrl }}">
