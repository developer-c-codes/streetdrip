<x-app-layout>
     
    
     <div class="h-screen overflow-auto flex">

      <nav class="bg-gray-800 p-6">
        <ul class="h-full bg-gray-800">
            <li class="text-white p-4  border-gray-700 hover:bg-gray-700 rounded"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="text-white p-4  border-gray-700  hover:bg-gray-700 rounded"><a href="#">All Product</a></li>
            <li class="text-white p-4  border-gray-700  hover:bg-gray-700 rounded"><a href="{{ route('product.index') }}">Add Product</a></li>
            <li class="text-white p-4  border-gray-700  hover:bg-gray-700 rounded"><a href="{{ route('home') }}">Frontend</a></li>
            <li class="text-white p-4  border-gray-700  hover:bg-gray-700 rounded"><a href="#">Payment</a></li>
            <li class="text-white p-4  border-gray-700  hover:bg-gray-700 rounded"><a href="#">Statistics</a></li>
            <li class="text-white p-4  border-gray-700  hover:bg-gray-700 rounded"><a href="#">Settings</a></li>
        </ul>
      </nav>
    
   @if(session('success'))
    <div x-data="{ open: true }" x-show="open"
         class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50 text-white">
        <div class="bg-gray-700 rounded-lg p-6 w-96 text-center">
            <h2 class="text-xl font-bold mb-4">Success!</h2>
            <p class="mb-6">{{ session('success') }}</p>
            <button @click="open = false"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
                OK
            </button>
        </div>
    </div>
@endif

    <div class="p-4 flex-1 ml-2 flex flex-col overflow-auto text-white">
      <h1 class="text-white text-4xl font-bold">Products</h1>
      <p class="text-gray-400  font-bold">Manage your product inventory and listings.</p>
      <button class="flex justify-end mt-4"><a href="{{ route('product.index') }}" class="bg-blue-600 hover:bg-blue-700 text-whitew px-4 py-2 rounded">+ Add New Product</a></button>
      
      <table class="border border-gray-700 w-full mt-6">
        <thead class="bg-gray-800">
          <tr>
            <th class="p-2 border border-gray-700">Product Name</th>
            <th class="p-2 border border-gray-700">Price</th>
            <th class="p-2 border border-gray-700">Stock</th>
            <th class="p-2 border border-gray-700">Size</th>
            <th class="p-2 border border-gray-700">Color</th>
            <th class="p-2 border border-gray-700">Edit</th>
            <th class="p-2 border border-gray-700">Delete</th>
          </tr>
        </thead> 

        <tbody class="bg-gray-800">
        @foreach($products as $product)
          <tr class="border-t border-gray-700 text-center hover:bg-gray-700">
            <td clas="p-4 border  border-gray-700">{{ $product->p_name }}</td>
            <td clas="p-4 border  border-gray-700">{{ number_format($product->price, 2)}}</td>
            <td clas="p-4 border  border-gray-700">{{ $product->stock }}</td>
            <td clas="p-4 border  border-gray-700">{{ $product->size }}</td>
            <td clas="p-4 border  border-gray-700">{{ $product->color }}</td>
            <td clas="p-4 border  border-gray-700"><a href={{ route('product.edit', $product->id) }} class="text-blue-500">Edit</a></td>
            <td clas="p-4 border  border-gray-700">
              <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-500">Delete</button>
              </form>
            </td>
           </tr> 
          @endforeach
        </tbody>
      </table>
    </div>
     
</x-app-layout>