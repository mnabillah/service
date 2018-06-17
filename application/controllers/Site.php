<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('customer');
        $this->load->model('part');
        $this->load->model('service');
        $this->load->model('mechanic');
    }

    function index()
    {
        redirect('site/login');
    }

    function login()
    {
        if ($this->session->userdata('isLoggedIn')) {
            redirect(site_url('site/home'));
        } else {
            $this->load->view('template/header');
            $this->load->view('login');
            $this->load->view('template/footer');
        }
    }

    function home()
    {
        if ($this->session->userdata('isLoggedIn')) {
            $data['customer'] = $this->customer->get_all();
            $data['customer_id'] = $this->customer->get_all_id();
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('home', $data);
            $this->load->view('template/footer');
        } else {
            redirect(site_url('site/login'));
        }
    }

    function customers()
    {
        if ($this->session->userdata('isLoggedIn')) {
            $data['customer'] = $this->customer->get_all();
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('customers', $data);
            $this->load->view('template/footer');
        } else {
            redirect(site_url('site/login'));
        }
    }

    function update_customer()
    {
        if ($this->session->userdata('isLoggedIn')) {
            $id = $this->input->get('id');
            if ($id != null) {
                $result = $this->customer->get($id);
                if ($result != null) {
                    $data['result'] = $result;
                    $this->load->view('template/header');
                    $this->load->view('template/sidebar');
                    $this->load->view('update_customer', $data);
                    $this->load->view('template/footer');
                } else {
                    redirect(site_url());
                }
            } else {
                redirect(site_url());
            }
        } else {
            redirect(site_url());
        }
    }

    function parts()
    {
        if ($this->session->userdata('isLoggedIn')) {
            $data['part'] = $this->part->get_all();
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('parts', $data);
            $this->load->view('template/footer');
        } else {
            redirect(site_url('site/login'));
        }
    }

    function update_part()
    {
        if ($this->session->userdata('isLoggedIn')) {
            $id = $this->input->get('id');
            if ($id != null) {
                $result = $this->part->get($id);
                if ($result != null) {
                    $data['result'] = $result;
                    $this->load->view('template/header');
                    $this->load->view('template/sidebar');
                    $this->load->view('update_part', $data);
                    $this->load->view('template/footer');
                } else {
                    redirect(site_url());
                }
            } else {
                redirect(site_url());
            }
        } else {
            redirect(site_url());
        }
    }

    function services()
    {
        if ($this->session->userdata('isLoggedIn')) {
            $data['service'] = $this->service->get_all();
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('services', $data);
            $this->load->view('template/footer');
        } else {
            redirect(site_url('site/login'));
        }
    }

    function update_service()
    {
        if ($this->session->userdata('isLoggedIn')) {
            $id = $this->input->get('id');
            if ($id != null) {
                $result = $this->service->get($id);
                if ($result != null) {
                    $data['result'] = $result;
                    $this->load->view('template/header');
                    $this->load->view('template/sidebar');
                    $this->load->view('update_service', $data);
                    $this->load->view('template/footer');
                } else {
                    redirect(site_url());
                }
            } else {
                redirect(site_url());
            }
        } else {
            redirect(site_url());
        }
    }

    function mechanics()
    {
        if ($this->session->userdata('isLoggedIn')) {
            $data['mechanic'] = $this->mechanic->get_all();
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('mechanics', $data);
            $this->load->view('template/footer');
        } else {
            redirect(site_url('site/login'));
        }
    }

    function update_mechanic()
    {
        if ($this->session->userdata('isLoggedIn')) {
            $id = $this->input->get('id');
            if ($id != null) {
                $result = $this->mechanic->get($id);
                if ($result != null) {
                    $data['result'] = $result;
                    $this->load->view('template/header');
                    $this->load->view('template/sidebar');
                    $this->load->view('update_mechanic', $data);
                    $this->load->view('template/footer');
                } else {
                    redirect(site_url());
                }
            } else {
                redirect(site_url());
            }
        } else {
            redirect(site_url());
        }
    }

    function testing()
    {
        echo uniqid('TRN');
    }
}