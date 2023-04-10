<div>
    <section class="sub-header shop-detail-1">
        <img class="rellax bg-overlay" src="client/images/sub-header/w.jpg" alt="">
        <div class="overlay-call-to-action"></div>
        <h3 class="heading-style-3">Thanh Toán</h3>
    </section>

    @if ($cartBooks->count() > 0)
    <section class="boxed-sm">
        <div class="container">
            <div class="woocommerce">
                <div class="row" style="margin-top: 30px">
                    <form class="woocommerce-checkout" wire:submit.prevent="placeOrder">
                        <h4>Thông tin</h4>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group organic-form no-radius">
                                    <label>Họ và tên *</label>
                                    <input wire:model="full_name" class="form-control" type="text">

                                    @error('full_name')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                </div>

                            </div>


                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group organic-form no-radius">
                                    <label>Email *</label>
                                    <input wire:model="email" class="form-control" type="email">

                                    @error('email')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group organic-form no-radius">
                                    <label>Số điện thoại *</label>
                                    <input wire:model="phone" class="form-control" type="text">

                                    @error('phone')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group organic-form no-radius">
                                    <label>Địa chỉ *</label>
                                    <input wire:model="address" class="form-control" type="text">

                                    @error('address')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="woocommerce-checkout-review-order" style="margin-bottom: 30px">
                            <h4>Đơn hàng của bạn</h4>
                            <table class="woocommerce-checkout-review-order-table">
                                <thead>
                                    <tr>
                                        <th class="product-name">Sản phẩm</th>
                                        <th class="product-total">Giá mua</th>
                                        <th class="product-total">Tổng cộng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cartBooks as $book)

                                    <tr class="cart_item">
                                        <td class="product-name">{{$book->book->book_name}}
                                            <span class="product-quantity">× {{$book->quantity}}</span>
                                        </td>
                                        <td class="product-total">
                                            <span class="price">{{number_format($book->book->selling_price, 0, '.',
                                                '.')}} VNĐ<span>
                                        </td>
                                        <td class="product-total">
                                            <span class="woocommerce-Price-amount amount">
                                                <span
                                                    class="woocommerce-Price-currencySymbol"></span><strong>{{number_format($book->book->selling_price*$book->quantity,
                                                    0, '.',
                                                    '.')}} VNĐ</strong></span>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>

                                    <tr class="order-total">
                                        <th>Tổng đơn hàng</th>
                                        <td colspan="2">
                                            <strong>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span
                                                        class="woocommerce-Price-currencySymbol"></span>{{number_format($total,
                                                    0, '.',
                                                    '.')}} VNĐ</span>
                                            </strong>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="woocommerce-checkout-payment" style="margin-bottom: 30px">
                            <div class="payment_method_cheque">
                                <div class="radio">
                                    <label>
                                        <input class="input-radio" id="payment_method_cheque" name="payment_method"
                                            value="cheque" checked="checked" type="radio">Thanh toán khi nhận hàng

                                    </label>
                                </div>
                            </div>

                            <div class="form-place-order">
                                <input class="place_order btn btn-brand pill" name="woocommerce_checkout_place_order"
                                    value="ĐẶT HÀNG" type="submit">
                            </div>

                            <div style="margin-bottom: 30px" wire:loading>
                                Đang xử lý...
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @else
    <div class="text-center" style="margin-top: 30px; margin-bottom: 30px">
        <h1>Thêm sản phẩm vào giỏ đi bạn êi</h1>
        <div class="form-">
            <div class="text-center" style="margin-top: 30px; margin-bottom: 30px">
                <a href="{{route('shop')}}"><button class="btn btn-warning">Đi đến cửa hàng lẹ</button></a>
            </div>
        </div>
    </div>
    @endif
</div>
