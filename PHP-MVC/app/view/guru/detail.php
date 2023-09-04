<div class="container mt-5">
    <div class="card" style="width: 18 rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['guru']['nama']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['guru']['mapel']; ?></h6>
            <h5 class="card-text"><?= $data['guru']['alamat']; ?></h5>
            <a href=" <?= BASE_URL; ?>/guru" class="card-link">Kembali</a>
        </div>
    </div>
</div>