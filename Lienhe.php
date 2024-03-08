<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <title>Liên hệ</title>
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
    </script>
    <style>
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
  /* Bổ sung thêm dang mục */

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
 /* mở đầu phần thân giới thiệu */
  /* mở đầu phần thân giới thiệu */
  .banner {
      position: relative;
      height: 400px;
    }  
    .banner img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .banner-content {
      width: 80%;
      position: absolute;
      top: 70%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      color: #fff;
    }
    .banner-content h1 {
      font-size: 30px;
      margin-bottom: 10px;
    }
    /*tiếp*/
.contact {
  display: flex;
  justify-content: center;
  margin: 20px;
}

.form-column, .support-column {
  width: 50%;
  padding: 20px;
}
.support-column{
    color: #020202;
    text-align:justify;
}
form {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 10px;
}

input, textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
}

button {
  background-color: #FF5500;
  color: #FFFFFF;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  font-family: "Arial", sans-serif;
  font-size: 16px;
  cursor: pointer;
}

ul {
  list-style-type: none;
  padding: 0;
}
    /*Chân trang*/
footer {
  background-color: #f2f2f2;
  padding: 20px;
  text-align: center;
  font-size: 14px;
  color: #4b1601;
}

 
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
@media screen and (max-width: 575px) {
    .banner {
  position: relative;
  height: 150px;
}  

.banner img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.banner-content {
  width: 80%;
  position: absolute;
  top: 70%;
  left: 50%;
  transform: translate(-50%, -70%); /* Điều chỉnh giá trị transform để căn chỉnh văn bản trên màn hình điện thoại */
  text-align: center;
  color: #fff;
}

.banner-content h1 {
  font-size: 18px; /* Điều chỉnh kích thước phù hợp với màn hình điện thoại */
  margin-bottom: 10px
}
}
@media screen and (max-width: 575px) {
    header {
  text-align: center;
  padding: 10px;
}

.contact {
    width: 100%;
  display: flex;
  flex-direction: column;
  margin: 10px;
}

.form-column, .support-column {
    width: 100%;
  padding: 10mm;
}
.support-column{
    color: #c22700;
    text-align: left;
}
form {
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input, textarea {
  width: 100%;
  padding: 5px;
  margin-bottom: 10px;
}

button {
  background-color: #FF5500;
  color: #FFFFFF;
  padding: 5px 10px;
  border: none;
  border-radius: 5px;
  font-family: "Arial", sans-serif;
  font-size: 14px;
  cursor: pointer;
}

ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}
.form-column h2{
    color: #c22700;
    text-align: center;
}
footer {
  background-color: #f2f2f2;
  padding: 10px;
  text-align: center;
  font-size: 12px;
  color: #888;
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

  <!--liên hệ-->
  <div class="banner">
    <img src="image/banner giới thiệu.jpg" alt="Banner">
    <div class="banner-content">
      <h1>Hành trình gửi gắm thông điệp, trao đổi yêu thương và xây dựng cầu nối với những người quan trọng trong cuộc sống</h1>
    </div>
  </div>

  <section class="contact">
    <div class="form-column">

      <h2>Liên Hệ hỗ trợ</h2><br>
      <form action="db/process_contact.php" method="post">
        <label for="name">Họ và tên:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Nội dung:</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit" name="submit">Gửi</button>
      </form>
    </div>

    <div class="support-column">
      <h2>Giải đáp thắc mắc</h2><br>
      <ul>
        <li><strong>Điện thoại: </strong>0394495135</li><br>
        <li><strong>Email:</strong> huathikimanh17c1tkw1@gmail.com</li><br>
        <li><strong>Địa chỉ:</strong> Mang Yang - Gia Lai </li><br>
      </ul>
    </div>
  </section>

    <footer>
      <p>Copy@Kim Anh "Gia Lai - Hòa mình vào cảnh quan thiên nhiên tuyệt đẹp và khám phá những bí mật văn hóa độc đáo, để tạo nên những kỷ niệm đáng nhớ trong lòng."</p>
    </footer>

</body>
</html>
