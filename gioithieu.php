<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <title>Giới Thiệu</title>
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
      font-size: 48px;
      margin-bottom: 10px;
    }
    .container {
      max-width: 1000px;
      margin: 0 auto;
      padding: 40px;
      display: grid;
      place-items: center;
    }
    .container img{
      max-width: 100%;
      max-height: 100%;     
    }
    section {
      margin-bottom: 40px;
    }
    section p {
      font-size: 18px;
      line-height: 1.5;
      text-align: justify;
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
  font-size: 24px; /* Điều chỉnh kích thước phù hợp với màn hình điện thoại */
  margin-bottom: 10px
}

.container {
  max-width: 100%;
  margin: 0 auto;
  padding: 20px; /* Điều chỉnh giá trị padding phù hợp với màn hình điện thoại */
  display: grid;
  place-items: center;
}

.container img {
  max-width: 100%;
  max-height: 100%;     
}

section {
  margin-bottom: 20px; /* Điều chỉnh giá trị margin-bottom phù hợp với màn hình điện thoại */
}

section p {
  font-size: 14px; /* Điều chỉnh kích thước phù hợp với màn hình điện thoại */
  line-height: 1.5;
  text-align: justify;
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
  <div class="banner">
    <img src="image/banner giới thiệu.jpg" alt="Banner">
    <div class="banner-content">
      <h1>Khám phá Gia Lai <br> Hòn ngọc đất Tây Nguyên</h1>
    </div>
  </div>
  
  <div class="container">
    <section>
      <p>
        Chào mừng đến với Gia Lai - tỉnh đẹp như một hòn ngọc nằm tại trung tâm vùng Tây Nguyên của Việt Nam. Với vẻ đẹp tự nhiên tươi đẹp, văn hóa độc đáo và những điểm đến hấp dẫn, Gia Lai là một điểm đến không thể bỏ qua đối với những ai muốn khám phá và trải nghiệm sự phong phú của đất nước.
      </p>
      <p>Gia Lai là một biểu tượng của vùng Tây Nguyên, nơi thiên nhiên vô cùng hùng vĩ và đa dạng. Với những rừng núi xanh ngát, thác nước đổ dùng, hồ nước trong xanh và những cánh đồng bạt ngàn, Gia Lai mang đến cho du khách một cảm giác tương tác mạnh mẽ với thiên nhiên. <br>
        Hãy khám phá vườn quốc gia Yok Đôn - một thiên đường thiên nhiên với đa dạng sinh học phong phú, hoặc đặt chân đến thác nước Dray Nur và Dray Sap nổi tiếng để được đắm mình trong vẻ đẹp tuyệt vời của nước chảy.</p><br>
      <img src="image/vuon-quoc-gia-yok-don.jpg" alt="Gioithieu"><br>
      <p>Đến với Gia Lai, bạn sẽ không chỉ khám phá thiên nhiên tuyệt vời mà còn được tham quan và tìm hiểu văn hóa độc đáo của người dân địa phương. Văn hóa các dân tộc Ê Đê, Bahnar, Jrai và Gia Rai đậm chất vùng Tây Nguyên sẽ khiến bạn say mê. Hãy thăm làng cổ Pleiku để khám phá các nghề truyền thống như nhuộm đất, làm đồ gốm và làm những món đồ thủ công tinh xảo. Đừng quên thưởng thức những món ăn đặc sản như cơm lam, gà nướng và nước mắm Tây Nguyên, mang đậm hương vị của vùng đất này.</p>
      <br>
      <p style="text-align: center"><img src="image/bún nắm cua.jpg"></p>
      <br>
      <p>Gia Lai cũng nổi tiếng với lễ hội và sự kiện văn hóa độc đáo. Hãy đến vào thời điểm thích hợp để tham gia vào lễ hội Cà Phê Buôn Ma Thuột, nơi bạn có thể trải nghiệm không chỉ hương vị tuyệt vời của cà phê mà còn làmột không khí sôi động và vui nhộn của lễ hội. Khám phá các nghi lễ tôn giáo của người dân địa phương và cùng hòa mình vào những trò chơi và hoạt động truyền thống độc đáo.</p>
      <br>
      <p style="text-align: center"><img src="image/đồng bào.jpg"></p>
      <br>
      <p>
        Để tận hưởng trọn vẹn trải nghiệm khám phá Gia Lai, bạn có thể lựa chọn các tour du lịch hấp dẫn và chuyên nghiệp. Dạo bước trên các con đường quanh co của Gia Lai, bạn sẽ được chiêm ngưỡng những cánh đồng lúa xanh rợp trời và tận hưởng không gian yên bình của làng quê. Bạn cũng có thể tham gia vào các hoạt động trekking, leo núi, thăm làng bản địa và tận hưởng đêm trại dưới ánh sao. Mỗi chuyến đi sẽ mang đến cho bạn những trải nghiệm đáng nhớ và kỷ niệm vô giá.
      </p><br>
      <p>Đừng bỏ qua cơ hội khám phá Gia Lai - Hòn Ngọc Đất Tây Nguyên. Với vẻ đẹp thiên nhiên tuyệt vời, văn hóa độc đáo và những trải nghiệm khó quên, Gia Lai hứa hẹn sẽ là một điểm đến đáng mong đợi. Hãy lên kế hoạch cho chuyến đi của bạn và khám phá những điều kỳ diệu mà Gia Lai mang đến.</p>

    </div>
    <footer>
      <p>Copy@Kim Anh "Gia Lai - Hòa mình vào cảnh quan thiên nhiên tuyệt đẹp và khám phá những bí mật văn hóa độc đáo, để tạo nên những kỷ niệm đáng nhớ trong lòng."</p>
    </footer>

</body>
</html>
