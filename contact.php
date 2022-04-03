<?php
// connections databace 

if($_SERVER['REQUEST_METHOD'] == 'POST' ){
    $name = $_POST['name'];
    //echo "$name";die();
    $address = $_POST['address'];
    //echo '';

    $conn = mysqli_connect("localhost", "root", "", "crudapp");
if(!$conn)
{
  die ("Soory we failed to connected ". mysqli_connect_error());
}
else
{
  //echo "Connections Sccessfully";
  $sql = "INSERT INTO `contact` ( `name`, `address`, `time`) VALUES ('$name', '$address', CURRENT_TIMESTAMP)";
  //echo "$sql"; die();
  $result = mysqli_query($conn, $sql);
  if($result)
  {
    echo "<div class='alert alert-primary' role='alert'>
    <strong >Success:-  </strong>your Enter has been submited successfully!
    <button type='button' class='close' data-dismiss='alert' aria-label='close'>
      <span aria-hidden='true'>&times;</span>
    </button> 
  </div>";
  }
  else
  {
    echo "data not insert". mysqli_error($conn);
  }
}
}

//
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
    <div class="container">
    <form action="contact.php" method="post">
    
    <h1>Contact Form......!</h1>
  <div class="form-group">
  
    <label for="name">Name:</label>
    <input type="name" class="form-control" id="name" aria-describedby="name" placeholder="Enter Name" name="name" id="name">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="address" class="form-control" id="address" placeholder="Address" name="address" id="address">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  
</form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>