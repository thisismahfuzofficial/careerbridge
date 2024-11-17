
<x-app>
    <x-app.header title="Register" />

    <section class="section-b-space pt-0">
        <div class="custom-container">
            <form method="POST" action="{{ route('register') }}" class="auth-form profile-form mt-5">
                @csrf

                <div class="form-group">
                    <label class="form-label mb-2" for="Inputname">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="Inputname"
                        name="name" placeholder="Enter your name" value="{{ old('name') }}" required
                        autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label mb-2" for="Inputemail">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="Inputemail"
                        name="email" placeholder="Enter your email" value="{{ old('email') }}" required
                        autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label mb-2" for="Inputpassword">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                        id="Inputpassword" name="password" placeholder="Enter your Password" required
                        autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label mb-2" for="InputpasswordConfirm">Confirm Password</label>
                    <input type="password" class="form-control" id="InputpasswordConfirm" name="password_confirmation"
                        placeholder="Confirm Password" required autocomplete="new-password">
                </div>

                <button type="submit" class="btn theme-btn w-100 mt-sm-5 mt-4">Submit</button>
            </form>

        </div>
        <div class="text-center mt-3">
             Have an account ? <a href="{{ route('login') }}">Login</a>
        </div>
    </section>
</x-app>
