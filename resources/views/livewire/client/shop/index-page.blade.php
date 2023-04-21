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
                        <div>
                            <input wire:model='searchTerm' placeholder="Tìm kiếm sản phẩm..." style="border: none"
                                class="woocommerce-result-count" />
                        </div>
                        <form class="woocommerce-ordering select-custom-wrapper">
                            <select wire:model='sortTerm' class="orderby select-custom-wrapper">
                                <option value="">Mặc định</option>
                                <option value="lowToHight">Giá từ thấp đến cao</option>
                                <option value="hightToLow">Giá từ cao đén thấp</option>
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
                    @if ($books->count() > 0)
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
                                    <a class="product-name" style="color: white" class="product-name"
                                        href="{{route('bookDetail', ['id' => $book->id, 'slug' => $book->book_slug])}}">{{$book->book_name}}</a>
                                </h3>
                                <span style="color: white" class="price">{{number_format($book->selling_price, 0, '.',
                                    '.')}}
                                    <span>
                                        <del>{{number_format($book->original_price, 0, '.',
                                            '.')}}
                                        </del>
                                    </span> VNĐ
                                </span>

                            </figcaption>
                        </div>
                    </figure>
                    @endforeach
                    @else
                    <div style="margin-top:30px">
                        <h1>Không tìm thấy sản phẩm nào</h1>
                    </div>
                    @endif
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
