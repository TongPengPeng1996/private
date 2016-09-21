<!DOCTYPE html>
<html>
	<head>
		<title>添加页面</title>
		<meta charset='utf-8'>
	</head>
	<body>
		<center>
			<h3>添加学生信息</h3>
			<a href="/user">浏览学生信息</a>
			
			<form action='/user' method='post'>
				<input type='hidden' name='_token' value='{{ csrf_token() }}'>
				<!-- <input type='hidden' name='_method' value='post'> -->
				<table width='280'>
					<tr>
						<td>姓名：</td>
						<td><input type='text' name='name'></td>
					</tr>
					<tr>
						<td>年龄：</td>
						<td><input type='text' name='age'></td>
					</tr>
					<tr>
						<td>性别：</td>
						<td>
							<input type='radio' name='sex' value='1'>男
							<input type='radio' name='sex' value='0'>女
						</td>
					</tr>
					<tr>
						<td colspan='2' align='center'>
							<input type='submit' value='添加'>
							<input type='reset'>
						</td>
					</tr>
				</table>
			</form>
		</center>
	</body>
</html>