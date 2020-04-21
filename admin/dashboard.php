<div class="container-fluid">
    
<center>
        <h1>Tambah Berita</h1>
      <center>
      <form method="POST" action="proses_tambah.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Jenis Berita</label>
          <select>
            <option>Beranda</option>
          	<option>Viral</option>
          	<option>Teknologi</option>
            <option>Kuliner</option>
            <option>Hiburan</option>
            <option>Olahraga</option>
          </select>
        </div>
        <div>
          <label>Judul</label>
         <input type="text" name="harga_beli" required="" />
        </div>
        <div>
          <label>Deskripsi</label>
<textarea name="Deskripsi"></textarea>
        </div>
            
        <div>
          <label>Gambar Produk</label>
         <input type="file" name="gambar_produk" required="" />
        </div>
        <div>
         <button type="submit">UPLOAD</button>
        </div>
        </section>
      </form>

</div>