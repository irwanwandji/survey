<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelChart extends Model
{
    protected $table            = 'tb_data';
    protected $primaryKey       = 'id_survey';
    protected $allowedFields    = [
        'id_survey', 'layanan', 'prosedur', 'kesesuaian', 'kejelasan', 'kemampuan', 'kecepatan', 'kesopanan', 'kewajaran', 'kepastian_biaya', 'kepastian_jadwal', 'kenyamanan', 'time',
    ];
}
