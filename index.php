<?php
class data_diri{
public 	$nama_depan, $nama_belakang, $alamat;
public function __construct($nama_depan, $nama_belakang, $alamat){
    $this->nama_depan=$nama_depan;
    $this->nama_belakang=$nama_belakang;
    $this->alamat=$alamat;
}
public function __toString(){
    return $this->nama_depan.",".$this->nama_belakang.",".$this->alamat;
}
}
class pekerjaan{
    public $jenis,$jabatan;
    public function __construct($jenis, $jabatan) {
        $this->jenis = $jenis;
        $this->jabatan = $jabatan;
}
public function __toString() {
    return $this->jenis . " , " . $this->jabatan;
}
}
class pendidikan_terakhir{
    public $nama_instansi,$tahun_lulus;
    public function __construct($nama_instansi, $tahun_lulus) {
        $this->nama_instansi = $nama_instansi;
        $this->tahun_lulus = $tahun_lulus;
}
public function __toString() {
    return $this->nama_instansi . " , " . $this->tahun_lulus;
}
}
$data_diri = new data_diri("Ahmad","Maulana","Surabaya");
$pekerjaan = new pekerjaan("Swasta","Pegawai");
$pendidikan_terakhir = new pendidikan_terakhir("SMK Surabaya",2018);
echo "Data Diri : " . $data_diri;
echo "<br>";
echo "Pekerjaan : " . $pekerjaan;
echo "<br>";
echo "Pendidikan Terakhir: " . $pendidikan_terakhir ;
?>