<!DOCTYPE  html>
<html>
	<head>
	         <meta charset = "utf-8">
	         <title>Login</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1">
               <link rel="stylesheet"  type="text/css"   href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>" />
	<link rel="stylesheet"  type="text/css"   href="<?php echo base_url().'assets/css/head_title.css'; ?>" />
	<link rel="stylesheet"  type="text/css"   href="<?php echo base_url().'assets/css/common.css'; ?>" />
	 <link rel="stylesheet"  type="text/css"   href="<?php echo base_url().'assets/css/dashboard.css'; ?>" />
	 <link rel="stylesheet"  type="text/css"   href="<?php echo base_url().'assets/css/footer.css'; ?>" />
	 <link rel="stylesheet"  type="text/css"   href="<?php echo base_url().'assets/css/login.css'; ?>" />
	</head>
	<body>
	          <div   id = "login">
	                    <form    method = "POST"  action = "<?php  echo site_url("user/login")?>">
	                            <label>登录</label>
	                             <div><span>用户名:</span><input  type = "text"  name = "admin"  placeholder = "name"/></div>
                                           <div><span>密码:</span><input  type = "password"  name = "passwd"  placeholder = "passwd"/></div>
                                           <div><input type="submit"  class ="btn btn-primary" name ="submit"   value = "确认"></div>
	                    </form>
	          </div>
	          <div  id = "footer">
	                   <span>H.A.B&copy;2015</span>
	          </div>
	</body>
</html>