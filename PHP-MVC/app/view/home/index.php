<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
</head>

<body>
    <div class="container">
        <div class="jumbotron mt-4">
            <h1 class="display-4">Halo, Selamat Datang !</h1>
            <p class="lead">Perkenalkan, saya <?= $data['nama']; ?></p>
            <hr class="my-4">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis animi dolores iure? Harum cupiditate, exercitationem nihil tempore delectus fuga quas possimus earum natus porro magnam veniam quod. Voluptatem, atque perspiciatis.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>

        <div class="row">
            <div class="col-sm-4 mb-3 mb-sm-0">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Sejarah</h5>
                        <p class="card-text">SMK Negeri 2 Trenggalek berdiri tanggal 21 Mei 2004. Menurut SK Bupati Trenggalek no. 275 tahun 2004 tentang pendidikan SMKN 2 Trenggalek, SMKN 2 Trenggalek awalnya bernama SMK Kecil di SMPN 5 Trenggalek. Gedung yang dimiliki dulu adalah Bekas SDN...</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Visi dan Misi</h5>
                        <p class="card-text">Visi Terwujudnya sekolah unggul yang peduli dan berbudaya lingkungan Misi Meningkatkan penghayatan dan pengamalan terhadap ajaran agama yang dianut. Menciptakan suasana akademik yang kondusif. Menyiapkan sumber daya pendidikan yang berkualitas dan bermanfaat bagi pengembangan potensi peserta didik. Menyelenggarakan proses pembelajaran...</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Logo, Hymne dan Mars</h5>
                        <p class="card-text">HYMNE MARS</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>