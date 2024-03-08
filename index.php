<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <title> Trang Chủ </title>
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
      * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        font-family: "Roboto", sans-serif;
      }
      ul {
        list-style-type: none;
      }
      
      .video-container {
        width: 100vw;
        height: 90vh;
      }
      .video-container video {
        width: 100%;
        height: 100%;
        object-fit: cover;
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
      .section {
        height: 100vh;
        padding: 100px;
      }
      .header-content{
        position: absolute;
        top: 0;
        left: 0;
        min-height: 100%;
        background-color: rgba(255, 255, 255, 0.1);
        padding: 150px 50px 0 50px;
        text-align: center;
        width: 400px;
      }
      .header-content> h1{
        color: #c22700;
      }
      .header-content> p{
        color: #070706;
      }
      form{
        padding: 30px 12px;
        background-image: linear-gradient(135deg, #f07400, #f89544);
        margin-top: 30px;
        border-radius: 5px; 
      }
      form h1 {
        color: #0a0a0a;
        font-size: 27px;
      }
      form select, input{
        width: 100%;
        height: 35px;
        padding-left: 12px;
        outline: none;
        background-color: #f1eeee;
        border: none;
      }
      form p{
        text-align: left;
        color: hsl(0, 5%, 4%);
        margin: 8px 0 3px;
      }
      form button{
        height: 35px;
        width: 150px;
        background-color: #fffbf6;
        color: #070706;
        margin-top: 20px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        transition: all .3s ease;
      }
      form button:hover{
        background-color: transparent;
        border: 2px solid rgb(34, 13, 1);
        color: #070706;
      }
      .container {
        display: flex;
      }
      .left-column {
        flex: 1;
        background-color: #ffffff;
        color: #000;
        padding: 120px;
        text-align: 20px;
      }
      .right-column {
        flex: 1;
        background-color: #fff;
        padding: 70px 70px 10px 5px;
      }
      .fancy-text {
        font-family: "Arial", sans-serif;
        font-size: 36px;
        color: #e24c01;
        text-shadow: 2px 2px 4px rgba(255, 172, 117, 0.986);
        letter-spacing: 2px;
        line-height: 1.5;
      }
      .center-text {
        text-align: justify;
      }
      .btn {
        background-color: #FF5500;
        color: #FFFFFF;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-family: "Arial", sans-serif;
        font-size: 16px;
        cursor: pointer;
      }
      .btn:hover {
  background-color: #fa8c2c; /* Màu nền thay đổi khi di chuột vào */
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
    /*----------sản phẩm nổi bật----------*/
    .section-product {
      text-align: center;
      margin: 20px;
    }

    .h2pro {
      color: #fb5731;
      font-size: 28px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .product-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .product {
      width: 200px;
      margin: 20px;
      padding: 15px;
      border: 1px solid #ccc;
      border-radius: 8px;
      transition: transform 0.3s ease-in-out;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .product:hover {
      transform: scale(1.05);
    }

    .product img {
      max-width: 100%;
      height: auto;
      border-radius: 6px;
    }

    .product-info {
      margin-top: 10px;
    }

    .product-title {
      color: #333;
      font-weight: bold;
      font-size: 16px;
      margin-bottom: 5px;
    }

    .product-price {
      color: #666;
      font-size: 14px;
    }

    .view-more {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 10px;
      color: #333;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s ease-in-out;
    }

    .view-more:hover {
      color: #ff0000;
    }
    /* Thêm đoạn mã media query để thay đổi kiểu dáng trên điện thoại di động */
@media only screen and (max-width: 600px) {
  .section-product {
    margin: 10px;
  }

  .h2pro {
    font-size: 24px;
    margin-bottom: 15px;
  }

  .product {
    width: calc(50% - 20px);
    margin: 10px;
    padding: 10px;
    font-size: 14px;
  }

  .product img {
    border-radius: 4px;
  }

  .product-info {
    margin-top: 8px;
  }

  .product-title {
    font-size: 14px;
    margin-bottom: 3px;
  }

  .product-price {
    font-size: 12px;
  }

  .view-more {
    margin-top: 8px;
    font-size: 14px;
  }
}

    /*-----------------Nice-place----------*/
    .nice-place {
      padding: 20px 0;
    }
    .row {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }
    .container-nice {
      max-width: 1024px;
      margin: auto;
    }
    .col {
      flex-basis: 30%;
      max-width: 30%;
    }
    .nice-place-item {
      width: 100%;
      height: 400px;
      position: relative;
      overflow: hidden;
    }
    .nice-place-item:hover .nice-place-text{
      transform: translateX(0%);
    }
    .nice-place-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      position: absolute;
    }
    .nice-place-text {
      position: absolute;
      width: 100%;
      height: 250px;
      bottom: 0;
      padding: 12px;
      background: linear-gradient(to right, rgba(3, 3, 3, 0.5), rgba(255,255,255,0));
      transform: translateX(-100%);
      transition: all 0.5s ease;
    }
    .nice-place-text h2{
      color: #c22700;
    }
    .nice-place-text i{
      color: yellow;
    }
    .nice-place-text p{
      color: #fff;
      margin: 12px 0;
    }
    .nice-place-text button{
      height: 30px;
      width: 100px;
      background-color: #a83800;
      border: none;
      color: #fff;
      cursor: pointer;
      border-radius: 5px;
      transition: all 0.5s ease;
    }
    .nice-place-text button:hover{
      background-color: #000;
    }
    .nice-place h1 {
      text-align: center;
      margin-bottom: 50px;
      color: coral;
      position: relative;
    }
    .nice-place h1::before{
    position: absolute;
    content: "";
    height: 2px;
    width: 150px;
    background-color: #c22700;
    border-radius: 5px;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    }
    .nice-place h1::after{
      position: absolute;
      content: "\2665";
      width: 40px;
      height: 20px;
      color: #a83800;
      background-color: #ffffff;
      bottom: -18px;
      left: 50%;
    transform: translateX(-50%);
    }
    /*--tin tức và phản hồi--*/
    .news-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 20px;
  width: 100%;
  padding: 50px;
}

.news-item {
  display: flex;
  align-items: center;
}

.news-image {
  width: 100%;
  max-width: 200px;
  height: auto;
  margin-right: 20px;
  padding: 10px;
}

.news-content {
  flex-grow: 1;
  text-align: justify;
}

.news-title {
  font-size: 20px;
  font-weight: bold;
  margin-bottom: 10px;
}

.news-date {
  font-size: 14px;
  color: #888;
  margin-bottom: 10px;
}

.news-description {
  font-size: 16px;
  margin-bottom: 10px;
}

.news-read-more {
  display: inline-block;
  padding: 5px 10px;
  background-color: #c22700;
  color: white;
  text-decoration: none;
  border-radius: 4px;
}

.new-feedback {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 100%;
}

.feedback-container {
  max-width: 600px;
  margin: 0 auto;
  padding: 0px;
}

.feedback-title {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 20px;
}

.feedback-list {
  list-style: none;
  padding: 0;
}

.feedback-item {
  margin-bottom: 40px;
}

.feedback-header {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}

.feedback-name {
  font-size: 18px;
  font-weight: bold;
  margin-right: 10px;
}

.feedback-rating {
  color: gold;
}

.feedback-comment {
  font-size: 16px;
  line-height: 1.5;
}

.feedback-avatar {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  margin-right: 10px;
}    
    /* CSS để điều chỉnh kích thước và vị trí của hình ảnh */
    .grid-container {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 10px;
}

.grid-item {
  position: relative;
  overflow: hidden;
}

.grid-item img {
  width: 100%;
  height: auto;
  transition: transform 0.3s ease;
}

.overlay {
  position: absolute;
  padding: 10px;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  opacity: 0;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  color: #fff;
  transition: opacity 0.3s ease;
}

.overlay h3, .overlay p {
  padding: 10px;
  margin: 0;
}

.grid-item:hover img {
  transform: scale(1.1);
}

.grid-item:hover .overlay {
  opacity: 1;
}
.new{
  width: 100%;
}
.new h1{

  text-align: center;

}
.new h1:hover {
    color: rgb(255, 60, 0);
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
@media (max-width: 575px){
  .header-content {
    width: 100%;
  }
  .video-container {
    height: 70vh;
  }
  .video-container video {
    height: 80%;
  }
}
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
@media (max-width: 575px){
  .container {
    flex-direction: column;
    width: 100%;
  }
  .left-column, .right-column {
    flex: 1;
  }
  .left-column {
    width: 100%;
    padding: 250px 20px 5px 20px;
  }
  .right-column {
    width: 100%;
    padding: 20px;
  }
  .right-column img {
    width: 360px;
  }
}
@media (max-width: 575px){
  .nice-place-item {
    flex-direction: column;
    flex: 1;
    width: 100%;
  }
  .col {
      flex-basis: 100%;
      max-width: 100%;
      padding: 20px;
    }
    .nice-place-item:hover .nice-place-text {
        transform: translateY(0%);
      }
    .nice-place-text {
      width: 100%;
      height: auto;
      bottom: auto;
      padding: 120px 12px;
      background: none;
      transform: translateY(-100%);
      transition: all 0.2s ease;
     }
}
@media (max-width: 575px){
  .news-grid {
      display: grid;
      grid-template-columns: 1fr;
      grid-gap: 20px;
      width: 100%;
      padding: 20px;
    }

    .news-item {
      flex-grow: 1;
      width: 100%;
      display: flex;
      align-items: center;
     
    }

    .news-image {
      width: 100%;
      height: auto;
      margin-right: 20px;
      
    }

    .news-content {
      flex-grow: 1;
      width: 100%;
      text-align: justify;
    }

    .news-title {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .news-date {
      font-size: 13px;
      color: #888;
      margin-bottom: 10px;
    }

    .news-description {
      font-size: 10px;
      margin-bottom: 10px;
    }

    .news-read-more {
      display: inline-block;
      padding: 5px 10px;
      background-color: #c22700;
      color: white;
      text-decoration: none;
      border-radius: 4px;
    }
    .feedback-column {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .feedback-container {
      max-width: 600px;
      margin: 0 auto;
      padding: 0px;
    }

    .feedback-title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .feedback-list {
      list-style: none;
      padding: 0;
    }

    .feedback-item {
      margin-bottom: 40px;
    }

    .feedback-header {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
    }

    .feedback-name {
      font-size: 18px;
      font-weight: bold;
      margin-right: 10px;
    }

    .feedback-rating {
      color: gold;
    }

    .feedback-comment {
      font-size: 16px;
      line-height: 1.5;
    }

    .feedback-avatar {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      margin-right: 10px;
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
    <a href="dangky.php" class="dropdown-item">Đăng ký</a>
  </div>
</div>
          
        </ul>
      </nav>
    </div>
  </div>
  <div class="video-container">
    <video src="video/Thành Phố Pleiku - Gia Lai.mp4" autoplay muted loop></video>
  </div>
  <div class="header-content">
    <h1>KHÁM PHÁ</h1>
    <p>Xách ba lô lên và đi thôi nào</p>
    <form action="db/process_form.php" method="post">
    <h1>Bạn muốn đi đâu nè</h1>
    <p>Địa điểm</p>
    <select name="location" id="location">
        <option value="#">---Chọn địa điểm---</option>
        <option value="Hồ T’Nưng">Hồ T’Nưng</option>
        <option value="Nhà máy thủy điện Ialy">Nhà máy thủy điện Ialy</option>
        <option value="Quảng trường Đại Đoàn Kết">Quảng trường Đại Đoàn Kết</option>
        <option value="Thác Phú Cường">Thác Phú Cường</option>
        <option value="Đồng xanh">Đồng xanh</option>
        <option value="Chùa Minh Thành">Chùa Minh Thành</option>
        <option value="Biển Hồ Chè">Biển Hồ Chè</option>
        <option value="Núi lửa Chư Đăng Ya">Núi lửa Chư Đăng Ya</option>
    </select>
    <p>Số người</p>
    <input type="number" min="1" name="num_people" placeholder="Bạn đi bao nhiêu người">
    <p>Ngày đi</p>
    <input type="date" name="departure_date">
    <p>Ngày về</p>
    <input type="date" name="return_date">
    <button type="submit">Đăng ký</button>
    <i class="fa-thin fa-house"></i>
</form>

  </div>

  <div class="container">
    <div class="left-column">
      <!-- Nội dung cột trái -->
      <em class="fancy-text">Khám phá Gia Lai</em>
      <h2> Hòn Ngọc Đất Tây Nguyên</h2>
      <br>
      <p class="center-text"> Với thiên nhiên tươi đẹp, văn hóa độc đáo và các điểm đến hấp dẫn, Gia Lai là một tỉnh tuyệt vời để khám phá. Hãy đắm mình trong vẻ đẹp của miền Tây Nguyên và trải nghiệm những truyền thống độc đáo của người dân địa phương.</p>
      <br>
      <a href="gioithieu.php"><button class="btn">Xem thêm</button></a>
    </div>
    <div class="right-column">
      <!-- Nội dung cột phải -->
      <img src="image/images654754_Bien_Ho_TRAN_PHONG.jpg" alt="Biển Hồ">
    </div>
  </div>
  <!------ Nội dung sản phẩm nổi bật---------->
  <section class="section-product">
  <h2 class="h2pro">Sản phẩm nổi bật</h2>
  <div class="product-container">
    <!-- Hàng 1 -->
    <div class="product">
      <img src="image/rượu cần.jpg" alt="Product 1">
      <div class="product-info">
        <div class="product-title">Rượu Cần</div>
        <div class="product-price"> 200.000/5L</div>
        <a href="#" class="view-more">Xem thêm</a>
      </div>
    </div>
    <div class="product">
      <img src="image/Nấm linh chi rừng.jpg" alt="Product 2">
      <div class="product-info">
        <div class="product-title">Nấm Linh Chi</div>
        <div class="product-price"> 6.000.000/Kg</div>
        <a href="#" class="view-more">Xem thêm</a>
      </div>
    </div>
    <div class="product">
      <img src="image/phở khô GL.jpg" alt="Product 3">
      <div class="product-info">
        <div class="product-title">Phở Khô GL</div>
        <div class="product-price">179.000/set</div>
        <a href="#" class="view-more">Xem thêm</a>
      </div>
    </div>
    <div class="product">
      <img src="image/măng chua rừng.jpg" alt="Product 4">
      <div class="product-info">
        <div class="product-title">Măng chua rừng</div>
        <div class="product-price">250.000/Kg</div>
        <a href="#" class="view-more">Xem thêm</a>
      </div>
    </div>
    <div class="product">
      <img src="image/Muối kiến vàng.jpg" alt="Product 5">
      <div class="product-info">
        <div class="product-title">Muối Kiến Vàng</div>
        <div class="product-price">65.000/100g</div>
        <a href="#" class="view-more">Xem thêm</a>
      </div>
    </div>
    <!-- Các cột khác của Hàng 1 -->

    <!-- Hàng 2 -->
    <div class="product">
      <img src="image/cà phê nguyên chất.jpg" alt="Product 6">
      <div class="product-info">
        <div class="image/cà phê.jpg">Cà phê nguyên chất</div>
        <div class="product-price">150.000/Kg</div>
        <a href="#" class="view-more">Xem thêm</a>
      </div>
    </div>
    <div class="product">
      <img src="image/Bò.jpg" alt="Product 7">
      <div class="product-info">
        <div class="product-title">Bò một nắng</div>
        <div class="product-price">590.000/Kg</div>
        <a href="#" class="view-more">Xem thêm</a>
      </div>
    </div>
    <div class="product">
      <img src="image/mật ong rừng.png" alt="Product 8">
      <div class="product-info">
        <div class="product-title">Mật ong rừng</div>
        <div class="product-price">170.000/L</div>
        <a href="#" class="view-more">Xem thêm</a>
      </div>
    </div>
    <div class="product">
      <img src="image/bơ.jpg" alt="Product 9">
      <div class="product-info">
        <div class="product-title">Bơ Gia Lai</div>
        <div class="product-price">50.000/Kg</div>
        <a href="#" class="view-more">Xem thêm</a>
      </div>
    </div>
    <div class="product">
      <img src="image/tôm khô.jpg" alt="Product 10">
      <div class="product-info">
        <div class="product-title">Tôm khô Biển Hồ</div>
        <div class="product-price">1.100.000/Kg</div>
        <a href="#" class="view-more">Xem thêm</a>
      </div>
    </div>

    <!-- Các cột khác của Hàng 2 -->
  </div>
</section>

  <!--------------------------------Nice place-->
  <section class="nice-place">
    <div class="container-nice">
      <h1>Địa điểm nổi bật</h1>
      <div class="row">
        <div class="col">
          <div class="nice-place-item">
            <div class="nice-place-image">
              <img src="image/Biển Hồ.jpg" alt="Biển Hồ">
            </div>
            <div class="nice-place-text">
              <h2>Biển Hồ</h2>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <p>Nằm ở huyện Chư Păh, Biển Hồ là một hồ nước tự nhiên có khung cảnh tuyệt đẹp. Du khách có thể tham gia các hoạt động như đi thuyền, câu cá và tận hưởng không gian yên tĩnh và mát mẻ tại đây.</p>
              <button>Mua Tour</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="nice-place-item">
            <div class="nice-place-image">
              <img src="image/ho_t'nung__gia_lai_1572000946_resize.jpeg" alt="Hồ">
            </div>
            <div class="nice-place-text">
              <h2>Hồ T'nưng</h2>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <p>Nằm ở huyện Đắk Đoa, Hồ T'nưng là một hồ nước lớn bao quanh bởi cánh đồng lúa và rừng xanh. Du khách có thể tham gia các hoạt động như đi thuyền kayak, câu cá và tắm biển.</p>
              <button>Mua Tour</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="nice-place-item">
            <div class="nice-place-image">
              <img src="image/Thác.jpg" alt="Thác">
            </div>
            <div class="nice-place-text">
              <h2>Thác Pơ-mã-rê</h2>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <p>Nằm ở huyện Chư Sê, Thác Pơ-mã-rê là một thác nước nổi tiếng với vẻ đẹp hoang sơ và hùng vĩ. Du khách có thể tham gia trekking và khám phá các đường mòn xung quanh thác để khám phá cảnh quan đồng cỏ và rừng núi.</p>
              <button>Mua Tour</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-------------- Tin tức -->
  <div class="new">
    <h1 class="color: #c22700;">Tin tức</h1>
    <div class="news-grid">
      <div class="news-column">
        <div class="news-item">
          <img class="news-image" src="image/cơm lam.jpg" alt="ẩm thực">
          <div class="news-content">
            <h2 class="news-title">Cơm Lam và Gà Sa Lửa</h2>
            <p class="news-date">Ngày đăng: 01/07/2023</p>
            <p class="news-description">Cơm lam là một món ăn truyền thống của người dân Gia Lai. Cơm được nấu trong ống tre,....</p>
            <a href="#" class="news-read-more">Đọc thêm</a>
          </div>
        </div>
        <div class="news-item">
          <img class="news-image" src="image/cà phê.jpg" alt="Cà Phê">
          <div class="news-content">
            <h2 class="news-title">Cà phê Pleiku</h2>
            <p class="news-date">Ngày đăng: 02/07/2023</p>
            <p class="news-description">Được mệnh danh là thủ phủ cà phê, đến Gia Lai mà bạn không thưởng thức......</p>
            <a href="#" class="news-read-more">Đọc thêm</a>
          </div>
        </div>
        <!-- Các tin tức khác -->
      </div>
      <div class="feedback-column">
        <!--Phản hồi-->
        <div class="feedback-container">
          <h2 class="feedback-title">Phản hồi từ khách hàng</h2>
          <ul class="feedback-list">
            <li class="feedback-item">
              <div class="feedback-header">
                <img class="feedback-avatar" src="image/Chị Linh.jpg" alt="Ailinh">
                <div>
                  <h3 class="feedback-name">Ái Linh</h3>
                  <span class="feedback-rating">4.5/5</span>
                </div>
              </div>
              <p class="feedback-comment">Đặc sản của Gia Lai thật ngon và độc đáo. Tôi rất ấn tượng!</p>
            </li>
            <li class="feedback-item">
              <div class="feedback-header">
                <img class="feedback-avatar" src="image/Kim Anh.jpg" alt="Kim Anh">
                <div>
                  <h3 class="feedback-name">Kim Anh</h3>
                  <span class="feedback-rating">5/5</span>
                </div>
              </div>
              <p class="feedback-comment">Đây thực sự là một điểm đến tuyệt vời để giải tỏa căng thẳng và thư giãn hoàn hảo!</p>
            <!-- Các mục đánh giá khác -->
          </ul>
        </div>
      </div>
    </div>
  </div>
  
 <!--khác -->
  <div class="grid-container">
    <div class="grid-item">
      <img src="image/bò một nắng.jpg" alt="ẩm thực">
      <div class="overlay">
        <h3>ẨM THỰC</h3>
        <p>Ẩm thực là nghệ thuật hòa quyện hương vị, màu sắc và cảm xúc, tạo nên những trải nghiệm tuyệt vời trong mỗi món ăn.</p>
      </div>
    </div>
    <div class="grid-item">
      <img src="image/dac-san-gia-lai-dac-san-trai-cay-gia-lai.jpg" alt="trái cây">
      <div class="overlay">
        <h3>TRÁI CÂY</h3>
        <p>Trái cây là món quà tự nhiên, hòa quyện hương vị ngọt ngào và màu sắc tươi tắn, mang lại sức khỏe và niềm vui cho mỗi ngày</p>
      </div>
    </div>
    <div class="grid-item">
      <img src="image/ho_t'nung__gia_lai_1572000946_resize.jpeg" alt="du lịch">
      <div class="overlay">
        <h3>DU LỊCH</h3>
        <p>Du lịch là hành trình khám phá, kết nối và trải nghiệm những điều tuyệt vời trong cuộc sống, để tạo dấu ấn và kỷ niệm với thế giới xung quanh.</p>
      </div>
    </div>
  </div>
  <footer>
    <p>Copy@Kim Anh "Gia Lai - Hòa mình vào cảnh quan thiên nhiên tuyệt đẹp và khám phá những bí mật văn hóa độc đáo, để tạo nên những kỷ niệm đáng nhớ trong lòng."</p>
  </footer>
  
  
</body>
</html>
