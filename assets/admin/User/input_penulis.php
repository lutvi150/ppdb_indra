<div class="bs-example" data-example-id="form-validation-states">      
    <form action="aksi_simpan.php"  method="POST" enctype="multipart/form-data">
      <div class="form-group has-success">
        <label class="control-label" for="inputSuccess1">Nama Penulis</label>
        <input type="text" name="nama_penulis" class="form-control1" id="nama">
      </div>
    <div class="form-group has-warning">
      <label  for="inputError1">Jenis</label>
      <select  name="jenis" class="form-control" required>
      <option value=""> ----PILIH----</option>
		<option value="news"> News</option>
		<option value="paper"> Paper</option>
	</select>
      </div>
      <div class="form-group has-error">
        <label class="control-label" for="inputSuccess1">Foto</label>
        <input type="file" class="form-control1" id="foto" name="foto">
      </div>
      <div class="row">
			<div >
				<button type="submit" name="simpan" class="btn-primary btn col-sm-1">Simpan </button>
				<button class="btn-primary btn col-sm-1">Batal</button>
				<button class="btn-primary btn col-sm-1">Reset</button>
			</div>
		</div>
    </form>
  </div>
