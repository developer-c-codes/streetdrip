<x-frontend-layout>

 <h1 class="text-4xl font-bold mb-6 text-gray-800 p-4">
    My Cart
</h1>

<div class="mt-4 flex justify-end rounded-lg shadow">
  <button class="flex justify-end mt-4 rounded-lg">
    <a href="{{ route('home') }}" 
       class="bg-blue-500  rounded p-2 mb-4  text-gray-100 mx-4 hover:bg-gray-700">
        Continue Shopping
    </a>
  </button>
</div>

<div class="overflow-x-auto bg-white rounded-lg shadow">
    <table class="min-w-full border border-gray-200">
        <thead class="bg-gray-100 text-gray-700">
            <tr>
                <th class="p-4 border text-left">Product</th>
                <th class="p-4 border text-center">Price</th>
                <th class="p-4 border text-center">Qty</th>
                <th class="p-4 border text-center">Total</th>
                <th class="p-4 border text-center">Action</th>
            </tr>
        </thead>

        <tbody class="text-gray-700">
            @php $subtotal = 0; @endphp

            @foreach(session('cart', []) as $id => $item)
                @php
                    $total = $item['price'] * $item['quantity'];
                    $subtotal += $total;
                @endphp
                <tr class="hover:bg-gray-50">
                    <td class="p-4 border font-medium">
                        {{ $item['name'] }}
                    </td>

                    <td class="p-4 border text-center">
                        TZS {{ number_format($item['price']) }}
                    </td>

                    <td class="p-4 border text-center">
                        <form action="{{ route('cart.update') }}" method="POST"
                              class="flex items-center justify-center gap-2">
                            @csrf
                            <input type="hidden" name="id" value="{{ $id }}">
                            <input type="number"
                                   name="quantity"
                                   value="{{ $item['quantity'] }}"
                                   min="1"
                                   class="w-16 border rounded px-2 py-1 text-center">
                            <button
                                class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">
                                Update
                            </button>
                        </form>
                    </td>

                    <td class="p-4 border text-center font-semibold">
                        TZS {{ number_format($total) }}
                    </td>

                    <td class="p-4 border text-center">
                        <form action="{{ route('cart.remove', $id) }}" method="POST">
                            @csrf
                            <button
                                class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">
                                Remove
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="mt-6 flex justify-end">
    <div class="bg-gray-100 p-4 rounded shadow">
        <h3 class="text-lg font-semibold text-gray-800">
            Subtotal:
            <span class="text-black">
                TZS {{ number_format($subtotal) }}
            </span>
        </h3>
    </div>
</div>



</x-frontend-layout>