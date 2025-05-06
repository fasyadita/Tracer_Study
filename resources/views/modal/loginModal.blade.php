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
            <form>
                <div class="modal-body px-4 py-3">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                            <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-lock"></i></span>
                            <input type="password" class="form-control" id="password" placeholder="••••••••" required>
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