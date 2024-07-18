<div class="order">
    <div class="order__content">
        <div class="order__items">
            @foreach($cart as $id => $details)
                <div class="order__item">
                    <img src="{{ $details['photo'] }}" alt="{{ $details['name'] }}" class="order__item-photo" width="100">
                    <div>
                        <p class="order__text">{{ $details['name'] }}</p>
                        <p class="order__bold">{{ $details['quantity'] }}</p>
                        <p class="order__bold">${{ $details['price'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- SALABOT CEĻU --}}
        {{-- <form action="{{ route('apply.coupon') }}" method="POST"> --}}
            {{-- @csrf --}}
        <div class="order__coupon">
            <input class="order__coupon-input" name="coupon_code" type="text" placeholder="Coupon code">
            <button class="order__coupon-addBtn" type="submit">Add code</button>
        </div>
        {{-- </form> --}}
        
        <div class="order__data">
            <div>
                <p class="order__text">Shipping </p>

                @if($shippingMethod == 'standard')
                    <p class="order__bold">Standard Shipping - Free</p>
                @elseif($shippingMethod == 'express')
                    <p class="order__bold">Express Shipping - $10.00</p>
                @else
                    <p class="order__bold">Calculated at the next step</p>
                @endif
            </div>
        </div>
        <div class="order__total">
            <p class="order__text">Total</p>
            <p class="order__bold">${{ array_sum(array_map(fn($item) => $item['quantity'] * $item['price'], $cart)) + ($shippingCost ?? 0) }}</p>
        </div>
    </div>
</div>
