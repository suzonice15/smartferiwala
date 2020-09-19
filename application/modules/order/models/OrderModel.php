<?php
Class OrderModel extends CI_Model
{
	/*# add new order #*/
	public function place_order($data)
	{
		$this->db->insert('order', $data);
		return $this->db->insert_id();
	}


 public function all_order_rows()
    {
        
      $result=  $this->db->from("order_data")->count_all_results();
      return $result;
    }
    
    public function order_search_rows($status){
    
            $this->db->or_where('order_id',$status);
            $this->db->or_where('customer_phone','$status');
          
     return $result = $this->db->get('order_data')->num_rows();
     
        
    }
    public function all_three_items_rows($order_status,$date_from,$date_to){
      
        $this->db->select('count(order_id) as count_total_rows');
         $this->db->where('order_status',"$status");
            $this->db->where('created_date >=', $date_from);
            $this->db->where('created_date <=', $date_to);
        $query_result = $this->db->get('order_data');
        $result = $query_result->row();
        $result=$result->count_total_rows;
        return $result;
     
    }
    public function all_two_items_rows($date_from,$date_to){
      
        $this->db->select('count(order_id) as count_total_rows');
             $this->db->where('created_date >=', $date_from);
            $this->db->where('created_date <=', $date_to);
        $query_result = $this->db->get('order_data');
        $result = $query_result->row();
        $result=$result->count_total_rows;
        return $result;
     
    }
    
    public function all_orders_lists($limit, $start)
    {
        $this->db->limit($limit, $start);
        $this->db->select('*');
        $this->db->order_by('order_id', 'desc');
        $query_result = $this->db->get('order_data')->result();
       
        return $query_result;
    }
    public function order_search_result($limit, $start,$status){
         
            
          $this->db->select("*");
  $this->db->where('order_id',$status);
 $this->db->or_like('customer_phone',$status ,'both');
  $this->db->from("order_data");
  $this->db->order_by("order_id", "DESC");
  $this->db->limit($limit, $start);
  $query_result = $this->db->get()->result();
 
      //  $query_result = $this->db->get('order_data')->result();
          return $query_result;
    }
    
    public function all_three_items_results($order_status,$date_from,$date_to){
          $this->db->select('*');
         $this->db->where('order_status',"$status");
            $this->db->where('created_date >=', $date_from);
            $this->db->where('created_date <=', $date_to);
        $query_result = $this->db->get('order_data')->result();
        
        return $query_result;
    }
    public function all_two_items_results($date_from,$date_to){
        
         $this->db->select('*');
      
            $this->db->where('created_date >=', $date_from);
            $this->db->where('created_date <=', $date_to);
        $query_result = $this->db->get('order_data')->result();
        
        return $query_result;
    }
    
	/*# add new #*/
	public function add_new($data)
	{
		return $this->db->insert('order', $data);
	}

	/*# update #*/
	public function update_order($data, $row_id)
	{
		$this->db->where('order.order_id', $row_id);
		return $this->db->update('order', $data);
	}

	/*# order result by order_status #*/
	public function get_orders($order_status)
	{
		$this->db->select('*');
		$this->db->from('order');
		// $this->db->where('order_status', $order_status);
		$result = $this->db->get();
		return $result->row();
	}

	/*# single order result by order_id #*/
	public function order_view($order_id)
	{
		$this->db->select('*');
		$this->db->from('order');
		$this->db->where('order_id', $order_id);
		$result = $this->db->get();
		return $result->row();
	}

	
	

}
