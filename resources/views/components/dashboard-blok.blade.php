<div
    {{ $attributes->merge(['class' => 'text-1xl w-4/6 rounded-lg p-4 text-center font-semibold flex items-center shadow-lg']) }}>
    <div class="flex items-center justify-between space-x-2">
        {{ $slot }}
    </div>
</div>
