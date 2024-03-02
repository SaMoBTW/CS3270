    <div class="row">
        <?php foreach ($projects as $project): ?>
                <div class="col-md-6">
                    <!-- Card -->
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col-auto d-none d-lg-block">
                            <!-- You may need to adjust the path for the image source -->
                            <img src="<?php echo $project['image'] ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="col p-4 d-flex flex-column position-static">
                            <h3 class="mb-0 gap card-title"><?php echo $project['title'] ?></h3>
                            <p class="mb-1 text-muted gap left-margin"><?php echo $project['languages'] ?></p>
                            <h5 class="card-text mb-auto gap left-margin"><?php echo $project['description'] ?></h5>
                            <a href="<?php echo $project['link'] ?>" target="_blank" class="stretched-link btn-primary gap left-margin purple-text">Github Repo</a>
                        </div>
                    </div>
                </div>
        <?php endforeach; ?>
    </div>