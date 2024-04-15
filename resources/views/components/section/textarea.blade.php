 <textarea name="{{ $name }}" id="{{ $id }}"
     {{ $attributes->merge(['class' => 'w-full rounded border bg-gray-700 px-3 py-2 text-white focus:border-indigo-500 focus:outline-none focus:ring focus:ring-indigo-200']) }}
     placeholder="{{ $placeholder }}">{{ $slot }}</textarea>
