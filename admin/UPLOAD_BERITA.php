<div class="container-fluid">
    
<center> <h1>Upload Berita</h1> <center> <form method="POST"
action="proses_tambah.php" enctype="multipart/form-data" > <section
class="base"> 
	<style type="text/css">
		* {
			font-family: "Sketch_3D";
		}
		h1 {
			text-transform: unset;
			color: #99b3ff;
		}
		.base {
			width: 400px;
			padding: 20px;
			margin-left: auto;
			margin-right: auto;
			background-color: #ffff4d;
		}
		label {
			margin-top: 10px;
			float: left;
			text-align: left;
			width: 100%
		}
		input {
			padding: 6px;
			width: 100%;
			box-sizing: border-box;
			background-color: #f8f8f8;
			border: 2px solid #ccc;
		}
		button {
			background-color: #4dff4d;
			color: #fff;
			padding: 10px;
			font-size: 14px;
			border: 0;
			margin-top: 20px;
		}
	</style>
<div> 
<label>Jenis Berita</label> <select>
<option>Beranda</option> <option>Viral</option>
<option>Teknologi</option> <option>Kuliner</option> <option>Hiburan</option>
<option>Olahraga</option> </select>
          
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