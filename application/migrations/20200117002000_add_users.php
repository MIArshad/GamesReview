<?php
defined('BASEPATH') OR exit('No direct script acess allowed');

class Migration_Add_Users extends CI_Migration{

  public function up()
  {
    $this->dbforge->add_field(array(
      'user_id' => array(
        'type' => 'INT',
        'constraint' => 5,
        'auto_increment' => TRUE,
      ),
      'username' => array(
        'type' => 'VARCHAR',
        'constraint' => '100',
      ),
      'password' => array(
        'type' => 'TEXT',
        'constraint' => '100',
        'null' => TRUE,
      ),
      'email' => array(
        'type' => 'TEXT',
        'constraint' => '100',
      ),
    ));
    $this->dbforge->add_key('user_id', TRUE);

    $this->dbforge->create_table('users');
    echo "you need to go to sleep";
  }

  public function down()
  {
    $this->dbforge->drop_table('users');
  }
}
?>
