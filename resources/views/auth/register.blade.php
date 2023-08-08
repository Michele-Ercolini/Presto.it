<x-layout>
    <div class="class wrapper d-flex justify-content-center align-items-center">
        <form action="">
            <h1>Login</h1>
            <div class="input-box">
                <input type=" text " placeholder="username" name="userName" required>
            </div>
            <box-icon type='solid' name='user'></box-icon>
            <div class="input-box">
                <input type="email" name="email" placeholder="userEmail" id="userEmail" required>
            </div>
            <div class="input-box">
                <input type=" passowrd" name="password" placeholder="userPassword" id="userPassword" required>
            </div>
            <box-icon name='lock-alt' type='solid' ></box-icon>
            <div class="input-box">
                <input type=" passowrd_confirmation" name="password_confirmation" placeholder="" id="user_confirmation" required>
            </div>
            <div class="remember-forgot">
              <label>  <input type="checkbox">Rememeber me</label>
              <button type="submit" class="btn">Login</button>
            </div>
            <div class="register-link">
                <p>Don't have an account<a href="">Register</a></p>
            </div>
            
        </form>
    </div>
    
    
    
    
    
    
    
    
    
    </x-layout>