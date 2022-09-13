
<?php
require_once __DIR__ . '/../shopping/Cart.php';
require_once __DIR__ . '/../shopping/Order.php';
class Client
{
   protected $cart;

   public function __construct()
   {
    $this->setcart();
   }

   public function getcart()
    {
        return $this->cart;
    }

    protected function setcart()
    {
        $this->cart = new Cart();
    }

    public function addtocart($product)
    {
        $this->cart->addproduct($product);
    }

    public function removetocart($product)
    {
        $this->cart->removeproduct($product);
    }
    public function placeorder($address,$credit_card)
    {
        $products = $this->cart->getproductslist();
        $amount =$this->cart->gettotal();
        $order = new Order($address, $credit_card,$products,$amount);
        try{
            $order->performpayment();
        } catch(Exception $e) {
            echo '<h2> qualcosa e andato storto: ' . $e->getmessage() . '</h2>';
        }
    }
}
