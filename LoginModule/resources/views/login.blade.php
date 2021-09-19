<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display">Laravel Login Application</h1><br/>
	<div>
      <form method="post" action="{{ url('/success') }}"> 
          {{ csrf_field() }}
          <div class="form-group">    
              <label for="email">Email Id:</label>
              <input type="email" class="form-control" name="email"/> 
          </div>
          <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" class="form-control" name="password"/>
          </div>
          <div class="form-group">              
            <button type="submit" class="btn btn-primary-outline">Login</button>
          <div>
      </form>
  </div>
</div>
</div>
