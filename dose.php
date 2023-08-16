<!Doctype html>
<html>
<style>
.btn-group2 button {
  background-color: #000; 
  border: 1px solid green;
  color: white; 
  padding: 10px 24px; 
  cursor: pointer;
  float: left; 
}
.btn-group1 button {
  background-color: #58D68D;
  border: 1px solid green; 
  color: white;
  padding: 10px 24px; 
  cursor: pointer; 
  float: left; 
}

/* Clear floats (clearfix hack) */
.btn-group:after {
  content: "";
  clear: both;
  display: table;
}

.btn-group button:not(:last-child) {
  border-right: none; 
}

/* Add a background color on hover */
.btn-group button:hover {
  background-color: #3e8e41;
}
</style>
<body>

<h1>Justified Button Group</h1>

<p>Two buttons in a group:</p>
<div class="btn-group1" style="width:100%">
  <button style="width:50%">dose 1</button>
  </div>
  <div class="btn-group2" style="width:100%">
  <button style="width:50%">dose 2</button>
</div>

</body>
</html>