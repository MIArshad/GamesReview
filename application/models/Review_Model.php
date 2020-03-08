<?PHP
// defined('BASECLASS') OR exit('No direct script access allowed');
class Review_Model extends CI_Model{

  public function getReview($reviewid)
    {
      $this->db->limit(1);
      $this->db->where('reviewid',$reviewid);
      $result=$this->db->get('reviews');

      return $result->result();
    }

    public function returnAllReviews()
    {
      $this->db->select('*');
      $result = $this->db->get('reviews');

      return $result->result();

    }

    public function getReviewInfo($reviewid)
    {
      $this->db->limit(1);
      $this->db->where('reviewid', $reviewid);
      $result=$this->db->get('reviews');

      // echo $this->db->last_query(); exit;
      return $result->result();
    }

    public function getNumOfReviews()
    {
      $num_rows = $this->db->count_all_results('reviews');
      // echo $this->db->last_query(); exit;
      return $num_rows;
    }
}
?>
