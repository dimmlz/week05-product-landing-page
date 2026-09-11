@props([
    'icon' => '✨',
    'title' => '',
    'description' => ''
])

<div
    class="group rounded-3xl border border-[#E8DDCC] bg-[#FFFBF2] p-7 shadow-sm transition duration-300 hover:-translate-y-2 hover:shadow-[0_18px_40px_rgba(43,26,18,0.10)]"
>

    {{-- Icon --}}
    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-[#FFF0C9] text-2xl transition duration-300 group-hover:scale-110">
        {{ $icon }}
    </div>


    {{-- Title --}}
    <h3 class="mt-6 font-[Fraunces] text-xl font-bold text-[#241A16]">
        {{ $title }}
    </h3>


    {{-- Description --}}
    <p class="mt-3 text-sm leading-7 text-[#6B5D53]">
        {{ $description }}
    </p>

</div>