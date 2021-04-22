<?php

// for mobile section
class mobile{
    public $db = NULL;

    public function __construct(DBcontrol $db ){
        if(!isset($db->con)) return NULL;
        $this->db = $db;
    }

    // fetch product data
    public function getData($table = 'mobile'){
       $result = $this->db->con->query(query:"SELECT * FROM {$table}");

       $resultArray = array();
       while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
           $resultArray[] = $item;
       }

       return $resultArray;
    }
}

// for computer section
class computer{
    public $db = NULL;

    public function __construct(DBcontrol $db ){
        if(!isset($db->con)) return NULL;
        $this->db = $db;
    }

    // fetch product data
    public function getData($table = 'computer'){
       $result = $this->db->con->query(query:"SELECT * FROM {$table}");

       $resultArray = array();
       while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
           $resultArray[] = $item;
       }

       return $resultArray;
    }
}

// for headphone section

class headphone{
    public $db = NULL;

    public function __construct(DBcontrol $db ){
        if(!isset($db->con)) return NULL;
        $this->db = $db;
    }

    // fetch product data
    public function getData($table = 'headphone'){
       $result = $this->db->con->query(query:"SELECT * FROM {$table}");

       $resultArray = array();
       while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
           $resultArray[] = $item;
       }

       return $resultArray;
    }
}

// or TV camera

class camera{
    public $db = NULL;

    public function __construct(DBcontrol $db ){
        if(!isset($db->con)) return NULL;
        $this->db = $db;
    }

    // fetch product data
    public function getData($table = 'camera'){
       $result = $this->db->con->query(query:"SELECT * FROM {$table}");

       $resultArray = array();
       while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
           $resultArray[] = $item;
       }

       return $resultArray;
    }
}

// for other

class other{
    public $db = NULL;

    public function __construct(DBcontrol $db ){
        if(!isset($db->con)) return NULL;
        $this->db = $db;
    }

    // fetch product data
    public function getData($table = 'other'){
       $result = $this->db->con->query(query:"SELECT * FROM {$table}");

       $resultArray = array();
       while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
           $resultArray[] = $item;
       }

       return $resultArray;
    }
}