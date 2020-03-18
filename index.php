<!DOCTYPE html>
<html>
<body>



<button onclick="myFunction()">Try it</button>

<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript">
 var stripe = Stripe('pk_test_...');
function myFunction() {
	 
      stripe.createSource({
          type: 'alipay',
          amount: 50,
          currency: 'sgd',
       
          owner: {
            email: 'kenanxini@hotmail.com',
          },
          redirect: {
            return_url: 'http://.../charge.php',
          },
        }).then(function(result) {
          window.location.replace(result.source.redirect.url);
        });
}
</script>






</body>
</html>





<!DOCTYPE html>
<meta charset="UTF-8">
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   

    
 

    
</head><!--/head-->

<body>


 


