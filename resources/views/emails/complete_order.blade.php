<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="/front-end/css/item.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>
		@font-face {
		    font-family: NormalFont;
		    src: url("/front-end/fonts/HelveticaNeueLight.ttf");
		}
		.header{
			background-color: #d80000;
			height:206px;
		}
		.header-img{
			margin-top:20px;
		}
		.text{
			font-family:"NormalFont";
			font-size: 24px ;
			color:#545454;
		}
		.border{
			margin:0px 74px;
			margin-top: 24px;
			border:2px solid #d80000  !important;
			height:auto;
			padding: 15px 0px;
		}
		.first{
			margin-left: 50px;
		}
		.red{
			color:red;
		}
		.white{
			color:white;
		}
		.left{
			text-align: left;
			margin-left: 50px;
			line-height: 25px;
		}
		.right{
			margin-left: 40%;
			line-height: 20px;
			text-align: left;
		}

		.order{
			line-height: 45px;
			border:3px solid #d80000;
			background-color:#d80000;
			height: 47px;
		}
		.tableth{
			background-color:#e2bebe;
			margin-bottom: 20px;
			margin-right: 40px;
			width: 300px;
			text-align: center;

		}
		.borderpink{
			margin:0px 74px;

		}
		.insidetable{
			line-height: 10px;
			text-align: center;
			height: 200px;
			border:1px
			solid #d80000
		}
		.borderbottom{
			border:2px solid #d80000  !important;
		}
		.borderline{
			background-color:#e2bebe;
			height: 45px;
			color: white;
			margin: 3px;
			margin-bottom: 6px;
			margin-top:3px;
		}
		.marginleft{
		    float: left;
		    margin-left: 122px;
		}
		.marginright{
		    float: right;
			margin-right: 122px;
		}
		.footers{
			background-color: #d80000;
			height:auto;
			margin-top: 40px
		}
		.leftfooter{
			text-align: left;
			margin-left: 58px;
			line-height: 25px;
			margin-top: 20px;
		}
		.rightfooter{
			text-align: left;
			margin-left: 282px;
			line-height: 15px;
			margin-top: 20px;
		}
		.mid{
			margin-top: 20px;
			line-height: 16px;
			margin-left: 286px;
		}
		.media{
			font-size: 18px;
			padding-left: 5px;
		}
		.media span{
			margin-right:5px;
		}
		.insta{
			margin-left: 60px;
			margin-top:55px;

		}
		.fb{
			margin-left: 271px;
			margin-top:28px;
		}
		.twit{
			margin-left: 267px;
			margin-top:29px;
		}
	</style>
</head>
<body>
<div class="header" >
<center>
<img  src="/emails/logo.png" alt="logo" class='header-img'><br>
<img src=/emails/email.png alt="@" width="42px" height="42px" >
<span class="glyphicon glyphicon-envelope"></span>
<p class="text white">Order Completed</p>
</center>
</div>

<div class="border">
		<div class="text first">
				<p >Dear {{$username}}</p><br>
				<p>Thank you,we have received your order.Once your items have been shipped,we'll send you the DHL tracking information.</p><br>
		</div>
		<br>
		<div class="row">
				<div class="left">
					<p class="text red">Delivery at</p>
					<p class="text">04.04.2018</p>
					<p class="text red">Order Number</p>
					<p class="text">{{$orderId}}</p>
					<p class="text red">Shipping Method</p>
					<p class="text">Lieferservice mit DHL-Kurier</p>
					<p class="text red">Payment Method</p>
					<p class="text">Paypal</p>
				</div>
				<div  class="right">
					<p class="text red">Expected Arrival at</p>
					<p class="text">{{$username}}</p>
					<p class="text">Dumptener strafe 24</p>
					<p class="text">Her</p>
					<p class="text">45476, Mulheim an der Ruhr DE</p><br>
					<p class="text red">Address</p><br>
					<p class="text">Wassim Msallam</p>
					<p class="text">Dumptener strafe 24</p>
					<p class="text">Her</p>
					<p class="text">45476, Mulheim an der Ruhr DE</p>
				</div>
			</div>
							<div>
								<center>
								<p class="order text white">ORDER OVERVIEW</p>
								</center>
							</div>
								<center>
								<span class="text red">Delivery on  </span>
								<span class="text">04.04.2018,  </span>
								<span class="text red">bettwen </span>
								<span class="text">  10:00-12:00 Uhr </span>
								</center>
								</div>
		<div class="borderpink">
			<table style="width: -webkit-fill-available;">
				<thead>
				<th class="tableth text white"><b>#</b></th>
				<th class="tableth text white"><b>Item</b></th>
				<th class="tableth text white"><b>Price</b></th>
				<th class="tableth text white"><b>Total Price</b></th>
				<th class="tableth text white"><b>Tax Fees</b></th>
			</thead>
			<tbody>
			<tr class="text insidetable">
				{!! $counter = 0 !!}
				@foreach($orderItem as $order)
				<td>{{$order->qty}}</td>
				<td><p>{{$order->name}}</p></td>
				<td>{{$order->price}}€</td>
				<td>{{$order->price * $order->qty}}€</td>
				<td>{{ $taxes[counter] }} %</td>
				{!! $counter++; !!}
				@endforeach
			</tr>
		</tbody>

		</table>
		<div class="order"></div>
		<div class="borderbottom">

				<div class="borderline">
								<span class="text white marginleft">Sub-Total</span>
								<span class="text white marginright">{{$subtotal}}€</span>
				</div>

				<div class="borderline">
								<span class="text white marginleft">Taxes</span>
								<span class="text white marginright">{{$taxes}}€</span>
				</div>

				<div class="borderline">
								<span class="text white marginleft">Delivery Chargers</span>
								<span class="text white marginright">NaN €</span>
				</div>

				<div class="order">
					<span class="text white marginleft">Total</span>
					<span class="text white marginright">{{$total}}€</span>
				</div>
			</div>
	</div>

<footer>
	<div class="text white footers">
		<div class="row">
			<div >
				<p class="leftfooter">Contact information</p>
				<p class="media insta"><span><img src="/emails/instagram.png" alt="logo" width="28px" height="28px"></span>  instagram/dukkangi.com</p>
			</div>
			<div >
				<p class="mid">+49 5609 - 809</p>
				<p class="mid">+49 5609 - 809</p>
				<p class="media fb"><span><img src="/emails/facebook.png" alt="logo" width="28px" height="28px"> </span>  facebook/dukkangi.com</p>
			</div>
		<div>
				<p class="rightfooter">info@dukkangi.com</p>
				<p class="rightfooter">www.dukkangi.com</p>
				<p class="media twit"><span><img src="/emails/twitter.png" alt="logo" width="28px" height="28px"></span>  twitter/dukkangi.com</p>
		</div>

		</div>
	</div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>
