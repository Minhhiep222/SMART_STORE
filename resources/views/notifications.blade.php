<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Thông báo</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
    .navbar__notify-item {
        background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
    }
</style>
</head>
<body>
<div class="container mt-5">
    <div class="alert alert-info">
        
        <strong>Thông báo mới!</strong> Bạn có một tin nhắn mới từ Smart Store. <a href="#" class="alert-link" data-toggle="modal" data-target="#myModal">Xem chi tiết</a>
    </div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Thông báo chi tiết</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">                          
                          <ul class="navbar__notify-list">
                                        <li class="navbar__notify-item navbar__notify-item--viewed">
                                            <a href="" class="navbar__notify-link">
                                                <span>
                                                    <img src="/img/notify.jpg" alt="" class="navbar__notify-img">
                                                </span>
                                                <div class="navbar__notify-info">
                                                    <span class="navbar__notify-name">Chúc mừng năm mới</span>
                                                    <span class="navbar__notify-description">Mô tả</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="navbar__notify-item navbar__notify-item--viewed">
                                            <a href="" class="navbar__notify-link">
                                                <span>
                                                    <img src="/img/notify.jpg" alt="" class="navbar__notify-img">
                                                </span>
                                                <div class="navbar__notify-info">
                                                    <span class="navbar__notify-name">Chúc mừng năm mới</span>
                                                    <span class="navbar__notify-description">Mô tả</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="navbar__notify-item navbar__notify-item--viewed">
                                            <a href="" class="navbar__notify-link">
                                                <span>
                                                    <img src="/img/notify.jpg" alt="" class="navbar__notify-img">
                                                </span>
                                                <div class="navbar__notify-info">
                                                    <span class="navbar__notify-name">Chúc mừng năm mới Chúc mừng năm mới Chúc mừng năm mới</span>
                                                    <span class="navbar__notify-description">Mô tả Chúc mừng năm mới Chúc mừng năm mới</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                Đây là nội dung chi tiết của thông báo.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
