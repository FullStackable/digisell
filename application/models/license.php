<?php
class License extends CI_Model
{
	function get_all($limit=0, $offset=0)
	{
		if($limit>0)
        {
            $this->db->limit($limit, $offset);
        }
		$result = $this->db->get('license');
		return $result->result();
	}

	function total_license()
	{
		$this->db->select('*');
		$result = $this->db->get('license');
		return $result->num_rows();
	}

	function get_license($id)
	{
		$this->db->where('license_id',$id);
		$result = $this->db->get('license');
		return $result->row();
	}

	function delete($id)
	{
		$this->db->where('license_id',$id);
		if($this->db->delete('license'))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function client_info($id)
	{
		$this->db->where('client_id',$id);
		$query = $this->db->get('clients')->row();
		if($query)
		{
			return $query->first_name.'&nbsp;'.$query->last_name.'&nbsp;[&nbsp'.$query->zip.'&nbsp;]';
		}
		else
		{
			return NULL;
		}
	}

	function quick_save_key($data)
	{
		$this->db->where('license_id', $data['id']);
		$this->db->set('license_key', $data['key']);
		if($this->db->update('license', $data))
		{
			echo 'done';
		}
		else
		{
			echo 'not';
		}
	}
}
?>