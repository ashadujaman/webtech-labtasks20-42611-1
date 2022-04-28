<?php

require_once 'product101.php';                



                $_SESSION['uname'];
                 
                $_SESSION['uemail'];
        
                 $_SESSION['uadd'];
      
                $_SESSION['upn'];
                     
              $_SESSION['upname']; 

 


?>

<!DOCTYPE html>  
 <html>  
 <head>  

 	<script>
function validateForm() {
  let n = document.forms["order"]["fname"].value;
  if (n == "") {
    alert("Email must be filled out");
    return false;
  }
}

function validateForm1() {
  let m = document.forms["or"]["email"].value;
  if (m == "") {
    alert("Password must be filled out");
    return false;
  }
}
function validateForm2() {
  let a = document.forms["or"]["add"].value;
  if (a == "") {
    alert("Password must be filled out");
    return false;
  }
}
function validateForm3() {
  let b = document.forms["or"]["PN"].value;
  if (b == "") {
    alert("Password must be filled out");
    return false;
  }
}
function validateForm4() {
  let c = document.forms["or"]["pname"].value;
  if (c == "") {
    alert("Password must be filled out");
    return false;
  }
}
function validateForm5() {
  let y = document.forms["or"]["size"].value;
  if (y == "") {
    alert("Password must be filled out");
    return false;
  }
}
function validateForm6() {
  let d = document.forms["or"]["piece"].value;
  if (d == "") {
    alert("Password must be filled out");
    return false;
  }
}


</script>

       
     </head>  
      <body class="bg-warning col-lg-11.5 m-4">  
 
           
            

        <form name="or" action="controller/ord.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm(),validateForm1(),validateForm2(),validateForm3(),validateForm4(),validateForm5(),validateForm6()">
               

                     <label>Name</label>  
                     <input  value="<?php echo$_SESSION['uname']?>" type= "text" name="fname" class="form-control"  /><br />           


                     <label>E-mail</label>
                     <input value="<?php echo$_SESSION['uemail']?>" type="text" name = "email" class="form-control"  /><br />


                     <label>Address</label>
                     <input  value="<?php echo$_SESSION['uadd']?>"type="text" name = "add" class="form-control"  /><br />


                     <label>Phone Number</label>
                     <input value="<?php echo$_SESSION['upn']?>" type="Number" name = "PN" class="form-control"/><br />



                     <label>Product Name</label>
                     <input value="<?php echo$_SESSION['upname']?>" type="text" name = "pname" class="form-control"  /><br />

                     
                   
                      <legend>Size</legend>
                       <input value="S" type="radio" id="S" name="size" >
                     <label for="S">S</label>
                    <input value="M" type="radio" id="M" name="size" >
                     <label  for="M">M</label>                     
                     <input value="XL" type="radio" id="XL" name="size" >
                     <label for="XL">XL</label>
                    <br>
                        </fieldset>

                     <label>Piece</label>
                     <input type="Number" name = "piece" class="form-control" /><br />


                  <input type="submit" name="order" value="submit" class="btn btn-info" /><br />   


                </form>  
           </div>  
           <br /> 


      </body>  
 </html>  

<?php
include"footer.php";
?>