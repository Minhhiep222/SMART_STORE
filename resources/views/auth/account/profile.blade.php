@extends('auth.account.header')

@section('content_profile')
<div class="grid__column-10">
    <div class="home_profile">
        <div class="title__home-profile">
            <div class="title__home-profile-name">Hồ sơ của tôi</div>
            <div class="title__home-profile-auth">Quản lý thông tin hồ sơ để bảo mật tài khoản</div>
        </div>
        <div class="grid__row">
            <div class="grid__column-8">
                <div class="home__profile--info">
                    <form action="" class="form_profile">
                        <div class="home__profile-item">
                            <label for="">Họ Tên </label>
                            <input type="text" value="{{$customerUser->name}}">
                        </div>
                        <div class="home__profile-item">
                            <label for="">Tên tài khoản</label>
                            <input type="text" value="{{$customerUser->username}}">
                        </div>
                        <div class="home__profile-item">
                            <label for="">Email</label>
                            <input type="text" value="{{$customerUser->email}}">
                        </div>
                        <div class="home__profile-item">
                            <label for="">Số điện thoại</label>
                            <input type="text" value="{{$customerUser->phone}}">
                        </div>
                        <div class="home__profile-item">
                            <label for="">Địa chỉ</label>
                            <input type="text" value="{{$customerUser->address}}">
                        </div>
                        <div class="home__profile-item">
                            <label for="">Giới tính</label>
                            <div class="check__sex">
                                <div class="check check__sex-female">
                                    <label for="">Nam</label>
                                    <input name="sex" type="radio" {{ $customerUser->sex == 'Nam' ? 'checked' : '' }} >
                                </div>
                                <div class="check check__sex-male">
                                    <label for="">Nữ</label>
                                    <input name="sex" type="radio" {{ $customerUser->sex == 'Nữ' ? 'checked' : '' }}>
                                </div>
                                <div class="check check__sex-dif">
                                    <label for="">Khác</label>
                                    <input name="sex" type="radio" {{ $customerUser->sex == 'khác' ? 'checked' : '' }}>
                                </div>
                            </div>
                        </div>
                        <div class="home__profile-item">
                            <label for="">Ngày sinh</label>
                            <div class="input__DOB">
                                <input id="year" placeholder="2000" type="text" value="{{$year}}">
                                <input placeholder="02" type="text" value="{{$month}}">
                                <input placeholder="06" type="text" value="{{$day}}">
                            </div>
                        </div>

                        <div class="btn__save">
                            <button class="btn save">Lưu</button>
                        </div>

                    </form>
                </div>
            </div>
            <div class="grid__column-4">
                <div class="profile__edit">
                    <div class="home__profile-edit">
                        <div class="home__profile-edit-img">
                            <img  onerror="this.src='/img/img_auth/user.png'" src="{{$customerUser->img}}" alt="" class="img_edit">
                        </div>
                    </div>
                    <div class="home__btn-edit">
                        <input type="file" id="getImg" style="display : none;">
                        <button class="btn" onclick="document.getElementById('getImg').click()"> chọn ảnh
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>
 
</script>