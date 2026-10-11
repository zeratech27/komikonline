<html>
    <h3>Hasil Simulasi Cicilan Flat</h3>
<p>Angsuran per Bulan: Rp <?= number_format($total_angsuran, 0, ',', '.') ?></p>

<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>Bulan ke-</th>
            <th>Angsuran Pokok</th>
            <th>Bunga</th>
            <th>Total Angsuran</th>
            <th>Sisa Hutang</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($tabel_angsuran as $row): ?>
        <tr>
            <td><?= $row['bulan'] ?></td>
            <td>Rp <?= number_format($row['angsuran_pokok'], 0, ',', '.') ?></td>
            <td>Rp <?= number_format($row['bunga'], 0, ',', '.') ?></td>
            <td>Rp <?= number_format($row['total_angsuran'], 0, ',', '.') ?></td>
            <td>Rp <?= number_format($row['sisa_hutang'], 0, ',', '.') ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</html>