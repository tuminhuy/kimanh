<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <title>đăng ký</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    
    <script>
      $(document).ready(function() {
        $('#toggle').click(function() {
          $('nav').slideToggle();
        });
    
        var nav = document.querySelector('nav');
        var sections = document.querySelectorAll('.content');
    
        window.addEventListener('scroll', function() {
          var scrollPosition = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
    
          if (scrollPosition > 50) {
            nav.classList.add('hidden');
          } else {
            nav.classList.remove('hidden');
          }
    
          sections.forEach(function(section) {
            var sectionTop = section.offsetTop;
            var sectionHeight = section.offsetHeight;
    
            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
              var targetLink = document.querySelector('a[href="#' + section.id + '"]');
              targetLink.classList.add('active');
            } else {
              var targetLink = document.querySelector('a[href="#' + section.id + '"]');
              targetLink.classList.remove('active');
            }
          });
        });
      });
    /*ẩn hiện mật khẩu*/
    $(document).ready(function(){
    $('#eye').click(function(){
        $(this).toggleClass('open');
        $(this).children('i').toggleClass('fa-eye-slash fa-eye');
        if($(this).hasClass('open')){
            $(this).prev().attr('type', 'text');
        }else{
            $(this).prev().attr('type', 'password');
        }
    });
});
    </script>
    
    <style>
        /*----------from------------*/

        /*------------đăng ký---------*/
    
#wrapper{
    min-height: 30vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
#form-login{
    max-width: 400px;
    background: rgba(197, 75, 4, 0.8);
    flex-grow: 1;
    padding: 30px 30px 40px;
    box-shadow: 0px 0px 17px 2px rgba(255, 255, 255, 0.8);
}
.form-heading{
    font-size: 25px;
    color: #f5f5f5;
    text-align: center;
    margin-bottom: 30px;
}
.form-group{
    border-bottom: 1px solid #fff;
    margin-top: 15px;
    margin-bottom: 20px;
    display: flex;
}
.form-group i{
    color: #fff;
    font-size: 14px;
    padding-top: 5px;
    padding-right: 10px;
}
.form-input{
    background: transparent;
    border: 0;
    outline: 0;
    color: #f5f5f5;
    flex-grow: 1;
}
.form-input::placeholder{
    color: #f5f5f5;
}
#eye i{
    padding-right: 0;
    cursor: pointer;
}

.form-submit{
    background: transparent;
    border: 1px solid #f5f5f5;
    color: #fff;
    width: 100%;
    text-transform: uppercase;
    padding: 6px 10px;
    transition: 0.25s ease-in-out;
    margin-top: 30px;
}
.form-submit:hover{
    border: 1px solid #54a0ff;
}
/*bổ sung danh mục*/
#list-account {
      position: relative;
      display: inline-block;
      margin-right: 20px;
    }

    #list-account::before {
      content: "";
      position: absolute;
      top: 0;
      height: 70px;
      width: 100px;
    }

    #list-account:hover .dropdown-content {
      display: block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 150px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
      margin-top: 10px;
      padding: 10px;
      text-align: center;
    }

    .dropdown span {
      color: #000;
    }

    .dropdown-item {
      padding: 10px 12px;
      display: block;
      text-align: left;
      text-decoration: none;
      color: #000;
    }

    .dropdown-item:hover {
      background-color: #ff0000;
      color: #fff;
    }
        /*--------phần đầu----------------*/
      * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        font-family: "Roboto", sans-serif;
      }
      ul {
        list-style-type: none;
      }
      
      #main-menu {
        display: flex;
        }
      nav #main-menu li a {
        color: #0a0a0a;
        text-decoration: none;
        display: block;
        padding: 8px 15px;
      }
      nav #main-menu li:hover a {
        color: #c22700; /* Màu chữ cam đậm */
        transition: all 0.3s;
      }
      #toggle {
        display: none;
        background: #fefeff;
        color: #0a0909;
        text-align: right;
        padding: 10px;
        font-size: 20px;
        cursor: pointer;
      }
      #main-menu li.logo {
        display: flex;
        align-items: center;
        margin-right: 400px;
      }
      #main-menu li.logo img {
        width: 100px;
        height: 60px;
        margin-right: 5px;
      }
      .hidden {
        display: none;
      }
      nav {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background-color: #f9fbff;
        z-index: 999;
        transition: top 0.3s ease;
      }
      #main-menu {
        display: flex;
        align-items: center;
        list-style-type: none;
        margin: 0;
        padding: 10px;
        font-weight: bold;
        text-transform: uppercase;
      }
      #main-menu li a {
        color: #fff;
        text-decoration: none;
        padding: 8px 15px;
      }
      .hidden {
        top: -100px;
      }
 /* mở đầu phần thân giới thiệu */

 
/*--------- bản điện thoại----------------*/
@media screen and (max-width: 575px) {
  #main-menu {
  flex-direction: column;
  text-align: center;  
    }
    #toggle {
    display: block;
    }
    nav {
    display: none;
    }
    #main-menu li.logo img {
    display: none;
    }
}

    </style>
 </head>
 <body>
  <div id="wrapper">
    <div id="header">
      <div id="toggle">
        <i class="fas fa-bars"></i>
      </div>
      <nav>
        <ul id="main-menu">
          <li class="logo">
            <a href="index.php">
              <img src="image/logoGL.png" alt="Logo">
            </a>
          </li>
          <li><a href="index.php">TRANG CHỦ</a></li>
          <li><a href="gioithieu.php">GIỚI THIỆU</a></li>
          <li><a href="shop.php">THỰC PHẨM</a></li>
          <li><a href="Lienhe.php">LIÊN HỆ</a></li>
          <div id="list-account">
  <span>Tài khoản</span>
  <div class="dropdown-content">
    <a href="dangnhap.php" class="dropdown-item">Đăng nhập</a>
    <a href="dangky.php" class="dropdown-item">Đăng xuất</a>
  </div>
</div>
        </ul>
      </nav>
    </div>
  </div>
  <!-- kết thúc phần đầu menu-->
  <div id="wrapper">
      <form id="form-login" action="db/reg.php" method="post">
        <h1 class="form-heading">Form ký</h1>
        <div class="form-group">
          <i class="far fa-user"></i>
          <input type="text" class="form-input" name="username" placeholder="Tên đăng nhập">
        </div>
        <div class="form-group">
          <i class="fas fa-envelope"></i>
          <input type="email" class="form-input" name="email" placeholder="Email">
        </div>
        <div class="form-group">
          <i class="fas fa-user"></i>
          <input type="text" class="form-input" name="fullname" placeholder="Họ và tên">
        </div>
        <div class="form-group">
          <i class="fas fa-map-marker-alt"></i>
          <input type="text" class="form-input" name="address" placeholder="Địa chỉ">
        </div>
        <div class="form-group">
          <i class="fas fa-key"></i>
          <input type="password" class="form-input" name="Password" placeholder="Mật khẩu">
          <div id="eye">
            <i class="far fa-eye"></i>
          </div>
        </div>
        <input type="submit" name="btn-reg" value="Đăng ký" class="form-submit">
      </form>
    </div>
</body>
</html>
