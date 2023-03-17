 <!DOCTYPE html>
<html>
<head>
	<title>Payment Modal</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVYK6EufVgWSJddCx4e3JM/r433m2rYmZ5J+gOGpamoFVy4gJXp4Mpq" crossorigin="anonymous">

	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<!-- Bootstrap JS -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>


</head>
<body>
<div class="container" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-body"> <div class="text-right"> <i class="fa fa-close close" data-dismiss="modal"></i> </div> <div class="tabs mt-3"> <ul class="nav nav-tabs" id="myTab" role="tablist"> <li class="nav-item" role="presentation"> <a class="nav-link active" id="visa-tab" data-toggle="tab" href="#visa" role="tab" aria-controls="visa" aria-selected="true"> <img src="visa_logo.png" width="80"> </a> </li> <li class="nav-item" role="presentation"> <a class="nav-link" id="paypal-tab" data-toggle="tab" href="#paypal" role="tab" aria-controls="paypal" aria-selected="false"> 
	<img src="paypal_logo.png" width="80"> 
</a> </li> </ul> 
<div class="tab-content" id="myTabContent"> 
	<div class="tab-pane fade show active" id="visa" role="tabpanel" aria-labelledby="visa-tab"> 
	<div class="mt-4 mx-4"> 
		<div class="text-center"> 
	<h5>Pay with Credit card</h5> 
</div> 
<div class="form mt-3">
 <div class="inputbox">
  </div> 
  <div class="inputbox">  <i class="fa fa-eye"></i> </div> <div class="d-flex flex-row"> <div class="inputbox">  </div> <div class="inputbox">  </div> </div> <div class="px-5 pay"> <a href="{{ route('stripe.index') }}" class="btn btn-success btn-block">Add card</a> </div> </div> </div> </div> <div class="tab-pane fade" id="paypal" role="tabpanel" aria-labelledby="paypal-tab"> <div class="px-5 mt-5"> <div class="inputbox"><div class="text-center"> 
	<h5>Pay with Credit card</h5> 

<a href="{{ route('payment') }}" class="btn btn-primary btn-block">Pay $100 from Paypal</a>
</div>
<style type="text/css">
	body{height: 100vh;justify-content: center;align-items: center;display: flex;background-color: #eee}.launch{height: 50px}.close{font-size: 21px;cursor: pointer}.modal-body{height: 250px}.nav-tabs{border:none !important}.nav-tabs .nav-link.active{color: #495057;background-color: #fff;border-color: #ffffff #ffffff #fff;border-top: 3px solid blue !important}.nav-tabs .nav-link{margin-bottom: -1px;border: 1px solid transparent;border-top-left-radius: 0rem;border-top-right-radius: 0rem;border-top: 3px solid #eee;font-size: 20px}.nav-tabs .nav-link:hover{border-color: #e9ecef #ffffff #ffffff}.nav-tabs{display: table !important;width: 100%}.nav-item{display: table-cell}.form-control{border-bottom: 1px solid #eee !important;border:none;font-weight: 600}.form-control:focus{color: #495057;background-color: #fff;border-color: #8bbafe;outline: 0;box-shadow: none}.inputbox{position: relative;margin-bottom: 20px;width: 100%}.inputbox span{position: absolute;top:7px;left: 11px;transition: 0.5s}.inputbox i{position: absolute;top: 13px;right: 8px;transition: 0.5s;color: #3F51B5}input::-webkit-outer-spin-button, input::-webkit-inner-spin-button{-webkit-appearance: none;margin: 0}.inputbox input:focus~span{transform: translateX(-0px) translateY(-15px);font-size: 12px}.inputbox input:valid~span{transform: translateX(-0px) translateY(-15px);font-size: 12px}.pay button{height: 47px;border-radius: 37px}
</style>
</body>
</html> 


