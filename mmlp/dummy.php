<?php
if (isset($_POST['charge'])) {
    require_once('stripe/init.php');

    \Stripe\Stripe::setApiKey('YOUR_SECRET_API_KEY');
    $card = array(
        'number' => $_POST['card'],
        'name' => $_POST['ccName'],
        'exp_month' => $_POST['month'],
        'exp_year' => $_POST['year'],
        'cvv' => $_POST['cvv']
    );
    $success = null;
    try {
        $c = \Stripe\Charge::create(
            array(
                'amount' => $_POST['amount'],
                'currency' => 'usd',
                'description' => 'PHPLift.net Books Purchased.',
                'card' => $card
            )
        );
        $success = 1;
    } catch (Stripe_CardError $e) {
        $error = $e->getMessage();
    } catch (Stripe_InvalidRequestError $e) {
        // Invalid parameters were supplied to Stripe's API
        $error = $e->getMessage();
    } catch (Stripe_AuthenticationError $e) {
        // Authentication with Stripe's API failed
        $error = $e->getMessage();
    } catch (Stripe_ApiConnectionError $e) {
        // Network communication with Stripe failed
        $error = $e->getMessage();
    } catch (Stripe_Error $e) {
        // Display a very generic error to the user, and maybe send
        // yourself an email
        $error = $e->getMessage();
    } catch (Exception $e) {
        // Something else happened, completely unrelated to Stripe
        $error = $e->getMessage();
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Stripe Payment Gateway Charge Credit Card with PHP">
    <meta name="author" content="Huzoor Bux, PHPLift.net">
    <meta name="generator" content="phplift.net">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container">
        <div class="py-5 text-center">
      
        </div>
        <?php if($success != 1){ ?>
        <div class="alert alert-danger">
            <strong>Error!</strong> <?php echo $error; ?>
        </div>
        <?php }else{ ?>
            <div class="alert alert-success">
                <strong>Success!</strong> Payment Received continue shopping
            </div>
        <?php } ?>
        <!-- <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                    <span class="badge badge-secondary badge-pill">2</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">PHP Book</h6>
                            <small class="text-muted">Learn PHP in 24 Hours or Less</small>
                        </div>
                        <span class="text-muted">$12</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Learning Web Design</h6>
                            <small class="text-muted">A Beginner's Guide to HTML, CSS, JavaScript, and Web Graphics</small>
                        </div>
                        <span class="text-muted">$16</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (USD)</span>
                        <strong>$28</strong>
                    </li>
                </ul>


            </div> -->
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Billing address</h4>
                <form class="needs-validation" novalidate method="post">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                    </div>



                    <div class="mb-3">
                        <label for="email">Email </label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="country">Country</label>
                            <select class="custom-select d-block w-100" id="country" name="country" required>
                                <option value="">Choose...</option>
                                <option>United States</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="state">State</label>
                            <select class="custom-select d-block w-100" id="state" name="state" required>
                                <option value="">Choose...</option>
                                <option>California</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="zip">Zip</label>
                            <input type="text" class="form-control" id="zip" placeholder="" name="zip" required>
                            <div class="invalid-feedback">
                                Zip code required.
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4">


                    <h4 class="mb-3">Payment</h4>

                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                            <label class="custom-control-label" for="credit">Credit card</label>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cc-name">Name on card</label>
                            <input type="text" class="form-control" id="cc-name" name="ccName" placeholder="" required>
                            <small class="text-muted">Full name as displayed on card</small>
                            <div class="invalid-feedback">
                                Name on card is required
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cc-number">Credit card number</label>
                            <input type="text" class="form-control" id="cc-number" name="card" placeholder="" required>
                            <div class="invalid-feedback">
                                Credit card number is required
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="cc-month">Expiration Month</label>
                            <select class="custom-select d-block w-100" id="cc-month" name="month" required>
                                <option value="">Choose...</option>
                                <option value='01'>Janaury</option>
                                <option value='02'>February</option>
                                <option value='03'>March</option>
                                <option value='04'>April</option>
                                <option value='05'>May</option>
                                <option value='06'>June</option>
                                <option value='07'>July</option>
                                <option value='08'>August</option>
                                <option value='09'>September</option>
                                <option value='10'>October</option>
                                <option value='11'>November</option>
                                <option value='12'>December</option>
                            </select>
                            <div class="invalid-feedback">
                                Expiration month required
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="cc-year">Expiration Year</label>
                            <select class="custom-select d-block w-100" id="cc-year" name="year" required>
                                <option value="">Choose...</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                            </select>
                            <div class="invalid-feedback">
                                Expiration year required
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="cc-cvv">CVV</label>
                            <input type="text" class="form-control" id="cc-cvv" name="cvv" placeholder="" required>
                            <div class="invalid-feedback">
                                Security code required
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <input type="hidden" class="form-control" name="amount" value="2800">
                    <button class="btn btn-primary btn-lg btn-block" type="submit" name="charge" value="charge">Checkout</button>
                </form>
            </div>
        </div>
        <h3>Test card numbers</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Number</th>
                    <th>Brand</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="card-number">4242<span></span>4242<span></span>4242<span></span>4242</td>
                    <td>Visa</td>
                </tr>
                <tr>
                    <td class="card-number">4000<span></span>0566<span></span>5566<span></span>5556</td>
                    <td>Visa (debit)</td>
                </tr>
                <tr>
                    <td class="card-number">5555<span></span>5555<span></span>5555<span></span>4444</td>
                    <td>Mastercard</td>
                </tr>
                <tr>
                    <td class="card-number">2223<span></span>0031<span></span>2200<span></span>3222</td>
                    <td>Mastercard (2-series)</td>
                </tr>
                <tr>
                    <td class="card-number">5200<span></span>8282<span></span>8282<span></span>8210</td>
                    <td>Mastercard (debit)</td>
                </tr>
                <tr>
                    <td class="card-number">5105<span></span>1051<span></span>0510<span></span>5100</td>
                    <td>Mastercard (prepaid)</td>
                </tr>
                <tr>
                    <td class="card-number">3782<span></span>822463<span></span>10005</td>
                    <td>American Express</td>
                </tr>
                <tr>
                    <td class="card-number">3714<span></span>496353<span></span>98431</td>
                    <td>American Express</td>
                </tr>
                <tr>
                    <td class="card-number">6011<span></span>1111<span></span>1111<span></span>1117</td>
                    <td>Discover</td>
                </tr>
                <tr>
                    <td class="card-number">6011<span></span>0009<span></span>9013<span></span>9424</td>
                    <td>Discover</td>
                </tr>
                <tr>
                    <td class="card-number">3056<span></span>9300<span></span>0902<span></span>0004</td>
                    <td>Diners Club</td>
                </tr>
                <tr>
                    <td class="card-number">3622<span></span>7206<span></span>2716<span></span>67</td>
                    <td>Diners Club (14 digit card)</td>
                </tr>
                <tr>
                    <td class="card-number">3566<span></span>0020<span></span>2036<span></span>0505</td>
                    <td>JCB</td>
                </tr>
                <tr>
                    <td class="card-number">6200<span></span>0000<span></span>0000<span></span>0005</td>
                    <td>UnionPay</td>
                </tr>
            </tbody>
        </table>
        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">© 2019 PHPLift.net</p>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="form-validation.js"></script>
</body>

</html>