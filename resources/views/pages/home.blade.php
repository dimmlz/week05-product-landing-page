@extends('layouts.app')

@section('content')

    {{-- HERO --}}
    <x-hero />


    {{-- =========================================================
    WHY MAI-RYL / FEATURES
========================================================= --}}
<section id="features" class="bg-[#FFFBF2] py-16 sm:py-20 sm:py-24">

    <div class="mx-auto max-w-[1080px] px-6 lg:px-8">

        {{-- INTRO --}}
        <div class="mx-auto max-w-[560px] text-center">

            <h2 class="font-[Fraunces] text-4xl font-semibold leading-[1.14] text-[#2B1A12] sm:text-5xl">

                Simple treats made for good

                <span class="relative inline-block whitespace-nowrap">

                    moments

                    {{-- Red underline --}}
                    <svg
                        class="absolute -bottom-3 left-[-4%] -z-0 w-[108%]"
                        viewBox="0 0 220 22"
                        preserveAspectRatio="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M4 15C40 4 90 2 110 7C130 12 180 16 216 6"
                            stroke="#C4203A"
                            stroke-width="6"
                            stroke-linecap="round"
                            fill="none"
                        />
                    </svg>

                </span>.

            </h2>


            <p class="mt-6 text-[15px] leading-7 text-[#6E5B4E]">

                From creamy milkshakes to crispy snacks, Mai-Ryl brings
                affordable and enjoyable treats for everyone.

            </p>

        </div>



        {{-- FEATURES GRID --}}
        <div class="mt-14 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">


            {{-- FEATURE 1 --}}
            <div class="rounded-2xl border border-[#E4D5BE] bg-[#FFFBF2] p-6 transition duration-300 hover:-translate-y-1 hover:shadow-lg">

                <div class="mb-[18px] flex h-11 w-11 rotate-[-4deg] items-center justify-center rounded-xl bg-[#FBEBD1]">

                    <svg
                        class="h-[22px] w-[22px]"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M12 3c2 3 6 5 6 9.5A6 6 0 0 1 6 12.5C6 8 10 6 12 3Z"
                            stroke="#E2A63B"
                            stroke-width="1.7"
                            stroke-linejoin="round"
                        />

                        <path
                            d="M12 8v11"
                            stroke="#E2A63B"
                            stroke-width="1.5"
                            stroke-linecap="round"
                        />

                    </svg>

                </div>


                <h3 class="font-[Fraunces] text-[17px] font-semibold text-[#2B1A12]">
                    Fresh Flavors
                </h3>

                <p class="mt-2 text-[13.5px] leading-6 text-[#6E5B4E]">
                    Enjoy delicious and refreshing flavors made for every craving.
                </p>

            </div>



            {{-- FEATURE 2 --}}
            <div class="rounded-2xl border border-[#E4D5BE] bg-[#FFFBF2] p-6 transition duration-300 hover:-translate-y-1 hover:shadow-lg">

                <div class="mb-[18px] flex h-11 w-11 rotate-[3deg] items-center justify-center rounded-xl bg-[#FBEBD1]">

                    <svg
                        class="h-[22px] w-[22px]"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M8 3h8l-1 3H9L8 3Z"
                            stroke="#E2A63B"
                            stroke-width="1.7"
                            stroke-linejoin="round"
                        />

                        <path
                            d="M7.5 6h9l-1.1 12.4a2 2 0 0 1-2 1.6H10.6a2 2 0 0 1-2-1.6L7.5 6Z"
                            stroke="#E2A63B"
                            stroke-width="1.7"
                            stroke-linejoin="round"
                        />

                        <path
                            d="M8.2 10c1 .6 1.8.6 2.8 0s1.8-.6 2.8 0 1.8.6 2.8 0"
                            stroke="#E2A63B"
                            stroke-width="1.4"
                            stroke-linecap="round"
                        />

                    </svg>

                </div>


                <h3 class="font-[Fraunces] text-[17px] font-semibold text-[#2B1A12]">
                    Creamy Shakes
                </h3>

                <p class="mt-2 text-[13.5px] leading-6 text-[#6E5B4E]">
                    Smooth and satisfying milkshakes that are perfect for any time of the day.
                </p>

            </div>



            {{-- FEATURE 3 --}}
            <div class="rounded-2xl border border-[#E4D5BE] bg-[#FFFBF2] p-6 transition duration-300 hover:-translate-y-1 hover:shadow-lg">

                <div class="mb-[18px] flex h-11 w-11 rotate-[-3deg] items-center justify-center rounded-xl bg-[#FBEBD1]">

                    <svg
                        class="h-[22px] w-[22px]"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M6.5 9h11l-1.2 10.5A1.8 1.8 0 0 1 14.5 21h-5a1.8 1.8 0 0 1-1.8-1.5L6.5 9Z"
                            stroke="#E2A63B"
                            stroke-width="1.7"
                            stroke-linejoin="round"
                        />

                        <path
                            d="M9 9c.6-3.3 1.4-5 3-6.5C13.6 4 14.4 5.7 15 9"
                            stroke="#E2A63B"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />

                        <path
                            d="M8 12l2-4M12 13v-5M16 12l-2-4"
                            stroke="#E2A63B"
                            stroke-width="1.5"
                            stroke-linecap="round"
                        />

                    </svg>

                </div>


                <h3 class="font-[Fraunces] text-[17px] font-semibold text-[#2B1A12]">
                    Crispy Fries
                </h3>

                <p class="mt-2 text-[13.5px] leading-6 text-[#6E5B4E]">
                    Fresh and crispy fries available in different sizes and flavors.
                </p>

            </div>



            {{-- FEATURE 4 --}}
            <div class="rounded-2xl border border-[#E4D5BE] bg-[#FFFBF2] p-6 transition duration-300 hover:-translate-y-1 hover:shadow-lg">

                <div class="mb-[18px] flex h-11 w-11 rotate-[3deg] items-center justify-center rounded-xl bg-[#FBEBD1]">

                    <svg
                        class="h-[22px] w-[22px]"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <circle
                            cx="12"
                            cy="12"
                            r="8"
                            stroke="#E2A63B"
                            stroke-width="1.7"
                        />

                        <path
                            d="M9.5 8.3h2.7a2 2 0 0 1 0 4H9.8M9.5 12.3h2.2a2 2 0 0 1 0 4H9.5M10.6 7v10.5"
                            stroke="#E2A63B"
                            stroke-width="1.4"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />

                    </svg>

                </div>


                <h3 class="font-[Fraunces] text-[17px] font-semibold text-[#2B1A12]">
                    Affordable Prices
                </h3>

                <p class="mt-2 text-[13.5px] leading-6 text-[#6E5B4E]">
                    Enjoy your favorite snacks and drinks without spending too much.
                </p>

            </div>



            {{-- FEATURE 5 --}}
            <div class="rounded-2xl border border-[#E4D5BE] bg-[#FFFBF2] p-6 transition duration-300 hover:-translate-y-1 hover:shadow-lg">

                <div class="mb-[18px] flex h-11 w-11 rotate-[-4deg] items-center justify-center rounded-xl bg-[#FBEBD1]">

                    <svg
                        class="h-[22px] w-[22px]"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M12 20s-7-4.4-7-9.6A4.4 4.4 0 0 1 12 7a4.4 4.4 0 0 1 7 3.4C19 15.6 12 20 12 20Z"
                            stroke="#E2A63B"
                            stroke-width="1.7"
                            stroke-linejoin="round"
                        />

                    </svg>

                </div>


                <h3 class="font-[Fraunces] text-[17px] font-semibold text-[#2B1A12]">
                    Customer Favorite
                </h3>

                <p class="mt-2 text-[13.5px] leading-6 text-[#6E5B4E]">
                    Our Mango Graham Shake is one of the favorite treats of our customers.
                </p>

            </div>



            {{-- FEATURE 6 --}}
            <div class="rounded-2xl border border-[#E4D5BE] bg-[#FFFBF2] p-6 transition duration-300 hover:-translate-y-1 hover:shadow-lg">

                <div class="mb-[18px] flex h-11 w-11 rotate-[4deg] items-center justify-center rounded-xl bg-[#FBEBD1]">

                    <svg
                        class="h-[22px] w-[22px]"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <circle
                            cx="8"
                            cy="9"
                            r="3"
                            stroke="#E2A63B"
                            stroke-width="1.6"
                        />

                        <circle
                            cx="16"
                            cy="9"
                            r="3"
                            stroke="#E2A63B"
                            stroke-width="1.6"
                        />

                        <path
                            d="M3 19c.6-2.8 2.5-4.5 5-4.5s4.4 1.7 5 4.5M11 19c.6-2.8 2.5-4.5 5-4.5s4.4 1.7 5 4.5"
                            stroke="#E2A63B"
                            stroke-width="1.5"
                            stroke-linecap="round"
                        />

                    </svg>

                </div>


                <h3 class="font-[Fraunces] text-[17px] font-semibold text-[#2B1A12]">
                    Made to Enjoy
                </h3>

                <p class="mt-2 text-[13.5px] leading-6 text-[#6E5B4E]">
                    Simple food and drinks made for sharing good moments with friends and family.
                </p>

            </div>

        </div>

    </div>

</section>

    {{-- =========================================================
        MENU / PRODUCT SHOWCASE
    ========================================================= --}}
    <section id="menu" class="bg-[#FFF8ED] py-20">

        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <div class="flex flex-col justify-between gap-6 md:flex-row md:items-end">

                <div class="max-w-2xl">

                    <p class="text-sm font-bold uppercase tracking-[0.2em] text-[#C81E3A]">
                        Our Menu
                    </p>

                    <h2 class="mt-4 font-[Fraunces] text-4xl font-bold text-[#241A16] sm:text-5xl">
                        Something delicious for every craving.
                    </h2>

                </div>

                <a href="#pricing"
                   class="font-bold text-[#C81E3A] transition hover:text-[#9E1530]">

                    View Prices →

                </a>

            </div>



            {{-- MILKSHAKES --}}
            <div class="mt-14">

                <h3 class="font-[Fraunces] text-3xl font-bold text-[#241A16]">
                    Milkshakes
                </h3>

                <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">


                    {{-- Chocolate --}}
                    <div class="rounded-3xl border border-[#E8DDCC] bg-[#FFFBF2] p-6 transition hover:-translate-y-2 hover:shadow-xl">

                        <img
                            src="{{ asset('images/chocolate-removebg-preview.png') }}"
                            alt="Chocolate Milkshake"
                            class="mx-auto h-48 w-full object-contain"
                        >

                        <h4 class="mt-5 font-[Fraunces] text-xl font-bold">
                            Chocolate
                        </h4>

                        <p class="mt-2 text-sm text-[#6B5D53]">
                            Rich, creamy, and chocolatey.
                        </p>

                    </div>


                    {{-- Strawberry --}}
                    <div class="rounded-3xl border border-[#E8DDCC] bg-[#FFFBF2] p-6 transition hover:-translate-y-2 hover:shadow-xl">

                        <img
                            src="{{ asset('images/strawberry-removebg-preview.png') }}"
                            alt="Strawberry Milkshake"
                            class="mx-auto h-48 w-full object-contain"
                        >

                        <h4 class="mt-5 font-[Fraunces] text-xl font-bold">
                            Strawberry
                        </h4>

                        <p class="mt-2 text-sm text-[#6B5D53]">
                            Sweet and refreshing.
                        </p>

                    </div>


                    {{-- Buko Pandan --}}
                    <div class="rounded-3xl border border-[#E8DDCC] bg-[#FFFBF2] p-6 transition hover:-translate-y-2 hover:shadow-xl">

                        <img
                            src="{{ asset('images/buko-removebg-preview.png') }}"
                            alt="Buko Pandan Milkshake"
                            class="mx-auto h-48 w-full object-contain"
                        >

                        <h4 class="mt-5 font-[Fraunces] text-xl font-bold">
                            Buko Pandan
                        </h4>

                        <p class="mt-2 text-sm text-[#6B5D53]">
                            A creamy Filipino favorite.
                        </p>

                    </div>


                    {{-- Cookies and Cream --}}
                    <div class="rounded-3xl border border-[#E8DDCC] bg-[#FFFBF2] p-6 transition hover:-translate-y-2 hover:shadow-xl">

                        <img
                            src="{{ asset('images/c_c-removebg-preview.png') }}"
                            alt="Cookies and Cream Milkshake"
                            class="mx-auto h-48 w-full object-contain"
                        >

                        <h4 class="mt-5 font-[Fraunces] text-xl font-bold">
                            Cookies & Cream
                        </h4>

                        <p class="mt-2 text-sm text-[#6B5D53]">
                            Creamy with cookie goodness.
                        </p>

                    </div>

                </div>

            </div>



            {{-- MANGO BEST SELLER --}}
            <div class="mt-16 grid items-center gap-10 overflow-hidden rounded-[2rem] bg-[#FFD36A] p-8 lg:grid-cols-2 lg:p-14">

                <div>

                    <span class="rounded-full bg-[#C81E3A] px-4 py-2 text-xs font-bold uppercase tracking-wider text-white">
                        Best Seller
                    </span>

                    <h3 class="mt-6 font-[Fraunces] text-4xl font-bold text-[#241A16]">
                        Mango Graham Shake
                    </h3>

                    <p class="mt-5 max-w-lg leading-8 text-[#51463F]">
                        A refreshing and creamy mango treat that has become
                        one of Mai-Ryl's customer favorites.
                    </p>

                    <a href="#pricing"
                       class="mt-7 inline-flex rounded-2xl bg-[#241A16] px-7 py-3.5 font-bold text-white transition hover:bg-[#3A2A24]">

                        Check Prices

                    </a>

                </div>


                <div class="flex justify-center">

                    <img
                        src="{{ asset('images/mango-removebg-preview.png') }}"
                        alt="Mango Graham Shake"
                        class="h-[360px] object-contain sm:h-[430px]"
                    >

                </div>

            </div>



            {{-- SNACKS --}}
            <div class="mt-16">

                <h3 class="font-[Fraunces] text-3xl font-bold text-[#241A16]">
                    Snacks & Fries
                </h3>

                <div class="mt-8 grid gap-6 md:grid-cols-2">


                    <div class="flex flex-col items-center gap-6 rounded-3xl border border-[#E8DDCC] bg-[#FFFBF2] p-7 sm:flex-row">

                        <img
                            src="{{ asset('images/fries-removebg-preview.png') }}"
                            alt="Mai-Ryl Fries"
                            class="h-52 w-52 object-contain"
                        >

                        <div>

                            <h4 class="font-[Fraunces] text-2xl font-bold">
                                Crispy Fries
                            </h4>

                            <p class="mt-3 leading-7 text-[#6B5D53]">
                                Available in Cheese, Sour Cream, and Chili Cheese flavors.
                            </p>

                        </div>

                    </div>


                    <div class="rounded-3xl border border-[#E8DDCC] bg-[#FFFBF2] p-8">

                        <h4 class="font-[Fraunces] text-2xl font-bold">
                            Snack Combos
                        </h4>

                        <ul class="mt-5 space-y-4 text-[#6B5D53]">

                            <li>Fries with Drinks</li>
                            <li>Fries + Drinks + Hotdog</li>
                            <li>Fries + Drinks + Cheesesticks</li>
                            <li>Lemon or Pineapple Drink Choices</li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </section>



    {{-- =========================================================
        PRICING
    ========================================================= --}}
    <section id="pricing" class="bg-[#FFFBF2] py-20">

        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <div class="mx-auto max-w-2xl text-center">

                <p class="text-sm font-bold uppercase tracking-[0.2em] text-[#C81E3A]">
                    Affordable Treats
                </p>

                <h2 class="mt-4 font-[Fraunces] text-4xl font-bold text-[#241A16] sm:text-5xl">
                    Something for every budget.
                </h2>

            </div>


            <div class="mt-14 grid gap-7 md:grid-cols-3">


                <x-pricing-card
                    name="Classic Milkshakes"
                    price="From ₱40"
                    description="Choose from our delicious classic milkshake flavors."
                >

                    <ul class="space-y-3 text-sm text-[#6B5D53]">
                        <li>✓ Chocolate</li>
                        <li>✓ Strawberry</li>
                        <li>✓ Buko Pandan</li>
                        <li>✓ Cookies & Cream</li>
                        <li>✓ Small ₱40</li>
                        <li>✓ Medium ₱50</li>
                        <li>✓ Large ₱65</li>
                    </ul>

                </x-pricing-card>


                <x-pricing-card
                    name="Mango Graham"
                    price="From ₱70"
                    description="Our refreshing customer-favorite best seller."
                    :popular="true"
                >

                    <ul class="space-y-3 text-sm text-[#6B5D53]">
                        <li>✓ Fresh mango flavor</li>
                        <li>✓ Creamy graham goodness</li>
                        <li>✓ Medium ₱70</li>
                        <li>✓ Large ₱85</li>
                    </ul>

                </x-pricing-card>


                <x-pricing-card
                    name="Fries & Snacks"
                    price="From ₱20"
                    description="Crispy snacks and affordable combos."
                >

                    <ul class="space-y-3 text-sm text-[#6B5D53]">
                        <li>✓ Fries from ₱20</li>
                        <li>✓ Snack in a Cup ₱40</li>
                        <li>✓ Fries with Drinks ₱50</li>
                        <li>✓ Combo Meals ₱50</li>
                        <li>✓ Different flavors available</li>
                    </ul>

                </x-pricing-card>

            </div>

        </div>

    </section>



    {{-- =========================================================
        TESTIMONIALS
    ========================================================= --}}
    <section id="testimonials" class="bg-[#FFF8ED] py-20">

        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <div class="mx-auto max-w-2xl text-center">

                <p class="text-sm font-bold uppercase tracking-[0.2em] text-[#C81E3A]">
                    Customer Love
                </p>

                <h2 class="mt-4 font-[Fraunces] text-4xl font-bold text-[#241A16] sm:text-5xl">
                    Made for happy cravings.
                </h2>

            </div>


            <div class="mt-14 grid gap-6 md:grid-cols-3">

                <x-testimonial-card
                    name="Anne"
                    position="Regular Customer"
                    initials="A"
                    review="The Mango Graham Shake is really delicious and refreshing. Definitely one of my favorites!"
                />

                <x-testimonial-card
                    name="John"
                    position="Student"
                    initials="J"
                    review="Affordable prices and the fries are crispy. Perfect for snacks with friends."
                />

                <x-testimonial-card
                    name="Maria"
                    position="Customer"
                    initials="M"
                    review="I love the different milkshake flavors. The drinks are creamy and worth the price!"
                />

            </div>

        </div>

    </section>



    {{-- =========================================================
        CTA SECTION
    ========================================================= --}}
    <section class="bg-[#C81E3A] py-20">

        <div class="mx-auto max-w-4xl px-6 text-center">

            <h2 class="font-[Fraunces] text-4xl font-bold text-white sm:text-5xl">
                Ready for your next craving?
            </h2>

            <p class="mx-auto mt-5 max-w-2xl text-lg leading-8 text-white/85">
                Explore Mai-Ryl's delicious milkshakes, crispy fries,
                snacks, and refreshing drinks today.
            </p>


            <div class="mt-9 flex flex-wrap justify-center gap-4">

                <a href="#menu"
                   class="rounded-2xl bg-white px-7 py-3.5 font-bold text-[#C81E3A] transition hover:-translate-y-1">

                    Explore Menu

                </a>


                <a href="#contact"
                   class="rounded-2xl border border-white/50 px-7 py-3.5 font-bold text-white transition hover:bg-white/10">

                    Contact Us

                </a>

            </div>

        </div>

    </section>

@endsection