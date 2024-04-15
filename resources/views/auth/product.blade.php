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
                            <a href="" class="category-item__link">Thông tin cơ bản</a>
                        </li>
                        <li class="category-item">
                            <a href="" class="category-item__link">Thông tin khác</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- CATEGORY -->

            <div class="grid__column-10_product">
                <div class="home-filter">
                    <span class="home-filter-title product-filter-title">Thông tin cơ bản</span>
                </div>
                
                <div class="home__product">
                    <div class="grid__row-product">
                        <!-- PRODUCT ITEM -->
                        <form action="" class="home__product-form">
                            <div class="product__item-form">
                                <label for="">Hình ảnh sản phẩm</label>
                                <button class="btn--textFile" onclick="document.getElementById('getFile').click()">
                                    <svg viewBox="0 0 23 21" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M18.5 0A1.5 1.5 0 0120 1.5V12c-.49-.07-1.01-.07-1.5 0V1.5H2v12.65l3.395-3.408a.75.75 0 01.958-.087l.104.087L7.89 12.18l3.687-5.21a.75.75 0 01.96-.086l.103.087 3.391 3.405c.81.813.433 2.28-.398 3.07A5.235 5.235 0 0014.053 18H2a1.5 1.5 0 01-1.5-1.5v-15A1.5 1.5 0 012 0h16.5z">
                                        </path>
                                        <path
                                            d="M6.5 4.5a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM18.5 14.25a.75.75 0 011.5 0v2.25h2.25a.75.75 0 010 1.5H20v2.25a.75.75 0 01-1.5 0V18h-2.25a.75.75 0 010-1.5h2.25v-2.25z">
                                        </path>
                                    </svg>
                                    <span>Thêm hình ảnh</span>
                                </button>
                                <input class="" type='file' id="getFile" style="display:none" name="img">
                            </div>
                            <div class="product__item-form">
                                <label for="">Tên sản phẩm</label>
                                <input class="product__name-form" type="text" name="name" placeholder="Nhập vào">
                            </div>
                            <div class="product__item-form">
                                <div class="product__item-price">
                                    <label for="">Đơn giá</label>
                                    <input class="product__price-form" type="number" name="price" placeholder="Nhập vào">
                                </div>
                                <div class="product__item-quantity">
                                    <label for="">Số lượng</label>
                                    <input class="product__quantity-form" type="number" name="quantity" placeholder="Nhập vào">
                                </div>
                            </div>
                            <div class="product__item-form">
                                <label for="">Danh mục sản phẩm</label>
                                <div class="product__item-cate">
                                    <input class="product__cate-form" type="text" name="category" readonly placeholder="Chọn danh mục">
                                    <div class="select__cate">
                                        <div class="option__cate">Điện thoại</div>
                                        <div class="option__cate">Laptop</div>
                                        <div class="option__cate">Máy tính bàn</div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__item-form">
                                <label for="">Mô tả sản phẩm</label>
                                <textarea class="product__des-form" type="text" name="des"> </textarea>
                            </div>
                            <div class="home__product-btn">
                                <button class="btn ">Hủy</button>
                                <button class="btn btn--primary">Lưu</button>
                            </div>
                        </form>
                        <!-- PRODUCT ITEM -->
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection