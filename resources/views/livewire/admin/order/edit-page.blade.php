<div>
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{route('orders')}}">Orders</a></li>
                            <li class="breadcrumb-item active">Invoice</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Invoice</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <!-- Invoice Logo-->
                        <div class="clearfix">
                            <div class="float-start mb-3">
                                <img src="assets/images/logo-light.png" alt="" height="18">
                            </div>
                            <div class="float-end">
                                <h4 class="m-0 d-print-none">Invoice</h4>
                            </div>
                        </div>

                        <!-- Invoice Detail-->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="float-end mt-3">
                                    <p><b>Hello, Cooper Hobson</b></p>
                                    <p class="text-muted font-13">Please find below a cost-breakdown for the recent work
                                        completed. Please make payment at your earliest convenience, and do not hesitate
                                        to contact me with any questions.</p>
                                </div>

                            </div><!-- end col -->
                            <div class="col-sm-4 offset-sm-2">
                                <div class="mt-3 float-sm-end">
                                    <p class="font-13"><strong>Order Date: </strong> &nbsp;&nbsp;&nbsp;
                                        {{$order->created_at->format('d')}}-{{$order->created_at->format('m')}},
                                        {{$order->created_at->format('Y')}}</span> <small class="text-muted"
                                            id="invoice-time">{{$order->created_at->format('g:i A')}}</small></p>
                                    <p class="font-13"><strong>Order Status: </strong> <span
                                            class="badge bg-success float-end">{{$order->status}}</span></p>
                                    <p class="font-13"><strong>Stacking Number: </strong> <span
                                            class="float-end">#{{$order->tracking_number}}</span></p>
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row mt-4">
                            <div class="col-sm-4">
                                <h6>Billing Address</h6>
                                <address>
                                    {{$order->address}}
                                </address>
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table mt-4">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Item</th>
                                                <th>Quantity</th>
                                                <th>Purchase Price</th>
                                                <th class="text-end">Total</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($orderBooks as $key => $book)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>
                                                    <b>{{$book->book->book_name}}</b>                                                    
                                                </td>
                                                <td>{{$book->quantity}}</td>
                                                <td>{{number_format($book->purchase_price, 0, '.',
                                                    '.')}} VND</td>
                                                <td class="text-end">{{number_format($book->purchase_price*$book->quantity, 0, '.',
                                                    '.')}} VND</td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="float-end mt-3 mt-sm-0">
                                    <h3>{{number_format($total, 0, '.',
                                        '.')}} VND</h3>
                                </div>
                                <div class="clearfix"></div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->
                        <form wire:submit.prevent="updateOrder">
                            <div>
                            <select wire:model="status" style="border: none">
                                <option value="pedding">PENDDING</option>
                                <option value="accepted">ACCEPTED</option>
                                <option value="in_delivery">IN  DELIVERY</option>
                                <option value="success">SUCCESS</option>
                                <option value="cancel">CANCEL</option>
                                <option value="refund">REFUND</option>
                            </select>
                        </div>
                        <div class="d-print-none mt-4">
                            <div class="text-end">
                                <button type="submit" class="btn btn-info">Update</button>
                            </div>
                        </div>
                        </form>
                        
                        <!-- end buttons -->

                    </div> <!-- end card-body-->
                </div> <!-- end card -->
            </div> <!-- end col-->
        </div>
        <!-- end row -->

    </div> <!-- container -->
</div>