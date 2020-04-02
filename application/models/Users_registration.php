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
//		insert a user into the db, no longer used, as the users are inputted via the create_data script
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
//		check to see if the data passed from the login script matches a user in the db
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
//		SELECT * FROM USERS WHERE USERNAME = USERNAME, PASSWORD = PASSWORD
	}

	public function updateUser($data, $username)
	{
		$this->db->where('username', $username);
		$this->db->update('users', $data);
				
	}
}
?>
