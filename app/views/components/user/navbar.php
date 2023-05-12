<nav class="navbar navbar-expand-lg bg-transparent fw-medium d-fixed" id="medium">
    <div class="container-fluid grid gap-md-4 ps-4 py-3 py-md-2 ps-md-5">
        <a class="navbar-brand" href="#">
            <img src="<?= URL; ?>/assets/img/bwa.svg" alt="Bootstrap" width="40">
        </a>
        <img src="https://eu.ui-avatars.com/api/?name=Yoga" alt="" width="40" class="rounded-circle d-md-none">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><small>Flash Sale</small></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><small>Kelas</small></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><small>Alur Belajar</small></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><small>Bootcamp</small></a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a class="nav-link" href="#">
                            <button class="btn bg-dark-subtle rounded-5 text-black fw-semibold"><small>Masuk</small></button>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="d-none d-md-flex flex-md-column flex-lg-row gap-md-3 me-5">
                <a class="nav-link" href="#">
                    <button class="btn bg-dark-subtle rounded-5">
                        <i class="bi bi-search"></i>
                    </button>
                </a>
                <a class="nav-link" href="#">
                    <button class="btn bg-dark-subtle rounded-5 text-black fw-semibold">
                        <small>Masuk/Daftar</small>
                    </button>
                </a>
            </div>
        </div>
    </div>
</nav>