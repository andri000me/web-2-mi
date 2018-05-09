<div class="panel panel-primary">
    <div class="panel-heading">Data Barang</div>
    <div class="panel-body">
        
        <a href="<?php echo site_url('admin/dashboard/tambah'); ?>" class="btn btn-default">Tambah Data</a>
        <hr/>
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Deskripsi</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($isi_barang as $value) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $value->nama_barang; ?></td>
                        <td><?php echo $value->deskripsi; ?></td>
                        <td><?php echo $value->kategori; ?></td>
                        <td><?php echo $value->harga; ?></td>
                        <td><?php echo $value->foto; ?></td>
                        <td>
                            <a href="<?php echo site_url('admin/dashboard/delete/'.$value->id) ?>" class="btn btn-danger btn-xs">Del</a>
                            | Update
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>