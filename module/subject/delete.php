<?php
if (isset($_GET['id'])) {
    include_once('config.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM subjects WHERE id = '$id'";
    $result = mysqli_query($config, $sql);
    if ($result) {
        echo '<script>window.location.href="?m=subject&s=view"</script>';
    } else {
        echo '<script>alert("Data gagal dihapus!"); window.location.href="?m=subject&s=view"</script>';
    }
}