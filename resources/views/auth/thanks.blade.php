@extends('header')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
<link rel="stylesheet" href="/font/fontawesome-free-6.5.1-web/css/all.min.css">
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 600px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    h1 {
        color: #333;
        text-align: center;
    }
    p {
        color: #666;
        font-size: 16px;
        line-height: 1.6;
        text-align: center;
    }
</style>
<div class="app__container">
    <div class="grid">
        <div class="grid__row app__contents_seller ">
            
        <div class="container">
    <h1>Cảm ơn bạn đã mua hàng!</h1>
    <p>Xin chân thành cảm ơn bạn đã mua hàng từ chúng tôi. Đơn hàng của bạn đã được xác nhận và đặt thành công.</p>
    <p>Bạn sẽ nhận được thông tin chi tiết về đơn hàng trong thư điện tử xác nhận.</p>
    <p>Nếu bạn có bất kỳ câu hỏi nào, đừng ngần ngại liên hệ với chúng tôi.</p>
        </div>


            <!-- USER -->

            <div class="grid__column-12">
                <div class="title__home-product">
                    <div class="title__home">Có Thể Bạn Cũng Thích</div>
                </div>

                <div class="home__product">
                    <div class="grid__row">
                        <!-- PRODUCT ITEM -->
                        <div class="grid__column-2-4">
                            <a href="" class="product-item">
                                <div class="product-item__img"
                                    style="background-image: url(/img/img_auth/iphone-15.webp);">
                                </div>
                                <h4 class="product-item__name">Sữa bột Similac 4 900g/lon Dinh Dưỡng 5G, Dinh Dưỡng 600G
                                    Mới</h4>
                                <div class="product-item__price">
                                    <span class="product-item__price_old">1.200.000đ</span>
                                    <span class="product-item__price_current">999.000đ</span>
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
                                        <span class="product-item__star--sold-quantity">88</span>
                                        Đã bán
                                    </span>
                                </div>
                                <div class="product-item__origin">
                                    <span class="product-item__brand">Whoo</span>
                                    <span class="product-item__origin-name">Nhật bản</span>
                                </div>
                            </a>
                        </div>
                        <!-- PRODUCT ITEM -->
                        <!-- PRODUCT ITEM -->
                        <div class="grid__column-2-4">
                            <a href="" class="product-item">
                                <div class="product-item__img"
                                    style="background-image: url(/img/img_auth/iphone-15.webp);">
                                </div>
                                <h4 class="product-item__name">Sữa bột Similac 4 900g/lon Dinh Dưỡng 5G, Dinh Dưỡng 600G
                                    Mới</h4>
                                <div class="product-item__price">
                                    <span class="product-item__price_old">1.200.000đ</span>
                                    <span class="product-item__price_current">999.000đ</span>
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
                                        <span class="product-item__star--sold-quantity">88</span>
                                        Đã bán
                                    </span>
                                </div>
                                <div class="product-item__origin">
                                    <span class="product-item__brand">Whoo</span>
                                    <span class="product-item__origin-name">Nhật bản</span>
                                </div>
                            </a>
                        </div>
                        <!-- PRODUCT ITEM -->
                        <!-- PRODUCT ITEM -->
                        <div class="grid__column-2-4">
                            <a href="" class="product-item">
                                <div class="product-item__img"
                                    style="background-image: url(/img/img_auth/iphone-15.webp);">
                                </div>
                                <h4 class="product-item__name">Sữa bột Similac 4 900g/lon Dinh Dưỡng 5G, Dinh Dưỡng 600G
                                    Mới</h4>
                                <div class="product-item__price">
                                    <span class="product-item__price_old">1.200.000đ</span>
                                    <span class="product-item__price_current">999.000đ</span>
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
                                        <span class="product-item__star--sold-quantity">88</span>
                                        Đã bán
                                    </span>
                                </div>
                                <div class="product-item__origin">
                                    <span class="product-item__brand">Whoo</span>
                                    <span class="product-item__origin-name">Nhật bản</span>
                                </div>
                            </a>
                        </div>
                        <!-- PRODUCT ITEM -->
                        <!-- PRODUCT ITEM -->
                        <div class="grid__column-2-4">
                            <a href="" class="product-item">
                                <div class="product-item__img"
                                style="background-image: url(/img/img_auth/iphone-15.webp);">>
                               
                                </div>
                                <h4 class="product-item__name">Sữa bột Similac 4 900g/lon Dinh Dưỡng 5G, Dinh Dưỡng 600G
                                    Mới</h4>
                                <div class="product-item__price">
                                    <span class="product-item__price_old">1.200.000đ</span>
                                    <span class="product-item__price_current">999.000đ</span>
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
                                        <span class="product-item__star--sold-quantity">88</span>
                                        Đã bán
                                    </span>
                                </div>
                                <div class="product-item__origin">
                                    <span class="product-item__brand">Whoo</span>
                                    <span class="product-item__origin-name">Nhật bản</span>
                                </div>
                            </a>
                        </div>
                        <!-- PRODUCT ITEM -->
                        <!-- PRODUCT ITEM -->
                        <div class="grid__column-2-4">
                            <a href="" class="product-item">
                                <div class="product-item__img"
                                    style="background-image: url(/img/img_auth/iphone-15.webp);">
                                </div>
                                <h4 class="product-item__name">Sữa bột Similac 4 900g/lon Dinh Dưỡng 5G, Dinh Dưỡng 600G
                                    Mới</h4>
                                <div class="product-item__price">
                                    <span class="product-item__price_old">1.200.000đ</span>
                                    <span class="product-item__price_current">999.000đ</span>
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
                                        <span class="product-item__star--sold-quantity">88</span>
                                        Đã bán
                                    </span>
                                </div>
                                <div class="product-item__origin">
                                    <span class="product-item__brand">Whoo</span>
                                    <span class="product-item__origin-name">Nhật bản</span>
                                </div>
                            </a>
                        </div>
                        <!-- PRODUCT ITEM -->
                        <!-- PRODUCT ITEM -->
                        <div class="grid__column-2-4">
                            <a href="" class="product-item">
                                <div class="product-item__img"
                                    style="background-image: url(/img/img_auth/iphone-15.webp);">
                                </div>
                                <h4 class="product-item__name">Sữa bột Similac 4 900g/lon Dinh Dưỡng 5G, Dinh Dưỡng 600G
                                    Mới</h4>
                                <div class="product-item__price">
                                    <span class="product-item__price_old">1.200.000đ</span>
                                    <span class="product-item__price_current">999.000đ</span>
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
                                        <span class="product-item__star--sold-quantity">88</span>
                                        Đã bán
                                    </span>
                                </div>
                                <div class="product-item__origin">
                                    <span class="product-item__brand">Whoo</span>
                                    <span class="product-item__origin-name">Nhật bản</span>
                                </div>
                            </a>
                        </div>
                        <!-- PRODUCT ITEM -->
                        <!-- PRODUCT ITEM -->
                        <div class="grid__column-2-4">
                            <a href="" class="product-item">
                                <div class="product-item__img"
                                    style="background-image: url(/img/img_auth/iphone-15.webp);">
                                </div>
                                <h4 class="product-item__name">Sữa bột Similac 4 900g/lon Dinh Dưỡng 5G, Dinh Dưỡng 600G
                                    Mới</h4>
                                <div class="product-item__price">
                                    <span class="product-item__price_old">1.200.000đ</span>
                                    <span class="product-item__price_current">999.000đ</span>
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
                                        <span class="product-item__star--sold-quantity">88</span>
                                        Đã bán
                                    </span>
                                </div>
                                <div class="product-item__origin">
                                    <span class="product-item__brand">Whoo</span>
                                    <span class="product-item__origin-name">Nhật bản</span>
                                </div>
                            </a>
                        </div>
                        <!-- PRODUCT ITEM -->
                        <!-- PRODUCT ITEM -->
                        <div class="grid__column-2-4">
                            <a href="" class="product-item">
                                <div class="product-item__img"
                                    style="background-image: url(/img/img_auth/iphone-15.webp);">
                                </div>
                                <h4 class="product-item__name">Sữa bột Similac 4 900g/lon Dinh Dưỡng 5G, Dinh Dưỡng 600G
                                    Mới</h4>
                                <div class="product-item__price">
                                    <span class="product-item__price_old">1.200.000đ</span>
                                    <span class="product-item__price_current">999.000đ</span>
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
                                        <span class="product-item__star--sold-quantity">88</span>
                                        Đã bán
                                    </span>
                                </div>
                                <div class="product-item__origin">
                                    <span class="product-item__brand">Whoo</span>
                                    <span class="product-item__origin-name">Nhật bản</span>
                                </div>
                            </a>
                        </div>
                        <!-- PRODUCT ITEM -->
                        <!-- PRODUCT ITEM -->
                        <div class="grid__column-2-4">
                            <a href="" class="product-item">
                                <div class="product-item__img"
                                    style="background-image: url(/img/img_auth/iphone-15.webp);">
                                </div>
                                <h4 class="product-item__name">Sữa bột Similac 4 900g/lon Dinh Dưỡng 5G, Dinh Dưỡng 600G
                                    Mới</h4>
                                <div class="product-item__price">
                                    <span class="product-item__price_old">1.200.000đ</span>
                                    <span class="product-item__price_current">999.000đ</span>
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
                                        <span class="product-item__star--sold-quantity">88</span>
                                        Đã bán
                                    </span>
                                </div>
                                <div class="product-item__origin">
                                    <span class="product-item__brand">Whoo</span>
                                    <span class="product-item__origin-name">Nhật bản</span>
                                </div>
                            </a>
                        </div>
                        <!-- PRODUCT ITEM -->
                        <!-- PRODUCT ITEM -->
                        <div class="grid__column-2-4">
                            <a href="" class="product-item">
                                <div class="product-item__img"
                                    style="background-image: url(/img/img_auth/iphone-15.webp);">
                                </div>
                                <h4 class="product-item__name">Sữa bột Similac 4 900g/lon Dinh Dưỡng 5G, Dinh Dưỡng 600G
                                    Mới</h4>
                                <div class="product-item__price">
                                    <span class="product-item__price_old">1.200.000đ</span>
                                    <span class="product-item__price_current">999.000đ</span>
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
                                        <span class="product-item__star--sold-quantity">88</span>
                                        Đã bán
                                    </span>
                                </div>
                                <div class="product-item__origin">
                                    <span class="product-item__brand">Whoo</span>
                                    <span class="product-item__origin-name">Nhật bản</span>
                                </div>
                            </a>
                        </div>
                        <!-- PRODUCT ITEM -->
                    </div>
                </div>

                <!-- PAGINATION -->
                <ul class="pagination home__product-pagination">
                    <li class="pagination-item">
                        <a href="" class="pagination-item__link">
                            <i class="pagination-item__icon fa-solid fa-angle-left"></i>
                        </a>
                    </li>
                    <li class="pagination-item pagination-item--active">
                        <a href="" class="pagination-item__link">1</a>
                    </li>
                    <li class="pagination-item">
                        <a href="" class="pagination-item__link">2</a>
                    </li>
                    <li class="pagination-item">
                        <a href="" class="pagination-item__link">3</a>
                    </li>
                    <li class="pagination-item">
                        <a href="" class="pagination-item__link">...</a>
                    </li>
                    <li class="pagination-item">
                        <a href="" class="pagination-item__link">10</a>
                    </li>
                    <li class="pagination-item">
                        <a href="" class="pagination-item__link">
                            <i class="pagination-item__icon fa-solid fa-angle-right"></i>
                        </a>
                    </li>

                </ul>
                <!-- PAGINATION -->
            </div>
        </div>
    </div>
</div>


@endsection