@include('header')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{asset('images/pallet_delivery.jpg')}}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Pricing <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">Enter address details</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-cart px-2 px-md-5">
    <form action="/payment" method="POST">
        @csrf()
        <input hidden name="product_slug" value="{{ $product->slug }}">
        <div class="row">
            <div class="col-12 col-md-6">
                <h2>
                    Collection details
                </h2>
                <div class="container px-4">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputAddress">Name</label>
                            <input type="text" class="form-control" id="name_collection" name="name_collection" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAddress2">Company</label>
                            <input type="text" class="form-control" id="company_collection" name="company_collection" placeholder="">
                        </div>
                        <div class="form-group col-12">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" id="address_line_1_collection" name="address_line_1_collection" placeholder="" required>
                        </div>
                        <div class="form-group col-12">
                            <label for="inputAddress2">Address 2</label>
                            <input type="text" class="form-control" id="address_line_2_collection" name="address_line_2_collection" placeholder="">
                        </div>
                        <div class="form-row w-100">
                            <div class="form-group col-md-6">
                                <label for="inputCity">City</label>
                                <input type="text" class="form-control" id="city_collection" name="city_collection" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputCity">County</label>
                                <input type="text" class="form-control" id="county_collection" name="county_collection" required>
                            </div>
                        </div>
                        <div class="form-row w-100">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Postcode</label>
                                <input type="text" class="form-control" id="postcode_collection" name="postcode_collection" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputCity">Country</label>
                                <input type="text" class="form-control" id="country_collection" name="country_collection" required>
                            </div>
                        </div>
                        <div class="form-row w-100">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Phone number</label>
                                <input type="text" class="form-control" id="phone_collection" name="phone_collection" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputCity">Email address</label>
                                <input type="text" class="form-control" id="email_collection" name="email_collection" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="container px-4">
                    <h2>
                        Delivery details
                    </h2>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputAddress">Name</label>
                            <input type="text" class="form-control" id="name_delivery" name="name_delivery" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAddress2">Company</label>
                            <input type="text" class="form-control" id="company_delivery" name="company_delivery" placeholder="">
                        </div>
                        <div class="form-group col-12">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" id="address_line_1_delivery" name="address_line_1_delivery" placeholder="" required>
                        </div>
                        <div class="form-group col-12">
                            <label for="inputAddress2">Address 2</label>
                            <input type="text" class="form-control" id="address_line_2_delivery" name="address_line_2_delivery" placeholder="">
                        </div>
                        <div class="form-row w-100">
                            <div class="form-group col-md-6">
                                <label for="inputCity">City</label>
                                <input type="text" class="form-control" id="city_delivery" name="city_delivery" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputCity">County</label>
                                <input type="text" class="form-control" id="county_delivery" name="county_delivery" required>
                            </div>
                        </div>
                        <div class="form-row w-100">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Postcode</label>
                                <input type="text" class="form-control" id="postcode_delivery" name="postcode_delivery" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputCity">Country</label>
                                <input type="text" class="form-control" id="country_delivery" name="country_delivery" required>
                            </div>
                        </div>
                        <div class="form-row w-100">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Phone number</label>
                                <input type="text" class="form-control" id="phone_delivery" name="phone_delivery" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputCity">Email address</label>
                                <input type="text" class="form-control" id="email_delivery" name="email_delivery">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" required id="terms_and_conditions" name="terms_and_conditions">
                <label class="form-check-label" for="terms_and_conditions">
                    I accept the <a href="{{ url('/terms') }}" target="_blank">terms and conditions</a>
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Proceed to checkout</button>
    </form>
</section>
@include('footer')
