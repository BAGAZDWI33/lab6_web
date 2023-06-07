<?php include('koneksi.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>CRUD WEB3</title>
    <style>
      table {
        border-collapse: collapse;
        justify-content: space-between;
        width: 100%;
        margin: 10px 0;
      }

      th,
      td {
        text-align: left;
        padding: 8px;
      }

      th {
        background-color: #007bff;
        color: white;
      }

      tr:nth-child(even) {
        background-color: #f2f2f2;
      }

      a {
        display: inline-block;
        padding: 5px 10px;
        background-color: #007bff;
        color: white;
        border-radius: 5px;
        text-decoration: none;
        margin-right: 5px;
      }

      a:hover {
        background-color: #0069d9;
      }

      .center {
        text-align: center;
      }
      tr td img{
        padding: 0px;
      }
    </style>
  </head>

  <body>
    <center>
      <h1>Data Produk</h1>
    </center>
    <center>
      <a href="tambah_produk.php">+ &nbsp; Tambah Produk</a>
    </center>
    <table>
      <thead>
        <tr>
          <th>No.</th>
          <th>Produk</th>
          <th>Deskripsi</th>
          <th>Harga_beli</th>
          <th>Harga_jual</th>
          <th>Gambar</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $query = "SELECT * FROM produk ORDER BY id ASC";
        $result = mysqli_query($koneksi, $query);

        if (!$result) {
          die(
            "query error ; " .
              mysqli_errno($koneksi) .
              "-" .
              mysqli_error($koneksi)
          );
        }
        $no = 1;

        while ($row = mysqli_fetch_assoc($result)) {
          ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $row['nama_produk']; ?></td>
            <td><?php echo substr($row['deskripsi'], 0, 20); ?>...</td>
            <td>Rp<?php echo number_format($row['harga_beli'], 0, ',', ','); ?></td>
            <td>Rp<?php echo number_format($row['harga_jual'], 0, ',', ','); ?></td>
            <td><img src="gambar/<?php echo $row['gambar_produk']; ?>" width="10%"></td>
            <td>
              <a href="edit_produk.php?id=<?php echo $row['id']; ?>">Edit</a>
              <a
                href="proses_hapus.php?id=<?php echo $row['id']; ?>"
                onclick="return confirm('Anda Yakin Mau Hapus data ini?')"
              >Hapus</a>
            </td>
          </tr>
          <?php
          $no++;
        }
        ?>
      </tbody>
    </table>
  </body>
</html>
