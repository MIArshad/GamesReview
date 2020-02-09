<?PHP
// defined('BASECLASS') OR exit('No direct script access allowed');
class Users_registration extends CI_Model{

  public function insert($data)
  {
    $this->db->insert('users', $data);
  }

  public function insert_existing()
  {
    $data['username'] = 'IsmaelArshad';
    $data['password'] = 'BestPass';
    $data['email'] = 'ismaelarshad@gmail.com';

    $this->db->insert('users', $data);
  }

  public function login($loginData)
  {
    $condition = "username =" . "'" . $loginData['username'] . "' AND " . "password =" . "'" . $loginData['password'] . "'";
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where($condition);
    $this->db->limit(1);
    $query = $this->db->get();

    if ($query->num_rows() == 1)
    {
      return true;
    }
    else
    {
      return false;
    }
  }

  public function getUser($username, $password)
  {
    $condition = "username =" . "'" . $username . "' AND " . "password =" . "'" . $password . "'";
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where($condition);
    $query = $this->db->get();

    if ($query->num_rows() == 1)
    {
      return $query->result();
    }
    else
    {
      return false;
    }
  }
}
?>
