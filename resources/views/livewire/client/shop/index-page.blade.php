<div>
    <section class="sub-header shop-layout-1">
        <img class="rellax bg-overlay" src="client/images/sub-header/w.jpg" alt="">
        <div class="overlay-call-to-action"></div>
        <h3 class="heading-style-3">Cửa hàng</h3>
    </section>
    <div class="woocommerce-top-control wrapper">
        <section class="boxed-sm">
            <div class="container">
                <div class="row">
                    <div class="woocommerce-top-control">

                        <form class="woocommerce-ordering select-custom-wrapper" method="get">
                            <select class="orderby select-custom-wrapper" name="orderby">
                                <option value="menu_order" selected="selected">Default sorting</option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by newness</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="box-sm">
        <div class="container">
            <div class="row main">
                <div class="row product-grid-equal-height-wrapper product-equal-height-4-columns flex multi-row">
                    @foreach ($books as $book)
                    <figure class="item" style="margin-top: 30px">
                        <div class="product product-style-1">
                            <div class="img-wrapper">
                                <a href="{{route('bookDetail', ['id' => $book->id, 'slug' => $book->book_slug])}}">
                                    <img class="img-responsive" src="{{$book->book_img}}" alt="product thumbnail" />
                                </a>
                            </div>
                            <figcaption class="desc text-center" style="background-color: #97AE76">
                                <h3>
                                    <a style="color: white" class="product-name" href="product-detail.html">{{$book->book_name}}</a>
                                </h3>
                                    <span  style="color: white" class="price">{{number_format($book->selling_price, 0, '.',
                                        '.')}} <span><del>{{number_format($book->original_price, 0, '.',
                                                '.')}} </del></span> VNĐ</span>

                            </figcaption>
                        </div>
                    </figure>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-md-12 text-right">
                        {{$books->onEachSide(1)->links('client.components.pagination')}}
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
