
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Users</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div class=" text-center">

<form action="../controller/con_editusers.php" method="POST">

</div>
   <body><div class="card mx-auto" style="max-width: 450px; margin-top:100px;">
<div class="card-body">

<h1 align = 'center'>Edit  User</h1>
<input type="hidden" value="<?php echo $user["id"];?>" name="id">
<div class="mb-3">
        <label for="firstname" class="form-label">First name</label>
        <input type="text" class="form-control" name="firstname" aria-describedby="firstname">
    </div>
    <div class="mb-3">
        <label for="lastname" class="form-label">Last name</label>
        <input type="text" class="form-control" name="lastname" aria-describedby="lastname">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" aria-describedby="email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
    </div>
    

     <center><div class="container-sm">
       <button type="submit" name="btn_register" value="บันทึกข้อมูล"class="btn btn-success">Save User</button>
      <a href="../view/Users.php" type="reset" value="ล้างข้อมูล" class="btn btn-danger ">Back To Home</a>

    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>