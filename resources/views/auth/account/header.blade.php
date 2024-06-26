<?php
// Kiểm tra xem session đã được bắt đầu hay chưa
if (session_status() === PHP_SESSION_ACTIVE) {
} else {
    session_start();
}
?>
@extends('header')

@section('content')
<div class="app__container">
    <div class="grid">
        <div class="grid__row app__contents_seller ">
            <!-- CATEGORY -->
            <div class="gird__column-2_seller">
                <div class="home__profile-user">
                    <div class="profile__img-item">
                    <img src="/img/img_auth/{{ $_SESSION['img'] }}" alt="" class="img__profile">
                    </div>
                    <div class="home__profile-info">
                        <div class="home__profile-name">{{$_SESSION['name']}}</div>
                        <div class="home__profile-edit_profile">
                            <i class="fa-solid fa-user-pen"></i>
                            Chỉnh sửa hồ sơ
                        </div>
                    </div>
                </div>
                <nav class="category">
                    <ul class="category-list">
                        <li class="category-item category-item--active">
                            <div href="" class="category-item__list">
                                <div class="title__category">
                                    <span>
                                        <i class="fa-solid fa-user"></i>
                                        Hồ sơ của tôi
                                    </span>
                                    <i class="rotate__dropdown fa-solid fa-chevron-down"></i>
                                </div>
                                <ul class="list-item">
                                    <li class="">
                                        <a href="/account/profile" class="category-item__link">
                                            Chỉnh sửa
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="/account/password" class="category-item__link">
                                            Đổi mật khẩu
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </li>
                        <li class="category-item category-item--active">
                            <a href="{{ route('user.viewUserOrder') }}" class="category-item__link">
                                <div class="title__category">
                                    <span>
                                        <i class="fa-solid fa-user"></i>
                                        Đơn mua
                                    </span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- CATEGORY -->
            @yield('content_profile')
            <!-- <div class="grid__column-10">
                <div class="home_profile">
                    <div class="title__home-profile">
                        <div class="title__home-profile-name">Hồ sơ của tôi</div>
                        <div class="title__home-profile-auth">Quản lý thông tin hồ sơ để bảo mật tài khoản</div>
                    </div>
                    <div class="grid__row">
                        <div class="grid__column-12">
                            <div class="home__profile--info">
                                <form action="" class="form_profile form_profile--password">
                                    <div class="home__profile-item">
                                        <label for="">Mật khẩu hiện tại</label>
                                        <input type="password" value="">
                                    </div>
                                    <div class="home__profile-item">
                                        <label for="">Mật khẩu mới</label>
                                        <input type="text" value="">
                                    </div>
                                    <div class="btn__save">
                                        <button class="btn save">Lưu</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
@endsection