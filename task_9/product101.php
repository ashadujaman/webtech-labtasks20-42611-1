
  <?php
                       session_start();
                         $_SESSION['upname']="Black T-shirt";

                         ?>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



</head>

    <body class="col-lg-11.5">

<nav class="navbar navbar-expand-sm bg-success navbar-dark">

<h1>Daily Outfit Attire</h1> 
<div  style="text-align:right;">
<ul class="navbar-nav ml-auto ">
     <h3> .... </h3>
    <h3 class="nav-item active"><a class="nav-link"href="MainHome.php">Home</a></h3>
     <h3> .... </h3>
    <h3 class="nav-item"><a class="nav-link" href="UserProfile.php">Profile</a></h3>

</ul>
</div>
</nav>



<section class="container">
        <div class="row row-cols-1 row-cols-md-2 ">
            <div class="col-lg-4 mr-1 ">
                <a href="Product.php">
        <img class="img-fluid w-80"id="101" src="image/black.png"/> </a>
            </div>



                <div class="col-lg-4 m-4 ">
                <h3>Semi Fit T-shirt</h3> <p>4210105108026 _238#2</p>
                 <h5 >৳90000</h5>
                 <p class="text-muted">Color: block</p>

                 <h6>In stock</h6>


                 <form name="submit" action="controller/pd.php" method="POST" enctype="multipart/form-data">
                      <legend>Size availabel</legend>
                   
                     <label for="S">S</label>
                   
                     <label for="M">M</label>                     
                  
                     <label for="XL">XL</label>
                    <br>
                        </fieldset>
                     

                        <input type="submit" name="Buy"  value="Buy" class="btn btn-info" /><br />                      
                   

                 </form>

                </div>
        

</div>
</section>





</body>
</html>

