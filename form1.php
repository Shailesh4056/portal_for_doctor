<!DOCTYPE html>
<!-- code by webdevtrick (webdevtrick.com) -->
<html>
<head>
  <meta charset="UTF-8">
  <title>Registration Form | webdevtrick.com</title>
  
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
     
	  <style>
	  @import url("https://fonts.googleapis.com/css?family=PT+Sans:400,700");
html {
  font-size: 10px;
  tap-highlight-color: rgba(0, 0, 0, 0);
  box-sizing: border-box;
}

*, *:before, *:after {
  margin: 0;
  padding: 0;
  box-sizing: inherit;
}

body {
  font-family: 'PT Sans', sans-serif;
  font-size: 16px;
  line-height: 1.428571429;
  font-weight: 400;
  color: #fff;
}

.row {
  display: flex;
  align-items: center;
  justify-content: center;
}

.section {
  background-color: #50C5FF;
  position: relative;
  overflow: hidden;
  display: flex;
  justify-content: center;
  flex-direction: column;
}

header,
main,
footer {
  display: block;
  position: relative;
  z-index: 1;
}

header {
  padding: 48px;
}
@media (max-width: 440px) {
  header {
    padding: 48px 24px;
  }
}
header > h3 {
  font-size: 44px;
  font-weight: 700;
  margin-bottom: 8px;
	text-align: center;
}
header > h4 {
  font-size: 22px;
  font-weight: 400;
  letter-spacing: 1px;
	text-align: center;
}

main {
  flex: 1;
  padding: 0 48px;
}
@media (max-width: 440px) {
  main {
    padding: 0 24px;
  }
}

footer {
  width: 100%;
  background-color: red;
  padding: 16px;
  align-self: center;
  text-align: center;
  margin-top: 32px;
}
footer a {
  color: #fff;
  font-weight: 700;
  text-decoration: none;
}
footer a:hover {
  text-decoration: underline;
}

form {
  height: 100%;
  display: flex;
  justify-content: center;
  flex-direction: column;
}

.label {
  color: rgba(226, 227, 232, 0.75);
  font-size: 16px;
}

small {
  display: none;
}
small.errorOnce {
  margin-top: 2px;
}
.tx1 {
	margin-top: 10px;
}
.form-item input[type="text"],
.form-item input[type="number"],
.form-item input[type="email"] {
  display: block;
  color: #E2E3E8;
  font-size: 16px;
  width: 100%;
  background-color: transparent;
  border: none;
  border-bottom: 1px solid black;
  padding: 8px 0;
  appearance: none;
  outline: none;
}
.form-item i {
  font-size: 12px;
  color: red;
}

.box-item {
  height: 60px;
  margin-bottom: 16px;
}

.form-item-double {
  display: flex;
}
.form-item-double .form-item {
  flex: 1 1 auto;
}
.form-item-double .form-item:nth-child(1) {
  padding-right: 16px;
}
.form-item-double .form-item:nth-child(2) {
  padding-left: 16px;
}

.form-item-triple {
  display: flex;
  align-items: center;
  padding-top: 6px;
}
.form-item-triple .radio-label {
  flex: 1 1 auto;
  text-align: left;
}
.form-item-triple .radio-label label {
  display: inline-block;
  vertical-align: middle;
}
.form-item-triple .form-item {
  flex: 3 1 auto;
  text-align: center;
  margin: 0;
}
.form-item-triple .form-item label, .form-item-triple .form-item input[type="radio"] {
  display: inline-block;
  vertical-align: middle;
  margin: 0 4px;
}

.submit {
  display: inline-block;
  font-size: 18px;
  font-weight: 700;
  letter-spacing: 1px;
  padding: 8px 48px;
  margin-top: 32px;
  border: 2px solid #075BB4;
  border-radius: 20px;
  cursor: pointer;
  transition: all ease .2s;
}
.submit:hover {
  background-color: red;
  border: 2px solid black;
}

.wave {
  position: absolute;
  top: 0;
  left: 50%;
  width: 800px;
  height: 800px;
  margin-top: -600px;
  margin-left: -400px;
  background: red;
  border-radius: 40%;  
  animation: shift 20s infinite linear;
  z-index: 0;
}


@keyframes shift{
  from{
    transform: rotate(360deg);
  }
}
</style>
 
  
</head>
 
<body>
 
  <div class="row">
  <section class="section">
    <header>
      <h3>Register</h3>
      <h4>Please fill your information in this form</h4>
    </header>
    <main>
      <form id="cov" action="covinuser.php" method="POST" onsubmit="return myFunction()" />
<input type="hidden" name="date" id="date" value="<?php echo $sult ['date'];?>" readonly="readonly">
<input type="hidden" name="dose" id="dose" value="<?php echo $sult ['dose1'];?>" readonly="readonly">
<input type="hidden" name="pin" id="pin" value="<?php echo $sult ['pin'];?>" readonly="readonly">
<input type="hidden" name="location" id="location" value="<?php echo $sult ['address'];?>" readonly="readonly">
        <div class="form-item box-item">
          <input type="text" name="name" class="tx1" placeholder="Name" data-required>
          <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
        </div>
		        <div class="form-item box-item">
          <input type="text" name="adhar" id="adhar" class="tx1" placeholder="Name" data-required>
          <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> adhar</small>
        </div>
        <div class="form-item box-item">
          <input type="email" name="email" class="tx1" placeholder="Email" data-email data-required>
          <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
          <small class="errorEmail"><i class="fa fa-asterisk" aria-hidden="true"></i> email is not valid</small>
        </div>
        <div class="form-item box-item">
          <div class="form-item-triple">
            <div class="radio-label"> 
              <label class="label">Gender</label>
            </div>
            <div class="form-item"> 
              <input id="Male" type="radio" name="gender" value="Male" data-once>
              <label for="Male">Male</label>
            </div>
            <div class="form-item"> 
              <input id="Female" type="radio" name="gender" value="Female" data-once>
              <label for="Female">Female</label>
            </div>
          </div>
          <small class="errorOnce"><i class="fa fa-asterisk" aria-hidden="true"></i> choose at least one</small>
        </div>
        <div class="form-item box-item">
          <div class="form-item-triple">
            <div class="radio-label"> 
              <label class="label">Account Type</label>
            </div>
            <div class="form-item"> 
              <input id="sponsored" type="radio" name="gender2" value="sponsored" data-once>
              <label for="sponsored">Free</label>
            </div>
            <div class="form-item"> 
              <input id="paid" type="radio" name="gender2" value="paid" data-once>
              <label for="paid">Pro</label>
            </div>
        <div class="form-item-double box-item">
        <div class="form-item">
          <span id="submit" class="submit">Submit</span>
        </div>
      </form>
    </main>
    <footer>
      <p>Already have an account? <a href="#">Login</a></p>
    </footer>
    <i class="wave"></i>
  </section>
</div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 
  
 
    <script  src="function.js"></script>
 
 
 
 
</body>
 
</html>