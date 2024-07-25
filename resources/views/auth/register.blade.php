<x-guest-layout>
    <h2 class="fw-bold mb-5">{{ __('Sign up now') }}</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input type="text" id="form3Example1" class="form-control" />
                        <label class="form-label" for="form3Example1">First name</label>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input type="text" id="form3Example2" class="form-control" />
                        <label class="form-label" for="form3Example2">Last name</label>
                    </div>
                </div>
            </div>
            <div class="form-outline mb-4">
                <input type="email" id="form3Example3" class="form-control" />
                <label class="form-label" for="form3Example3">Email address</label>
            </div>
            <div class="form-outline mb-4">
                <input type="password" id="form3Example4" class="form-control" />
                <label class="form-label" for="form3Example4">Password</label>
            </div>
            <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                <label class="form-check-label" for="form2Example33">Subscribe to our newsletter</label>
            </div>
            <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>
            <div class="text-center">
                <p>or sign up with:</p>
                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fa-brands fa-facebook"></i>
                </button>
                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fa-brands fa-google"></i>
                </button>
                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fa-brands fa-twitter"></i>
                </button>
                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fa-brands fa-github"></i>
                </button>
            </div>
        </form>
    </form>
</x-guest-layout>
