<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class MainModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function add_new_media($data)
    {
        $this->db->insert('media', $data);
        return $this->db->insert_id();
    }

    public function try_view($order_id)
    {
        $this->db->select('*');
        $this->db->from('order_data');
        $this->db->join('tryorder', 'tryorder.order_id = order_data.order_id');
        $this->db->where('order_data.order_id', $order_id);
        $result = $this->db->get();
        return $result->result();
    }

    public function getAllData($condition = '', $tableName = '', $selectQuery = '', $order = '')
    {
        $this->db->select($selectQuery);
        if ($condition): $this->db->where($condition);
        endif;
        if ($order):$this->db->order_by($order);
        endif;
        return $this->db->get($tableName)->result();

    }

    public function getSingleData($field, $condition, $tableName, $selectQuery)
    {
        $this->db->select($selectQuery);
        $this->db->where($field, $condition);
        return $this->db->get($tableName)->row();

    }

    public function allDataById($field, $condition, $tableName, $selectQuery)
    {
        $this->db->select($selectQuery);
        $this->db->where($field, $condition);
        return $this->db->get($tableName)->result();

    }

    public function getSingleDataArrayType($field, $condition, $tableName, $selectQuery)
    {
        $this->db->select($selectQuery);
        $this->db->where($field, $condition);
        return $this->db->get($tableName)->row_array();

    }

    public function getDataRow($field, $condition, $tableName, $selectQuery)
    {
        $this->db->select($selectQuery);
        $this->db->where($field, $condition);
        return $this->db->get($tableName)->num_rows();

    }

    function insertData($tableName, $data)
    {
        return $this->db->insert($tableName, $data);
    }

    function deleteData($field, $condition, $tableName)
    {
        $this->db->where($field, $condition);
        return $this->db->delete($tableName);
    }

    function AllQueryDalta($query)
    {
        return $this->db->query($query)->result();
    }

    function SingleQueryData($query)
    {
        return $this->db->query($query)->row();
    }

    function QuerySingleData($query)
    {
        return $this->db->query($query)->row();
    }


    function QuerySingleDataDelete($query)
    {
        $this->db->query($query)->result();
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {

            return false;
        }
    }

    function updateData($field, $condition, $tableName, $data)
    {

        $this->db->where($field, $condition);
        $result = $this->db->update($tableName, $data);
        if ($result) {

            return true;
        } else {

            return false;
        }
    }

    function loginCheck($email, $password)
    {
        $this->db->select('*');
        $this->db->where(array('user_email' => $email, 'user_password' => $password));
        return $this->db->get('users')->row();
    }

    function returnInsertId($tableName, $data)
    {
        $this->db->insert($tableName, $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    function updateDataReturnInsertId($field, $condition, $tableName, $data)
    {

        $this->db->where($field, $condition);
        $this->db->update($tableName, $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;

    }

    function visitorCount($ip, $date)
    {
        $this->db->select('client_ip');
        $this->db->where('client_ip', $ip);
        $this->db->where('date', $date);
        $insert_id = $this->db->get('hitcounter')->row();
        return $insert_id;
    }

    function countByLikeCondition($field_name, $cond, $tableName)
    {
        $this->db->like($field_name, $cond, 'after');
        return $this->db->count_all_results($tableName);
    }

    function countAll($tableName)
    {
        return $this->db->count_all($tableName);
    }

    public function select_all_data_by_name($limit, $start, $fieldName, $field_title, $tableName, $orderBy)
    {
        $this->db->limit($limit, $start);
        $this->db->select('*');
        $this->db->like($fieldName, $field_title, 'both');
        $this->db->order_by($orderBy);
        $query_result = $this->db->get($tableName);
        $result = $query_result->result();
        return $result;
    }

    public function select_all_data_by_limit($limit, $start, $tableName, $orderBy)
    {
        $this->db->limit($limit, $start);
        $this->db->select('*');
        $this->db->order_by($orderBy);
        $query_result = $this->db->get($tableName);
        $result = $query_result->result();
        return $result;
    }

    public function cageory_product_rows($category_id)
    {
        $this->db->select('product.product_id');
        $this->db->join('term_relation', 'product.product_id = term_relation.product_id');
        $this->db->where('term_relation.term_id', $category_id);
        $data = $this->db->get('product');
        return $data->num_rows();

    }

    public function fetch_data($per_page, $start, $category_id, $sorting)
    {

        $this->db->select('DISTINCT(product.product_id),product_title,product_price,discount_price,product_name,product_availability');
        $this->db->join('term_relation', 'product.product_id = term_relation.product_id');
        $this->db->where('term_relation.term_id', $category_id);
            $this->db->where('product.status', 1);
        if ($sorting == 'name_asc') {
            $this->db->order_by("product.product_title", 'ASC');

        } elseif ($sorting == 'name_desc') {
            $this->db->order_by("product.product_title", 'DESC');

        } elseif ($sorting == 'price_asc') {
            $this->db->order_by("product.product_price", 'ASC');

        } elseif ($sorting == 'price_desc') {
            $this->db->order_by("product.product_price", 'DESC');

        } else {
            $this->db->order_by("product.modified_time", 'DESC');

        }

        $this->db->limit($per_page, $start);
        $data = $this->db->get('product');
        $output = '<div class="row"><div class="row no-gutters product-block-category">';
        if ($data->num_rows() > 0) {
            foreach ($data->result() as $row) {
                $output_stock='';
                $product_hover='';

                $featured_image = get_product_meta($row->product_id, 'featured_image');
                $featured_image = get_media_path($featured_image, 'thumb');

                $discount = false;

                $product_price = $sell_price = $row->product_price;

                $product_discount = $row->discount_price;
                // $discount_type = $row->discount_type;

                if ($product_discount != 0) {
                    $discount = '';

                    $product_discount = $save_money = floatval($product_discount);

                    $product_discount_price = floatval($product_discount);
                    $sell_price = $product_discount_price;

                }
                $less_money = '';

                if ($product_price > $sell_price) {
                    $less_money = formatted_price($product_price);

                }
                $product_title = $row->product_title;
                $link = base_url() . 'product/' . $row->product_name;
                $total_review_id = 0;
                $total_review_id = get_total_review($row->product_id);
              $product_availabie = $row->product_availability;

                 if($product_availabie =='Out of stock')  {
                                                 $output_stock = '<p style="font-size: 15px;
    background: yellow;
    width: 109px;
    position: absolute;
    padding: 3px;
    font-weight:bold;
    z-index: 999;
">Out of Stock</p>';

 } 
 
 if ($product_availabie != 'Out of stock') {
     
     $product_hover='<div class="xs-product-hover-area clearfix col-12">
													<div  style="margin-left: 123px;" >
														<a href="#" class="btn btn-primary btn-sm  add_to_cart"
														   data-product_id="' . $row->product_id . '" data-product_price="' . $sell_price . '"
														   data-product_title="' . $row->product_title . '" ><i class="icon icon-online-shopping-cart"></i>Add to Cart</a>
													</div>
													<div>
														<a href="#" class="btn btn-info btn-sm buy_now"
														   data-product_id="' . $row->product_id . '" data-product_price="' . $sell_price . '"
														   data-product_title="' . $row->product_title . '"><i class="icon icon-bag"></i>Buy Now</a>
					                            </div>
					</div>';
 }


                $output .= '<div class="col-md-6 col-lg-3  col-sm-12 col-12">
                                        <div class="xs-product-wraper version-2">
                                            <div class="xs-product-header media">
                        <span class="star-rating d-flex" style="margin-top: -29px;">
                            <span class="value">(' . $total_review_id . ')</span>
                        </span>

						</div> 
						'.$output_stock.'
						<a href="' . $link . '"><img src="' . $featured_image . '" alt="' . $product_title . '" width="100%"></a>
						<div class="xs-product-content text-center">
                        <span class="product-categories">
                          
                        </span>
							<h4 class="product-title"><a href="' . $link . '">' . $product_title . '</a></h4>
							<span  style="color:#00B050" class="price">
                            ' . formatted_price($sell_price) . '
                            <del style="color:red">' . $less_money . '</del>
                        </span>
						</div><!-- .xs-product-content END -->
						'.$product_hover.'
					</div>
				</div> ';
            }
            $output .= '</div></div>';
        } else {
            $output = '<h3></h3>';
        }
        return $output;


    }

    public function select_all_data()
    {
        $this->db->select('*');
        $query_result = $this->db->get('product_link');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_category()
    {
        $this->db->select('category_id,category_title');
        $query_result = $this->db->get('category');
        $result = $query_result->result();
        return $result;
    }

    public function select_link_by_id($id)
    {
        $this->db->select('product_name');
        $this->db->where('product_id', $id);
        $query_result = $this->db->get('product');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_product_by_id($id, $from_rate = null, $to_rate = null)
    {
        $this->db->select('product_commission.commission,product.product_id,product.sku,product_title,product_name,product_price,discount_price');
        $this->db->join('term_relation', 'term_relation.product_id = product.product_id');
        $this->db->join('category', 'category.category_id = term_relation.term_id', 'left');
        $this->db->join('product_commission', 'product_commission.product_id = product.product_id', 'left');
        $this->db->where('product_commission.status', 1);
        if (($from_rate) && ($to_rate)) {
            $this->db->where('product_commission.commission >=', $from_rate);
            $this->db->where('product_commission.commission <=', $to_rate);
        }
        $this->db->where('term_relation.term_id', $id);
        $query_result = $this->db->get('product');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_product_by_name($id, $product_name)
    {
        $this->db->select('product_commission.commission,product.product_id,product.sku,product_title,product_name,product_price,discount_price');
        $this->db->join('term_relation', 'term_relation.product_id = product.product_id');
        $this->db->join('category', 'category.category_id = term_relation.term_id', 'left');
        $this->db->join('product_commission', 'product_commission.product_id = product.product_id', 'left');
        $this->db->where('product_commission.status', 1);
        $this->db->like('product.product_title', $product_name);
        $this->db->where('term_relation.term_id', $id);
        $query_result = $this->db->get('product');
        $result = $query_result->result();
        return $result;
    }
    
        public function select_all_product_by_code($id, $product_code)
    {
        $this->db->select('product_commission.commission,product.product_id,product.sku,product_title,product_name,product_price,discount_price');
        $this->db->join('term_relation', 'term_relation.product_id = product.product_id');
        $this->db->join('category', 'category.category_id = term_relation.term_id', 'left');
        $this->db->join('product_commission', 'product_commission.product_id = product.product_id', 'left');
        $this->db->where('product_commission.status', 1);
        $this->db->like('product.sku', $product_code);
        $this->db->where('term_relation.term_id', $id);
        $query_result = $this->db->get('product');
        $result = $query_result->result();
        return $result;
    }

    public function select_product_id($product_name)
    {
        $this->db->select('product_id');
        $this->db->where('product_name', $product_name);
        $query_result = $this->db->get('product');
        $result = $query_result->row();
        return $result;
    }

    public function select_my_all_link($user_id)
    {
        $this->db->select('*');
        $this->db->where('user_id', $user_id);
        $this->db->order_by('id', 'desc');
        $query_result = $this->db->get('product_link_info');
        $result = $query_result->result();
        return $result;
    }

    public function select_my_all_link_by_date($user_id, $from_date, $to_date)
    {
        $this->db->select('*');
        $this->db->where('user_id', $user_id);
        $this->db->where('create_date >=', $from_date);
        $this->db->where('create_date <=', $to_date);
        $query_result = $this->db->get('product_link_info');
        $result = $query_result->result();
        return $result;
    }
    
        public function select_my_all_link_by_date3($user_id)
    {
        $this->db->select('*');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('product_link_info');
        $result = $query_result->result();
        return $result;
    }

    public function get_generate_link($id)
    {
        $this->db->select('product_link');
        $this->db->where('id', $id);
        $query_result = $this->db->get('product_link_info');
        $result = $query_result->row();
        return $result;
    }

    public function count_hit_by_user_id($user_id, $product_id = null)
    {
        $this->db->select('count(id) total_count');
        $this->db->where('user_id', $user_id);
        if ($product_id) {
            $this->db->where('product_id', $product_id);
        }
        $query_result = $this->db->get('product_hit_count');
        $result = $query_result->row();
        return $result;
    }
    
    public function check_cookies_data($get_cookies)
    {
        $this->db->select('user_id');
        $this->db->where('unique_number', $get_cookies);
        $query_result = $this->db->get('product_hit_count');
        $result = $query_result->row();
        return $result;
    }

    public function count_order($user_id, $link_id = null)
    {
        // $this->db->select('*');
        // $this->db->where('user_id', $user_id);
        // if ($link_id) {
        //     $this->db->where('link_id', $link_id);
        // }
        // $this->db->group_by('order_id');
        // $query_result = $this->db->get('user_order_count');
        // $result = $query_result->result();
        // return $result;
        
         $this->db->select('user_order_count.order_id,order_data.products');
        $this->db->where('user_order_count.user_id', $user_id);
        if ($link_id) {
            $this->db->where('user_order_count.link_id', $link_id);
        }
        $this->db->join('order_data', 'order_data.order_id = user_order_count.order_id');
        // $where = '(order_data.order_status="new" or order_data.order_status="pending_payment" or order_data.order_status="processing" or order_data.order_status="on_courier" or order_data.order_status="delivered")';
        // $this->db->where($where);
        $this->db->group_by('user_order_count.order_id');
        $query_result = $this->db->get('user_order_count');
        $result = $query_result->result();
        return $result;
    }


    public function on_process_product1($user_id, $from_date, $to_date)
    {
        $this->db->select('user_order_count.order_id');
        $this->db->where('user_order_count.user_id', $user_id);
        $this->db->where('user_order_count.order_date >=', $from_date);
        $this->db->where('user_order_count.order_date <=', $to_date);
        $this->db->join('order_data', 'order_data.order_id = user_order_count.order_id');
        $where = '(order_data.order_status="new" or order_data.order_status="pending_payment" or order_data.order_status="processing" or order_data.order_status="on_courier" or order_data.order_status="delivered")';
        $this->db->where($where);
        $this->db->group_by('user_order_count.order_id');
        $query_result = $this->db->get('user_order_count');
        $result = $query_result->result();
        return $result;
    }
        public function cancel_or_refund_product_from_search($user_id, $from_date,$to_date)
    {
        $this->db->select('user_order_count.order_id,order_data.products');
        $this->db->where('user_order_count.user_id', $user_id);
        $this->db->join('order_data', 'order_data.order_id = user_order_count.order_id');
        $where = '(order_data.order_status="cancled" or order_data.order_status="refund")';
        $this->db->where($where);
        $this->db->where('order_data.modified_time >=', $from_date);
        $this->db->where('order_data.modified_time <=', $to_date);
        $this->db->group_by('user_order_count.order_id');
        $query_result = $this->db->get('user_order_count');
        $result = $query_result->result();
        return $result;
    }

    public function cancel_or_refund_product($user_id, $link_id = null)
    {
        $this->db->select('user_order_count.order_id,order_data.products');
        $this->db->where('user_order_count.user_id', $user_id);
        if ($link_id) {
            $this->db->where('link_id', $link_id);
        }
        $this->db->join('order_data', 'order_data.order_id = user_order_count.order_id');
        $where = '(order_data.order_status="cancled" or order_data.order_status="refund")';
        $this->db->where($where);
        $this->db->group_by('user_order_count.order_id');
        $query_result = $this->db->get('user_order_count');
        $result = $query_result->result();
        return $result;
    }

    public function cancel_or_refund_product1($user_id, $from_date, $to_date)
    {
        $this->db->select('user_order_count.order_id');
        $this->db->where('user_order_count.user_id', $user_id);
        if (($from_date) && ($to_date)) {
            $this->db->where('user_order_count.order_date >=', $from_date);
            $this->db->where('user_order_count.order_date <=', $to_date);
        }
        $this->db->join('order_data', 'order_data.order_id = user_order_count.order_id');
        $where = '(order_data.order_status="cancled" or order_data.order_status="refund")';
        $this->db->where($where);
        $this->db->group_by('user_order_count.order_id');
        $query_result = $this->db->get('user_order_count');
        $result = $query_result->result();
        return $result;
    }

    public function finalized_product($user_id, $link_id = null)
    {
        $this->db->select('user_order_count.order_id,order_data.products');
        $this->db->where('user_order_count.user_id', $user_id);
        if ($link_id) {
            $this->db->where('link_id', $link_id);
        }
        $this->db->join('order_data', 'order_data.order_id = user_order_count.order_id');
        $this->db->where('order_data.order_status', "completed");
        $this->db->group_by('user_order_count.order_id');
        $query_result = $this->db->get('user_order_count');
        $result = $query_result->result();
        return $result;
    }
    
        public function finalized_product_from_search($user_id, $from_date,$to_date)
    {
        $this->db->select('user_order_count.order_id,order_data.products');
        $this->db->where('user_order_count.user_id', $user_id);
        $this->db->join('order_data', 'order_data.order_id = user_order_count.order_id');
        $this->db->where('order_data.order_status', "completed");
        $this->db->where('order_data.modified_time >=', $from_date);
        $this->db->where('order_data.modified_time <=', $to_date);
        $this->db->group_by('user_order_count.order_id');
        $query_result = $this->db->get('user_order_count');
        $result = $query_result->result();
        return $result;
    }


    public function count_total_request_commission($user_id)
    {
        $this->db->select('sum(commission_amount) total_commission_request');
        $this->db->where('user_id', $user_id);
        $this->db->where('status', 1);
        $query_result = $this->db->get('user_commission_request');
        $result = $query_result->row();
        return $result;
    }
    
        public function count_total_paid_commission_from_search($user_id, $from_date, $to_date)
    {
        $this->db->select('sum(commission_amount) total_commission_request');
        $this->db->where('user_id', $user_id);
        $this->db->where('status', 0);
        $this->db->where('user_commission_request.date >=', $from_date);
        $this->db->where('user_commission_request.date <=', $to_date);
        $query_result = $this->db->get('user_commission_request');
        $result = $query_result->row();
        return $result;
    }

    public function count_total_paid_commission($user_id, $from_date = null, $to_date = null)
    {
        $this->db->select('sum(commission_amount) total_commission_request');
        $this->db->where('user_id', $user_id);
        $this->db->where('status', 0);
        if (($from_date) && ($to_date)) {
            $this->db->where('user_commission_request.date >=', $from_date);
            $this->db->where('user_commission_request.date <=', $to_date);
        }
        $query_result = $this->db->get('user_commission_request');
        $result = $query_result->row();
        return $result;
    }

    public function select_all_request($user_id)
    {
        $this->db->select('*');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('user_commission_request');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_paid_request($user_id, $from_date = null, $to_date = null)
    {
        $this->db->select('user_commission_request.*,affiliate_users.user_f_name,affiliate_users.user_l_name');
        $this->db->where('user_commission_request.user_id', $user_id);
        $this->db->where('user_commission_request.status', 0);
        if (($from_date) && ($to_date)) {
            $this->db->where('user_commission_request.date >=', $from_date);
            $this->db->where('user_commission_request.date <=', $to_date);
        }
        $this->db->join('affiliate_users', 'affiliate_users.user_id = user_commission_request.user_id');
        $query_result = $this->db->get('user_commission_request');
        $result = $query_result->result();
        return $result;
    }
    
    public function select_single_affilator_account_information($id){
         $this->db->select('*');
        $this->db->where('user_id', $id);
        $this->db->order_by('id', 'desc');
        $query_result = $this->db->get('affiliate_information');
        $result = $query_result->row();
        return $result; 
        
    }
public function affiliate_email_cullection($id){
       $this->db->select('*');
        $this->db->where('user_id', $id);
        $this->db->order_by('id', 'desc');
        $query_result = $this->db->get('affiliate_request_information');
        $result = $query_result->row();
        return $result; 
    
}

    public function select_all_payment_request($user_id, $from_date = null, $to_date = null)
    {
        $this->db->select('sum(commission_amount) total_commission');
        $this->db->where('user_commission_request.user_id', $user_id);
        $this->db->where('user_commission_request.status', 0);
        $this->db->where('user_commission_request.date >=', $from_date);
        $this->db->where('user_commission_request.date <=', $to_date);
        $query_result = $this->db->get('user_commission_request');
        $result = $query_result->row();
        return $result;
    }

    public function count_total_commission_by_product($user_id, $product_id)
    {
        $this->db->select('commission');
        $this->db->where('user_id', $user_id);
        $this->db->where('product_id', $product_id);
        $query_result = $this->db->get('user_commission');
        $result = $query_result->row();
        return $result;
    }

    public function approved_payment_edit_from($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $query_result = $this->db->get('user_commission_request');
        $result = $query_result->result();
        return $result;
    }

    public function update_payment($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('user_commission_request', $data);
    }

    public function select_cookies_time()
    {
        $this->db->select('*');
        $query_result = $this->db->get('set_cookies_time');
        $result = $query_result->row();
        return $result;
    }

    public function select_product_id_by_order_id($order_id)
    {
        $this->db->select('product.product_price,product.discount_price,product_commission.product_id,user_order_count.user_id,product_commission.commission');
        $this->db->where('user_order_count.order_id', $order_id);
        $this->db->join('product_commission', 'product_commission.product_id=user_order_count.product_id');
        $this->db->where('product_commission.status', 1);
        $this->db->join('product', 'product.product_id=user_order_count.product_id');
        $query_result = $this->db->get('user_order_count');
        $result = $query_result->result();
        return $result;
    }


    //    new code 2019-10-02
    public function count_total_commission($user_id, $from_date = null, $to_date = null)
    {
        $this->db->select('user_commission.order_id,order_data.products');
        $this->db->join('order_data', 'order_data.order_id=user_commission.order_id');
        $this->db->where('user_id', $user_id);
        if (($from_date) && ($to_date)) {
            $this->db->where('commission_date >=', $from_date);
            $this->db->where('commission_date <=', $to_date);
        }
        $this->db->group_by('user_commission.order_id');
        $query_result = $this->db->get('user_commission');
        $result = $query_result->result();
        return $result;
    }
        public function on_process_product_from_search($user_id, $from_date,$to_date)
    {
        $this->db->select('user_order_count.order_id,order_data.products');
        $this->db->where('user_order_count.user_id', $user_id);
        $this->db->join('order_data', 'order_data.order_id = user_order_count.order_id');
        $where = '(order_data.order_status="new" or order_data.order_status="pending_payment" or order_data.order_status="processing" or order_data.order_status="on_courier" or order_data.order_status="delivered")';
        $this->db->where($where);
        $this->db->where('order_data.modified_time >=', $from_date);
        $this->db->where('order_data.modified_time <=', $to_date);
        $this->db->group_by('user_order_count.order_id');
        $query_result = $this->db->get('user_order_count');
        $result = $query_result->result();
        return $result;
    }

 public function totalorder_by_link_by_sujon($user_id, $link_id = null)
    {
        $this->db->select('user_order_count.order_id,order_data.products');
        $this->db->where('user_order_count.user_id', $user_id);
        if ($link_id) {
            $this->db->where('user_order_count.link_id', $link_id);
        }
        $this->db->join('order_data', 'order_data.order_id = user_order_count.order_id');
       
        $this->db->group_by('user_order_count.order_id');
        $query_result = $this->db->get('user_order_count');
        $result = $query_result->result();
        return $result;
    }
    public function on_process_product($user_id, $link_id = null)
    {
        $this->db->select('user_order_count.order_id,order_data.products');
        $this->db->where('user_order_count.user_id', $user_id);
        if ($link_id) {
            $this->db->where('user_order_count.link_id', $link_id);
        }
        $this->db->join('order_data', 'order_data.order_id = user_order_count.order_id');
        $where = '(order_data.order_status="new" or order_data.order_status="pending_payment" or order_data.order_status="processing" or order_data.order_status="on_courier" or order_data.order_status="delivered")';
        $this->db->where($where);
        $this->db->group_by('user_order_count.order_id');
        $query_result = $this->db->get('user_order_count');
        $result = $query_result->result();
        return $result;
    }
    public function on_process_product_approx_earning($user_id, $link_id = null)
    {
        $this->db->select('user_order_count.order_id,order_data.products');
        $this->db->where('user_order_count.user_id', $user_id);
        if ($link_id) {
            $this->db->where('link_id', $link_id);
        }
        $this->db->join('order_data', 'order_data.order_id = user_order_count.order_id');
        $where = '(order_data.order_status="new" or order_data.order_status="pending_payment" or order_data.order_status="processing" or order_data.order_status="on_courier" or order_data.order_status="delivered"  or order_data.order_status="refund" or order_data.order_status="cancled" or order_data.order_status="completed")';
        $this->db->where($where);
        $this->db->group_by('user_order_count.order_id');
        $query_result = $this->db->get('user_order_count');
        $result = $query_result->result();
        return $result;
    }
    
        public function on_process_product_approx_earning_from_search($user_id,$from_date,$to_date)
    {
        $this->db->select('user_order_count.order_id,order_data.products');
        $this->db->where('user_order_count.user_id', $user_id);
        $this->db->join('order_data', 'order_data.order_id = user_order_count.order_id');
        $where = '(order_data.order_status="new" or order_data.order_status="pending_payment" or order_data.order_status="processing" or order_data.order_status="on_courier" or order_data.order_status="delivered"  or order_data.order_status="refund" or order_data.order_status="cancled" or order_data.order_status="completed")';
        $this->db->where($where);
                $this->db->where('order_data.modified_time >=', $from_date);
        $this->db->where('order_data.modified_time <=', $to_date);
        $this->db->group_by('user_order_count.order_id');
        $query_result = $this->db->get('user_order_count');
        $result = $query_result->result();
        return $result;
    }
    
    public function count_total_commission_without_completed($user_id)
    {
        $this->db->select('sum(commission) total_commission');
        $this->db->where('user_id', $user_id);
        $this->db->where('status', 1);
        $query_result = $this->db->get('user_commission');
        $result = $query_result->row();
        return $result;
    }

    public function select_all_product_delivered_list()
    {
        $this->db->select('user_commission.*,affiliate_users.user_f_name,affiliate_users.user_l_name');
        $this->db->where('user_commission.status', 1);
        $this->db->join('affiliate_users', 'affiliate_users.user_id = user_commission.user_id');
        $query_result = $this->db->get('user_commission');
        $result = $query_result->result();
        return $result;
    }

    public function approved_product_delivered($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('user_commission', $data);
    }

    public function cancel_product_delivered($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('user_commission');
    }

    public function select_all_product_price($from_date, $to_date, $user_id)
    {
        $this->db->select('product.product_price,product.discount_price');
        $this->db->where('user_commission.status', 2);
        $this->db->where('user_commission.user_id', $user_id);
        $this->db->where('user_commission.date >=', $from_date);
        $this->db->where('user_commission.date <=', $to_date);
        $this->db->join('product', 'product.product_id = user_commission.product_id');
        $query_result = $this->db->get('user_commission');
        $result = $query_result->result();
        return $result;
    }

    public function check_closing($from_date, $to_date, $closing_status)
    {
        $this->db->select('product_id');
        $this->db->where('status', 2);
        $this->db->where('closing_status', $closing_status);
        $this->db->where('product_id', 10000000);
        $this->db->where('date >=', $from_date);
        $this->db->where('date <=', $to_date);
        $query_result = $this->db->get('user_commission');
        $result = $query_result->row();
        return $result;
    }

    public function update_cookies_time($data)
    {
        $this->db->where('id', 1);
        return $this->db->update('set_cookies_time', $data);
    }

    public function select_closing_date()
    {
        $this->db->select('*');
        $query_result = $this->db->get('set_closing_date');
        $result = $query_result->row();
        return $result;
    }

    public function update_closing_time($data)
    {
        $this->db->where('id', 1);
        return $this->db->update('set_closing_date', $data);
    }

    public function select_affiliate_request($user_id)
    {
        $this->db->select('affiliate_request_status');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('affiliate_users');
        $result = $query_result->row();
        return $result;
    }

    public function update_status($data1, $userRole)
    {
        $this->db->where('user_id', $userRole);
        return $this->db->update('affiliate_users', $data1);
    }

    public function approved_affiliate_request($data, $id)
    {
        $this->db->where('user_id', $id);
        return $this->db->update('affiliate_users', $data);
    }

    public function reject_affiliate_request($data, $id)
    {
        $this->db->where('user_id', $id);
        return $this->db->update('affiliate_users', $data);
    }

    public function cancel_affiliate_request($data, $id)
    {
        $this->db->where('user_id', $id);
        return $this->db->update('affiliate_users', $data);
    }


//    my new code
    public function select_all_product_commission()
    {
        $this->db->select('product_commission.*,product.discount_price,product.sku,product.product_name,product.product_title,product.product_price');
        $this->db->join('product', 'product.product_id = product_commission.product_id');
        $this->db->order_by('product_commission.product_id');
        $query_result = $this->db->get('product_commission');
        $result = $query_result->result();
        return $result;
    }

    public function updateCommission($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('product_commission', $data);
    }

    public function select_cancel_affiliate_request($user_id)
    {
        $this->db->select('affiliate_request_information.*');
        $this->db->where('affiliate_users.user_id', $user_id);
        $this->db->where('affiliate_users.affiliate_request_status', 3);
        $this->db->join('affiliate_request_information', 'affiliate_request_information.user_id = affiliate_users.user_id', 'left');
        $query_result = $this->db->get('affiliate_users');
        $result = $query_result->result();
        return $result;
    }

    public function select_user_login_info($user_id)
    {
        $this->db->select('*');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('affiliate_users');
        $result = $query_result->result();
        return $result;
    }

    public function update_affiliate_request($data, $userRole)
    {
        $this->db->where('user_id', $userRole);
        return $this->db->update('affiliate_request_information', $data);
    }

    public function select_affiliate_request_by_id($user_id)
    {
        $this->db->select('affiliate_request_information.*,affiliate_users.affiliate_request_status,affiliate_users.approved_date');
        $this->db->where('affiliate_request_information.user_id', $user_id);
        $this->db->join('affiliate_users', 'affiliate_users.user_id = affiliate_request_information.user_id','left');
        $query_result = $this->db->get('affiliate_request_information');
        $result = $query_result->result();
        return $result;
    }

    public function cancel_affiliate_request_data($data, $id)
    {
        $this->db->where('user_id', $id);
        return $this->db->update('affiliate_request_information', $data);
    }

    public function check_payment_info($user_id)
    {
        $this->db->select('*');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('affiliate_information');
        $result = $query_result->row();
        return $result;
    }

    public function affiliate_information_status_update($data, $id)
    {
        $this->db->where('user_id', $id);
        return $this->db->update('affiliate_information', $data);
    }

    public function count_total_processing_commission($order_id, $user_id, $from_date = null, $to_date = null)
    {
        $this->db->select('user_commission.commission');
        $this->db->where('user_order_count.order_id', $order_id);
        $this->db->where('user_order_count.user_id', $user_id);
        if (($from_date) && ($to_date)) {
            $this->db->where('user_order_count.order_date >=', $from_date);
            $this->db->where('user_order_count.order_date <=', $to_date);
        }
        $this->db->join('user_commission', 'user_commission.product_id = user_order_count.product_id');
        $query_result = $this->db->get('user_order_count');
        $result = $query_result->result();
        return $result;
    }

    public function select_user_account_info($user_id)
    {
        $this->db->select('payment_type');
        $this->db->where('user_id', $user_id);
        $this->db->where('status', 1);
        $query_result = $this->db->get('affiliate_information');
        $result = $query_result->row();
        return $result;
    }

    public function select_user_all_account_info($user_id)
    {
        $this->db->select('*');
        $this->db->where('user_id', $user_id);
        $this->db->where('status', 1);
        $query_result = $this->db->get('affiliate_information');
        $result = $query_result->result();
        return $result;
    }

    public function select_info_details($id)
    {
        $this->db->select('user_commission_request.*,voucher_details.transaction_details');
        $this->db->where('user_commission_request.user_id', $id);
        $this->db->join('voucher_details', 'voucher_details.voucher_number = user_commission_request.vp_number', 'left');
        $query_result = $this->db->get('user_commission_request');
        $result = $query_result->row();
        return $result;
    }

    public function select_affiliater_name($id)
    {
        $this->db->select('user_f_name');
        $this->db->where('user_id', $id);
        $query_result = $this->db->get('affiliate_users');
        $result = $query_result->row();
        return $result;
    }

    public function update_order_payment_status($data, $id)
    {
        $this->db->where('order_id', $id);
        return $this->db->update('order_data', $data);
    }

    public function update_order_payment_request($data)
    {
        $this->db->where('status', 1);
        $this->db->where('transaction_number', 0);
        return $this->db->update('user_commission_request', $data);
    }

    public function select_link_id($link)
    {
        $this->db->select('id');
        $this->db->where('product_link', $link);
        $query_result = $this->db->get('product_link_info');
        $result = $query_result->row();
        return $result;
    }

    public function delete_prev_order_commission($order_id)
    {
        $this->db->where('order_id', $order_id);
        $this->db->delete('user_commission');
    }

    public function delete_prev_order($order_id)
    {
        $this->db->where('product_id', $order_id);
        $this->db->delete('user_order_count');
    }

    public function check_change($type, $var)
    {
        $this->db->select('id');
        if ($type == 1) {
            $this->db->where('name', $var);
        } else if ($type == 2) {
            $this->db->where('email', $var);
        } else if ($type == 3) {
            $this->db->where('phone_number', $var);
        } else if ($type == 4) {
            $this->db->where('present_address', $var);
        } else if ($type == 5) {
            $this->db->where('permanent_address', $var);
        } else if ($type == 6) {
            $this->db->where('website_url', $var);
        } else if ($type == 7) {
            $this->db->where('facebook_page_url', $var);
        } else if ($type == 8) {
            $this->db->where('facebook_profile_url', $var);
        } else if ($type == 9) {
            $this->db->where('youtube_channel_url', $var);
        } else if ($type == 10) {
            $this->db->where('promotional_strategy', $var);
        }
        $query_result = $this->db->get('affiliate_request_information');
        $result = $query_result->row();
        return $result;
    }

 public function select_product_commission_from_affilite_view($product_id,$order_id)
    {
        $this->db->select('*');
        $this->db->where('product_id', $product_id);
          $this->db->where('order_id', $order_id);
        $query_result = $this->db->get('user_commission');
        $result = $query_result->row();
        return $result;
    }
    public function select_product_commission($product_id)
    {
        $this->db->select('*');
        $this->db->where('product_id', $product_id);
        $query_result = $this->db->get('user_commission');
        $result = $query_result->row();
        return $result;
    }
    
        public function select_product_commission_affiliate($product_id)
    {
        $this->db->select('product_commission.commission,product.product_price,product.discount_price');
        $this->db->where('product_commission.product_id', $product_id);
        $this->db->join('product', 'product.product_id = product_commission.product_id', 'left');
        $query_result = $this->db->get('product_commission');
        $result = $query_result->row();
        return $result;
    }

    public function select_commission_request_status($user_id)
    {
        $this->db->select('status');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('user_commission_request');
        $result = $query_result->row();
        return $result;
    }

    public function check_month_in_request($user_id, $month_start, $month_end)
    {
        $this->db->select('status');
        $this->db->where('user_id', $user_id);
        $this->db->where('date >=', $month_start);
        $this->db->where('date <=', $month_end);
        $query_result = $this->db->get('user_commission_request');
        $result = $query_result->row();
        return $result;
        
    }
    public function get_single_affiliate_information($user_id){
        $this->db->select('status');
        $this->db->where('user_id', $user_id);
           $this->db->where('status', 1);
           $this->db->order_by('id', 'desc');
        $query_result = $this->db->get('affiliate_information');
       return  $result = $query_result->row(); 
    }

    public function select_order_data($order_id)
    {
        $this->db->select('*');
        $this->db->where('order_id', $order_id);
        $query_result = $this->db->get('order_data');
        $result = $query_result->result();
        return $result;
    }

    function countallCustom()
    {
        $this->db->select('count(user_id) count_total_rows');
        $this->db->where('affiliate_request_status !=', 0);
        $query_result = $this->db->get('affiliate_users');
        $result = $query_result->row();
        return $result;
    }

    function countAllByLikeCondition($field, $cond)
    {
        $this->db->select('count(affiliate_users.user_id) count_total_rows');
        $this->db->where('affiliate_request_status !=', 0);
        $this->db->like($field, $cond);
        $query_result = $this->db->get('affiliate_users');
        $result = $query_result->row();
        return $result;
    }

    function countAllByLikeCondition1($field, $cond)
    {
        $this->db->select('count(affiliate_users.user_id) count_total_rows');
        $this->db->where('affiliate_request_status !=', 0);
        $this->db->like($field, $cond);
        $query_result = $this->db->get('affiliate_users');
        $result = $query_result->row();
        return $result;
    }

    function countAllByLikeCondition1_phone_number($field, $cond)
    {
        $this->db->select('count(affiliate_users.user_id) count_total_rows');
        $this->db->where('affiliate_request_status !=', 0);
        $this->db->like($field, $cond);
        $query_result = $this->db->get('affiliate_users');
        $result = $query_result->row();
        return $result;
    }

    function countAllByLikeCondition1_date($from_date, $to_date, $type = null)
    {
        $this->db->select('count(affiliate_users.user_id) count_total_rows');
        $this->db->where('affiliate_request_status !=', 0);
        if ($type) {
            $this->db->where('affiliate_users.affiliate_request_status', $type);
            $this->db->where('affiliate_users.created_date >=', $from_date);
            $this->db->where('affiliate_users.created_date <=', $to_date);
        } else {
            $this->db->where('affiliate_users.created_date >=', $from_date);
            $this->db->where('affiliate_users.created_date <=', $to_date);
        }

        $query_result = $this->db->get('affiliate_users');
        $result = $query_result->row();
        return $result;
    }

    public function select_affiliate_request_by_status($limit, $start)
    {
        $this->db->limit($limit, $start);
        $this->db->select('*');
        $this->db->order_by('user_id', 'desc');
        $this->db->where('affiliate_request_status !=', 0);
        $query_result = $this->db->get('affiliate_users');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_affiliate_id($limit, $start, $affiliate_id)
    {
        $this->db->limit($limit, $start);
        $this->db->select('*');
        $this->db->where('affiliate_request_status !=', 0);
        $this->db->where('user_id', $affiliate_id);
        $query_result = $this->db->get('affiliate_users');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_affiliate_name($limit, $start, $affiliate_name)
    {
        $this->db->limit($limit, $start);
        $this->db->select('*');
        $this->db->where('affiliate_request_status !=', 0);
        $this->db->like('user_f_name', $affiliate_name);
        $query_result = $this->db->get('affiliate_users');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_affiliate_phone_number($limit, $start, $phone_number)
    {
        $this->db->limit($limit, $start);
        $this->db->select('*');
        $this->db->where('affiliate_request_status !=', 0);
        $this->db->like('user_mobile', $phone_number);
        $query_result = $this->db->get('affiliate_users');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_affiliate_date($limit, $start, $from_date, $to_date, $type = null)
    {
        $this->db->limit($limit, $start);
        $this->db->select('*');
        $this->db->where('affiliate_request_status !=', 0);
        if ($type) {
            $this->db->where('affiliate_request_status', $type);
            $this->db->where('created_date >=', $from_date);
            $this->db->where('created_date <=', $to_date);
        } else {
            $this->db->where('created_date >=', $from_date);
            $this->db->where('created_date <=', $to_date);
        }

        $query_result = $this->db->get('affiliate_users');
        $result = $query_result->result();
        return $result;
    }


    function countAllByLikeCondition2($cond)
    {
        $this->db->select('count(order_data.order_id) count_total_rows');
        $this->db->join('affiliate_users', 'affiliate_users.user_id = order_data.affiliate_user_id', 'left');
        $this->db->where('affiliate_users.affiliate_request_status', 2);
        $this->db->join('user_commission', 'user_commission.order_id = order_data.order_id', 'left');
        $this->db->like('affiliate_users.user_id', $cond);
        $this->db->group_by('order_data.order_id');
        $query_result = $this->db->get('order_data');
        $result = $query_result->row();
        return $result;
    }

    function countAllByLikeCondition12($cond)
    {
        $this->db->select('count(affiliate_users.user_id) count_total_rows');
        $this->db->join('affiliate_users', 'affiliate_users.user_id = order_data.affiliate_user_id', 'left');
        $this->db->where('affiliate_users.affiliate_request_status', 2);
        $this->db->join('user_commission', 'user_commission.order_id = order_data.order_id', 'left');
        $this->db->like('affiliate_users.user_f_name', $cond);
        $this->db->group_by('order_data.order_id');
        $query_result = $this->db->get('order_data');
        $result = $query_result->row();
        return $result;
    }

    function countAllByLikeCondition12_date($from_date, $to_date, $type = null)
    {
        $this->db->select('count(affiliate_users.user_id) count_total_rows');
        $this->db->join('affiliate_users', 'affiliate_users.user_id = order_data.affiliate_user_id', 'left');
        $this->db->where('affiliate_users.affiliate_request_status', 2);
        $this->db->join('user_commission', 'user_commission.order_id = order_data.order_id', 'left');
        if ($type) {
            $this->db->where('order_data.order_status', $type);
            $this->db->where('user_commission.commission_date >=', $from_date);
            $this->db->where('user_commission.commission_date <=', $to_date);
        } else {
            $this->db->where('user_commission.commission_date >=', $from_date);
            $this->db->where('user_commission.commission_date <=', $to_date);
        }
        $this->db->group_by('order_data.order_id');
        $query_result = $this->db->get('order_data');
        $result = $query_result->row();
        return $result;
    }

    function countallCustom1()
    {
        $this->db->select('count(order_data.order_id) count_total_rows');
        $this->db->join('affiliate_users', 'affiliate_users.user_id = order_data.affiliate_user_id', 'left');
        $this->db->where('affiliate_users.affiliate_request_status', 2);
        $this->db->join('user_commission', 'user_commission.order_id = order_data.order_id', 'left');
        $query_result = $this->db->get('order_data');
        $result = $query_result->row();
        return $result;
    }

    public function select_all_affiliate_order($limit, $start)
    {
        $this->db->limit($limit, $start);
        $this->db->select('order_data.payment_status,order_data.order_status,order_data.affiliate_user_id,order_data.order_id,order_data.created_time,order_data.modified_time,order_data.order_total,user_commission.commission,affiliate_users.user_f_name,affiliate_users.user_l_name');
        $this->db->join('affiliate_users', 'affiliate_users.user_id = order_data.affiliate_user_id', 'left');
        $this->db->where('affiliate_users.affiliate_request_status', 2);
        $this->db->join('user_commission', 'user_commission.order_id = order_data.order_id', 'left');
        $this->db->group_by('order_data.order_id');
        $this->db->order_by('order_data.order_id', 'desc');
        $query_result = $this->db->get('order_data');
        $result = $query_result->result();
        return $result;
    }
    
    public function select_single_affilator_email($id){
        
          $this->db->select('*');
        $this->db->where('user_id', $id);
        $query_result = $this->db->get('affiliate_request_information');
       return $result = $query_result->row();
         
    }

    public function select_all_affiliate_id2($limit, $start, $affiliate_id)
    {
        $this->db->limit($limit, $start);
        $this->db->select('order_data.payment_status,order_data.order_status,order_data.affiliate_user_id,order_data.order_id,order_data.modified_time,order_data.order_total,user_commission.commission,affiliate_users.user_f_name,affiliate_users.user_l_name');
        $this->db->join('affiliate_users', 'affiliate_users.user_id = order_data.affiliate_user_id', 'left');
        $this->db->where('affiliate_users.affiliate_request_status', 2);
        $this->db->join('user_commission', 'user_commission.order_id = order_data.order_id', 'left');
        $this->db->where('affiliate_users.user_id', $affiliate_id);
        $this->db->group_by('order_data.order_id');
        $query_result = $this->db->get('order_data');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_affiliate_name2($limit, $start, $affiliate_name)
    {
        $this->db->limit($limit, $start);
        $this->db->select('order_data.payment_status,order_data.order_status,order_data.affiliate_user_id,order_data.order_id,order_data.modified_time,order_data.order_total,user_commission.commission,affiliate_users.user_f_name,affiliate_users.user_l_name');
        $this->db->join('affiliate_users', 'affiliate_users.user_id = order_data.affiliate_user_id', 'left');
        $this->db->where('affiliate_users.affiliate_request_status', 2);
        $this->db->join('user_commission', 'user_commission.order_id = order_data.order_id', 'left');
        $this->db->like('affiliate_users.user_f_name', $affiliate_name);
        $this->db->group_by('order_data.order_id');
        $query_result = $this->db->get('order_data');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_affiliate_date2($limit, $start, $from_date, $to_date, $type = null)
    {
        $this->db->limit($limit, $start);
        $this->db->select('order_data.payment_status,order_data.order_status,order_data.affiliate_user_id,order_data.order_id,order_data.modified_time,order_data.order_total,user_commission.commission,affiliate_users.user_f_name,affiliate_users.user_l_name');
        $this->db->join('affiliate_users', 'affiliate_users.user_id = order_data.affiliate_user_id', 'left');
        $this->db->where('affiliate_users.affiliate_request_status', 2);
        $this->db->join('user_commission', 'user_commission.order_id = order_data.order_id', 'left');
        if ($type) {
            $this->db->where('order_data.order_status', $type);
            $this->db->where('user_commission.commission_date >=', $from_date);
            $this->db->where('user_commission.commission_date <=', $to_date);
        } else {
            $this->db->where('user_commission.commission_date >=', $from_date);
            $this->db->where('user_commission.commission_date <=', $to_date);
        }
        $this->db->group_by('order_data.order_id');
        $query_result = $this->db->get('order_data');
        $result = $query_result->result();
        return $result;
    }


    // =============================
    // payment request for admin
    // ==============================

    function countall_for_payment_request()
    {
        $this->db->select('count(id) count_total_rows');
        $query_result = $this->db->get('user_commission_request');
        $result = $query_result->row();
        return $result;
    }

    function countAllByLikeCondition_payment_request($affiliate_id)
    {
        $this->db->select('count(id) count_total_rows');
        $this->db->join('affiliate_users', 'affiliate_users.user_id = user_commission_request.user_id');
        $this->db->where('affiliate_users.user_id', $affiliate_id);
        $query_result = $this->db->get('user_commission_request');
        $result = $query_result->row();
        return $result;
    }

    function countAllByLikeCondition_payment_request_name($affiliate_name)
    {
        $this->db->select('count(id) count_total_rows');
        $this->db->join('affiliate_users', 'affiliate_users.user_id = user_commission_request.user_id');
        $this->db->like('affiliate_users.user_f_name', $affiliate_name);
        $query_result = $this->db->get('user_commission_request');
        $result = $query_result->row();
        return $result;
    }

    function countAllByLikeCondition_payment_request_phone_number($phone_number)
    {
        $this->db->select('count(id) count_total_rows');
        $this->db->join('affiliate_users', 'affiliate_users.user_id = user_commission_request.user_id');
        $this->db->like('affiliate_users.user_mobile', $phone_number);
        $query_result = $this->db->get('user_commission_request');
        $result = $query_result->row();
        return $result;
    }

    function countAllByLikeCondition_payment_request_date($from_date, $to_date, $affiliate_name = null)
    {
        $this->db->select('count(id) count_total_rows');
        $this->db->join('affiliate_users', 'affiliate_users.user_id = user_commission_request.user_id');
        if ($affiliate_name) {
            $this->db->like('affiliate_users.user_f_name', $affiliate_name);
            $this->db->where('user_commission_request.payment_date >=', $from_date);
            $this->db->where('user_commission_request.payment_date <=', $to_date);
        } else {
            $this->db->where('user_commission_request.date >=', $from_date);
            $this->db->where('user_commission_request.date <=', $to_date);
        }
        $query_result = $this->db->get('user_commission_request');
        $result = $query_result->row();
        return $result;
    }

    function countAllByLikeCondition_date_user_profile($from_date, $to_date)
    {
        $this->db->select('count(id) count_total_rows');
        $this->db->join('affiliate_users', 'affiliate_users.user_id = user_commission_request.user_id');
        $this->db->where('affiliate_users.created_date >=', $from_date);
        $this->db->where('affiliate_users.created_date <=', $to_date);
        $query_result = $this->db->get('user_commission_request');
        $result = $query_result->row();
        return $result;
    }

    public function select_all_request_for_admin($limit, $start)
    {
        $this->db->limit($limit, $start);
        $this->db->select('user_commission_request.*,affiliate_users.user_id,affiliate_users.user_f_name,affiliate_users.user_l_name');
        $this->db->join('affiliate_users', 'affiliate_users.user_id = user_commission_request.user_id');
        $this->db->order_by('user_commission_request.date', 'desc');
        $query_result = $this->db->get('user_commission_request');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_request_for_admin_by_id($limit, $start, $affiliate_id)
    {
        $this->db->limit($limit, $start);
        $this->db->select('user_commission_request.*,affiliate_users.user_id,affiliate_users.user_f_name,affiliate_users.user_l_name');
        $this->db->join('affiliate_users', 'affiliate_users.user_id = user_commission_request.user_id');
        $this->db->where('affiliate_users.user_id', $affiliate_id);
        $query_result = $this->db->get('user_commission_request');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_request_for_admin_by_name($limit, $start, $affiliate_name)
    {
        $this->db->limit($limit, $start);
        $this->db->select('user_commission_request.*,affiliate_users.user_id,affiliate_users.user_f_name,affiliate_users.user_l_name');
        $this->db->join('affiliate_users', 'affiliate_users.user_id = user_commission_request.user_id');
        $this->db->like('affiliate_users.user_f_name', $affiliate_name);
        $query_result = $this->db->get('user_commission_request');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_request_for_admin_by_date($limit, $start, $from_date, $to_date, $affiliate_name = null)
    {
        $this->db->limit($limit, $start);
        $this->db->select('user_commission_request.*,affiliate_users.user_id,affiliate_users.user_f_name,affiliate_users.user_l_name');
        $this->db->join('affiliate_users', 'affiliate_users.user_id = user_commission_request.user_id');
        if ($affiliate_name) {
            $this->db->like('affiliate_users.user_f_name', $affiliate_name);
            $this->db->where('user_commission_request.payment_date >=', $from_date);
            $this->db->where('user_commission_request.payment_date <=', $to_date);
        } else {
            $this->db->where('user_commission_request.date >=', $from_date);
            $this->db->where('user_commission_request.date <=', $to_date);
        }
        $query_result = $this->db->get('user_commission_request');
        $result = $query_result->result();
        return $result;
    }



    // =============================
    // affiliate_profile
    // ==============================

    function countall_for_affiliate_profile()
    {
        $this->db->select('count(id) count_total_rows');
        $query_result = $this->db->get('affiliate_users');
        $result = $query_result->row();
        return $result;
    }

    function countAllByLikeCondition_affiliate_profile($affiliate_id)
    {
        $this->db->select('count(id) count_total_rows');
        $this->db->join('affiliate_users', 'affiliate_users.user_id = user_commission_request.user_id');
        $this->db->where('affiliate_users.user_id', $affiliate_id);
        $query_result = $this->db->get('affiliate_users');
        $result = $query_result->row();
        return $result;
    }

    function countAllByLikeCondition_affiliate_profile_name($affiliate_name)
    {
        $this->db->select('count(id) count_total_rows');
        $this->db->join('affiliate_users', 'affiliate_users.user_id = user_commission_request.user_id');
        $this->db->like('affiliate_users.user_f_name', $affiliate_name);
        $query_result = $this->db->get('affiliate_users');
        $query_result = $this->db->get('order_data');
        $result = $query_result->row();
        return $result;
    }


    public function select_all_affiliate($limit, $start)
    {
        $this->db->limit($limit, $start);
        $this->db->select('*');
        $this->db->where('affiliate_request_status', 2);
        $this->db->order_by('user_id', 'desc');
        $query_result = $this->db->get('affiliate_users');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_affiliate_by_id($limit, $start, $affiliate_id)
    {
        $this->db->limit($limit, $start);
        $this->db->select('*');
        $this->db->where('affiliate_request_status', 2);
        $this->db->where('user_id', $affiliate_id);
        $query_result = $this->db->get('affiliate_users');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_affiliate_by_name($limit, $start, $affiliate_name)
    {
        $this->db->limit($limit, $start);
        $this->db->select('*');
        $this->db->where('affiliate_request_status', 2);
        $this->db->like('user_f_name', $affiliate_name);
        $query_result = $this->db->get('affiliate_users');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_affiliate_by_phone_number($limit, $start, $phone_number)
    {
        $this->db->limit($limit, $start);
        $this->db->select('*');
        $this->db->where('affiliate_request_status', 2);
        $this->db->like('user_mobile', $phone_number);
        $query_result = $this->db->get('affiliate_users');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_affiliate_date_user_profile($limit, $start, $from_date, $to_date)
    {
        $this->db->limit($limit, $start);
        $this->db->select('*');
        $this->db->where('affiliate_request_status', 2);
        $this->db->where('affiliate_users.created_date >=', $from_date);
        $this->db->where('affiliate_users.created_date <=', $to_date);
        $query_result = $this->db->get('affiliate_users');
        $result = $query_result->result();
        return $result;
    }


    // =============================
    // bill closing
    // ==============================

    function countall_for_bill_closing()
    {
        $this->db->select('count(order_data.order_id) count_total_rows');
        $this->db->where('order_data.order_status', 'completed');
        $this->db->where('order_data.payment_status', 0);
        $this->db->join('affiliate_users', 'affiliate_users.user_id = order_data.affiliate_user_id', 'left');
        $this->db->join('user_commission', 'user_commission.order_id = order_data.order_id', 'left');
        $this->db->group_by('order_data.order_id');
        $query_result = $this->db->get('order_data');
        $result = $query_result->row();
        return $result;
    }

    function countAllByLikeCondition_bill_closing($affiliate_id)
    {
        $this->db->select('count(order_data.order_id) count_total_rows');
        $this->db->where('order_data.order_status', 'completed');
        $this->db->where('order_data.payment_status', 0);
        $this->db->join('affiliate_users', 'affiliate_users.user_id = order_data.affiliate_user_id', 'left');
        $this->db->join('user_commission', 'user_commission.order_id = order_data.order_id', 'left');
        $this->db->where('affiliate_users.user_id', $affiliate_id);
        $this->db->group_by('order_data.order_id');
        $query_result = $this->db->get('order_data');
        $result = $query_result->row();
        return $result;
    }

    function countAllByLikeCondition_bill_closing_name($affiliate_name)
    {
        $this->db->select('count(order_data.order_id) count_total_rows');
        $this->db->where('order_data.order_status', 'completed');
        $this->db->where('order_data.payment_status', 0);
        $this->db->join('affiliate_users', 'affiliate_users.user_id = order_data.affiliate_user_id', 'left');
        $this->db->join('user_commission', 'user_commission.order_id = order_data.order_id', 'left');
        $this->db->like('affiliate_users.user_f_name', $affiliate_name);
        $this->db->group_by('order_data.order_id');
        $query_result = $this->db->get('order_data');
        $result = $query_result->row();
        return $result;
    }

    function countAllByLikeCondition_bill_closing_date($from_date, $to_date, $affiliate_name = null)
    {
        $this->db->select('count(order_data.order_id) count_total_rows');
        $this->db->where('order_data.order_status', 'completed');
        $this->db->where('order_data.payment_status', 0);
        $this->db->join('affiliate_users', 'affiliate_users.user_id = order_data.affiliate_user_id', 'left');
        $this->db->join('user_commission', 'user_commission.order_id = order_data.order_id', 'left');
        if ($affiliate_name) {
            $this->db->like('affiliate_users.user_f_name', $affiliate_name);
            $this->db->where('user_commission.commission_date >=', $from_date);
            $this->db->where('user_commission.commission_date <=', $to_date);
        } else {
            $this->db->where('user_commission.commission_date >=', $from_date);
            $this->db->where('user_commission.commission_date <=', $to_date);
        }
        $this->db->group_by('order_data.order_id');
        $query_result = $this->db->get('order_data');
        $result = $query_result->row();
        return $result;
    }

    public function select_all_bill_closing($limit, $start)
    {
        $this->db->limit($limit, $start);
        $this->db->select('order_data.affiliate_user_id,order_data.order_id,order_data.modified_time,order_data.order_total,order_data.shipping_charge,order_data.products,user_commission.commission,affiliate_users.user_f_name,affiliate_users.user_l_name');
        $this->db->where('order_data.order_status', 'completed');
        $this->db->where('order_data.payment_status', 0);
        $this->db->where('affiliate_users.affiliate_request_status', 2);
        $this->db->join('affiliate_users', 'affiliate_users.user_id = order_data.affiliate_user_id', 'left');
        $this->db->join('user_commission', 'user_commission.order_id = order_data.order_id', 'left');
        $this->db->group_by('order_data.order_id');
        $this->db->order_by('order_data.order_id', 'desc');
        $query_result = $this->db->get('order_data');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_bill_closing_by_id($limit, $start, $affiliate_id)
    {
        $this->db->limit($limit, $start);
        $this->db->select('order_data.affiliate_user_id,order_data.order_id,order_data.modified_time,order_data.order_total,user_commission.commission,affiliate_users.user_f_name,affiliate_users.user_l_name');
        $this->db->where('order_data.order_status', 'completed');
        $this->db->where('order_data.payment_status', 0);
        $this->db->join('affiliate_users', 'affiliate_users.user_id = order_data.affiliate_user_id', 'left');
        $this->db->join('user_commission', 'user_commission.order_id = order_data.order_id', 'left');
        $this->db->where('affiliate_users.user_id', $affiliate_id);
        $this->db->group_by('order_data.order_id');
        $query_result = $this->db->get('order_data');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_bill_closing_by_name($limit, $start, $affiliate_name)
    {
        $this->db->limit($limit, $start);
        $this->db->select('order_data.affiliate_user_id,order_data.order_id,order_data.modified_time,order_data.order_total,user_commission.commission,affiliate_users.user_f_name,affiliate_users.user_l_name');
        $this->db->where('order_data.order_status', 'completed');
        $this->db->where('order_data.payment_status', 0);
        $this->db->join('affiliate_users', 'affiliate_users.user_id = order_data.affiliate_user_id', 'left');
        $this->db->join('user_commission', 'user_commission.order_id = order_data.order_id', 'left');
        $this->db->like('affiliate_users.user_f_name', $affiliate_name);
        $this->db->group_by('order_data.order_id');
        $query_result = $this->db->get('order_data');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_bill_closing_by_date($limit, $start, $from_date, $to_date, $affiliate_name = null)
    {
        $this->db->limit($limit, $start);
        $this->db->select('order_data.affiliate_user_id,order_data.order_id,order_data.modified_time,order_data.order_total,user_commission.commission,affiliate_users.user_f_name,affiliate_users.user_l_name');
        $this->db->where('order_data.order_status', 'completed');
        $this->db->where('order_data.payment_status', 0);
        $this->db->join('affiliate_users', 'affiliate_users.user_id = order_data.affiliate_user_id', 'left');
        $this->db->join('user_commission', 'user_commission.order_id = order_data.order_id', 'left');
        if ($affiliate_name) {
            $this->db->like('affiliate_users.user_f_name', $affiliate_name);
            $this->db->where('user_commission.commission_date >=', $from_date);
            $this->db->where('user_commission.commission_date <=', $to_date);
        } else {
            $this->db->where('user_commission.commission_date >=', $from_date);
            $this->db->where('user_commission.commission_date <=', $to_date);
        }
        $this->db->group_by('order_data.order_id');
        $query_result = $this->db->get('order_data');
        $result = $query_result->result();
        return $result;
    }

    // =============================
    // payment or voucher
    // ==============================

    function countall_for_voucher_list()
    {
        $this->db->select('count(id) count_total_rows');
        $this->db->where('status', 0);
        $query_result = $this->db->get('user_commission_request');
        $result = $query_result->row();
        return $result;
    }

    function countAllByLikeCondition_voucher_number($voucher_number)
    {
        $this->db->select('count(id) count_total_rows');
        $this->db->where('status', 0);
        $this->db->like('vp_number', $voucher_number);
        $query_result = $this->db->get('user_commission_request');
        $result = $query_result->row();
        return $result;
    }

    function countAllByLikeCondition_voucher_name($affiliate_name)
    {
        $this->db->select('count(user_commission_request.id) count_total_rows');
        $this->db->where('user_commission_request.status', 0);
        $this->db->join('affiliate_users', 'affiliate_users.user_id = user_commission_request.user_id', 'left');
        $this->db->like('affiliate_users.user_f_name', $affiliate_name);
        $query_result = $this->db->get('user_commission_request');
        $result = $query_result->row();
        return $result;
    }

    function countAllByLikeCondition_voucher_phone_number($phone_number)
    {
        $this->db->select('count(user_commission_request.id) count_total_rows');
        $this->db->where('user_commission_request.status', 0);
        $this->db->join('affiliate_users', 'affiliate_users.user_id = user_commission_request.user_id', 'left');
        $this->db->like('affiliate_users.user_mobile', $phone_number);
        $query_result = $this->db->get('user_commission_request');
        $result = $query_result->row();
        return $result;
    }

    function countAllByLikeCondition_date_voucher($from_date, $to_date, $affiliate_name = null)
    {
        $this->db->select('count(user_commission_request.id) count_total_rows');
        $this->db->where('user_commission_request.status', 0);
        $this->db->join('affiliate_users', 'affiliate_users.user_id = user_commission_request.user_id', 'left');
        if ($affiliate_name) {
            $this->db->like('affiliate_users.user_f_name', $affiliate_name);
            $this->db->where('affiliate_users.created_date >=', $from_date);
            $this->db->where('affiliate_users.created_date <=', $to_date);
        } else {
            $this->db->where('affiliate_users.created_date >=', $from_date);
            $this->db->where('affiliate_users.created_date <=', $to_date);
        }
        $query_result = $this->db->get('user_commission_request');
        $result = $query_result->row();
        return $result;
    }


    public function select_all_voucher_by_voucher_number($limit, $start, $voucher_number)
    {
        $this->db->limit($limit, $start);
        $this->db->select('user_commission_request.*,affiliate_users.user_f_name');
        $this->db->where('user_commission_request.status', 0);
        $this->db->join('affiliate_users', 'affiliate_users.user_id = user_commission_request.user_id', 'left');
        $this->db->like('user_commission_request.vp_number', $voucher_number);
        $query_result = $this->db->get('user_commission_request');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_voucher_by_voucher_name($limit, $start, $affiliate_name)
    {
        $this->db->limit($limit, $start);
        $this->db->select('user_commission_request.*,affiliate_users.user_f_name');
        $this->db->where('user_commission_request.status', 0);
        $this->db->join('affiliate_users', 'affiliate_users.user_id = user_commission_request.user_id', 'left');
        $this->db->like('affiliate_users.user_f_name', $affiliate_name);
        $query_result = $this->db->get('user_commission_request');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_voucher_by_voucher_phone_number($limit, $start, $phone_number)
    {
        $this->db->limit($limit, $start);
        $this->db->select('user_commission_request.*,affiliate_users.user_f_name');
        $this->db->where('user_commission_request.status', 0);
        $this->db->join('affiliate_users', 'affiliate_users.user_id = user_commission_request.user_id', 'left');
        $this->db->like('affiliate_users.user_mobile', $phone_number);
        $query_result = $this->db->get('user_commission_request');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_voucher_by_voucher_date($limit, $start, $from_date, $to_date, $affiliate_name = null)
    {
        $this->db->limit($limit, $start);
        $this->db->select('user_commission_request.*,affiliate_users.user_f_name');
        $this->db->where('user_commission_request.status', 0);
        $this->db->join('affiliate_users', 'affiliate_users.user_id = user_commission_request.user_id', 'left');
        if ($affiliate_name) {
            $this->db->like('affiliate_users.user_f_name', $affiliate_name);
            $this->db->where('affiliate_users.created_date >=', $from_date);
            $this->db->where('affiliate_users.created_date <=', $to_date);
        } else {
            $this->db->where('affiliate_users.created_date >=', $from_date);
            $this->db->where('affiliate_users.created_date <=', $to_date);
        }
        $query_result = $this->db->get('user_commission_request');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_voucher($limit, $start)
    {
        $this->db->limit($limit, $start);
        $this->db->select('user_commission_request.*,affiliate_users.user_f_name');
        $this->db->where('user_commission_request.status', 0);
        $this->db->join('affiliate_users', 'affiliate_users.user_id = user_commission_request.user_id', 'left');
        $this->db->order_by('user_commission_request.vp_number', 'desc');
        $query_result = $this->db->get('user_commission_request');
        $result = $query_result->result();
        return $result;
    }

}
	

   
