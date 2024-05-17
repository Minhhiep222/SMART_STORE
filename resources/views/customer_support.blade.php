<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chăm sóc khách hàng</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9fafb;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .red-header {
            color: #e53e3e;
            font-size: 2rem;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 12px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        .btn {
            background-color: #6366f1;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #4f52f7;
        }

        .request-item {
            border-left: 3px solid #3b82f6;
            padding-left: 10px;
            margin-bottom: 20px;
            background-color: #f0f4ff;
            border-radius: 6px;
        }

        .response-form {
            background-color: #f0f4ff;
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
        }

        .response-form textarea {
            width: calc(100% - 24px);
            margin-bottom: 10px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            padding: 12px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <h1 class="red-header">Customer Support</h1>
        <form action="{{ route('customer.support.submit_request') }}" method="post">
            @csrf
            <input type="text" id="customer_name" name="customer_name" class="form-control" placeholder="Your Name" required>
            <input type="email" id="customer_email" name="customer_email" class="form-control" placeholder="Your Email" required>
            <textarea id="request_message" name="request_message" rows="4" class="form-control" placeholder="Your Request" required></textarea>
            <button type="submit" class="btn">Submit Request</button>
        </form>
    </div>
<div class="card">
    <h2 class="red-header">Requests</h2>
    @forelse ($requests as $request)
        <div class="request-item">
            <h3>{{ $request->customer_name }}</h3>
            <p>{{ $request->request_message }}</p>
        </div>
    @empty
        <p>No requests found.</p>
    @endforelse
</div>
    <div class="card">
        <h2 class="red-header">Respond to Requests</h2>
        <form action="{{ route('customer.support.send_response') }}" method="post" class="response-form">
            @csrf
            <select name="request_id" id="request_id" class="form-control" required>
                @forelse ($requests as $request)
                    <option value="{{ $request->id }}">{{ $request->customer_name }}</option>
                @empty
                    <option value="" disabled>No requests found</option>
                @endforelse
            </select>
            <textarea id="response_message" name="response_message" rows="4" class="form-control" placeholder="Your Response" required></textarea>
            <button type="submit" class="btn">Send Response</button>
        </form>
    </div>
</div>

</body>
</html>
