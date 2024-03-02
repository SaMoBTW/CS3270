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
    <div class="row">

        <div class="col-md-6">
            <!-- First card -->
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col-auto d-none d-lg-block">
                    <img src="images/tindogss.png" class="card-img-top" alt="...">
                </div>
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0 gap card-title">Tindog</h3>
                    <p class="mb-1 text-muted gap left-margin">HTML, CSS, Bootstrap</p>
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
                    <img src="images/banking.png" class="card-img-top" alt="...">
                </div>
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0 gap card-title">Banking Assignment</h3>
                    <p class="mb-1 text-muted gap left-margin">HTML, CSS, Bootstrap, PHP</p>
                    <h5 class="card-text mb-auto gap left-margin">A simple three page banking app where you can transfer money between your personal accounts</h5>
                    <a href="https://github.com/SaMoBTW/Banking-App" target="_blank" class="stretched-link btn-primary gap left-margin purple-text">Github Repo</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <!-- Fourth card -->
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col-auto d-none d-lg-block">
                    <img src="images/dolphins.jpg" class="card-img-top" alt="...">
                </div>
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0 gap card-title">Dolphins</h3>
                    <p class="mb-1 text-muted gap left-margin">HTML, CSS, Bootstrap, PHP, Water, Chum</p>
                    <h5 class="card-text mb-auto gap left-margin">Everyone's Favorite fake Mammal</h5>
                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="stretched-link btn-primary gap left-margin purple-text">Click me!</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <!-- Fifth card -->
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col-auto d-none d-lg-block">
                    <img src="images/hippos.jpg" class="card-img-top" alt="...">
                </div>
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0 gap card-title">Hippos</h3>
                    <p class="mb-1 text-muted gap left-margin">HTML, CSS, Swamp, Django, Python</p>
                    <h5 class="card-text mb-auto gap left-margin">Madagascar's finest</h5>
                    <a href="https://www.youtube.com/watch?v=GeyECB-DEGk" target="_blank" class="stretched-link btn-primary gap left-margin purple-text">The greatest music genre</a>
                </div>
            </div>
        </div>
    </div>
    <!--Container Main end-->
    
    <!-- Navbar Specific Scripts -->
    <?php include_once 'src/navbar.scripts.view.php'; ?>
</body>

</html>