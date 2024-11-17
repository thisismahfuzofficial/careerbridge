
<x-app>
    <x-app.header title="Login" />
    <section class="section-b-space pt-0">
        <div class="custom-container mt-5">
           
            <form method="POST" action="{{ route('login') }}" class="auth-form profile-form">
                @csrf
            
                <div class="form-group">
                    <label class="form-label mb-2" for="Inputemail">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="Inputemail" name="email" placeholder="Enter your email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            
                <div class="form-group">
                    <label class="form-label mb-2" for="Inputpassword">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="Inputpassword" name="password" placeholder="Enter your Password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            
                <button type="submit" class="btn theme-btn w-100 mt-sm-5 mt-4">Submit</button>
            </form>
            <div class="text-center mt-3">
                Don't have an account yet? <a href="{{route('register')}}" >Register</a>
            </div>
        </div>
    </section>
</x-app>

