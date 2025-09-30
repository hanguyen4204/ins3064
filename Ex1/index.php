<?php
include "connection.php";
?>

<html lang="en" xmlns="">
<head>
    <title>Laptop information</title>
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
            <input type="text" class="form-control" id="Brand" placeholder="Enter Brand" name="Brand">
        </div>
        <div class="form-group">
            <label for="Model">Model:</label>
            <input type="text" class="form-control" id="Model" placeholder="Enter Model" name="Model">
        </div>
        <div class="form-group">
            <label for="Price">Price:</label>
            <input type="text" class="form-control" id="Price" placeholder="Enter Price" name="Price">
        </div>
        <div class="form-group">
            <label for="Quantity">Quantity:</label>
            <input type="text" class="form-control" id="Quantity" placeholder="Enter Quantity" name="Quantity">
        </div>
        <button type="submit" name="insert" class="btn btn-default">Insert</button>
        <button type="submit" name="update" class="btn btn-default">Update</button>
        <button type="submit" name="delete" class="btn btn-default">Delete</button>

    </form>
</div>
</div>

<!-- new column inserted for records -->
<!-- Search for boostrap table template online and copy code -->
<div class="col-lg-12">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <!-- Database connection -->
        <?php
        if (!empty($link)) {
            $res=mysqli_query($link,"select * from table2");
        }
        while($row=mysqli_fetch_array($res))
        {
            echo "<tr>";
            echo "<td>"; echo $row["id"]; echo "</td>";
            echo "<td>"; echo $row["Brand"]; echo "</td>";
            echo "<td>"; echo $row["Model"]; echo "</td>";
            echo "<td>"; echo $row["Price"]; echo "</td>";
            echo "<td>"; echo $row["Quantity"]; echo "</td>";
            echo "<td>"; ?> <a href="edit.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-success">Edit </button></a> <?php echo "</td>";
            echo "<td>"; ?> <a href="delete.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-danger">Delete </button></a> <?php echo "</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>
</body>

<!-- new records insertion into database table -->
<!-- records delete from database table -->
<!-- records update from database table -->

<!-- to automatically refresh the pages after crud activity   window.location.href=window.location.href; -->
<?php
if(isset($_POST["insert"]))
{
    mysqli_query($link,"insert into table2 values (NULL,'$_POST[Brand]' ,'$_POST[Model]','$_POST[Price]','$_POST[Quantity]')");
   ?>
    <script type="text/javascript">
    window.location.href=window.location.href;
    </script>
    <?php

}

if(isset($_POST["delete"]))
{
    mysqli_query($link,"delete from table2 where Brand='$_POST[Brand]'");
    ?>
    <script type="text/javascript">
        window.location.href=window.location.href;
    </script>
    <?php
}

if(isset($_POST["update"]))
{
    mysqli_query($link,"update table2 set Brand='$_POST[Model]'where Brand='$_POST[Brand]'");
    ?>
    <script type="text/javascript">
        window.location.href=window.location.href;
    </script>
    <?php
}
?>
</html>