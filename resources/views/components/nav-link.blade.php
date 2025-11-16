@props(['active' => false])

<a 
    class="{{ $active ? 'active button-header' : 'button-header' }}"
    aria-current="{{ $active ? 'page' : 'false' }}" 
    {{ $attributes }}>
    {{ $slot }}
</a>