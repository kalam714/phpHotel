<form name="paypalForm" action="paypal.php" method="post">
<input type="hidden" name="id" value="123">
<input type="hidden" name="CatDescription" value="Donation to bla bla">
                       <input type="hidden" name="payment" value="10">  
                       <input type="hidden" name="key" value="<? echo md5(date("Y-m-d:").rand()); ?> " >
                           
                                    
<input TYPE="image" SRC="../images/p1.jpg" name="paypal"  value="Payment via Paypal" >
</form>