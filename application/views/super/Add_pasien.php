<?php echo form_open_multipart('super/C_pasien/tambah_aksi/',array('class'=>'form-horizontal')); ?>
<div class="form-group">
    <label class="control-label col-sm-2" for="Nama_Pasien">Nama Pasien :</label>
    <div class="col-sm-4">
        <input type="text" class="form-control" name="Nama_Pasien" value="" required>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="Nama_Suami">Nama Suami :</label>
    <div class="col-sm-4">
        <input type="text" class="form-control" name="Nama_Suami" value="" required>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="Alamat_Pasien">Alamat Pasien :</label>
    <div class="col-sm-4">
        <input type="text" class="form-control" name="Alamat_Pasien" value="" required>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="Tgl_Lahir_Pasien">Tgl Lahir Pasien :</label>
    <div class="col-sm-4">
        <input type="text"  class="form-control"name="Tgl_Lahir_Pasien" value="" required>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="Tempat_Lahir_Pasien">Tempat Lahir Pasien :</label>
    <div class="col-sm-4">
        <input type="text"  class="form-control"name="Tempat_Lahir_Pasien" value="" required>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="Golongan_Darah">Golongan Darah :</label>
    <div class="col-sm-4">
        <input type="text"  class="form-control"name="Golongan_Darah" value="" required>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="Tlp_Pasien">Tlp Pasien :</label>
    <div class="col-sm-4">
        <input type="text"  class="form-control"name="Tlp_Pasien" value="" required>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="Pekerjaan_Pasien">Pekerjaan Pasien :</label>
    <div class="col-sm-4">
        <input type="text"  class="form-control"name="Pekerjaan_Pasien" value="" required>
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
<div class="form-group">
    <label class="control-label col-sm-2" for="Bidan">Bidan :</label>
    <div class="col-sm-4">
        <select name="Id_Bidan" class="form-control">
            <option>-Pilih-</option>
            <?php foreach($bidan as $row):?>
            <option value="<?php echo $row->Id_Bidan?>"><?php echo $row->Nama_Bidan?></option>
            <?php endforeach;?>
        </select>
    </div>
</div>

    <input type="submit" name="submit" class="btn btn-danger" value="Simpan">
    <?=  anchor('super/C_pasien','Cancel',array('class'=>'btn btn-primary')) ?>
    <?= form_close() ?>
</div>