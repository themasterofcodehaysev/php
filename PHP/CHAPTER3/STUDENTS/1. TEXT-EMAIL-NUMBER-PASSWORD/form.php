<form action="process.php" method="get" >
    <div class="row mb-3 mt-3">
        <div class="col">
            <input type="text" class="form-control" name="name" value="" placeholder="Enter Name" >
        </div>
        <div class="col">
            <input type="number" class="form-control" name="number" value="" placeholder="Enter number">
        </div>
    </div>
    <div class="row mb-3 mt-3">
        <div class="col">
            <input type="email" class="form-control" name="email" value="" placeholder="Enter email">
        </div>
        <div class="col">
            <input type="password" class="form-control" name="password" value="" placeholder="Enter password" >
        </div>
    </div>
    <div class="mb-3">
        <textarea  placeholder="Enter message" name="text" value="" class="form-control"></textarea>
    </div>
    <div class="d-grid">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>