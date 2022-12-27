<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboard | Korsat X Parmaga</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<?php
    require_once "./models/M_san_pham.php";
    require_once "./models/M_don_dat_hang.php";
    require_once "./models/M_user.php";

    $M_user=new M_user();
    $M_sanpham=new M_san_pham();
    $M_dondathang=new M_don_dat_hang();
    $listSp=$M_sanpham->GetListSanPham();
    $listDon= $M_dondathang->GetDonDatHang();
    $listUser= $M_user->GetListUser();
    $leng1 = count($listDon);
    $leng2 = count($listUser);
    $leng = count($listSp);
 ?>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">

            
            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>                      
                        <div class="numbers">1,504</div>
                        <div class="cardName">Lượt xem hàng ngày</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers"><?php echo $leng1 ?></div>
                        <div class="cardName">Đơn đặt hàng</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers"><?php echo $leng2 ?></div>
                        <div class="cardName">User</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="people-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers"><?php echo $leng ?></div>
                        <div class="cardName">Sản phẩm</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="newspaper-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">$7,842</div>
                        <div class="cardName">Thu nhập</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Đơn đặt hàng gần đây</h2>
                        <a href="#" class="btn">View All</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Sản phẩm</td>
                                <td>Giá</td>
                                <td>Thanh toán</td>
                                <td>Trạng thái</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Star Refrigerator</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>

                            <tr>
                                <td>Dell Laptop</td>
                                <td>$110</td>
                                <td>Due</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>Apple Watch</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status return">Return</span></td>
                            </tr>

                            <tr>
                                <td>Addidas Shoes</td>
                                <td>$620</td>
                                <td>Due</td>
                                <td><span class="status inProgress">In Progress</span></td>
                            </tr>

                            <tr>
                                <td>Star Refrigerator</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>

                            <tr>
                                <td>Dell Laptop</td>
                                <td>$110</td>
                                <td>Due</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>Apple Watch</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status return">Return</span></td>
                            </tr>

                            <tr>
                                <td>Addidas Shoes</td>
                                <td>$620</td>
                                <td>Due</td>
                                <td><span class="status inProgress">In Progress</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Khách hàng gần đây</h2>
                    </div>

                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/2.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Richter<br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/3.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Veera <br> <span>India</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/11.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Natalya<br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/5.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Valhein <br> <span>India</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/6.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Enzo <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/12.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Hayate <br> <span>India</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/8.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Murad <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/9.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Florentino <br> <span>India</span></h4>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        
    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>