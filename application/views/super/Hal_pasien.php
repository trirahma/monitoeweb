<table class="table table-striped custab ">
    <a href="<?php echo site_url('super/C_pasien/tambah') ?>" class="btn btn-primary"><b>+</b> Add </a>
    <thead>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Nama Suami</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th>Tempat Lahir</th>
        <th>Golongan Darah</th>
        <th>Telepon</th>
        <th>Pekerjaan</th>
        <th>Username</th>
        <th>Password</th>
        <th>Nama Bidan</th>
        <th class="text-center" colspan="2">Action</th>
    </tr>
    </thead>   
    <?php 
        $no = 1;
        foreach($pasien as $row){    
    ?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $row->Nama_Pasien;?></td>
        <td><?php echo $row->Nama_Suami;?></td>
        <td><?php echo $row->Alamat_Pasien;?></td>
        <td><?php echo $row->Tgl_Lahir_Pasien;?></td>
        <td><?php echo $row->Tempat_Lahir_Pasien;?></td>
        <td><?php echo $row->Golongan_Darah;?></td>
        <td><?php echo $row->Tlp_Pasien;?></td>
        <td><?php echo $row->Pekerjaan_Pasien;?></td>
        <td><?php echo $row->Username_Pasien;?></td>
        <td><?php $pwd =$row->Password_Pasien; $md5 = md5($pwd); echo $md5;?></td>
        <td><?php echo $row->Nama_Bidan;?></td>
        <td><a href="<?php echo site_url('super/C_pasien/update/'.$row->Id_Pasien) ?>" class="btn btn-primary">Edit</a></td>
        <td><a href="<?php echo site_url('super/C_pasien/delete/'.$row->Id_Pasien) ?>" class="btn btn-danger" onClick="return doconfirm();">Delete</a></td>
    </tr>
    <?php 
        }
    ?>
    </tbody>
</table>
<script>
    function doconfirm()
    {
        job=confirm("Apakah anda yakin akan menghapus data tersebut?");
        if(job!=true)
        {
            return false;
        }
    }
    </script>