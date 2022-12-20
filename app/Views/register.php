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
                        註冊
                    </span>

                    <div >
                        暱稱:
                        <input class="input100 border border-info rounded-3" type="text" id="name" >

                    </div>

                    <div >
                        帳號:
                        <input class="input100 border border-info rounded-3" type="text" id="acc" >

                    </div>

                    <div >
                        密碼:
                        <input class="input100 border border-info rounded-3" type="password" id="pass" >

                    </div>
                    <div >
                        密碼確認:
                        <input class="input100 border border-info rounded-3" type="password" id="repass" >

                    </div>

                    <div >
                        電話:
                        <input class="input100 border border-info rounded-3" type="text" id="telephone" >

                    </div>

                    <div data-validate="Valid email is required: ex@abc.xyz">
                        E-MAIL
                        <input for="email" class="input100 border border-info rounded-3" type="text" name="email" id="email" >

                    </div>
                    
                    <div class="container-login100-form-btn m-t-20">
                        <button class="login100-form-btn" type="button" onclick="res()">
                            註冊
                        </button>
                    </div>

                    <div class="text-center p-t-45 p-b-4">
                        <span class="txt1">
                            現有帳號
                        </span>

                        <a href="<?= base_url() ?>/LoginCon" class="txt2 hov1">
                            登入
                        </a>
                    </div>


                </form>
            </div>
        </div>
    </div>

    <script>
        function res() {
            var name = $("#name").val();
            var acc = $("#acc").val();
            var pass = $("#pass").val();
            var repass = $("#repass").val();
            var telephone = $("#telephone").val();
            var mail = $("#email").val();
            if (name == "") {
                Swal.fire({
                    icon: 'error',
                    title: '錯誤',
                    text: "輸入暱稱"
                });
            } else if (acc == "") {
                Swal.fire({
                    icon: 'error',
                    title: '錯誤',
                    text: "帳號不得為空"
                });
            } else if (pass == "") {
                Swal.fire({
                    icon: 'error',
                    title: '錯誤',
                    text: "密碼不得為空"
                });
            } else if (repass == "") {
                Swal.fire({
                    icon: 'error',
                    title: '錯誤',
                    text: "密碼驗證不得為空"
                });
            } else if (telephone == "") {
                Swal.fire({
                    icon: 'error',
                    title: '錯誤',
                    text: "電話不得為空"
                });
            } else if (mail == "") {
                Swal.fire({
                    icon: 'error',
                    title: '錯誤',
                    text: "email不得為空"
                });
            } else if (pass != repass) {
                Swal.fire({
                    icon: 'error',
                    title: '錯誤',
                    text: "密碼確認不一致"
                });
            } else {
                data = {
                    "acc": acc,
                    "pass": pass,
                    "name": name,
                    "telephone": telephone,
                    "mail": mail
                }

                console.log(data);
                $.ajax({
                    type: "POST",
                    url: "RegisterCon/reg",
                    data: data,
                    dataType: "JSON",
                    success: function(response) {
                        if (response['status'] == "1") {
                            Swal.fire(response['why']);
                        } else if (response['status'] == "2") {
                            Swal.fire(response['why']);
                            window.location.href = "LoginCon";
                        }
                    }
                });


            }
        }
    </script>


</body>

</html>