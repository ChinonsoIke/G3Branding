<header>
    <!--Top Header: Begin-->
    <section id="top-header" class="clearfix">
        <div class="container">
            <div class="row">
                <div class="top-links col-lg-7 col-md-6 col-sm-5 col-xs-6">
                </div>
                <div class="top-header-right f-right col-lg-5 col-md-6 col-sm-7 col-xs-6">
                </div>
            </div>
        </div>
    </section> <!-- Top Header: End -->
    <!--Main Header: Begin-->
    <section class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-2 col-sm-4 col-xs-5 w-logo">
                    <div class="logo hd-pd ">
                    <a href="{{url('')}}">
                            <img src="{{asset('images/logo.png')}}" alt="printshop logo">
                        </a>
                    </div>	
                </div>
                <div class="col-lg-7 col-md-8 visible-md visible-lg">
                    <nav id="main-menu" class="main-menu clearfix">
                        <ul>
                            <li class="level0 hd-pd" title="About Us">
                                <a href="{{route('about')}}">About Us</a>
                            </li>
                            <li class="level0 parent col1 all-product hd-pd">
                                <a href="{{route('products')}}">Products</a>
                               
                            </li>
                            
                            <!-- <li class="level0 hd-pd">
                                <a href="category_grid.html" title="Marketing">How it works</a>
                            </li> -->
                            <li class="level0 hd-pd">
                                <a href="{{route('blog.index')}}" title="Postcards">Product News</a>
                            </li> 
                            <li class="level0 hd-pd" title="About Us">
                                <a href="{{route('contact')}}">Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                {{--<div class="col-sm-1 col-sm-offset-5 col-xs-offset-2 col-xs-2 visible-sm visible-xs mbmenu-icon-w">
                    <span class="mbmenu-icon hd-pd">
                        <i class="fa fa-bars"></i>
                    </span>
                </div>
                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-3 headerCS">
                    <div class="cart-w SC-w hd-pd ">
                        <span class="mcart-icon dropdowSCIcon">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="mcart-dd-qty">2</span>
                        </span>
                        <div class="mcart-dd-content dropdowSCContent clearfix">
                            <div class="mcart-item-w clearfix1">
                                <ul>
                                    <li class="mcart-item">
                                        <img src="images/product/mcart-postcard.jpg" alt="postcard cards">
                                        <div class="mcart-info">
                                            <a href="detail.html" class="mcart-name">Postcards Cards</a>
                                            <span class="mcart-qty">1 x </span>
                                            <span class="mcart-price">$ 10.09</span>
                                            <span class="mcart-remove-item">
                                                <i class="fa fa-times-circle"></i>
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                                                        
                            <div class="mcart-item-w clearfix">
                                <ul>
                                    <li class="mcart-item iteam2">
                                        <img src="images/product/mcart-postcard.jpg" alt="postcard cards">
                                        <div class="mcart-info">
                                            <a href="detail.html" class="mcart-name">Postcards Cards</a>
                                            <span class="mcart-qty">1 x </span>
                                            <span class="mcart-price">$ 10.09</span>
                                            <span class="mcart-remove-item">
                                                <i class="fa fa-times-circle"></i>
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="mcart-total clearfix">
                                <table>
                                    <tr>
                                        <td>Sub-Total</td>
                                        <td>$ 10.09</td>
                                    </tr>
                                    <tr>
                                        <td>Eco Tax (-2.00)</td>
                                        <td>$ 2.00</td>
                                    </tr>
                                    <tr>
                                        <td>VAT (20%)</td>
                                        <td>$ 2.018</td>
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <td>$ 10.108</td>
                                    </tr>
                                </table>
                            </div>
                             <div class="mcart-links buttons-set clearfix">
                                <a href="cart.html" class="gbtn mcart-link-cart">View Cart</a>
                                <a href="checkout.html" class="gbtn mcart-link-checkout">Checkout</a>
                            </div> 
                        </div>
                    </div>
                    <div class="search-w SC-w hd-pd ">
                        <span class="search-icon dropdowSCIcon">
                            <i class="fa fa-search"></i>
                        </span>
                        <div class="search-safari">
                            <div class="search-form dropdowSCContent">
                                <form method="POST" action="#">
                                    <input type="text" name="search" placeholder="Search" />
                                    <input type="submit" name="search" value="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>--}}
            </div>
        </div>
    </section><!--Main Header: End-->
</header><!--Header: End-->
