<div class="bs-example" data-example-id="form-validation-states">
    <form action="proses.php" method="post"  enctype="multipart/form-data" novalidate >
      <div class="form-group has-success">
        <label class="control-label" for="inputSuccess1">Nama Penulis</label>
        <input type="text" name="nama" class="form-control1" id="inputSuccess1">
      </div>
      <div class="form-group has-warning">
        <label class="control-label" for="inputWarning1">Jenis</label>
        <select name="jenis" id="" class="form-control1" id="inputWarning1">
            <option value="">---Pilih Jenis---</option>
            <option value="Paper">paper</option>
            <option value="News">news</option>
        </select>
      </div>
      <div class="form-group has-error">
        <label class="control-label" for="inputError1">Foto</label>
        <input type="file" name="foto" class="form-control1" id="inputError1">
      </div>

      <div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<button name="btnpenulis" class="btn-primary btn">Submit</button>
				<button class="btn-info btn">Cancel</button>
			</div>
		</div>
</div>
    </form>
  </div>