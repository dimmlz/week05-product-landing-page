@props([
    'name' => '',
    'position' => '',
    'review' => '',
    'image' => ''
])

<div class="rounded-3xl border border-[#E8DDCC] bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg">

    {{-- Quote Icon --}}
    <div class="mb-4 text-3xl font-bold text-[#C81E3A]">
        “
    </div>

    {{-- Review --}}
    <p class="mb-6 leading-relaxed text-[#6B5B52]">
        {{ $review }}
    </p>

    {{-- Customer Information --}}
    <div class="flex items-center gap-4">

        {{-- Customer Image --}}
        @if($image)
            <img
                src="{{ asset($image) }}"
                alt="{{ $name }}"
                class="h-12 w-12 rounded-full object-cover"
            >
        @else
            <div class="flex h-12 w-12 items-center justify-center rounded-full bg-[#FFF0E5] font-bold text-[#C81E3A]">
                {{ strtoupper(substr($name, 0, 1)) }}
            </div>
        @endif

        <div>

            <h3 class="font-bold text-[#241A16]">
                {{ $name }}
            </h3>

            <p class="text-sm text-[#8A776C]">
                {{ $position }}
            </p>

        </div>

    </div>

</div>