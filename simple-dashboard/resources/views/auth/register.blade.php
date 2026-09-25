<x-guest-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white text-center fw-bold">Pendaftaran Akun Baru</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" required value="{{ old('username') }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">NIM</label>
                                <input type="text" name="nim" class="form-control" required value="{{ old('nim') }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" name="name" class="form-control" required value="{{ old('name') }}">
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label class="form-label">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control" required value="{{ old('tempat_lahir') }}">
                                </div>
                                <div class="col">
                                    <label class="form-label">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" class="form-control" required value="{{ old('tanggal_lahir') }}">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Foto Profil</label>
                                <input type="file" name="foto" class="form-control" accept="image/*">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Konfirmasi Password</label>
                                <input type="password" name="password_confirmation" class="form-control" required>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Daftar Sekarang</button>
                                <a href="{{ route('login') }}" class="text-center mt-2 small">Sudah punya akun? Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>