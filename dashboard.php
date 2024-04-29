<?php
session_start();

$id = $_SESSION['user_id'];
$email = $_SESSION['email'];

if (empty($id) || empty($email)) {
  header("Location: Signin.php");
  exit;
}

include 'db_connection.php';

$sql = "SELECT * FROM active_users_table";
$sql1 = "SELECT * FROM pending_appointments_table";
$sql2 = "SELECT * FROM user_table";
$sql3 = "SELECT * FROM services_table";
$sql4 = "SELECT * FROM appointment_table";
$result = $mysqli->query($sql);
$result1 = $mysqli->query($sql1);
$result2 = $mysqli->query($sql2);
$result3 = $mysqli->query($sql3);
$result4 = $mysqli->query($sql4);
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
      <div class="col-md-11 pt-5 fs-2 fw-bold">Admin</div>
      <div class="col-md-1 pt-5 float-right">
        <form action="logout.php" method="post">
          <input class="btn btn-primary" type="submit" value="Log Out" name="logout" />
        </form>
      </div>
    </div>
    <div class="col-12 border border-3 border-black"></div>
    <div class="row mt-5">
      <div class="col-7 m-auto row">
        <div class="col-12 mb-5 mt-0 border border-black rounded row">
          <div class="col-12 fs-5 p-3">Active users</div>
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <?php
              while ($rows = $result->fetch_assoc()) {
              ?>
                <tr>
                  <th scope="row"><?php echo $rows['#']; ?></td>
                  <td><?php echo $rows['First']; ?></td>
                  <td><?php echo $rows['Last']; ?></td>
                  <td><?php echo $rows['Handle']; ?></td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
        <div class="col-12 pb-4 border border-black rounded row">
          <div class="col-5 rounded border-black border m-auto mt-4">
            <div class="col-12 fs-5 p-3">User</div>
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Handle</th>
                </tr>
              </thead>
              <tbody>
                <?php
                while ($rows1 = $result1->fetch_assoc()) {
                ?>
                  <tr>
                    <th scope="row"><?php echo $rows1['#']; ?></td>
                    <td><?php echo $rows1['First']; ?></td>
                    <td><?php echo $rows1['Last']; ?></td>
                    <td><?php echo $rows1['Handle']; ?></td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
          <div class="col-5 rounded border-black border m-auto mt-4">
            <div class="col-12 fs-5 p-3">Services</div>
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Handle</th>
                </tr>
              </thead>
              <tbody>
                <?php
                while ($rows2 = $result2->fetch_assoc()) {
                ?>
                  <tr>
                    <th scope="row"><?php echo $rows2['#']; ?></td>
                    <td><?php echo $rows2['First']; ?></td>
                    <td><?php echo $rows2['Last']; ?></td>
                    <td><?php echo $rows2['Handle']; ?></td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
          <div class="col-5 rounded border-black border m-auto mt-4">
            <div class="col-12 fs-5 p-3">Appointment</div>
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Handle</th>
                </tr>
              </thead>
              <tbody>
                <?php
                while ($rows3 = $result3->fetch_assoc()) {
                ?>
                  <tr>
                    <th scope="row"><?php echo $rows3['#']; ?></td>
                    <td><?php echo $rows3['First']; ?></td>
                    <td><?php echo $rows3['Last']; ?></td>
                    <td><?php echo $rows3['Handle']; ?></td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-4 m-auto mt-0 border border-black rounded row">
        <div class="col-12 fs-5 p-3">Pending Appointments</div>
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
            </tr>
          </thead>
          <tbody>
            <?php
            while ($rows4 = $result4->fetch_assoc()) {
            ?>
              <tr>
                <th scope="row"><?php echo $rows4['#']; ?></td>
                <td><?php echo $rows4['First']; ?></td>
                <td><?php echo $rows4['Last']; ?></td>
                <td><?php echo $rows4['Handle']; ?></td>
              </tr>
            <?php
            }
            ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>