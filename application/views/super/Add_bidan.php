<?php echo form_open_multipart('super/C_bidan/tambah_aksi/',array('class'=>'form-horizontal')); ?>
<div class="form-group">
    <label class="control-label col-sm-2" for="Nama_Bidan">Nama Bidan :</label>
    <div class="col-sm-4">
        <input type="text" class="form-control" name="Nama_Bidan" value="" required>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="Alamat_Bidan">Alamat :</label>
    <div class="col-sm-4">
        <input type="text" class="form-control" name="Alamat_Bidan" value="" required>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="Tlp_Bidan">Telepon :</label>
    <div class="col-sm-4">
        <input type="text" class="form-control" name="Tlp_Bidan" value="" required>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="Tgl_Lahir_Bidan">Tanggal Lahir :</label>
    <div class="col-sm-4">
        <input type="text"  class="form-control"name="Tgl_Lahir_Bidan" value="" required>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="Tempat_Lahir_Bidan">Tempat Lahir :</label>
    <div class="col-sm-4">
        <input type="text"  class="form-control"name="Tempat_Lahir_Bidan" value="" required>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="Username_Bidan">Username :</label>
    <div class="col-sm-4">
        <input type="text"  class="form-control"name="Username_Bidan" value="" required>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="Password_Bidan">Password :</label>
    <div class="col-sm-4">
        <input type="password"  class="form-control"name="Password_Bidan" value="" required>
    </div>
</div>

    <input type="submit" name="submit" class="btn btn-danger" value="Simpan">
    <?=  anchor('super/C_bidan','Cancel',array('class'=>'btn btn-primary')) ?>
    <?= form_close() ?>
</div>