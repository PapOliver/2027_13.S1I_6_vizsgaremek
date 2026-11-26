<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regisztráció | ZoneControl</title>
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

.register-bal {
    height: calc(100vh - 2rem);
    min-height: 340px;
    background:
        linear-gradient(180deg, rgba(14, 33, 28, .15) 0%, transparent 36%, rgba(9, 25, 21, .78) 100%),
        url("https://images.unsplash.com/photo-1613490493576-7fde63acd811?auto=format&fit=crop&w=1400&q=85") center / cover;
}

.register-content {
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
    .register-bal {
        height: 42vh;
    }

    .register-content {
        min-height: 58vh;
    }
}

@media (max-width: 575.98px) {
    .register-bal {
        height: 310px;
        min-height: 310px;
    }

    .register-content {
    min-height: 620px;
    }
}
</style>
</head>
<body>
<main class="container-fluid min-vh-100 p-2 p-sm-3">
    <div class="row g-3">
        <section class="col-12 col-lg-6">
            <div class="register-bal position-relative overflow-hidden rounded-4">
                <a class="position-absolute top-0 start-0 m-4 text-white text-decoration-none" href="{{ url('/') }}" aria-label="ZoneControl főoldal">
                    <span class="d-block fs-2 font-serif lh-1">ZoneControl</span>
                    <span class="d-block mt-2 small fw-semibold text-uppercase">Élményekre hangolva</span>
                </a>

                <div class="position-absolute bottom-0 start-0 end-0 m-4 mb-5 text-white">
                    <p class="mb-2 small fw-semibold text-uppercase">Egy kicsit távolabb a hétköznapoktól</p>
                    <h1 class="mb-3 display-5 lh-1 font-serif">Új élmények.<br>Új történetek.</h1>
                    <p class="mb-0 small">Különleges szállások. Figyelmes részletek.<br>Találj rá a következő nagy élményedre.</p>
                </div>

                <span class="position-absolute bottom-0 end-0 m-4 small text-white">01 / 03</span>
            </div>
        </section>

        <section class="col-12 col-lg-6">
            <div class="register-content d-flex flex-column p-3 p-md-4 p-xl-5">
                <p class="mb-0 text-end small text-secondary">
                    Már van fiókod?
                    <a class="ms-1 link-success link-underline-opacity-0 fw-semibold" href="{{ route('login') }}">Bejelentkezés</a>
                </p>

                <div class="row flex-grow-1 align-items-center justify-content-center">
                    <div class="col-12 col-lg-8">
                        <p class="mb-2 small fw-semibold text-uppercase text-success">Érezd magad otthon</p>
                        <h2 class="mb-1 display-6 font-serif">Indulhat az utazás?</h2>
                        <p class="mb-4 small text-secondary">Hozz létre fiókot, mentsd el a kedvenceidet, és foglald le a következő szállásodat.</p>

                        <form action="{{ url('/') }}" method="get">
                            <div class="mb-3">
                                <label for="name" class="form-label small fw-semibold">Teljes név</label>
                                <input
                                    id="name"
                                    type="text"
                                    class="form-control py-2"
                                    placeholder="Add meg a neved"
                                    autocomplete="off"
                                    required
                                >
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label small fw-semibold">E-mail-cím</label>
                                <input
                                    id="email"
                                    type="email"
                                    class="form-control py-2"
                                    placeholder="nev@pelda.hu"
                                    autocomplete="off"
                                    required
                                >
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label small fw-semibold">Jelszó</label>
                                <div class="input-group">
                                    <input
                                        id="password"
                                        type="password"
                                        class="form-control py-2"
                                        placeholder="Válassz egy jelszót"
                                        autocomplete="off"
                                        required
                                    >
                                    <button class="btn btn-outline-success py-2" type="button" aria-label="Jelszó megjelenítése">Megjelenítés</button>
                                </div>
                            </div>

                            <p class="mb-3 small text-secondary">Legalább 8 karakter legyen.</p>

                            <div class="mb-3">
                                <label for="password-confirm" class="form-label small fw-semibold">Jelszó megerősítése</label>
                                <div class="input-group">
                                    <input
                                        id="password-confirm"
                                        type="password"
                                        class="form-control py-2"
                                        placeholder="Add meg újra a jelszavad"
                                        autocomplete="off"
                                        required
                                    >
                                    <button class="btn btn-outline-success py-2" type="button" aria-label="Jelszó megjelenítése">Megjelenítés</button>
                                </div>
                            </div>

                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="accept-terms" required>
                                <label class="form-check-label small text-secondary" for="accept-terms">
                                    Elfogadom a <a class="link-success link-underline-opacity-0" href="#">felhasználási feltételeket</a> és az
                                    <a class="link-success link-underline-opacity-0" href="#">adatkezelési tájékoztatót</a>.
                                </label>
                            </div>

                            <button type="submit" class="btn btn-success w-100 py-2">Regisztráció</button>
                            <p class="mt-3 mb-0 small text-center text-secondary">Egy gyors regisztráció. Számtalan új élmény.</p>
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
