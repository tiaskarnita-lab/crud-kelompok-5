<h1>Edit Karyawan</h1>

    <form action="{{ route('karyawans.update', $karyawan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <p>
            <label>NIP</label><br>
            <input type="text" name="nip" value="{{ old('nip', $karyawan->nip) }}">
        </p>
        <p>
            <label>Nama</label><br>
            <input type="text" name="nama" value="{{ old('nama', $karyawan->nama) }}">
        </p>
        <p>
            <label>Jabatan</label><br>
            <input type="text" name="jabatan" value="{{ old('jabatan', $karyawan->jabatan) }}">
        </p>
        <p>
            <label>Divisi</label><br>
            <input type="text" name="divisi" value="{{ old('divisi', $karyawan->divisi) }}">
        </p>
        <p>
            <label>Gaji</label><br>
            <input type="number" name="gaji" step="0.01" value="{{ old('gaji', $karyawan->gaji) }}">
        </p>
        <p>
            <label>Tanggal Masuk</label><br>
            <input type="date" name="tanggal_masuk" value="{{ old('tanggal_masuk', $karyawan->tanggal_masuk) }}">
        </p>
        <p>
            <label>Keterangan</label><br>
            <textarea name="keterangan">{{ old('keterangan', $karyawan->keterangan) }}</textarea>
        </p>

        <button type="submit">Perbarui</button>
    </form>

    <p>
        <a href="{{ route('karyawans.index') }}">
            Batal
        </a>
    </p>
