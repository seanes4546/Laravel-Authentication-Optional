<x-app-layout>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">SimpleDashboard</a>
            <div class="d-flex">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow border-0">
                    <div class="card-body p-5">
                        <div class="row align-items-center">
                            <div class="col-md-4 text-center mb-4 mb-md-0">
                                @if(Auth::user()->foto)
                                    <img src="{{ asset('storage/' . Auth::user()->foto) }}" alt="Foto Profil" class="img-fluid rounded-circle shadow" style="width: 150px; height: 150px; object-fit: cover;">
                                @else
                                    <img src="https://placeholder.com" alt="Default Avatar" class="img-fluid rounded-circle shadow" style="width: 150px; height: 150px; object-fit: cover;">
                                @endif
                            </div>
                            <div class="col-md-8">
                                <h2 class="fw-bold mb-1 text-primary">{{ Auth::user()->name }}</h2>
                                <p class="text-muted mb-3">@<span>{{ Auth::user()->username }}</span></p>
                                <hr>
                                <table class="table table-borderless">
                                    <tr>
                                        <th width="35%">NIM</th>
                                        <td>: {{ Auth::user()->nim }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tempat Lahir</th>
                                        <td>: {{ Auth::user()->tempat_lahir }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Lahir</th>
                                        <td>: {{ \Carbon\Carbon::parse(Auth::user()->tanggal_lahir)->translatedFormat('d F Y') }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>: {{ Auth::user()->email }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>