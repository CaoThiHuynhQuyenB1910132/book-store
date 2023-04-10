<div>
    <section class="sub-header shop-detail-1">
        <img class="rellax bg-overlay" src="client/images/sub-header/09.jpg" alt="">
        <div class="overlay-call-to-action"></div>
        <h3 class="heading-style-3">{{$book_name}}</h3>
    </section>
    <section class="boxed-sm" style="margin-bottom: 30px; margin-top: 30px">
        <div class="container">
            <div class="row product-detail">
                <div class="row main">
                    <div class="col-md-6">
                        <div class="woocommerce-product-gallery">
                            <div class="main-carousel">
                                <div class="item">
                                    <img class="img-responsive" src="{{$book_img}}" alt="product thumbnail">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="summary">
                            <div class="desc">
                                <div class="header-desc">
                                    <h2 class="product-title">{{$book_name}}</h2>
                                    <h4 class="price">{{number_format($selling_price, 0, '.',
                                        '.')}} <span><del>{{number_format($original_price, 0, '.',
                                                '.')}} </del></span> VNĐ</h4>
                                </div>
                                <div class="body-desc">
                                    <div class="woocommerce-product-details-short-description">
                                        <p>{{$book_description}}</p>
                                    </div>
                                </div>
                                <div class="footer-desc">
                                    <form class="cart">
                                        <div class="quantity buttons-added">
                                            <input class="minus" wire:click="decQuantity" value="-" type="button">
                                            <input class="input-text qty text" name="quantity" wire:model='quantity'
                                                title="Qty" readonly>
                                            <input class="plus" wire:click="incQuantity" value="+" type="button">
                                        </div>

                                        <button style="margin-left: 25px" wire:click.prevent="addToCart({{$book_id}})"
                                            class="btn btn-brand no-radius">Thêm vào giỏ hàng</button>
                                    </form>
                                </div>


                                @include('client.components.alerts')
                            </div>
                            <div class="product-meta">
                                <p class="posted-in">Danh mục:
                                    <a href="#" rel="tag">{{$category}}</a>
                                </p>
                                <p class="tagged-as">Tác giả:
                                    <a href="#" rel="tag">{{$author}}</a>
                                </p>
                            </div>
                            <div class="widget-social align-left">
                                <ul>
                                    <li>
                                        <a class="facebook" data-toggle="tooltip" title="Facebook"
                                            href="https://www.facebook.com/authemes">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="pinterest" data-toggle="tooltip" title="Pinterest"
                                            href="https://www.pinterest.com/authemes">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="twitter" data-toggle="tooltip" title="Twitter"
                                            href="https://www.twitter.com/authemes">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="google-plus" data-toggle="tooltip" title="Google Plus"
                                            href="https://plus.google.com/authemes">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="instagram" data-toggle="tooltip" title="Instagram"
                                            href="https://instagram.com/authemes">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
