<?php
session_start();
session_regenerate_id();

if (empty($_SESSION['name'])) {
    header("location: login.php?access=failed");
}

include 'connection.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css" />
</head>

<body>
  <div class="wrapper">
    <?php include 'inc/navbar.php' ?>

    <div class="content">
      <?php
            if (isset($_GET['pg'])) {
                if (file_exists('content/' . $_GET['pg'] . '.php')) {
                    include 'content/' . $_GET['pg'] . '.php';
                }
            } else {
                include 'content/dashboard.php';
            }
            ?>
    </div>

    <!-- <footer class="text-center border-top fixed-bottom p-3">Copyright &copy; 2024 PPKD - Jakarta Pusat</footer> -->
  </div>

  <script src="assets/dist/js/jquery-3.7.1.min.js"></script>
  <script src="assets/dist/js/moment.js"></script>
  <!-- <script src="assets/dist/js/bootstrap.min.js"></script> -->
  <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="app.js"></script>

  <script>
  $("#id_borrowing").change(function() {
    let borrowing_number = $(this).find("option:selected").val();
    let tbody = $("tbody");
    let newRow = "";
    console.log(borrowing_number);
    $.ajax({
      url: "ajax/getBorrowing.php?borrowing_number=" + borrowing_number,
      type: "get",
      dataType: "json",
      success: function(res) {
        $("#borrowing_number").val(res.data.borrowing_number);
        $("#borrowing_date").val(res.data.borrowing_date);
        $("#return_date").val(res.data.return_date);
        $("#member_name").val(res.data.member_name);

        let return_date = new moment(res.data.return_date);

        let currentDate = new Date().toJSON().slice(0, 10);
        let returned_date = new moment(currentDate);

        let dayDifference = returned_date.diff(return_date, "days");

        let chargeFee = 500;
        let totalCharge = dayDifference * chargeFee;

        if (totalCharge <= 0) {
          totalCharge = 0;
        }

        $("#charge").val(totalCharge);

        // console.log(res);
        $.each(res.borrowing_details, function(key, val) {
          newRow += "<tr>";
          newRow += "<td>" + val.title + "</td>";
          newRow += "</tr>";
        });

        tbody.html(newRow);
        console.log(res);
      },
    });
  });
  </script>

  <?php include 'inc/footer.php' ?>
  <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="app.js"></script>
</body>

</html>