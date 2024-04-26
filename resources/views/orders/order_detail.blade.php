@extends('header_cart')

@section('content_cart')
<!-- CONTAINER -->
<div class="app__container payment__cart">
    <div class="grid">
        <div class="grid__row app__contents">
            <div class="grid__column-12">
                <div class="home-filter">
                    <span class="home-filter-title">Sắp xếp theo</span>
                    <button class="home-filter__btn btn">Phổ biến</button>
                    <button class="home-filter__btn btn btn--primary">Mới nhất</button>
                    <button class="home-filter__btn btn">Bán chạy</button>

                    <div class="select-input">
                        <span class="home-filter__label" for="">Giá</span>
                        <i class="search-icon fa-solid fa-angle-down"></i>

                        <!-- SELECT-INPUT-LIST -->
                        <ul class="select-input__list">
                            <li class="select-input__item">
                                <a href="" class="select-input__link">Giá: cao đến thấp</a>
                            </li>
                            <li class="select-input__item">
                                <a href="" class="select-input__link">Giá: thấp đến cao</a>
                            </li>
                        </ul>
                    </div>

                    <div class="home-filter__paginate">
                        <span class="home-filter__page-num">
                            <span class="page-current">1</span>
                            /14
                        </span>

                        <div class="home-filter__page-control">
                            <a href="" class="page-control-link page-control-link-icon-disabled">
                                <i class="page-control-link-icon fa-solid fa-angle-left"></i>
                            </a>
                            <a href="" class="page-control-link">
                                <i class="page-control-link-icon fa-solid fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="home__product">
                    <div class="grid__row">
                        <!-- pRODUCT ITEM -->
                        <div class="grid__column-product_cart">
                            <table class="table__product-cart" id="customers">
                                <tr class="">
                                    <th>Tên sản phẩm</th>
                                    <th>Đơn Giá</th>
                                    <th>Số lượng</th>
                                    <th>Số tiền</th>
                                </tr>
                                @foreach($orders as $order)
                                <tr class="product__cart-item">
                                    <td class="seller__td-img">
                                        <div class="detail__product-info">
                                            <img src="/img/img_auth/{{ $order->product->img }}" alt=""
                                                class="seller-img_product">
                                            <a href="" class="information__product-link">
                                                <span class="seller-name_product">{{ $order->product->name }}</span>
                                                <span
                                                    class="seller-description_product">{{ $order->product->description }}</span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="price__product-cart">{{ $order->product->price }}</span>
                                        <span>đ</span>
                                    </td>
                                    <td>
                                        <div class="quantity__cart">
                                            <div class="number_quantity">{{ $order->quantity }}</div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="total__product-cart">{{ $order->total }}</span>
                                        <span>đ</span>
                                    </td>
                                </tr>
                                @endforeach
                            </table>

                        </div>
                        <!-- pRODUCT ITEM -->
                        <div class="grid payment__cart-item">
                            <div class="action__cart">
                                <div class="payment__cart-btn">
                                    @if($status == "Transporting")
                                    <button onclick="window.location.href='{{ route('orders.updateStatus', $id) }}'"
                                        class="btn btn--primary">Hủy đơn hàng</button>
                                    @else
                                        <button class="btn btn--primary">Mua lại</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>
@endsection