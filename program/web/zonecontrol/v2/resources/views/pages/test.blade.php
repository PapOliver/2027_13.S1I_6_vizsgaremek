@include('includes.head')

<style>
:root {
    --bs-primary: #3f706b;
    --bs-primary-rgb: 63, 112, 107;
    --bs-body-color: #60706c;
    --bs-body-color-rgb: 96, 112, 108;
    --bs-body-bg: #fbfcfb;
    --bs-body-bg-rgb: 251, 252, 251;
    --bs-secondary-color: #9da9a5;
    --bs-border-color: #e8eeec;
    --bs-secondary-bg: #f8faf9;
    --bs-tertiary-bg: #fbfcfb;
}
.btn-primary {
    --bs-btn-color: var(--bs-white);
    --bs-btn-bg: var(--bs-primary);
    --bs-btn-border-color: var(--bs-primary);
    --bs-btn-hover-color: var(--bs-white);
    --bs-btn-hover-bg: var(--bs-primary);
    --bs-btn-hover-border-color: var(--bs-primary);
    --bs-btn-active-bg: var(--bs-primary);
    --bs-btn-active-border-color: var(--bs-primary);
}
</style>

<header class="bg-white border-bottom shadow-sm">
    <div class="container d-flex align-items-center gap-3 py-3">
        <a class="text-primary text-decoration-none fs-4 me-lg-4" href="/">ZoneControl</a>
        <nav class="text-body-secondary small d-none d-md-flex gap-4">
            <span class="text-primary fw-semibold">Szállodák</span>
            <span>Kedvenceim</span>
            <span>Foglalásaim</span>
            
            @auth
            <span>
            <a href="/profile" class="nav-link">Profile</a>
            </span>
            @endauth
            
        </nav>
        <div class="ms-auto d-flex align-items-center gap-3 text-body-secondary small"><span class="d-none d-md-inline">HU · HUF</span><span class="badge rounded-pill bg-body-secondary text-secondary d-none d-sm-inline">U</span> <a class="btn btn-outline-secondary btn-sm" href="{{ route('login') }}">Saját fiók</a> </div>
    </div>
</header>

<div class="border-bottom d-flex flex-wrap align-items-center justify-content-center gap-2 px-2 py-3 small text-body-secondary">
    <span class="badge rounded-pill bg-primary">1</span><span>Szálloda</span><span class="border-top flex-grow-1 mx-1"></span>
    <span class="badge rounded-pill bg-body-secondary text-secondary">2</span><span class="d-none d-sm-inline">Szoba és szolgáltatások</span><span class="border-top flex-grow-1 mx-1"></span>
    <span class="badge rounded-pill bg-body-secondary text-secondary">3</span><span class="d-none d-sm-inline">Adatok és fizetés</span>
</div>

<main class="container py-4">
    <div class="text-body-secondary small fw-semibold text-uppercase">Az utazás itt kezdődik</div>
    <h1 class="h2 my-2">Találd meg a neked való szállodát.</h1>
    <p class="text-body-secondary small mb-3">Különleges helyek, ahol igazán kikapcsolódhatsz.</p>

    <section class="card shadow-sm mb-3">
        <div class="row g-0 align-items-center p-2">
            <div class="col-6 col-lg p-2 border-end"><span class="d-block text-body-secondary small">Úticél</span><strong class="small">Surrein, Olaszország</strong></div>
            <div class="col-6 col-lg p-2 border-end"><span class="d-block text-body-secondary small">Érkezés</span><strong class="small">2026. dec. 12.</strong></div>
            <div class="col-6 col-lg p-2 border-end"><span class="d-block text-body-secondary small">Távozás</span><strong class="small">2026. dec. 15.</strong></div>
            <div class="col-6 col-lg p-2"><span class="d-block text-body-secondary small">Vendégek</span><strong class="small">2 felnőtt · 1 szoba</strong></div>
            <div class="col-12 col-lg-auto p-2"><button class="btn btn-primary w-100" id="searchButton" type="button">Keresés →</button></div>
        </div>
    </section>

    <section class="row g-3">
        <aside class="col-12 col-lg-3 col-xl-2">
          <div class="card shadow-sm p-3 h-100">
            <h2 class="h5 mb-3">Szűrés</h2>
            <div class="border-bottom pb-3 mb-3">
                <label class="form-label small fw-semibold mb-1" for="priceRange">Ár / éjszaka</label>
                <input class="form-range" id="priceRange" type="range" min="30000" max="300000" step="5000" value="300000">
                <span class="d-block text-body-secondary small">30 000 Ft – <span id="priceValue">300 000 Ft</span></span>
            </div>
            <div class="border-bottom pb-3 mb-3">
                <span class="d-block small fw-semibold mb-2">Szállodai besorolás</span>
                <div class="form-check"><input class="form-check-input rating-filter" id="rating5" type="checkbox" value="5"><label class="form-check-label" for="rating5">5 csillag</label></div>
                <div class="form-check"><input class="form-check-input rating-filter" id="rating4" type="checkbox" value="4"><label class="form-check-label" for="rating4">4 csillag</label></div>
                <div class="form-check"><input class="form-check-input rating-filter" id="rating3" type="checkbox" value="3"><label class="form-check-label" for="rating3">3 csillag</label></div>
            </div>
            <div>
                <span class="d-block small fw-semibold mb-2">Ami fontos neked</span>
                <div class="form-check"><input class="form-check-input amenity-filter" id="amenityPool" type="checkbox" value="Medence"><label class="form-check-label" for="amenityPool">Medence</label></div>
                <div class="form-check"><input class="form-check-input amenity-filter" id="amenityWaterfront" type="checkbox" value="Vízpart"><label class="form-check-label" for="amenityWaterfront">Vízparti szállodák</label></div>
                <div class="form-check"><input class="form-check-input amenity-filter" id="amenityBreakfast" type="checkbox" value="Reggeli"><label class="form-check-label" for="amenityBreakfast">Reggeli elérhető</label></div>
                <div class="form-check"><input class="form-check-input amenity-filter" id="amenityParking" type="checkbox" value="Parkoló"><label class="form-check-label" for="amenityParking">Saját parkoló</label></div>
            </div>
          </div>
        </aside>

        <div class="col-12 col-lg-9 col-xl-10">
            <div class="d-flex align-items-center justify-content-between mb-2"><h2 class="h5 mb-0">Elérhető szállodák</h2><span class="text-body-secondary small">Rendezés: Ajánlott ⌄</span></div>

            <article class="hotel-card card shadow-sm mb-3 overflow-hidden" data-rating="5" data-price="282000" data-amenities="Medence Vízpart Reggeli Parkoló">
              <div class="row g-0 align-items-center">
                <div class="col-12 col-sm-4 col-lg-3"><div class="ratio ratio-4x3"><img class="object-fit-cover" src="https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=500&q=85" alt="Hotel 1"></div></div>
                <div class="col-12 col-sm-5 col-lg-6 p-3"><span class="badge text-bg-light text-primary-emphasis">A mi ajánlatunk</span><h3 class="h5 mt-2">Hotel 1</h3><p class="small text-body-secondary mb-2">Tengerpart · 1,2 km a központtól<br>Medence és napágyak a kertben.</p><div class="small text-body-secondary">Medence · Wellness · Ingyenes wifi</div></div>
                <div class="col-12 col-sm-3 p-3 d-flex flex-column align-items-start align-items-sm-end"><div class="d-flex align-items-center gap-2 mb-2"><span class="small text-body-secondary">Nagyszerű<br>12 értékelés</span><span class="badge bg-primary fs-6">9.6</span></div><span class="small text-body-secondary">140 000 Ft / éjszaka</span><strong class="fs-5 mb-2">282 000 Ft</strong><button class="btn btn-primary btn-sm room-button">Szobák megtekintése →</button></div>
              </div>
            </article>

            <article class="hotel-card card shadow-sm mb-3 overflow-hidden" data-rating="4" data-price="152000" data-amenities="Medence Reggeli Parkoló">
              <div class="row g-0 align-items-center">
                <div class="col-12 col-sm-4 col-lg-3"><div class="ratio ratio-4x3"><img class="object-fit-cover" src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=500&q=85" alt="Hotel 2"></div></div>
                <div class="col-12 col-sm-5 col-lg-6 p-3"><span class="badge text-bg-light text-primary-emphasis">Csendes nyugalom</span><h3 class="h5 mt-2">Hotel 2</h3><p class="small text-body-secondary mb-2">Dombtető · 2,4 km a központtól<br>Dicső kilátás medencével.</p><div class="small text-body-secondary">Medence · Reggeli · Parkoló</div></div>
                <div class="col-12 col-sm-3 p-3 d-flex flex-column align-items-start align-items-sm-end"><div class="d-flex align-items-center gap-2 mb-2"><span class="small text-body-secondary">Nagyszerű<br>54 értékelés</span><span class="badge bg-primary fs-6">9.4</span></div><span class="small text-body-secondary">152 000 Ft / éjszaka</span><strong class="fs-5 mb-2">152 000 Ft</strong><button class="btn btn-primary btn-sm room-button">Szobák megtekintése →</button></div>
              </div>
            </article>

            <article class="hotel-card card shadow-sm mb-3 overflow-hidden" data-rating="3" data-price="92000" data-amenities="Reggeli Vízpart">
              <div class="row g-0 align-items-center">
                <div class="col-12 col-sm-4 col-lg-3"><div class="ratio ratio-4x3"><img class="object-fit-cover" src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=500&q=85" alt="Hotel 3"></div></div>
                <div class="col-12 col-sm-5 col-lg-6 p-3"><span class="badge text-bg-light text-primary-emphasis">A város szívében</span><h3 class="h5 mt-2">Hotel 3</h3><p class="small text-body-secondary mb-2">Óváros · 500 m a központtól<br>Kényelmes, egyedülálló helyszín.</p><div class="small text-body-secondary">Reggeli · Terasz · Ingyenes wifi</div></div>
                <div class="col-12 col-sm-3 p-3 d-flex flex-column align-items-start align-items-sm-end"><div class="d-flex align-items-center gap-2 mb-2"><span class="small text-body-secondary">Nagyszerű<br>31 értékelés</span><span class="badge bg-primary fs-6">9.1</span></div><span class="small text-body-secondary">92 000 Ft / éjszaka</span><strong class="fs-5 mb-2">92 000 Ft</strong><button class="btn btn-primary btn-sm room-button">Szobák megtekintése →</button></div>
              </div>
            </article>
        </div>
    </section>
    <p class="text-center text-body-secondary small mt-3 mb-4" id="filterStatus">Mindent megmutatunk a legnagyobb sűrűséggel.</p>
</main>

<footer class="border-top text-body-secondary small">
    <div class="container py-3 d-flex flex-column flex-sm-row align-items-sm-center gap-2"><span>© 2026 ZoneControl · Élmények hangolva</span><div class="ms-sm-auto d-flex flex-wrap gap-3"><a class="link-secondary text-decoration-none" href="#">Adatvédelem</a><a class="link-secondary text-decoration-none" href="#">Felhasználási feltételek</a><a class="link-secondary text-decoration-none" href="#">Segítség</a></div></div>
</footer>

<script>
const priceRange = document.getElementById('priceRange');
const priceValue = document.getElementById('priceValue');
const cards = [...document.querySelectorAll('.hotel-card')];
const ratingFilters = [...document.querySelectorAll('.rating-filter')];
const amenityFilters = [...document.querySelectorAll('.amenity-filter')];
const status = document.getElementById('filterStatus');

function applyFilters(){
    const max = Number(priceRange.value),
    ratings = ratingFilters.filter(x=>x.checked).map(x=>x.value),
    amenities = amenityFilters.filter(x=>x.checked).map(x=>x.value);
    let visible=0;
    cards.forEach(card=>{
        const priceOk = Number(card.dataset.price)<=max;
        const ratingOk = !ratings.length||ratings.includes(card.dataset.rating);
        const amenityOk = !amenities.length||amenities.every(x=>card.dataset.amenities.includes(x));
        const show = priceOk&&ratingOk&&amenityOk;  card.classList.toggle('d-none',!show);if(show)visible++;
        }
    );
    priceValue.textContent = max.toLocaleString('hu-HU')+' Ft';
    status.textContent = visible?visible+' szálloda található a kiválasztott szűrőkkel.':'Nincs találat a megadott szűrőkkel.';
}

priceRange.addEventListener('input',applyFilters);
ratingFilters.forEach(x=>x.addEventListener('change',applyFilters));
amenityFilters.forEach(x=>x.addEventListener('change',applyFilters));
document.getElementById('searchButton').addEventListener('click',applyFilters);
document.querySelectorAll('.room-button').forEach(button=>button.addEventListener('click',()=>{
    alert(button.closest('.card').querySelector('h3').textContent+' szobaválasztása');
    }
));
</script>

@include('includes.foot')