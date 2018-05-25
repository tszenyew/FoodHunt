<?php  

include 'includes/db_connection.php';
$conn = OpenCon();
session_start();
if(isset($_SESSION['loginuser'])){
    $email = $_SESSION['loginuser'];
}



if( isset($_SESSION['loginuser']) ){
	if(strlen($_POST["phonenum"])>5){
			
			
            $add1 = $_POST["add1"];
            $add2 = $_POST["add2"];
            $state = $_POST["state"];
            $postcode= $_POST["postcode"];
            $phonenum = $_POST["phonenum"];
			
        $sql = "INSERT INTO ordercust ( email,add1,add2,negeri,postcode,phonenum) VALUES (  '$email' , '$add1','$add2','$state','$postcode','$phonenum');";
	
			
	if ($conn->multi_query($sql) === TRUE) {
        
        echo "<script>simpleCart.checkout();</script>";

		
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		echo"<script> alert('Error: " . $sql . "<br>" . $conn->error."')</script>";
		
	}
	}
    }
    
    else{
        if(strlen($_POST["phonenum"])>5){
                
                
                $add1 = $_POST["add1"];
                $add2 = $_POST["add2"];
                $state = $_POST["state"];
                $postcode= $_POST["postcode"];
                $phonenum = $_POST["phonenum"];
                
            $sql = "INSERT INTO ordercust ( email,add1,add2,negeri,postcode,phonenum) VALUES (  'null' , '$add1','$add2','$state','$postcode','$phonenum');";
        
                
        if ($conn->multi_query($sql) === TRUE) {
          
            echo "<script>simpleCart.checkout();</script>";
            
        } else {
           
            echo"<script> alert('Error: " . $sql . "<br>" . $conn->error."')</script>";
            echo '<script>history.back();</script>';
            
        }
        }
        }
    
        ?>
<script>
    simpleCart.checkout();

        
</script>
 <!-- simplecart script start for cart header -->
 <script src="js/simpleCart.js">
   
 </script>
 
<script>
	simpleCart({
    cartColumns: [
	{ view: function(item, column){
    return  "<tr class='table-row'><td class='column-1'><div class='cart-img-product b-rad-4 o-f-hidden'><img src='"+item.get('thumb')+"' alt='IMG-PRODUCT'></div></td> <td class='column-2'>" +item.get('name')+"</td> <td class='column-3'>RM"+item.get('price')+"</td> <td class='column-4 p-l-70' style='font-size:25px;'> <a href='javascript:;' class='simpleCart_increment'><button type='button' style='font-size:25px; border: 2px; padding: 15px;'>+</button></a> <span>"+item.get('quantity')+"<span><a href='javascript:;' class='simpleCart_decrement'><button type='button' style='font-size:35px; border: 2px; padding: 15px;'>-</button></a></td> <td class='column-5'> RM"+item.get('total')+"</td>";
}, attr: 'custom' }
    ]
});
</script>
<script>
	function updateTotal(){
		
		document.getElementById("item-total").textContent=newtext;
	}
</script>
<script>
	simpleCart.currency({
      code: "MYR",
      name: "Malaysia ringgit",
      symbol: "RM",
      delimiter: ",",
      decimal: ".",
      after: false,
      accuracy: 2
    });
</script>
<script>
	simpleCart({
    checkout: { 
        type: "PayPal" , 
        email: "ezami321-facilitator@gmail.com" ,
        // use paypal sandbox, default is false
        sandbox: true , 
        // http method for form, "POST" or "GET", default is "POST"
        method: "GET" , 
        // url to return to on successful checkout, default is null
        
        // url to return to on cancelled checkout, default is null
    
    } 
});
</script>
 <!-- simplecart script end -->
	