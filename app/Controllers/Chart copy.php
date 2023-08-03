<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelChart;
use App\Models\ModelSurvey;

class Chart extends Controller
{
    public function index()
    {
        $model = new ModelSurvey();
        $data["layanan"] = $this->$model->dataChart();
        return view('/admin/dashboardNew', $data);
    }
    public function index2()
    {
        $model = new ModelChart();


        $data = $model->findAll();

        $total = array_sum(array_column($data, 'value'));

        $chartData = [];
        foreach ($data as $row) {
            $chartData[] = [
                'layanan' => $row['layanan'],
                'value' => ($row['value'] / $total) * 100,
            ];
        }

        return view('/admin/dashboardNew', ['data' => $chartData]);
    }
}
