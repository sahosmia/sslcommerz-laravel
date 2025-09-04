<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Payment</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-sm">
        <h1 class="text-2xl font-bold mb-6 text-center">Make Payment</h1>

        <form action="{{ route('sslc.pay') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="amount" class="block text-gray-700 font-semibold mb-2">Amount</label>
                <input type="text" id="amount" name="amount" value="100" readonly class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-200 cursor-not-allowed">
            </div>

            <div class="mb-6">
                <label for="product" class="block text-gray-700 font-semibold mb-2">Product</label>
                <input type="text" id="product" name="product" value="Demo Product" readonly class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-200 cursor-not-allowed">
            </div>

            <button type="submit" class="w-full bg-green-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-green-700 transition duration-300">
                Pay with SSLCommerz
            </button>
        </form>

        @if(session('error'))
            <p class="text-red-500 text-sm mt-4 text-center">{{ session('error') }}</p>
        @endif
    </div>
</body>
</html>
