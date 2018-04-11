<h2> Your Order Has Done ! </h2>
<div>
	@foreach($orders as $order)
	<h3>{{$order->product->english}}</h3>
	<ul>
		<li> Quantity:  {{$order->qty}}</li>
		<li> Price : {{$order->product->price}}</li>
	</ul>
	<hr>
	@endforeach
</div>
