@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-bold text-xs text-gray-900']) }}>
    {{ $value ?? $slot }}
</label>
