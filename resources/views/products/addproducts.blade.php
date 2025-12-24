<x-app-layout>
     
    
     <div class="h-screen overflow-auto flex">

      <nav class="bg-gray-800 p-6">
        <ul class="h-full bg-gray-800">
            <li class="text-white p-4  border-gray-700 hover:bg-gray-700 rounded"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="text-white p-4  border-gray-700  hover:bg-gray-700 rounded"><a href="{{ route('product.listproduct') }}">All Product</a></li>
            <li class="text-white p-4  border-gray-700  hover:bg-gray-700 rounded"><a href="{{ route('product.index') }}">Add Product</a></li>
            <li class="text-white p-4  border-gray-700  hover:bg-gray-700 rounded"><a href="{{ route('home') }}">Frontend</a></li>
            <li class="text-white p-4  border-gray-700  hover:bg-gray-700 rounded"><a href="#">Payment</a></li>
            <li class="text-white p-4  border-gray-700  hover:bg-gray-700 rounded"><a href="#">Statistics</a></li>
            <li class="text-white p-4  border-gray-700  hover:bg-gray-700 rounded"><a href="#">Settings</a></li>
        </ul>
      </nav>

      <div class="p-6 flex-1  flex flex-col overflow-auto text-white">
      <h1 class="text-white text-3xl font-bold">Add New Product</h1>
      <p class="text-gray-400  font-bold">Create a new product and add it to your inventory.</p>
  
      <form action="{{ route('product.store')}}"  class="mt-6 bg-gray-800 rounded"   method="POST"  enctype="multipart/form-data">
           @csrf
              <div class="p-6">
                <label class="text-white">Product Name</label><br>
                <input type="text" name="p_name" class="w-full rounded bg-gray-800 text-white"   placeholder="Enter Product Name"><br><br> 
             
                <label class="text-white">Price</label><br>
                <input type="number" name="price" class="w-full rounded bg-gray-800  text-white" min="0"  placeholder="Amount in stock" min="0"><br><br>  

                <label class="text-white">Stock</label><br>
                <input type="number" name="stock" class="w-full rounded bg-gray-800  text-white" min="0"><br><br>  

                <label class="text-white">Size</label><br>
                <input type="text" name="size" class="w-full rounded bg-gray-800  text-white"   placeholder="product size"><br><br>  

                <label class="text-white">Color</label><br>
                <input type="text" name="color" class="w-full rounded bg-gray-800  text-white"   placeholder="Product Color"><br><br>  
              
                <label class="text-white">Image</label><br>
                <input type="file" name="image" class="w-full rounded bg-gray-800  text-white"   placeholder="Product Color"><br><br>  

                <button type="submit" class="rounded text-white bg-blue-500 p-2">Save Product</button>
                <br><br>
                <button type="reset" class="rounded text-white bg-red-500 p-2 justify-end flex ">Cancel</button>
            </div>
                
      </form>

    </div>
     
</x-app-layout>