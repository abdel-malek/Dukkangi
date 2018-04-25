  <aside id="sidebar">
        <div class="sidebar-search">
            <input id="left-menu-search" type="search" class="form-control input-sm" placeholder="Search...">
            <a href="javascript:void(0)"><i class="search-close icon_search"></i></a>
        </div>
        <div class="sidebar-menu">
            <ul class="nav site-menu live-search-list" id="site-menu" data-plugin="custom-scroll" data-suppress-scroll-x="true" data-height="100%">
                <li class="menu-title"><i class="icon_compass_alt"></i><span>Main Menu</span>
                    <ul class="main-menu">
                        <li class="sub-item">
                            <a href="{{route('category.index')}}"><span>Categories</span>
                                <!--<span class="float-xs-right"><i class="icon_plus"></i></span>-->
                            </a>
                        </li>
                        <li class="sub-item">
                            <a href="{{route('subcategory.index')}}"><span>Sub-Categories</span>
                            </a>
                        </li>

                        <li class="sub-item">
                            <a href="{{route('brand.index')}}"><span>Product Brands</span>
                            </a>
                        </li>
                        <li class="sub-item">
                            <a href="{{route('product.index')}}"><span>Products</span></a>
                        </li>
                        <li class="sub-item">
                            <a href="{{route('productQty.index')}}"><span>Product Qty</span></a>
                        </li>
                        <li class="sub-item">
                            <a href="{{route('user.index')}}"><span>Users</span>
                                <!--<span class="float-xs-right"><i class="icon_plus"></i></span>-->
                            </a>
                        </li>
                        <li class="sub-item">
                            <a href="{{route('order.index')}}"><span>Orders</span>
                                <!--<span class="float-xs-right"><i class="icon_plus"></i></span>-->
                            </a>
                        </li>
                        <li class="sub-item">
                            <a href="{{route('payment.index')}}"><span>Payments</span>
                                <!--<span class="float-xs-right"><i class="icon_plus"></i></span>-->
                            </a>
                        </li>
                        <li class="sub-item">
                            <a href="{{route('coupon.index') }}"><span>Make Coupons</span>
                                <!--<span class="float-xs-right"><i class="icon_plus"></i></span>-->
                            </a>
                        </li>
                        </ul>
                    </ul>

                </li>

            </ul>
        </div>
        <div class="sidebar-extra">
            <a href="#"><i class="icon_lock-open_alt"></i></a>
            <a href="#"><i class="icon_key_alt"></i></a>
            <a href="#"><i class="icon_lock_alt"></i></a>
        </div>
    </aside>
