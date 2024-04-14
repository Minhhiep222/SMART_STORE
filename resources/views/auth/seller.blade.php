@extends('header')

@section('content')
<div class="app__container">
    <div class="grid">
        <div class="grid__row app__contents_seller ">
            <!-- CATEGORY -->
            <div class="gird__column-2_seller">
                <nav class="category">
                    <ul class="category-list">
                        <li class="category-item category-item--active">
                            <a href="" class="category-item__link">Quản lý đơn hàng</a>
                        </li>
                        <li class="category-item">
                            <a href="" class="category-item__link">Quản lý sản phẩm</a>
                        </li>
                        <li class="category-item">
                            <a href="" class="category-item__link">Quản lý shop</a>
                        </li>
                        <li class="category-item">
                            <a href="" class="category-item__link">Chăm sóc khách hàng</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- CATEGORY -->

            <div class="grid__column-10">
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
                        <!-- PRODUCT ITEM -->
                        <div class="grid__column-product">
                            <table id="customers">
                                <tr>
                                    <th>Tên sản phẩm</th>
                                    <th>Phân loại</th>
                                    <th>Giá</th>
                                    <th>Kho hàng</th>
                                    <th>Doanh số</th>
                                    <th>Thao tác</th>
                                </tr>

                                <tr>
                                    <td class="seller__td-img">
                                        <div class="detail__product-info">
                                            <img src="/img/img_auth/iphone-15.webp" alt="" class="seller-img_product">
                                            <a href="" class="information__product-link">
                                                <span class="seller-name_product">Iphone 13</span>
                                                <span class="seller-description_product">Mô tả chức năng</span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>Điện thoại</td>
                                    <td>25.999.000đ</td>
                                    <td>12</td>
                                    <td>25.999.000đ</td>
                                    <td class="action__product">
                                        <a href="" class="seller__product-edit">Cập nhật</a>
                                        <a href="" class="seller__product-detail">Xem thêm</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="seller__td-img">
                                        <div class="detail__product-info">
                                            <img src="/img/img_auth/iphone-15.webp" alt="" class="seller-img_product">
                                            <a href="" class="information__product-link">
                                                <span class="seller-name_product">Iphone 13</span>
                                                <span class="seller-description_product">Mô tả chức năng</span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>Điện thoại</td>
                                    <td>25.999.000đ</td>
                                    <td>12</td>
                                    <td>25.999.000đ</td>
                                    <td class="action__product">
                                        <a href="" class="seller__product-edit">Cập nhật</a>
                                        <a href="" class="seller__product-detail">Xem thêm</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="seller__td-img">
                                        <div class="detail__product-info">
                                            <img src="/img/img_auth/iphone-15.webp" alt="" class="seller-img_product">
                                            <a href="" class="information__product-link">
                                                <span class="seller-name_product">Iphone 13</span>
                                                <span class="seller-description_product">Mô tả chức năng</span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>Điện thoại</td>
                                    <td>25.999.000đ</td>
                                    <td>12</td>
                                    <td>25.999.000đ</td>
                                    <td class="action__product">
                                        <a href="" class="seller__product-edit">Cập nhật</a>
                                        <a href="" class="seller__product-detail">Xem thêm</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="seller__td-img">
                                        <div class="detail__product-info">
                                            <img src="/img/img_auth/iphone-15.webp" alt="" class="seller-img_product">
                                            <a href="" class="information__product-link">
                                                <span class="seller-name_product">Iphone 13</span>
                                                <span class="seller-description_product">Mô tả chức năng</span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>Điện thoại</td>
                                    <td>25.999.000đ</td>
                                    <td>12</td>
                                    <td>25.999.000đ</td>
                                    <td class="action__product">
                                        <a href="" class="seller__product-edit">Cập nhật</a>
                                        <a href="" class="seller__product-detail">Xem thêm</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="seller__td-img">
                                        <div class="detail__product-info">
                                            <img src="/img/img_auth/iphone-15.webp" alt="" class="seller-img_product">
                                            <a href="" class="information__product-link">
                                                <span class="seller-name_product">Iphone 13</span>
                                                <span class="seller-description_product">Mô tả chức năng</span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>Điện thoại</td>
                                    <td>25.999.000đ</td>
                                    <td>12</td>
                                    <td>25.999.000đ</td>
                                    <td class="action__product">
                                        <a href="" class="seller__product-edit">Cập nhật</a>
                                        <a href="" class="seller__product-detail">Xem thêm</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="seller__td-img">
                                        <div class="detail__product-info">
                                            <img src="/img/img_auth/iphone-15.webp" alt="" class="seller-img_product">
                                            <a href="" class="information__product-link">
                                                <span class="seller-name_product">Iphone 13</span>
                                                <span class="seller-description_product">Mô tả chức năng</span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>Điện thoại</td>
                                    <td>25.999.000đ</td>
                                    <td>12</td>
                                    <td>25.999.000đ</td>
                                    <td class="action__product">
                                        <a href="" class="seller__product-edit">Cập nhật</a>
                                        <a href="" class="seller__product-detail">Xem thêm</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="seller__td-img">
                                        <div class="detail__product-info">
                                            <img src="/img/img_auth/iphone-15.webp" alt="" class="seller-img_product">
                                            <a href="" class="information__product-link">
                                                <span class="seller-name_product">Iphone 13</span>
                                                <span class="seller-description_product">Mô tả chức năng</span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>Điện thoại</td>
                                    <td>25.999.000đ</td>
                                    <td>12</td>
                                    <td>25.999.000đ</td>
                                    <td class="action__product">
                                        <a href="" class="seller__product-edit">Cập nhật</a>
                                        <a href="" class="seller__product-detail">Xem thêm</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="seller__td-img">
                                        <div class="detail__product-info">
                                            <img src="/img/img_auth/iphone-15.webp" alt="" class="seller-img_product">
                                            <a href="" class="information__product-link">
                                                <span class="seller-name_product">Iphone 13</span>
                                                <span class="seller-description_product">Mô tả chức năng</span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>Điện thoại</td>
                                    <td>25.999.000đ</td>
                                    <td>12</td>
                                    <td>25.999.000đ</td>
                                    <td class="action__product">
                                        <a href="" class="seller__product-edit">Cập nhật</a>
                                        <a href="" class="seller__product-detail">Xem thêm</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="seller__td-img">
                                        <div class="detail__product-info">
                                            <img src="/img/img_auth/iphone-15.webp" alt="" class="seller-img_product">
                                            <a href="" class="information__product-link">
                                                <span class="seller-name_product">Iphone 13</span>
                                                <span class="seller-description_product">Mô tả chức năng</span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>Điện thoại</td>
                                    <td>25.999.000đ</td>
                                    <td>12</td>
                                    <td>25.999.000đ</td>
                                    <td class="action__product">
                                        <a href="" class="seller__product-edit">Cập nhật</a>
                                        <a href="" class="seller__product-detail">Xem thêm</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <!-- PRODUCT ITEM -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection