<?php
    include("user/header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ</title>
    <style>
        .carousel-inner {
            display: none;
        }
        .rightcolumn {
            display: none;
        }
        .leftcolumn {
            width: 90%;
        }
        .lienhe-contact{
            width: 80%;
            margin: auto;
            height: 50px;
            border-left: 4px solid #96191D;
        }
        .lienhe-contact h2{
            padding-left: 15px;
            padding-top: 5px;
            text-transform: uppercase;
            font-weight: 600;
        }
        .lienhe-map{
            width: 80%;
            margin: auto;
            margin-top: 20px;
        }
        .map-a01{
            display: flex;
        }
        .map-a01 i{
            font-size: 25px;
        }
        .map-a01 p{
            padding-left: 10px;
        }
        .ifr-map{
            width: 80%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="lienhe-contact">
        <h2>Liên hệ</h2>
    </div>
    <div class="lienhe-map">
        <div class="map-a01">
            <i class='bx bx-map'></i> <p>9 Đ. Nguyễn Đáng, Phường 9, Trà Vinh</p>
        </div>
        <div class="map-a01">
        <i class='bx bxs-phone-call' ></i> <p>0294 2210 236</p>
        </div>
    </div>
    <iframe class="ifr-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31440.7606195179!2d106.32904256971402!3d9.926039445713258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0175b61de6231%3A0xb14f4f9c32007c56!2zVHJ1bmcgdMOibSBWxINuIGhvw6EgbmfGsOG7nWkgSG9hIFRyw6AgVmluaCwgxJAuIE5ndXnhu4VuIMSQw6FuZywgUGjGsOG7nW5nIDksIFRyw6AgVmluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1639627949000!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</body>
</html>
<?php
    include("user/fotter.php");
?>