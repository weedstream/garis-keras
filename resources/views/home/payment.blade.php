<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail - {{ $data->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 dark:bg-gray-800 py-8">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 pt-2">
        <div class="flex flex-col md:flex-row -mx-4">
            <!-- Product Image -->
            <div class="md:flex-1 px-4">
                <div class="h-[300px] rounded-lg bg-gray-300 dark:bg-gray-700 mb-4">
                    <img src="{{ asset('img/' . $data->image) }}" alt="{{ $data->title }}" class="w-full h-full object-cover">
                </div>
            </div>

            <!-- Product Info -->
            <div class="md:flex-1 px-4">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">{{ $data->title }} (Ready & Pre Order)</h2>
                <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">

                </p>
                <div class="flex mb-4">
                    <div class="mr-4">
                        <span class="font-bold text-gray-700 dark:text-gray-300">Price:</span>
                        <span class="text-gray-600 dark:text-gray-300">Rp. {{ number_format($data->harga, 2) }}</span> <!-- Assuming you have a price field -->
                    </div>
                    <div>
                        {{-- <span class="font-bold text-gray-700 dark:text-gray-300">Availability:</span> --}}
                    </div>
                </div>
                <div class="flex space-x-4 mt-10">
                    <form action="{{ route('addtocart') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <input type="hidden" name="jumlah" value="1">
                        <button type="submit" class="bg-blue-500 text-white py-2 px-6 rounded-full font-bold hover:bg-blue-700 text-center">Check Out</button>
                    </form>
                    {{-- adding form to go checkout page --}}
                    <form action="{{ route('checkout.detail', $data->id) }}" class="block">
                        @csrf
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <input type="hidden" name="jumlah" value="1">
                        <button type="submit" class="bg-green-500 text-white py-2 px-6 rounded-full font-bold hover:bg-green-700 text-center">Buy Now</button>
                    </form>
                    <a href="https://wa.me/628996667797" target="_blank" class="bg-green-500 text-white py-2 px-6 rounded-full font-bold hover:bg-green-700 text-center">WhatsApp</a>
                    <a href="{{ url()->previous() }}" class="bg-gray-500 text-white py-2 px-6 rounded-full font-bold hover:bg-gray-700 text-center">Back</a>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
