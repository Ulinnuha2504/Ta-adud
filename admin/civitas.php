
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Civitas</h1>
                  
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Civitas</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lengkap</th>
                                            <th>Panggilan</th>
                                            <th>TTL</th>
                                            <th>Alamat</th>
                                            <th>Kontak</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lengkap</th>
                                            <th>Panggilan</th>
                                            <th>TTL</th>
                                            <th>Alamat</th>
                                            <th>Kontak</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            $no=1;
                                            $qdata=mysqli_query($koneksi,"SELECT*FROM karyawan");
                                            while($data=mysqli_fetch_array($qdata)){
                                                ?>
                                        <tr>
                                            <td><?= $no++;?></td>
                                            <td><?= $data['namalengkap_karyawan'];?></td>
                                            <td><?= $data['panggilan_karyawan'];?></td>
                                            <td><?= $data['tempatlahir_karyawan'].' | '.$data['tanggallahir_karyawan'];?></td>
                                            <td><?= $data['alamat_karyawan'];?></td>
                                            <td><?= $data['kontak_karyawan'];?></td>
                                            <td><?= $data['tglmasuk_karyawan'];?></td>
                                            <td>aksi</td>

                                        </tr>
                                                <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
