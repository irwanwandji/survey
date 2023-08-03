<?php

namespace App\Controllers;

use App\Models\ModelSurvey;
use App\Models\ModelChart;

class Admin extends BaseController
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
    public function index2()
    {
        if (!session()->get('logged_in')) {

            return view('login');
        } else {

            return view('/admin/dashboard');
        }
    }
}
