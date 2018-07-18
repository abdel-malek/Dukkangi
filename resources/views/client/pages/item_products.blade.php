
@if($products->count() != 0)

    @foreach($products as $product)
    <div class="col-lg-6 col-sm-11 col-xs-12 col-xl-4 col_item" style="margin-top: 1em;float: left;">
        <div class="div_item"  data-id="{{$product->id}}">
            @if (isset($product->discount) && $product->discount != 0 )
            <div class="discount_item">
                <p class="text_discount"> 
                    <!--<span style="text-decoration: line-through;" > {{$product->price}} €</span> <br>-->
                    <span style="font-family: unset;font-weight: bolder;font-size: 18px;"> {{ $product->discount}}% Off </span>
                </p>
                <div class="shadow_div_discount"></div>
            </div>
            @endif
           <a href="{{route('product',(string)$product->id)}}"> 
            <img src="{{$product->image_id}}"  class="img_item product-img" />
            <p class="item_name">{{ $product->english }}</p>
            <p class="item_price" style="margin-bottom: 0em;">{{ isset($product->discount_price) ?$product->discount_price : $product->price }}€</p>
            <span class="rating ratings{{$product->rate}}" ></span>
           </a>
            <img  data-id="{{$product->id}}" onclick="addCartModal($(this).parent().find('.product-img').attr('src') , $(this).parent().data('id') )" src="\front-end\images\user_actions\view-my-cart.png" class="icon_view_my_card"  style="cursor: pointer" />
        </div>
    </div>
    @endforeach
@else 
    <div class="col-12"  style="text-align: center;height: 200px">
        <center>
        <h5 style="text-align: center;margin-top: 10%;">
        @lang("There's No Products Here !")
        </h5>
        </center>
    </div>


@endif