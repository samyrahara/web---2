<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">List Peminjaman</h1>
    <div class="flex justify-between mb-4">
        <flux:button href="#" variant="primary">New Peminjaman</flux:button>
    </div>

    @if (session()->has('message'))
        <div class="bg-green-200 text-green-800 p-2 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif

    <table class="min-w-full border-collapse border border-gray-400 mt-4">
        <thead>
            <tr class="bg-gray-100 text-left">
                <th class="py-2 px-4 border">ID</th>
                <th class="py-2 px-4 border">Pegawai</th>
                <th class="py-2 px-4 border">Ruang</th>
                <th class="py-2 px-4 border">Tanggal</th>
                <th class="py-2 px-4 border">Jam Mulai</th>
                <th class="py-2 px-4 border">Jam Akhir</th>
                <th class="py-2 px-4 border">Keterangan</th>
                <th class="py-2 px-4 border">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peminjamans as $peminjaman)
                <tr>
                    <td class="py-2 px-4 border">{{ $peminjaman->id }}</td>
                    <td class="py-2 px-4 border">{{ $peminjaman->pegawai->nama ?? '-' }}</td>
                    <td class="py-2 px-4 border">{{ $peminjaman->ruang->nama ?? '-' }}</td>
                    <td class="py-2 px-4 border">{{ $peminjaman->tanggal }}</td>
                    <td class="py-2 px-4 border">{{ $peminjaman->jam_mulai }}</td>
                    <td class="py-2 px-4 border">{{ $peminjaman->jam_akhir }}</td>
                    <td class="py-2 px-4 border">{{ $peminjaman->keterangan }}</td>
                    <td class="py-2 px-4 border">
