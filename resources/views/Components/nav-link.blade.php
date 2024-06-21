@props(['active' => false, 'type' => 'a'])

@if ($type === 'a')
    <a class="{{ $active ? 'text-gray-900 border-indigo-500' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} inline-flex items-center border-b-2 px-1 pt-1 text-sm font-medium"
        aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>
        {{ $slot }}
    </a>
@else
    <button
        class="{{ $active ? 'text-gray-900 border-indigo-500' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} inline-flex items-center border-b-2 px-1 pt-1 text-sm font-medium"
        aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>
        {{ $slot }}
    </button>
@endif
