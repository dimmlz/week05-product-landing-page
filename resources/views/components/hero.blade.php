{{-- =========================================================
    HERO SECTION
========================================================= --}}
<section id="home" class="relative overflow-hidden bg-[#FFF8ED]">

    {{-- Subtle Background --}}
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_78%_40%,rgba(255,211,106,0.28),transparent_28%)]"></div>


    <div class="relative mx-auto grid min-h-[650px] max-w-7xl items-center gap-10 px-6 py-16 lg:grid-cols-2 lg:px-8 lg:py-20">


        {{-- =========================================================
            LEFT CONTENT
        ========================================================= --}}
        <div class="relative z-10">


            {{-- Badge --}}
            <div class="inline-flex items-center gap-2 rounded-full border border-[#E4D5BE] bg-[#FFFBF2] px-4 py-2 text-sm font-bold text-[#9E1530]">

                {{-- Star Icon --}}
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m12 3 2.6 5.6 6.2.7-4.6 4.3 1.2 6.1L12 16.8l-5.4 2.9 1.2-6.1-4.6-4.3 6.2-.7L12 3Z"
                    />
                </svg>

                Mai-Ryl's Best Seller

            </div>


            {{-- Heading --}}
            <h1 class="mt-6 max-w-xl font-[Fraunces] text-5xl font-semibold leading-[1.12] tracking-tight text-[#241A16] sm:text-6xl lg:text-[62px]">

                Cool drinks and
                crispy bites for
                every

                <span class="relative inline-block whitespace-nowrap text-[#C81E3A]">

                    craving

                    {{-- Decorative Underline --}}
                    <svg
                        class="absolute -bottom-3 left-0 w-full"
                        viewBox="0 0 220 22"
                        preserveAspectRatio="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M4 15C40 4 90 2 110 7C130 12 180 16 216 6"
                            stroke="#C81E3A"
                            stroke-width="6"
                            stroke-linecap="round"
                            fill="none"
                        />
                    </svg>

                </span>

                .

            </h1>


            {{-- Description --}}
            <p class="mt-7 max-w-xl text-base leading-8 text-[#6B5D53] sm:text-lg">

                Hand-shaken milkshakes, fresh-cut fries, and cold drinks
                made fresh for simple moments worth enjoying.

            </p>


            {{-- Buttons --}}
            <div class="mt-8 flex flex-wrap gap-4">

                <x-button
                    href="#menu"
                    variant="primary"
                >
                    Explore Our Menu
                </x-button>


                <x-button
                    href="#pricing"
                    variant="secondary"
                >
                    View Prices
                </x-button>

            </div>


            {{-- Feature Pills --}}
            <div class="mt-9 flex flex-wrap gap-3">

                <span class="rounded-full border border-[#E4D5BE] px-4 py-2 text-sm font-semibold text-[#6B5D53]">
                    Creamy shakes
                </span>

                <span class="rounded-full border border-[#E4D5BE] px-4 py-2 text-sm font-semibold text-[#6B5D53]">
                    Crispy snacks
                </span>

                <span class="rounded-full border border-[#E4D5BE] px-4 py-2 text-sm font-semibold text-[#6B5D53]">
                    Affordable treats
                </span>

            </div>

        </div>



        {{-- =========================================================
            RIGHT HERO VISUAL
        ========================================================= --}}
        <div class="relative flex min-h-[500px] items-center justify-center lg:min-h-[560px]">


            {{-- Main Circle --}}
            <div class="absolute h-[360px] w-[360px] rounded-full bg-[#FFD36A] opacity-90 sm:h-[430px] sm:w-[430px]"></div>


            {{-- Decorative Circle --}}
            <div class="absolute h-[390px] w-[390px] rounded-full border border-[#E2A63B]/30 sm:h-[470px] sm:w-[470px]"></div>


            {{-- Product Image --}}
            <img
                src="{{ asset('images/mango-removebg-preview.png') }}"
                alt="Mango Graham Shake"
                class="relative z-10 h-[390px] w-[390px] object-contain drop-shadow-[0_25px_28px_rgba(43,26,18,0.22)] transition duration-500 hover:scale-105 sm:h-[470px] sm:w-[470px]"
            >


            {{-- Floating Product Card --}}
            <div class="absolute bottom-3 right-0 z-20 w-[260px] rounded-2xl border border-[#E4D5BE] bg-[#FFFBF2] p-5 shadow-[0_15px_30px_rgba(43,26,18,0.12)] sm:right-5">


                <p class="font-[Fraunces] text-xs font-semibold italic text-[#C81E3A]">
                    Mai-Ryl's Best Seller
                </p>


                <h2 class="mt-2 font-[Fraunces] text-xl font-semibold text-[#241A16]">
                    Mango Graham Shake
                </h2>


                <div class="mt-3 flex gap-4 text-sm text-[#6B5D53]">

                    <span>
                        Medium

                        <strong class="ml-1 text-[#C81E3A]">
                            ₱70
                        </strong>
                    </span>


                    <span>
                        Large

                        <strong class="ml-1 text-[#C81E3A]">
                            ₱85
                        </strong>
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>