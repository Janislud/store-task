<div class="stages__navigation">
    @switch ($stageIndex)
        @case(1)
            <p class="stages__navigation_completed">Cart</p>
            <p class="stages__navigation_active">Details</p>
            <p class="stages__navigation_future">Shipping</p>
            <p class="stages__navigation_future">Payment</p>
            @break
        @case(2)
            <p class="stages__navigation_completed">Cart</p>
            <p class="stages__navigation_completed">Details</p>
            <p class="stages__navigation_active">Shipping</p>
            <p class="stages__navigation_future">Payment</p>
            @break
        @case(3)
            <p class="stages__navigation_completed">Cart</p>
            <p class="stages__navigation_completed">Details</p>
            <p class="stages__navigation_completed">Shipping</p>
            <p class="stages__navigation_current">Payment</p>
            @break
        @case(4)
            <p class="stages__navigation_completed">Cart</p>
            <p class="stages__navigation_completed">Details</p>
            <p class="stages__navigation_completed">Shipping</p>
            <p class="stages__navigation_completed">Payment</p>
            <p class="stages__navigation_completed">Success</p>
            @break
    @endswitch
</div>