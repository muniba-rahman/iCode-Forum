<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="signupModalLabel" style="color: #000; font-weight: bold;">Sign Up Here</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form action='/forum/components/_handlesignup.php' method = 'POST'>
      <div class="mb-3">
        <label for="name" class="form-label" style="color: #000;">Username:</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label" style="color: #000;">Email</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label" style="color: #000;">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <div class="mb-3">
        <label for="cpass" class="form-label" style="color: #000;">Confirm Password</label>
        <input type="password" class="form-control" id="cpass" name="cpass" required>
      </div>
      <button type="submit" class="btn btn-primary" style="background-color: #00C4FF; color: #fff;">SINGUP</button>
    </form>

      </div>
    </div>
  </div>
</div>