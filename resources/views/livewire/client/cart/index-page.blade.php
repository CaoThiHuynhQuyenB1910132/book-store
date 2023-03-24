<div>
    <section class="sub-header shop-detail-1">
        <img class="rellax bg-overlay" src="client/images/sub-header/013.jpg" alt="">
        <div class="overlay-call-to-action"></div>
        <h3 class="heading-style-3">Giỏ hàng</h3>
    </section>
    <section class="boxed-sm" style="margin-top: 30px">
        <div class="container">
            @if ($cartBooks->count() > 0)
            <div class="woocommerce">
                <form class="woocommerce-cart-form">
                    <table class="woocommerce-cart-table">
                        <thead>
                            <tr>
                                <th class="product-thumbnail">Hình ảnh</th>
                                <th class="product-name">Tên</th>
                                <th class="product-quantity">Giá mua</th>
                                <th class="product-price">Số lượng</th>
                                <th class="product-subtotal">Đơn giá</th>
                                <th class="product-remove">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartBooks as $book)
                            <tr>
                                <td class="product-thumbnail">
                                    <img  style="height: 70px; width: 70px" src="{{$book->book->book_img}}" alt="product-thumbnail">
                                </td>
                                <td class="product-name" data-title="Product">
                                    <a class="product-name" href="product-detail.html">{{$book->book->book_name}}</a>
                                </td>
                                <td class="product-weight" data-title="Weight">{{number_format($book->book->selling_price, 0, '.',
                                    '.')}} VNĐ</td>
                                <td>
                                    <div class="quantity buttons-added">
                                        <input class="minus" wire:click="decQuantity" value="-" type="button">
                                        <input class="input-text qty text"
                                            name="quantity" wire:model='quantity' title="Qty" readonly>
                                        <input class="plus" wire:click="incQuantity" value="+" type="button">
                                    </div>

                                </td>
                                <td class="product-price" data-title="Price">{{number_format($book->book->selling_price*$book->quantity, 0, '.',
                                    '.')}} VNĐ</td>
                                <td class="product-remove">
                                    <a class="remove" href="#" aria-label="Remove this item">×</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </form>
                <div class="cart_totals" style="margin-bottom: 30px; margin-top: 30px">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="proceed-to-checkout">
                                <a class="btn btn-brand pill" href="#">Thanh toán</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="woocommerce">
                <h3 class="text-center">Không có sản phẩm nào.</h3>
            </div>
            @endif
        </div>
    </section>

</div>
