@props([
    'href' => '#',
    'variant' => 'primary'
])

@php
    $classes = match($variant) {
        'primary' =>
            'bg-[#C81E3A] text-white hover:bg-[#9E1530] shadow-[0_12px_25px_rgba(200,30,58,0.25)]',

        'secondary' =>
            'border border-[#D8CABB] bg-white text-[#241A16] hover:border-[#C81E3A] hover:text-[#C81E3A]',

        default =>
            'bg-[#C81E3A] text-white hover:bg-[#9E1530]',
    };
@endphp


<a
    href="{{ $href }}"
    {{ $attributes->merge([
        'class' => "inline-flex items-center justify-center rounded-2xl px-7 py-3.5 text-sm font-bold transition duration-300 hover:-translate-y-0.5 $classes"
    ]) }}
>
    {{ $slot }}
</a>