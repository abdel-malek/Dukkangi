<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">

	<style>
            .hx .ii{
                margin: 0px;
            }
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
			color: #FFF;
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
<body style="background-color: #d80000;">
<div class="header row" >
<center>
    <img  src="http://dukkangi.com/emails/logo.png" alt="logo" class='header-img'><br>
    <img src="http://dukkangi.com/emails/email.png" alt="@" width="42px" height="42px" ><span class="glyphicon glyphicon-envelope"></span>
    <p class="text white" style="margin-top: 8px;">Welcome To Dukkangi</p>
</center>
</div>

    <div class="border" style="margin: 0px 0px;margin-top: 24px;">
    <div class="text first" style="margin-left: 15px;text-align: left;direction: ltr;">
                    <p >Dear {{Auth::user()->name}}</p>
                    <p>Thank you for your registration in Dukkangi store.</p>
                    <p>Your E-Mail is <span class="red"><b><i>{{Auth::user()->email}}.</i></b></span> </p>
                    <p>Your Username is <span class="red"><b><i>{{Auth::user()->name}}. </i></b></span> </p>
                    <p>Feel free to contact with our support team at the footer below.</p>
		</div>
		<br>
</div>

<table style="background-color:#d80000 ;margin-top: 10px;width:100%;display: block;margin-left: auto;margin-right: auto;">
        <tr>
            <td class="td" colspan="3" style="text-align: center;"><big style="margin-top: 12px;margin-bottom: 12px;display: -webkit-inline-box;"><big> Contact Information</big> </big></td>
        </tr>
        <tr>
            <td class="td" colspan="3" style="text-align: center"> +49 5609 394 &nbsp;&nbsp;&nbsp;  info@dukkangi.com</td>
        </tr>
        <tr>
            <td class="td" colspan="3" style="text-align: center"> +49 5609 394 &nbsp;&nbsp;&nbsp; www.dukkangi.com</td>
        </tr>
        <tr>
            <td class="td" style="text-align: center;"><p class="media insta"><span><img src="http://dukkangi.com/emails/instagram.png" alt="logo" width="28px" height="28px"></span> <br><span style="white-space: nowrap;"> instagram/dukkangi.com</span></p></td>
            <td class="td" style="text-align: center;">	<p class="media fb"><span><img src="http://dukkangi.com/emails/facebook.png" alt="logo" width="28px" height="28px"> </span> <br><span style="white-space: nowrap;"> facebook/dukkangi.com</span></p></td>
            <td class="td" style="text-align: center;"><p class="media twit"><span><img src="http://dukkangi.com/emails/twitter.png" alt="logo" width="28px" height="28px"></span> <br><span style="white-space: nowrap;"> twitter/dukkangi.com</span></p></td>
        </tr>
    </table>
</body>
</html>
