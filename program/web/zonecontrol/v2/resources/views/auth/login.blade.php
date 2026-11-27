<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bejelentkezés | ZoneControl</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<style>

:root {
    --bs-body-bg: #fbfaf6;
    --bs-body-color: #223b33;
    --bs-primary: #214f40;
    --bs-primary-rgb: 33, 79, 64;
    --bs-success: #214f40;
    --bs-success-rgb: 33, 79, 64;
    --bs-link-color: #214f40;
    --bs-link-hover-color: #193f33;
}

body {
    min-width: 320px;
}

.login-hero {
    height: calc(100vh - 2rem);
    min-height: 340px;
    background:
        linear-gradient(180deg, rgba(14, 33, 28, .15) 0%, transparent 36%, rgba(9, 25, 21, .78) 100%),
        url("https://images.unsplash.com/photo-1613490493576-7fde63acd811?auto=format&fit=crop&w=1400&q=85") center / cover;
}

.login-content {
    min-height: calc(100vh - 2rem);
}

.font-serif {
    font-family: Georgia, "Times New Roman", serif;
    }

.btn-success {
    --bs-btn-bg: #214f40;
    --bs-btn-border-color: #214f40;
    --bs-btn-hover-bg: #193f33;
    --bs-btn-hover-border-color: #193f33;
    --bs-btn-active-bg: #193f33;
    --bs-btn-active-border-color: #193f33;
}

@media (max-width: 991.98px) {
    .login-hero {
        height: 42vh;
    }

    .login-content {
        min-height: 58vh;
        }
}

@media (max-width: 575.98px) {
    .login-hero {
        height: 310px;
        min-height: 310px;
    }

    .login-content {
        min-height: 560px;
        }
    }

</style>
</head>
<body>
<main class="container-fluid min-vh-100 p-2 p-sm-3">
    <div class="row g-3">
        <section class="col-12 col-lg-6">
            <div class="login-hero position-relative overflow-hidden rounded-4">
                <a class="position-absolute top-0 start-0 m-4 text-white text-decoration-none" href="{{ url('/') }}" aria-label="ZoneControl főoldal">
                    <span class="d-block fs-2 font-serif lh-1">ZoneControl</span>
                    <span class="d-block mt-2 small fw-semibold text-uppercase">Élményekre hangolva</span>
                </a>

                <div class="position-absolute bottom-0 start-0 end-0 m-4 mb-5 text-white">
                    <p class="mb-2 small fw-semibold text-uppercase">Egy kicsit távolabb a hétköznapoktól</p>
                    <h1 class="mb-3 display-5 lh-1 font-serif">Egy különleges hely.<br>Csak neked.</h1>
                    <p class="mb-0 small">Különleges szállások, meghitt búvóhelyek és városi élmények – találd meg a kedvenced.</p>
                </div>

                <span class="position-absolute bottom-0 end-0 m-4 small text-white">01 / 03</span>
            </div>
        </section>

        <section class="col-12 col-lg-6">
            <div class="login-content d-flex flex-column p-3 p-md-4 p-xl-5">
                <p class="mb-0 text-end small text-secondary">
                    Még nincs fiókod?
                    <a class="ms-1 link-success link-underline-opacity-0 fw-semibold" href="{{ route('register') }}">Regisztráció</a>
                </p>

                <div class="row flex-grow-1 align-items-center justify-content-center">
                    <div class="col-12 col-xl-9">
                        <p class="mb-2 small fw-semibold text-uppercase text-success">Vár a következő utazásod</p>
                        <h2 class="mb-1 display-6 font-serif">Üdv újra!</h2>
                        <p class="mb-4 small text-secondary">Lépj be, és találd meg a következő úti célodat.</p>

                        <form action="{{ url('/') }}" method="get">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label small fw-semibold">E-mail-cím</label>
                                <input
                                    id="email"
                                    type="email"
                                    class="form-control py-2 @error('email') is-invalid @enderror"
                                    placeholder="nev@pelda.hu"
                                    autocomplete="off"
                                    required
                                    name="email" 
                                    value="{{ old('email') }}"
                                    autofocus
                                >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label small fw-semibold">Jelszó</label>
                                <div class="input-group">
                                    <input
                                        id="password"
                                        type="password"
                                        class="form-control py-2 @error('password') is-invalid @enderror"
                                        name="password"
                                        placeholder="Add meg a jelszavad"
                                        autocomplete="off"
                                        required
                                    >

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    <button class="btn btn-outline-success py-2" type="button">Megjelenítés</button>
                                </div>
                            </div>

                            <div class="mb-4 d-flex flex-wrap justify-content-between align-items-center gap-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember">
                                    <label class="form-check-label small text-secondary" for="remember">Maradjak bejelentkezve</label>
                                </div>
                                @if (Route::has('password.request'))
                                    <a class="small link-success link-underline-opacity-0 fw-semibold" href="{{ route('password.request') }}">Elfelejtetted a jelszavad?</a>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-success w-100 py-2">Bejelentkezés</button>
                            <p class="mt-3 mb-0 small text-center text-secondary">A következő élményed egy foglalásra vár.</p>
                        </form>
                    </div>
                </div>

                <footer class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2 pt-4 small text-secondary">
                    <span>© {{ date('Y') }} ZoneControl</span>
                    <nav class="d-flex gap-3" aria-label="További információk">
                        <a class="link-secondary link-underline-opacity-0" href="#">Adatvédelem</a>
                        <a class="link-secondary link-underline-opacity-0" href="#">Feltételek</a>
                        <a class="link-secondary link-underline-opacity-0" href="#">Segítség</a>
                    </nav>
                </footer>
            </div>
        </section>
    </div>
</main>
</body>
</html>