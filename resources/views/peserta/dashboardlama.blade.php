@extends('layouts.app')

@section('title', 'User Dashboard')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">User Dashboard</h3>
                </div>
                @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        <a href="/user/edit">
            <div class="alert alert-primary">Klik Disini untuk ganti password</div>
        </a>
        @endif
        @if (session('berhasil'))
        <div class="alert alert-success">{{ session('berhasil') }}</div>
            

    @endif
                <div class="card-body">
                    <div class="text-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-person-circle text-primary" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                        <h4 class="mt-3">Welcome, {{ Auth::guard('web')->user()->name }}!</h4>
                        <p class="text-muted">You are logged in as a regular user</p>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="card h-100 border-primary">
                                <div class="card-body">
                                    <h5 class="card-title">Your Profile</h5>
                                    <p class="card-text">nik: {{ Auth::guard('web')->user()->nik }}</p>
                                    <p class="card-text">nama: {{ Auth::guard('web')->user()->nama }}</p>
                                    <p class="card-text">Email: {{ Auth::guard('web')->user()->email }}</p>
                                    <p class="card-text">tanggalLahir: {{ Auth::guard('web')->user()->tanggalLahir }}</p>
                                    <p class="card-text">whatsapp: {{ Auth::guard('web')->user()->whatsapp }}</p>
                                    <p class="card-text">provinsi: {{ Auth::guard('web')->user()->provinsiWIlayah->name }}</p>
                                    <p class="card-text">kota: {{ Auth::guard('web')->user()->kota }}</p>
                                    <p class="card-text">kecamatan: {{ Auth::guard('web')->user()->kecamatan }}</p>
                                    <p class="card-text">desa: {{ Auth::guard('web')->user()->desa }}</p>
                                    <p class="card-text">rt_rw: {{ Auth::guard('web')->user()->rt_rw }}</p>
                                    <p class="card-text">alamat: {{ Auth::guard('web')->user()->alamat }}</p>
                                    <p class="card-text">Account created: {{ Auth::guard('web')->user()->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="card h-100 border-primary">
                                <div class="card-body">
                                    <h5 class="card-title">Quick Actions</h5>
                                    <a href="/" class="btn btn-outline-primary d-block mb-2">Back to Home</a>
                                    <a href="/user/edit" class="btn btn-outline-warning d-block mb-2">Ganti Password</a>
                                    <a href="/user/progress" class="btn btn-outline-secondary d-block mb-2">Progress Lomba</a>
                                    <a href="/sertifikat" class="btn btn-outline-success d-block mb-2">Sertifikat</a>
                                    <form action="/user/logout" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger w-100">Logout</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection