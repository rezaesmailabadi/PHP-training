<?php




if (isset($_POST['realname']) && !empty($_POST['realname'])      ){
    $realname = $_POST['realname'] ;
}
else{
    exit(" برخی از فیلدها  مقدار دهی نشده است ");
}











// شکل کلی دسترسی به عناصر آرایه ی $_GET 

// $realname = $_POST['realname'] ;
$username = $_POST['username'] ;
$password = $_POST['password'] ;
$repassword = $_POST['repassword'] ;
$email = $_POST['email'] ;

?>




<?php 

echo ("realname = " . $realname . "<br/>");
echo ("username = " . $username . "<br/>");
echo ("password = " . $password . "<br/>");
echo ("repassword = " . $repassword . "<br/>");
echo ("email = " . $email . "<br/>");


?>



<!-- توابع موردنیاز برای اعتبار سنجی  -->
<!-- 

isset(نام متغیر );


empty(نام متغیر);


exit(پیام دلخواه);


filter_var(نام متغیر , عبارت الگو); -->