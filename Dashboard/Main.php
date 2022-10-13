<?php
include("./../php/dbcon.php");

$result = mysqli_query($mysqli, "SELECT * FROM startaproject ORDER BY id DESC"); // using mysqli_query instead

session_start();
if (isset($_SESSION['loginname'])) {
    # code...

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="./main.css" />
    <title> Inquiry Details</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i><?php
                                echo $_SESSION['name']
                                ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <!-- <div class="row g-3 my-2">
                    <div class="col-md-6">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">720</h3>
                                <p class="fs-5">Inveestment</p>
                            </div>
                            <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">4920</h3>
                                <p class="fs-5">Loan</p>
                            </div>
                            <i
                                class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                </div> -->

                <div class="row my-4">
                    <h3 class="fs-4 mb-3">Inquiry Details</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                            <tr>
                        <th>Sr. No</th>
					    <th>Company Name</th>
		                <th>Company Email</th>
		                <th>Company Mobile Number</th>
		                <th>Company Requirment</th>
		                   <th>Messages</th>
                        <!--<th>View More details</th>-->
	                </tr>
                            </thead>
                            <?php 
	
                    while($res = mysqli_fetch_array($result)) { 	
		                echo "<tr>";
                        echo "<td></td>";
		                echo "<td>".$res['comname']."</td>";	
		                echo "<td>".$res['comemail']."</td>";	
		                echo "<td>".$res['comnumber']."</td>";
		                echo "<td>".$res['droproject']."</td>";
		                echo "<td>".$res['usermessage']."</td>";
		                echo "</tr>";
	                    }
	            ?>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
<?php
}
else{
    header("location : ./../index.php");
    exit();
}
?>