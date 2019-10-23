<?php
include 'User.php';
class Customer extends User {
    public $idCustomer;
    public $sendAddress;
    public function Pay() {
        echo "Pay";
    }
    public function History() {
        echo "History";
    }
}
$customer = new Customer;
$customer->Pay();
?>