<!DOCTYPE html>
<html lang="id" x-data="{ sidebarOpen: false, sidebarCollapsed: false }">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>EduLib - Sistem Katalog &amp; Sirkulasi Perpustakaan</title>

    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
        rel="stylesheet" />

    <!-- Tailwind CSS & Alpine.js -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        @layer base {

            html,
            body {
                margin: 0;
                padding: 0;
            }

            body {
                overscroll-behavior: none;
            }
        }

        ::-webkit-scrollbar {
            display: none;
        }

        [x-cloak] {
            display: none !important;
        }
    </style>

    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "tertiary-container": "#573500",
                        "inverse-on-surface": "#eef0ff",
                        "surface-container-high": "#e2e7ff",
                        "on-surface-variant": "#43474e",
                        "secondary-fixed-dim": "#89ceff",
                        "surface-variant": "#dae2fd",
                        "on-primary-container": "#8ba9d3",
                        "on-background": "#131b2e",
                        "primary-fixed-dim": "#aac9f4",
                        "on-secondary-fixed": "#001e2f",
                        "on-secondary-fixed-variant": "#004c6e",
                        "surface-container": "#eaedff",
                        "on-primary-fixed-variant": "#29486d",
                        "background": "#faf8ff",
                        "secondary-container": "#39b8fd",
                        "on-tertiary-container": "#e89500",
                        "tertiary-fixed-dim": "#ffb95f",
                        "outline-variant": "#c3c6cf",
                        "secondary": "#006591",
                        "surface": "#faf8ff",
                        "error": "#ba1a1a",
                        "on-secondary-container": "#004666",
                        "on-surface": "#131b2e",
                        "primary": "#01284b",
                        "on-primary-fixed": "#001c38",
                        "surface-container-low": "#f2f3ff",
                        "surface-tint": "#426086",
                        "secondary-fixed": "#c9e6ff",
                        "on-error-container": "#93000a",
                        "surface-container-highest": "#dae2fd",
                        "on-tertiary": "#ffffff",
                        "surface-bright": "#faf8ff",
                        "surface-dim": "#d2d9f4",
                        "tertiary": "#3a2100",
                        "primary-container": "#1e3e62",
                        "inverse-primary": "#aac9f4",
                        "outline": "#73777f",
                        "primary-fixed": "#d3e4ff",
                        "error-container": "#ffdad6",
                        "on-error": "#ffffff",
                        "on-primary": "#ffffff",
                        "inverse-surface": "#283044",
                        "tertiary-fixed": "#ffddb8",
                        "on-tertiary-fixed": "#2a1700",
                        "on-secondary": "#ffffff",
                        "on-tertiary-fixed-variant": "#653e00",
                        "surface-container-lowest": "#ffffff"
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    spacing: {
                        "gutter": "1.5rem",
                        "margin-mobile": "1rem",
                        "space-xl": "2rem",
                        "gutter-mobile": "1rem",
                        "margin": "2rem",
                        "space-md": "1rem",
                        "space-sm": "0.5rem",
                        "space-lg": "1.5rem",
                        "space-xs": "0.25rem"
                    },
                    fontFamily: {
                        "headline-lg": ["Plus Jakarta Sans", "sans-serif"],
                        "label-md": ["Inter", "sans-serif"],
                        "body-lg": ["Inter", "sans-serif"],
                        "display-hero": ["Plus Jakarta Sans", "sans-serif"],
                        "label-lg": ["Inter", "sans-serif"],
                        "headline-md": ["Plus Jakarta Sans", "sans-serif"],
                        "code-barcode": ["JetBrains Mono", "monospace"],
                        "headline-sm": ["Plus Jakarta Sans", "sans-serif"],
                        "title-card": ["Plus Jakarta Sans", "sans-serif"],
                        "body-md": ["Inter", "sans-serif"],
                        "body-sm": ["Inter", "sans-serif"]
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-background font-body-md text-on-surface antialiased overflow-x-hidden">

    <!-- ==================== MOBILE BACKDROP OVERLAY ==================== -->
    <div x-show="sidebarOpen" x-transition:enter="transition-opacity ease-linear duration-300"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0" @click="sidebarOpen = false"
        class="fixed inset-0 bg-on-surface/50 backdrop-blur-sm z-40 lg:hidden" x-cloak>
    </div>

    <!-- ==================== RESPONSIVE SIDEBAR NAVIGATION ==================== -->
    <aside :class="{
      'translate-x-0': sidebarOpen,
      '-translate-x-full lg:translate-x-0': !sidebarOpen,
      'lg:w-64': !sidebarCollapsed,
      'lg:w-20': sidebarCollapsed
    }"
        class="fixed left-0 top-0 h-full w-64 bg-surface-container-low z-50 flex flex-col justify-between shadow-xl lg:shadow-[0_1px_8px_rgba(0,0,0,0.04)] transition-all duration-300 ease-in-out border-r border-outline-variant/20 select-none">

        <div class="flex flex-col h-full overflow-y-auto">
            <!-- 1. HEADER BRANDING & LOGO -->
            <div
                class="h-16 px-space-md flex items-center justify-between bg-primary shrink-0 transition-all duration-300">
                <div class="flex items-center gap-space-sm overflow-hidden">
                    <div
                        class="w-8 h-8 rounded-lg bg-surface-container-lowest/10 flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-on-primary text-[22px]">local_library</span>
                    </div>
                    <div class="flex flex-col whitespace-nowrap transition-opacity duration-300"
                        :class="{ 'lg:hidden': sidebarCollapsed }">
                        <span
                            class="font-headline-sm text-headline-sm text-on-primary leading-tight font-bold">EduLib</span>
                        <span
                            class="font-label-md text-[10px] text-on-primary-container tracking-wider uppercase font-semibold">SMA
                            Terpadu</span>
                    </div>
                </div>

                <!-- Mobile Close Button -->
                <button @click="sidebarOpen = false"
                    class="lg:hidden p-1.5 rounded-lg text-on-primary hover:bg-primary-container transition-colors"
                    title="Tutup Menu">
                    <span class="material-symbols-outlined text-[20px]">close</span>
                </button>
            </div>

            <!-- 2. SERVER STATUS MONITORING STRIP -->
            <div class="p-space-sm bg-surface-container shrink-0 transition-all duration-300"
                :class="{ 'lg:px-2': sidebarCollapsed }">
                <div class="flex items-center justify-between px-space-sm py-space-xs bg-surface rounded-lg border border-outline-variant/30"
                    :class="{ 'lg:justify-center lg:px-0': sidebarCollapsed }">
                    <div class="flex items-center gap-space-xs">
                        <span class="w-2.5 h-2.5 rounded-full bg-secondary-container animate-pulse shrink-0"></span>
                        <span class="font-label-md text-label-md text-on-surface whitespace-nowrap"
                            :class="{ 'lg:hidden': sidebarCollapsed }">Server Perpustakaan</span>
                    </div>
                    <span class="font-label-md text-[11px] text-secondary font-bold tracking-wide"
                        :class="{ 'lg:hidden': sidebarCollapsed }">ONLINE</span>
                </div>
            </div>

            <!-- 3. MAIN NAVIGATION MENU LINKS -->
            <nav class="flex flex-col gap-1 px-space-sm py-space-md flex-1">

                <!-- Link 1: Sirkulasi -->
                <a href="#"
                    class="group relative flex items-center gap-space-sm px-space-md py-space-sm rounded-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all font-label-lg text-label-lg"
                    :class="{ 'lg:justify-center lg:px-0': sidebarCollapsed }">
                    <span class="material-symbols-outlined shrink-0 text-[22px]">barcode_scanner</span>
                    <span class="whitespace-nowrap transition-opacity duration-300"
                        :class="{ 'lg:hidden': sidebarCollapsed }">Sirkulasi &amp; Scan</span>

                    <!-- Desktop Tooltip Mode Collapse -->
                    <div x-show="sidebarCollapsed"
                        class="hidden lg:block absolute left-full ml-3 px-3 py-1.5 bg-inverse-surface text-inverse-on-surface text-label-md rounded-md shadow-md opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-50 whitespace-nowrap">
                        Sirkulasi &amp; Scan Barcode
                    </div>
                </a>

                <!-- Link 2: Katalog (Active State) -->
                <a href="#" aria-current="page"
                    class="group relative flex items-center gap-space-sm px-space-md py-space-sm bg-primary-container text-on-primary font-bold rounded-lg shadow-sm transition-all font-label-lg text-label-lg"
                    :class="{ 'lg:justify-center lg:px-0': sidebarCollapsed }">
                    <span class="material-symbols-outlined shrink-0 text-[22px]">auto_stories</span>
                    <span class="whitespace-nowrap transition-opacity duration-300"
                        :class="{ 'lg:hidden': sidebarCollapsed }">Katalog &amp; Reservasi</span>

                    <div x-show="sidebarCollapsed"
                        class="hidden lg:block absolute left-full ml-3 px-3 py-1.5 bg-inverse-surface text-inverse-on-surface text-label-md rounded-md shadow-md opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-50 whitespace-nowrap">
                        Katalog &amp; Reservasi
                    </div>
                </a>

                <!-- Link 3: Denda -->
                <a href="#"
                    class="group relative flex items-center gap-space-sm px-space-md py-space-sm rounded-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all font-label-lg text-label-lg"
                    :class="{ 'lg:justify-center lg:px-0': sidebarCollapsed }">
                    <span class="material-symbols-outlined shrink-0 text-[22px]">payments</span>
                    <span class="whitespace-nowrap transition-opacity duration-300"
                        :class="{ 'lg:hidden': sidebarCollapsed }">Denda &amp; Pengembalian</span>

                    <div x-show="sidebarCollapsed"
                        class="hidden lg:block absolute left-full ml-3 px-3 py-1.5 bg-inverse-surface text-inverse-on-surface text-label-md rounded-md shadow-md opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-50 whitespace-nowrap">
                        Denda &amp; Pengembalian
                    </div>
                </a>

                <!-- Link 4: Data Siswa -->
                <a href="#"
                    class="group relative flex items-center gap-space-sm px-space-md py-space-sm rounded-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all font-label-lg text-label-lg"
                    :class="{ 'lg:justify-center lg:px-0': sidebarCollapsed }">
                    <span class="material-symbols-outlined shrink-0 text-[22px]">badge</span>
                    <span class="whitespace-nowrap transition-opacity duration-300"
                        :class="{ 'lg:hidden': sidebarCollapsed }">Data Siswa</span>

                    <div x-show="sidebarCollapsed"
                        class="hidden lg:block absolute left-full ml-3 px-3 py-1.5 bg-inverse-surface text-inverse-on-surface text-label-md rounded-md shadow-md opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-50 whitespace-nowrap">
                        Data Siswa
                    </div>
                </a>

                <!-- Link 5: Statistik Kunjungan -->
                <a href="#"
                    class="group relative flex items-center gap-space-sm px-space-md py-space-sm rounded-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all font-label-lg text-label-lg"
                    :class="{ 'lg:justify-center lg:px-0': sidebarCollapsed }">
                    <span class="material-symbols-outlined shrink-0 text-[22px]">query_stats</span>
                    <span class="whitespace-nowrap transition-opacity duration-300"
                        :class="{ 'lg:hidden': sidebarCollapsed }">Statistik Kunjungan</span>

                    <div x-show="sidebarCollapsed"
                        class="hidden lg:block absolute left-full ml-3 px-3 py-1.5 bg-inverse-surface text-inverse-on-surface text-label-md rounded-md shadow-md opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-50 whitespace-nowrap">
                        Statistik Kunjungan
                    </div>
                </a>

                <!-- Link 6: Laporan Sistem -->
                <a href="#"
                    class="group relative flex items-center gap-space-sm px-space-md py-space-sm rounded-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all font-label-lg text-label-lg"
                    :class="{ 'lg:justify-center lg:px-0': sidebarCollapsed }">
                    <span class="material-symbols-outlined shrink-0 text-[22px]">assessment</span>
                    <span class="whitespace-nowrap transition-opacity duration-300"
                        :class="{ 'lg:hidden': sidebarCollapsed }">Laporan Sistem</span>

                    <div x-show="sidebarCollapsed"
                        class="hidden lg:block absolute left-full ml-3 px-3 py-1.5 bg-inverse-surface text-inverse-on-surface text-label-md rounded-md shadow-md opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-50 whitespace-nowrap">
                        Laporan Sistem
                    </div>
                </a>
            </nav>

            <!-- 4. FOOTER INTEGRATION CARD & DESKTOP COLLAPSE TOGGLE -->
            <div class="p-space-md bg-surface-container-low shrink-0 border-t border-outline-variant/10">
                <!-- Dapodik Widget Card -->
                <div class="p-space-sm rounded-xl bg-surface-container flex flex-col gap-space-xs transition-all"
                    :class="{ 'lg:p-2 lg:items-center': sidebarCollapsed }">
                    <div class="flex items-center gap-space-xs" :class="{ 'lg:justify-center': sidebarCollapsed }">
                        <span class="material-symbols-outlined text-secondary text-[20px] shrink-0">lan</span>
                        <span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider"
                            :class="{ 'lg:hidden': sidebarCollapsed }">DAPODIK INTEGRASI</span>
                    </div>
                    <div class="flex items-center justify-between text-on-surface"
                        :class="{ 'lg:hidden': sidebarCollapsed }">
                        <span class="font-body-sm text-[12px] text-on-surface-variant">Sinkronisasi</span>
                        <span class="font-code-barcode text-code-barcode text-secondary text-[12px] font-semibold">10:42
                            WIB</span>
                    </div>
                </div>

                <!-- Desktop Collapse Button Toggle -->
                <button @click="sidebarCollapsed = !sidebarCollapsed"
                    class="hidden lg:flex w-full items-center justify-center gap-2 mt-3 py-2 px-3 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface-variant transition-colors"
                    title="Minimize/Expand Sidebar">
                    <span class="material-symbols-outlined transition-transform duration-300"
                        :class="{ 'rotate-180': sidebarCollapsed }">chevron_left</span>
                    <span class="font-label-md text-label-md"
                        x-text="sidebarCollapsed ? '' : 'Kecilkan Sidebar'"></span>
                </button>
            </div>
        </div>
    </aside>

    <!-- ==================== HEADER TOPBAR ==================== -->
    <header :class="{ 'lg:left-64': !sidebarCollapsed, 'lg:left-20': sidebarCollapsed }"
        class="fixed top-0 left-0 right-0 h-16 bg-primary z-30 flex items-center justify-between px-space-md lg:px-space-lg shadow-[0_1px_8px_rgba(0,0,0,0.04)] transition-all duration-300">

        <div class="flex items-center gap-space-sm lg:gap-space-md">
            <!-- Hamburger Toggle Button (Mobile Only) -->
            <button @click="sidebarOpen = !sidebarOpen"
                class="lg:hidden p-2 rounded-lg text-on-primary hover:bg-primary-container transition-colors focus:outline-none"
                aria-label="Buka Menu Sidebar">
                <span class="material-symbols-outlined text-[24px]">menu</span>
            </button>

            <!-- Segmented Mode Controls -->
            <div class="flex items-center bg-primary-container p-1 rounded-full">
                <button
                    class="px-3 lg:px-space-md py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-md text-label-md transition-all shadow-sm font-semibold"
                    type="button">Mode Pustakawan</button>
                <button
                    class="px-3 lg:px-space-md py-1 rounded-full text-on-primary-container hover:text-on-primary font-label-md text-label-md transition-all"
                    type="button">Mode Siswa</button>
            </div>

            <!-- School Name Tag -->
            <div
                class="hidden xl:flex items-center gap-space-xs px-space-sm py-1 bg-surface-container-lowest/10 rounded-md">
                <span class="material-symbols-outlined text-secondary-fixed text-[18px]">verified</span>
                <span class="font-label-md text-label-md text-surface-container-low">SMA Negeri 1 Terpadu</span>
            </div>
        </div>

        <div class="flex items-center gap-space-sm lg:gap-space-md">
            <!-- Notifications Button -->
            <div class="relative flex items-center">
                <button class="relative p-2 rounded-full text-on-primary hover:bg-primary-container transition-colors"
                    title="Notifikasi Sirkulasi &amp; Denda" type="button">
                    <span class="material-symbols-outlined text-[22px]">notifications</span>
                    <span class="absolute top-1 right-1 w-2.5 h-2.5 bg-error rounded-full ring-2 ring-primary"></span>
                </button>
            </div>

            <div class="h-6 w-px bg-on-primary-container/20"></div>

            <!-- User Profile Avatar & Name -->
            <div class="flex items-center gap-space-sm">
                <div class="text-right hidden sm:block">
                    <div class="font-label-lg text-label-lg text-on-primary leading-tight font-semibold">Siti Nurhaliza,
                        S.Ptk.</div>
                    <div class="font-label-md text-label-md text-on-primary-container">Pustakawan Utama</div>
                </div>
                <div
                    class="w-8 h-8 rounded-full bg-primary-container border border-on-primary-container/30 flex items-center justify-center">
                    <span class="material-symbols-outlined text-on-primary text-[18px]">person</span>
                </div>
            </div>
        </div>
    </header>

    <!-- ==================== MAIN CONTENT WRAPPER ==================== -->
    <main :class="{ 'lg:pl-64': !sidebarCollapsed, 'lg:pl-20': sidebarCollapsed }"
        class="w-full pt-16 bg-background min-h-screen transition-all duration-300">

        <div class="flex flex-col w-full" x-data="{
      searchQuery: '',
      selectedCategory: 'all',
      selectedLocation: 'all',
      toastVisible: false,
      toastMessage: '',
      showToast(msg) {
        this.toastMessage = msg;
        this.toastVisible = true;
        setTimeout(() => { this.toastVisible = false }, 4000);
      }
    }">

            <!-- Top Hero & Context Strip -->
            <div class="px-space-md lg:px-space-lg py-space-xl bg-surface-container-low">
                <div class="max-w-7xl mx-auto flex flex-col lg:flex-row lg:items-end justify-between gap-space-lg">
                    <div class="flex flex-col gap-space-xs max-w-2xl">
                        <div
                            class="inline-flex items-center gap-space-xs px-space-sm py-0.5 rounded-full bg-surface-container-highest text-secondary w-fit font-label-md text-label-md">
                            <span class="material-symbols-outlined text-[16px]">menu_book</span>
                            <span>Sistem OPAC &amp; Sirkulasi Pintar</span>
                        </div>
                        <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight font-bold">Katalog
                            Pustaka &amp; Reservasi Mandiri</h1>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Eksplorasi koleksi literatur kurikulum merdeka, modul olimpiade, hingga fiksi sastra.
                            Reservasi antrean instan terintegrasi data NISN.
                        </p>
                    </div>

                    <!-- Quick Quota Card -->
                    <div
                        class="flex flex-col sm:flex-row items-stretch gap-space-md bg-surface-container-lowest p-space-md rounded-xl shadow-sm border border-outline-variant/20">
                        <div
                            class="flex items-center gap-space-md pr-space-md border-b sm:border-b-0 sm:border-r border-outline-variant/20 pb-md sm:pb-0">
                            <div
                                class="w-12 h-12 rounded-xl bg-primary-container flex items-center justify-center text-on-primary shrink-0">
                                <span class="material-symbols-outlined text-[24px]">id_card</span>
                            </div>
                            <div class="flex flex-col">
                                <span
                                    class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Kuota
                                    Akun Siswa</span>
                                <span class="font-title-card text-title-card text-primary font-bold">1 / 3 Buku
                                    Terpakai</span>
                                <span class="font-label-md text-label-md text-secondary">Ahmad Fauzi (XII IPA 1)</span>
                            </div>
                        </div>
                        <div class="flex flex-col justify-center bg-surface-container-low rounded-lg p-space-sm">
                            <span class="font-label-md text-label-md text-on-surface-variant">Sisa Kuota Pinjam</span>
                            <span class="font-headline-sm text-headline-sm text-secondary font-bold">2 Slot</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

</body>

</html>