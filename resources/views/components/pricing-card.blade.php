@props([
    'name',
    'price',
    'description',
    'features' => [],
    'popular' => false,
])

<div class="relative flex h-full flex-col rounded-[2rem] border
    {{ $popular
        ? 'border-[#C81E3A] bg-[#C81E3A] text-white shadow-[0_20px_50px_rgba(200,30,58,0.25)]'
        : 'border-[#E8DDCC] bg-white text-[#241A16] shadow-sm'
    }}
    p-7 transition duration-300 hover:-translate-y-2">

    {{-- Popular Badge --}}
    @if ($popular)
        <div class="absolute -top-4 left-1/2 -translate-x-1/2">

            <span class="rounded-full bg-[#F6C453] px-4 py-2 text-xs font-bold text-[#241A16] shadow-md">
                MOST POPULAR
            </span>

        </div>
    @endif


    {{-- Plan Name --}}
    <div>

        <h3 class="font-[Fraunces] text-2xl font-bold">
            {{ $name }}
        </h3>

        <p class="mt-3 text-sm leading-6
            {{ $popular ? 'text-white/80' : 'text-[#766A63]' }}">

            {{ $description }}

        </p>

    </div>


    {{-- Price --}}
    <div class="mt-7 flex items-end gap-2">

        <span class="font-[Fraunces] text-5xl font-bold">
            ₱{{ $price }}
        </span>

        <span class="mb-1 text-sm
            {{ $popular ? 'text-white/70' : 'text-[#766A63]' }}">

            starting price

        </span>

    </div>


    {{-- Divider --}}
    <div class="my-7 border-t
        {{ $popular ? 'border-white/20' : 'border-[#E8DDCC]' }}">
    </div>


    {{-- Features --}}
    <ul class="space-y-4">

        @foreach ($features as $feature)

            <li class="flex items-center gap-3 text-sm">

                <div class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full
                    {{ $popular
                        ? 'bg-white/20 text-white'
                        : 'bg-[#E8F1E8] text-[#4E6D5C]'
                    }}">

                    ✓

                </div>

                <span>
                    {{ $feature }}
                </span>

            </li>

        @endforeach

    </ul>


    {{-- Button --}}
    <div class="mt-auto pt-8">

        <a href="#contact"
           class="block w-full rounded-xl py-3 text-center text-sm font-bold transition

           {{ $popular
                ? 'bg-white text-[#C81E3A] hover:bg-[#FFF8ED]'
                : 'bg-[#241A16] text-white hover:bg-[#C81E3A]'
           }}">

            Choose This Option

        </a>

    </div>

</div>