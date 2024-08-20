@props(['type' => "info"])

@php
    switch ($type) {
        case 'info':
            $class = 'text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
            break;

        case 'danger':
            $class = 'text-red-800 bg-red-50 dark:bg-gray-800 dark:text-red-400';
            break;

        case 'success':
            $class = 'text-green-800 bg-green-50 dark:bg-gray-800 dark:text-green-400';
            break;

        default:
            $class = 'text-gray-800 bg-gray-50 dark:bg-gray-800 dark:text-gray-400'; // Default class
            break;
    }
@endphp

<div {{ $attributes->merge(["class" => "border-t border-b px-4 py-3" . $class]) }} role="alert">
    <p class="font-bold">{{ $slot }}</p>
    <p class="text-sm">{{ $descrip ?? 'INFO ALERT!' }}</p>
</div>
