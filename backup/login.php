<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Daftar</title>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
<!-- partial:index.partial.html -->
<div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Daftar</a></li>
        <li class="tab"><a href="#login">Masuk</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Daftar Untuk Memulai</h1>
          
          <form action="/" method="post">
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Nama Depan<span class="req">*</span>
              </label>
              <input type="text" name="first_name" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Nama Belakang<span class="req">*</span>
              </label>
              <input type="text" name="last_name" required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Alamat Email<span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password_1" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Ulangi Password<span class="req">*</span>
            </label>
            <input type="password" name="password_2" required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block" name="register"/>Selesai</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Selamat Datang!</h1>
          
          <form action="/" method="post">
          
            <div class="field-wrap">
            <label>
              Alamat Email<span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Lupa Password?</a></p>
          
          <button class="button button-block" name="login_user"/>Masuk</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
