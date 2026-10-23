@extends('layouts.app')

@section('content')
<div class="p-5 mb-4 bg-white rounded-4 shadow-sm border text-center">
    <div class="container-fluid py-3">
        <span class="badge bg-warning text-dark mb-2 px-3 py-2 rounded-pill fw-bold">100% Homemade & Fresh</span>
        <h1 class="display-5 fw-bold mb-3">Selamat Datang di Katalog Makanan Kering</h1>
        <p class="col-md-8 mx-auto fs-4 text-muted">Nikmati berbagai pilihan cemilan dan makanan kering tradisional berkualitas tinggi langsung dari seeder database.</p>
        <a href="{{ route('products') }}" class="btn btn-primary btn-lg mt-2 rounded-pill px-4 fw-bold shadow-sm">Lihat Semua Produk</a>
    </div>
</div>

<h3 class="fw-bold mb-4">Produk Unggulan Kami</h3>
<div class="row">
    @foreach($snacks as $snack)
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
            <img src="{{ asset('assets/images/' . $snack->image) }}" class="card-img-top" alt="{{ $snack->name }}" style="height: 200px; object-fit: cover;">
            <div class="card-body d-flex flex-column p-4">
                <span class="badge bg-secondary mb-2 align-self-start">{{ $snack->flavor }}</span>
                <h5 class="card-title fw-bold">{{ $snack->name }}</h5>
                <p class="card-text text-danger fw-bold fs-5 mb-3">Rp {{ number_format($snack->price, 0, ',', '.') }}</p>
                <a href="{{ route('snack.show', $snack->id) }}" class="btn btn-outline-primary rounded-pill mt-auto fw-bold">Lihat Detail</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection