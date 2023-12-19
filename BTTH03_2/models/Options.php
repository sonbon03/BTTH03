
 <?php
  include ('config.php');
class Options {
    private $db;
    public function __construct($id, $question_id, $option, $is_correct, $created_at, $updated_at)
    {
        $this->db = new PDO('mysql:host=' . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getAllOptions() {
        $query = "SELECT * FROM options";
        $result = $this->db->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOptionsById($id) {
        $query = "SELECT * FROM options WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateOptions($id, $question_id, $option, $is_correct) {
        $query = "UPDATE options SET question_id = :question_id, option = :option, is_correct = :is_correct, created_at = current_timestamp(), updated_at = current_timestamp() WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        return $stmt->execute();
    }

    public function deleteLesson($id) {
        $query = "DELETE FROM options WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

}