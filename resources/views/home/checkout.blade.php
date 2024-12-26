<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - LBS MERCH</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-grey-800">
    <div class="bg-grey-800">
    <div class="w-full max-w-3xl mx-auto p-8">
        <div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-md border dark:border-gray-700">
            <h1 class="text-2xl font-bold text-gray-800 dark:text-white mb-4">Checkout - LBS MERCH</h1>

            <!-- Customer Details -->
            <div class="mb-6">
                <h2 class="text-xl font-semibold text-gray-700 dark:text-white mb-2">Detail Pelanggan</h2>
                <div class="grid grid-cols-1 gap-4">
                    <div>
                        <label for="name" class="block text-gray-700 dark:text-white mb-1">Nama Lengkap</label>
                        <input type="text" id="name" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none" placeholder="Nama Lengkap" required>
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700 dark:text-white mb-1">Email</label>
                        <input type="email" id="email" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none" placeholder="Email" required>
                    </div>
                    <div>
                        <label for="phone" class="block text-gray-700 dark:text-white mb-1">Nomor Telepon</label>
                        <input type="tel" id="phone" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none" placeholder="Nomor Telepon" required>
                    </div>
                </div>
            </div>

            <!-- Product Details -->
            <div class="mb-6">
                <h2 class="text-xl font-semibold text-gray-700 dark:text-white mb-2">Detail Pembelian</h2>
                    <div class="mt-4">
                        <label for="product" class="block text-gray-700 dark:text-white mb-1">Produk</label>
                        <select id="product" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none" required>
                            <option value="" disabled selected>Pilih Produk</option>
                            @foreach ($data as $item)
                            <option value="{{ $item->title }}">{{ $item->title }} - Rp {{ number_format($item->harga, 0, ',', '.') }}</option>
                            @endforeach
                        </select>
                    </div>
                <div class="mt-4">
                    <label for="productSize" class="block text-gray-700 dark:text-white mb-1">Ukuran Produk</label>
                    <select id="productSize" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none" required>
                        <option value="">Pilih...</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                        <option value="XXL">XXL</option>
                    </select>
                </div>
            </div>

            <!-- Shipping Address -->
            <div class="mb-6">
                <h2 class="text-xl font-semibold text-gray-700 dark:text-white mb-2">Detail Pengiriman</h2>
                <div class="mt-4">
                    <label for="address" class="block text-gray-700 dark:text-white mb-1">Alamat Pengiriman</label>
                    <input type="text" id="address" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none" placeholder="Alamat Pengiriman" required>
                </div>
                <div class="mt-4">
                    <label for="city" class="block text-gray-700 dark:text-white mb-1">Kota</label>
                    <input type="text" id="city" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none" placeholder="Kota" required>
                </div>
                <div class="mt-4">
                    <label for="postalCode" class="block text-gray-700 dark:text-white mb-1">Kode Pos</label>
                    <input type="text" id="postalCode" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none" placeholder="Kode Pos" required>
                </div>
            </div>

            <!-- Payment Information -->
            <div class="mb-6">
                <h2 class="text-xl font-semibold text-gray-700 dark:text-white mb-2">Metode Pembayaran</h2>
                <div class="mt-4">
                    <label for="paymentMethod" class="block text-gray-700 dark:text-white mb-1">Pilih Metode Pembayaran</label>
                    <select id="paymentMethod" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none" required>
                        <option value="">Pilih...</option>
                        <option value="eWallet">E-Wallet</option>
                        <option value="bankTransfer">Transfer Bank</option>
                        <option value="cod">Cash on Delivery</option>
                    </select>
                </div>
                <div id="eWalletInfo" class="mt-4" style="display:none;">
                    <div class="mt-4">
                        <label for="eWalletProvider" class="block text-gray-700 dark:text-white mb-1">Pilih E-Wallet</label>
                        <select id="eWalletProvider" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                            <option value="">Pilih...</option>
                            <option value="gopay">GoPay</option>
                            <option value="ovo">OVO</option>
                            <option value="dana">Dana</option>
                        </select>
                    </div>
                    <div class="mt-4">
                        <label for="eWalletNumber" class="block text-gray-700 dark:text-white mb-1">Nomor E-Wallet</label>
                        <input type="text" id="eWalletNumber" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none" placeholder="Nomor E-Wallet">
                    </div>
                </div>
            </div>

            <!-- Buttons -->
            <div class="mt-8 flex justify-between">
                <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-700 dark:bg-gray-600 dark:text-white dark:hover:bg-gray-900" onclick="window.location.href='index';">Back</button>
                <button type="submit" class="bg-teal-500 text-white px-4 py-2 rounded-lg hover:bg-teal-700 dark:bg-teal-600 dark:text-white dark:hover:bg-teal-900">Kirim</button>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('paymentMethod').addEventListener('change', function () {
            var paymentMethod = this.value;
            if (paymentMethod === 'eWallet') {
                document.getElementById('eWalletInfo').style.display = 'block';
            } else {
                document.getElementById('eWalletInfo').style.display = 'none';
            }
        });
    </script>
    </div>
</body>

</html>
