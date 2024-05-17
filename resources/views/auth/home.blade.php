@extends('header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #home-filter__bt {
            background-color: white;
            font-size: 15px;
        }
        #btnArrange {
            font-size: 15px;
            background-color: white;
        }
        #btnArrangePri {
            font-size: 15px;
        }
        .select-input {
            top: 4px;
          
        }
        .select-input__list{
            margin-top: 5px;
            width: 98%;
        }
    </style>
</head>
<body>
@section('content')
<!-- CONTAINER -->
<div class="app__container">
    <div class="grid">
        <div class="grid__row ">
            <div class="grid__column-12 advertisement">
                <div class="adver_main">
                    <div class="img_main">
                        <img src="/img/img_auth/quancao1.webp" alt="" id="main_img_Advertisement" />
                    </div>
                    <div class="img_Item">
                        <img src="/img/img_auth/main-2.png" alt="" class="item_img_Advertisement" />
                    </div>
                    <div class="img_Item">
                        <img src="/img/img_auth/main3.jpg" alt="" class="item_img_Advertisement" />
                    </div>
                </div>
                <div class="adver_item">
                    <div class="item_img">
                        <img src="/img/img_auth/quangcao3.webp" alt="" class="img_Advertisement" />
                    </div>
                    <div class="item_img">
                        <img src="/img/img_auth/quangcao4.webp" alt="" class="img_Advertisement" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid">
        <div class="grid__row app__contents">
            <!-- CATEGORY -->
            <div class="gird__column-2">
                <nav class="category">
                    <h3 class="category__heading">
                        Danh mục
                    </h3>
                    <ul class="category-list">
                        @foreach($categories as $category)
                        <li class="category-item ">
                            <a href="{{ route('home.show' ,$category->category_id )}}"
                                class="category-item__link">{{ $category->category_name }}</a>
                        </li>
                        @endforeach
                    </ul>
                </nav>
            </div>

            <!-- CATEGORY -->

            <div class="grid__column-10">

                <div class="home-filter">
                    <span class="home-filter-title">Sắp xếp theo</span>
                    <form action="{{ route('user.arrangeIndexUserCustomer') }}" method="post">
                        @csrf
                        <input name="customerUserId" value="<?php !empty($_SESSION['user_id']) ? $_SESSION['user_id'] : null ?>" type="hidden">

                        <button name="oldest" type="submit" id="btnArrange" class="home-filter__btn btn btnArrangeOldest">Cũ nhất</button>
                        <button name="newest" type="submit" id="btnArrangePri" class="home-filter__btn btn btn--primary btnArrangeNewest">Mới nhất</button>
                        <button  name="bestselling" type="submit" id="btnArrange" class="home-filter__btn btn btnArrangeBestselling">Bán chạy</button>


                        <div class="select-input">
                            <span class="home-filter__label" for="">Giá</span>
                            <i class="search-icon fa-solid fa-angle-down"></i>

                            <!-- SELECT-INPUT-LIST -->
                            <ul id="select-input__list" class="select-input__list">
                                <li id="select-input__item" class="select-input__item">
                                    <button id="btn-sellect-priceASC" name="priceASC" type="submit">Cao Đến
                                        Thấp</button>
                                </li>
                                <li id="select-input__item" class="select-input__item">
                                    <button id="btn-sellect-priceDESC" name="priceDESC" type="submit">Thấp Đến
                                        Cao</button>
                                </li>
                            </ul>
                        </div>
                    </form>

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
                        @foreach($products as $product)
                        <!-- PRODUCT ITEM -->
                        <div class="grid__column-2-4">
                            <form class="formProductDetail" method="post"
                                action="{{ route('user.detailIndexCustomerUser')}}">
                                @csrf
                                <input name="productId" value="{{$product->id}}" type="hidden">
                                <div class="product-item">
                                    <div class="product-item__img"
                                        style="background-image: url({{('img/img_auth/' . $product->img)}});">
                                    </div>
                                    <input name="customerUserId" value="<?php !empty($_SESSION['user_id']) ? $_SESSION['user_id'] : null ?>" type="hidden">
                                    <input name="productId" value="{{$product->id}}" type="hidden">
                                    <h4 class="product-item__name">{{$product->product_name}}</h4>  
                                    <div class="product-item__price">
                                        <span class="product-item__price_old">1.200.000đ</span>
                                        <span class="product-item__price_current">{{$product->price}}</span>
                                    </div>
                                    <div class="product-item__action">
                                        <span class="product-item_like product-item_liked">
                                            <i class="product-item_like-icon-empty fa-regular fa-heart"></i>
                                            <i class="product-item_liked-icon-fill fa-solid fa-heart"></i>
                                        </span>
                                        <div class="product-item__rating">
                                            <i class="product-item__star--gold fa-solid fa-star"></i>
                                            <i class="product-item__star--gold fa-solid fa-star"></i>
                                            <i class="product-item__star--gold fa-solid fa-star"></i>
                                            <i class="product-item__star--gold fa-solid fa-star"></i>
                                            <i class=" fa-solid fa-star"></i>
                                        </div>
                                        <span class="product-item__sold">
                                            <span
                                                class="product-item__star--sold-quantity">{{$product->quantity}}</span>
                                            Đã bán
                                        </span>
                                    </div>
                                    <div class="product-item__origin">
                                        <span class="product-item__brand">Whoo</span>
                                        <span
                                            class="product-item__origin-name">{{$product->category->category_name}}</span>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- PAGINATION -->
                <ul class="pagination home__product-pagination">
                    <li class="pagination-item">
                        <a href="{{ $products->previousPageUrl()}}" class="pagination-item__link">
                            <i class="pagination-item__icon fa-solid fa-angle-left"></i>
                        </a>
                    </li>
                    <!-- <li class="pagination-item pagination-item--active">
                        <a href="" class="pagination-item__link">0</a>
                    </li> -->
                    @foreach (range(1, $pages) as $page)
                    <li class="pagination-item">
                    <a href="{{ route('user.viewProductPage', ['page' => $page]) }}" class="pagination-item__link">{{ $page }}</a>
                    </li>
                    @endforeach
                    <li class="pagination-item">
                        <a href="{{ $products->nextPageUrl()}}" class="pagination-item__link">
                            <i class="pagination-item__icon fa-solid fa-angle-right"></i>
                        </a>
                    </li>

                </ul>
                <!-- PAGINATION -->

            </div>
        </div>
    </div>
</div>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var productDetailForms = document.querySelectorAll(".formProductDetail");

    productDetailForms.forEach(function(form) {
        var productDetailImg = form.querySelector(".product-item__img");

        productDetailImg.addEventListener("click", function() {
            form.submit();
        });
    });
});


</script>

@endsection
</body>
</html>
