<?
/*
    author: Jorden Hodges
    class: OrderTicket
    Description: Read only object for holding information for a current order
    to be used to display the information across different interfaces.
*/
    include_once('../icludes/connection.php');
    class OrderTicket
    {
        private $orderNum;
        //customer name
        private $name;
        private $date;
        private $time;
        //only applicable for dine in orders
        private $tableNum;
        //items ordered
        private $menuIteme = array();
        //pickup, server, etc
        private $fullfilmentType;
        private $isPaid;
        private $estimatedCompletionTime;
        private $orderStatus;

        //constructor
        public function __construct()
        {
        }

        //getter methods
        public function __get($name) 
        {
            if(property_exists($this, $name))
                return $this->$name;
        }
    } 


?>