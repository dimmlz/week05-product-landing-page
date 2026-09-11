<footer id="contact" class="border-t border-[#E8DDCC] bg-[#241A16] text-white">

    <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8">

        <div class="grid gap-12 md:grid-cols-2 lg:grid-cols-4">

            {{-- ================= BRAND ================= --}}
            <div>

                <div class="flex items-center gap-3">

                    <div class="flex h-12 w-12 items-center justify-center overflow-hidden rounded-full bg-white">

                        <img
                            src="{{ asset('images/image.png') }}"
                            alt="Mai-Ryl Logo"
                            class="h-full w-full object-contain"
                        >

                    </div>

                    <div>

                        <h3 class="font-[Fraunces] text-2xl font-bold">
                            Mai-Ryl
                        </h3>

                        <p class="text-[10px] font-bold uppercase tracking-[0.16em] text-[#B8D1BD]">
                            Freshness Everyday
                        </p>

                    </div>

                </div>


                <p class="mt-6 max-w-xs text-sm leading-7 text-[#D6CCC5]">

                    Serving refreshing milkshakes, delicious snacks, and
                    affordable treats made for everyone to enjoy.

                </p>

            </div>


            {{-- ================= QUICK LINKS ================= --}}
            <div>

                <h4 class="text-sm font-bold uppercase tracking-wider text-[#FFF8ED]">
                    Quick Links
                </h4>

                <ul class="mt-6 space-y-4 text-sm text-[#D6CCC5]">

                    <li>
                        <a href="#home" class="transition hover:text-[#F5B6C2]">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="#features" class="transition hover:text-[#F5B6C2]">
                            Why Mai-Ryl
                        </a>
                    </li>

                    <li>
                        <a href="#menu" class="transition hover:text-[#F5B6C2]">
                            Menu
                        </a>
                    </li>

                    <li>
                        <a href="#pricing" class="transition hover:text-[#F5B6C2]">
                            Prices
                        </a>
                    </li>

                </ul>

            </div>


            {{-- ================= CONTACT ================= --}}
            <div>

                <h4 class="text-sm font-bold uppercase tracking-wider text-[#FFF8ED]">
                    Contact
                </h4>

                <div class="mt-6 space-y-4 text-sm text-[#D6CCC5]">

                    <p>
                        Mai-Ryl Milkshake
                    </p>

                    <p>
                        Fresh drinks and snacks made with love.
                    </p>

                    <a
                        href="#menu"
                        class="inline-block transition hover:text-[#F5B6C2]"
                    >
                        View Our Menu →
                    </a>

                </div>

            </div>


            {{-- ================= FOLLOW ================= --}}
            <div>

                <h4 class="text-sm font-bold uppercase tracking-wider text-[#FFF8ED]">
                    Follow Mai-Ryl
                </h4>

                <p class="mt-6 text-sm leading-7 text-[#D6CCC5]">

                    Stay updated with our latest drinks, snacks,
                    and delicious favorites.

                </p>


                {{-- Social Icons --}}
                <div class="mt-6 flex items-center gap-3">

                    {{-- Facebook --}}
                    <a
                        href="#"
                        aria-label="Facebook"
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-white/10 transition hover:-translate-y-1 hover:bg-[#C81E3A]"
                    >
                        f
                    </a>


                    {{-- Instagram --}}
                    <a
                        href="#"
                        aria-label="Instagram"
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-white/10 transition hover:-translate-y-1 hover:bg-[#C81E3A]"
                    >
                        ◎
                    </a>


                    {{-- TikTok --}}
                    <a
                        href="#"
                        aria-label="TikTok"
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-white/10 transition hover:-translate-y-1 hover:bg-[#C81E3A]"
                    >
                        ♪
                    </a>

                </div>

            </div>

        </div>


        {{-- ================= COPYRIGHT ================= --}}
        <div class="mt-14 flex flex-col gap-4 border-t border-white/10 pt-8 text-center text-xs text-[#AFA39C] md:flex-row md:items-center md:justify-between md:text-left">

            <p>
                © {{ date('Y') }} Mai-Ryl Milkshake. All rights reserved.
            </p>

            <p>
                Made with Laravel & Tailwind CSS
            </p>

        </div>

    </div>

</footer>