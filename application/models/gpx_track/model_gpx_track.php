<?php if ( ! defined('BASEPATH')) exit ('No direct script  allow'); 

class Model_Gpx_track extends CI_Model {

	public function __construct() {

	}

	function getGpxTrackList() {
				
		$this->db->select('*');
								  
		$this->db->from(MAP_GPX_TRACK.' as gpx_track');
		
		$this->db->where('gpx_track.is_deleted',HARD_CODE_ID_NO);
		$this->db->where('gpx_track.is_active',HARD_CODE_ID_YES);
		$result = $this->db->get();

		if ($result->num_rows() >0) {
			return $result->result();

		}else{
			return false;
		}

	}
}

?>