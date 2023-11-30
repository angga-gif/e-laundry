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
  <h3>Form Tambah Data User</h3>
  <hr>
  <br>
        <form action="proses-tambah-user.php" method="POST" >
            <div class="form-group">
              <label>Fullname</label>
              <input type="text" class="form-control" name="fullname" placeholder="Fullname" style="width: 250px" >
            </div>
            <div class="form-group">
              <label>Username</label>
              <input type="text" class="form-control" name="username" placeholder="Username" style="width: 250px" >
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" name="password" placeholder="****" style="width: 250px" >
            </div>
             <div class="form-group">
              <label>Group ID</label>
              <select name="groupid" required="" class="form-control">
                <option>---</option>
                <option value="1">Admin</option>
                <option value="2">Staff</option>
              </select>
            </div>
            <div class="form-group">
              <label>Status User</label>
              <select name="status" required="" class="form-control">
                <option value="1">Aktif</option>
                <option value="0">Tidak Aktif</option>
              </select>
            </div>
           <input type="submit" name="submit" value="Simpan" class="btn btn-success">
            <a href="user.php"><input type="button" class="btn btn-default" value="Batal" ></a>
        </form>
   </div>

</body>
</html>
<?php
}else{
	header("location:login/index.php");
}
