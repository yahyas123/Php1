<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,td,th{
            border:1px solid;
            border-collapse:collapse;
        }

    </style>
</head>
<body>
    <?php
    include("header.php")
    ?>
    <table>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
        </tr>
            <?php
            $barang = array(
                array("nomor"=>1,"kode"=>"B001","nama"=>"Laptop Asus","Harga"=>9000000,"Jumlah"=>3, "subtotal"=>27000000),
                array("nomor"=>2,"kode"=>"B002","nama"=>"Keyboard Logitech","Harga"=>850000,"Jumlah"=>4, "subtotal"=>3400000),
                array("nomor"=>3,"kode"=>"B003","nama"=>"Speaker","Harga"=>500000,"Jumlah"=>6,"subtotal"=>3000000),
                array("nomor"=>4,"kode"=>"B004","nama"=>"Printer Epson","Harga"=>3000000,"Jumlah"=>7,"subtotal"=>21000000),
            );
            foreach ($barang as $tipe) {
            ?>
        <tr>
            <td><?php echo $tipe["nomor"]?></td>
            <td><?php echo $tipe["kode"]?></td>
            <td><?php echo $tipe["nama"]?></td>
            <td><?php echo $tipe["Harga"]?></td>
            <td><?php echo $tipe["Jumlah"]?></td>
            <td><?php echo $tipe["subtotal"]?></td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td colspan="5">Total</td>
            <td>54.400.000</td>
        </tr>
    </table>
</body>
</html>