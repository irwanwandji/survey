<?php

namespace App\Controllers;

use App\Models\ModelSurvey;

class Home extends BaseController
{
    public function index()
    {
        return view('formSurvey');
    }

    public function simpan()
    {
        $data = [
            'layanan' => $this->request->getPost('layanan'),
            'prosedur' => $this->request->getPost('prosedur'),
            'kesesuaian' => $this->request->getPost('kesesuaian'),
            'kejelasan' => $this->request->getPost('kejelasan'),
            'kemampuan' => $this->request->getPost('kemampuan'),
            'kecepatan' => $this->request->getPost('kecepatan'),
            'kesopanan' => $this->request->getPost('kesopanan'),
            'kewajaran' => $this->request->getPost('kewajaran'),
            'kepastian_biaya' => $this->request->getPost('kepastian_biaya'),
            'kepastian_jadwal' => $this->request->getPost('kepastian_jadwal'),
            'kenyamanan' => $this->request->getPost('kenyamanan'),
            'time' => date('Y-m-d'),
        ];

        $survey = new ModelSurvey();

        $simpan = $survey->simpan($data);

        if ($simpan) {
            $pesan = [
                'sukses' => '
                
                <center><h5><i class="icon fas fa-check"></i><font color="White"> Survey berhasil disimpan. Terimakasih atas penilaian Anda.</font></h5> </center>
              '
            ];
            session()->setFlashdata($pesan);
            return redirect()->to('home');
        }
    }
}
