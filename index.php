<!DOCTYPE html>

<html>



<head>
	
	
	  <link rel="stylesheet" type="text/css" href="./css/style.css">
	 <link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap.3.4.0.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"> </script>

	
	</head>


	<body>

	<div class= "wrapper">

	<div class="header">

		<div>
			<center>
			<img src="./images/logopng.png" alt="logo" style="width:400px;height:100px;">
		</center>

		</div>




	</div>


			<div class="links">
				
			<center>
				<div>
					<br>
				 <br>
					<img src="./images/user.png" alt="ads" style="width:100px;height:100px;">
					</div>
				<button type="button"  class=" btn btn-primary btnHome" id="btnHome"  onclick="scrollToHome()" style="width:130px;">Home </button>
				 <br>
				 <br>
				<button type="button"  class=" btn btn-primary btnProfile" id="btnloan"  onclick="scrollToLoan()" style="width:130px;">Add Loan</button>
				<br>
				<br>
			
				<button type="button"  class=" btn btn-primary btnContact" id="btnContact"   style="width:130px;">Payment History</button>

				
			
			</center>
	</div>

			<div class="search">

				&nbsp;
				<br>
				<center>
				<form >
					<input type="number" name="search" class="inputsearch">
					<button type="Submit"  class=" btn btn-primary btnSearch" id="btnHome" style="width:100px;">Search</button>

				</form> 
				</center>
				</div>




			<div class="content">

			<div class="table">

				FETCH DATA FROM MYSQL  AND DISPLAY IN TABLE
			</div>

				&nbsp;
			<div class ="loan">
				 &nbsp; 
				
				<form>

					First Name:

					<input type="text" name="fname" placeholder="First Name"><br><br>
					Last Name:
					<input type="text" name="lname" placeholder="Last Name"><br><br>
					Address <br>
					<input type="text" name="address" placeholder="Address"><br><br>
					Loan Interest
					<input type="text" name="interest"  value="10%" disabled><br><br>

					Term of Payment(per year)<br><br>
					 <select name="Course" class="payment"><br><br>
					    <option value>Term of Payment</option>
					    <option value=1>1</option>
					    <option value=2>2</option>
					    <option value=3>3</option>
					    <option value=4>4</option>
					    <option value=5>5</option>
					    <option value=6>6</option>
					    <option value=7>7</option>
					    <option value=8>8</option>
					    <option value=9>9</option>
					    <option value=10>10</option>
					  </select> <br><br>

					  Total Paid(With Interest)
					  <input type="text" name="total" disabled><br><br>

					   Monthly Pay(With Interest)
					  <input type="text" name="monthly" disabled><br><br>

					  Due Date <br><br>
					  <input type="date" name="duedate" class="date" ><br><br>

					  <button type="button"  class=" btn btn-primary btnAdd" id="btnHome" style="width:130px;">Add Transaction </button>

				</form>
				
			</div>

		</div>

		<script>

	
	function scrollToHome () {
		$('html,body').animate({
			scrollTop: $(".search").offset().top
			
		},1000);
		
		
	}
	function scrollToLoan () {
		$('html,body').animate({
			scrollTop: $(".loan").offset().top
			
		},1000);
		
		
	}
	</script>


</html>