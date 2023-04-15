        <?php
        @include 'config.php';

        session_start();
        $user_id = $_SESSION['user_id'];
        if(!isset($user_id)){
            header('location:login.php');
         };

            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Profile</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->

   <link rel="stylesheet" href="./styling/styling.css">
   <style>
      /* body styles */
      body {
         margin: 0;
         padding: 0;
         font-family: Arial, sans-serif;
         background-color: #000;
      }

      /* profile styles */
      .profile1 {
         display: flex;
         flex-direction: column;
         align-items: center;
         margin-top: 50px;
         margin-bottom: 20px;
      }

      .profile1 img {
         width: 200px;
         height: 200px;
         border: solid #000;
         border-radius: 50%;
         margin-bottom: 20px;
      }

      .profile1 p {
        color: #27ae60;
         font-size: 44px;
         font-weight: bold;
         margin-bottom: 20px;
         box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
      }

      .btn  {
         background-color: green;
         color: #fff;
         text-decoration: none;
         padding: 10px 20px;
         border-radius: 5px;
         margin-right: 10px;
         width:50%;
      }
      .delete-btn{
        background-color: red;
         color: #fff;
         text-decoration: none;
         padding: 10px 20px;
         border-radius: 5px;
         margin-right: 10px;
         width:50%;
      }
      .option-btn{
        background-color:orange ;
         color: #fff;
         text-decoration: none;
         padding: 10px 20px;
         border-radius: 5px;
         margin-right: 10px;
         width:50%;
      }
    #profiledetail1{
        font-size:44px;
        color:#27ae60;
        text-align:center;
        margin-bottom:20px;
        text-decoration:underline;
        width:100%;
        background-color:#fff;
        text-align:center;

    }
   .profile1 h6{
    font-size:24px;
        color:grey;
        text-align:center;
        margin-top:10px;
        margin-bottom:10px;
        text-decoration:none;
    }
    .flexbtn{
      margin: 30px;
    }
   </style>
</head>
<body>
<?php include 'header.php'; ?>
<div class="profile1">
         <img src="uploaded_img/<?= $fetch_profile['image']; ?>" alt="userimg">
         <h6>Logged in as :</h6>
         <p><?= $fetch_profile['name']; ?></p>
         <p><?= $fetch_profile['email']; ?></p>
         <a href="user_profile_update.php" class="btn">Update Profile</a>
         <a href="logout.php" class="delete-btn">Logout</a>
         <div class="flex-btn">
         
         </div>
</div>

<?php include 'footer.php'; ?>
<script src="js/script.js"></script>
</body>
</html>
 