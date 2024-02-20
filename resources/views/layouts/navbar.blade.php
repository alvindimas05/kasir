<nav class="container mx-auto py-3">
    <div class="grid grid-cols-2">
        <h1 class="text-2xl font-bold">Kasir Indomerit</h1>
        <div class="flex justify-end">
            <a href="{{ route('cashier.index') }}" class="text-lg font-bold border-red-500 me-4">Kasir</a>
            <a href="{{ route('product.show') }}" class="text-lg font-bold border-red-500 me-4">Produk</a>
            <a href="{{ route('customer.show') }}" class="text-lg font-bold border-red-500 me-4">Pelanggan</a>
            <a href="{{ route('user.logout') }}" class="text-lg font-bold border-red-500">Logout</a>
        </div>
    </div>
</nav>
