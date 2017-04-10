<div class="panel-body">
<br>
    <?php echo form_open_multipart('super/C_bidan/update/'.$hasil->Id_Bidan,array('class'=>'form-horizontal')); ?>
    <div class="form-group">
        <label class="control-label col-sm-2" for="labor_code">Id Bidan :</label>
        <div class="col-sm-4">
            <B><?php echo $hasil->Id_Bidan; ?></B>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="Nama_Bidan">Nama :</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="Nama_Bidan" value="<?php echo $hasil->Nama_Bidan; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="Alamat_Bidan">Alamat :</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="Alamat_Bidan" value="<?php echo $hasil->Alamat_Bidan; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="Tlp_Bidan">Telepon :</label>
        <div class="col-sm-4">
            <input type="text"  class="form-control"name="Tlp_Bidan" value="<?php echo $hasil->Tlp_Bidan; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="Tgl_Lahir_Bidan">Tanggal Lahir :</label>
        <div class="col-sm-4">
            <input type="text"  class="form-control"name="Tgl_Lahir_Bidan" value="<?php echo $hasil->Tgl_Lahir_Bidan; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="Tempat_Lahir_Bidan">Tempat Lahir :</label>
        <div class="col-sm-4">
            <input type="text"  class="form-control"name="Tempat_Lahir_Bidan" value="<?php echo $hasil->Tempat_Lahir_Bidan; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="Username_Bidan">Username :</label>
        <div class="col-sm-4">
            <input type="text"  class="form-control"name="Username_Bidan" value="<?php echo $hasil->Username_Bidan; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="Password_Bidan">Password :</label>
        <div class="col-sm-4">
            <input type="password"  class="form-control"name="Password_Bidan" value="<?php echo $hasil->Password_Bidan; ?>">
        </div>
    </div>
    <input type="submit" name="submit" class="btn btn-danger" value="Simpan">
    <?=  anchor('super/C_bidan','Cancel',array('class'=>'btn btn-primary')) ?>
    <?= form_close() ?>
</div>