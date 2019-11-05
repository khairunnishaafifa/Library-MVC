<?php require APPROOT . '/views/layouts/top.php' ?>   
<?php require APPROOT . '/views/layouts/navbar.php' ?>   

    <div class="card text-center">
        <?php if (mysqli_num_rows($data) < 0) { ?>
        <div class="jumbotron" id="index">
            <br /><br /><br /><br />
            <h1 class="display-4">Sorry :(</h1>
            <p class="lead">There is no book here. Please add a new one.</p>
            <hr class="my-4">
            <a class="btn btn-primary btn-lg" href="<?php echo URLROOT; ?>home/new" role="button">New Book</a>
            <br /><br /><br /><br />
        </div>
        <?php } else { ?>

        <div class="card-columns">
            <?php while ($row = mysqli_fetch_array($data)) { ?>
            <div class="card">
            <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header"><?php echo $row['title'] ?></div>
            <div class="caInford-body">
                <br />
                <h5 class="card-title"><?php echo $row['ISBN'] ?></h5>
                <p class="card-text">
                    Author: <?php echo $row['author'] ?><br />
                    Published Date: <?php echo $row['published'] ?><br />
                </p>
                <br />
            </div>
            <a href="<?php echo URLROOT; ?>home/update/<?php echo $row['id']; ?>" class="btn btn-info" role="button" aria-pressed="true"><i class="fas fa-pen"></i></a>
            <a href="<?php echo URLROOT; ?>home/delete/<?php echo $row['id']; ?>" class="btn btn-info" role="button" aria-pressed="true"><i class="fas fa-trash-alt"></i></a>
            </div>
            </div>
            <?php } ?>
            <?php } ?>
        </div>
        
        <div class="card-footer text-muted"></div>
    </div>

<?php require APPROOT . '/views/layouts/bottom.php' ?>   