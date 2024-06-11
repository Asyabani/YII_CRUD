<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Informasi';
?>
<div class="site-Informasi">
    <div class="container my-4">
        <h5 class="text-center my-3"></h5>
        <div class="row">

            <!-- form -->
            <div class="container my-5 flex-grow-1">
                <div class="row">
                    <div class="card shadow">
                        <div class="card-body my-3">
                            <h6>Informasi Pasien</h6>

                            <input id="NIK" type="text" class="form-control p-2 mt-3 fs-8" aria-label="telp"
                                aria-describedby="basic-addon1" placeholder="Masukkan NIK atau No.Transaksi" />
                            <span class="text-danger fs-8">*Format NIK.(32XXXXXXXXXXXXXXX) atau No.Transaksi
                                (SIK-XXXXXXXXXX)</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <img src="https://algoritmaonline.com/wp-content/uploads/2021/09/pengenalan-teori-antrian-1631176145.656969-1024x576.jpg"
                    height="200" class="w-100 rounded-1 my-2" alt="">
                <?= \yii\helpers\Html::a(' Daftar Pasien', ['pasien/create'], ['class' => 'btn btn-primary w-100']) ?>
            </div>
            <div class="col-md-4">
                <img src="https://bisniskulinerku.com/wp-content/uploads/2022/06/program-hamil-sebelum-menikah.webp"
                    height="200" class="w-100 rounded-1 my-2" alt="">
                <?= \yii\helpers\Html::a(' Tindakan Pasien', ['tindakan/create'], ['class' => 'btn btn-primary w-100']) ?>
            </div>
            <div class="col-md-4">
                <img src="https://pic.pikbest.com/02/22/67/57T888piCAtw.jpg!bw700" height="200"
                    class="w-100 rounded-1 my-2" alt="">
                <?= \yii\helpers\Html::a(' Obat Pasien', ['obat/create'], ['class' => 'btn btn-primary w-100']) ?>
            </div>
        </div>
    </div>

</div>
<script>
document.getElementById("NIK").addEventListener("keypress", function(event) {
    if (event.key === "Enter") {
        alert("ComingSoon!");
    }
});
</script>