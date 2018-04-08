<h2> Your Order Has Done ! </h2>
<p>
	<ul>
	@foreach($orders as $order)
		<li>
			Product: {{$order->product->english}} 
			<ul>
			<li>
				Quantity: {{$order->qty}} 
			</li>	
			<li>
				Single Peace Price : {{$order->product->price}} 
			</li>
			<li>
				Total Price : {{$order->product->price * $order->qty}}
			</li>
			</ul>
		</li>
	@endforeach	
	</ul>
	<h4>Total: {{$total}}</h4>
</p>
