<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Affiliate extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MainModel');
        $this->load->library('email');
        $this->load->library('session');
        $this->load->library('cart');
        $this->load->helper('form');
        $this->load->helper('captcha');
        $data['canonical']=base_url();

        date_default_timezone_set('Asia/Dhaka');
    }

    public function send_email()
    {
        $to = "suzonice15@gmail.com";
        $subject = "HTML email";
        $message = "<table>
    <tr>
        <td><span style='color:goldenrod; font-size: 15px;'>Subject</span> : Your Affiliate application has been received</td>
    </tr>
    <tr>
        <th>&nbsp;</th>
    </tr>
    <tr>
        <td style='color:goldenrod; font-size: 15px;'>Message body</td>
    </tr>
    <tr>
        <td style='text-align: justify;'>You have successfully submittedYou have successfully submittedYou
            have successfully submittedYou
            have successfully submittedYou have successfully submittedYou have successfully submittedYou have
            successfully submittedYou have successfully submitted
            You have successfully submittedYou have successfully submittedYou have successfully submittedYou
            have successfully submittedYou have successfully submittedYou have successfully submittedYou have
            successfully submittedYou have successfully submitted
        </td>
    </tr>
    <tr>
        <th>&nbsp;</th>
    </tr>
    <tr>
        <td>You have successfully submitted</td>
    </tr>
</table>";


$headers = "From:  info@ekusheyshop.com. \r\n";
$headers .= "Reply-To: info@ekusheyshop.com\r\n";
$headers .= "CC:info@ekusheyshop.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// Always set content-type when sending HTML email
      
        mail($to, $subject, $message, $headers);
        
         $to = "suzonice15@gmail.com";
    $subject = "HTML email";
    $message = "
    <html>
    <head>
    <title>HTML email</title>
    </head>
    <body>
    <p>A table as email</p>
    <table>
    <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    </tr>
    <tr>
    <td>Fname</td>
    <td>Sname</td>
    </tr>
    </table>
    </body>
    </html>
    ";
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\b";
    $headers .= 'From: name' . "\r\n";
    mail($to,$subject,$message,$headers);
    }

    public function index()
    {
        $userRole = $this->session->userdata('user_id');
        if ($userRole) {
            $user_id = $userRole;
            $data['user_id'] = $userRole;
            $data['affiliate_details'] = $this->MainModel->select_affiliate_request_by_id($user_id);
            $data['account_details'] = $this->MainModel->select_user_all_account_info($user_id);
            $data['all_category'] = $this->MainModel->select_all_category();
            $result = $this->MainModel->select_affiliate_request($user_id);
            $data['affiliate_request'] = $result->affiliate_request_status;
            $get_update_data = $this->MainModel->select_cancel_affiliate_request($user_id);
            $get_user_data = $this->MainModel->select_user_login_info($user_id);
            if ($get_update_data) {
                $get_data = $get_update_data;
                $data['set_status'] = 3;
            } else {
                $get_data = $get_user_data;
                $data['set_status'] = 0;
            }

            if ($get_data) {
                $data['affiliate_cancel_request'] = $get_data;
            } else {
                $blank_data = array(
                    'phone_number' => ''
                );
                $data['affiliate_cancel_request'] = $blank_data;
            }
            $data['all_request'] = $this->MainModel->select_all_request($user_id);
            $data['all_paid_request'] = $this->MainModel->select_all_paid_request($user_id);
            $data['my_create_link'] = $this->MainModel->select_my_all_link($user_id);
            $data['home'] = $this->load->view('affiliate/affiliate_account', $data, true);
            $this->load->view('affiliate/home', $data);
        } else {
            redirect('/');

        }
    }

    public function search_report_result()
    {
        $userRole = $this->session->userdata('user_id');
        $from_date = date("Y-m-d", strtotime($this->input->post('report_from_date')));
        $to_date = date("Y-m-d", strtotime($this->input->post('report_to_date')));
        $data['user_id'] = $userRole;
        $data['my_create_link'] = $this->MainModel->select_my_all_link_by_date($userRole, $from_date, $to_date);
        $this->load->view('affiliate/search_report_result', $data);
    }
    
        public function search_report_result3()
    {
        $userRole = $this->session->userdata('user_id');
        $data['user_id'] = $userRole;
        $data['my_create_link'] = $this->MainModel->select_my_all_link_by_date3($userRole);
        $this->load->view('affiliate/search_report_result', $data);
    }

    public function select_payment_history()
    {
        $user_id = $this->session->userdata('user_id');
        $from_date = date("Y-m-d", strtotime($this->input->post('history_from_date')));
        $to_date = date("Y-m-d", strtotime($this->input->post('history_to_date')));
        $data['all_paid_request1'] = $this->MainModel->select_all_paid_request($user_id, $from_date, $to_date);
        $this->load->view('affiliate/payment_history', $data);
    }

    public function select_payment_request()
    {
        $user_id = $this->session->userdata('user_id');
        $from_date = $this->input->post('request_from_date');
        $to_date = $this->input->post('request_to_date');
        $request = $this->MainModel->select_all_payment_request($user_id, $from_date, $to_date);
        echo $request->total_commission;
    }

    public function select_earning_status()
    {
        $data['user_id'] = $this->session->userdata('user_id');
        $data['from_date'] = date("Y-m-d", strtotime($this->input->post('from_date')) );
        $data['to_date'] = date("Y-m-d", strtotime($this->input->post('to_date')) );
        $this->load->view('affiliate/earning_status', $data);
    }

    public function mobile_login()
    {


    }


    public function amount_request_entry()
    {
        $user_id = $this->input->post('user_id');
        $commission_amount = $this->input->post('commission_amount');
        $status = $this->MainModel->select_commission_request_status($user_id);
        $commission_request = $status->status;
        $year = date('Y');
        $month = date('m');
        $month_start = $year . "-" . $month . "-01";
        $month_end = $year . "-" . $month . "-31";
       $get_single_affiliate_account= $this->MainModel->get_single_affiliate_information($user_id);
       $get_single_affiliate_account=$get_single_affiliate_account->status;
        $month_in_request = $this->MainModel->check_month_in_request($user_id, $month_start, $month_end);
        $in_request = $month_in_request->status;
        if($get_single_affiliate_account !=1){
             $result = 6; 
        } else if ($commission_request == 1) {
            $result = 1;
        } else if ($commission_amount < 499) {
            $result = 2;
        } else if ($in_request) {
            $result = 3;
        } else {
            $result = 4;
            $account_type = $this->MainModel->select_user_account_info($user_id);
            $data = array(
                'user_id' => $this->input->post('user_id'),
                'date' => date('Y-m-d'),
                'commission_amount' => $this->input->post('commission_amount'),
                'type' => $account_type->payment_type,
                'status' => 1,
                'vp_number' => 0,
                'transaction_number' => 0,
            );
            $this->MainModel->insertData('user_commission_request', $data);
        }
        if($result == 6){
               echo "6";
        }
       else  if ($result == 1) {
            echo "1";
        } else if ($result == 2) {
            echo "2";
        } else if ($result == 3) {
            echo "3";
        } else if ($result == 4) {
            echo "4";
        } else {
            echo "";
        }
    }

    public function load_product_link_from($id)
    {
        $data['product_link'] = $this->MainModel->select_link_by_id($id);
        $data['product_id'] = $id;
        $this->load->view('affiliate/link_generate', $data);
    }

    public function load_product_single_link_from()
    {
        $this->load->view('affiliate/single_link_generate');
    }

    public function single_link_generate()
    {
        $userRole = $this->session->userdata('user_id');
        $link_name = $this->input->post('link_name');
        $traffic_source = $this->input->post('traffic_source');
        $new_url = substr($link_name, strpos($link_name, "product/") + 8);
        $folder = explode("/", $new_url);
        $folder_name = $folder[0];
        $result = $this->MainModel->select_product_id($folder_name);
        $id = $result->product_id;
        $user_id = $userRole;
        $product_key = "product/" . $folder_name;
        $check_controller = "home/affiliate_check_controller";
        $base_url = base_url();
        $get_link = $base_url . $check_controller . "/" . $product_key . "/" . $user_id;
        $data = array(
            'user_id' => $user_id,
            'product_id' => $id,
            'traffic_source' => $traffic_source,
            'product_link' => $get_link
        );
        $result = $this->MainModel->insertData('product_link_info', $data);
        if ($result) {
            echo $get_link;
        }
    }


    public function create_information()
    {
        $userRole = $this->session->userdata('user_id');
        $check_user = $this->MainModel->check_payment_info($userRole);
        if ($check_user) {
            $data1 = array(
                'status' => 0
            );
            $this->MainModel->affiliate_information_status_update($data1, $userRole);
        }
        
        
       

        $data = array(
            'user_id' => $userRole,
            'payment_type' => $this->input->post('payment_type'),
            'phone_account_no' => $this->input->post('phone_account_no'),
            'account_name' => $this->input->post('account_name'),
            'bank_name' => $this->input->post('bank_name'),
            'branch_name' => $this->input->post('branch_name'),
            'account_number' => $this->input->post('account_number'),
            'swift_code' => $this->input->post('swift_code'),
            'status' => 1
        );
        $result = $this->MainModel->insertData('affiliate_information', $data);
        if ($result) {
            echo "Payment information added successfully.";
        }
    }

    public function link_generate()
    {
        $userRole = $this->session->userdata('user_id');
        $id = $this->input->post('id');
        $link_name = $this->input->post('link_name');
        $traffic_source = $this->input->post('traffic_source');
        $user_id = $userRole;
        $product_key = "product/" . $link_name;
        $check_controller = "home/affiliate_check_controller";
        $base_url = base_url();
        $get_link = $base_url . $check_controller . "/" . $product_key . "/" . $user_id;
        $data = array(
            'user_id' => $user_id,
            'product_id' => $id,
            'traffic_source' => $traffic_source,
            'product_link' => $get_link,
            'create_date' => date('Y-m-d H:i:s')
        );
        $result = $this->MainModel->insertData('product_link_info', $data);
        if ($result) {
            echo $get_link;
        }
    }

    public function load_product_link_view()
    {
        $product_type = $this->input->post('product_type');
        $from_rate = $this->input->post('from');
        $to_rate = $this->input->post('to');
        $data['product_link'] = $this->MainModel->select_all_product_by_id($product_type, $from_rate, $to_rate);
        $this->load->view('affiliate/product_link_view', $data);
    }

    public function load_product_link_view_by_name()
    {
        $product_type = $this->input->post('product_type');
        $product_name = $this->input->post('product_name');
        $data['product_link'] = $this->MainModel->select_all_product_by_name($product_type, $product_name);
        $this->load->view('affiliate/product_link_view', $data);
    }
    
    
    public function load_product_link_view_by_code()
    {
        $product_type = $this->input->post('product_type');
        $product_code = $this->input->post('product_code');
        $data['product_link'] = $this->MainModel->select_all_product_by_code($product_type, $product_code);
        $this->load->view('affiliate/product_link_view', $data);
    }
    
    
    public function phone_check()
    {

        $email = $this->input->post('phone');
        $result = $this->MainModel->getSingleData('user_mobile', $email, 'affiliate_users', '*');
        if ($result) {

            echo 'not';
        } else {

            echo 'unique';


        }
    }

    public function email_check()
    {

        $email = $this->input->post('email');
        $result = $this->MainModel->getSingleData('user_email', $email, 'affiliate_users', '*');
        if ($result) {

            echo 'not';
        } else {

            echo 'unique';


        }
    }

    public function sign_up_user()
    {
        $data['user_f_name'] = $this->input->post('user_f_name');
        $data['user_mobile'] = $this->input->post('mobile');
        $data['user_email'] = $this->input->post('user_email');
        $data['user_password'] = $this->input->post('user_password');
        $data['created_date'] = date('Y-m-d');
        $user_id = $this->MainModel->returnInsertId('affiliate_users', $data);
        if ($user_id) {

            $dataa['user_f_name'] = $data['user_f_name'];
            $dataa['user_id'] = $user_id;
            $dataa['user_email'] = $data['user_email'];
            $dataa['user_status'] = 'active';
            $this->session->set_userdata($dataa);

            echo 'ok';

        } else {
            echo 'Something wrong try again';

        }

    }

    public function mobile_sign_up_user()
    {


        $data_row['user_f_name'] = $this->input->post('user_f_name');
        $data_row['user_mobile'] = $this->input->post('user_mobile');
        $user_mobile = $this->input->post('user_mobile');

        $inputCaptcha = $this->input->post('captcha');
        $sessCaptcha = $this->session->userdata('captchaCode');
        $data_row['user_email'] = $this->input->post('user_email');
        $data_row['user_password'] = $this->input->post('user_password');
        $data_row['created_date'] = date('Y-m-d');

        $random_number = rand(1000, 9999);

        if ($inputCaptcha === $sessCaptcha) {
            $this->db->where('user_mobile', $user_mobile);
            $result = $this->db->get('affiliate_users')->row();
            //SELECT * FROM `affiliate_users` WHERE user_mobile='01738305670'
            // print_r($result);
            if (empty($result)) {
                if (strlen($user_mobile) < 11) {
                    $dataa['signerror'] = "Enter Valid Bangladeshi Mobile Number";

                    $this->load->view('website/header');
                    $this->load->view('affiliate/mobile_login_sign_up_form', $dataa);
                    $this->load->view('website/footer');
                }
                $user_id = $this->MainModel->returnInsertId('affiliate_users', $data_row);
                if ($user_id) {

                    $dataa['user_f_name'] = $data_row['user_f_name'];
                    $dataa['user_id'] = $user_id;
                    $dataa['user_email'] = $data_row['user_email'];
                    $dataa['user_status'] = 'active';
                    $this->session->set_userdata($dataa);

                    redirect('Affiliate/my_account');
                }
            } else {

                $data['signerror'] = "This number already been registered, please reset your number or use another number";

                $this->load->view('website/header');
                $this->load->view('affiliate/mobile_login_sign_up_form', $data);
                $this->load->view('website/footer');
            }
        } else {

            $vals = array(
                'word' => $random_number,
                'img_path' => './captcha_images/',
                'img_url' => base_url() . 'captcha_images/',
                'font_path' => './path/to/fonts/texb.ttf',
                'img_width' => '200',
                'img_height' => 60,
                'expiration' => 7200,
                'word_length' => 4,
                'font_size' => 30,
                'img_id' => 'Imageid',


                // White background and border, black text and red grid
                'colors' => array(
                    'background' => array(0, 128, 0),
                    'border' => array(255, 0, 0),
                    'text' => array(255, 255, 255),
                    'grid' => array(255, 0, 0)
                )
            );

            $cap = create_captcha($vals);

            // Unset previous captcha and set new captcha word
            $this->session->unset_userdata('captchaCode');
            $this->session->set_userdata('captchaCode', $cap['word']);

            // Pass captcha image to view
            $data['captchaImg'] = $cap['image'];


            $data['signerror'] = "Captcha code does not match, please try again.";

            $this->load->view('website/header');
            $this->load->view('affiliate/mobile_login_sign_up_form', $data);
            $this->load->view('website/footer');

        }

    }

    public function login_check()
    {

        $mobile = trim($this->input->post('user_email'));
        $password = trim($this->input->post('user_password'));
        $user = "select * from affiliate_users  
where affiliate_users.user_password='$password' and affiliate_users.user_mobile='$mobile'";
        $userResult = $this->MainModel->SingleQueryData($user);

        if ($userResult) {
            $data['user_f_name'] = $userResult->user_f_name;
            $data['user_id'] = $userResult->user_id;
            $data['user_email'] = $userResult->user_email;
            $data['user_status'] = 'active';
            $user_status = $userResult->user_status;
            if ($user_status == 0) {

                echo 'You are In Active user';
            } else {
                $this->session->set_userdata($data);
                echo 'Login Successfully';

            }


        } else {
            echo "Incorrect Mobile number or password";

        }


    }


    public function mobile_login_check()
    {

        $mobile = trim($this->input->post('user_email'));
        $password = trim($this->input->post('user_password'));
        $user = "select * from affiliate_users  
where affiliate_users.user_password='$password' and affiliate_users.user_mobile='$mobile'";
        $userResult = $this->MainModel->SingleQueryData($user);

        $inputCaptcha = $this->input->post('captcha');
        $sessCaptcha = $this->session->userdata('captchaCode');
        if ($inputCaptcha === $sessCaptcha) {
            if ($userResult) {
                $data['user_f_name'] = $userResult->user_f_name;
                $data['user_id'] = $userResult->user_id;
                $data['user_email'] = $userResult->user_email;
                $data['user_status'] = 'active';
                $user_status = $userResult->user_status;
                if ($user_status == 0) {

                    $data['error'] = "You are In Active user";

                    $this->load->view('website/header');
                    $this->load->view('affiliate/mobile_login_sign_up_form', $data);
                    $this->load->view('website/footer');

                } else {
                    $this->session->set_userdata($data);
                    redirect('affiliate/my_account');

                }


            } else {
                $data['error'] = "Incorrect Mobile number or password";

                $this->load->view('website/header');
                $this->load->view('affiliate/mobile_login_sign_up_form', $data);
                $this->load->view('website/footer');

            }
        } else {
            $random_number = rand(1000, 9999);
            $vals = array(
                'word' => $random_number,
                'img_path' => './captcha_images/',
                'img_url' => base_url() . 'captcha_images/',
                'font_path' => './path/to/fonts/texb.ttf',
                'img_width' => '200',
                'img_height' => 60,
                'expiration' => 7200,
                'word_length' => 4,
                'font_size' => 30,
                'img_id' => 'Imageid',


                // White background and border, black text and red grid
                'colors' => array(
                    'background' => array(0, 128, 0),
                    'border' => array(255, 0, 0),
                    'text' => array(255, 255, 255),
                    'grid' => array(255, 0, 0)
                )
            );

            $cap = create_captcha($vals);

            // Unset previous captcha and set new captcha word
            $this->session->unset_userdata('captchaCode');
            $this->session->set_userdata('captchaCode', $cap['word']);

            // Pass captcha image to view
            $data['captchaImg'] = $cap['image'];


            $data['error'] = "Captcha code does not match, please try again";

            $this->load->view('website/header');
            $this->load->view('affiliate/mobile_login_sign_up_form', $data);
            $this->load->view('website/footer');


        }


    }

    public function login_check_rating()
    {


        $mobile = trim($this->input->post('user_email'));
        $password = trim($this->input->post('user_password'));
        $user = "select * from affiliate_users  
where affiliate_users.user_password='$password' and affiliate_users.user_mobile='$mobile'";
        $userResult = $this->MainModel->SingleQueryData($user);

        if ($userResult) {
            $data['user_f_name'] = $userResult->user_f_name;
            $data['user_id'] = $userResult->user_id;
            $data['user_email'] = $userResult->user_email;
            $data['user_status'] = 'active';
            $user_status = $userResult->user_status;
            if ($user_status == 0) {

                echo 'You are In Active user';
            } else {
                $this->session->set_userdata($data);
                $data['login'] = 'Login Successfully';

            }


        } else {

            $data['login'] = 'Invalid Mobile   or password  !!!!';

        }
        echo json_encode($data);

    }

    public function my_account()
    {


        $data['home'] = $this->load->view('affiliate/my_account', '', true);
        $this->load->view('affiliate/home', $data);

    }


    public function edit()
    {
        $user_id = $this->session->userdata('user_id');
        $user_data['user'] = $this->MainModel->getSingleData('user_id', $user_id, 'affiliate_users', '*');
        if ($this->input->post()) {
            $user_id = $this->session->userdata('user_id');

            $data['user_f_name'] = $this->input->post('user_f_name');
            $data['user_l_name'] = $this->input->post('user_l_name');
            $data['user_email'] = $this->input->post('user_email');
            $data['user_address'] = $this->input->post('user_address');
            $data['user_mobile'] = $this->input->post('user_mobile');
            $update = $this->MainModel->updateData('user_id', $user_id, 'affiliate_users', $data);
            if ($update) {
                $this->session->set_flashdata('message', 'Account updated successfully !!!');
                redirect('affiliate/edit', 'refresh');
            }

        } else {

            $data['home'] = $this->load->view('affiliate/account_edit', $user_data, true);
            $this->load->view('affiliate/home', $data);
        }

    }

    public function change_password()
    {


        if ($this->input->post()) {
            $old_password = $this->input->post('old_password');
            $new_password = $this->input->post('new_password');


            $this->db->select('user_password');
            $this->db->where('user_password', $old_password);
            $this->db->limit(1);
            $result = $this->db->get('affiliate_users')->row();
            // $result=$this->db->query($query);

            if ($result) {
                $data['user_password'] = $this->input->post('new_password');
                $user_id = $this->session->userdata('user_id');


                $update = $this->MainModel->updateData('user_id', $user_id, 'affiliate_users', $data);
                if ($update) {
                    $this->session->set_flashdata('message', 'Password updated successfully !!!');
                    redirect('affiliate/change_password', 'refresh');
                }
            } else {
                $this->session->set_flashdata('message', 'Old Password does not matched ');
                redirect('affiliate/change_password', 'refresh');
            }

        } else {
            $data['home'] = $this->load->view('affiliate/change_password', '', true);
            $this->load->view('affiliate/home', $data);
        }

    }

    public function logOut()
    {
        $this->session->unset_userdata('user_status');
        $this->session->unset_userdata('user_id');

        redirect('/');


    }


    public function order_list()
    {
        $user_id = $this->session->userdata('user_id');
        $data['orders_list'] = $this->MainModel->getAllData("affiliate_user_id=$user_id", 'order_data', '*', 'order_id desc');


        $data['home'] = $this->load->view('affiliate/my_order_list', $data, true);
        $this->load->view('affiliate/home', $data);


    }

    public function order_edit($id)
    {
        $user_data['order'] = $this->MainModel->getSingleData('order_id', $id, 'order_data', '*');

        $data['home'] = $this->load->view('affiliate/my_order_edit', $user_data, true);
        $this->load->view('affiliate/home', $data);


    }

    public function affiliate_page()
    {


        $this->load->view('affiliate/affiliate_page');
        // $this->load->view('affiliate/home', $data);

    }













    public function create_affiliate_request()
    {
        $userRole = $this->session->userdata('user_id');
        $status = $this->input->post('status');
        if ($status == 3) {
            $set_status = 3;
        } else {
            $set_status = $this->input->post('status');
        }
        $message = str_replace("\n", "<br>", $this->input->post('permanent_address'));
        $message1 = str_replace("\n", "<br>", $this->input->post('present_address'));

        if ($status == 3) {
            $data = array(
                'user_id' => $this->input->post('user_id'),
                'email' => $this->input->post('email'),
                'phone_number' => $this->input->post('phone_number'),
                'permanent_address' => $message,
                'present_address' => $message1,
                'website_url' => $this->input->post('website_url'),
                'facebook_page_url' => $this->input->post('facebook_page_url'),
                'facebook_profile_url' => $this->input->post('facebook_profile_url'),
                'youtube_channel_url' => $this->input->post('youtube_channel_url'),
                'payment_method' => $this->input->post('payment_method'),
                'promotional_strategy' => $this->input->post('promotional_strategy'),
            );
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'user_id' => $this->input->post('user_id'),
                'email' => $this->input->post('email'),
                'phone_number' => $this->input->post('phone_number'),
                'permanent_address' => $message,
                'present_address' => $message1,
                'website_url' => $this->input->post('website_url'),
                'facebook_page_url' => $this->input->post('facebook_page_url'),
                'facebook_profile_url' => $this->input->post('facebook_profile_url'),
                'youtube_channel_url' => $this->input->post('youtube_channel_url'),
                'payment_method' => $this->input->post('payment_method'),
                'promotional_strategy' => $this->input->post('promotional_strategy'),
            );
        }
        $data1 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'uploads/affiliate_profile';
            $config['allowed_types'] = 'jpg|png';
            $config['max_size'] = 100000;
            $config['max_width'] = 100024;
            $config['max_height'] = 100000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('profile_picture')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data1 = array(
                    'profile_picture' => $file
                );
            }
        }

        $result = array_merge($data, $data1);
        
            $data2 = array(
                'affiliate_request_status' => 1
            );
            $this->MainModel->update_status($data2, $userRole);
        

        if ($set_status == 3) {
            $this->MainModel->update_affiliate_request($result, $userRole);
        } else {
            $this->MainModel->insertData('affiliate_request_information', $result);
        }

        if ($status == 3) {
            echo "Your update successfully sent.";
        } else {
             
            
            echo "Your request successfully sent.";
              $to = $this->input->post('email');
    $subject = "Your Affiliate application has been received";
    $message = "You have successfully submitted your affiliate application. We like to thank you for your interest to join our affiliate program. We will review your application and you will be hearing from us soon. It should not take longer than two working days. In the mean time you can get more knowledge by reading this article
    <br/>

Thanks from Ekusheyshop team
    ";
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\b";
    $headers .= "From: info@ekusheyshop.com \r\n";
    mail($to,$subject,$message,$headers);
        }
    }



    public function profile_update_affiliate_request()
    {
        $userRole = $this->session->userdata('user_id');
        $message = str_replace("\n", "<br>", $this->input->post('permanent_address'));
        $message1 = str_replace("\n", "<br>", $this->input->post('present_address'));
        
            $data = array(
                'user_id' => $this->input->post('user_id'),
                'email' => $this->input->post('email'),
                'phone_number' => $this->input->post('phone_number'),
                'permanent_address' => $message,
                'present_address' => $message1,
                'website_url' => $this->input->post('website_url'),
                'facebook_page_url' => $this->input->post('facebook_page_url'),
                'facebook_profile_url' => $this->input->post('facebook_profile_url'),
                'youtube_channel_url' => $this->input->post('youtube_channel_url'),
                'payment_method' => $this->input->post('payment_method'),
                'promotional_strategy' => $this->input->post('promotional_strategy'),
            );
            
        $data1 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'uploads/affiliate_profile';
            $config['allowed_types'] = 'jpg|png';
            $config['max_size'] = 100000;
            $config['max_width'] = 100024;
            $config['max_height'] = 100000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('profile_picture')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data1 = array(
                    'profile_picture' => $file
                );
            }
        }

        $result = array_merge($data, $data1);
        $this->MainModel->update_affiliate_request($result, $userRole);
        echo "Your profile update successfully.";
    }




















    public function login_signup()
    {


        $user_id = $this->session->userdata('user_id');
        if ($user_id) {
            redirect('Affiliate/my_account');
        } else {
            $random_number = rand(1000, 9999);

            $vals = array(
                'word' => $random_number,
                'img_path' => './captcha_images/',
                'img_url' => base_url() . 'captcha_images/',
                'font_path' => './path/to/fonts/texb.ttf',
                'img_width' => '200',
                'img_height' => 60,
                'expiration' => 7200,
                'word_length' => 4,
                'font_size' => 30,
                'img_id' => 'Imageid',


                // White background and border, black text and red grid
                'colors' => array(
                    'background' => array(0, 128, 0),
                    'border' => array(255, 0, 0),
                    'text' => array(255, 255, 255),
                    'grid' => array(255, 0, 0)
                )
            );

            $cap = create_captcha($vals);

            // Unset previous captcha and set new captcha word
            $this->session->unset_userdata('captchaCode');
            $this->session->set_userdata('captchaCode', $cap['word']);

            // Pass captcha image to view
            $data['captchaImg'] = $cap['image'];


            $this->load->view('website/header');
            $this->load->view('affiliate/mobile_login_sign_up_form', $data);
            $this->load->view('website/footer');
        }
    }

    public function refresh()
    {
        // Captcha configuration
        $random_number = rand(1000, 9999);
        $vals = array(
            'word' => $random_number,
            'img_path' => './captcha_images/',
            'img_url' => base_url() . 'captcha_images/',
            'font_path' => './path/to/fonts/texb.ttf',
            'img_width' => '200',
            'img_height' => 60,
            'expiration' => 7200,
            'word_length' => 4,
            'font_size' => 30,
            'img_id' => 'Imageid',


            // White background and border, black text and red grid
            'colors' => array(
                'background' => array(0, 128, 0),
                'border' => array(255, 0, 0),
                'text' => array(255, 255, 255),
                'grid' => array(255, 0, 0)
            )
        );

        $cap = create_captcha($vals);
        // Unset previous captcha and set new captcha word
        $this->session->unset_userdata('captchaCode');
        $this->session->set_userdata('captchaCode', $cap['word']);

        // Display captcha image
        echo $cap['image'];
    }

    public function check_change()
    {
        $type = $this->input->post('set_id');
        $var = $this->input->post('set_var');
        $result = $this->MainModel->check_change($type, $var);
        if ($result) {
            echo "1";
        } else {
            echo "";
        }

    }

    public function get_generate_link()
    {
        $id = $this->input->post('id');
        $result = $this->MainModel->get_generate_link($id);
        if ($result) {
            echo $result->product_link;
        } else {
            echo "Link not found !!! ";
        }
    }

}

