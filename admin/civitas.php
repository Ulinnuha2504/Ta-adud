<div class="container-fluid px-4">
    <h1 class="mt-4">Civitas</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Civitas</li>
    </ol>
    <div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <div>
            <i class="fas fa-table me-1"></i>
            Daftar Civitas
        </div>
        <a href="index.php?page=civitastambah" class="btn btn-primary btn-sm">Tambah</a>
    </div>
        <div class="card-body ">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Panggilan</th>
                        <th>JK</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Panggilan</th>
                        <th>JK</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    include ('../koneksi.php');
                    $no = 1;
                    $query = mysqli_query($koneksi,"SELECT*FROM karyawan");
                    while($d=mysqli_fetch_array($query)){?>
                    <tr>
                        <td><?= $no++;?></td>
                        <td><?= $d['namalengkap_karyawan'];?></td>
                        <td><?= $d['panggilan_karyawan'];?></td>
                        <td><?= $d['jk_karyawan'];?></td>
                        <td><?= $d['alamat_karyawan'];?></td>
                        <td><a href="index.php?page=detail" class="btn btn-sm btn-secondary">Detail</a></td>
                    </tr>
                    <?php  }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>