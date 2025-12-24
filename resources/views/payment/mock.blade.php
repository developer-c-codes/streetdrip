<x-frontend-layout>
<h2>Mock Payment</h2>
<p>Total Amount: {{ $order->total_amount }}</p>

<form method="POST" action="{{ route('payment.process', $order->id) }}">
    @csrf
    <button type="submit">Pay Now (Mock)</button>
</form>
</x-frontend-layout>