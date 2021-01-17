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
    public function updateslider($postdata)
    {
        $extension=array("jpeg","jpg","png","gif");
        $filepath = [];
        foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name) {
            $file_name=$_FILES["files"]["name"][$key];
            $file_tmp=$_FILES["files"]["tmp_name"][$key];
            $ext=pathinfo($file_name,PATHINFO_EXTENSION);
        
            if(in_array($ext,$extension)) {
                $filename=basename($file_name,$ext);
                $newFileName=$filename.time().".".$ext;
                $final_name = str_replace(' ', '', $newFileName);
                move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"uploads/Slider/".$final_name);
                array_push($filepath,$final_name);
            }
            else {
                array_push($error,"$file_name, ");
            }
        }
        $query = $this->db->get('a_slider');
        if($query->num_rows() > 0)
        {
            $this->db->truncate('a_slider');
            // Insert
            foreach($filepath as $row)
            {
                $data = array(
                    'sliders_path' => $row
                );
                $this->db->insert('a_slider',$data);
            } 
        }
        else
        {
            // Insert
            foreach($filepath as $row)
            {
                $data = array(
                    'sliders_path' => $row
                );
                $this->db->insert('a_slider',$data);
            }
        }
        $res = array(
            'status' => 'success'
        );
        echo json_encode($res);
    }
    public function getslider_data()
    {
        $query = $this->db->get('a_slider');
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
    public function updatecontact($postdata)
    {
        $data = array(
            'contact_number' => $postdata['contact']
        );
        $this->db->insert('a_contact',$data);
        if($this->db->affected_rows() > 0)
        {
            $res = array(
                'status' => 'success'
            );
            echo json_encode($res);
        }
    }
    public function getcontact_data()
    {
        $query = $this->db->get('a_contact');
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
    public function getaddress_data()
    {
        $query = $this->db->get('a_address');
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
    public function getgooglemarker()
    {
        $query = $this->db->get('a_gurl');
        if($query->num_rows() > 0)
        {
            $result = $query->row_array();
            return $result;
        }
        else
        {
            return false;
        }
    }
    public function getemail()
    {
        $query = $this->db->get('a_email');
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
    public function updateaddress($postdata)
    {
        $data = array(
            'a_address' => $postdata['address']
        );
        $this->db->insert('a_address',$data);
        if($this->db->affected_rows() > 0)
        {
            $res = array(
                'status' => 'success'
            );
            echo json_encode($res);
        }
    }
    public function updategoogleurl($postdata)
    {
        $query = $this->db->get('a_gurl');
        if($query->num_rows() > 0)
        {
            // Update
            $this->db->truncate('a_gurl');
            $data = array(
                'a_gurl' => $postdata['g_url']
            );
            $this->db->insert('a_gurl',$data);
            if($this->db->affected_rows() > 0)
            {
                $res = array(
                    'status' => 'success'
                );
                echo json_encode($res);
            }
        }
        else
        {
            // Insert
            $data = array(
                'a_gurl' => $postdata['g_url']
            );
            $this->db->insert('a_gurl',$data);
            if($this->db->affected_rows() > 0)
            {
                $res = array(
                    'status' => 'success'
                );
                echo json_encode($res);
            }
        }
    }
    public function updatemail($postdata)
    {
        $data = array(
            'a_email' => $postdata['email']
        );
        $this->db->insert('a_email',$data);
        if($this->db->affected_rows() > 0)
        {
            $res = array(
                'status' => 'success'
            );
            echo json_encode($res);
        }
    }
}
