@extends('layouts.app')

@section('content')
<div class="row mb-4 align-items-center">
    <div class="col-md-8">
        <h2 class="fw-bold text-dark mb-1">Daftar Katalog Makanan Kering</h2>
        <p class="text-muted mb-0">Seluruh data produk dikelola secara aman melalui database seeder.</p>
    </div>
    <div class="col-md-4 text-md-end mt-3 mt-md-0">
        <span class="badge bg-primary px-3 py-2 rounded-pill fs-6 shadow-sm">Total Produk: {{ count($snacks) }} Item</span>
    </div>
</div>

<div class="row">
    @foreach($snacks as $snack)
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
            <img src="{{ asset('assets/images/' . $snack->image) }}" class="card-img-top" alt="{{ $snack->name }}" style="height: 200px; object-fit: cover;">
            <div class="card-body d-flex flex-column p-4">
                <span class="badge bg-secondary mb-2 align-self-start">{{ $snack->flavor }}</span>
                <h5 class="card-title fw-bold text-dark">{{ $snack->name }}</h5>
                <p class="card-text text-danger fw-bold fs-5 mb-3">Rp {{ number_format($snack->price, 0, ',', '.') }}</p>
                <a href="{{ route('snack.show', $snack->id) }}" class="btn btn-primary rounded-pill mt-auto fw-bold">Lihat Detail Produk</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection