<div>
    <div class="banner banner-image-fit-screen">
        <div class="rev_slider slider-home-1" id="slider_1">
            <ul>
                <li>
                    <img class="rev-slidebg" src="client/images/slider/1.jpg" alt="demo" data-bgposition="center center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10">
                </li>
            </ul>
        </div>
    </div>
    <section class="boxed-sm">
        <div class="container">
            <div class="heading-wrapper text-center">
                <h3 class="heading">SẢN PHẨM CỦA CHÚNG TÔI</h3>
            </div>
            <div class="row">
                <div class="row js-product-masonry-layout-1 product-masonry-layout-1">
                    <div class="grid-sizer"></div>
                    @if ($books->count()>0)
                    @foreach ($books as $book)
                    <figure class="item">
                        <div class="product product-style-2">
                            <div class="img-wrapper">
                                <a href="{{route('bookDetail', ['id' => $book->id, 'slug' => $book->book_slug])}}">
                                    <img class="img-responsive" src="{{$book->book_img}}" alt="product thumbnail" />
                                </a>
                            </div>
                        </div>
                    </figure>
                    @endforeach
                    @else
                    <div class="text-center">
                        <h1>Không có sản phẩm nào</h1>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>


</div>
