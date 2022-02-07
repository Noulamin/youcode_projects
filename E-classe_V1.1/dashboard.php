<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <title>dashboard</title>
    <script src="https://kit.fontawesome.com/3a3f417346.js" crossorigin="anonymous" defer></script>
</head>
<body>
    <main>
        <section class="left_side_bare">
            <p class="e-class-logo">
                E-classe
            </p>
            <img src="images/youcode.png" alt="youcode">
            <p class="name">
                Admin name
            </p>
            <p class="role">
                Admin
            </p>
            <div class="buttons">
                <button class="bu0">
                    <div class="center">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="center0">
                        Home
                    </div>
                </button>
                <button class="bu">
                    <div class="center">
                        <i class="far fa-bookmark"></i>
                    </div>
                    <div class="center0">
                        Courses
                    </div>
                </button>
                <form action="dashboard_student.php">
                    <button class="bu">
                        <div class="center">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="center0">
                            Students
                        </div>
                    </button>
                </form>
               
                <form action="dashboard_payment.php">
                    <button class="bu">
                        <div class="center">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <div class="center0">
                            Payment
                        </div>
                    </button>
                </form>
                <button class="bu">
                    <div class="center">
                        <img class="icons" src="images/report.png" alt="">
                    </div>
                    <div class="center0">
                        Report
                    </div>
                </button>
                <button class="bu">
                    <div class="center">
                        <i class="fas fa-sliders-h"></i>
                    </div>
                    <div class="center0">
                        Settings
                    </div>
                </button>
            </div>
            <div class="sign_out">
                <form action="index.php">
                    <button class="logout">
                      <div class="center0">
                          logout
                      </div>
                      <div class="center">
                          <i class="fas fa-sign-out-alt"></i>
                      </div>
                     </button>
                  </form>
            </div>
        </section>
        <section class="right_side_bare">
            <header>
                <img src="images/notification.png" alt="">
                <input type="text" placeholder="Search ...">
            </header>
            <div class="divs">
                <div class="divs1">
                    <div class="divs2" style="color: #74C1ED;">
                        <i class="fas fa-graduation-cap"></i>
                        <p>
                            Students
                        </p>
                        <p class="num">
                            243
                        </p>
                    </div>
                    <div class="divs2" id="wst1">
                        <i class="far fa-bookmark" style="color: #EE95C5;"></i>
                        <p>
                            Course
                        </p>
                        <p class="num">
                            13
                        </p>
                    </div>
                    <div class="divs2" id="wst2">
                        <i class="fas fa-dollar-sign" style="color: #00C1FE;"></i>
                        <p>
                            Payments
                        </p>
                        <p class="num">
                            DHS 556,000
                        </p>
                    </div>
                    <div class="divs2">
                        <i class="far fa-user card_icon" style="color: white;"></i>
                        <p class="t">
                            Users
                        </p>
                        <p class="num">
                            3
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>