<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="flex">

      <a href="admin_page.php" class="logo">لوحة<span>الإدارة  </span></a>
      <div class="navbar">
        <nav>
         <a href="admin_page.php">الرئيسية</a>
         <a href="admin_products.php">المنتجات</a>
        <a href="admin_orders.php">الطلبات</a>
         <a href="admin_users.php">العملاء</a>
         <a href="admin_contacts.php">الرسائل</a>
         </nav>
         </div>
      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="account-box">
         <p>إسم المستخدم: <span><?php echo $_SESSION['admin_name']; ?></span></p>
         <p>الإيميل : <span><?php echo $_SESSION['admin_email']; ?></span></p>
         <a href="logout.php" class="delete-btn">تسجيل الخروج</a>
         <div>جديد<a href="index.php">تسجيل الدخول</a> | <a href="register.php">التسجيل</a></div>
      </div>

   </div>

</header>