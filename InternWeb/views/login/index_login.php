<!DOCTYPE html>
<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500;600;800;900&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div style="width: 400px; display: flex; flex-direction: column;">
                <img src="img/ku_fullname_logo.png" style="width: 250px; height: auto; display: flex; padding: 50px; margin-left: 25px;">
                <img src="img/student_study.jpg" style="width: 300px; height: 300px; margin-left: 40px;">
            </div>
            <div class="container_field">
                <div class="login">LOGIN</div>
                <div class="title_field">Username</div>
                <input type="text">
                <div class="title_field" style="margin-top: 15px;">Password</div>
                <input type="password" style="margin-bottom: 50px;">
                <div class="signup_button" type="submit">
                    <div style="color: white; font-size: 20px; font-weight: 800; margin-top: 7px;">SIGN UP</div>
                </div>
            </div>
        </div>


    </body>

<style>
body {
    background-image: url("img/bg_login.png");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
}

.container {
    width: 800px;
    height: 500px;
    background-color: white;
    margin-left: 25%;
    margin-top: 10%;
    border-radius: 30px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    display: flex;
    flex-direction: row;
    font-family: 'Nunito', sans-serif;
}

.container_field {
    width: 400px;
    height: 500px;
    float: right;
    display: flex;
    flex-direction: column;
    border-radius: 0px 30px 30px 0px;
}

.login {
    font-size: 36px;
    font-weight: 900;
    color: #04AA6D;
    margin-top: 60px;
    margin-bottom: 60px;
}

.title_field {
    font-size: 16px;
    font-weight: 600;
    color: #04AA6D;
    float: left;
    display: flex;
    margin-left: 50px;
}

input {
    width: 300px;
    height: 30px;
    align-self: center;
    border-style: solid;
    border-color: #04AA6D;
    border-radius: 10px;
}

input:focus {
    background-color: #dbf7ea;
    border-color: #04AA6D;
}

.signup_button {
    width: 300px;
    height: 40px;
    background-color: #04AA6D;
    align-self: center;
    border-radius: 15px;
    cursor: pointer;
}

.signup_button:hover {
    background-color: #049660;
}


</style>
</html>