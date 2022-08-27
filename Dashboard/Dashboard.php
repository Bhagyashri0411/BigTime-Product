
<?php
include_once("./../Php/config.php");

$result = mysqli_query($mysqli, "SELECT * FROM inquiry ORDER BY id DESC"); // using mysqli_query instead
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../Dashboard/Dashboard.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>
    <nav class="sidebar closediv">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="./../images/btlogo.jpg" alt="broken">
                </span>

                <div class="text logo-text">
                    <span class="name">Bigtime</span>
                    <span class="profession">Web developer</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bar-chart-alt-2 icon'></i>
                            <span class="text nav-text">Revenue</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Notifications</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-pie-chart-alt icon'></i>
                            <span class="text nav-text">Analytics</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-heart icon'></i>
                            <span class="text nav-text">Likes</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-wallet icon'></i>
                            <span class="text nav-text">Wallets</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>

            </div>
        </div>

    </nav>

    <section class="home">
        <div class="container-fluid">
            <div class="row">
                <div class="mainnav">
                    <div class="profile">
                        <img class="profile-image" src="https://picsum.photos/200/200?random=1">
                        <p class="profile-name">Lorem ipsum</p>
                    </div>
                </div>
            </div>
        </div>
        <section class="bodydiv">
            <div class="col-md-12">
                <div class="col-md-4">
                    <div class="card total1">

                        <div class="info-detail">
                            <h3>All Students</h3>
                            <h4>1,873,250</h4>

                        </div>


                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card total2">

                        <div class="info-detail">
                            <h3>Experience Students</h3>

                            <h4>1o,890</h4>

                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card total3">

                        <div class="info-detail">
                            <h3>Fresher Students</h3>

                            <h4>1o,890</h4>

                        </div>

                    </div>
                </div>
            </div>
            <br><br>


            <div class="col-md-12 bodydiv">
                <div class="col-md-12">
                    <div class="card" style="background-color: #fff;">
                    <table>
					<tr>
                        <th>Sr. No</th>
					    <th>Name</th>
		                <th>Email</th>
		                <th>Mob.No</th>
		                <th>Update</th>
	                </tr>
	            <?php 
	
                    while($res = mysqli_fetch_array($result)) { 	
		                echo "<tr>";
                        echo "<td></td>";
		                echo "<td>".$res['username']."</td>";	
		                echo "<td>".$res['usermail']."</td>";	
		                echo "<td>".$res['usermobile']."</td>";
		                echo "<td>".$res['usermessage']."</td>";
		                echo "</tr>";
	                    }
	            ?>
                    </table>
                    </div>
                </div>
            </div>


        </section>
    </section>


    <script>
        const body = document.querySelector('body'),
            sidebar = body.querySelector('nav'),
            toggle = body.querySelector(".toggle"),
            searchBtn = body.querySelector(".search-box"),
            modeSwitch = body.querySelector(".toggle-switch"),
            modeText = body.querySelector(".mode-text");


        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("closediv");
        })

        searchBtn.addEventListener("click", () => {
            sidebar.classList.remove("closediv");
        })

        modeSwitch.addEventListener("click", () => {
            body.classList.toggle("dark");

            if (body.classList.contains("dark")) {
                modeText.innerText = "Light mode";
            } else {
                modeText.innerText = "Dark mode";

            }
        });
    </script>

</body>

</html>