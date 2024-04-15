<div class="mb-8 text-center">
    <a href="{{ $href }}" {{ $attributes->merge(['class' => 'rounded-md p-4 duration-300 text-center']) }}>
        {{ $slot }}
    </a>
</div>
