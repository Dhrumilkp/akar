<?php 
class Home_model extends CI_Model 
{
    public function createcat($postdata)
    {
        $data = array(
            'cat_name' => ucfirst($postdata['category_name'])
        );
        $this->db->insert('a_cat',$data);
        if($this->db->affected_rows() > 0)
        {
            $res = array(
                'status' => 'success'
            );  
            echo json_encode($res);
        }
    }
    public function getcat_count()
    {
        $query = $this->db->get('a_cat');
        $count = $query->num_rows();
        return $count;
    }
    public function getcatdata()
    {
        $query = $this->db->get('a_cat');
        if($query->num_rows() > 0)
        {
            $result = $query->result_array();
            return $result;
        }
        else
        {
            return false;
        }
    }
}
