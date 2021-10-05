<x-layouts.mainframe pageTitle="Authentification">
    <div class="card card-login">
        <h3 class="card-header text-center">{{ __("auth.loginNoun") }}</h3>
        <div class="card-body">
            <form method="POST" action="{{ route('login.custom') }}">
                @csrf

                @if (Session::has('error'))
                    <span>{{ Session::get('error') }}</span>
                @endif

                <div class="form-group mb-3">
                    <input type="text" placeholder="{{ ucfirst(__("auth.email")) }}" id="email" class="form-control" name="email" required
                        autofocus value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <div class="form-group mb-3">
                    <input type="password" placeholder="{{ ucfirst(__("auth.password")) }}" id="password" class="form-control" name="password"
                        required>
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <div class="form-group mb-3">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember">&nbsp;{{ __("auth.remember") }}
                        </label>
                    </div>
                </div>

                <div class="d-grid mx-auto">
                    <button type="submit" class="btn btn-dark btn-block">{{ __("auth.loginVerb") }}</button>
                </div>
            </form>

        </div>
    </div>


</x-layouts.mainframe>
