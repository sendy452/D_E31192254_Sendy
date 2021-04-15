<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables User</h6>
    </div>
    <div class="card-body">
       <div class="table-responsive">
           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead>
                   <tr>
                       <th>No</th>
                       <th>Username</th>
                       <th>Nama</th>
                       <th>Grup</th>
                       <th></th>
                   </tr>
               </thead>
               <tfoot>
                   <tr>
                       <th>No</th>
                       <th>Username</th>
                       <th>Nama</th>
                       <th>Grup</th>
                       <th></th>
                   </tr>
               </tfoot>
               <tbody>
                   <?php $no = 1; foreach($user as $baris){ ?>
                   <!--deklarasi $no dimuali dari 1 dan
                   membuat perulangan $user dari controller diubah menjadi $baris,
                   agar dapat memanggil kumpulan data pada database-->
                   <tr>
                       <td><?php echo $no++; ?></td>
                       <td><?php echo $baris->username; ?></td>
                       <!--menampilkan kumpulan data username-->
                       <td><?php echo $baris->nama; ?></td>
                       <!--menampilkan kumpulan data nama-->
                       <td><?php echo $baris->grup; ?></td>
                       <!--menampilkan kumpulan data grup-->
                       <td></td>
                   </tr>
                   <?php } ?>
               </tbody>
           </table>
       </div>
       <a href="<?= base_url('Mahasiswa/tambah');?>" class="btn btn-success btn-icon-split">
       <!--membuat tombol untuk mengarahkan ke function tambah yang berada pada controller Mahasiswa-->
           <span class="text">Tambah Data</span>
       </a>
    </div>
</div>