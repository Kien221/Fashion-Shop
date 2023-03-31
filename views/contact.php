<?php
require_once ('../database/connect_sql.php');
$query = "SELECT * FROM category ";
$result = $dbc->query($query);

?>
<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $firtname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $subject_name = $_POST['subject'];
    $note = $_POST['message'];
    $query_stmt = "INSERT INTO `feedback` (`firstname`, `lastname`, `email`, `phone_number`, `subject_name`, `note`) 
    VALUES ('$firtname','$lastname','$email','$phone_number','$subject_name','$note')";
    $stmt = $dbc->query($query_stmt);
    if($stmt){
        echo("<script>alert('Gửi phản hồi thành công');</script>");
    }
    else echo('Lỗi');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css "/>
    <link rel="stylesheet" href="./asset/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/cart.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    
    <title>Contact</title>
</head>
<body>
<header id="header">
        <nav class="navbar navbar-expand-sm bg-white navbar-dark justify-content-center" style="position: unset;">
            <a class="navbar-brand" href="index.php">
                <img src="https://t004.gokisoft.com/uploads/2021/07/1-s-1636-logo-web.jpg " id="logo-header" style="width:100px;">
            </a>
            <ul class="navbar-nav ">
                <?php
                    if($result){
                        while($row = $result->fetch_assoc()){

                    
                ?>
               <li class="nav-item">
                  <a class="nav-link text-success" href="category.php?id=<?php echo $row['id'] ?>"><?php echo $row['name'] ?></a>
               </li>
               <?php
                        }
                    }
               ?>
            </ul>
         </nav>
         <?php
         require_once ('menu.php');
         ?>
    </header>
    <main>
        <div class="head-main">
            <a href="">Trang chủ</a>
            <p style="margin: 0 10px;">/</p>
            <span style="color:#868e96">liên hệ</span>
        </div>
        <div class="item-3 row">

            <div class="col-4">
                <h5>Địa chỉ</h5>
                <p>HH1C Linh Đàm, Linh Đường, Hoàng Liệt, Hoàng Mai, Hà Nội, Việt Nam</p>
            </div>
            <div class="col-4">
                <h5>Call</h5>
                <p>Hãy gọi cho chúng tôi để nhận được phục vụ tốt nhất.

                </p>
                <a href="">093 - 39 08 568</a> 
            </div>
            <div class="col-4">
                <h5>Email</h5>
                <p>Gửi Email cho chúng tôi - để nhận chi tiết về dịch vu.</p>
                <a href="">kienpro214@gmail.com</a>
            </div>
        </div>
        <section class="py-6">
            <div class="container">
            <header class="mb-5">
            <h2 class="text-uppercase h5" style="text-align:left">Gửi Phản Hồi</h2>
            </header>
            <div class="row">
            <div class="col-md-7 mb-5 mb-md-0">
            <form id="contact-form" method="post" action="contact.php" class="form">
            <input type="hidden" name="_token" value="6AJQi7OxzpMfzQvtN2mLvnGtLhphldRfPI5Dgnk2">
            <div class="controls">
            <div class="row">
            <div class="col-sm-6">
            <div class="form-group">
            <label for="firstname" class="form-label">Tên *</label>
            <input type="text" name="firstname" id="firstname" placeholder="Nhập tên" required="required" class="form-control">
            </div>
            </div>
            <div class="col-sm-6">
            <div class="form-group">
            <label for="lastname" class="form-label">Họ *</label>
            <input type="text" name="lastname" id="lastname" placeholder="Nhập họ" required="required" class="form-control">
            </div>
            </div>
            </div>
            <div class="form-group">
            <label for="email" class="form-label">Địa Chỉ Email *</label>
            <input type="email" name="email" id="email" placeholder="Nhập địa chỉ email" required="required" class="form-control">
            </div>
            <div class="form-group">
            <label for="phone_number" class="form-label">Số Điện Thoại *</label>
            <input type="telno" name="phone_number" id="phone_number" placeholder="Nhập số điện thoại" required="required" class="form-control">
            </div>
            <div class="form-group">
            <label for="subject" class="form-label">Tiêu Đề *</label>
            <input type="text" name="subject" id="subject" placeholder="Nhập tiêu đề" required="required" class="form-control">
            </div>
            <div class="form-group">
            <label for="message" class="form-label">Nội Dung Tin Nhắn *</label>
            <textarea rows="4" name="message" id="message" placeholder="Nhập nội dung" required="required" class="form-control"></textarea>
            </div>
            
            <button type="submit" class="btn btn-outline-success" style="margin-top: 10px; width: 70px;">Gửi</button>
            </div>
            </form>
            </div>
            <div class="col-md-5">
            <font color="#212529" face="Roboto, Helvetica, Arial, sans-serif"><span style="font-size: 18px; letter-spacing: 1.8px; text-transform: uppercase;"><b>Liên hệ công ty cổ phần ziczac group</b></span></font>&nbsp;<br><br><b>Trụ sở chính :&nbsp;</b> HH1C Linh Đàm, Linh Đường, Hoàng Liệt, Hoàng Mai, Hà Nội, Việt Nam<div><b>Số điện thoại </b>: 0967.025.996</div><div><br><div>Chúng tôi luôn tiên phong trong lĩnh vực xậy dựng website cho các doanh nghiệp và của hàng. Chúng tôi luôn nỗ lực để tạo ra sản phẩm có chất lượng tốt nhất cho khách hàng.</div></div><div><br></div><div>ZicZac Group - 24/7 luôn sẵn sàng phục vụ quý khách.</div>
            </div>
            </div>
            </div>
            </section>
            <div class="map" style="margin-top: 50px;">
                <img src="https://website366.com/wp-content/uploads/2021/01/gg-map-4.png" alt="" style="width:100%; height: 500px;">
            </div>
    </main>
    <div class="support-online">
        <div class="support-content">
        <a href="#" class="call-now" rel="nofollow" data-original-title="" title="">
        <img src="./assets/img/phone-call-icon.png" style="width: 50px;">
        <div class="animated infinite zoomIn alo-circle"></div>
        <div class="animated infinite pulse alo-circle-fill"></div>
        </a>
        <a class="open-popup-link" href="#" data-original-title="" title="">
        <img src="./assets/img/facebook.png" style="width: 50px;">
        </a>
        </div>
        <a class="btn-support" href="#" data-original-title="" title="">
        <div class="animated infinite zoomIn alo-circle"></div>
        <div class="animated infinite pulse alo-circle-fill"></div>
        <img src="./assets/img/zalo-sharelogo.png" style="width: 50px;">
        </a>
    </div>
    <div class="cart bg-success">
        <a href="./cart.html">
            <i class="fa-solid fa-cart-shopping" style="color: white;"></i>
        </a>
    </div>
    <div class="question">
        <a href="./cart.html">
            <i class="fa-solid fa-circle-question" style="color: white;"></i>
        </a>
    </div>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col">
                <h5>GIỚI THIỆU</h5>
                <span style="margin: 20px 0;">LIÊN HỆ CÔNG TY CỔ PHẦN ZICZAC GROUP</span>
                <p>Chúng tôi luôn tiên phong trong lĩnh vực xậy dựng website cho các doanh nghiệp và của hàng. Chúng tôi luôn nỗ lực để tạo ra sản phẩm có chất lượng tốt nhất cho khách hàng.</p>
            </div>
            <div class="col" style="padding-left: 30px;">
                <h5>SẢN PHẨM MỚI</h5>
                <ul class="list_footer">
                    <li><a href="">QUẦN KHAKI NAM</a></li>
                    <li><a href="">ÁO SƠ MI NAM DÀI TAY KẺ CARO</a></li>
                    <li><a href="">ÁO POLO NAM</a></li>
                    <li><a href="">QUẦN SHORTS NAM</a></li>
                    <li><a href="">ÁO PHÔNG NAM IN TO</a></li>
                </ul>
            </div>
            <div class="col">
                <h5>TIN TỨC</h5>
                <ul class="list_footer">
                    <li><a href="">UTOPIA TRỞ THÀNH HIỆN THỰC</a></li>
                    <li><a href="">TINH THẦN MIỄN PHÍ</a></li>
                    <li><a href="">Điểm danh dàn "gà cưng"</a></li>
                    <li><a href="">Bí quyết mặc váy hoa giống Selena Gomez không bị già</a></li>
                    <li><a href="">Vì sao nói thời trang của phụ nữ Thái Lan hot số 1 châu Á?</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="end-footer">
        <span>© 2018 <p style="color: yellow;">Zic Zac Group</p> . Được thiết kế bời <p style="color: yellow;">Zic Zac</p>. All rights reserved.</span>
    </div>
</div>
    
</body>
</html>