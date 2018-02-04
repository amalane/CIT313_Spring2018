<?php
class user_type1 extends User {
  
    public function __construct($user_level,$user_id) {
        $this->user_id = $user_id;
        $this->user_type = 1;
        parent::__construct($user_level);
    }

    public function __set($name, $value) {
        $this->$name = $value;

    }

    public function __get($name) {
        return $this->$name;
    }

    public function __destruct() {

    }
}
?>