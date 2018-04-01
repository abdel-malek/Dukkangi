@foreach($products as $product)
<div class="col-md-3" style="margin-top: 1em;float: left;">
    <div class="div_item">
        <div class="discount_item">
            <!-- Need a Change -->
            <p class="text_discount"> 15% off</p>
            <div class="shadow_div_discount"></div>
        </div>
       <a href="{{route('product',(string)$product->id)}}"> <img src="{{$product->image_id}}" class="img_item" />
        <p class="item_name">{{ $product->english }}</p>
        <p class="item_price" style="margin-bottom: 0em;">{{ $product->price }}€</p>
        <span class="rating ratings{{$product->rate}}" ></span>
        <img src="\front-end\images\user_actions\view-my-cart.png" class="icon_view_my_card" /></a>
    </div>
</div>
@endforeach
