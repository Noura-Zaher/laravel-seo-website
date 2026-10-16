<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": @json($product->name),
  "image": @json(filter_var($product->image, FILTER_VALIDATE_URL) ? $product->image : asset('storage/' . $product->image)),
  "description": @json($product->description),
  "sku": "PROD-{{ $product->id }}:optional",
  "brand": {
    "@type": "Brand",
    "name": "Our SEO Store"
  },
  "offers": {
    "@type": "Offer",
    "url": "{{ url()->current() }}",
    "priceCurrency": "USD",
    "price": "{{ $product->price }}",
    "availability": "https://schema.org/InStock",
    "itemCondition": "https://schema.org/NewCondition"
  }
}
</script>
