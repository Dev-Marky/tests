<?php
class Customer_model extends CI_Model {
  function __construct() {
    parent::__construct();
    // $this->output->enable_profiler(TRUE);
  }

  function find_by_company($company_id) {
    $this->db->order_by('name');
    return $this->db->get_where('customers', array('company_id' => $company_id))->result();
  }

  function find_by_company_for_dropdown($company_id) {
    $rows = array();
    foreach ($this->find_by_company($company_id) as $row) {
      $rows[$row->id] = $row->name;
    }
    return $rows;
  }

  function read($id) {
    return $this->db->get_where('customers', array('id' => $id))->row();
  }

  function save($customer) {
    $this->db->insert('customers', $customer);
  }

  function update($customer, $id) {
    $this->db->update('customers', $customer, array('id' => $id));
  }

  function delete($id) {
    $this->db->delete('customers', array('id' => $id));
  }
}