<?php

namespace app\controllers;

class MatakuliahController extends \yii\web\Controller
{
    public function actionDaftarMahasiswa()
    {
        return $this->render('daftar-mahasiswa');
    }

}
