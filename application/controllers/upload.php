<?php
use \setasign\Fpdi\Fpdi;
class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
                $this->load->view('v_upload', array('error' => ' ' ));
        }

        public function do_upload()
        {
                $config['upload_path']          = './pdf/';
                $config['allowed_types']        = 'pdf';
                
                $config['max_size']             = 100000000;
                $config['max_width']            = 1024000;
                $config['max_height']           = 7680000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
                                                $this->load->view('v_upload', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        require_once('third_party/fpdf.php');
                        require_once('third_party/src/autoload.php');
                        
                        // initiate FPDI
                        $pdf = new FPDI();

                        // set the source file
                        $pageCount = $pdf->setSourceFile($data['upload_data']['full_path']);

                        for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
                        

                        $pdf->AddPage();

                        $template = $pdf->importPage($pageNo);
                        $pdf->useTemplate($template);
                        $new_name = date("Ymd").time().$data['upload_data']['orig_name'];
                        $namafilebaru = $new_name;
                       
                        $pdf->Image("http://localhost/gorbon/third_party/qr.php?link=".$namafilebaru."", 185, 270, 20, 20, "png");
                        }

                        $sql ="INSERT INTO `log` (`id`, `date`, `name_file`) VALUES (NULL, '".date("Y-m-d")."', '".$namafilebaru."')";
                        $query = $this->db->query($sql);
                        $outputPath="C:/xampp/htdocs/gorbon/files/".$namafilebaru."";
                        $pdf->Output($outputPath, "F");

                        $data = array('upload_data' => $this->upload->data());
                       // unlink("C:/xampp/htdocs/gorbon/pdf/x.pdf"); 

                        $this->load->view('upload_success', $data);

                }
        }
}
?>