<?php require_once 'base.php';?>
<?php

if (! isset($_SESSION)) {
    session_start();
}
if (! isset($_SESSION['userName'])) {
    header("location:login.php");
}
$userName = $_SESSION['userName'];

// 访问数据库，查询学生表指定学号的学生
require_once 'dbconfig.php';
if (! isset($_REQUEST['id'])) {
    header("location:index.php");
}
$id = $_REQUEST['id'];
$sql = "select * from subject where id = $id";
// exit($sql);
$result = mysql_query($sql);
$row = mysql_fetch_array($result)?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type="text/javascript" src="js/laydate.js"></script>
<title>修改成绩信息</title>
</head>
<body>
<div class="page-heading">
	<div id="page-wrapper">
		<div id="page-inner">
			<div class="row">
				<div class="col-md-12">
					<h2>修改科目信息</h2>
				</div>
			</div>
			<!-- /. ROW  -->
			<hr />
			<div class="row ">

				<div
					class="col-md-5 col-md-offset-0 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
					<div class="panel panel-default">
						<div class="panel-heading">
							<strong> 修改信息 </strong>
						</div>
						<div class="panel-body">

							<form method="post" action="editsubjectdo.php">
								<hr />
								<div class="form-signin-heading text-center">


									<input type='hidden' name='id' value='<?=$row ['id']?>' /> <br />

									
									<div class="form-group input-group">
										<tr>
											<td align='center'><i class="fa fa-user fa-1x"></i>&nbsp;&nbsp;&nbsp;科目编号：</td>
											<td><input type='text' name='subjectId' value='<?=$row ['subjectId']?>' /></td>
										</tr>
									</div>
									
									<div class="form-group input-group">
											<tr>
												<td align='center'><i class="fa fa-bookmark fa-1x"></i>&nbsp;&nbsp;&nbsp;科目：</td>
												<td><input type='text' name='subject'
													value='<?=$row ['subject']?>' /></td>
											</tr>
									</div>
								
									<div class="form-group input-group">
										<input type="submit" name="Submit" value="提交修改"
											class="btn btn-primary ">

									</div>

								</div>




							</form>

						</div>

					</div>
				</div>
			</div>

			<!-- Placed js at the end of the document so the pages load faster -->

			<!-- Placed js at the end of the document so the pages load faster -->
			<script src="js/jquery-1.10.2.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/modernizr.min.js"></script>

</body>
</html>
