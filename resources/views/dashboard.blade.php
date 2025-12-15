<x-app-layout>


     <div class=" flex">

      <nav class="bg-gray-800 p-6">
        <ul class="full bg-gray-800">
            <li class="text-white p-4  border-gray-700 hover:bg-gray-700 rounded"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="text-white p-4  border-gray-700  hover:bg-gray-700 rounded"><a href="{{ route('product.listproduct') }}">All Product</a></li>
            <li class="text-white p-4  border-gray-700  hover:bg-gray-700 rounded"><a href="{{ route('product.index') }}">Add Product</a></li>
            <li class="text-white p-4  border-gray-700  hover:bg-gray-700 rounded"><a href="{{ route('home') }}">Frontend</a></li>
            <li class="text-white p-4  border-gray-700  hover:bg-gray-700 rounded"><a href="#">Payment</a></li>
            <li class="text-white p-4  border-gray-700  hover:bg-gray-700 rounded"><a href="#">Statistics</a></li>
            <li class="text-white p-4  border-gray-700  hover:bg-gray-700 rounded"><a href="#">Messages</a></li>
            <li class="text-white p-4  border-gray-700  hover:bg-gray-700 rounded"><a href="#">Users</a></li>
            <li class="text-white p-4  border-gray-700  hover:bg-gray-700 rounded"><a href="#">Settings</a></li>
        </ul>
      </nav>
    
    <main class="p-6 flex-1">
      <h1 class="text-white text-3xl font-bold">Dashboard Overview</h1>
      <p class="text-gray-400  font-bold mt-2">Welcome back! Here's what's happening with your business today.</p>
  
      <div class="flex gap-4 p-4 mt-4">
  
        <div class="p-6 bg-gray-700 rounded-lg">
          <p class="text-gray-300 text-sm">Total Products</p>
          <h1 class="text-white text-xl text-center">{{ $totalProducts }}</h1>
        </div>

        <div class="p-6 bg-gray-700 rounded-lg">
          <p class="text-gray-300 text-sm">Total Stock</p>
          <h1 class="text-white text-xl text-center">{{ $totalStock }}</h1>
        </div>

      </div>
    </main>

  </div>
</x-app-layout>
