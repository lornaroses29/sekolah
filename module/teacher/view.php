<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Guru</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Guru</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-header row">
                        <div class="card-title h3 col-8">Data Guru</div>
                        <div class="col-4">
                            <a href="?m=teacher&s=add" class="btn btn-large btn-primary" style="float: right;"><i class="fas fa-plus"></i> Tambah</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>foto</th>
                                    <th>Nomor Induk</th>
                                    <th>Nama</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>No HP</th>
                                    <th>Mengajar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include_once('config.php');
                                $sql = "SELECT teachers.id AS idt, teachers.nip, teachers.name, teachers.pob, teachers.dob, teachers.wa, teachers.photo, subjects.subject  FROM teachers JOIN subjects ON subjects.id=teachers.subject_id";
                                $result = mysqli_query($config, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    $no = 1;
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    $photo = $row['photo']? $row['photo']:'logo.png';
                                    echo '<tr>
                        <td align="center">' . $no . '</td>
                        <td><img src="assets/imgs/teachers/small_' . $photo . '" width="100"></td>
                        <td>' . $row['nip'] . '</td>
                        <td>' . $row['name'] . '</td>
                        <td>' . $row['pob'] . '</td>
                        <td>' . date('d F Y', strtotime($row['dob'])) . '</td>
                        <td>' . $row['wa'] . '</td>
                        <td>' . $row['subject'] . '</td>
                        <td>
                            <a href="?m=teacher&s=edit&id=' . $row['idt'] . '"class= "btn btn-warning btn-sm"><i class="fas fa-edit"></i>Edit</a>
                            <a href="?m=teacher&s=delete&id=' . $row['idt'] . '" onclick="return zconfirm(\'Yakin Akan Dihapus\')" class= "btn btn-danger btn-sm"><i class="fas fa-trash"></i>Delete</a>
                        </td>
                        </tr>';
                                        $no++;
                                    }
                                } else {
                                    echo '<tr>
                        <td colspan=8 align=center>Tidak ada data Guru!</td>;
                        </tr>';
                                }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Foto</th>
                                    <th>Nomor Induk</th>
                                    <th>Nama</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>No HP</th>
                                    <th>Mengajar</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
        </div>
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->