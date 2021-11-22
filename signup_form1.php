
<body>
    <h1>Signup Form</h1>
    <form action="data_details2.php" method="POST">

        <div>FirstName: <input name='first_name' placeholder=" enter firstname" type="text" required='required' id='first_name'/></div>

        <div>LastName: <input name='last_name' placeholder=" enter lastname" type="text" required='required' id='last_name'/></div>

        <div>Email: <input name='email' placeholder=" enter email" type="email" required='required'  /></div>

        <div>Password: <input name='password' placeholder="enter password" type="password" required='required'>/</div>

        <div><button type="submit" value="Signup" >signup</button></div>
    </form>
</body>
<!-- // similar like captcha  -->
    <?php
$str='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
echo substr(str_shuffle($str),0,10)."<br>";
?>