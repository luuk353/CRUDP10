<div class="mb-3 mt-3 flex justify-center">
    <a href="{{ $href }}"
        {{ $attributes->merge([
            'class' =>
                'transform rounded-full px-6 py-3 font-semibold text-white transition duration-300 ease-in-out hover:scale-105',
        ]) }}>
        {{ $slot }}
    </a>
</div>
