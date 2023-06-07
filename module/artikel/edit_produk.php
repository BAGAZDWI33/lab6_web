<?php include('koneksi.php'); 

    if(isset($_GET['id'])) {
        $id=$_GET['id'];
        $query = "SELECT *FROM produk where id = '$id'";
        $result = mysqli_query($koneksi, $query);
        if(!$result) {
            die("Query Error :".mysqli_errno($koneksi). "-".mysqli_error($koneksi));
        }
        $data =mysqli_fetch_assoc($result);

        if(!count($data)) {
            echo "<script>alert('Data tidak ditemukan pada tabel.');window.location='index.php';</script>";

        }
    } else{
        echo "<script>alert('Masukkan ID yang ingin Di edit.');window.location='index.php';</script>";
    }



?>
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
    <center><h1>Edit Produk  <?php echo $data['nama_produk']; ?> </h1></center>
    <form method="POST" action="proses_tambah.php" enctype="multipart/form-data">
      <section class="base">
        <div>
          <label>Nama Produk</label>
          <input type="text" name="nama_produk" autofocus="" required="" value="<?php echo $data['nama_produk']; ?>"/>
          <input type="hidden" name="id"  value="<?php echo $data['nama_produk']; ?>"/>
        </div>
        <div>
          <label>Deskripsi</label>
          <input type="text" name="deskripsi" value="<?php echo $data['deskripsi']; ?>"/>
        </div>
        <div>
          <label>Harga Beli</label>
          <input type="text" name="harga_beli" required="" value="<?php echo $data['harga_beli']; ?>" />
        </div>
        <div>
          <label>Harga Jual</label>
          <input type="text" name="harga_jual" required="" value="<?php echo $data['harga_jual']; ?>" />
        </div> 
        <div>
          <label>Gambar Produk</label>
          <img src="gambar/<?php echo $data['gambar_produk']; ?>" style="width: 120px;float:left;margin-botton:5px;"> 
          <input type="file" name="gambar_produk" required="" />
          <i style="float: left;font-size: 11px;color:red;">Abaikan jika tidak merubah gambar produk</i>
        </div>
        <div>
          <button type="submit">Simpan Perubahan</button>
        </div>
      </section>
    </form>
  </body>
</html>
