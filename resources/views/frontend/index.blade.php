<x-frontend-layout>
    <div class=" h-96 p-6 items-center justify-center text-white">
    <section class="hero-section">
        <h1 class="text-4xl text-gray-900">Welcome to StreetDrip </h1><br>
        <p class="text-gray-700 text-2xl"> Your Ultimate Destination for Trendsetting Fashion</p>
    </section>
    
    <div class="mt-4 flex justify-end rounded-lg shadow">
  <button class="flex justify-end mt-4 rounded-lg">
    <a href="{{ route('frontend.cart') }}" 
       class="bg-blue-500  rounded p-2 mb-4  text-gray-100 hover:bg-gray-700">
        Carts
    </a>
  </button>
</div>

    <section class="mt-9 p-6">
        <h1 class="text-gray-900 text-center text-3xl">Our Products</h1>
        <p>Explore our diverse and curated collection of the latest fashion trends and timeless essentials, handpicked to elevate your personal style.</p><br>
        <div class="Seller-div">
            @foreach ($products as $product)
                <div class="bg-gray-200 p-4 rounded-lg text-gray-900 m-4 inline-block ml-4">
                    <h3>{{ $product->p_name }}</h3><br>
                    <p class="text-gray-900 font-bold text-l">Tsh {{ number_format($product->price, 2)}}</p><br>
                    <p>Size: {{ $product->size }}</p><br>
                    <p>Color: {{ $product->color }}</p> 

                    <form action="{{ route('cart.add', $product->id) }}" method="POST">
                        @csrf
                        
                        <button type="submit" class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Add to Cart
                        </button>
                        
                    </form>
                </div>
            @endforeach
        </div>
    </section>
</div>
</x-frontend-layout>