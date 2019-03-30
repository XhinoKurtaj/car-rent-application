@include('../partial.header')


<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>


<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="/images/images/img-01.png" alt="IMG">
            </div>

            <form class="login100-form validate-form" enctype="multipart/form-data" action="/home/car" method="POST">
                @CSRF
					<span class="login100-form-title">
						Add Car for rent
					</span>

                <div class="wrap-input100 validate-input" >
                    <input class="input100" type="text" name="model" placeholder="Model">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fas fa-car" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input" >
                    <input class="input100" type="text" name="type" placeholder="Type">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fas fa-car-side" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input" >
                    <input class="input100" type="text" name="engine_size" placeholder="Engine Size">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="icomoon icon-cog-2"></i>
							<i class="fas fa-cogs" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input" >
                    <input class="input100" type="text" name="fuel_economy" placeholder="Fuel Economy">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fas fa-oil-can" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input" >
                    <input class="input100" type="text" name="rent_price" placeholder="Rent Price">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fas fa-dollar-sign" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" name="condition_check" placeholder="Condition Check">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fas fa-align-left" aria-hidden="true"></i>
						</span>
                </div><br>

                <span class="login100-form-title">
                    <i class="fas fa-map-marked-alt"></i>
						Car Location
					</span>


                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" name="parked_latitude" placeholder="Parked Latitude">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fas fa-map-marker-alt" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" name="parked_longitude" placeholder="Parked Longitude">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fas fa-map-marker-alt" aria-hidden="true"></i>
						</span>
                </div>

                <div class="fallback wrap-input100 validate-input">
                    <input multiple="multiple" name="photos[]" type="file">
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Create
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>

<!--===============================================================================================-->
<script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{ asset('vendor/bootstrap/js/popper.js')}}"></script>

<!--===============================================================================================-->
<script src="{{ asset('vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{ asset('vendor/tilt/tilt.jquery.min.js')}}"></script>

<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="js/main.js"></script>


@include('../partial.footer')
