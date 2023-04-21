<div>
    <section class="sub-header shop-detail-1">
        <img class="rellax bg-overlay" src="client/images/sub-header/w.jpg" alt="">
        <div class="overlay-call-to-action"></div>
        <h3 class="heading-style-3">Giỏ hàng</h3>
    </section>
    <section class="boxed-sm" style="margin-top: 30px">
        <div class="container">
            @if ($cartBooks->count() > 0)
            <div class="woocommerce">
                <form class="woocommerce-cart-form">
                    <table class="woocommerce-cart-table">
                        <thead style="background-color: #97AE76; color:white">
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
                                    <img style="height: 70px; width: 70px" src="{{$book->book->book_img}}"
                                        alt="product-thumbnail">
                                </td>


                                <td class="product-name" data-title="Product">
                                    <a class="product-name" href="">{{$book->book->book_name}}</a>
                                </td>

                                <td class="product-weight" data-title="Weight">
                                    {{number_format($book->book->selling_price, 0,
                                    '.',
                                    '.')}} VNĐ</td>

                                <td>
                                    <div class="quantity">
                                        <a style="background-color: #97AE76" wire:click="decQuantity({{$book->book->id}})" class="quantity__minus"><span>-</span></a>
                                        <input name="quantity" readonly type="text" class="quantity__input" value="{{$book->quantity}}">
                                        <a style="background-color: #97AE76" wire:click="incQuantity({{$book->book->id}})" class="quantity__plus"><span>+</span></a>
                                    </div>
                                </td>

                                <td class="product-price" data-title="Price">
                                    {{number_format($book->book->selling_price*$book->quantity, 0, '.',
                                    '.')}} VNĐ</td>

                                <td class="product-remove">
                                    <span wire:loading.remove
                                        wire:click.prevent="deleteCartProduct({{$book->book->id}})">
                                        <a style="cursor: pointer" class="remove" aria-label="Remove this item">×</a>
                                    </span>

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
                                <a class="btn btn-brand pill" href="{{route('checkout')}}">Thanh toán</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="woocommerce" style="margin-bottom: 30px">
                <h3 class="text-center">Không có sản phẩm nào.</h3>
            </div>
            @endif
        </div>
    </section>
</div>

@section('styles')
<style>
    .quantity {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0;
    }

    .quantity__minus,
    .quantity__plus {
        display: block;
        width: 22px;
        height: 23px;
        margin: 0;
        background: #dee0ee;
        text-decoration: none;
        text-align: center;
        line-height: 23px;
        cursor: pointer;
    }

    .quantity__minus:hover,
    .quantity__plus:hover {
        background: #575b71;
        color: #fff;
    }

    .quantity__minus {
        border-radius: 3px 0 0 3px;
    }

    .quantity__plus {
        border-radius: 0 3px 3px 0;
    }

    .quantity__input {
        width: 32px;
        height: 19px;
        margin: 0;
        padding: 0;
        text-align: center;
        border-top: 2px solid #dee0ee;
        border-bottom: 2px solid #dee0ee;
        border-left: 1px solid #dee0ee;
        border-right: 2px solid #dee0ee;
        background: #fff;
        color: #8184a1;
    }

    .quantity__minus:link,
    .quantity__plus:link {
        color: #8184a1;
    }

    .quantity__minus:visited,
    .quantity__plus:visited {
        color: #fff;
    }
</style>
@endsection
