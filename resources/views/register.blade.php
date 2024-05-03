<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" href="/css/base.css" rel="stylesheet">
    <link type="text/css" href="/css/main.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <!-- modal -->
    <div class="modal">
        <div class="modal__overlay"></div>

        <div class="modal__body">
            <!-- Register form -->
            <form class="auth-form" method="POST" action="{{ route('user.postUser') }}">
                @csrf
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng ký</h3>
                        <span class="auth-form__switch-btn">Đăng nhập</span>
                    </div>

                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" class="auth-form__input" placeholder="Name" name="name">
                        </div>
                        <div class="auth-form__group">
                            <input type="text" class="auth-form__input" placeholder="Email" name="email">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" class="auth-form__input" placeholder="Password" name="password">
                        </div>
                    </div>

                    <div class="auth-form__aside">
                        <p class="auth-form__policy-text">
                            Bằng việc đăng ký, bạn đã đồng ý với Shoppe về
                            <a href="" class="auth-form__text-link">Điều khoản dịch vụ</a>
                            &
                            <a href="" class="auth-form__text-link">Chính xác bảo mật</a>
                        </p>
                    </div>

                    <div class="auth-form__controls">
                        <button type="button" onclick="window.location.href='{{ route('home.index')}}'"
                            class="btn btn__normal btn__move">TRỞ LẠI</button>

                        <button type="submit" class="btn btn--primary">ĐĂNG KÝ</button>
                    </div>
                </div>

                <div class="auth-form__socials">
                    <a href="" class="btn btn__size-s btn--with-icon btn__icon-fb">
                        <i class="auth-form__socials-icon fa-brands fa-square-facebook"></i>
                        <span>Kết nối với Facebook</span>

                    </a>
                    <a href="" class="btn btn__size-s btn--with-icon btn__icon-google">
                        <i class="auth-form__socials-icon fa-brands fa-google"></i>
                        <span>Kết nối với Google</span>

                    </a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>