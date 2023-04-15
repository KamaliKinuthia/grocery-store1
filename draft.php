//checkout options
'. $_POST['state'] .' '. $_POST['country'] .' - '. $_POST['pin_code'];
<div class="inputBox">
            <span>state :</span>
            <input type="text" name="state" placeholder="e.g. nyeri" class="box" required>
         </div>
         <div class="inputBox">
            <span>country :</span>
            <input type="text" name="country" placeholder="e.g. kenya" class="box" required>
         </div>
         <div class="inputBox">
            <span>pin code :</span>
            <input type="number" min="0" name="pin_code" placeholder="e.g. 123456" class="box" required>
         </div>
         //payment options
         <option value="credit card">credit card</option>
               <option value="paytm">paytm</option>
               //PROFILE options<div class="flex-btn">
            <a href="login.php" class="option-btn">Login</a>
            <a href="register.php" class="option-btn">Register</a>
         </div>
         //client reviews
         <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et voluptates sit earum, neque non cupiditate amet deserunt aperiam quas ex.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et voluptates sit earum, neque non cupiditate amet deserunt aperiam quas ex.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et voluptates sit earum, neque non cupiditate amet deserunt aperiam quas ex.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et voluptates sit earum, neque non cupiditate amet deserunt aperiam quas ex.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et voluptates sit earum, neque non cupiditate amet deserunt aperiam quas ex.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et voluptates sit earum, neque non cupiditate amet deserunt aperiam quas ex.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>
 //home section shop by category meat Category
 <div class="box">
         <img src="images/cat-2.png" alt="">
         <h3>MEAT</h3>
         <p>Your taste-buds want it, we have it.</p>
         <a href="category.php?category=meat" class="btn">MEAT</a>
      </div>
      <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <img src="uploaded_img/<?= $fetch_profile['image']; ?>" alt="">
         <p><?= $fetch_profile['name']; ?></p>
         <a href="user_profile_update.php" class="btn">Update Profile</a>
         <a href="logout.php" class="delete-btn">Logout</a>
         <div class="flex-btn">
            <a href="login.php" class="option-btn">Login</a>
            <a href="register.php" class="option-btn">Register</a>
         </div>
      </div>
//admin header Logout <div class="flex-btn">
            <a href="login.php" class="option-btn">LOGIN</a>
            <a href="register.php" class="option-btn">REGISTER</a>
         </div>
         <style>
        .container{

            margin-top: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        input{
            width: 100%;
            height: 50px;
            background: white;
            border: none;
            border-radius: 8px;
            margin: 10px;
            text-align: center;
        }form{
            width: 400px;
            height: auto;
            background: paleturquoise;
            padding: 10px;
            background: blue;
        }
        button{
            width: 300px;
            height: 50px;
            background: greenyellow;
            border-radius: 8px;
            text-align: center;
        }h3{
            text-align: center;
            color:white;
            font-size: 2rem;

        }
        .content{
            text-align: center;
            background: rgb(44, 243, 4);
            padding: 5px;
        }
    </style>