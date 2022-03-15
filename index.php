

<?php
include ("./header.php")
?>



<?php
include ("./content.php")
?>



<?php
include ("./footer.php")
?>















<br/>




<form name="regiser" action="action-register.php" method="POST">

<table style="width: 50%;" style="margin-left: auto;margin-right :auto;">



<tr>
    <td style="width: 40%;">نام واقعی <span style="color:red;">*</span></td>
    <td style="width:60%"><input type="text" id="realname" name="realname" /></td>
</tr>




<tr>
    <td > نام کاربری  <span style="color:red;">*</span></td>
    <td ><input type="text" style="text-align:left" id="username" name="username" /></td>
</tr>


<tr>
    <td> کلمه ی عبور  <span style="color:red;">*</span></td>
    <td ><input style="text-align:left" type="password" id="password" name="password" /></td>
</tr>


<tr>
    <td > تکرار کلمه ی عبور  <span style="color:red;">*</span></td>
    <td ><input  style="text-align:left" type="password" id="repassword" name="repassword" /></td>
</tr>


<tr>
    <td > پست الکترونیکی  <span style="color:red;">*</span></td>
    <td ><input  style="text-align:left" type="text" id="email" name="email" /></td>
</tr>







<tr>

<td><br/><br/></td>
<td>
    <input type="submit" value="ثبت نام "/>
    <input type="reset" value="جدید"/>
</td>

</tr>




</table>


</form>
