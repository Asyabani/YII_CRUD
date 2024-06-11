<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'trx';
?>
<div class="site-trx">
    <!-- form -->
    <div class="container my-5 flex-grow-1">
        <div class="row">
            <div class="card shadow">
                <div class="card-body my-3">
                    <h6>Cek Transaksi</h6>

                    <input id="phone" type="text" class="form-control p-2 mt-3 fs-8" aria-label="telp"
                        aria-describedby="basic-addon1" placeholder="Masukkan No.HP atau No.Transaksi" />
                    <span class="text-danger fs-8">*Format No.Hp (62XXXXXXXXXXX) atau No.Transaksi
                        (SIK-XXXXXXXXXX)</span>
                </div>
            </div>
        </div>
        <div class="row" id="content-cek"></div>
    </div>

</div>