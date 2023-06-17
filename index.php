<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CMS tool</title>
  </head>
  <style>
	h1{
	  margin-bottom:15px;
  }
  .con{
	  background-color:ghostwhite;
	  width:70%;
	  align-items:center;
	  margin-left:15%;
	  border:1px solid grey;
	  border-radius: 8px;
	  padding-left: 15px;
      padding-right: 15px;
	  padding-top: 10px;
      padding-bottom: 20px;
         
  }
	.form{
		align-items:center;
		padding-left:35%;
		
    }
    .form-control{
        width: 50%;
    }
	h1{
		margin-top:20px;
		text-align:center;
	}
	.btn{
		width:50%;
		margin-top:20px;
		font-size:23px;
	}
	.table{
		margin-left:25%;
		width:50%;
		margin-top:25px;
	}
	th{
		font-size:23px;
		font-family: sans-serif;
	}
	td{
		font-size:23px;
		font-family: sans-serif;
	}
    </style>
  <body>
    <h1>Content Management tool</h1>
<div class="con">
<fieldset>
	<form  class="form" action="" method="GET">
	<legend>
	  <div class="row mb-2 mt-1">
		<label for="inputEmail4" class="form-label">Title</label>
		<input class="form-control" type="text" name="name" id="name">
	  </div>
 
	  <div class="row mb-3">
		<label for="inputAddress" class="form-label">Content</label>
		<textarea class="form-control" type="textarea" name="cnt" id="cnt"  placeholder="Content here..."></textarea>
	  </div>
	  <div class="row mb-3">
		<label for="inputCity" class="form-label">Image</label>
		<input class="form-control" type="file" id="img" name="img" alt="Image">
	  </div>
	  <div class="row mb-3">
		<label for="inputCity" class="form-label">Video</label>
		<input class="form-control" type="file" id="video" name="video" alt="video">
	  </div>
	  <div id="d1"></div>
	  <div class="col-12">
		<button type="submit" name="submit" class="btn btn-primary">Upload</button>
	  </div>
	  </legend>
	</form>
	</fieldset>
</div>
<?php
if(isset($_GET['submit'])){
	$name=$_GET['name'];
	$content=$_GET['cnt'];
	$image=$_GET['img'];
	$video=$_GET['video'];
}
?>

<table class="table table-bordered">
<tr><th colspan="2" style="text-align:center;background-color:ghostwhite;">My Blog</th></tr>
<tr><th>Title</th><td><?php echo $name; ?></td></tr>
<tr><th>Content</th><td><?php echo $content; ?></td></tr>
<?php echo "<tr><th>Image</th><td><img src='./${image}' height='200' width='250'></td></tr>
<tr><th>Video</th><td><video alt='video' height='200' width='250' controls='controls'>
<source src='./${video}' type='video/mp4'></video></td></tr>"; ?>
</table>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS --onchange="call()">
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>-->
	</body>
</html>