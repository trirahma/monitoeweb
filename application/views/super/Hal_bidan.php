<table class="table table-striped custab ">
    <a href="<?php echo site_url('super/C_bidan/tambah') ?>" class="btn btn-primary"><b>+</b> Add </a>
    <thead>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Telepon</th>
        <th>Tanggal Lahir</th>
        <th>Tempat Lahir</th>
        <th>Username</th>
        <th>Password</th>
        <th class="text-center" colspan="2">Action</th>
    </tr>
    </thead>   
    <?php 
        $no = 1;
        foreach($bidan as $row){    
    ?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $row->Nama_Bidan;?></td>
        <td><?php echo $row->Alamat_Bidan;?></td>
        <td><?php echo $row->Tlp_Bidan;?></td>
        <td><?php echo $row->Tgl_Lahir_Bidan;?></td>
        <td><?php echo $row->Tempat_Lahir_Bidan;?></td>
        <td><?php echo $row->Username_Bidan;?></td>
        <td><?php $pwd =$row->Password_Bidan; $md5 = md5($pwd); echo $md5;?></td>
        <td><a href="<?php echo site_url('super/C_bidan/update/'.$row->Id_Bidan) ?>" class="btn btn-primary">Edit</a></td>
        <td><a href="<?php echo site_url('super/C_bidan/delete/'.$row->Id_Bidan) ?>" class="btn btn-danger" onClick="return doconfirm();">Delete</a></td>
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