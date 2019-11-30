<?php

class CharityEvent extends DatabaseObject{

    static protected $table_name = 'charity_event';
    static protected $db_columns = ['id', 'name', 'description', 'start_date', 'end_date', 'address','postcode', 'organiser_id', 'imgurl', 'fund_goal'];

    public $id;
    public $name;
    public $description;
    public  $start_date;
    public $end_date;
    public $address;
    public $postcode;
    public $organiser_id;
    public $imgurl;
    public $fund_goal;

    public function __construct($args=[]) {
        $this->id = $args['id'] ?? '';
        $this->name = $args['name'] ?? '';
        $this->description = $args['description'] ?? '';
        $this->start_date = $args['start_date'] ?? '';
        $this->end_date = $args['end_date'] ?? '';
        $this->address = $args['address'] ?? '';
        $this->postcode = $args['postcode'] ?? '';
        $this->organiser_id = $args['organiser_id'] ?? '';
        $this->imgurl = $args['imgurl'] ?? '';
        $this->fund_goal = $args['fund_goal'] ?? '';
    }

    protected function validate() {
        $this->errors = [];

        if(is_blank($this->name)) {
            $this->errors[] = "Title cannot be blank.";
        }
        if(is_blank($this->description)) {
            $this->errors[] = "Description cannot be blank.";
        }
        if(is_blank($this->start_date)) {
            $this->errors[] = "Start date cannot be blank.";
        }
        if(is_blank($this->end_date)) {
            $this->errors[] = "End date cannot be blank.";
        }
        if(is_blank($this->address)){
            $this->errors[] = "Address expiry date cannot be blank.";
        }
        if(is_blank($this->postcode)){
            $this->errors[] = "Postcode expiry date cannot be blank.";
        }


        return $this->errors;
    }


}

?>