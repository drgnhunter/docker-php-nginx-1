<?php
session_start();

if (isset($_SESSION["admin_email"])) {
    require "connection.php";
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ngator Codes</title>

        <link rel="stylesheet" href="stylesheets/bootstrap.css" />
        <link rel="stylesheet" href="stylesheets/style.css" />

        <link rel="stylesheet" href="node_modules/aos/dist/aos.css" />
        <link rel="stylesheet" href="node_modules/atropos/atropos.css" />

        <link rel="stylesheet" href="codePenFooter.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;display=swap" />

        <link rel="stylesheet" href="codePenFooter2.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


        <link rel="stylesheet" href="css/style.css" />

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
        <!-- Google Fonts Roboto -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />

    </head>

    <body>
        <div class=" container-fluid overflow-hidden">


            <!-- bootstrap hamburger menu-->
            <nav class="navbar navbar-dark bg-primary fixed-top text-white">
                <div class="container-fluid text-white">
                    <a class="navbar-brand text-white" href="#">Begin Your Coding Journey</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end text-bg-primary" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body ">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Link</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-primary">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <form class="d-flex mt-3" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-info" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- bootsrap hamburger menu-->

            <div class=" pt-5">
                <?php include "header.php"; ?>
            </div>

            <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light fw-bold">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Languages</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">HTML</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CSS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">JavaScript</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Python</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">C</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">C++</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav> -->
            <div class=" hstack">
                <!--side bar permenent-->

                <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-white d-none d-md-block vh-100" style="width: 280px; position:fixed;">
                    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-black text-decoration-none">

                        <span class="fs-4">Admin Dashboard</span>
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="adminHome.php" class="nav-link text-black" aria-current="page">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#home"></use>
                                </svg>
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="adminLectures.php" class="nav-link active" aria-current="page">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#home"></use>
                                </svg>
                                Lectures
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-black">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#speedometer2"></use>
                                </svg>
                                Modules
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-black">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#table"></use>
                                </svg>
                                Assignments
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-black">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#grid"></use>
                                </svg>
                                Lecture Notes
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-black">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#people-circle"></use>
                                </svg>
                                Contact Admin
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown">
                        
                        <ul class="dropdown-menu dropdown-menu-dark text-black text-small shadow" aria-labelledby="dropdownUser1">
                            <li><a class="dropdown-item text-black" href="#">New project...</a></li>
                            <li><a class="dropdown-item text-black" href="#">Settings</a></li>
                            <li><a class="dropdown-item text-black" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
                <!--side bar permenent-->
                <div class=" invisible d-flex flex-column flex-shrink-0 p-3 text-white bg-white d-none d-md-block vh-100" style="width: 280px;">
                    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-black text-decoration-none">

                        <span class="fs-4">Admin Dashboard</span>
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="adminHome.php" class="nav-link text-black" aria-current="page">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#home"></use>
                                </svg>
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="adminLectures.php" class="nav-link active" aria-current="page">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#home"></use>
                                </svg>
                                Lectures
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-black">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#speedometer2"></use>
                                </svg>
                                Modules
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-black">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#table"></use>
                                </svg>
                                Assignments
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-black">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#grid"></use>
                                </svg>
                                Lecture Notes
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-black">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#people-circle"></use>
                                </svg>
                                Contact Admin
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown">
                        
                        <ul class="dropdown-menu dropdown-menu-dark text-black text-small shadow" aria-labelledby="dropdownUser1">
                            <li><a class="dropdown-item text-black" href="#">New project...</a></li>
                            <li><a class="dropdown-item text-black" href="#">Settings</a></li>
                            <li><a class="dropdown-item text-black" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>

                <div class=" vstack overflow-scroll">
                    <hr />
                    <label class=" fs-4">Schedule a Lecture</label>
                    <div class=" vstack">
                        <div class=" hstack gap-2">

                            <div class="vstack">
                                <label class=" form-label">Start Date</label>
                                <input id="start_date" class=" form-control" type="date" />

                            </div>
                            <div class="vstack">
                                <label class=" form-label">Start Time</label>
                                <input id="start_time" class=" form-control" type="time" />

                            </div>
                            <div class="vstack">
                                <label class=" form-label">End Time</label>
                                <input id="end_time" class=" form-control" type="time" />

                            </div>
                        </div>
                        <div class="vstack">
                            <label class=" form-label">Name</label>
                            <input id="name" class=" form-control" />
                            <label class=" form-label">Link</label>
                            <input id="link" class=" form-control" />
                            <label class=" form-label">Select Subject</label>
                            <select id="subject" class=" form-select">
                                <option value="select">Select</option>
                                <?php
                                $subject_rs = Database::search("SELECT * FROM `subject` ");
                                $subject_num = $subject_rs->num_rows;

                                for ($a = 0; $a < $subject_num; $a++) {
                                    $subject_data = $subject_rs->fetch_assoc();
                                ?>
                                    <option value="<?php echo ($subject_data["subject"]); ?>"><?php echo ($subject_data["subject"]); ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <button onclick="scheduleLecture();" class=" btn btn-success">Schedule</button>
                        </div>

                    </div>
                    <hr />
                    <label class=" fs-4">Update a Lecture</label>
                    <div class=" vstack">
                        <form class=" form-control" method="post">
                            <div class=" hstack gap-5">
                                <input id="update_id" name="meeting_id" type="text" class="form-control" placeholder="Enter Lecture ID" aria-label="Username" aria-describedby="basic-addon1">
                                <button class=" btn btn-primary" type="submit" name="submit2" value="Search">Search</button>
                            </div>

                        </form>

                        <?php
                        if (isset($_POST["submit2"])) {
                            $_SESSION["admin_u_id"] = $_POST["meeting_id"];
                        ?>
                            <?php
                            $lecture_rs = Database::search("SELECT * FROM `lecture`
                            INNER JOIN `lecturer_subjects` ON lecture.lecture_subjects_id = lecturer_subjects.id
                            WHERE `lecture`.`id`='" . $_POST["meeting_id"] . "' ");
                            for ($a = 0; $a < $lecture_rs->num_rows; $a++) {
                                $lecture_data = $lecture_rs->fetch_assoc();
                            ?>
                                <div class=" hstack gap-2">

                                    <div class="vstack">
                                        <label class=" form-label">Start Date</label>
                                        <input value="<?php echo ($lecture_data["start_date"]); ?>" id="update_start_date" class=" form-control" type="date" />

                                    </div>
                                    <div class="vstack">
                                        <label class=" form-label">Start Time</label>
                                        <input value="<?php echo ($lecture_data["start_time"]); ?>" id="update_start_time" class=" form-control" type="time" />

                                    </div>
                                    <div class="vstack">
                                        <label class=" form-label">End Time</label>
                                        <input value="<?php echo ($lecture_data["end_time"]); ?>" id="update_end_time" class=" form-control" type="time" />

                                    </div>
                                </div>
                                <div class="vstack">
                                    <label class=" form-label">Name</label>
                                    <input value="<?php echo ($lecture_data["name"]); ?>" id="update_name" class=" form-control" />
                                    <label class=" form-label">Link</label>
                                    <input value="<?php echo ($lecture_data["link"]); ?>" id="update_link" class=" form-control" />
                                    <label class=" form-label">Select Subject</label>
                                    <select id="update_subject" class=" form-select">
                                        <option value="select">Select</option>
                                        <?php
                                        $subject_rs = Database::search("SELECT * FROM `subject` WHERE `subject`='" . $lecture_data["subject_subject"] . "' ");
                                        $subject_num = $subject_rs->num_rows;

                                        for ($a = 0; $a < $subject_num; $a++) {
                                            $subject_data = $subject_rs->fetch_assoc();
                                        ?>
                                            <option value="<?php echo ($subject_data["subject"]); ?>"><?php echo ($subject_data["subject"]); ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <button onclick="updateLecture();" class=" btn btn-success">Schedule</button>
                                </div>
                            <?php
                            }

                            ?>


                        <?php
                        }
                        ?>



                    </div>
                    <hr />
                    <label class=" fs-4">Delete a Lecture</label>
                    <div class=" vstack">
                        <form class=" form-control" method="post">
                            <div class=" hstack gap-5">
                                <input id="delete_id" name="meeting_id" type="text" class="form-control" placeholder="Enter Lecture ID" aria-label="Username" aria-describedby="basic-addon1">
                                <button class=" btn btn-primary" type="submit" name="submit3" value="Search">Search</button>
                            </div>

                        </form>

                        <?php
                        if (isset($_POST["submit3"])) {
                            $_SESSION["admin_d_id"] = $_POST["meeting_id"];
                        ?>
                            <?php
                            $lecture_rs = Database::search("SELECT * FROM `lecture`
                            INNER JOIN `lecturer_subjects` ON lecture.lecture_subjects_id = lecturer_subjects.id
                            WHERE `lecture`.`id`='" . $_POST["meeting_id"] . "' ");
                            for ($a = 0; $a < $lecture_rs->num_rows; $a++) {
                                $lecture_data = $lecture_rs->fetch_assoc();
                            ?>
                                <div class=" hstack gap-2">

                                    <div class="vstack">
                                        <label class=" form-label">Start Date</label>
                                        <label class=" form-label"><?php echo ($lecture_data["start_date"]); ?></label>
                                    </div>
                                    <div class="vstack">
                                        <label class=" form-label">Start Time</label>
                                        <label class=" form-label"><?php echo ($lecture_data["start_time"]); ?></label>

                                    </div>
                                    <div class="vstack">
                                        <label class=" form-label">End Time</label>
                                        <label class=" form-label"><?php echo ($lecture_data["end_time"]); ?></label>
                                    </div>
                                </div>
                                <div class="vstack">
                                    <label class=" form-label">Name</label>
                                    <label class=" form-label"><?php echo ($lecture_data["name"]); ?></label>
                                    <label class=" form-label">Link</label>
                                    <label class=" form-label"><?php echo ($lecture_data["link"]); ?></label>
                                    <label class=" form-label">Select Subject</label>
                                    <select disabled class=" form-select">
                                        <?php
                                        $subject_rs = Database::search("SELECT * FROM `subject` WHERE `subject`='" . $lecture_data["subject_subject"] . "' ");
                                        $subject_num = $subject_rs->num_rows;

                                        for ($a = 0; $a < $subject_num; $a++) {
                                            $subject_data = $subject_rs->fetch_assoc();
                                        ?>
                                            <option value="<?php echo ($subject_data["subject"]); ?>"><?php echo ($subject_data["subject"]); ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <button onclick="deleteLecture();" class=" btn btn-danger">Delete</button>
                                </div>
                            <?php
                            }

                            ?>


                        <?php
                        }
                        ?>



                    </div>
                    <hr />
                    <label class=" fs-4">Search a Lecture</label>
                    <div class=" vstack">
                        <form class=" form-control" method="post">
                            <div class=" hstack gap-5">
                                <input name="meeting_id" type="text" class="form-control" placeholder="Enter Lecture ID" aria-label="Username" aria-describedby="basic-addon1">
                                <button class=" btn btn-primary" type="submit" name="submit4" value="Search">Search</button>
                            </div>

                        </form>

                        <?php
                        if (isset($_POST["submit4"])) {
                            if (!empty($_POST["meeting_id"])) {
                                $_SESSION["admin_s_id"] = $_POST["meeting_id"];
                        ?>
                                <?php
                                $lecture_rs = Database::search("SELECT * FROM `lecture`
                            INNER JOIN `lecturer_subjects` ON lecture.lecture_subjects_id = lecturer_subjects.id
                            WHERE `lecture`.`id`='" . $_POST["meeting_id"] . "' ");
                                for ($a = 0; $a < $lecture_rs->num_rows; $a++) {
                                    $lecture_data = $lecture_rs->fetch_assoc();
                                ?>
                                    <div class=" hstack gap-2">

                                        <div class="vstack">
                                            <label class=" form-label">Start Date</label>
                                            <label class=" form-label"><?php echo ($lecture_data["start_date"]); ?></label>
                                        </div>
                                        <div class="vstack">
                                            <label class=" form-label">Start Time</label>
                                            <label class=" form-label"><?php echo ($lecture_data["start_time"]); ?></label>

                                        </div>
                                        <div class="vstack">
                                            <label class=" form-label">End Time</label>
                                            <label class=" form-label"><?php echo ($lecture_data["end_time"]); ?></label>
                                        </div>
                                    </div>
                                    <div class="vstack">
                                        <label class=" form-label">Name</label>
                                        <label class=" form-label"><?php echo ($lecture_data["name"]); ?></label>
                                        <label class=" form-label">Link</label>
                                        <label class=" form-label"><?php echo ($lecture_data["link"]); ?></label>
                                        <label class=" form-label">Select Subject</label>
                                        <select disabled class=" form-select">
                                            <?php
                                            $subject_rs = Database::search("SELECT * FROM `subject` WHERE `subject`='" . $lecture_data["subject_subject"] . "' ");
                                            $subject_num = $subject_rs->num_rows;

                                            for ($a = 0; $a < $subject_num; $a++) {
                                                $subject_data = $subject_rs->fetch_assoc();
                                            ?>
                                                <option value="<?php echo ($subject_data["subject"]); ?>"><?php echo ($subject_data["subject"]); ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>

                                    </div>
                                <?php
                                }

                                ?>

                            <?php

                            } else {
                            ?>
                                <hr />
                                <?php
                                $lecture_rs2 = Database::search("SELECT * FROM `lecture`
                                INNER JOIN `lecturer_subjects` ON lecture.lecture_subjects_id = lecturer_subjects.id
                                ORDER BY `start_date` ASC
                                ");
                                for ($a1 = 0; $a1 < $lecture_rs2->num_rows; $a1++) {
                                    $lecture_data = $lecture_rs2->fetch_assoc();
                                ?>
                                    <div class=" hstack gap-2">

                                        <div class="vstack">
                                            <label class=" form-label">Start Date</label>
                                            <label class=" form-label"><?php echo ($lecture_data["start_date"]); ?></label>
                                        </div>
                                        <div class="vstack">
                                            <label class=" form-label">Start Time</label>
                                            <label class=" form-label"><?php echo ($lecture_data["start_time"]); ?></label>

                                        </div>
                                        <div class="vstack">
                                            <label class=" form-label">End Time</label>
                                            <label class=" form-label"><?php echo ($lecture_data["end_time"]); ?></label>
                                        </div>
                                    </div>
                                    <div class="vstack">
                                        <label class=" form-label">Name</label>
                                        <label class=" form-label"><?php echo ($lecture_data["name"]); ?></label>
                                        <label class=" form-label">Link</label>
                                        <label class=" form-label"><?php echo ($lecture_data["link"]); ?></label>
                                        <label class=" form-label">Select Subject</label>
                                        <select disabled class=" form-select">
                                            <?php
                                            $subject_rs = Database::search("SELECT * FROM `subject` WHERE `subject`='" . $lecture_data["subject_subject"] . "' ");
                                            $subject_num = $subject_rs->num_rows;

                                            for ($a = 0; $a < $subject_num; $a++) {
                                                $subject_data = $subject_rs->fetch_assoc();
                                            ?>
                                                <option value="<?php echo ($subject_data["subject"]); ?>"><?php echo ($subject_data["subject"]); ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>

                                    </div>
                                    <hr />
                                <?php
                                }

                                ?>


                        <?php
                            }
                        } else {
                        }
                        ?>



                    </div>
                </div>

            </div>


        </div>

        <script src="node_modules/aos/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>

        <script src="node_modules/atropos/atropos.min.js"></script>
        <script>
            const myAtropos = Atropos({
                el: '.my-atropos',
                activeOffset: 40,
                shadowScale: 1.05,
                stretchX: 100,
                stretchY: 1000,
                onEnter() {
                    console.log('Enter');
                },
                onLeave() {
                    console.log('Leave');
                },
                onRotate(x, y) {
                    console.log('Rotate', x, y);
                }
            });
        </script>


        <script src="script.js"></script>

        <script src="bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script>
            $(function() {
                //$('[data-toggle="popover"]').popover();
                $('[data-toggle="popover"]').popover({
                    trigger: "hover"
                });
            });
        </script>

    </body>

    </html>
<?php
} else {
    header("Location: adminSignin.php");
}
