<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hỗ trợ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        color: #333;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        font-size: 2rem;
        margin-bottom: 20px;
        color: #007bff;
    }

    p {
        font-size: 1rem;
        line-height: 1.6;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    li {
        margin-bottom: 10px;
    }

    form {
        margin-top: 30px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"],
    textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    textarea {
        height: 150px;
        resize: vertical;
    }

    button[type="submit"] {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 1rem;
        transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover {
        background-color: #0056b3;
    }

    .modal-content {
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .modal-header {
        background-color: #007bff;
        color: #fff;
        border-radius: 5px 5px 0 0;
        padding: 15px;
    }

    .modal-title {
        font-size: 1.5rem;
    }

    .modal-body {
        padding: 15px;
    }

    .modal-footer {
        background-color: #f8f9fa;
        border-radius: 0 0 5px 5px;
        padding: 15px;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
        border-radius: 4px;
        padding: 10px 20px;
        color: #fff;
        font-size: 1rem;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }
    </style>
</head>
<body>
    <div class="container">
        <h1>Trang Hỗ Trợ Smart Store</h1>
        <p>Chào mừng bạn đến với trang hỗ trợ của chúng tôi.</p>
        <hr>
        <h2>Câu hỏi thường gặp</h2>
        <p>Dưới đây là một số câu hỏi thường gặp:</p>
        <ul>
            <li>Làm thế nào để đặt hàng?</li>
            <li>Làm thế nào để trả lại hàng?</li>
            <li>Tôi quên mật khẩu, làm thế nào để khôi phục?</li>
        </ul>
        <hr>
        <h2>Liên Hệ Hỗ Trợ</h2>
        <p>Nếu bạn có bất kỳ câu hỏi hoặc yêu cầu hỗ trợ nào, xin vui lòng điền vào biểu mẫu dưới đây:</p>
        <form>
            <div class="form-group">
                <label for="name">Họ và tên:</label>
                <input type="text" class="form-control" id="name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="message">Tin nhắn:</label>
                <textarea class="form-control" id="message" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Gửi</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
        $('form').submit(function(event) {
            event.preventDefault(); 
            var name = $('#name').val();
            var email = $('#email').val();
            var message = $('#message').val();

            if (name == '' || email == '') {
                alert('Vui lòng nhập đầy đủ thông tin Họ và Tên và Email.');
                return;
            }

            if (!validateEmail(email)) {
                alert('Email không hợp lệ.');
                return;
            }

            if (message == '') {
                alert('Vui lòng nhập tin nhắn.');
                return;
            }

            alert('Dữ liệu đã được gửi thành công!');

            $('form')[0].reset();
        });

        function validateEmail(email) {
            var re = /\S+@\S+\.\S+/;
            return re.test(email);
        }
    });
    </script>
</body>
</html>
