<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <title>Shop</title>
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
 /* mở đầu phần thân shop mua hàng */
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
      font-size: 32px;
      margin-bottom: 10px;
    }
    .container {
      max-width: 1000px;
      margin: 0 auto;
      display: grid;
      place-items: center;
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
 /*--------shop-----------*/
 .section-title {
  padding: 80px 0px 20px 0px;
  font-size: 25px;
  color: #861900;
}
 .shop .container{
  max-width: 100%;
 }
 .row {
  display: flex;
}

.column {
  flex-basis: 25%;
  padding: 10px;
}
 .team{
  background-color: #c22700;
 }
 .team-items{
  padding: 20px;
  width: calc(100%/4);
  position: relative;
 }
 .team-items img {
  width: 100%;
  border-radius: 5px;
  transition: all 0.5s ease;
 }
 .team-items:hover .team-items-text{
  background-color:#8d1c00;
  transform: translateY(-50px);
 }
 
 .team-items-text {
  position: absolute;
  padding: 15px 0;
  right: 30px;
  left: 30px;
  bottom: 0;
  background-color: rgb(255, 255, 255);
  text-align: center;
  border-radius: 8px;
  transform: translateY(50%);
  transition: all 0.5s ease;
 }
 .team-items-text h2 {
color: #ffffff;

 }
 .team-items-text span {
color: #fff;
 }
 /*Chân trang*/
 footer {
  background-color: #fff;
  padding-top: 100px;
  padding-bottom: 20px;
  text-align: center;
  font-size: 14px;
  color: #3f0f00;
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
  font-size: 16px; /* Điều chỉnh kích thước phù hợp với màn hình điện thoại */
  margin-bottom: 10px
}
}
@media screen and (max-width: 575px) {
  .shop .container {
  max-width: 100%;
}
.row {
  display: flex;
  flex-wrap: wrap;
}
.column {
  flex-basis: 50%;
  padding: 5px;
}
.team {
  background-color: #c22700;
}
.team-items {
  margin-bottom: 25px; 
  padding: 10px;
  width: calc(100% / 2);
  position: relative;
}
.team-items img {
  width: 100%;
  border-radius: 2px;
  transition: all 0.5s ease;
}
.team-items:hover .team-items-text {
  background-color: #a12101;
  transform: translateY(-50px);
}
.team-items-text {
  padding-bottom: 15px;
  position: absolute;
  padding: 5px;
  right: 15px;
  left: 15px;
  bottom: 0;
  background-color: rgb(214, 87, 2);
  text-align: center;
  border-radius: 5px;
  transform: translateY(50%);
  transition: all 0.5s ease;
}
.team-items-text h2 {
  font-size: 14px;
  color: #eee6e2;
}
.team-items-text span {
  font-size: 13px;
  color: #000;
}
.section-title {
  padding: 40px 0px 10px 0px;
  font-size: 15px;
  color: #c22700;
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
            <a href="index.php">
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
  <div class="banner">
    <img src="image/banner giới thiệu.jpg" alt="Banner">
    <div class="banner-content">
      <h1>Chơi hết mình là một cách tuyệt vời để làm dịu tâm hồn, giải tỏa stress và truyền động lực tích cực cho cuộc sống.</h1>
    </div>
  </div>
<!----sản phẩm-->
<section class="shop">
  <div class="container">
    <div class="row">
      <div class="section-title">
        <h2 data-title="tieude">TRÁI CÂY VÀ ĐỒ UỐNG</h2>
      </div>
    </div>
    <div class="row">
    <div class="team-items" id="1">
    <a href="products.php?product_id=1">
        <img src="image/trái bơ.png" alt="Bơ Gia Lai">
        <div class="team-items-text">
            <h2>Bơ Gia Lai</h2>
            <span>Xem thêm</span>
        </div>
    </a>
</div>


      <div class="team-items" >
        <img src="image/sầu riêng.png" alt="Sầu riêng">
        <div class="team-items-text">
          <h2>Sầu riêng Gia Lai</h2>
          <span >Xem thêm</span>
        </div>
      </div>
      <div class="team-items">
        <img src="image/mật ong rừng.png" alt="Mật ong">
        <div class="team-items-text">
          <h2>Mật ong rừng Gia Lai</h2>
          <span>Xem thêm</span>
        </div>
      </div>
      <div class="team-items" >
        <img src="image/cà phê.png" alt="cà phê">
        <div class="team-items-text">
          <h2>Cà phê Gia Lai</h2>
          <span>Xem thêm</span>
        </div>
      </div>
    </div>
  </div>
  <section class="shop">
    <div class="container">
      <div class="row">
        <div class="section-title">
          <h2 data-title="Monan">MÓN ĂN VÀ ĐỒ KHÔ</h2>
        </div>
      </div>
      <div class="row">
        <div class="team-items">
          <img src="image/hạt macca.png" alt="hatj macca">
          <div class="team-items-text">
            <h2>Hạt Macca Gia Lai</h2>
            <span>Xem thêm</span>
          </div>
        </div>
        <div class="team-items">
          <img src="image/hạt điều.png" alt="hạt điều">
          <div class="team-items-text">
            <h2>Hạt Điều Gia Lai</h2>
            <span>Xem thêm</span>
          </div>
        </div>
        <div class="team-items">
          <img src="image/tôm khô biển hồ.png" alt="Tôm khô">
          <div class="team-items-text">
            <h2>Tôm khô Biển Hồ</h2>
            <span>Xem thêm</span>
          </div>
        </div>
        <div class="team-items">
          <img src="image/Bò nắng.png" alt="bò một nắng">
          <div class="team-items-text">
            <h2>Bò Một Nắng</h2>
            <span>Xem thêm</span>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <p>Copy@Kim Anh "Gia Lai - Hòa mình vào cảnh quan thiên nhiên tuyệt đẹp và khám phá những bí mật văn hóa độc đáo, để tạo nên những kỷ niệm đáng nhớ trong lòng."</p>
    </footer>
  

</section>
</body>
</html>
