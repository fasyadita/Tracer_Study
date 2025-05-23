<!-- Modal Login -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-sm rounded-3">
            <div class="modal-header bg-primary text-white border-0">
                <h5 class="modal-title text-white" id="loginModalLabel">
                    Login
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <form action="{{ url('admin/login') }}" method="POST">
                @csrf
                <div class="modal-body px-4 py-3">
                    <!-- Pesan Error -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Username Field -->
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control" id="username" name="username" placeholder="username"
                                value="{{ old('username') }}" required>
                        </div>
                    </div>

                    <!-- Password Field -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-lock"></i></span>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="••••••••" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer px-4 py-3 border-0 d-flex justify-content-between align-items-center">
                    <small class="text-muted">Belum punya akun? <a href="#"
                            class="text-decoration-none">Daftar</a></small>
                    <button type="submit" class="btn btn-primary px-4">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>