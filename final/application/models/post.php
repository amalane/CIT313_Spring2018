<?php
class Post extends Model{
	
	function getPost($pID){
		
		$sql =  'SELECT pID, title, content, date, uID, categoryID FROM posts WHERE pID = ?';
		
		// perform query
		$results = $this->db->getrow($sql, array($pID));
		
		$post = $results;
	
		return $post;
	
	}
		
	public function getAllPosts($limit = 0){
		
		if($limit > 0){
			
			$numposts = ' LIMIT '.$limit;
		}
		
		$sql =  'SELECT * FROM posts p INNER JOIN categories c on c.categoryid = p.categoryid'
			. $numposts . ' ORDER BY date DESC';
		
		// perform query
		$results = $this->db->execute($sql);
		
		while ($row=$results->fetchrow()) {
			$posts[] = $row;
		}

		return $posts;
	
	}

	public function getCategoryPosts($cID){
        $sql = 'select * from posts p
			INNER JOIN categories c on c.categoryid = p.categoryid
			INNER JOIN users u on u.uid = p.uid
			WHERE c.categoryID = ?';
			
        $results = $this->db->execute($sql, $cID);
        while ($row=$results->fetchrow()) {
            $posts[] = $row;
        }
        return $posts;
    }

	
	public function addPost($data){
		
		$sql='INSERT INTO posts (title,content,date,categoryID) VALUES (?,?,?,?)'; 
		$result = $this->db->execute($sql,$data);
		$message = 'Post added.';
		return $message;
		
	}

	public function updatePost($data){
		
		$sql='UPDATE posts SET title=?, content=?, date=?, categoryID=? WHERE pID=?'; 
		$this->db->execute($sql,$data);
		$message = 'Post updated.';
		return $message;
		
	}

	function deletePost($pID){
		
		$sql =  'DELETE FROM posts WHERE pID = ?';
		
		// perform query
		$results = $this->db->getrow($sql, array($pID));
		
		$post = $results;
	
		return $post;
	
	}

	
	
}