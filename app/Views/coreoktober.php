<!-- app/Views/insight_view.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insight Data</title>
</head>
<body>
    <h1>Insight Data</h1>

    <!-- Dropdown untuk memilih bulan -->
    <label for="bulan">Pilih Bulan:</label>
    <select id="bulan" name="bulan">
        <option value="10" <?php echo (isset($selectedMonth) && $selectedMonth == 10) ? 'selected' : ''; ?>>Oktober</option>
        <option value="11" <?php echo (isset($selectedMonth) && $selectedMonth == 11) ? 'selected' : ''; ?>>November</option>
        <option value="12" <?php echo (isset($selectedMonth) && $selectedMonth == 12) ? 'selected' : ''; ?>>Desember</option>
    </select>

    <table border="1">
        <thead>
            <tr>
                <th>Menu</th>
                <th>Harga</th>
                <th>Total Pesanan</th>
                <th>Total Pemasukan</th>
                <th>Persentase Dari Total Pemasukan</th>
                <th>Bulan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dbpesanantar as $data): ?>
                <?php if ($data['Bulan'] == (isset($selectedMonth) ? $selectedMonth : 10)): ?>
                    <tr>
                        <td><?php echo $data['Menu']; ?></td>
                        <td><?php echo $data['Harga']; ?></td>
                        <td><?php echo $data['TotalPesanan']; ?></td>
                        <td><?php echo $data['TotalPemasukan']; ?></td>
                        <td><?php echo $data['PersentaseDariTotalPemasukan']; ?></td>
                        <td><?php echo $data['Bulan']; ?></td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Script untuk menangani perubahan pada dropdown -->
    <script>
        document.getElementById('bulan').addEventListener('change', function () {
            var selectedMonth = document.getElementById('bulan').value;
            window.location.href = 'insightAPI/' + selectedMonth;
        });
    </script>
</body>
</html>


