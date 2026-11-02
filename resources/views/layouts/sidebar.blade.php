<aside
    class="
        fixed inset-y-0 left-0 z-50
        flex w-72 flex-col
        border-r border-slate-200
        bg-white
        transition-transform duration-300
        lg:translate-x-0
    "
    :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
>
    {{-- Logo --}}
    <div class="flex h-20 items-center gap-3 border-b border-slate-100 px-6">

        <div
            class="
                flex h-11 w-11 shrink-0
                items-center justify-center
                rounded-xl
                bg-indigo-600
                text-white
                shadow-sm
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
                    d="M12 6.253v13m0-13C10.832 5.477
                       9.246 5 7.5 5S4.168 5.477 3
                       6.253v13C4.168 18.477 5.754
                       18 7.5 18s3.332.477 4.5
                       1.253m0-13C13.168 5.477
                       14.754 5 16.5 5c1.746 0
                       3.332.477 4.5 1.253v13C19.832
                       18.477 18.246 18 16.5 18c-1.746
                       0-3.332.477-4.5 1.253"
                />
            </svg>
        </div>

        <div>
            <h1 class="text-base font-bold text-slate-900">
                School Library
            </h1>

            <p class="text-xs text-slate-500">
                Modern Library System
            </p>
        </div>

        {{-- Close mobile --}}
        <button
            @click="sidebarOpen = false"
            class="ml-auto rounded-lg p-2 text-slate-400 hover:bg-slate-100 lg:hidden"
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
                    d="M6 18L18 6M6 6l12 12"
                />
            </svg>
        </button>

    </div>

    {{-- Navigation --}}
    <nav class="flex-1 space-y-1 overflow-y-auto p-4">

        <p class="px-3 pb-2 pt-2 text-xs font-semibold uppercase tracking-wider text-slate-400">
            Main Menu
        </p>

        <a
            href="{{ url('dashboard') }}"
            class="
                flex items-center gap-3 rounded-xl
                bg-indigo-50 px-3 py-2.5
                text-sm font-semibold text-indigo-700
            "
        >
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M3 12l9-9 9 9M5 10v10h14V10"
                />
            </svg>

            Dashboard
        </a>

        <a
            href="#"
            class="
                flex items-center gap-3 rounded-xl
                px-3 py-2.5
                text-sm font-medium text-slate-600
                transition hover:bg-slate-100 hover:text-slate-900
            "
        >
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M12 6.253v13m0-13C10.832 5.477
                       9.246 5 7.5 5S4.168 5.477
                       3 6.253v13C4.168 18.477
                       5.754 18 7.5 18s3.332.477
                       4.5 1.253"
                />
            </svg>

            Buku
        </a>

        <a
            href="#"
            class="
                flex items-center gap-3 rounded-xl
                px-3 py-2.5
                text-sm font-medium text-slate-600
                transition hover:bg-slate-100 hover:text-slate-900
            "
        >
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M17 20h5v-2a3 3 0
                       00-5.356-1.857M17 20H7m10
                       0v-2c0-.656-.126-1.283-.356-1.857M7
                       20H2v-2a3 3 0 015.356-1.857M7
                       20v-2c0-.656.126-1.283.356-1.857m0
                       0a5.002 5.002 0 019.288 0M15
                       7a3 3 0 11-6 0 3 3 0 016 0zm6
                       3a2 2 0 11-4 0 2 2 0 014 0zM7
                       10a2 2 0 11-4 0 2 2 0 014 0z"
                />
            </svg>

            Anggota
        </a>

        <p class="px-3 pb-2 pt-6 text-xs font-semibold uppercase tracking-wider text-slate-400">
            Transactions
        </p>

        <a
            href="#"
            class="
                flex items-center gap-3 rounded-xl
                px-3 py-2.5
                text-sm font-medium text-slate-600
                transition hover:bg-slate-100 hover:text-slate-900
            "
        >
            <span class="h-2 w-2 rounded-full bg-indigo-500"></span>
            Peminjaman
        </a>

        <a
            href="#"
            class="
                flex items-center gap-3 rounded-xl
                px-3 py-2.5
                text-sm font-medium text-slate-600
                transition hover:bg-slate-100 hover:text-slate-900
            "
        >
            <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
            Pengembalian
        </a>

        <a
            href="#"
            class="
                flex items-center gap-3 rounded-xl
                px-3 py-2.5
                text-sm font-medium text-slate-600
                transition hover:bg-slate-100 hover:text-slate-900
            "
        >
            <span class="h-2 w-2 rounded-full bg-rose-500"></span>
            Denda
        </a>

    </nav>

    {{-- User --}}
    <div class="border-t border-slate-100 p-4">

        <div class="flex items-center gap-3 rounded-xl bg-slate-50 p-3">

            <div
                class="
                    flex h-10 w-10 items-center justify-center
                    rounded-full bg-indigo-100
                    text-sm font-bold text-indigo-700
                "
            >
                {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
            </div>

            <div class="min-w-0 flex-1">
                <p class="truncate text-sm font-semibold text-slate-900">
                    {{ auth()->user()->name ?? 'Administrator' }}
                </p>

                <p class="truncate text-xs text-slate-500">
                    {{ auth()->user()->email ?? 'admin@school.test' }}
                </p>
            </div>

        </div>

    </div>

</aside>