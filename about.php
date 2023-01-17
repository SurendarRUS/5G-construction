
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5G Construction</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="php/style/component.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>

<?php require_once('php/header.php');?>
<?php require_once('php/carousel.php');?>

<div class="row about container-fluid my-3 col-lg-10 col-xl-10 mx-auto">
    <article class="col-xs-11 col-sm-11 col-md-10 col-lg-10 col-xl-10 mx-auto">
        <p class=" h3 mx-auto text-center">About Us</p>
        <p class="mx-auto">5g Constructions is one of the best builders for house construction in Chennai with a Vision of spanning across India, offering building solutions from start to finish. We service all of your construction needs, right from designing to execution, foundation to framing, interior works, and more!</p>
        <p class="mx-auto">We understand that delivering projects is not just about square footage or scale; it’s about being trusted with the responsibility to bring an idea to life. Working back from the needs of our customers and building lasting client relationships is not something we take lightly!</p>
        <div class="exp_nums mt-3 col-10 col-sm-10 col-md-11 col-lg-11 col-xl-11 d-flex align-items-center">
    <div class="expr mx-3 d-flex flex-column justify-content-center ">
        <h2 class="counter mx-auto" id="expr" data-target='4'></h2>
        <p class="h6">Years of Experience</p>
    </div>
    <div class="prjs mx-3 d-flex flex-column justify-content-center ">
        <h2 class="counter mx-auto" id="prjs" data-target='12'></h2>
        <p class="h6">Projects</p>
    </div>
    </div>
    </article>
    
    <form class="col-xl-4 col-md-6 col-12 mt-5">
            <p class="h4 mx-auto">Get in Touch with Us</p>
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-2">
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example1" class="form-control" />
        <label class="form-label" for="form6Example1">Name</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example2" class="form-control" />
        <label class="form-label" for="form6Example2">City</label>
      </div>
    </div>
  </div>


  <!-- Text input -->
  <div class="form-outline mb-2">
    <input type="text" id="form6Example4" class="form-control" />
    <label class="form-label" for="form6Example4">Address</label>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-2">
    <input type="email" id="form6Example5" class="form-control" />
    <label class="form-label" for="form6Example5">Email</label>
  </div>

  <!-- Number input -->
  <div class="form-outline mb-2">
    <input type="number" id="form6Example6" class="form-control" />
    <label class="form-label" for="form6Example6">Phone</label>
  </div>

  <!-- Message input -->
  <div class="form-outline mb-2">
    <textarea class="form-control" id="form6Example7" rows="4"></textarea>
    <label class="form-label" for="form6Example7">Additional information</label>
  </div>



  <!-- Submit button -->
  <button type="submit" class="btn btn-lg btn-warning btn-block mb-4" style="padding: 10px 50px;">Send</button>
</form>
</div>
<?php require_once('php/footer.php');?> 



<script src="index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

