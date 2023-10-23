<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="loginModalLabel" style="color: #000; font-weight: bold;">Login Here</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form action='/forum/components/_handlelogin.php' method='POST'>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label" style="color: #000;">Email</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label" style="color: #000;">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <button type="submit" class="btn btn-primary" style="background-color: #00C4FF; color: #000;">LOGIN</button>
    </form>

    </div>
    </div>
  </div>
</div>