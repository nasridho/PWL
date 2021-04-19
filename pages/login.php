<div class="row">
  <div class="col-6">
    <h2>Login</h2>
	<br />
      <form action="controllers/memberController.php" class="d-flex flex-column" method="POST">
        <div>
		
		<label for="floatingInput">Username</label>
          <input
            type="text"
            class="form-control "
            id="floatingInput"
            name="username"
            required
          />
          
        </div>
     <div>
	 <label for="floatingPassword">Password</label>
          <input
            type="password"
            class="form-control"
            id="floatingPassword"
            name="password"
            required
          />
          
        </div>
        <input type="submit" value="Login" name="login" class="btn btn-success mt-2" />
      </form>
  </div>
 
</div>

