<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelChart;
use App\Models\ModelSurvey;

class Chart extends Controller
{
    public function index()
    {
        if (!session()->get('logged_in')) {

            return view('login');
        } else {

            $chartModel = new ModelSurvey();

            // Ambil data dari database
            // $data = $chartModel->dataChart2();
            $data = $chartModel->dataChart();
            // $data = $chartModel->findAll();

            // Format data sesuai dengan kebutuhan chart
            $chartData = [];
            foreach ($data as $row) {
                $chartData[] = [
                    'label' => $row['layanan'],
                    'value' => $row['jumlah'],
                ];
            }


            return view('/admin/dashboardNew', ['chartData' => $chartData]);
        }
    }
}
