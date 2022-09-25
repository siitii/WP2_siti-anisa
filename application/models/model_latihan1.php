<?php
class Model_latihan1 extends CI_Model
{
    //membuat variable untuk menampung nilai
    public $nilan1, $nilan2, $hasil;
    //method penjumlahan
    public function jumlah($n1 = null, $n2 = null)
    {
        $this->nilai1 = $n1;
        $this->nilai2 = $n2;
        $this->hasil = $this->nilan1 + $this->nilain2;
        return $this->hasil;
    }
}
