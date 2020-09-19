<?php
Class ProductModel extends CI_Model
{
    
   
   
   public function all_commision_rows(){
       $query = $this->db->get("product_commission");
  return $query->num_rows();
   } 
   
   public function all_commision_search_rows($product){
        $this->db->select("product_commission.id");
  $this->db->from("product");
  $this->db->join("product_commission",'product_commission.product_id=product.product_id');
   $this->db->where("product.sku",$product);
  $this->db->order_by("product_commission.id", "DESC");
   $query = $this->db->get();
  return $query->num_rows(); 
       
   }
    function count_all()
 {
  $query = $this->db->get("product");
  return $query->num_rows();
 }
 
 public function all_zero_commision_rows(){
     
     $this->db->where("commission",0);
    $query = $this->db->get("product_commission");
  return $query->num_rows(); 
 }
 
 public function all_commision_results($limit, $start){
    
  $this->db->select("product_commission.id,commission,start_date,end_date,product.status,product.product_id,product_name,product_title,product_price,discount_price,created_time,sku");
  $this->db->from("product");
  $this->db->join("product_commission",'product_commission.product_id=product.product_id');
  $this->db->order_by("product_commission.id", "DESC");
  $this->db->limit($limit, $start);
return   $products = $this->db->get()->result();
     
 }
 
 public function all_commision_results_search($limit, $start,$product){
  $this->db->select("product_commission.id,commission,start_date,end_date,product.status,product.product_id,product_name,product_title,product_price,discount_price,created_time,sku");
  $this->db->from("product");
  $this->db->join("product_commission",'product_commission.product_id=product.product_id');
   
            $this->db->like('product.sku', $product);
              $this->db->or_like('product.product_title', $product);


  $this->db->order_by("product_commission.id", "DESC");
  $this->db->limit($limit, $start);
return   $products = $this->db->get()->result();   
 }



 function count_all_by_search($product)
 {

  $this->db->like('product_title',$product ,'both');
  $this->db->or_like('sku',$product ,'both');
  $query = $this->db->get("product");
  return $query->num_rows();
 }


 function fetch_products($limit, $start)
 {


  $output = '';
  $this->db->select("product_id,product_name,product_title,product_price,discount_price,created_time,sku,status");
  $this->db->from("product");
  $this->db->order_by("product_id", "DESC");
  $this->db->limit($limit, $start);
  $products = $this->db->get()->result();
  $output .= '<table  class="table table-bordered table-striped">
										<thead>
										<tr>
											<th>Sl</th>
											<th><input type="checkbox" id="checkAll"></th>
											<th>Product Code</th>
											<th>Product</th>
										 
									     	 <th>Category</th>
											<th>Sell Price</th>
											<th>Discount Price</th>
										 
											<th>Status</th>
											<th>Cration date</th>
											<th class="text-right">Action</th>
										</tr>
										</thead>
										<tbody>';
  $i=0;
 $i= $start+$i;
  foreach ($products as $prod) {
if($prod->status==1){
    $status="Active";

} else {
        $status="Inactive";

    
}
   $featured_image = get_product_meta($prod->product_id, 'featured_image');
   $featured_image = get_media_path($featured_image);
   $link = base_url() . 'product/' . $prod->product_name;
$categoryName = get_result("SELECT * FROM  category
join term_relation on term_relation.term_id=category.category_id
WHERE product_id=$prod->product_id");
												foreach ($categoryName as $category) {
													$category_title[] = $category->category_title;


												}
												$category_name = implode(',', $category_title);
												unset($category_title);

   $output .= '<tr><td>'.++$i.'</td><td><input type="checkbox" id="singleId" class="checkAll"   value="' . $prod->product_id . '"/>										</td>
													<td>' . $prod->sku . '</td><td>
														<img src="' . $featured_image . '" width="30"
															 height="30"/><a  target="" href="' . $link . '">' . $prod->product_title . '</a></td><td>'. $category_name. '</td>						
														<td>' . $prod->product_price . '</td><td>' . $prod->discount_price . '</td>';
   $output .= '<td>'.$status.'</td><td>' . $prod->created_time . '</td><td class="action text-right">
														<a title="edit"
														   href="' . base_url() . 'product-edit/' . $prod->product_id . '"
														<span class="glyphicon glyphicon-edit btn btn-success"></span>
														</a>
															<a title="edit"
														   href="' . base_url() . 'add-commission/' . $prod->product_id . '"
														<span class="glyphicon glyphicon-plus btn btn-success"></span>
														</a>
														</td></tr>';

  }

  $output .= '</tbody></table>';
  return $output;


 }



 function fetch_product_by_search($limit, $start,$product)
 {


  $output = '';
  $this->db->select("product_id,product_name,product_title,product_price,discount_price,created_time,sku,status");
  $this->db->like('product_title',$product ,'both');
 $this->db->or_like('sku',$product ,'both');
  $this->db->from("product");
  $this->db->order_by("product_id", "DESC");
  $this->db->limit($limit, $start);
  $products = $this->db->get()->result();
  $output .= '<table  class="table table-bordered table-striped">
										<thead>
										<tr>
											<th>Sl</th>
											<th><input type="checkbox" id="checkAll"></th>
											<th>Product Code</th>
											<th>Product</th>
											<th>Category</th>
									
											<th>Sell Price</th>
											<th>Discount Price</th>
											
											
											<th>Status</th>
											<th>Cration date</th>
											<th class="text-right">Action</th>
										</tr>
										</thead>
										<tbody>';
  $i=0;
  $i= $start+$i;
  foreach ($products as $prod) {

if($prod->status==1){
    $status="Active";

} else {
        $status="Inactive";

    
}

   $featured_image = get_product_meta($prod->product_id, 'featured_image');
   $featured_image = get_media_path($featured_image);
   $link = base_url() . 'product/' . $prod->product_name;
   
$categoryName = get_result("SELECT * FROM  category
join term_relation on term_relation.term_id=category.category_id
WHERE product_id=$prod->product_id");
												foreach ($categoryName as $category) {
													$category_title[] = $category->category_title;


												}
												$category_name = implode(',', $category_title);
												unset($category_title);
												
											 


   $output .= '<tr><td>'.++$i.'</td><td><input type="checkbox" id="singleId" class="checkAll"   value="' . $prod->product_id . '"/>										</td>
													<td>' . $prod->sku . '</td><td>
														<img src="' . $featured_image . '" width="30"
															 height="30"/><a  target="" href="' . $link . '">' . $prod->product_title . '</a></td><td>'. $category_name. '</td>						
													<td>' . $prod->product_price . '</td><td>' . $prod->discount_price . '</td></td>';
   $output .= '<td>'.$status.'</td><td>' . $prod->created_time . '</td><td class="action text-right">
														<a title="edit"
														   href="' . base_url() . 'product-edit/' . $prod->product_id . '"
														<span class="glyphicon glyphicon-edit btn btn-success"></span>
														</a>
															<a title="edit"
														   href="' . base_url() . 'add-commission/' . $prod->product_id . '"
														<span class="glyphicon glyphicon-plus btn btn-success"></span>
														</a>
														</td></tr>';

  }

  $output .= '</tbody></table>';
  return $output;


 }

	
	public function get_products($product_id=null, $stock_status=NULL)
	{
		if($product_id!=null)
		{
	        $this->db->select('*');
	        $this->db->from('product');
			$this->db->where('product_id', $product_id);
			$query = $this->db->get();
			return $query->row();
		}
		elseif($stock_status!=null)
		{
			if($stock_status=='limited_stock')
			{
		        /*$this->db->select('*, meta_value as stock_qty');
		        $this->db->from('product');
				$this->db->join('productmeta', 'product.product_id = productmeta.product_id');
				$this->db->where('productmeta.meta_key', 'stock_qty');
				$this->db->where('productmeta.meta_value <=', 3);
				$this->db->order_by("product.product_id", "DESC");
				$query = $this->db->get();
				return $query->result();*/
				$query="select  * , meta_value as stock_qty from product
join productmeta on productmeta.product_id=product.product_id
where productmeta.meta_key='stock_qty' and productmeta.meta_value <=10 order by product.product_id desc";
	$query = $this->db->query($query);
				return $query->result();
			}
			else
			{
		        $this->db->select('*, meta_value as stock_status');
		        $this->db->from('product');
				$this->db->join('productmeta', 'product.product_id = productmeta.product_id');
				$this->db->where('productmeta.meta_key', 'stock_status');
				$this->db->where('productmeta.meta_value', $stock_status);
				$this->db->order_by("product.product_id", "DESC");
				$query = $this->db->get();
				return $query->result();
			}
		}
		else
		{
	        $this->db->select('*');
	        $this->db->from('product');
			$this->db->order_by("product_id", "DESC");
			$query = $this->db->get();
			return $query->result();
		}
    }

	public function product_terms($product_id)
	{
        $this->db->select('*');
        $this->db->from('term_relation');
        $this->db->where('product_id', $product_id);
        $query = $this->db->get();
        return $query->result();
    }
	
	public function front_view($product_name){
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('product_name', $product_name);
        $result = $this->db->get();
        $prod_row = $result->row();
        return $prod_row;
    }
	
	public function quick_view($product_id){
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('product_id', $product_id);
        $result = $this->db->get();
        $prod_row = $result->row();
        return $prod_row;
    }
	
	/*# term relations #*/
	public function add_new_term_relation($data)
	{
		return $this->db->insert('term_relation', $data);
	}
	public function delete_term_relation($product_id)
	{
		$this->db->where('term_relation.product_id', $product_id);
		return $this->db->delete('term_relation');
	}
	
	/*# media #*/
	public function add_new_media($data)
	{
		$this->db->insert('media', $data);
		return $this->db->insert_id();
	}
	public function update_product_size($data, $row_id){
		$this->db->where('product_size.product_size_id', $row_id);
		return $this->db->update('product_size', $data);
	}
}