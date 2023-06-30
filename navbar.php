<nav class="navbar navbar-expand-lg nav-bar-bg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/logo-coder.png" alt="logo" width="100" height="30">
            </a>
            <button class="btn text-white nav-siderbar-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                <i class="bi bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="aboutus.php">ABOUT US</a>
                    </li>
                    <li class="nav-item dropdown text-white">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            COURSES
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="c.php">C</a></li>
                            <li><a class="dropdown-item" href="cpp.php">C++</a></li>
                            <li><a class="dropdown-item" href="java.php">Java</a></li>
                            <li><a class="dropdown-item" href="html.php">HTML and CSS</a></li>
                            <li><a class="dropdown-item" href="javascript.php">Javascript</a></li>
                            <li><a class="dropdown-item" href="python.php">Python</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="offcanvas offcanvas-start nav-bar-bg" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
        <div class="offcanvas-header">
            <a class="navbar-brand" href="#">
                <img src="images/logo-coder.png" alt="logo" width="100" height="30">
            </a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul>
                <li><a class="text-decoration-none text-white" href="index.php">HOME</a></li>
                <li><a class="text-decoration-none text-white" href="aboutus.php">ABOUT US</a></li>
                <div class="dropdown">
                    <button class="btn text-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        COURSES
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="c.php">C</a></li>
                        <li><a class="dropdown-item" href="cpp.php">C++</a></li>
                        <li><a class="dropdown-item" href="java.php">Java</a></li>
                        <li><a class="dropdown-item" href="html.php">HTML and CSS</a></li>
                        <li><a class="dropdown-item" href="javascript">Javascript</a></li>
                        <li><a class="dropdown-item" href="python.php">Python</a></li>
                        <!-- <li><a class="dropdown-item" href="python.php">Python</a></li> -->
                    </ul>
                </div>
            </ul>
        </div>
    </div>