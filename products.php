<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var swiper = new Swiper('.swiper-container', {
                slidesPerView: 1,
                spaceBetween: 10,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        });

        function toggleAudio() {
            var audio = document.getElementById('product-audio');
            var description = document.getElementById('product-description');

            if (audio.paused) {
                audio.play();
                description.style.display = 'none';
            } else {
                audio.pause();
                description.style.display = 'block';
            }
        }
    </script>
    <!-- Thêm đoạn mã JavaScript trong thẻ head của trang HTML -->
    <script>
      function buyNow() {
    console.log('buyNow() is called!');
    // Chuyển đến trang giỏ hàng
    window.location.href = "cart.php";
}



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
      /*HẾT phần đầu trang *//*Chân trang*/
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
/* Phần thân trang chi tiết sản phẩm */
body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f4f4f4;
        }

        .product-detail-container {
            max-width: 1000px;

            margin: 120px 10px 10px 10px;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
        }

        .product-image {
            flex: 1;
            overflow: hidden;
            position: relative;
        }

        .swiper-container {
            width: 100%;
            height: 100%;
        }

        .swiper-slide img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 4px;
        }

        .swiper-button-next,
        .swiper-button-prev {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: #c6300d;
            color: white;
            padding: 10px;
            height: 15px;
            width: 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .swiper-button-prev {
            left: 10px;
        }

        .swiper-button-next {
            right: 10px;
        }

        .product-info {
            flex: 1;
            padding-left: 20px;
        }

        .product-title {
            font-size: 24px;
            margin-top: 0;
        }

        .product-description {
            font-size: 16px;
        }

        .product-price {
            font-size: 18px;
            margin: 10px 0;
        }

        label {
            font-size: 16px;
            margin-bottom: 5px;
        }

        input {
            font-size: 16px;
            padding: 8px;
            width: 60px;
        }

        .buy-button {
            background-color: #ff5500;
            color: white;
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .buy-button:hover {
            background-color: #c6300d;
        }

        .product-detail-container1 {
            max-width: auto;
            margin: 10px auto; /* Giảm khoảng cách so với container trên */
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .product-detail-container1 h1 {
            font-size: 24px;
            margin-top: 0;
        }

        .product-detail-container1 p {
            font-size: 16px;
        }
        @media only screen and (max-width: 600px) {
    .product-detail-container {
        flex-direction: column;
        margin: 20px auto;
    }

    .product-info {
        padding-left: 0;
        margin-top: 20px;
    }

    .swiper-button-next,
    .swiper-button-prev {
        top: 80%; /* Dịch nút điều hướng xuống phía dưới hình ảnh */
    }

    .product-detail-container1 {
        max-width: 100%; /* Đảm bảo chiều rộng tối đa cho container 1 */
        margin: 20px auto;
    }
}

.product-row {
    display: flex;
    flex-wrap: wrap;
}
.col-lg-9 {
    flex: 0 0 70%;
    max-width: 70%;
}

.col-lg-3 {
    flex: 0 0 30%;
    max-width: 30%;
    /* Thêm một số thuộc tính để đảm bảo hiển thị đúng */
    margin: 0 auto; /* Để căn giữa */
}
@media (max-width: 575px) {
    .col-lg-9 {
    flex: 0 0 70%;
    max-width: 100%;
}
}

/* Ẩn cột trên thiết bị di động */
@media (max-width: 575px) {
    .col-lg-3 {
        display: none;
    }
}

    .offer {

        margin: 120px 10px 10px 10px;
        text-align: center;
        font-size: 20px;
        color: #000;
        background: linear-gradient(45deg, #c93126, #ff7043);
        padding: 10px;
        border-radius: 8px;
        margin-bottom: 10px;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        animation: colorChange 3s infinite alternate;
        white-space: nowrap; /* Ngăn chữ xuống dòng */
        overflow: hidden; /* Ẩn phần văn bản vượt quá kích thước container */
        animation: colorChange 3s infinite alternate ease-in-out;
    }

    @keyframes colorChange {
        0% {
            background: linear-gradient(45deg, #c93126, #ff7043);
        }
        100% {
            background: linear-gradient(45deg, #ff7043, #c93126);
        }
    }

    .offer a {
        color: #fff;
        text-decoration: none;
        position: relative;
        transition: color 0.3s ease-in-out;
        display: inline-block; /* Để có thể sử dụng transform */
    }

    .offer a:hover {
        position: relative;
        animation: shake 0.3s ease-in-out;
        animation: shake 0.3s infinite alternate ease-in-out;
    }

    @keyframes shake {
        0%, 100% {
            transform: translateX(0);
        }
        25%, 75% {
            transform: translateX(-5px);
        }
        50% {
            transform: translateX(5px);
        }
    }
    .image-offer{
        padding: 0px 10px 10px 10px;
        position: relative;
        overflow: hidden;
    }
    .overlay-link {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    opacity: 0;
    background-color: rgba(0, 0, 0, 0.5);
    color: #fff;
    text-align: center;
    padding: 10px;
    border-radius: 5px;
    transition: opacity 0.3s ease-in-out;
}

.image-offer:hover .overlay-link {
    opacity: 1;
}
.audio-icon {
            cursor: pointer;
            font-size: 24px;
            color: #4CAF50;
        }

        .audio-icon:hover {
            color: #45a049;
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
  <section id="product-section" method="GET" action="db/product_id">
    <div class="product-row d-flex">
        <div class="col-lg-9">
            <div class="product-detail-container">
                <div class="product-image">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="" alt="" id="link_hinh_anh"></div>
                            
                            <!-- Thêm nhiều hình ảnh khác  -->
                        </div>
                        <!-- Thêm các nút điều hướng cho slider -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
                <div class="product-info">
                    <h1 class="product-title" id="ten_sp">Tên Sản Phẩm</h1>
                    <p class="product-price" id="gia">Giá: $100</p>
                    <form >
                    <label for="quantity">Số lượng:</label>
                    <input type="number" id="quantity" name="quantity" min="1" value="1">
                    <button type="button" class="buy-button" onclick="buyNow()">Mua Ngay</button>
                    </form>
                 </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="bg-while">
                <div class="offer">
                    
                    <a href="shop.php">Ưu đãi Black Friday 2023</a>
                </div>
            </div>
            <div class="image-offer">
    <img src="image/phở khô.jpg" alt="Phở khô" width="380px">
    <a href="shop.php" class="overlay-link">
        <span>Xem thêm</span>
    </a>
</div>

        </div>
    </div>
    <div class="product-detail-container1">
        <h1> Mô tả sản phẩm </h1>
        <span class="audio-icon" onclick="toggleAudio()" id="link_audio">🔊</span>
        <audio id="product-audio" controls style="display: none;">
            <source src="audio/NangGioSaiGon-LeVu-8072869.mp3" type="audio/mp3">
           
        </audio>
        <p id="mo_ta"> Nội dung sản phẩm: </p>
    </div>
</section>


</body>
</html>
