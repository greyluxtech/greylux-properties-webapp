<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style>
body{
    font-family: "Times New Roman", Times, serif;
    margin:"20px";
    padding:'7px';
}
.container {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
@media (min-width: 768px) {
  .container {
    width: 750px;
  }
}
@media (min-width: 992px) {
  .container {
    width: 970px;
  }
}
@media (min-width: 1200px) {
  .container {
    width: 1170px;
  }
}
</style>
</head>
<body>

<div class="container" style =""> 
<h2 style="text-align:center;color:blue">Contcact Mail </h2>
<h3>From:</h3>
<h3>{{$data['firstname']}}  {{$data['lastname']}}</h3>
<hr>
<h3>Phone Number:</h3>
<h3 >{{$data['number']}}</h3>
<hr>
<h3>Email:</h3>
<h3 >{{$data['email']}}</h3>
<hr>
<h3>Subject:</h3>
<h3 >{{$data['subject']}}</h3>
<hr>
<h3>Message</h3>
<h3 ">Hello {{$data['message']}}</h3>



</div>

</body>

</html>