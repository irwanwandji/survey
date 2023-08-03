<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelSurvey;

class Daftar extends BaseController
{
    public function index()
    {
        $model = new ModelSurvey();
        $data['survey'] = $model->tampildata()->getResult();
        return view('/admin/daftarSurvey', $data);
    }
}
