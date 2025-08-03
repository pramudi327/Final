<?php 
   include '../components/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue Sky Summer - Admin Dashboard page</title>
    <link rel="stylesheet" type="text/css" href="../css/admin_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<div class="main-container">
      <?php include '../components/Admin_header.php'?>
      <section class="dashboard">
        <div class="heading">
          <h1>Dashboard</h1>
          <img src="../image/logo.png" width="100">
        </div>
        <div class="box-container">
          <div class="box">
            <h3>Welcome</h3>
            <p><?= $fetch_profile['name']; ?></p>
            <a href="update.php" class="btn">update profile</a>
          </div>

          <div class="box">
            <?php 
                $select_message = $conn->prepare("SELECT * FROM `message`");
                $select_message->execute();
                $number_of_message = $select_message->rowCount();
            ?>
            <h3><span><?= $number_of_msg; ?></span> new message</h3>
            <p>unread message</p>
            <a href="message.php" class="btn">see message</a>
            </div>

            <div class="box">
            <?php 
                $select_products = $conn->prepare("SELECT * FROM `products`WHERE `seller_id`");
                $select_products->execute($seller_id);
                $number_of_products = $select_products->rowCount();
            ?>
            <h3><?= $number_of_products; ?> new message</h3>
            <p>products added</p>
            <a href="add_product.php" class="btn">add products</a>
            </div>

             <div class="box">
            <?php 
                $select_products = $conn->prepare("SELECT * FROM `products`WHERE `seller_id`");
                $select_products->execute($seller_id);
                $number_of_products = $select_products->rowCount();
            ?>
            <h3><?= $number_of_products; ?> new message</h3>
            <p>products added</p>
            <a href="add_product.php" class="btn">add products</a>
            </div>

             <div class="box">
            <?php 
                $select_active_products = $conn->prepare("SELECT * FROM `products`WHERE `seller_id`");
                $select_active_products->execute([$seller_id,'active']);
                $number_of_products = $select_products->rowCount();
            ?>
            <h3><?= $number_of_active_products; ?> new message</h3>
            <p>total active products</p>
            <a href="view_product.php" class="btn">view active products</a>
            </div>

             <div class="box">
            <?php 
                $select_deactive_products = $conn->prepare("SELECT * FROM `products`WHERE `seller_id`");
                $select_deactive_products->execute([$seller_id,'active']);
                $number_of_products = $select_products->rowCount();
            ?>
            <h3><?= $number_of_active_products; ?> new message</h3>
            <p>total deaactive products</p>
            <a href="view_product.php" class="btn">view active products</a>
            </div>

            <div class="box">
            <?php 
                $select_users = $conn->prepare("SELECT * FROM `users`");
                $select_users->execute();
                $number_of_users = $select_users->rowCount();
            ?>
            <h3><span><?= $number_of_users; ?></span> new message</h3>
            <p>users account</p>
            <a href="user_accounts.php" class="btn">see users</a>
            </div>

            <div class="box">
            <?php 
                $select_sellers = $conn->prepare("SELECT * FROM `sellers`");
                $select_sellers->execute();
                $number_of_sellers = $select_sellers->rowCount();
            ?>
            <h3><span><?= $number_of_sellers; ?></span> new message</h3>
            <p>sellers accounts</p>
            <a href="user_accounts.php" class="btn">see sellers</a>
            </div>

            <div class="box">
            <?php 
                $select_orders = $conn->prepare("SELECT * FROM `orders`WHERE seller_id = ?");
                $select_orders->execute([$seller_id]);
                $number_of_orders = $select_orders->rowCount();
            ?>
            <h3><span><?= $number_of_orders; ?></span> new message</h3>
            <p>total orders placed</p>
            <a href="admin_order.php" class="btn">total orders</a>
            </div>

            <div class="box">
            <?php 
                $select_confirm_orders = $conn->prepare("SELECT * FROM `orders`WHERE seller_id = ? AND status = ?");
                $select_orders->execute([$seller_id , 'in progress']);
                $number_of_orders = $select_orders->rowCount();
            ?>
            <h3><span><?= $number_of_orders; ?></span> new message</h3>
            <p>total orders placed</p>
            <a href="admin_order.php" class="btn">total orders</a>
            </div>


            </div>

      </section>
</div>
   


<!-- sweetalert cdn link -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

 <!-- custom js link -->
  <script src="../js/script.js"></script>
  
  <?php include '../components/alert.php'?>
  


    
</body>
</html>