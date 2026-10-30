<h1>Tambah Karyawan</h1>

<form action="{{ route('karyawans.store') }}" method="POST">
    @csrf
    <p>
        <label>NIP</label><br>
        <input type="text" name="nip" value="{{ old('nip') }}">
    </p>
    <p>
            <label>Nama</label><br>
            <input type="text" name="nama" value="{{ old('nama') }}">
        </p>
        <p>
            <label>Jabatan</label><br>
            <input type="text" name="jabatan" value="{{ old('jabatan') }}">
        </p>
        <p>
            <label>Divisi</label><br>
            <input type="text" name="divisi" value="{{ old('divisi') }}">
        </p>
        <p>
            <label>Gaji</label><br>
            <input type="number" name="gaji" step="0.01" value="{{ old('gaji') }}">
        </p>
        <p>
            <label>Tanggal Masuk</label><br>
            <input type="date" name="tanggal_masuk" value="{{ old('tanggal_masuk') }}">
        </p>
        <p>
            <label>Keterangan</label><br>
            <textarea name="keterangan">{{ old('keterangan') }}</textarea>
        </p>

        <button type="submit">Simpan</button>
        <a href="{{ route('karyawans.index') }}">
            Batal
        </a>
    </form>
</body>
</form>
