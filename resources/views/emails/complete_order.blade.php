<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">

	<style>
		.row{
			margin-left: -15px;
    	margin-right: -15px;
		}
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
			color: #FFF;}.insta{
		}
		.insta{
		}
		.fb{
		}
		.twit{
			margin-top:10px;
		}
		.td{
			width: 310px;
			color: #FFF;
		}
	</style>
</head>
<body>
<div class="header" >
<center>
<img  src="{{URL::asset('/emails/logo.png')}}" alt="logo" class='header-img'><br>
<img src="{{URL::asset('/emails/email.png')}}" alt="@" width="42px" height="42px" >
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
				@foreach($order['orderItem'] as $order)
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
								<span class="text white marginright">{{$orders['amount'] - $taxes}}€</span>
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
					<span class="text white marginright">{{orders['amount']}}€</span>
				</div>
			</div>
	</div>


<table style="background-color:#d80000 ;margin-top: 10px">
	<tr>
		<td class="td"><big><big> Contact Information</big> </big></td>
		<td class="td"> +49 5609 394</td>
		<td class="td"> info@dukkangi.com</td>
	</tr>
	<tr>
		<td class="td"></td>
		<td class="td"> +49 5609 394</td>
		<td class="td"> www.dukkangi.com</td>
	</tr>
	<tr>
		<td class="td"><p class="media insta"><span><img src="{{URL::asset('/emails/instagram.png')}}" alt="logo" width="28px" height="28px"></span>  instagram/dukkangi.com</p></td>
		<td class="td">	<p class="media fb"><span><img src="{{URL::asset('/emails/facebook.png')}}" alt="logo" width="28px" height="28px"> </span>  facebook/dukkangi.com</p></td>
		<td class="td"><p class="media twit"><span><img src="{{URL::asset('/emails/twitter.png')}}" alt="logo" width="28px" height="28px"></span>  twitter/dukkangi.com</p></td>
	</tr>
</table>
</body>
</html>
