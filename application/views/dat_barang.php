<!DOCTYPE html>
<html>
    <head>
        <title>Data Barang</title>
</head>
<body>
    <center>
        <h3>Data Barang</h3>

        <table border="1" width="500">
            <tr>
                <td>ID</td>
                <td>NAME</td>
                <td>QTY</td>
                <td>PRICE</td>
        </tr>

        <?php foreach($masterbarang as $barang): ?>
            <tr>
                <td><?php echo $barang ['id']; ?></td>
                <td><?php echo $barang ['name']; ?></td>
                <td><?php echo $barang ['qty']; ?></td>
                <td><?php echo $barang ['price']; ?></td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td colspan="5" align+"center">
                Tambah Data</td>

</table>
</center>

</body>
</html>
