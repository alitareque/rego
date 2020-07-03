<?php
class Rego{
  
    // database connection and table name
    private $conn;
    // object properties
    public $uid;
  
    // constructor with $db as database connection
    public function __construct($db, $user_id){
        $this->conn = $db;
        $this->uid = $user_id;
    }

    // read rego
    public function read(){

        $where_setatement = '';

        if (!empty($this->uid)) {
            $where_setatement = ' WHERE u.id="' . $this->uid . '"';
        }
        
      
        // select all query
        $query = "  SELECT
                        r.plate_number as plate_number,
                        IF(r.reg_expired = '1', 'true', 'false') as reg_expired,
                        r.reg_exp_date as reg_exp_date,
                        r.vehicle_type as vehicle_type,
                        r.vehicle_make as vehicle_make,
                        r.vehicle_model as vehicle_model,
                        r.vehicle_colour as vehicle_colour,
                        r.vehicle_vin as vehicle_vin,
                        r.vehicle_tare_weight as vehicle_tare_weight,
                        r.vehicle_gross_mass as vehicle_gross_mass,
                        r.insurer_name as insurer_name,
                        r.insurer_code as insurer_code
                    FROM registration r
                    INNER JOIN user u ON u.id = r.user_id"
                    . $where_setatement;
      
        // prepare query statement
        $stmt = $this->conn->prepare($query);
      
        // execute query
        $stmt->execute();
      
        return $stmt;
    }

}
?>
