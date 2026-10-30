<html>
    <head>
        <title>Daftar Karyawan</title>
    </head>
    <body>
        <h1>Daftar Karyawan</h1>

        <p>
            <a href="{{ route('karyawans.create') }}">
                Tambah Karyawan
            </a>
        </p>

        @session('success')
        <p style="color: blue;">
            {{ session('success') }}
        </p>
        @endsession

        <table border="1" cellpadding="8" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Divisi</th>
                    <th>Gaji</th>
                    <th>Tanggal Masuk</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($karyawans as $karyawan )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $karyawan->nip }}</td>
                    <td>{{ $karyawan->nama }}</td>
                    <td>{{ $karyawan->jabatan }}</td>
                    <td>{{ $karyawan->divisi }}</td>
                    <td>Rp {{ number_format($karyawan->gaji, 0, ', ', '. ') }}</td>
                    <td>{{ $karyawan->tanggal_masuk }}</td>
                    <td>{{ $karyawan->keterangan ?? '-' }}</td>
                    <td>
                        <a href="{{ route('karyawans.edit', $karyawan->id) }}">
                            Edit
                        </a>
                        <form action="{{ route('karyawans.destroy', $karyawan->id) }}"
                            method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                            onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                            Hapus
                            </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
