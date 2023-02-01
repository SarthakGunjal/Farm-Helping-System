<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content=
		"width=device-width, initial-scale=1.0">
	<title>
		Survey Form
	</title>

	<style>

		/* Styling the Body element i.e. Color,
		Font, Alignment */
		body {
			background-color: #05c46b;
			font-family: Verdana;
			text-align: center;
		}

		/* Styling the Form (Color, Padding, Shadow) */
		form {
			background-color: #fff;
			max-width: 500px;
			margin: 50px auto;
			padding: 30px 20px;
			box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
		}

		/* Styling form-control Class */
		.form-control {
			text-align: left;
			margin-bottom: 25px;
		}

		/* Styling form-control Label */
		.form-control label {
			display: block;
			margin-bottom: 10px;
		}

		/* Styling form-control input,
		select, textarea */
		.form-control input,
		.form-control select,
		.form-control textarea {
			border: 1px solid #777;
			border-radius: 2px;
			font-family: inherit;
			padding: 10px;
			display: block;
			width: 95%;
		}

		/* Styling form-control Radio
		button and Checkbox */
		.form-control input[type="radio"],
		.form-control input[type="checkbox"] {
			display: inline-block;
			width: auto;
		}

		/* Styling Button */
		button {
			background-color: #05c46b;
			border: 1px solid #777;
			border-radius: 2px;
			font-family: inherit;
			font-size: 21px;
			display: block;
			width: 100%;
			margin-top: 50px;
			margin-bottom: 20px;
		}
	</style>
</head>

<body>
   

	<h1>Enter Your Crop Details </h1>

	<!-- Create Form -->
	<form id="form" method="post" action="enterdata.php">

         <div class="form-control">
			<label for="name" id="label-name" >
				Enter Farmers ID
			</label>

			<!-- Input Type Text -->
			<input type="text"
				name="ID" id="ID" 

				placeholder="Enter ID" required />
		</div>

		<!-- Details -->
		<div class="form-control">
			<label for="name" id="label-name">
				 Crop Name
			</label>

			<!-- Input Type Text -->
			<input type="text"
				name="Name" id="Name" 

				placeholder="Enter crop name" required/>
		</div>

        <div class="form-control">
			<label for="name" id="label-name">
				 Total land required for that crop in Acres

			</label>

			<!-- Input Type Text -->
			<input type="text"
				name="land" id="land" 

				placeholder="Enter Agricultural land " required/>
		</div>

         <div class="form-control">
			<label for="name" id="label-name">
				 Months taken for growing
			</label>

			<!-- Input Type Text -->
			<input type="text"
				name="month" id="month" 
				placeholder="Enter Months required"required />
		</div>

         <div class="form-control">
			<label for="name" id="label-name">
				 Total Money Spent
			</label>

			<!-- Input Type Text -->
			<input type="text"
				name="money" id="money" 
				placeholder="Total money spent " required/>
		</div>

        <div class="form-control">
           <label for="name" id="label-name">
                Total income from crop
           </label>

           <!-- Input Type Text -->
           <input type="text"
               name="income" id="income" 
               placeholder="Total income" required/>
       </div>

         <div class="form-control">
			<label for="name" id="label-name">
				 Total profit from crop
			</label>

			<!-- Input Type Text -->
			<input type="text"
				name="profit" id="profit" 
				placeholder="Total Profit" required/>
		</div>


         <div class="form-control">
			<label for="name" id="label-name">
				Name of Fertilizers Used
			</label>

			<!-- Input Type Text -->
			<input type="text"
				name="fertilizer" id="fertilizer" 
				placeholder="Enter Fertilizers :" required/>
		</div>

        <!-- <div class="form-control">
			<label>
				Is your crop has taken organically?
			</label>

			
			<label for="recommed-1">
				<input type="radio"
					id="recommed-1"
					name="recommed">Yes</input>
			</label>
			<label for="recommed-2">
				<input type="radio"
					id="recommed-2"
					name="recommed">No</input>
			</label>
			
		</div>
         -->

          <div class="form-control">
			<label for="name" id="label-name">
				Has your crop been grown organically?
			</label>

			<!-- Input Type Text -->
			<input type="text"
				 name="organic" id="organic" 
				placeholder="Yes or No:" />
		</div>


	   <div class="form-control">
			<label for="name" id="label-name">
				Any Other Information
			</label>

			<!-- Input Type Text -->
			<input type="text"
				 name="information" id="information" 
				placeholder="Enter your comment here"required />
		</div>
        
		
		

		<!-- Multi-line Text Input Control -->
		<button type="submit" value="submit">
			Submit
		</button>
	</form>
</body>

</html>
