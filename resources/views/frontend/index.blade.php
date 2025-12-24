<x-frontend-layout>
    
    <!-----  ------------------ Hero Section ------------------------->
      <section class="gap-4 p-3 flex bg-gray-200 justify-center">
        <h3 class="px-4 justify-start flex">Need help? Call us: +255 659 148 967</h3><br>

        <h3 class="font-bold justify-center flex ml-10">20% off of your first order</h3>
    
        <div class="flex justify-end gap-2 ml-7">
        <select name="language" class="ml-8 justify-end rounded-lg shadow py-0.5">
            <option value="english">Eng</option>
            <option value="kiswahili">Swa</option>
        </select><br>
        <select name="curency" class="justify-end flex rounded-lg shadow py-0.5">
            <option value="Tsh">Tsh</option>
            <option value="usd">Usd</option>
        </select>
        </div>
      </section>

    <div class="p-6 items-center justify-center text-white">
    
      <div class="mt-4 flex  justify-center  rounded-lg shadow gap-4">
         <a href="{{ route('home') }}" class="text-gray-800  rounded p-2 mb-2  justify-center font-bold hover:text-gray-400">
           Home
         </a>
         <a href="{{ route('home') }}" class="text-gray-800  rounded p-2 mb-4 justify-center font-bold hover:text-gray-400">
            Products
         </a>
         <a href="{{ route('frontend.cart') }}" class="text-gray-800  rounded p-2 mb-4 justify-center font-bold hover:text-gray-400">
           Carts
         </a>
         <a href="{{ route('register') }}" class="text-gray-800  rounded p-2 mb-4 justify-center font-bold hover:text-gray-400">
           Dashboard
         </a>
       </div>
   
    <section class="hero-section flex">

        <div class="hero-cont mt-12 w-64 flex-1"><br><br>
            <h1 class="text-5xl text-gray-900 font-bold">Your Ultimate Destination <br> for Trendsetting Fashion</h1><br>
            <p class="text-gray-700 text-xl mt-6"> Dive into our exclusive selection of modern and classic pieces <br> designed to inspire. From casual chic to sophisticated statements,<br>  find your perfect outfit for every occasion.</p>

            <div class="mt-4 flex justify-start rounded-lg">
              <button class="flex justify-end mt-4 rounded-lg">
                 <a href="{{ route('home') }}"  class="bg-gray-500  rounded p-2 mb-4  text-gray-100 mx-4 hover:bg-gray-700">
                  Shop now
                </a>
              </button>

            <button class="flex justify-end mt-4 rounded-lg">
                <a href="{{ route('home') }}"  class="bg-gray-500  rounded p-2 mb-4  text-gray-100 mx-4 hover:bg-gray-700">
                Browse Category
                </a>
            </button>
       </div>
        </div>

        <div class="hero-image">
            <img src="{{ asset('img/shoes/rrrrv-removebg-preview.png') }}" class="mt-1">
        </div>
    </section>
    

    <!----   ------------------ Products Section ------------------------->
    <section class="mt-9 p-6">
        <h1 class="text-gray-900 text-center text-4xl font-bold">Our Products</h1>
        <p>Explore our diverse and curated collection of the latest fashion trends and timeless essentials, handpicked to elevate your personal style.</p><br>
        <div class="Seller-div">
            @foreach ($products as $product)
                <div class="bg-gray-200 p-4 rounded-lg text-gray-900 m-4 inline-block ml-4">
                    <img src="{{ asset('img/shoes/rrrrv-removebg-preview.png')}}" class="w-40 mt--3">
                    <h3>{{ $product->p_name }}</h3>
                    <p>Size: {{ $product->size }}</p>
                    <p class="text-gray-900 font-bold text-xl">Tsh {{ number_format($product->price, 2)}}</p>

                    <form action="{{ route('cart.add', $product->id) }}" method="POST">
                        @csrf
                        
                        <button type="submit" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mt-2 ml-2">
                            Add to Cart
                        </button>
                        
                    </form>
                </div>
            @endforeach
        </div>
    </section>


    <!----   ------------------ Flash Sale Section ------------------------->
    <section class="text-center  justify-center flex-1">
        <h1 class="text-bold">Exclusive Flash Sale</h1>
        <p>Don't miss out on our limited-time flash sale! Enjoy unbeatable discounts on select items for the next 24 hours only. Hurry, shop now and save big before it's too late!</p>
    </section>
</div>
</x-frontend-layout>