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

                <!-- LogIn form -->
                <div class="auth-form">
                    <div class="auth-form__container">
                        <div class="auth-form__header">
                            <h3 class="auth-form__heading">Đăng nhập</h3>
                            <span class="auth-form__switch-btn">Đăng ký</span>
                        </div>

                        <div class="auth-form__form">
                            <div class="auth-form__group">
                                <input type="text" class="auth-form__input" placeholder="Email">
                            </div>
                            <div class="auth-form__group">
                                <input type="password" class="auth-form__input" placeholder="Password">
                            </div>
                        </div>   

                        <div class="auth-form__aside">
                            <p class="auth-form__help">
                                <a href="" class="auth-form__help-link auth-form__help-forgot">Quên mật khẩu</a>
                                <span class="auth-form__help-separate"></span>
                                <a href="" class="auth-form__help-link">Cần trợ giúp?</a>
                            </p>
                        </div>
                        
                        <div class="auth-form__controls">
                            <button class="btn btn__normal btn__move">TRỞ LẠI</button>
                            <button class="btn btn--primary">ĐĂNG NHẬP</button>
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
                </div>
            </div>
        </div>
</body>
</html>