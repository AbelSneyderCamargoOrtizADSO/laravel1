<div {{ $attributes->merge(["class" => "border-t border-b px-4 py-3" . $class]) }} role="alert">
    <p class="font-bold">{{ $slot }}</p>
    <p class="text-sm">{{ $descrip ?? 'INFO ALERT!' }}</p>
</div>