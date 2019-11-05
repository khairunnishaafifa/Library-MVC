<?php require APPROOT . '/views/layouts/top.php' ?>   
<?php require APPROOT . '/views/layouts/navbar.php' ?>   

    <div class="jumbotron" id="create">
        <h2 class="display-5">Create Book</h2>
        <br />
        <form method="POST" action="<?php echo URLROOT; ?>home/new">
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" placeholder="Enter title" name="title" value="<?php echo $data['title']; ?>">
            </div>
            <div class="form-group">
                <label>Author</label>
                <input type="text" class="form-control" placeholder="Enter author name" name="author" value="<?php echo $data['author']; ?>">
            </div>
            <div class="form-group">
                <label>ISBN</label>
                <input type="text" class="form-control" placeholder="Enter ISBN" name="ISBN" value="<?php echo $data['ISBN']; ?>">
            </div>
            <div class="form-group">
                <label>Published Date</label>
                <input type="date" class="form-control" placeholder="Enter published date" name="published" value="<?php echo $data['published']; ?>">
            </div>
            <br />
            <button type="submit" class="btn btn-info btn-block">Save</button>
        </form>
    </div>

<?php require APPROOT . '/views/layouts/bottom.php' ?>