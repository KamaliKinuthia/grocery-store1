<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="./styling/componentstyling.css">

</head>
<style>
    .form-content{
        
    }
</style>
<body>
    <div class="form-container">
        <div class="content">
            <h3 style="color:#006400">MPESA</h3>
            <form method="POST" action="QUERY.php">
                <label for="amount" >Enter Amount:</label>
                <input type="text" name="amount" required placeholder="amount"/>
                <label for="phone">Enter Phone number</label>
                <input type="text" name="phone" required placeholder="phone number"/>
                <button type="submit">send</button>
            </form>
        </div>
    </div>
</body>
</html>