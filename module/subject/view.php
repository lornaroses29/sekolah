<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Mata Pelajaran</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>

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
                <a href="?m=subject&s=add" class="btn btn-primary btn-sm" style="float: right">
                <i class="fas fa-plus"></i> Tambah</a>
            </div>
        <table class="table table stripped table-hover table-border">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Mata Pelajaran</th>
                    <th>Jam Mata Pelajaran</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody> 
              <?php
              include_once('config.php');
              $sql = "SELECT * FROM subjects";
              $result = mysqli_query($config, $sql);
              if (mysqli_num_rows($result) > 0) {
                  $no=1;
                  while($row = mysqli_fetch_assoc($result)) {
                  echo '<tr>
                    <td>' .$no.'</td>
                    <td>' .$row['subject'].'</td>
                    <td>' .$row['hours'].'</td>
                    <td>
                        <a href="?m=subject&s=edit&id='.$row['id'].'" class="btn btn-warning btn-sm"><i 
                        class="fas fa-edit"></i></a>
                        <a href="?m=subject&s=delete&id='.$row['id'].'" onclick="return confirm(\'Yakin akan dihapus?\') 
                        class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                    </tr>';
                    $no++;
                  }
              } else {
                  echo '<tr>
                  <td colspan=4>Tidak ada data</td>
                  </tr>';
              }
              ?>
            </tbody>
        </table>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->