<div class="panel-body">
<br>
    <?php echo form_open_multipart('super/C_pasien/update/'.$hasil->Id_Pasien,array('class'=>'form-horizontal')); ?>
    <div class="form-group">
        <label class="control-label col-sm-2" for="Id_Pasien">Id Pasien :</label>
        <div class="col-sm-4">
            <B><?php echo $hasil->Id_Pasien; ?></B>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="Nama_Pasien">Nama :</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="Nama_Pasien" value="<?php echo $hasil->Nama_Pasien; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="Nama_Suami">Nama Suami :</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="Nama_Suami" value="<?php echo $hasil->Nama_Suami; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="Alamat_Pasien">Alamat :</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="Alamat_Pasien" value="<?php echo $hasil->Alamat_Pasien; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="Tlp_Pasien">Telepon :</label>
        <div class="col-sm-4">
            <input type="text"  class="form-control"name="Tlp_Pasien" value="<?php echo $hasil->Tlp_Pasien; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="Tgl_Lahir_Pasien">Tanggal Lahir :</label>
        <div class="col-sm-4">
            <input type="text"  class="form-control"name="Tgl_Lahir_Pasien" value="<?php echo $hasil->Tgl_Lahir_Pasien; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="Tempat_Lahir_Pasien">Tempat Lahir :</label>
        <div class="col-sm-4">
            <input type="text"  class="form-control"name="Tempat_Lahir_Pasien" value="<?php echo $hasil->Tempat_Lahir_Pasien; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="Golongan_Darah">Golongan Darah :</label>
        <div class="col-sm-4">
            <input type="text"  class="form-control"name="Golongan_Darah" value="<?php echo $hasil->Golongan_Darah; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="Pekerjaan_Pasien">Pekerjaan Pasien :</label>
        <div class="col-sm-4">
            <input type="text"  class="form-control"name="Pekerjaan_Pasien" value="<?php echo $hasil->Pekerjaan_Pasien; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="bidan">Bidan :</label>
        <div class="col-sm-4">
            <select name="Id_Bidan" class="form-control">
                <option value="<?php echo $hasil->Id_Bidan;?>"><?php echo $hasil->Nama_Bidan?></option>
                <?php foreach($bidan as $row):?>
                <option value="<?php echo $row->Id_Bidan?>"><?php echo $row->Nama_Bidan?></option>
                <?php endforeach;?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="Username_Pasien">Username :</label>
        <div class="col-sm-4">
            <input type="text"  class="form-control"name="Username_Pasien" value="<?php echo $hasil->Username_Pasien; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="Password_Pasien">Password :</label>
        <div class="col-sm-4">
            <input type="password"  class="form-control"name="Password_Pasien" value="<?php echo $hasil->Password_Pasien; ?>">
        </div>
    </div>
    <input type="submit" name="submit" class="btn btn-danger" value="Simpan">
    <?=  anchor('super/C_pasien','Cancel',array('class'=>'btn btn-primary')) ?>
    <?= form_close() ?>
</div>