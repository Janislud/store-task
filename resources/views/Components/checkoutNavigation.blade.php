<div class="stages__navigation">
        <p><a class="stages__navigation_completed" href="{{ route('cart.view') }}">Cart</a></p>
        <p><a class="stages__navigation_{{$stageIndex == 1 ? 'current' : 'completed'}}" href="{{ route('checkoutStages.stageDetails') }}" >Details</a></p>
        <p><a class="stages__navigation_{{$stageIndex == 2 ? 'current' : ($stageIndex < 2 ? 'future' : 'completed')}}" href="{{ route('checkoutStages.stageShipping') }}">Shipping</a></p>
        <p><a class="stages__navigation_{{$stageIndex == 3 ? 'current' : ($stageIndex < 3 ? 'future' : 'completed')}}" href="{{ route('checkoutStages.stagePayment') }}">Payment</a></p>
</div>
