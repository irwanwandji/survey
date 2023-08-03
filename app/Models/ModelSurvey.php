<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSurvey extends Model
{
    protected $table            = 'tb_data';
    protected $primaryKey       = 'id_survey';
    protected $allowedFields    = [
        'id_survey', 'layanan', 'prosedur', 'kesesuaian', 'kejelasan', 'kemampuan', 'kecepatan', 'kesopanan', 'kewajaran', 'kepastian_biaya', 'kepastian_jadwal', 'kenyamanan', 'time',
    ];

    function simpan($data)
    {
        return $this->table('tb_data')->insert($data);
    }
    function tampildata()
    {
        return $this->table('tb_data')->orderBy('datetime DESC')->get();
    }

    function dataChart2()
    {
        return $this->table('tb_data')
            ->select('layanan, COUNT(*) AS jumlah')
            ->groupBy('layanan')
            ->get();
    }

    function dataChart()
    {
        $sql = "SELECT layanan, COUNT(*) AS jumlah FROM tb_data GROUP BY layanan ORDER BY layanan";
        $hasil = $this->db->query($sql);
        if ($hasil) {
            return $hasil->getResultArray();
        } else {
            return 0;
        }
    }
}
