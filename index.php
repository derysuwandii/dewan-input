<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="icon" href="dk.png">
	<title>Dewan Bootstrap - Input Text</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-dark bg-danger fixed-top">
	  <a class="navbar-brand" href="index.php" style="color: #fff;">
	    Dewan Komputer
	  </a>
	</nav>

	<div class="container mb-3">
		<h2 align="center" style="margin: 60px 10px 10px 10px;">Demo Form Bootstrap</h2><hr>
		<div class="bg-dark">
			<h3 align="center" class="text-white">Input Text</h3>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<h4 align="center" class="text-primary">Standar</h4>
				<div class="form-group">
				  <input type="text" name="normal_input" id="normal_input" class="form-control" placeholder="Normal Input Text">
				</div>
				<div class="form-group">
				  <input type="text" name="readonly_input" id="readonly_input" class="form-control" placeholder="Readonly Input Text" readonly>
				</div>
				<div class="form-group">
				  <input type="text" class="form-control" name="disabled_input" id="disabled_input" placeholder="Disabled Input Text" disabled>
				</div>
				<div class="form-group">
					<input type="text" name="plaintext_input" readonly class="form-control-plaintext" id="plaintext_input" value="Input Plain Text">
				</div>
				<div class="form-group">
				  <input type="password" placeholder="Password" class="form-control" id="password">
				</div>

				<div class="form-group">
				  <input type="date" class="form-control">
				</div>

				<div class="form-group">
				 <input type="number" max="10000" step="0.0000000001" min="0.0000000001" value="0.0000000001" class="form-control">
				</div>

				<div class="form-group">
				  <input type="email" placeholder="Email" class="form-control">
				</div>

				<div class="form-group">
				  <input type="time" class="form-control">
				</div>

				<div class="form-group">
				  <input type="url" placeholder="Input type Url" class="form-control">
				</div>

				<div class="form-group">
				  <label for="textarea">Color:</label>
				  <input type="color">
				</div>

				<div class="form-group">
					<label>Range</label>
			      <input type="range" class="form-control-range" name="range">
			    </div>

			    <div class="form-group">
				  <label for="textarea">Textarea:</label>
				  <textarea class="form-control" rows="3" id="textarea"></textarea>
				</div>
			</div>

			<div class="col-sm-6">
				<h4 align="center" class="text-success">Input Group &amp; Button</h4>
				<div class="input-group mb-3">
			      <div class="input-group-prepend">
			        <span class="input-group-text">@</span>
			      </div>
			      <input type="text" class="form-control" placeholder="Username" id="usr" name="username">
			    </div>

			    <div class="input-group mb-3">
			      <input type="text" class="form-control" placeholder="Your Email" id="mail" name="email">
			      <div class="input-group-append">
			        <span class="input-group-text">@example.com</span>
			      </div>
			    </div>

			    <div class="input-group mb-3">
				    <div class="input-group-prepend">
				      <button class="btn btn-outline-primary" type="button">Basic Button</button>  
				    </div>
				    <input type="text" class="form-control" placeholder="Some text">
				</div>

				<div class="input-group mb-3">
				    <input type="text" class="form-control" placeholder="Search">
				    <div class="input-group-append">
				      <button class="btn btn-success" type="submit">Go</button>  
				     </div>
				</div>

				<div class="input-group mb-3">
				    <input type="text" class="form-control" placeholder="Something clever..">
				    <div class="input-group-append">
				      <button class="btn btn-primary" type="button">OK</button>  
				      <button class="btn btn-danger" type="button">Cancel</button>  
				     </div>
				</div>

			    <div class="input-group mb-3">
			      <div class="input-group-prepend">
			        <div class="input-group-text">
			          <input type="checkbox"> 
			        </div>
			      </div>
			      <input type="text" class="form-control" placeholder="Some text">
			    </div>
			  
			    <div class="input-group mb-3">
			      <div class="input-group-prepend">
			        <div class="input-group-text">
			          <input type="radio"> 
			        </div>
			      </div>
			      <input type="text" class="form-control" placeholder="Some text">
			    </div>

			    <div class="input-group mb-3">
			      <div class="input-group-prepend">
			        <span class="input-group-text">Person</span>
			      </div>
			      <input type="text" class="form-control" placeholder="First Name">
			      <input type="text" class="form-control" placeholder="Last Name">
			    </div>  
			  
			    <div class="input-group mb-3">
			      <div class="input-group-prepend">
			        <span class="input-group-text">One</span>
			        <span class="input-group-text">Two</span>
			        <span class="input-group-text">Three</span>
			      </div>
			      <input type="text" class="form-control">
			    </div>

			    <div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text">$</span>
				    <span class="input-group-text">0.00</span>
				  </div>
				  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
				</div>
				<div class="input-group mb-3">
				  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
				  <div class="input-group-append">
				    <span class="input-group-text">$</span>
				    <span class="input-group-text">0.00</span>
				  </div>
				</div>

				<div class="input-group mb-3">
				  <input type="text" class="form-control" aria-label="Text input with dropdown button">
				  <div class="input-group-append">
				    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
				    <div class="dropdown-menu">
				      <a class="dropdown-item" href="#">Action</a>
				      <a class="dropdown-item" href="#">Another action</a>
				      <a class="dropdown-item" href="#">Something else here</a>
				      <div role="separator" class="dropdown-divider"></div>
				      <a class="dropdown-item" href="#">Separated link</a>
				    </div>
				  </div>
				</div>

				<div class="input-group mb-3">
				  <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
				  <div class="input-group-append">
				    <button type="button" class="btn btn-outline-secondary">Action</button>
				    <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				      <span class="sr-only">Toggle Dropdown</span>
				    </button>
				    <div class="dropdown-menu">
				      <a class="dropdown-item" href="#">Action</a>
				      <a class="dropdown-item" href="#">Another action</a>
				      <a class="dropdown-item" href="#">Something else here</a>
				      <div role="separator" class="dropdown-divider"></div>
				      <a class="dropdown-item" href="#">Separated link</a>
				    </div>
				  </div>
				</div>

				<div class="input-group mb-3">
				  <select class="custom-select" id="inputGroupSelect04">
				    <option selected>Choose...</option>
				    <option value="1">One</option>
				    <option value="2">Two</option>
				    <option value="3">Three</option>
				  </select>
				  <div class="input-group-append">
				    <button class="btn btn-outline-secondary" type="button">Button</button>
				  </div>
				</div>

				<div class="input-group mb-3">
				  <div class="custom-file">
				    <input type="file" class="custom-file-input" id="inputGroupFile04">
				    <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
				  </div>
				  <div class="input-group-append">
				    <button class="btn btn-outline-secondary" type="button"> Upload </button>
				  </div>
				</div>
			</div>
		</div>

		<div class="bg-dark">
			<h3 align="center" class="text-white">Form Control Sizing</h3>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<h4 align="center" class="text-primary">Standar</h4>
				<div class="form-group">
			      <input type="text" class="form-control form-control-sm" placeholder="Small form control" name="text1">
			    </div>
			    <div class="form-group">
			      <input type="text" class="form-control" placeholder="Default form control" name="text2">
			    </div>
			    <div class="form-group">
			      <input type="text" class="form-control form-control-lg" placeholder="Large form control" name="text3">
			    </div>
			</div>
			<div class="col-sm-6">
				<h4 align="center" class="text-success">Input Group</h4>
			    <div class="input-group mb-3 input-group-sm">
			      <div class="input-group-prepend">
			        <span class="input-group-text">Small</span>
			      </div>
			      <input type="text" class="form-control">
			    </div>
			    <div class="input-group mb-3">
			      <div class="input-group-prepend">
			        <span class="input-group-text">Default</span>
			      </div>
			      <input type="text" class="form-control">
			    </div>
			    <div class="input-group mb-3 input-group-lg">
			      <div class="input-group-prepend">
			        <span class="input-group-text">Large</span>
			      </div>
			      <input type="text" class="form-control">
			    </div>
			</div>
		</div>

		<div class="bg-dark">
			<h3 align="center" class="text-white">Select Sizing</h3>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<h4 align="center" class="text-primary">Standar</h4>
				<select name="small_select" id="small_select" class="form-control form-control-sm mb-3">
				  <option value="small_select">Small select</option>
				</select>
				<select name="default_select" id="default_select" class="form-control mb-3">
				  <option value="default_select">Default select</option>
				</select>
				<select name="large_select" id="large_select" class="form-control form-control-lg mb-3">
				  <option value="large_select">Large select</option>
				</select>
				<div class="form-group mb-3">
					<label>Multiple Select</label>
					<select multiple class="form-control" id="sel2" name="sellist2">
				        <option value="1">1</option>
				        <option value="2">2</option>
				        <option value="3" selected>3</option>
				        <option value="4">4</option>
				        <option value="5">5</option>
				    </select>
				</div>
			</div>
			<div class="col-sm-6">
				<h4 align="center" class="text-success">Custom</h4>
			    <select name="small" id="small" class="custom-select custom-select-sm mb-3">
			      <option value="Small Custom Select Menu" selected>Small Custom Select Menu</option>
			    </select>
			    <select name="deault" id="deault" class="custom-select mb-3">
			      <option value="Default Custom Select Men" selected>Default Custom Select Menu</option>
			    </select>
			    <select name="large" id="large" class="custom-select custom-select-lg mb-3">
			      <option value="Large Custom Select Menu" selected>Large Custom Select Menu</option>
			    </select>
			</div>
		</div>

		<div class="bg-dark">
			<h3 align="center" class="text-white">Checkbox</h3>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<h4 align="center" class="text-primary">Standar</h4>
				<div class="form-group">
					<div class="form-check mb-3">
					  <label class="form-check-label">
					    <input type="checkbox" class="form-check-input" value="" checked>Option 1
					  </label>
					</div>
					<div class="form-check mb-3">
					  <label class="form-check-label">
					    <input type="checkbox" class="form-check-input" value="">Option 2
					  </label>
					</div>
					<div class="form-check disabled mb-3">
					  <label class="form-check-label">
					    <input type="checkbox" class="form-check-input" value="" disabled>Option 3 (disabled)
					  </label>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<h4 align="center" class="text-success">Custom</h4>
			    <div class="custom-control custom-checkbox mb-3">
			      <input type="checkbox" class="custom-control-input" id="customCheck1" name="example1" checked>
			      <label class="custom-control-label" for="customCheck">Option 1</label>
			    </div>
			    <div class="custom-control custom-checkbox mb-3">
			      <input type="checkbox" class="custom-control-input" id="customCheck2" name="example2">
			      <label class="custom-control-label" for="customCheck2">Option 2</label>
			    </div>
			    <div class="custom-control custom-checkbox mb-3">
			      <input type="checkbox" class="custom-control-input" id="customCheck3" name="example3" disabled>
			      <label class="custom-control-label" for="customCheck3">Option 3 (disabled)</label>
			    </div>
			</div>
		</div>

		<div class="bg-dark">
			<h3 align="center" class="text-white">Radio Button</h3>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<h4 align="center" class="text-primary">Standar</h4>
				<div class="form-check mb-3">
				  <label class="form-check-label">
				    <input type="radio" class="form-check-input" name="optradio" checked>Option 1
				  </label>
				</div>
				<div class="form-check mb-3">
				  <label class="form-check-label">
				    <input type="radio" class="form-check-input" name="optradio">Option 2
				  </label>
				</div>
				<div class="form-check disabled mb-3">
				  <label class="form-check-label">
				    <input type="radio" class="form-check-input" name="optradio" disabled>Option 3 (disabled)
				  </label>
				</div>
			</div>
			<div class="col-sm-6">
				<h4 align="center" class="text-success">Custom</h4>
				<div class="custom-control custom-radio custom-contro mb-3">
			      <input type="radio" class="custom-control-input" id="customRadio1" name="example1" checked>
			      <label class="custom-control-label" for="customRadio1">Option 1</label>
			    </div>
			    <div class="custom-control custom-radio custom-control mb-3">
			      <input type="radio" class="custom-control-input" id="customRadio2" name="example1">
			      <label class="custom-control-label" for="customRadio2">Option 2</label>
			    </div>
			    <div class="custom-control custom-radio custom-control mb-3">
			      <input type="radio" class="custom-control-input" id="customRadio3" name="example1" disabled>
			      <label class="custom-control-label" for="customRadio3">Option 3 (disabled)</label>
			    </div>
			</div>
		</div>

		<div class="bg-dark">
			<h3 align="center" class="text-white">Input File</h3>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<h4 align="center" class="text-primary">Standar</h4>
				<div class="form-group">
			      <input type="file" class="form-control-file border" name="file">
			    </div>
			</div>
			<div class="col-sm-6">
				<h4 align="center" class="text-success">Custom</h4>
				<div class="custom-file mb-3">
			      <input type="file" class="custom-file-input" id="customFile" name="filename">
			      <label class="custom-file-label" for="customFile">Choose file</label>
			    </div>
			</div>
		</div>

		<div class="bg-dark">
			<h3 align="center" class="text-white">Validation</h3>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<h4 align="center" class="text-primary">Server Side</h4>
				<form>
	  				<div class="form-row">
					    <div class="col-md-4 mb-3">
					      <label for="validationServer01">First name</label>
					      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" value="Mark" required>
					      <div class="valid-feedback">
					        Looks good!
					      </div>
					    </div>
					    <div class="col-md-4 mb-3">
					      <label for="validationServer02">Last name</label>
					      <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name" value="Otto" required>
					      <div class="valid-feedback">
					        Looks good!
					      </div>
					    </div>
					    <div class="col-md-4 mb-3">
					      <label for="validationServerUsername">Username</label>
					      <div class="input-group">
					        <div class="input-group-prepend">
					          <span class="input-group-text" id="inputGroupPrepend3">@</span>
					        </div>
					        <input type="text" class="form-control is-invalid" id="validationServerUsername" placeholder="Username" aria-describedby="inputGroupPrepend3" required>
					        <div class="invalid-feedback">
					          Please choose a username.
					        </div>
					      </div>
					    </div>
	  				</div>

					<div class="form-row">
					    <div class="col-md-6 mb-3">
					      <label for="validationServer03">City</label>
					      <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="City" required>
					      <div class="invalid-feedback">
					        Please provide a valid city.
					      </div>
					    </div>
					    <div class="col-md-3 mb-3">
					      <label for="validationServer04">State</label>
					      <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="State" required>
					      <div class="invalid-feedback">
					        Please provide a valid state.
					      </div>
					    </div>
					    <div class="col-md-3 mb-3">
					      <label for="validationServer05">Zip</label>
					      <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Zip" required>
					      <div class="invalid-feedback">
					        Please provide a valid zip.
					      </div>
					    </div>
					</div>

					<div class="form-group">
					    <div class="form-check">
					      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
					      <label class="form-check-label" for="invalidCheck3">
					        Agree to terms and conditions
					      </label>
					      <div class="invalid-feedback">
					        You must agree before submitting.
					      </div>
					    </div>
					</div>
				</form>
			</div>

			<div class="col-sm-6">
				<h4 align="center" class="text-success">Supported elements</h4>
				<form class="was-validated">
				  <div class="custom-control custom-checkbox mb-3">
				    <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
				    <label class="custom-control-label" for="customControlValidation1">Check this custom checkbox</label>
				    <div class="invalid-feedback">Example invalid feedback text</div>
				  </div>

				  <div class="custom-control custom-radio">
				    <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
				    <label class="custom-control-label" for="customControlValidation2">Toggle this custom radio</label>
				  </div>
				  <div class="custom-control custom-radio mb-3">
				    <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
				    <label class="custom-control-label" for="customControlValidation3">Or toggle this other custom radio</label>
				    <div class="invalid-feedback">More example invalid feedback text</div>
				  </div>

				  <div class="form-group">
				    <select class="custom-select" required>
				      <option value="">Open this select menu</option>
				      <option value="1">One</option>
				      <option value="2">Two</option>
				      <option value="3">Three</option>
				    </select>
				    <div class="invalid-feedback">Example invalid custom select feedback</div>
				  </div>

				  <div class="custom-file">
				    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
				    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
				    <div class="invalid-feedback">Example invalid custom file feedback</div>
				  </div>
				</form>
			</div>
		</div>
	</div>

	<div class="navbar bg-dark">
		<div style="color: #fff;">© <?php echo date('Y'); ?> Copyright:
		    <a href="https://dewankomputer.com/"> Dewan Komputer</a>
		</div>
	</div>

	<script src="js/jquery-3.2.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>