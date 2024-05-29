<?php

namespace App\Models;

use CodeIgniter\Model;

class sertifikasiModel extends Model
{
   public function sertifikasi(){
   return $this->db->table('sertifikasi')
   ->get()
   ->getResultArray();
   } 
   
}