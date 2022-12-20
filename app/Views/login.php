<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login V19</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/css/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/css/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/css/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/css/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/css/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/css/main.css">
	<!--===============================================================================================-->
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>/js/jquery-3.6.0.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>/js/popper.js"></script>
	<script src="<?= base_url() ?>/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>/js/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>/js/moment.min.js"></script>
	<script src="<?= base_url() ?>/js/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>/js/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>/js/main.js"></script>

</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-33">
						登入
					</span>
					<div class="container">
						<div class=" row align-items-center">
							<div class="col-2 g-2">
								帳號:
							</div>

							<input class="col border border-info rounded-3 p-3" type="text" id="account">

						</div>
						<div class=" row align-items-center ">
							<div class="col-2 g-2">
								密碼:
							</div>

							<input class="col border border-info rounded-3 p-3" type="password" id="pass">

						</div>

					</div>
					<div class="d-grid gap-2 ">
						<button class=" btn btn-primary rounded-3  " type="button" onclick="log()">
							登入
						</button>
					</div>

					<div class="text-center p-t-45 p-b-4">

						<a href="<?= base_url() ?>/RegisterCon" class="txt2 hov1">
							註冊
						</a>
						<span class="txt1">
							一個新的帳號
						</span>

					</div>


				</form>
			</div>
		</div>
	</div>

	<script>
		function log() {
			var account = $("#account").val();

			var password = $("#pass").val();
			if (account == "") {
				Swal.fire({
					icon: 'error',
					title: '錯誤',
					text: "帳號不得為空"
				});
			} else if (password == "") {
				Swal.fire({
					icon: 'error',
					title: '錯誤',
					text: "密碼不得為空"
				});
			} else {
				data = {
					"account": account,
					"password": password
				};
				console.log(data);

				$.ajax({
					type: "POST",
					url: "LoginCon/log",
					data: data,
					dataType: "JSON",

					success: function(response) {
						if (response['status'] == "1") {
							Swal.fire({
								icon: 'error',
								title: '錯誤',
								text: response['why']
							})
							// Swal.fire(response['why']);
						} else if (response['status'] == "2") {
							Swal.fire({
								icon: 'success',
								title: '成功',
								text: response['why'],
								showConfirmButton: false,
								timer: 5000
							});
							window.location.href = "Home/tit";

						}
					}
				});
			}
		}
	</script>


</body>

</html>