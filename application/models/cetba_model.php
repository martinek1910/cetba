<?php 
if(! defined('BASEPATH')) exit('No direct script access allowed');

class cetba_model extends CI_Model{

	public function get_menu_polozky()
	{
		$this->db->select('categorie, id_categorie');
		$this->db->from('menu');
		$this->db->order_by('idmenu');

		$query = $this->db->get();
		return $query->result();
	}

	public function index()
	{
		$this->db->select('nazev_knihy, autor, id_knihy');
		$this->db->from('knihy');
		$this->db->order_by('id_knihy ASC');

		$query = $this->db->get();
		return $query->result();
	}

	public function get_strana_1()
	{       
        $this->db->select('nazev_knihy, autor');
        $this->db->from('knihy');
        $this->db->where('obdobi_idobdobi=1');
        $this->db->order_by('id_knihy');
        
        $query = $this->db->get();
        return $query->result();
    }

    public function get_strana_2()
    {        
        $this->db->select('nazev_knihy, autor');
        $this->db->from('knihy');
        $this->db->where('obdobi_idobdobi=2');
        $this->db->order_by('id_knihy');
        
        $query = $this->db->get();
        return $query->result();
    }

    public function get_strana_3()
    {
        $this->db->select('nazev_knihy, autor');
        $this->db->from('knihy');
        $this->db->where('obdobi_idobdobi=3');
        $this->db->order_by('id_knihy');
        
        $query = $this->db->get();
        return $query->result();
    }

    public function get_strana_4()
    {       
        $this->db->select('nazev_knihy, autor');
        $this->db->from('knihy');
        $this->db->where('obdobi_idobdobi=4');
        $this->db->order_by('id_knihy');

        $query = $this->db->get();
        return $query->result();
	}
}