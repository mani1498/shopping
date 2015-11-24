         <div class="container">
            
            <div class="well" id="main">
                <center><h1>Welcome</h1></center>
                <div class="row">
                <div class="col-md-4 col-md-offset-4">
                <form  role="form" method="post">
                    <?php if(isset($message)) echo "<div class='alert alert-danger'>$message</div>" ?>
                    <div class="form-group">
                        <label for="name">Email </label>
                        <input type="text"  class="form-control" id="username" placeholder="Full Name" name="email" />
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group">
                        <label for="email">Password</label>
                        <input type="password"  class="form-control" id="password" placeholder="Email" name="password" />
                        <span class="help-block"></span>
                    </div>
                    <input type="submit" value="Enter" class="btn btn-primary" />
                </form>
                </div>
               </div>
                
            </div>
            
            
        </div>
   