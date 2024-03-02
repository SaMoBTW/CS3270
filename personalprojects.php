<?php
// Variables and arrays | Data
include_once 'src/data.view.php';

// Head section
include_once 'src/head.view.php';
?>


<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <h1 id="course-title">Personal Projects</h1>
        <div class="header_img">
            <img src="images/duckimg.png" alt="">
        </div>
    </header>
    
    <!-- navigation bar  -->
    <?php include_once 'src/navbar.view.php'; ?>
    <!--Container Main start-->
    <main>
    <div class="row">

        <div class="col-md-6">
            <!-- First card -->
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col-auto d-none d-lg-block">
                    <img src="images/tindogss.png" class="card-img-top" alt="...">
                </div>
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0 gap card-title">Tindog</h3>
                    <p class="mb-1 text-muted gap left-margin">HTML, CSS</p>
                    <h5 class="card-text mb-auto gap left-margin">Just a simple single webpage made using Bootstrap.</h5>
                    <a href="https://github.com/SaMoBTW/tindog" target="_blank" class="stretched-link btn-primary gap left-margin purple-text">Github Repo</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <!-- Second card -->
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col-auto d-none d-lg-block">
                    <img src="images/simon.png" class="card-img-top" alt="...">
                </div>
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0 gap card-title">Simon</h3>
                    <p class="mb-1 text-muted gap left-margin">HTML, CSS, JavaScript</p>
                    <h5 class="card-text mb-auto gap left-margin">A memory game based on the children's toy "Simon"</h5>
                    <a href="https://github.com/SaMoBTW/Simon-Game" target="_blank" class="stretched-link btn-primary gap left-margin purple-text">Github Repo</a>
                </div>
            </div>
        </div>

                <div class="col-md-6">
            <!-- Third card -->
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col-auto d-none d-lg-block">
                    <img src="images/simon.png" class="card-img-top" alt="...">
                </div>
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0 gap card-title">Simon</h3>
                    <p class="mb-1 text-muted gap left-margin">HTML, CSS, JavaScript</p>
                    <h5 class="card-text mb-auto gap left-margin">Another project description.</h5>
                    <a href="https://github.com/SaMoBTW/Simon-Game" target="_blank" class="stretched-link btn-primary gap left-margin purple-text">Github Repo</a>
                </div>
            </div>
        </div>

                <div class="col-md-6">
            <!-- fourth card -->
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col-auto d-none d-lg-block">
                    <img src="images/simon.png" class="card-img-top" alt="...">
                </div>
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0 gap card-title">Simon</h3>
                    <p class="mb-1 text-muted gap left-margin">HTML, CSS, JavaScript</p>
                    <h5 class="card-text mb-auto gap left-margin">Another project description.</h5>
                    <a href="https://github.com/SaMoBTW/Simon-Game" target="_blank" class="stretched-link btn-primary gap left-margin purple-text">Github Repo</a>
                </div>
            </div>
        </div>

                <div class="col-md-6">
            <!-- Fifth card -->
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col-auto d-none d-lg-block">
                    <img src="images/simon.png" class="card-img-top" alt="...">
                </div>
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0 gap card-title">Simon</h3>
                    <p class="mb-1 text-muted gap left-margin">HTML, CSS, JavaScript</p>
                    <h5 class="card-text mb-auto gap left-margin">Another project description.</h5>
                    <a href="https://github.com/SaMoBTW/Simon-Game" target="_blank" class="stretched-link btn-primary gap left-margin purple-text">Github Repo</a>
                </div>
            </div>
        </div>

    </div>
    </main>
    <!--Container Main end-->
    
    <!-- Navbar Specific Scripts -->
    <?php include_once 'src/navbar.scripts.view.php'; ?>
</body>

</html>