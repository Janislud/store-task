<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout Details</title>
</head>
<body>
    <section id="checkout">
        <div class="container">
            <h2>Checkout - Details</h2>
            <form action="{{ route('checkout.storeDetails') }}" method="POST">
                @csrf
                <div>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div>
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" name="first_name" required>
                </div>
                <div>
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name" required>
                </div>
                <div>
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address" required>
                </div>
                <div>
                    <label for="city">City</label>
                    <input type="text" id="city" name="city" required>
                </div>
                <div>
                    <label for="postal_code">Postal Code</label>
                    <input type="text" id="postal_code" name="postal_code" required>
                </div>
                <div>
                    <label for="country">Country</label>
                    <input type="text" id="country" name="country" required>
                </div>
                <div>
                    <button type="submit">Next: Shipping</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
