@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb" class="mb-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-decoration-none">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('products') }}" class="text-decoration-none">Daftar Produk</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $snack->name }}</li>
    </ol>
</nav>

<div class="row justify-content-center">
    <div class="col-md-9">
        <div class="card shadow-sm border-0 rounded-4 overflow-hidden bg-white">
            <div class="row g-0">
                <div class="col-md-5 bg-light d-flex align-items-center justify-content-center p-3">
                    <img src="{{ asset('assets/images/' . $snack->image) }}" class="img-fluid rounded-3 w-100 shadow-sm" alt="{{ $snack->name }}" style="max-height: 350px; object-fit: cover;">
                </div>
                <div class="col-md-7">
                    <div class="card-body p-4 p-md-5 d-flex flex-column h-100">
                        <div class="mb-2">
                            <span class="badge bg-primary px-3 py-2 rounded-pill fs-6">Rasa: {{ $snack->flavor }}</span>
                        </div>
                        <h2 class="fw-bold text-dark mb-3">{{ $snack->name }}</h2>
                        <div class="mb-3">
                            <span class="text-danger fw-bold fs-3">Rp {{ number_format($snack->price, 0, ',', '.') }}</span>
                        </div>
                        <ul class="list-unstyled text-muted small mb-4 border-top border-bottom py-3">
                            <li class="mb-2"><strong>Berat Bersih:</strong> {{ $snack->weight }}</li>
                        </ul>
                        <div class="mb-4">
                            <h6 class="fw-bold text-dark">Deskripsi Produk:</h6>
                            <p class="text-muted mb-0" style="line-height: 1.6;">{{ $snack->description }}</p>
                        </div>
                        <div class="mt-auto pt-3">
                            <a href="{{ route('products') }}" class="btn btn-outline-secondary rounded-pill px-4 fw-bold w-100">&larr; Kembali ke Daftar Produk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection