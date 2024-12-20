<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">

    <title>
        Warung Adi - Sepatu Sampai Akhirat
    </title>
</head>

<body>

    {{-- Start: Navbar Menu --}}
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <div class="fw-bold fs-4">Warung AdiAR</div>
                <div class="fs-6" style="margin-top: -10px">Sepatu Sampai Akhirat</div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Riwayat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- End: Navbar Menu --}}

    {{-- Start: Content --}}
    <div class="container">
        <h2 class="fw-bold mt-5 mb-0">Daftar Produk Sepatu</h2>
        <p>Produk Sepatu berkualitas dan murah, "Sepatu Sampai Akhirat"</p>
        <div class="row row-cols-1 row-cols-lg-4 align-items-stretch g-4 py-5">
            <div class="col">
                <div class="card shadow" style="width: 18rem;">
                    <img src="{{ asset('assets/image/sepatu-1.jpg') }}" height="200px" width="100%"
                        style="object-fit: cover" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <h5 class="fw-bold">Shimbul Khalid</h5>
                            <span class="badge bg-danger">Disc 99%</span>
                        </div>
                        <div class="my-2">
                            <span class="text-decoration-line-through text-muted">Rp. 1.000.000</span>
                            <span class="fw-bold">Rp. 10.000</span>
                        </div>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of
                            the card's content.
                        </p>
                        <button class="btn btn-primary w-100">Buy</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow" style="width: 18rem;">
                    <img src="{{ asset('assets/image/sepatu-1.jpg') }}" height="200px" width="100%"
                        style="object-fit: cover" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <h5 class="fw-bold">Salaman Khair</h5>
                            <span class="badge bg-danger">Disc 99%</span>
                        </div>
                        <div class="my-2">
                            <span class="text-decoration-line-through text-muted">Rp. 1.000.000</span>
                            <span class="fw-bold">Rp. 10.000</span>
                        </div>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of
                            the card's content.
                        </p>
                        <button class="btn btn-primary w-100">Buy</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow" style="width: 18rem;">
                    <img src="{{ asset('assets/image/sepatu-1.jpg') }}" height="200px" width="100%"
                        style="object-fit: cover" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <h5 class="fw-bold">Salaman Khair</h5>
                            <span class="badge bg-danger">Disc 99%</span>
                        </div>
                        <div class="my-2">
                            <span class="text-decoration-line-through text-muted">Rp. 1.000.000</span>
                            <span class="fw-bold">Rp. 10.000</span>
                        </div>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of
                            the card's content.
                        </p>
                        <button class="btn btn-primary w-100">Buy</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow" style="width: 18rem;">
                    <img src="{{ asset('assets/image/sepatu-1.jpg') }}" height="200px" width="100%"
                        style="object-fit: cover" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <h5 class="fw-bold">Salaman Khair</h5>
                            <span class="badge bg-danger">Disc 99%</span>
                        </div>
                        <div class="my-2">
                            <span class="text-decoration-line-through text-muted">Rp. 1.000.000</span>
                            <span class="fw-bold">Rp. 10.000</span>
                        </div>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of
                            the card's content.
                        </p>
                        <button class="btn btn-primary w-100">Buy</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow" style="width: 18rem;">
                    <img src="{{ asset('assets/image/sepatu-1.jpg') }}" height="200px" width="100%"
                        style="object-fit: cover" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <h5 class="fw-bold">Salaman Khair</h5>
                            <span class="badge bg-danger">Disc 99%</span>
                        </div>
                        <div class="my-2">
                            <span class="text-decoration-line-through text-muted">Rp. 1.000.000</span>
                            <span class="fw-bold">Rp. 10.000</span>
                        </div>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of
                            the card's content.
                        </p>
                        <button class="btn btn-primary w-100">Buy</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End: End Content --}}


    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
