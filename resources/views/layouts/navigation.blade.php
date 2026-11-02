<header class="sticky top-0 z-30 border-b border-slate-200 bg-white/90 backdrop-blur">

    <div class="flex h-20 items-center gap-4 px-4 sm:px-6 lg:px-8">

        {{-- Mobile menu --}}
        <button
            @click="sidebarOpen = true"
            class="
                rounded-xl p-2.5
                text-slate-600
                hover:bg-slate-100
                lg:hidden
            "
        >
            <svg
                class="h-6 w-6"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"
                />
            </svg>
        </button>

        {{-- Search --}}
        <div class="relative hidden max-w-md flex-1 md:block">

            <svg
                class="absolute left-3 top-1/2 h-5 w-5 -translate-y-1/2 text-slate-400"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M21 21l-4.35-4.35m2.35-5.65a8 8 0 11-16 0 8 8 0 0116 0z"
                />
            </svg>

            <input
                type="search"
                placeholder="Cari buku, anggota, transaksi..."
                class="
                    w-full rounded-xl
                    border border-slate-200
                    bg-slate-50
                    py-2.5 pl-10 pr-4
                    text-sm
                    outline-none
                    transition
                    placeholder:text-slate-400
                    focus:border-indigo-500
                    focus:bg-white
                    focus:ring-2
                    focus:ring-indigo-100
                "
            >

        </div>

        <div class="ml-auto flex items-center gap-2">

            {{-- Notification --}}
            <button
                class="
                    relative rounded-xl p-2.5
                    text-slate-500
                    hover:bg-slate-100
                "
            >
                <svg
                    class="h-5 w-5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M15 17h5l-1.405-1.405A2.032
                           2.032 0 0118 14.158V11a6.002
                           6.002 0 00-4-5.659V5a2 2
                           0 10-4 0v.341C7.67 6.165
                           6 8.388 6 11v3.159c0
                           .538-.214 1.055-.595
                           1.436L4 17h5m6 0v1a3
                           3 0 11-6 0v-1m6 0H9"
                    />
                </svg>

                <span
                    class="
                        absolute right-2 top-2
                        h-2 w-2 rounded-full
                        bg-rose-500
                    "
                ></span>
            </button>

            {{-- Profile --}}
            <button
                class="
                    flex items-center gap-3
                    rounded-xl p-1.5
                    hover:bg-slate-100
                "
            >
                <div
                    class="
                        flex h-9 w-9 items-center
                        justify-center rounded-full
                        bg-indigo-600
                        text-sm font-bold text-white
                    "
                >
                    {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
                </div>

                <div class="hidden text-left lg:block">
                    <p class="text-sm font-semibold text-slate-900">
                        {{ auth()->user()->name ?? 'Administrator' }}
                    </p>

                    <p class="text-xs text-slate-500">
                        Librarian
                    </p>
                </div>
            </button>

        </div>

    </div>

</header>