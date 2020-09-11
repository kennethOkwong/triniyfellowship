

<?php include 'header.php';?>
<!-- Landing image -->
      <div  id = "home" class="container">
      	<div id = "vcenter" class = "row align-items-center">
      <div class = "landing-text">
    
      	<center><h4 style = "color: blue;">Trinity Missionary Fellowship</h4>
        Carries the torch of the Good News of Jesus Christ to the world, keeping alive the flame of love and hope in the resurrected Lord Jesus Christ, and in the saving Power of His Love.</center>
    </div>
     </div>
     </div>

        <!-- Cards -->
<div class="container">
 <div class="row">
 	<div class = "col-md-6">
    	<div class="mycards container card">
    		<div class = "row">
    			<div id = "card1image"class="col-4">
    		
    			</div>
    			<div class="col-8">
    				<center><h6 class="card-title">Teaching and Healing Ministry</h6></center>
      				<div class="card-body">
        			<center><p class="card-text">                                                                    </p></center>
        			<center><a href="#" class="btn btn-primary">See gallery</a></center>
        			</div>
       	 		</div>
      		</div>
    	</div>
  	</div>

<div class = "col-md-6">
    	<div class="mycards container card">
    		<div class = "row">
    			<div id = "card1image"class="col-4">
    		
    			</div>
    			<div class="col-8">
    				<center><h6 class="card-title">Teaching and Healing Ministry</h6></center>
      				<div class="card-body">
        			<center><p class="card-text">                                                                    </p></center>
        			<center><a href="#" class="btn btn-primary">See gallery</a></center>
        			</div>
       	 		</div>
      		</div>
    	</div>
  	</div>
  	 </div>
 </div>
</div>


<div class="container">
 <div class="row">
 	<div class = "col-md-6">
    	<div class="mycards container card">
    		<div class = "row">
    			<div id = "card1image"class="col-4">
    		
    			</div>
    			<div class="col-8">
    				<center><h6 class="card-title">Teaching and Healing Ministry</h6></center>
      				<div class="card-body">
        			<center><p class="card-text">                                                                    </p></center>
        			<center><a href="#" class="btn btn-primary">See gallery</a></center>
        			</div>
       	 		</div>
      		</div>
    	</div>
  	</div>

<div class = "col-md-6">
    	<div class="mycards container card">
    		<div class = "row">
    			<div id = "card1image"class="col-4">
    		
    			</div>
    			<div class="col-8">
    				<center><h6 class="card-title">Teaching and Healing Ministry</h6></center>
      				<div class="card-body">
        			<center><p class="card-text">                                                                    </p></center>
        			<center><a href="#" class="btn btn-primary">See gallery</a></center>
        			</div>
       	 		</div>
      		</div>
    	</div>
  	</div>
  	 </div>
 </div>
</div>

  
<!-- Subscription form -->
<div class="container">
<form id="subscribe" method="post" action="subscribe.php">
  <h5>Sign up for our emailing list</h5>
  <div class = "form-row">
  <div class="form-group col-md-6">
      <label>First Name</label>
      <input type="text" class="form-control" name = "firstname" id="inputName" placeholder="First Name">
   </div>
<?php if (isset($_SESSION['flash_errors']['firstname'])) {
    echo '<span style="color:red">' . $_SESSION['flash_errors']['firstname'] . '</span><br>';
}?>

 <div class="form-group col-md-6">
      <label>Email</label>
      <input type="text" class="form-control" name = "email" id="inputName" placeholder="Email">
 </div>
<?php if (isset($_SESSION['flash_errors']['email'])) {
    echo '<span style="color:red">' . $_SESSION['flash_errors']['email'] . '</span><br>';
}?>
</div>

 <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label style = "color: gray;"class="form-check-label" for="gridCheck">
       By submiting your credentials, you agree to receive weekly content from Trinity Missionary Fellowship
      </label>
    </div>
  </div>
<center>
<button type="submit" ckecked class="btn btn-primary">Sign Up</button>
</center>
</form>
</div>
 
<?php include 'footer.php';?>