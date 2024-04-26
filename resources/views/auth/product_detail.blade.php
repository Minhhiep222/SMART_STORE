@extends('header')

@section('content')
<div class="app__container">
    <div class="grid">
        <div class="grid__row app__contents_seller ">
            <!-- CATEGORY -->
            <div class="grid__column-5">
                <div class="product__img-detail">
                    <img class="img__product-detail" src="/img/img_auth/iphone-15.webp"></img>
                </div>
            </div>
            <!-- CATEGORY -->

            <div class="grid__column-7">
                <div class="title_product-detail">
                    <div class="product-detail-name">iPhone 15 Pro Max 512GB Chính Hãng VN/A</div>
                    <div class="product-detail-info">
                        <div class="product-detail-rate">
                            <i class="product-item__star--gold fa-solid fa-star"></i>
                            <i class="product-item__star--gold fa-solid fa-star"></i>
                            <i class="product-item__star--gold fa-solid fa-star"></i>
                            <i class="product-item__star--gold fa-solid fa-star"></i>
                            <i class=" fa-solid fa-star"></i>
                        </div>
                        <div class="product-detail product-detail-Evaluate">Đánh giá</div>
                        <div class="product-detail product-detail-sold">Đã bán</div>
                    </div>
                    <div class="product-detail-cate">Điện thoại</div>
                    <div class="product-detail-price">2.999.000 <span>đ</span></div>
                    <div class="product-detail-des">iPhone 15 là một bước tiến mới trong dòng sản phẩm smartphone của
                        Apple, với nhiều cải tiến đáng chú ý so với các phiên bản trước đó. Thiết kế của iPhone 15 được
                        cải tiến để tối ưu hóa trải nghiệm người dùng, với các đường cong mềm mại và vật liệu chất lượng
                        cao.

                        Màn hình của iPhone 15 được nâng cấp với công nghệ hiển thị tiên tiến, mang lại hình ảnh sắc nét
                        và màu sắc sống động hơn bao giờ hết. Khả năng hiển thị HDR và tỷ lệ tương phản cao giúp người
                        dùng thưởng thức nội dung đa phương tiện với trải nghiệm tuyệt vời.</div>
                    <div class="product-detail-action">
                        <div class="product-detail-quantity">Số lượng</div>
                        <div class="product-detail-quantities">
                            <div class="product-detail-add">
                                <i class="fa-solid fa-plus"></i>
                            </div>
                            <div class="product-detail-number">1</div>
                            <div class="product-detail-sub">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                        </div>
                        <div class="product-detail-sold"><span>30</span>Sản phẩm còn lại</div>
                    </div>
                    <div class="product-detail-button">
                        <div class="btn btn--cart">
                            <i class="fa-solid fa-cart-plus"></i>
                            Thêm vào giỏ hàng
                        </div>
                        <div class="btn btn--primary">Mua ngay</div>
                    </div>

                </div>
            </div>

            <!-- USER -->
            <div class="grid__column-12">
                <div class="info__shop">
                    <img class="info__shop-img" src="/img/user_img.jpg">
                    <div class="info__shop-item">
                        <div class="info__shop-information">
                            <div class="info__shop-name">Nguyễn Minh Hiệp</div>
                            <div class="info__shop-phone">0834983286</div>
                        </div>
                        <div class="info__shop-btn">
                            <button class="btn info__shop-btn__see">
                                <i class="fa-regular fa-eye"></i>
                                Xem shop
                            </button>
                            <button class="btn btn--primary info__shop-btn__chat">
                                Chat shop
                                <i class="fa-regular fa-comment"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- USER -->

            <div class="grid__column-12">
                <div class="title__home-product">
                    <div class="title__home">Gợi ý liên quan</div>
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