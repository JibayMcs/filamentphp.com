<div
    x-cloak
    x-data="{}"
    class="mx-auto w-full max-w-screen-lg px-5 pt-40"
>
    <div class="flex items-center justify-between gap-10">
        <div class="">
            {{-- Header --}}
            <div class="text-3xl">
                <span class="">Live</span>
                <span class="font-bold">Demo</span>
            </div>
            {{-- Description --}}
            <div class="max-w-[22rem] pt-7 font-medium text-rum">
                We’ve put together an extensive demo app that showcase all
                Filament’s features.
                <br />
                It’s also open-source!
            </div>
            {{-- Links --}}
            <div class="flex flex-wrap items-center gap-5 pt-20">
                <a
                    href="#"
                    class="group/button flex items-center justify-center gap-3 rounded-xl bg-butter px-7 py-3 text-white transition duration-200"
                >
                    <div class="">Visit The Demo</div>
                    <div
                        class="transition duration-300 group-hover/button:translate-x-1"
                    >
                        <svg
                            width="24"
                            height="25"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M4 12.992h2.5m13.5 0-6-6m6 6-6 6m6-6H9.5"
                                stroke="#fff"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>
                    </div>
                </a>
                <a
                    href="#"
                    class="flex items-center justify-center gap-3 rounded-xl bg-dawn-pink px-7 py-3 text-hurricane transition duration-300 hover:bg-dawn-pink/70"
                >
                    <div class="">Source Code</div>
                </a>
            </div>
        </div>

        {{-- Demo Mockup --}}
        <div class="relative">
            {{-- Screenshot --}}
            <div class="w-[33rem] shadow-lg shadow-black/5">
                <div
                    class="flex h-6 w-full items-center gap-5 rounded-tl-lg rounded-tr-lg bg-[#262B2F]/80 px-3"
                >
                    <div class="flex items-center gap-1">
                        <div class="h-1.5 w-1.5 rounded-full bg-red-400"></div>
                        <div
                            class="h-1.5 w-1.5 rounded-full bg-yellow-400"
                        ></div>
                        <div
                            class="h-1.5 w-1.5 rounded-full bg-emerald-400"
                        ></div>
                    </div>
                    <div
                        class="flex-1 pr-10 text-center text-[0.6rem] text-white/40"
                    >
                        demo.filamentphp.com
                    </div>
                </div>
                <img
                    src="{{ Vite::asset('resources/images/home/filament-demo.webp') }}"
                    alt=""
                    class="w-full rounded-bl-lg rounded-br-lg"
                />
            </div>

            {{-- Decoration Background --}}
            <div
                class="absolute -top-8 left-10 -z-10 h-[27rem] w-[35rem] rotate-2 rounded-[3rem] bg-gradient-to-br from-dawn-pink to-transparent"
            ></div>
        </div>
    </div>
</div>
