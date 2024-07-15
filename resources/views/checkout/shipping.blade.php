<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout Shipping</title>
</head>
<body>
    <section id="checkout">
        <div class="container">
            <h2>Checkout - Shipping</h2>
            <form action="{{ route('checkout.storeShipping') }}" method="POST">
                @csrf
                <div>
                    <label for="shipping_method">Shipping Method</label>
                    <select id="shipping_method" name="shipping_method">
                        <option value="standard">Standard Shipping - Free</option>
                        <option value="express">Express Shipping - $10.00</option>
                    </select>
                </div>
                <div>
                    <button type="submit">Next: Payment</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
