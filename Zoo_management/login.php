<!DOCTYPE html>
<html lang="en">

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<head>
    <title>User login and Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<body>

    <div class="container">
        <div class="login-box">
            <div class="row">
               <div class="col-md-6 login-left">
                   <h2>Login Here</h2>
                   <form action="validation.php" method="post">
                   <div class="form-group">
                       <label>Username</label>
                       <label>
                           <input type="text" name="user" class="form-control" required>
                       </label>
                   </div>
                   <div class="form-group">
                       <label>Password</label>
                       <label>
                           <input type="password" name="password" class="form-control" required>
                       </label>
                   </div>
                   <button type="submit" class="btn btn-primary">Login</button>
                   </form>
               </div>
                <div class="col-md-6 login-right">
                    <h2>animal detail</h2>
                    <form action="registration.php" method="post">
                        <div class="animal-card-info">
        <label>Name:</label>
        <span><?php echo $animal['ten']; ?></span>
    </div>
    
    <div class="animal-card-info">
        <label>Species:</label>
        <span><?php echo $animal['loai']; ?></span>
    </div>
    
    <div class="animal-card-info">
        <label>Area:</label>
        <span><?php echo $animal['khu_vuc']; ?></span>
    </div>
    
    <div class="animal-card-info">
        <label>Date of birth:</label>
        <span><?php echo $animal['ngay_sinh']; ?></span>
    </div>
    
    <div class="animal-card-info">
        <label>Sex:</label>
        <span><?php echo $animal['gioi_tinh']; ?></span>
    </div>
    
    <div class="animal-card-info">
        <label>Health condition:</label>
        <span><?php echo $animal['suc_khoe']; ?></span>
    </div>


                    </form>

                </div>

            </div>


        </div>


    </div>


</body>

</html>
