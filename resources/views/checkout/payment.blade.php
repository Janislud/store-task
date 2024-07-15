<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout Payment</title>
</head>
<body>
    <section id="checkout">
        <div class="container">
            <h2>Checkout - Payment</h2>
            <form action="{{ route('checkout.storePayment') }}" method="POST">
                @csrf
                <div>
                    <label for="card_number">Card Number</label>
                    <input type="text" id="card_number" name="card_number" required>
                </div>
                <div>
                    <label for="holder_name">Holder Name</label>
                    <input type="text" id="holder_name" name="holder_name" required>
                </div>
                <div>
                    <label for="expiration">Expiration (MM/YY)</label>
                    <input type="text" id="expiration" name="expiration" required>
                </div>
                <div>
                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" name="cvv" required>
                </div>
                <div>
                    <button type="submit">Pay Now</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
