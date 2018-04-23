<?php
class Comments extends Model {

    public function addComment($data) {
		$sql = "INSERT comments (uID,commentText,date,postID) VALUES (?,?,?,?)";
		$this->db->execute($sql, $data);
	}
	
	public function getComments($pID) {
		$sql = "SELECT * FROM comments INNER JOIN users ON comments.uID = users.uID WHERE postID=? ORDER BY date DESC";
		$results = $this->db->execute($sql, array($pID));

		while ($row=$results->fetchrow()) {
			$posts[] = $row;
		}

		return $posts;
    }
    
    public function deleteComment($cID) {
        $sql = "DELETE FROM comments WHERE commentID=?";
        $this->db->execute($sql, array($cID) );
    }

}

