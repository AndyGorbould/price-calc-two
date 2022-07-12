<?php
declare(strict_types=1);

use Customer as GlobalCustomer;

class Customer
{
    private $id;
    private $firstname;
    private $lastname;
    private $group_id;
    private $fixed_discount;
    private $variable_discount;
    
    private array $getAllCustomerInfo = []; // empty array that will contain ALL "customers" table
    
    public function __construct(int $id, string $firstname, string $lastname)
    {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->group_id = $group_id;
        $this->fixed_discount = $fixed_discount;
        $this->variable_discount = $variable_discount;
    }

    public function getID() : int
    {
        return $this->id;
    }
    public function getFirstName() : string
    {
        return $this->firstname;
    }
    public function getLastName() : string
    {
        return $this->lastname;
    }
    public function getGroupID() : int
    {
        return $this->group_id;
    }
    public function getFixedDiscount() : int
    {
        return $this->fixed_discount;
    }
    public function getVariableDiscount() : int
    {
        return $this->variable_discount;
    }




        public function getAllCustomerInfo() {
            
            require "config/connect.php"; // requires the "connect to DB" code in config & connect files
            
            $sql = "SELECT * FROM customer"; // SQL query
            $result = mysqli_query($conn, $sql); // $conn = connect.php (after config.php login/db info passed to it)
            $allCustomersTemp = mysqli_fetch_all($result, MYSQLI_ASSOC);

            foreach ($allCustomersTemp as $customer) {
               array_push($this->customer, new Customer($customer['id'], $customer['firstname'], $customer['lastname'], $customer['group_id'], $customer['fixed_discount'], $customer['variable_discount']));
            }
        }

        public function getAllCustomersArray(): array {
            return $this->getAllCustomerInfo;
        }

    public function getIDSQL() : int
    {
        return $this->id;
    }
}





//
///
///
//  THIS ID (from sql query????)

////// select ALL INFO from ID only
class AllCustomerInfo extends Customer
{

    public function fetchResults($id)
    {
        $idOnly = mysql_real_escape_string($id);

        $query = "SELECT firstname, lastname, group_id, fixed_discount, variable_discount FROM customer WHERE id = '".$idOnly."'"

        $stmt = mysql_query($query); 

        $results = mysql_fetch_assoc($query);

        return $results;
    }
}
?>