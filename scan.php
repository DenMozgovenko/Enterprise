<?php
require_once ('admin\param.php');
$this->load->model('mdl_scancode');


public function index() {
$this->load->view('vw_scancode');
}

public function getdata() {
$draw = intval($this->input->get("draw"));
$start = intval($this->input->get("start"));
$length = intval($this->input->get("length"));

$query = $this -> mdl_scancode -> getdata();

$data = [];

foreach($query as $r) {
// print_r($r);exit;

if ($r['status'] == '0'){
$status= "<span class='label label-warning'>Belum Terverifikasi</span>";
} elseif ($r['status'] == '1'){
$status= "<span class='label label-success'>Terverifikasi</span>";
} elseif ($r['status'] == '2'){
$status= "<span class='label label-danger'>Ditolak</span>";
}else {            	             	              	         };

if (empty($r['image']) ){                  ;                     ;                    ;                   };

if(!empty($r['image'])){       //klo image kosong gak muncul gambar, tapi muncul link downloadnya              ;                       ;                      ;                    };

/* <img src="<?php echo base_url();?>/uploads/<?php echo !empty(trim(stripcslashes((htmlspecialchars_decode(htmlentities(@$row["gambar"])))))) ? htmlspecialchars_decode(htmlentities((trim(stripcslashes((htmlspecialchars_decode(htmlentities((@$row["gambar"]))))))))) : "default.jpg" ?>" width="100px"> */   //jika ada gambarnya maka tampilkan namanya jika tidak maka default.jpg       ?></td>
?>