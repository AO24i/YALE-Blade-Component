@props(['href', 'tag' => 'css'])

<link rel="preload" href="{{ AssetX::href($href, $tag) }}" as="style" onload="this.rel='stylesheet'">
