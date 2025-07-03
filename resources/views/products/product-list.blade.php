<!DOCTYPE html>

<html lang={{ $app->getLocale() }}>

<head>
    <meta charset="utf-8">
    <title>Productos | {{ env('WEBSITE_TITLE') }}</title>
    @include('partials.header')
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        @include('partials.navbar')
    </div>
    <!-- Navbar End -->
    <div class="container-fluid py-5">
        <div class="container-lg">
            <h1 class="text-center mb-3">Productos</h1>
            <p class="mb-3 pt-3 pb-5">
                Esforzándonos en ofrecerle productos y servicios a la altura y de calidad
                Somos proveedores de Combustibles y Lubricantes de las marcas más reconocidas del mercado.
                En nuestra línea de combustibles y Lubricantes estamos en capacidad de proveer los siguientes productos:
            </p>
            <div class="row g-2">
                @foreach ($productList as $product)
                    <div class="col-sm-6 col-md-4 col-lg-3" style="max-height: 400px;">
                        <div class="card" style="height: 100%;">
                            <div style="width: 100%; height: 300px;">
                                 <img src={{ asset('/storage/' . $product->thumbnail) }} alt="product-img" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->title}}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!---------- JAVASCRIPT ---------->
    @include('partials.footer')
</body>
<footer>
    @include('partials.footer-info')
</footer>

</html>