<?php
include_once "../controller/con_users.php";
?>
<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>จัดการบัญชีผู้ใช้</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<div class="container mt-4">
</head>
    <style>
    table {
        width: 100%;
        text-align: center;
        border-spacing: 0;
    }
    
     table tr td {
    
        border: solid 1px silver;
    }
</style>

      <div class ="container">
      <div class="bg-light p-5 rounded">
      <h1 class="mt-5">จัดการบัญชีผู้ใช้</h1>
      <div class="mt-4">
                <a href="Addusers.php" class="btn btn-success">เพิ่มบัญชีผู้ใช้</a> 
      </div>
      <div class="mt-5">
        
    
                        <div class="row justify-content-end">
                      
                            <form class="form-inline"  method="get" action="search.php">
                              <div class="form-group">
                               <input type="text" id="search" name="search" placeholder="พิมพ์ชื่อที่ต้องการค้นหา" value="" class="form-control">
                              </div>
                             
                              <button type="submit" class="btn btn-primary">ค้นหา</button>
                            </form>
                        </div>
                    </div>
      <div class="mt-5">
      <hr>
      <table class="table table-striped table-hover">
     <thead>
    <tr>
       <td width="5%">ลำดับ</td>
                    <td width="15%">ชื่อ</td>
                    <td width="15%">นามสกุล</td>
                    <td width="25%">Email</td>
                    <td width="5%">สิทธิ์</td> 
                    <td width="20%">เวลาใช้งาน</td>
                    <td width="15%">การจัดการ</td>
    </tr>  
    </thead>
<tbody>
<?php 
foreach ($user1 as $user1){
?>
    <tr>
    <td><?php echo $user1['id'];?></td>
        <td><?php echo $user1['firstname'];?></td>
        <td><?php echo $user1['lastname'];?></td>
        <td><?php echo $user1['email'];?></td>       
        <td><?php echo $user1['urole'];?></td>
        <td><?php echo $user1['create_at'];?></td>
        <td><a href="Editusers.php?id= <?php echo $user1['id']; ?>" class="btn btn-warning">Edit</a></td></td>
    </tr>
    <?php }?>
</tbody>
</table>



</div>
</body>

</html>