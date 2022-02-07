<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard_payment.css">
    <title>dashboard payment</title>
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
              <form action="dashboard.php">
                <button class="bu">
                  <div class="center">
                      <i class="fas fa-home"></i>
                  </div>
                  <div class="center0">
                      Home
                  </div>
              </button>
              </form>
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
                <button class="bu0">
                    <div class="center">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <div class="center0">
                        Payment
                    </div>
                </button>
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
                    <p class="p1">
                        Students List
                    </p>

                    <button class="bu2">
                        ADD NEW STUDENT
                    </button>
                </div>
                <div class="divs2">
                  <table class="table table-borderless" style="width: 100%;">
                    <thead>
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Payment Schedule</th>
                        <th scope="col">Bill Number</th>
                        <th scope="col">Amount Paid</th>
                        <th scope="col">Balance amount</th>
                        <th scope="col">Date</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        include "payment_data.php";
                        foreach($table_data as $data) :
                      ?>
                        <tr class=" bg-white  mb-3 align-middle border-5 border-light ">
                          <td><?php echo $data['Name'] ?></td>
                          <td><?php echo $data['Payment Schedule'] ?></td>
                          <td><?php echo $data['Bill Number'] ?></td>
                          <td><?php echo $data['Amount Paid'] ?></td>
                          <td><?php echo $data['Balance amount'] ?></td>
                          <td><?php echo $data['Date'] ?></td>
                          <td class="text-info">
                            <i class="bi bi-eye"></i>
                          </td>
                        </tr>
                      <?php endforeach ?>
                  </table>
                </div>
            </div>
        </section>
    </main>
</body>
</html>