<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Content Manegement Sysytem</title>
</head>
<style type="text/css">
	.main-contant{
		text-align: center;
		display: flex;
		flex-direction: column;
	}
	.contener{
		margin: auto;
		border: 1px solid #222327a1;
		background: #22232720;
		width: 35%;
	}
	table tr{
		height: ;
	}
	table{
		width: 100%;
		text-align: left;
	}
	input{
		width: 180px;
		margin-left: 10px;
	}
	.text-div{
		text-align: right;
		height: 50px;

	}
	p{
		font-size: 1rem;
		font-weight: 550;
	}
	.text-div h3{
		margin-top: 20px;
		font-size: 1.3rem;
	}
	.text-div p{
		margin-top: -20px;
	}
	.btn{
		width: 180px;
	}

</style>
<body>
	<div class="main-contant">
		<h2>Content Manegement Sysytem</h2>
		<div class="contener">
		<form action="CMS.php" method="post" enctype="multipart/form-data">
			<table>
				<tr>
					<td>
						<div class="text-div">
						<h3>Name</h3>
						<p>Add your name</p>
						</div>
					</td>
					<td>
						<input required type="text" name="Name">
					</td>
				</tr>
				<tr>
					<td>
						<div class="text-div">
						<h3>Email</h3>
						<p>Enter a Valid Email</p>
						</div>
					</td>
					<td>
						<input required type="email" name="email">
					</td>
				</tr><tr>
					<td>
						<div class="text-div">
						<h3>Phone</h3>
						<p>Add a Phone Number</p>
						</div>
					</td>
					<td>
						<input required type="number" name="Phone">
					</td>
				</tr><tr>
					<td>
						<div class="text-div">
						<h3>Website</h3>
						<p>Your Website</p>
						</div>
					</td>
					<td>
						<input required type="text" name="Website">
					</td>
				</tr><tr>
					<td>
						<div class="text-div">
						<h3>Priority</h3>
						<p>Priority Level</p>
						</div>
					</td>
					<td>
						<select name="Priority">
							<option>Low</option>
						</select>
					</td>
				</tr><tr>
					<td>
						<div class="text-div">
						<h3>Type</h3>
						<p>Type of Contact</p>
						</div>
					</td>
					<td>
						<select name="Type">
							<option>Website Upload</option>
						</select>
					</td>
				</tr><tr>
					<td>
						<div class="text-div">
						<h3>Message</h3>
						<p>Type your Message</p>
						</div>
					</td>
					<td>
						<textarea name="Message"></textarea>
					</td>
				</tr><tr>
					<td>
						<div class="text-div">
						</div>
					</td>
					<td>
						<input class="btn" type="submit" name="submit">
					</td>
				</tr>
			</table>
			</form>
		</div>
	</div>
</body>
</html>