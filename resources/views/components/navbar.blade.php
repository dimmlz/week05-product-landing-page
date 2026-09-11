<header
    x-data="{ mobileMenuOpen: false }"
    class="sticky top-0 z-50 border-b border-[#E8DDCC] bg-[#FFF8ED]/95 backdrop-blur-md"
>

    <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-3 lg:px-8">

        {{-- LOGO --}}
        <a href="#home" class="flex items-center gap-3">

            <div class="flex h-12 w-12 items-center justify-center overflow-hidden rounded-full">

                <img
                    src="{{ asset('images/image.png') }}"
                    alt="Mai-Ryl Logo"
                    class="h-full w-full object-contain"
                >

            </div>

            <div>

                <h1 class="font-[Fraunces] text-2xl font-bold leading-none text-[#241A16]">
                    Mai-Ryl
                </h1>

                <p class="mt-1 text-[10px] font-bold uppercase tracking-[0.16em] text-[#4E6D5C]">
                    Freshness Everyday
                </p>

            </div>

        </a>


        {{-- DESKTOP NAVIGATION --}}
        <div class="hidden items-center gap-7 text-sm font-medium text-[#51463F] lg:flex">

            <a href="#home" class="transition hover:text-[#C81E3A]">
                Home
            </a>

            <a href="#features" class="transition hover:text-[#C81E3A]">
                Features
            </a>

            <a href="#menu" class="transition hover:text-[#C81E3A]">
                Menu
            </a>

            <a href="#pricing" class="transition hover:text-[#C81E3A]">
                Pricing
            </a>

            <a href="#testimonials" class="transition hover:text-[#C81E3A]">
                Testimonials
            </a>

            <a href="#contact" class="transition hover:text-[#C81E3A]">
                Contact
            </a>

        </div>


        {{-- DESKTOP BUTTONS --}}
        <div class="hidden items-center gap-3 lg:flex">

            <a
                href="#contact"
                class="rounded-2xl px-5 py-3 text-sm font-bold text-[#51463F] transition hover:text-[#C81E3A]"
            >
                Sign In
            </a>

            <a
                href="#menu"
                class="rounded-2xl bg-[#C81E3A] px-6 py-3 text-sm font-bold text-white shadow-[0_12px_25px_rgba(200,30,58,0.25)] transition hover:-translate-y-0.5 hover:bg-[#9E1530]"
            >
                Get Started
            </a>

        </div>


        {{-- MOBILE MENU BUTTON --}}
        <button
            type="button"
            @click="mobileMenuOpen = !mobileMenuOpen"
            class="flex h-11 w-11 items-center justify-center rounded-xl border border-[#E8DDCC] bg-white transition hover:bg-[#FFF3F4] lg:hidden"
            :aria-expanded="mobileMenuOpen"
            aria-label="Toggle menu"
        >

            {{-- HAMBURGER --}}
            <svg
                x-show="!mobileMenuOpen"
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6 text-[#241A16]"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >

                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"
                />

            </svg>


            {{-- CLOSE ICON --}}
            <svg
                x-show="mobileMenuOpen"
                x-cloak
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6 text-[#241A16]"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >

                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M6 18L18 6M6 6l12 12"
                />

            </svg>

        </button>

    </nav>


    {{-- ================= MOBILE MENU ================= --}}
    <div
        x-show="mobileMenuOpen"
        x-transition
        x-cloak
        class="border-t border-[#E8DDCC] bg-[#FFF8ED] px-6 py-6 lg:hidden"
    >

        <div class="mx-auto flex max-w-7xl flex-col gap-1">

            <a
                href="#home"
                @click="mobileMenuOpen = false"
                class="rounded-xl px-4 py-3 font-medium text-[#51463F] transition hover:bg-white hover:text-[#C81E3A]"
            >
                Home
            </a>

            <a
                href="#features"
                @click="mobileMenuOpen = false"
                class="rounded-xl px-4 py-3 font-medium text-[#51463F] transition hover:bg-white hover:text-[#C81E3A]"
            >
                Features
            </a>

            <a
                href="#menu"
                @click="mobileMenuOpen = false"
                class="rounded-xl px-4 py-3 font-medium text-[#51463F] transition hover:bg-white hover:text-[#C81E3A]"
            >
                Menu
            </a>

            <a
                href="#pricing"
                @click="mobileMenuOpen = false"
                class="rounded-xl px-4 py-3 font-medium text-[#51463F] transition hover:bg-white hover:text-[#C81E3A]"
            >
                Pricing
            </a>

            <a
                href="#testimonials"
                @click="mobileMenuOpen = false"
                class="rounded-xl px-4 py-3 font-medium text-[#51463F] transition hover:bg-white hover:text-[#C81E3A]"
            >
                Testimonials
            </a>

            <a
                href="#contact"
                @click="mobileMenuOpen = false"
                class="rounded-xl px-4 py-3 font-medium text-[#51463F] transition hover:bg-white hover:text-[#C81E3A]"
            >
                Contact
            </a>


            {{-- MOBILE BUTTONS --}}
            <div class="mt-4 grid grid-cols-2 gap-3 border-t border-[#E8DDCC] pt-5">

                <a
                    href="#contact"
                    @click="mobileMenuOpen = false"
                    class="rounded-xl border border-[#E8DDCC] px-4 py-3 text-center text-sm font-bold text-[#51463F]"
                >
                    Sign In
                </a>

                <a
                    href="#menu"
                    @click="mobileMenuOpen = false"
                    class="rounded-xl bg-[#C81E3A] px-4 py-3 text-center text-sm font-bold text-white shadow-lg transition hover:bg-[#9E1530]"
                >
                    Get Started
                </a>

            </div>

        </div>

    </div>

</header>