<?php
/**
 * Created by PhpStorm.
 * User: FUJITSU
 * Date: 12/6/2018
 * Time: 11:08 AM
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Du_lich extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->load->model("Mdddl");
        $data['listdltntop3'] = $this->Mdddl->getListMTN(0,3);
        $data['listdlnntop3'] = $this->Mdddl->getListMNN(0,3);
        $data['listdddltop3'] = $this->Mdddl->getListM(0,3);
        $this->load->view('site/du_lich_site_view', $data);
    }

    public function view_trong_nuoc(){
        $this->load->model("Mdddl");
        $config['total_rows'] = $this->Mdddl->countTN();
        $config['base_url'] = base_url()."index.php/du_lich/view_trong_nuoc";
        $config['per_page'] = 9;

        $start=$this->uri->segment(3);
        $this->load->library('pagination', $config);
        $data['listdltn']= $this->Mdddl->getListMTN($start, $config['per_page']);
        $this->load->view("site/du_lich_trong_nuoc_site_view", $data);
    }

    public function view_ngoai_nuoc(){
        $this->load->model("Mdddl");
        $config['total_rows'] = $this->Mdddl->countNN();
        $config['base_url'] = base_url()."index.php/du_lich/view_ngoai_nuoc";
        $config['per_page'] = 9;

        $start=$this->uri->segment(3);
        $this->load->library('pagination', $config);
        $data['listdlnn']= $this->Mdddl->getListMNN($start, $config['per_page']);
        $this->load->view("site/du_lich_ngoai_nuoc_site_view", $data);
    }

    public function view_bxh(){
        $this->load->view('site/du_lich_bxh_site_view');
    }

    public function view_moi(){
        $this->load->model("Mdddl");
        $config['total_rows'] = $this->Mdddl->countAll();
        $config['base_url'] = base_url()."index.php/du_lich/view_moi";
        $config['per_page'] = 9;

        $start=$this->uri->segment(3);
        $this->load->library('pagination', $config);
        $data['listdlm']= $this->Mdddl->getListM($start, $config['per_page']);
        $this->load->view("site/du_lich_moi_site_view", $data);
    }

    public function view_detail($id){
        $this->load->model("Mdddl");
        $data['dddl'] = $this->Mdddl->getByID($id);
        $this->load->view("site/s_detail_dddl_site_view", $data);
    }
}