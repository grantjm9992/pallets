@include('header')
<section class="hero-wrap hero-wrap-3 js-fullheight" style="background-image: url('{{asset('images/pallet_delivery.jpg')}}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Pricing <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">Order summary</h1>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid p-md-4">
    <div class="row">
        <div class="col-md-8 m-auto">
            <h2>Order summary</h2>
            <div class="card no-padding no-border">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                {{ $product->name }}
                            </td>
                            <td>
                                &pound; {{ $product->price }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-6 pt-3">
            <h2>Collection details</h2>
            <div class="card no-padding no-border">
                <table class="table table-striped mb-0">
                    <tbody>
                    <tr>
                        <td>
                            <strong>Name collection:</strong>
                        </td>
                        <td>
                            <span>{{ $order->name_collection }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Company collection:</strong>
                        </td>
                        <td>
                            <span>{{ $order->company_collection }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Address line 1 collection:</strong>
                        </td>
                        <td>
                            <span>{{ $order->address_line_1_collection }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Address line 2 collection:</strong>
                        </td>
                        <td>
                            <span>{{ $order->address_line_2_collection }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>City collection:</strong>
                        </td>
                        <td>
                            <span>{{ $order->city_collection }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>County collection:</strong>
                        </td>
                        <td>
                            <span>{{ $order->county_collection }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Postcode collection:</strong>
                        </td>
                        <td>
                            <span>{{ $order->postcode_collection }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Country collection:</strong>
                        </td>
                        <td>
                            <span>{{ $order->country_collection }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Phone collection:</strong>
                        </td>
                        <td>
                            <span>{{ $order->phone_collection }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Email collection:</strong>
                        </td>
                        <td>
                            <span>{{ $order->email_collection }}</span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-md-6 pt-3">
            <h2>Delivery details</h2>
            <div class="card no-padding no-border">
                <table class="table table-striped mb-0">
                    <tr>
                        <td>
                            <strong>Name delivery:</strong>
                        </td>
                        <td>
                            <span>{{ $order->name_delivery }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Company delivery:</strong>
                        </td>
                        <td>
                            <span>{{ $order->company_delivery }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Address line 1 delivery:</strong>
                        </td>
                        <td>
                            <span>{{ $order->address_line_1_delivery }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Address line 2 delivery:</strong>
                        </td>
                        <td>
                            <span>{{ $order->address_line_2_delivery }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>City delivery:</strong>
                        </td>
                        <td>
                            <span>{{ $order->city_delivery }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>County delivery:</strong>
                        </td>
                        <td>
                            <span>{{ $order->county_delivery }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Postcode delivery:</strong>
                        </td>
                        <td>
                            <span>{{ $order->postcode_delivery }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Country delivery:</strong>
                        </td>
                        <td>
                            <span>{{ $order->country_delivery }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Phone delivery:</strong>
                        </td>
                        <td>
                            <span>{{ $order->phone_delivery }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Email delivery:</strong>
                        </td>
                        <td>
                            <span>{{ $order->email_delivery }}</span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<div id="smart-button-container">
    <div style="text-align: center;">
        <div id="paypal-button-container"></div>
    </div>
</div>
<script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=GBP" data-sdk-integration-source="button-factory"></script>
<script>
    function initPayPalButton() {
        paypal.Buttons({
            style: {
                shape: 'rect',
                color: 'gold',
                layout: 'vertical',
                label: 'paypal',

            },

            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{"amount":{"currency_code":"GBP","value": "{{$product->price}}"}}]
                });
            },

            onApprove: function(data, actions) {
                return actions.order.capture().then(function(orderData) {

                    // Full available details
                    console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

                    // Show a success message within this page, e.g.
                    const element = document.getElementById('paypal-button-container');
                    element.innerHTML = '';
                    element.innerHTML = '<h3>Thank you for your payment!</h3>';

                    // Or go to another URL:  actions.redirect('thank_you.html');

                });
            },

            onError: function(err) {
                console.log(err);
            }
        }).render('#paypal-button-container');
    }
    initPayPalButton();
</script>

@include('footer')
