<div class="container">
    <div class="row mt-4">
        <div class="col-md-6">
            <a href="" class="btn btn-primary"> Tambah Data</a>
        </div>
    </div>
    <!--mt-3 artinya margin top 3 -->
    <div class="row mt-3">
        <div class="col-md-6">
            <h2>Daftar Mahasiswa</h2>
            <ul class="list-group">
                <?php foreach ($mahasiswa as $mhs) : ?>
                    <li class="list-group-item"><?= $mhs['nama']; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>