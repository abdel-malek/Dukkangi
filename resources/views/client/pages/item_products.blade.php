@foreach($products as $product)
<div class="col-md-11 col-lg-3" style="margin-top: 1em;float: left;">
    <div class="div_item">
        @if (isset($product->discount) && $product->discount != 0 )
        <div class="discount_item">
            <p class="text_discount"> 
                <span style="text-decoration: line-through;" > {{$product->price}} €</span> <br>
                <span style="font-family: unset;font-weight: bolder;font-size: 22px;"> {{ $product->discount_price}} €</span>
            </p>
            <div class="shadow_div_discount"></div>
        </div>
        @endif
       <a href="{{route('product',(string)$product->id)}}"> <img src="{{$product->image_id}}" class="img_item" />
        <p class="item_name">{{ $product->english }}</p>
        <p class="item_price" style="margin-bottom: 0em;">{{ $product->price }}€</p>
        <span class="rating ratings{{$product->rate}}" ></span></a>
        <img onclick="addToCart(this)" data-id="{{$product->id}}" src="\front-end\images\user_actions\view-my-cart.png" class="icon_view_my_card"  style="cursor: pointer" />
    </div>
</div>
@endforeach
