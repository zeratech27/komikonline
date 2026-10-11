<form action="<?= base_url('simulasi/hitung') ?>" method="post">
    <label>Jumlah Pinjaman (Plafon):</label>
    <input type="number" name="plafon" required><br>

    <label>Bunga per Tahun (%):</label>
    <input type="number" step="0.01" name="bunga" required><br>

    <label>Tenor (Bulan):</label>
    <input type="number" name="tenor" required><br>

    <button type="submit">Hitung Simulasi</button>
</form>
