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
<img  src="{{URL::asset('/emails/logo.png')}}" alt="logo" class='header-img'><br>
<img src="{{URL::asset('/emails/email.png')}}" alt="@" width="42px" height="42px" >
<span class="glyphicon glyphicon-envelope"></span>
<p class="text white">Payment Successed</p>
</center>
</div>

<div class="border">
		<div class="text first">
			<p >Dear {{$username}}</p><br>
			<p>Thank you,we have received your order.Once your items have been shipped,we'll send you the DHL tracking information.</p><br>
			<br><br>

			<p>Your order Costed you {{$cost}} € 
				<br>
				See the Order Email for more details.  
		</div>
		<br>
</div>
		


<footer>
	<div class="text white footers row">
		<div >
			<div>
				<p class="leftfooter">Contact information</p>
				<p class="media insta"><span><img src="{{URL::asset('/emails/instagram.png')}}" alt="logo" width="28px" height="28px"></span>  instagram/dukkangi.com</p>
			</div>
			<div style="margin-left: 100px;margin-top: -128px;" >
				<p class="mid">+49 5609 - 809</p>
				<p class="mid">+49 5609 - 809</p>
				<p class="media fb"><span><img src="{{URL::asset('/emails/facebook.png')}}" alt="logo" width="28px" height="28px"> </span>  facebook/dukkangi.com</p>
			</div>
		<div style="margin-left: 400px;margin-top: -134px;">
				<p class="rightfooter">info@dukkangi.com</p>
				<p class="rightfooter">www.dukkangi.com</p>
				<p class="media twit"><span><img src="{{URL::asset('/emails/twitter.png')}}" alt="logo" width="28px" height="28px"></span>  twitter/dukkangi.com</p>
		</div>
		
		</div>
	</div>
</footer></body>
</html>
