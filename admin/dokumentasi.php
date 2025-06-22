<div class="container-fluid px-4">
    <h1 class="mt-4">Civitas</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Dokumentasi</li>
    </ol>
    <div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <div>
            <i class="fas fa-table me-1"></i>
            Daftar Dokumentasi
        </div>
        <a href="index.php?page=civitastambah" class="btn btn-primary btn-sm">Tambah</a>
    </div>
        <div class="card-body ">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tanggal</th>
                        <th>Jenis</th>
                        <th>Keterangan</th>
                        <th>Gambar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tanggal</th>
                        <th>Jenis</th>
                        <th>Keterangan</th>
                        <th>Gambar</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    include ('../koneksi.php');
                    $no = 1;
                    $query = mysqli_query($koneksi,"SELECT*FROM dokumentasi inner JOIN karyawan on dokumentasi.id_karyawan=karyawan.id_karyawan");
                    while($d=mysqli_fetch_array($query)){?>
                    <tr>
                        <td><?= $no++;?></td>
                        <td><?= $d['panggilan_karyawan'];?></td>
                        <td><?= $d['tanggal'];?></td>
                        <td><?= $d['jenis'];?></td>
                        <td><?= $d['alasan'];?></td>
                        <td>
                            <img width="100px"src="arsip/<?= $d['gambar'];?>" alt="">
                        </td>
                        <td><?= $d['alasan'];?></td>

                    </tr>
                    <?php  }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

