<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        td, th {
            width: 18%;
            padding: 2%;
                }
        .close {
            float: right;
            font-size: 21px;
            font-weight: 700;
            line-height: 1;
            text-shadow: green;
            color: green;
            opacity: 0.9;
        }
        #info{
            display: none;
        }
        #mail:active #info{
            display: block;
        }
        .dichvu{
            border: 1px solid black;
            padding-top: 3px;
        }
        
    </style>
</head>

<body>
    <div class="container">
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Register</button>



        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myDichVu">Book</button>


        <div id="myDichVu" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header" style="background-color: dimgrey">
                        <b style="color: rgb(215, 238, 215); font-size: 170%;">Các Tour Hiện Có</b>
                        <button type="button" class="close" style="color: rgb(215, 238, 215);" data-dismiss="modal">&times;</button>

                    </div>
                    <div class="title">
                        <img src="../Images/hongcam.png" alt="Image" style="width: 40%; height: 60%; margin-left: 30%">


                    </div>


                    <div class="modal-body " style="margin-left: 3%;margin-right: 3%">

                        <!-- <img src="Image/logo.png" alt="logo"> -->
                        <center>
                            <table>

                                <tr class="dichvu">
                                    <td><img src="../Images/111.jpg" alt="can't show" width="100%" height="160px"></td>
                                    <td><b> Khách Sạn Adiga:</b>23_Nguyễn_Văn _Thoại Phước_Mỹ Sơn_Trà.<br />

                                        <b> Dịch Vụ: </b>Tiện Nghi, Phục Vụ Chu Đáo<br />
                                        <b> Số Lượng: </b>2 Người<br />
                                        <b>Giá Tour:</b> <b style="color: orangered">8.000.000vnd</b> <br />
                                        <button  style="background-color: gold; border: 1px solid saddlebrown; width: 40%; height: 30% "
                                            data-toggle="modal" data-target="#myBook">
                                            Đặt Tour </button>
                                        <button style="background-color: gold; border: 1px solid saddlebrown; width: 40%; height: 30% ">
                                            Xem Thêm </button>
                                    </td>
                                </tr>
                                <tr class="dichvu">
                                    <td><img src="../Images/111.jpg" alt="can't show" width="100%" height="160px"></td>
                                    <td><b> Khách Sạn Adiga:</b>23_Nguyễn_Văn _Thoại Phước_Mỹ Sơn_Trà.<br />

                                        <b> Dịch Vụ: </b>Tiện Nghi, Phục Vụ Chu Đáo<br />
                                        <b> Số Lượng: </b>2 Người<br />
                                        <b>Giá Tour:</b> <b style="color: orangered">8.000.000vnd</b> <br />
                                        <button style="background-color: gold; border: 1px solid saddlebrown; width: 40%; height: 30% "
                                            data-toggle="modal" data-target="#myBook">
                                            Đặt Tour </button>
                                        <button style="background-color: gold; border: 1px solid saddlebrown; width: 40%; height: 30% ">
                                            Xem Thêm </button>
                                    </td>
                                </tr>
                                <tr class="dichvu">
                                    <td><img src="../Images/111.jpg" alt="can't show" width="100%" height="160px"></td>
                                    <td><b> Khách Sạn Adiga:</b>23_Nguyễn_Văn _Thoại Phước_Mỹ Sơn_Trà.<br />

                                        <b> Dịch Vụ: </b>Tiện Nghi, Phục Vụ Chu Đáo<br />
                                        <b> Số Lượng: </b>2 Người<br />
                                        <b>Giá Tour:</b> <b style="color: orangered">8.000.000vnd</b> <br />
                                        <button style="background-color: gold; border: 1px solid saddlebrown; width: 40%; height: 30% "
                                            data-toggle="modal" data-target="#myBook">
                                            Đặt Tour </button>
                                        <button style="background-color: gold; border: 1px solid saddlebrown; width: 40%; height: 30% ">
                                            Xem Thêm </button>
                                    </td>
                                </tr>

                            </table>


                        </center>

                    </div>
                    <div class="modal-footer" style="background-color: dimgrey">

                        <a href="#" class="btn btn-outline-primary" style="border: green 1px solid; background-color: rgb(175, 238, 214); text-align: center"
                            data-dismiss="modal">Đóng</a>


                    </div>
                </div>
            </div>



            <!-- het mot phan -->

            <div id="myBook" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: dimgrey">
                            <b style="color: rgb(215, 238, 215); font-size: 170%;">Đăng KÍ Tour Du Lịch</b>
                            <button type="button" class="close" style="color: rgb(215, 238, 215);" data-dismiss="modal">&times;</button>

                        </div>
                        <div class="title">
                            <img src="../Images/hongcam.png" alt="Image" style="width: 40%; height: 60%; ">


                        </div>


                        <div class="modal-body " style="margin-left: 12%">

                            <!-- <img src="Image/logo.png" alt="logo"> -->
                            <center>
                                <table>

                                    <tr>
                                        <td><label for="myfirstname"> <b>Điểm Khởi Hành</b>*: </label> </td>
                                        <td><select title="Pick a number" class="selectpicker" id="select1">
                                                <option value="Hà Nội">Hà Nội</option>
                                                <option value="TP. CHM">TP. HCM</option>
                                                <option value="Đà Nẵng">Đà Nẵng</option>
                                                <option value="huế">Huế</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td><label for="myfirstname"> <b>Điểm Đến</b>*: </label> </td>
                                        <td><select title="Pick a number" class="selectpicker" id="select2">
                                                <option value="Hà Nội">Hà Nội</option>
                                                <option value="TP. CHM">TP. HCM</option>
                                                <option value="Đà Nẵng">Đà Nẵng</option>
                                                <option value="Huế">Huế</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td><label for="myfirstname"><b>Tên Tour</b>*: </label> </td>
                                        <td><input type="text" name="Tourname" id="Tourname" placeholder="Tên Tour"
                                                onclick="show_selected('select1','select2')"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="myfirstname"> <b>Phương tiện</b>*: </label> </td>
                                        <td><select title="Pick a number" class="selectpicker" id="select3">
                                                <option>Ô Tô</option>
                                                <option>Tàu hỏa</option>
                                                <option>Bus</option>
                                                <option>Xe máy</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td><label for="myfirstname"><b>Số lượng</b>*: </label> </td>
                                        <td><input type="text" name="" id="soluong" placeholder="Số lượng"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="myfirstname"><b>Tên Khách Hàng</b>*: </label> </td>
                                        <td><input type="text" name="" id="tenkhach" placeholder="Tên Khách"></td>
                                    </tr>

                                    <tr>
                                        <td><label for="myfirstname"><b>Email/Số điện thoại</b>*: </label> </td>
                                        <td><input type="text" name="" id="email" placeholder="Email*"></td>
                                    </tr>

                                    <tr>
                                        <td><label for="myfirstname"><b>Địa Chỉ </b>*:</label> </td>
                                        <td><input type="text" name="" id="address" placeholder="Địa chỉ"></td>
                                    </tr>
                                    <tr>

                                        <td colspan="2">
                                            <div class="form-group">
                                                <label for="comment">Một số yêu cầu kèm theo:</label>
                                                <textarea class="form-control" rows="3" id="comment"></textarea>
                                            </div>
                                        </td>
                                    </tr>

                                </table>


                            </center>
                            <p>
                                <p id="display"></p>
                                <p>Bằng việc tiếp tục bạn đồng ý với điều khoản của chúng tôi !</p>
                        </div>
                        <div class="modal-footer" style="background-color: dimgrey">

                            <a href="#" class="btn btn-outline-primary" style="border: green 1px solid; background-color: rgb(175, 238, 214); text-align: center">Đăng
                                kí Tour</a>


                        </div>
                    </div>
                </div>
                </div>
                <script>

                    function show_selected(id1, id2) {
                        var selector1 = document.getElementById(id1);
                        var value1 = selector1[selector1.selectedIndex].value;
                        var selector2 = document.getElementById(id2);
                        var value2 = selector2[selector2.selectedIndex].value;
                        var sum = value1 + "-" + value2;
                        document.getElementById('Tourname').value = sum;
                        return value1;
                    }
                   
                    // function close() {
                    //    var modal = document.getElementById('myDichVu');
                    //    modal.style.display = "none";
                    // }

                </script>








                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>

                            </div>
                            <div class="modal-body " style="margin-left: 12%">

                                <!-- <img src="Image/logo.png" alt="logo"> -->
                                <center>
                                    <table>
                                        <tr>
                                            <td colspan="2"> <img src="../Images/hongcam.png" alt="Image" style="width: 60%; height: 78%; "></td>

                                        </tr>
                                        <tr>

                                            <td colspan="2"><button type="button" style="width: 100%; height:5%; background-color: rgb(88, 111, 182); color: white; font-size: 20px"><img
                                                        src="../Images/face.jpg" alt="can't" width=10% height=5% style="float: left;">Tiếp
                                                    tục với Facebook</button></td>
                                        </tr>
                                        <tr>

                                            <td colspan="2"><button type="button" style="width: 100%; height:5%; background-color: rgb(230, 237, 238) ; color: rgba(11, 15, 13, 0.993); font-size: 20px"><img
                                                        src="../Images/good.png" alt="can't" width=10% height=5% style="float: left;">Tiếp
                                                    tục với Google</button></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td class="">Hoặc</td>

                                        </tr>
                                        <tr>

                                            <td colspan="2"><button type="button" data-target="#myModal1" data-toggle="modal"
                                                    id="mail" style="width: 100%; height:5%; background-color: rgb(140, 245, 193); color: white; font-size: 20px"><img
                                                        src="../Images/mail.ico" alt="can't" width=10% height=5% style="float: left;">Với
                                                    Email</button></td>
                                        </tr>




                                    </table>

                                </center>
                                <p>

                                    <p>bằng việc tiếp tục bạn đồng ý với điều khoản của chúng tôi</p>
                            </div>
                            <div class="modal-footer">

                                <a href="#" class="btn btn-outline-primary" style="border: green 1px solid; background-color: rgb(175, 238, 214)"
                                    data-dismiss="modal">Đóng</a>


                            </div>
                        </div>


                        <!-- Modal -->
                        <div id="myModal1" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                                    </div>
                                    <div class="modal-body justify-content-center" style="margin-left: 20%">

                                        <!-- <img src="Image/logo.png" alt="logo"> -->
                                        <center>
                                            <table>
                                                <tr>
                                                    <td colspan="2"> <img src="../Images/hongcam.png" alt="Image" style="width: 80%; height: 65%"></td>

                                                </tr>
                                                <tr>
                                                    <td><label for="myfirstname"> <b> Tên</b>*: </label> </td>
                                                    <td><input type="text" name="" id="Firstname" placeholder="Firstname *"></td>
                                                </tr>
                                                <tr>
                                                    <td><label for="myfirstname"> <b>Họ</b> *:</label> </td>
                                                    <td><input type="text" name="" id="Lastname" placeholder="Lastname*"></td>
                                                </tr>
                                                <tr>
                                                    <td><label for="myfirstname"><b>Email/Số điện thoại</b>*: </label>
                                                    </td>
                                                    <td><input type="text" name="" id="email" placeholder="Email*"></td>
                                                </tr>

                                                <tr>
                                                    <td><label for="myfirstname"><b>Địa Chỉ </b>*:</label> </td>
                                                    <td><input type="text" name="" id="address" placeholder="address"
                                                            width="300px"></td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <label for="myfirstname"><b>Giới tính</b>*:</label>
                                                    </td>
                                                    <td>
                                                        <form action="">
                                                            <input type="radio" name="gender" value="male"> Male
                                                            <input type="radio" name="gender" value="female"> Female
                                                            <input type="radio" name="gender" value="other"> Other
                                                        </form>
                                                    </td>
                                                    <td>

                                                    </td>

                                                </tr>
                                            </table>

                                        </center>
                                        <p>

                                            <p>Some text in the modal.</p>
                                    </div>
                                    <div class="modal-footer">

                                        <a href="#" class="btn btn-outline-primary" style="border: green 1px solid; background-color: rgb(175, 238, 214)"
                                            data-dismiss="modal">Đóng</a>
                                        <a href="#" class="btn btn-outline-primary" style="border: green 1px solid; background-color: rgb(163, 206, 189)">Đăng
                                            ký</a>

                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>


                <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">Toggle popover</a>
</body>

</html>