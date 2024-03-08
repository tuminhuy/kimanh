<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <title>Giỏ hàng</title>
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
/*css cho trang*/
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 1200px;
    margin: 120px 5px 20px 5px;
    display: flex;
    justify-content: space-between;
}

.path {
    font-size: 14px;
    margin-bottom: 10px;
}

.cart {
    width: 60%;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
}

.cart__body table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.cart__body th, .cart__body td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

.cart__body th {
    background-color: #f2f2f2;
}

.cart__bottom {
    margin-top: 20px;
    display: flex;
    justify-content: space-between;
}

.right {
    width: 30%;
    margin-left: 20px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
}

.right h3 {
    font-size: 18px;
}

.right h4 {
    font-size: 14px;
    margin-top: 10px;
}

.right table {
    width: 100%;
    margin-top: 10px;
}

.right td {
    padding: 8px;
    text-align: left;
}

.right td:first-child {
    font-weight: bold;
}

.right p {
    margin: 5px 0;
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
          <li><a href="Lienhe.php">LIÊN HỆ</a></li><div id="list-account">
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
  <!--mở đầu nội dung trang-->
  <div class="container">
        <div class="path">
            <a href="index.php">Trang chủ </a>
            <a href="products.php">| Giỏ hàng </a>
        </div>
        <div class="cart">
            <div class="cart__body">
                <p id="numArr" hidden="hidden">2</p>
                <table>
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Sản phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Tổng</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="cart-body">
                        <!-- Các hàng sản phẩm sẽ được thêm vào đây -->
                    </tbody>
                </table>
            </div>
            <div class="cart__bottom">
                <a href="shop.php"><< Tiếp tục mua hàng</a>
                <a href="checkout.php">Thanh toán ></a>
            </div>
        </div>
        <div class="right">
            <h3>TÓM TẮT ĐƠN HÀNG</h3>
            <h4>Chi phí đơn hàng = Giá trị đơn hàng + phí vận chuyển + Thuế</h4>
            <table>
                <tbody>
                    <tr>
                        <td>Giá trị đơn hàng</td>
                        <td>
                            <p id="sum-price"></p>
                            <p> VND</p>
                        </td>
                    </tr>
                    <tr>
                        <td>Phí vận chuyển nhanh</td>
                        <td>
                            <p id="shipping-price">40,000</p>
                            <p> VND</p>
                        </td>
                    </tr>
                    <tr>
                        <td>Thuế</td>
                        <td>
                            <p id="tax">3</p>
                            <p>%</p>
                        </td>
                    </tr>
                    <tr>
                        <td>Tổng chi phí</td>
                        <td>
                            <p id="price"></p>
                            <p> VND</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
 </body>
</html>