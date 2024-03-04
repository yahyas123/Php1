<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Keuangan</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
        th {
            background-color: #ccc;
        }
    </style>
</head>
<body>
<?php
    include("header.php")
    ?>
    <h1>Data Keuangan</h1>
    <table>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Kategori</th>
            <th>Keterangan</th>
            <th>Pemasukan</th>
            <th>Pengeluaran</th>
        </tr>
        <?php
        $data = [
            [
                "no" => 1,
                "tanggal" => "01-03-2023",
                "kategori" => "pembayaran pesanan",
                "keterangan" => "",
                "pemasukan" => 1000000,
                "pengeluaran" => 0
            ],
            
            [
                "no" => 2,
                "tanggal" => "01-03-2023",
                "kategori" => "pembayaran pesanan",
                "keterangan" => "ga ada",
                "pemasukan" => 100000,
                "pengeluaran" => 0
            ],
            
            [
                "no" => 3,
                "tanggal" => "08-03-2023",
                "kategori" => "pembayaran pesanan",
                "keterangan" => "",
                "pemasukan" => 200000,
                "pengeluaran" => 0
            ],
            
            [
                "no" => 4,
                "tanggal" => "09-03-2023",
                "kategori" => "pembayaran pesanan",
                "keterangan" => "test pemasukan 090323",
                "pemasukan" => 89000,
                "pengeluaran" => 0
            ],
            
            [
                "no" => 5,
                "tanggal" => "09-03-2023",
                "kategori" => "pembayaran pesanan",
                "keterangan" => "test pengeluaran 090323",
                "pemasukan" => 0,
                "pengeluaran" => 21000
            ],
            
            [
                "no" => 6,
                "tanggal" => "16-03-2023",
                "kategori" => "pembayaran pesanan",
                "keterangan" => "lunas yak",
                "pemasukan" => 165000,
                "pengeluaran" => 0
            ],
            
            [
                "no" => 7,
                "tanggal" => "16-03-2023",
                "kategori" => "pembayaran pesanan",
                "keterangan" => "lunas yak",
                "pemasukan" => 330000,
                "pengeluaran" => 0
            ],
            
            [
                "no" => 8,
                "tanggal" => "15-03-2023",
                "kategori" => "pinjaman ulang",
                "keterangan" => "tes",
                "pemasukan" => 100000,
                "pengeluaran" => 0
            ],
            
            [
                "no" => 9,
                "tanggal" => "16-02-2023",
                "kategori" => "belanja modal",
                "keterangan" => "tes card tahun",
                "pemasukan" => 1000000,
                "pengeluaran" => 0
            ],
            
            [
                "no" => 10,
                "tanggal" => "24-03-2023",
                "kategori" => "pembayaran pesanan",
                "keterangan" => "",
                "pemasukan" => 24032023,
                "pengeluaran" => 0
            ],
            
        ];

        
        $totalPemasukan = 0;
        $totalPengeluaran = 0;
        foreach ($data as $row) {
            $totalPemasukan += $row["pemasukan"];
            $totalPengeluaran += $row["pengeluaran"];
        }
        $saldo = $totalPemasukan - $totalPengeluaran;

        
        foreach ($data as $row) {
            echo "<tr>";
            echo "<td>" . $row["no"] . "</td>";
            echo "<td>" . $row["tanggal"] . "</td>";
            echo "<td>" . $row["kategori"] . "</td>";
            echo "<td>" . $row["keterangan"] . "</td>";
            echo "<td>" . number_format($row["pemasukan"], 0, ",", ".") . "</td>";
            echo "<td>" . number_format($row["pengeluaran"], 0, ",", ".") . "</td>";
            echo "</tr>";
        }

       
        echo "<tr>";
        echo "<th colspan=4>Total</th>";
        echo "<td>" . number_format($totalPemasukan, 0, ",", ".") . "</td>";
        echo "<td>" . number_format($totalPengeluaran, 0, ",", ".") . "</td>";
        echo "</tr>";

        
        echo "<tr>";
        echo "<th colspan=4>Saldo</th>";
        echo "<td colspan=2>" . number_format($saldo, 0, ",", ".") . "</td>";
        echo "</tr>";
        ?>
    </table>
</body>
</html>
