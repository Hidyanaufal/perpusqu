@extends('layouts.app')

@section('content')

<div class="space-y-8">

    {{-- Welcome --}}
    <div>
        <p class="text-sm font-medium text-indigo-600">
            School Library
        </p>

        <h1 class="mt-1 text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl">
            Selamat datang kembali 👋
        </h1>

        <p class="mt-2 text-sm text-slate-500">
            Pantau aktivitas perpustakaan sekolah hari ini.
        </p>
    </div>


    {{-- Statistics --}}
    <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">

        {{-- Books --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

            <div class="flex items-start justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Total Buku
                    </p>

                    <p class="mt-2 text-3xl font-bold text-slate-900">
                        1,250
                    </p>
                </div>

                <div class="rounded-xl bg-indigo-50 p-3 text-indigo-600">
                    📚
                </div>

            </div>

            <p class="mt-4 text-xs text-emerald-600">
                ↑ 8.2% dari bulan lalu
            </p>

        </div>


        {{-- Borrowed --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

            <div class="flex items-start justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Sedang Dipinjam
                    </p>

                    <p class="mt-2 text-3xl font-bold text-slate-900">
                        128
                    </p>
                </div>

                <div class="rounded-xl bg-amber-50 p-3 text-amber-600">
                    ↗
                </div>

            </div>

            <p class="mt-4 text-xs text-slate-500">
                10.2% dari seluruh koleksi
            </p>

        </div>


        {{-- Overdue --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

            <div class="flex items-start justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Terlambat
                    </p>

                    <p class="mt-2 text-3xl font-bold text-slate-900">
                        24
                    </p>
                </div>

                <div class="rounded-xl bg-rose-50 p-3 text-rose-500">
                    !
                </div>

            </div>

            <p class="mt-4 text-xs text-rose-500">
                Perlu segera ditindaklanjuti
            </p>

        </div>


        {{-- Fine --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

            <div class="flex items-start justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Total Denda
                    </p>

                    <p class="mt-2 text-3xl font-bold text-slate-900">
                        Rp 480K
                    </p>
                </div>

                <div class="rounded-xl bg-emerald-50 p-3 text-emerald-600">
                    Rp
                </div>

            </div>

            <p class="mt-4 text-xs text-emerald-600">
                Rp 320K sudah dibayarkan
            </p>

        </div>

    </div>


    {{-- Main content --}}
    <div class="grid gap-6 xl:grid-cols-3">

        {{-- Recent transactions --}}
        <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white xl:col-span-2">

            <div class="flex items-center justify-between border-b border-slate-100 p-5">

                <div>
                    <h2 class="font-semibold text-slate-900">
                        Peminjaman Terbaru
                    </h2>

                    <p class="mt-1 text-xs text-slate-500">
                        Aktivitas peminjaman terakhir
                    </p>
                </div>

                <a
                    href="#"
                    class="text-sm font-semibold text-indigo-600 hover:text-indigo-700"
                >
                    Lihat semua
                </a>

            </div>

            <div class="overflow-x-auto">

                <table class="w-full text-left text-sm">

                    <thead class="bg-slate-50 text-xs uppercase text-slate-500">
                        <tr>
                            <th class="px-5 py-3 font-semibold">
                                Buku
                            </th>

                            <th class="px-5 py-3 font-semibold">
                                Anggota
                            </th>

                            <th class="px-5 py-3 font-semibold">
                                Tanggal
                            </th>

                            <th class="px-5 py-3 font-semibold">
                                Status
                            </th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-slate-100">

                        <tr>
                            <td class="px-5 py-4">
                                <p class="font-medium text-slate-900">
                                    Laskar Pelangi
                                </p>

                                <p class="text-xs text-slate-500">
                                    Andrea Hirata
                                </p>
                            </td>

                            <td class="px-5 py-4 text-slate-600">
                                Ahmad Fauzan
                            </td>

                            <td class="px-5 py-4 text-slate-500">
                                28 Sep 2026
                            </td>

                            <td class="px-5 py-4">
                                <span class="rounded-full bg-amber-50 px-2.5 py-1 text-xs font-semibold text-amber-700">
                                    Dipinjam
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-5 py-4">
                                <p class="font-medium text-slate-900">
                                    Bumi Manusia
                                </p>

                                <p class="text-xs text-slate-500">
                                    Pramoedya Ananta Toer
                                </p>
                            </td>

                            <td class="px-5 py-4 text-slate-600">
                                Siti Aminah
                            </td>

                            <td class="px-5 py-4 text-slate-500">
                                28 Sep 2026
                            </td>

                            <td class="px-5 py-4">
                                <span class="rounded-full bg-emerald-50 px-2.5 py-1 text-xs font-semibold text-emerald-700">
                                    Dikembalikan
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-5 py-4">
                                <p class="font-medium text-slate-900">
                                    Negeri 5 Menara
                                </p>

                                <p class="text-xs text-slate-500">
                                    Ahmad Fuadi
                                </p>
                            </td>

                            <td class="px-5 py-4 text-slate-600">
                                Budi Santoso
                            </td>

                            <td class="px-5 py-4 text-slate-500">
                                27 Sep 2026
                            </td>

                            <td class="px-5 py-4">
                                <span class="rounded-full bg-rose-50 px-2.5 py-1 text-xs font-semibold text-rose-700">
                                    Terlambat
                                </span>
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>


        {{-- Quick action --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5">

            <h2 class="font-semibold text-slate-900">
                Aksi Cepat
            </h2>

            <p class="mt-1 text-sm text-slate-500">
                Kelola aktivitas perpustakaan.
            </p>

            <div class="mt-5 space-y-3">

                <a
                    href="#"
                    class="
                        flex items-center gap-3 rounded-xl
                        border border-slate-200 p-3
                        transition hover:border-indigo-200
                        hover:bg-indigo-50
                    "
                >
                    <span class="rounded-lg bg-indigo-100 p-2 text-indigo-600">
                        +
                    </span>

                    <div>
                        <p class="text-sm font-semibold text-slate-900">
                            Tambah Buku
                        </p>

                        <p class="text-xs text-slate-500">
                            Tambahkan koleksi baru
                        </p>
                    </div>
                </a>


                <a
                    href="#"
                    class="
                        flex items-center gap-3 rounded-xl
                        border border-slate-200 p-3
                        transition hover:border-indigo-200
                        hover:bg-indigo-50
                    "
                >
                    <span class="rounded-lg bg-emerald-100 p-2 text-emerald-600">
                        ↗
                    </span>

                    <div>
                        <p class="text-sm font-semibold text-slate-900">
                            Peminjaman
                        </p>

                        <p class="text-xs text-slate-500">
                            Catat peminjaman buku
                        </p>
                    </div>
                </a>


                <a
                    href="#"
                    class="
                        flex items-center gap-3 rounded-xl
                        border border-slate-200 p-3
                        transition hover:border-indigo-200
                        hover:bg-indigo-50
                    "
                >
                    <span class="rounded-lg bg-amber-100 p-2 text-amber-600">
                        ↩
                    </span>

                    <div>
                        <p class="text-sm font-semibold text-slate-900">
                            Pengembalian
                        </p>

                        <p class="text-xs text-slate-500">
                            Proses pengembalian
                        </p>
                    </div>
                </a>

            </div>

        </div>

    </div>

</div>

@endsection