<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset='utf-8'>
		<script type="text/javascript">
			function doup(id)
			{
				if(confirm('确定要修改?')){
					var form = document.myform;
					form.action = '/user/'+id;
					form.submit();
				}
			}

		</script>
	</head>
	<body>
		<center>
			<h3>修改学生信息</h3>
			<a href="/user">浏览学生信息</a>
			
				<!-- <form action='/user/' method='get' name='myform' style='display:none;'>
					<input type='hidden' name='_token' value='{{ csrf_token() }}'>
					<input type='hidden' name='_method' value='patch'> 
				</form> -->

			<form action="/user/" method='post' name='myform'>

				<input type='hidden' name='_token' value="{{ csrf_token() }}">
				<input type='hidden' name='_method' value="put">
				

				<table width='280'>
					<tr>
						<td>姓名：</td>
						<input type='hidden' name='id' value="{{ $user->id }}">
						<td><input type='text' name='name' value="{{ $user->name }}"></td>
					</tr>
					<tr>
						<td>年龄：</td>
						<td><input type='text' name='age' value="{{ $user->age }}"></td>
					</tr>
					<tr>
						<td>性别：</td>
						<td>
							<input type='radio' name='sex' value='1' 
							@if($user->sex == 1)
								checked
							@endif
								>男
							<input type='radio' name='sex' value='0' 
							@if($user->sex == 0)
								checked
							@endif
							>女
						</td>
					</tr>
					<tr>
						<td colspan='2' align='center'>
							<!-- <input type='submit' value='修改'> -->
							<!-- <?php echo  $id?>-->
							<button onclick='doup({{ $user->id }})'>修改</button>
							<input type='reset' value='重置'>
						</td>
					</tr>
				</table>
			</form>
		</center>
	</body>
</html>