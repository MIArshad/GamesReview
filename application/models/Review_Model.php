<?PHP
// defined('BASECLASS') OR exit('No direct script access allowed');
class Review_Model extends CI_Model{

  public function getReview($reviewid)
    {
      $this->db->limit(1);
      $this->db->where('reviewid',$reviewid);
      $result=$this->db->get('reviews');

      return $result->result();
//      SELECT * FROM REVIEWS WHERE REVIEWID = $REVIEW ID
    }

    public function returnAllReviews()
    {
      $this->db->select('*');
      $result = $this->db->get('reviews');

      return $result->result();
//		SELECT * FROM REVIEWS
    }

    public function getReviewInfo($reviewid)
    {
      $this->db->limit(1);
      $this->db->where('reviewid', $reviewid);
      $result=$this->db->get('reviews');

      return $result->result();
		//      SELECT * FROM REVIEWS WHERE REVIEWID = $REVIEW ID

	}

    public function getNumOfReviews()
    {
      $num_rows = $this->db->count_all_results('reviews');
      // echo $this->db->last_query(); exit;
      return $num_rows;
//      COUNTS ALL THE NUMBER OF REVIEWS RETURNED
    }

    public function getComments($reviewID)
    {
      $this->db->select('reviewID, commentData');
      $this->db->where('reviewID', $reviewID);

      $result=$this->db->get('comments');
      // echo $this->db->last_query(); exit;

      return $result->result();
//      SELECT REVIEWID COMMENTDATA FROM COMMENTS WHERE REVIEWID = $REVIEWID
    }

    public function getAllComments()
    {
      $this->db->select('reviewID, commentData');
      $result = $this->db->get('comments');

      return $result->result();
//      SELECT REVIEWID, COMMENTDATA FROM COMMENTS
    }

<<<<<<< HEAD
    public function insertComment($reviewId, $commentData)
    {
      $data = array(
        'reviewID' => $reviewId,
        'commentData' => $commentData
      );

      $this->db->insert('comments', $data);
    }
=======
	public function insertComment($reviewId, $commentData)
	{
		$data = array(
			'reviewID' => $reviewId,
			'commentData' => $commentData
		);

		$this->db->insert('comments', $data);

		//insert into comment db where review id matches
	}
>>>>>>> 5c7e735768ee9f373c94cb67fe4990240de1ed76
}
?>
