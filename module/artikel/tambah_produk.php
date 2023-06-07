<?php include('koneksi.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>CRUD WEB3</title>
    <style>
      label {
        display: block;
        margin-bottom: 10px;
        font-size: 18px;
        color: #333;
      }

      input[type="text"],
      input[type="file"],
      button[type="submit"] {
        display: block;
        margin-bottom: 20px;
        padding: 10px;
        border-radius: 5px;
        border: none;
        width: 100%;
        font-size: 18px;
        font-family: 'Montserrat', sans-serif;
        box-sizing: border-box;
        
      }

      button[type="submit"] {
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }

      button[type="submit"]:hover {
        background-color: #0069d9;
      }

      .base {
        max-width: 600px;
        margin: 0 auto;
        padding: 30px;
        background-color: gold;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      }

      h1 {
        text-align: center;
        font-size: 36px;
        font-family: 'Playfair Display', serif;
        margin-bottom: 30px;
        color: #333;
      }
    </style>
  </head>
  <body>
    <h1>Tambah Produk</h1>
    <form method="POST" action="proses_tambah.php" enctype="multipart/form-data">
      <section class="base">
        <div>
          <label>Nama Produk</label>
          <input type="text" name="nama_produk" autofocus="" required="" />
        </div>
        <div>
          <label>Deskripsi</label>
          <input type="text" name="deskripsi" />
        </div>
        <div>
          <label>Harga Beli</label>
          <input type="text" name="harga_beli" required="" />
        </div>
        <div>
          <label>Harga Jual</label>
          <input type="text" name="harga_jual" required="" />
        </div> 
        <div>
          <label>Gambar Produk</label>
          <input type="file" name="gambar_produk" required="" />
        </div>
        <div>
          <button type="submit">Simpan Produk</button>
        </div>
      </section>
    </form>
  </body>
</html>
