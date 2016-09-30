<?php
    class CommentModel extends ConnectModel
    {

        public function getData()
        {
            $stmt = $this->db->prepare("select users.name, id, comment, headline, date from comments INNER JOIN users on comments.id_user=users.id_user");
            $stmt->execute();
            $commentsArray = $stmt->fetchAll();
            return $commentsArray;
        }
        
        public function saveComment($textComment,$id)
        {
            $stmt = $this->db->prepare("UPDATE comments SET comment = ? WHERE id = ?");
            $stmt->bindParam(1,$textComment, PDO::PARAM_STR);
            $stmt->bindParam(2,$id, PDO::PARAM_INT);
            $stmt->execute();
            return true;
        }
        
    }
?>