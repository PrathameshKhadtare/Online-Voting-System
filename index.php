<html>

<head>
    <title>Online voting system - Home</title>
    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <section class="home">
        <video autoplay loop muted plays-inline>
            <source src="India flag.mp4" type="video/mp4">
        </video>

        <center>
            <div id="headerSection">
                <h1><span style="color:orange;">Online</span> <span style="color:#fff;">Voting<span> <span style="color:green ;">System</span></h1>
            </div>


            <div class="loginSection">
                <h2>Login</h2>
                <form action="api/login.php" method="POST">
                    <input type="number" name="mob" placeholder="Enter mobile" required><br><br>
                    <input type="password" name="pass" placeholder="Enter password" required><br><br>

                    <select name="role">
                        <option value="1">Voter</option>
                        <option value="2">Group</option>
                    </select><br><br>
                    <button id="loginbtn" type="submit" name="loginbtn"><span>Login</span></button><br><br>
                    New user? <a href="routes/register.php">Register here</a>
                </form>
            </div>

        </center>
    </section>
    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>