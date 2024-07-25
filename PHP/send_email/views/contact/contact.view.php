<form action="controllers/email/email.controller.php" method="post">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="content">Text:</label>
    <textarea name="content" id="content" class="form-control" rows="10"></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>