<!Doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>MK CSV Files</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<style>
  #ab{
background-image: url('mytech1.jpg');
background-size:100% 170%;
  }
</style>
<body id="ab">
<div class="container" style="margin-top:40px">
<CENTER>
<h1>MK CSV Files Processing</h1><br>
</CENTER>
  <div class="row">
    <!--- this form is for the Import data--->
    <form action="import_data.php" method="POST" enctype="multipart/form-data" style="margin-left: 200px;">
      <div class="form-group">
        <br>
        <br>
        <br>
        <br>
        

        <label style="color:#116466"><h2>SELECT FILE:</h2></label>
        <input type="file" name="file" class="form-control" required="">  
      </div>
      <center>
      <div class="form-group">
        <input type="submit" name="import" class="btn btn-primary" value="Upload">  
      </div>
</center>
    </form>  
    
    <!--- This form is for the Export data--->
    <form action="export_data.php" method="POST" style="margin-left:100px; margin-right:450px; margin-bottom: 100px;">
    <br>
    <br>
      <input type="submit" class="btn btn-success" name="export" value="Export to Excel">
    </form>
    <form action="sa.php" method="POST" style="margin-left:10px;margin-right: 10px;">
    <br>
    <br>
      <input type="submit" class="btn btn-success" name="view" value="view">
    </form>
</body>
</html>