<?php 
include '../../koneksi.php';

if(isset($_POST['simpan'])) {
    $id_user     = $_POST['id_user'];
    $Username   = $_POST['Username'];
    $Email  = $_POST['Email'];
    $password  = $_POST['Password'];

    $sql = "INSERT INTO tb_user VALUES(NULL,'$Username', '$Email', '$password')";

    if(empty($Username) || empty($Email) || empty($password)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'create.php';
            </script>
        ";
    }elseif(mysqli_query($koneksi, $sql)) {
        echo "  
            <script>
                alert('Data Berhasil Ditambahkan');
                window.location = 'index.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'create.php';
            </script>
        ";
    }
}else if(isset($_POST['edit'])) {
    $id_user     = $_POST['id_user'];
    $Username   = $_POST['Username'];
    $Email  = $_POST['Email'];
    $password  = $_POST['Password'];

    $sql = "UPDATE tb_user SET 
            Username = '$Username', 
            Email = '$Email', 
            Password = '$password'
            WHERE id_user = $id_user";
    // $hee = trigger_error(mysqli_query($koneksi, $sql),E_USER_ERROR);
    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Berhasil Diubah');
                window.location = 'index.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'edit.php';
            </script>
        ";
    }
}elseif(isset($_POST['hapus'])) {
    $id_user = $_POST['id_user'];

    $sql = "DELETE FROM tb_user WHERE id_user = $id_user";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Berhasil Dihapus');
                window.location = 'index.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Data Gagal Dihapus');
                window.location = 'index.php';
            </script>
        ";
    }
}else {
    header('location: index.php');
}

?>
