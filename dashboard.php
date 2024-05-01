<?php
session_start();

$id = $_SESSION['user_id'];
$email = $_SESSION['email'];

if (empty($id) || empty($email)) {
  header("Location: Signin.php");
  exit;
}

include 'db_connection.php';

$sql = "SELECT * FROM appointment_table";
$result = $mysqli->query($sql);

$sql1 = "SELECT * FROM completed_appointment_table";
$result1 = $mysqli->query($sql1);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="admin.css" />
  <title>Admin Panel</title>
</head>

<body>
  <div class="container-fluid p-5">
    <div class="row">
      <div class="d-flex justify-content-start col-6 pt-5 fs-2 fw-bold">Admin</div>
      <div class="d-flex justify-content-end col-6 pt-5 float-right">
        <form action="logout.php" method="post">
          <input class="btn btn-primary" type="submit" value="Log Out" name="logout" />
        </form>
      </div>
    </div>
    <div class="col-12 border border-3 border-black mt-3 mt-md-0"></div>

    <!-- Pending Appointments Start -->
    <div class="row mt-5">
      <div class="col-12 m-auto row">

        <div class="col-12 rounded border-black border m-auto mt-4">
          <div class="col-12 h2 p-3 fw-bold text-center text-md-start">Pending Appointments</div>
          <div class="table-responsive">

            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col">S. No.</th>
                  <th scope="col">Owner Name</th>
                  <th scope="col">Owner Contact</th>
                  <th scope="col">Email</th>
                  <th scope="col">Pet Name</th>
                  <th scope="col">Pet Age</th>
                  <th scope="col">Pet Type</th>
                  <th scope="col">Appointment Date</th>
                  <th scope="col">Appointment Time</th>
                  <th scope="col">Message</th>
                  <th scope="col">Complete</th>
                </tr>
              </thead>
              <tbody>
                <?php
                while ($rows = $result->fetch_assoc()) {
                ?>
                  <tr>
                    <th scope="row"><?php echo $rows['id']; ?></td>
                    <td><?php echo $rows['name']; ?></td>
                    <td><?php echo $rows['phone']; ?></td>
                    <td><?php echo $rows['email']; ?></td>
                    <td><?php echo $rows['petname']; ?></td>
                    <td><?php echo $rows['petage']; ?></td>
                    <td><?php echo $rows['pettype']; ?></td>
                    <td><?php echo $rows['date']; ?></td>
                    <td><?php echo $rows['time']; ?></td>
                    <td><?php echo $rows['message']; ?></td>
                    <td>
                      <form action="#" method="post">
                        <input type="hidden" name="id" value="<?php echo $rows['id']; ?>" />
                        <input class="btn btn-success" type="submit" value="Complete" name="complete" />
                      </form>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
    <!-- Pending Appointments End -->

    <!-- Completed Appointments Start -->
    <div class="row mt-5">
      <div class="col-12 m-auto row">

        <div class="col-12 rounded border-black border m-auto mt-4">
          <div class="col-12 h2 p-3 fw-bold text-center text-md-start">Completed Appointments</div>
          <div class="table-responsive">

            <table class="table table-striped table-hover overflow-auto">
              <thead>
                <tr>
                  <th scope="col">S. No.</th>
                  <th scope="col">Owner Name</th>
                  <th scope="col">Owner Contact</th>
                  <th scope="col">Email</th>
                  <th scope="col">Pet Name</th>
                  <th scope="col">Pet Age</th>
                  <th scope="col">Pet Type</th>
                  <th scope="col">Appointment Date</th>
                  <th scope="col">Appointment Time</th>
                  <th scope="col">Message</th>
                </tr>
              </thead>
              <tbody>
                <?php
                while ($rows1 = $result1->fetch_assoc()) {
                ?>
                  <tr>
                    <th scope="row"><?php echo $rows1['id']; ?></td>
                    <td><?php echo $rows1['name']; ?></td>
                    <td><?php echo $rows1['phone']; ?></td>
                    <td><?php echo $rows1['email']; ?></td>
                    <td><?php echo $rows1['petname']; ?></td>
                    <td><?php echo $rows1['petage']; ?></td>
                    <td><?php echo $rows1['pettype']; ?></td>
                    <td><?php echo $rows1['date']; ?></td>
                    <td><?php echo $rows1['time']; ?></td>
                    <td><?php echo $rows1['message']; ?></td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
    <!-- Completed Appointments End -->

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>