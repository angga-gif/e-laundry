<?php
session_start();
if(isset($_SESSION['id'])){
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laundry</title>

    <?php
      include "include/header.php";
    ?>


  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
      <a class="navbar-brand" href="#">Laundry</a>
    </div>
    <ul class="nav navbar-nav">
      <?php
        include "include/list.php"
      ?>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <h3>Form Edit Data Pelanggan</h3>
  <hr>
  <br>
  <?php
    include "./include/koneksi.php";
    $id = $_GET['edit'];

    $sql = mysqli_query($conn, "SELECT * FROM tbl_user WHERE id='".$id."'");
    while ($hasil = mysqli_fetch_array($sql)) {
 ?>
        <form action="proses-edit-user.php" method="POST" >
            <div class="form-group">
              <label>Fullname</label>
              <input type="text" class="form-control" name="fullname" placeholder="Fullname" value="<?php echo $hasil['fullname']; ?>" style="width: 250px" >
              <input type="hidden" class="form-control" name="id" placeholder="Fullname" value="<?php echo $hasil['id']; ?>" style="width: 250px" >
            </div>
            <div class="form-group">
              <label>Username</label>
              <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $hasil['username']; ?>" style="width: 250px" >
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="text" class="form-control" name="password" placeholder="****" value="<?php echo $hasil['password']; ?>" style="width: 250px" >
            </div>
             <div class="form-group">
              <label>Group ID</label>
              <select name="groupid" required=""  class="form-control">
                <option>---</option>
                <option value="1" <?php if($hasil['groupid'] == 1){echo "selected";} ?>   >Admin</option>
                <option value="2" <?php if($hasil['groupid'] == 2){echo "selected";} ?>   >Staff</option>
              </select>
            </div>
            <div class="form-group">
              <label>Status User</label>
              <select name="status" required="" class="form-control">
                <option value="1" <?php if($hasil['status'] == 1){echo "selected";} ?> >Aktif</option>
                <option value="0" <?php if($hasil['status'] == 0){echo "selected";} ?> >Tidak Aktif</option>
              </select>
            </div>
              <input type="submit" name="submit" value="Simpan" class="btn btn-success">
              <a href="user.php"><input type="button" class="btn btn-default" value="Batal" ></a>
              </form>
            <?php
          } ?>
</div>

</body>
</html>
<?php
}else{
	header("location:login/index.php");
}
