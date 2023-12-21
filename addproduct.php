
<!DOCTYPE html>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Gaming Accesssories </title>
        <link rel="stylesheet" href="css/addproduct.css">
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="container">
            <div class="upload">
            
        <center><form action="upload.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
            <label class="control-label col-sm-4">Description:</label>
        <div class="col-sm-8">
                <input type="text" name="MDesc" class="form-control" placeholder="Enter Description name here..." required>
            <label class="control-label" col-sm-4>Price:</label>
                <input type="number" name="MPrice"  class="form-control" placeholder="Enter price Here.." required>
                <label class="control-label col-sm-4">Merchandise Image:</label>
                <input type="file" name="file" accept="image/*">
            <button type="submit" name="submit" class="button">UPLOAD</button>
            <a href="admin.php">CANCEL</a>

        </form>
    </div>
    </div>
</center>

    </body>



</html>