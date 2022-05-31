<?php
if (isset($_GET['id'])) {
    include_once('config.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM teachers WHERE id = '$id'";
    $sql2 = "SELECT photo FROM teachers WHERE id = '$id'";
    $result2 = mysqli_query($config, $sql2);
    $r2 = mysqli_fetch_assoc($result2);
    if ($r2['photo'] != "") {
        unlink('assets/imgs/teachers/' . $r2['photo']); 
        unlink('assets/imgs/teachers/small_' . $r2['photo']);
    }
    $result = mysqli_query($config, $sql);
    if ($result) {
        echo '<script>window.location.href="?m=teacher&s=view"</script>';
    } else {
        echo '<script>alert("Data gagal dihapus!"); window.location.href="?m=teacher&s=view"</script>';
    }
}