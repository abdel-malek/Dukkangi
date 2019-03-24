
@if($products->count() != 0)
    @foreach($products as $product)

    <div class="col-lg-4 col-md-6 col-sm-10 col-xs-12 col-xl-4 col_item" style="margin-top: 1em;float: left;">
        <div class="div_item"  data-id="{{$product->id}}">
            @if (isset($product->discount_price) && $product->discount != 0)
            <div class="discount_item">
                <p class="text_discount"> 
                    <!--<span style="text-decoration: line-through;" > {{$product->price}} €</span> <br>-->
                    <span style="font-family: unset;font-weight: bolder;font-size: 18px;"> {{ $product->discount}}%<br/><span value="@lang('off')" class="off_item"> @lang('off') </span></span>
                </p>
                <div class="shadow_div_discount"></div>
            </div>
            @endif
           <a href="{{route('product',(string)$product->id)}}"> 
               <div style="height: 14.4em;display: flex;align-content: center;align-items: center;justify-content: center;" class="image_block_header">
            <img src="{{$product->image_id}}"  class="img_item product-img" />
               </div>
            <p class="item_name">{{ $product->english }}</p>
            <!--<p class="item_price" style="margin-bottom: 0em;">{{ isset($product->discount_price) ?$product->discount_price : $product->price }}€</p>-->
           
            <p class="item_price" number_qty="{{$product->qty}}" style="margin-bottom: 0em;"> <span class="tax_include" style="font-size: 0.8rem;margin-top: 0.7rem;    position: absolute;margin-left: -5.2rem;float: left;font-weight: 500;" value="@lang('tax included')">@lang('tax included')</span> &nbsp;{!! isset($product->discount_price) ?"<span class='old-price' style='text-decoration: line-through;font-family: EagarFont;color: #8e8d8d;font-size: 1rem;'>".$product->price.' €</span>  / '.'<span class="price_discount" value='.$product->discount_price.' >'.$product->discount_price.'</span>':'<span class="price_discount"  value='.$product->discount_price.'> '.$product->price .'</span>' !!}€</p>
            <span class="rating ratings{{$product->rate}}" ></span>
           </a>
            <img   data-id="{{$product->id}}" onclick="addCartModal($(this).parent().find('.product-img').attr('src') , $(this).parent().data('id') , $(this).parent().find('.price_discount').attr('value') , {{$product->order}},'')" 
                  @if (isset($product->order) && $product->order != 0)
                  src="\front-end\images\user_actions\view-my-cart_after_add.png"
                  @else
                  src="\front-end\images\user_actions\view-my-cart.png"
                  @endif
                  class="icon_view_my_card"  style="cursor: pointer" />
                   
        </div>
    </div>
    @endforeach
@else
`
    <div class="col-12"  style="text-align: center;height: 200px">
        <center>
            <h5 style="text-align: center;margin-top: 2rem;float: left;width: 100%;">
                @lang("There's No More Products Here !")
            </h5>
        </center>
    </div>
@endif