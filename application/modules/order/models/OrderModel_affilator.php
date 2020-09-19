<?php
Class OrderModel_affilator extends CI_Model
{

    function count_all()
    {
        $this->db->where("affiliate_request_status !=",0);
        $query = $this->db->get("affiliate_users");
        return $query->num_rows();
    }



    function count_all_by_search($product)
    {

        $this->db->like('media_title',$product ,'both');
        $query = $this->db->get("media");
        return $query->num_rows();
    }


    function fetch_products($limit, $start)
    {
        date_default_timezone_set("Asia/Dhaka");

        $output = '';
        $this->db->select("*");
        $this->db->from("affiliate_users");
        $this->db->order_by("user_id", "DESC");
        $this->db->where("affiliate_request_status !=", 0);
        $this->db->limit($limit, $start);
        $products = $this->db->get()->result();

        $output .= '<table id="example1" class="table table-bordered table-striped">
										<thead>
										
			  <th>SL NO</th>
                        <th>Affiliate Name</th>
                        <th>Mobile Number</th>
                        <th>Date</th>
                        <th>Action</th>
                        <th>Status</th>
										</thead>
										<tbody>';
        $i=0;
        $count=count($products);
        $i= $start+$i;
        foreach ($products as $v_request) {

            $date =date_create($v_request->created_time);
 if ($v_request->affiliate_request_status == 1) {
    $action= "New Request";
} else if ($v_request->affiliate_request_status == 2) {
     $action= "Approved";
} else {
     $action= "Rejected";
}

            $output .= '<tr>
		<td>'.$count.'</td>
        <td>'.$v_request->user_id.' '.$v_request->user_f_name.'</td>
        <td>
		'.$v_request->user_mobile.'
		</td>
        <td>'.date_format($date, "d-m-Y").'</td>
        <td>'.$action.'</td>
        <td><a href="'.base_url().'order/OrderController/approved_affiliate_request_details/'.$v_request->user_id.'"
                                   class="btn btn-success" title="Inactive" target="_blank">
                                    Details
                                </a>
                            </td>
         
		

    </tr>';
            $count--;
        }

        $output .= '</tbody></table>';
        return $output;


    }



    function fetch_product_by_search($limit, $start,$product)
    {


        $output = '';
        $this->db->select("*");
        $this->db->like('media_title',$product ,'both');
        $this->db->from("media");
        $this->db->order_by("media_id", "DESC");
        $this->db->limit($limit, $start);
        $products = $this->db->get()->result();
        $output .= '<table id="example1" class="table table-bordered table-striped">
										<thead>
										
				<th width="5%">Sl</th>
				<th width="5%"><input type="checkbox" id="checkAll"></th>
				<th width="5%">Picture</th>
				<th width="20%">Media Name </th>
				<th width="30%">Url </th>
				<th width="10%">Created Date </th>
			
										</thead>
										<tbody>';
        $i=0;
        $i= $start+$i;
        foreach ($products as $med) {
            $created_time=date('l-d-F -Y H:i:s',strtotime($med->created_time));

            //$featured_image = get_product_meta($prod->product_id, 'featured_image');
            // $featured_image = get_media_path($featured_image);
//$link = base_url() . 'product/' . $prod->product_name;


            $output .= '<tr>
		<td>'.++$i.'</td>
        <td><input type="checkbox" id="'.$med->media_id.'" class="checkAll" value="'.$med->media_id.'"></td>
        <td>
		<img src="'.$med->media_path.'" width="50" height="50"/>
		</td>
        <td>'. $med->media_title.'</td>
        <td> <input id="url_'.$med->media_id.'"  style="width: 300px;display: inherit; class="form-control" value="'.base_url(). $med->media_path.'"/>
			<button style="margin-left: 7px;"  id="'.$med->media_id .'" class="btn btn-success selectAllUrl">Copy text</button>

		</td>
		<td>'. $created_time.'</td>

    </tr>';

        }

        $output .= '</tbody></table>';
        return $output;


    }




}