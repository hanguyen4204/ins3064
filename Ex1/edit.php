<?php
include "connection.php";
$id=$_GET["id"];
$Brand="";
$Model="";
$Price="";
$Quantity="";

$res=mysqli_query($link,"select * from table2 where id=$id");
while ($row=mysqli_fetch_array($res))
{
    $Brand=$row["Brand"];
    $Model=$row["Model"];
    $Price=$row["Price"];
    $Quantity=$row["Quantity"];

}
header("location.index.php");
?>

<html lang="en" xmlns="">
<head>
    <title>laptop infomation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <!-- short column display for forms rows -->
    <!--visit https://www.w3schools.com/bootstrap/bootstrap_forms.asp search for forms template and use it.-->
    <div class="col-lg-4">
        <h2>Laptop data form</h2>
        <form action="" name="form1" method="post">
            <div class="form-group">
                <label for="Brand">Brand:</label>
                <input type="text" class="form-control" id="Brand" placeholder="Enter Brand name" name="Brand" value="<?php echo $Brand; ?>">
            </div>
            <div class="form-group">
                <label for="Model">Model:</label>
                <input type="text" class="form-control" id="Model" placeholder="Enter Model" name="Model" value="<?php echo $Model; ?>">
            </div>
            <div class="form-group">
                <label for="Price">Price:</label>
                <input type="text" class="form-control" id="Price" placeholder="Enter Price" name="Price" value="<?php echo $Price; ?>">
            </div>
            <div class="form-group">
                <label for="Quantity">Quantity:</label>
                <input type="text" class="form-control" id="Quantity" placeholder="Enter Quantity" name="Quantity" value="<?php echo $Quantity; ?>">
            </div>
            <button type="submit" name="update" class="btn btn-default">Update</button>

        </form>
    </div>
</div>

</body>

<?php
if(isset($_POST["update"]))
    {
        mysqli_query($link,"update table2 set Brand='$_POST[Brand]',Model='$_POST[Model]',Price='$_POST[Price]',Quantity='$_POST[Quantity]' where id=$id");

        ?>
        <script type="text/javascript">
            window.location="index.php";
        </script>
        <?php
    }
?>

</html>