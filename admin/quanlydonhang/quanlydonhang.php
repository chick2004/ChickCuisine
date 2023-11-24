<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý bán hàng</title>
<style>

        .container ul li {
           display: inline-block;
           border-radius: 10px;
           padding: 10px 27.4px;
           
         }
         .container ul li a {
           text-decoration: none;
           color: #4E4E4E;
           text-align: center;
           font-size: 16px;
           font-style: normal;
           font-weight: 600;
           line-height: normal;
         }
         .menucon li.ghim {
           background-color: #C34439;
       } 
         .menucon li.ghim a{
           color: white;
         } 
         .container ul li:hover {
           background-color: #C34439;
           cursor: pointer;
           
         }
         
         .container ul li:hover a {
           color: #ffffff; /* Màu chữ trắng khi hover vào */
         }
         
         .container {
           width: 100%;
           display: grid;
           grid-template-columns: auto 70%;
           gap: 10px;
         }
         
         .container .status .menucon {
           background-color: #FFF;
           width: 100%;
           height: 41px;
           border-radius: 10px;
           border: 1px solid var(#BDBDBD);
           display: flex;
           align-items: center;
           box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
           flex-shrink: 0;
           /* z-index: 2px; */
         }
       
         .status .khung {
           border-radius: 10px;
           border: 1px solid #BDBDBD;
           background: #FFF;
           width: 100%;
           height: 94px;
           flex-shrink: 0;
           margin-bottom: 3%;
           padding: 3% 26px;
           align-items: center;
           display: grid;
           grid-template-columns: 60% 40%;
         }
         .khung {
           position: relative;
         }
         
         .khung::before {
           content: "";
           position: absolute;
           left: 0;
           top: 0;
           width: 9px;
           height: 92px;
           flex-shrink: 0;
           background: #C34439;
           opacity: 0;
           border-radius: 10px 0px 0 10px;
           transition: opacity 0.1s;
         }
         
         .khung:hover::before {
           opacity: 1;
           border: 10px;
         }
       
         .scroll{
           -ms-overflow-style: none;  /* IE and Edge */
           scrollbar-width: none;
           overflow: hidden;
           overflow-y: scroll;
           height: 585px; /* Điều chỉnh độ cao của khung để hiển thị thanh cuộn */
         }
       
         .status .khung .left{
           justify-content: start;
           grid-column: 1 / 2;
           grid-row: 1 / 2;
           color: #4E4E4E;
           font-family: Segoe UI;
           font-size: 20px;
           font-style: normal;
           font-weight: 400;
           line-height: normal;
         }
         .status .khung .time{
           justify-content: start;
           grid-column: 1 / 2;
           grid-row: 2 / 3;
           color: #BDBDBD;
           font-family: Segoe UI;
           font-size: 16px;
           font-style: normal;
           font-weight: 400;
           line-height: normal;
         }
         .status .khung .right {
           justify-content: end;
           grid-column: 2 / 3;
           grid-row: 1 / 3;
           color: #4E4E4E;
           font-size: 20px;
           font-style: normal;
           font-weight: 600;
           line-height: normal;
           
         }
          .container .bill-information {
           width: 100%;
           height: 100%;
           border-radius: 10px;
           border: 1px solid var(--gray);
           color: #4E4E4E;
           font-family: Segoe UI;
           /* padding:0 3% ; */
           font-style: normal;
           font-weight: 600;
           background-color: #FFF;
         }
         .container .bill-information {
           padding: 0px 27.4px;
         }
         .content{
           font-size: 20px;
           padding: 10px 0;
         }
         .information{
           padding: 10px 0;
           display: grid;
           grid-template-columns: 35% 35% auto;
           color: #4E4E4E;
           font-size: 14px;
           font-style: normal;
           font-weight: 400;
           line-height: normal;
           gap: 10px;
         }
         .information div{
           border-left:1px #BDBDBD solid ;
           
         }
         .information div:nth-child(3){
           border-right:1px #BDBDBD solid ;
         }
         .information div strong{
           color: #4E4E4E;
           font-family: Segoe UI;
           font-size: 16px;
           font-style: normal;
           font-weight: 600;
           line-height: normal;
           margin-top: 2%;
         }
         .information div .distance{
           margin-left: 3%;
           border-left: 0px solid;
           display: grid;
         }
         .showbill .khungsp{
           color: #4E4E4E;
           font-family: Segoe UI;
           font-size: 20px;
           font-style: normal;
           font-weight: 400;
           line-height: normal;
           display: grid;
           grid-template-columns: 15% 40% 25% auto;
           align-items: center;
           border-bottom:1px solid #BDBDBD ;
         }
         .tien{
           text-align: center;
           margin-right: 0%;
           /* background-color: #C34439; */
         }
         .showbill .khungsp img{
           width: 75px;
           height: 75px;
           flex-shrink: 0;
         }
         .showbill .money{
           text-align: right;
           font-family: Segoe UI;
           font-size: 24px;
           font-style: normal;
           font-weight: 400;
           line-height: normal;
           padding: 3% 0;
         }
         .money .price-sale{
           color: #C34439;
           padding-bottom: 3%;
         }
         .showbill .scroll{
           height: 385px;
         }
    </style>
</head>
<body>
    <main>
        <div class="container">
            <div class="status">
                <div class="menucon">
                 <ul>
                    <li id="ghim"><a href="#">Mới</a></li>
                    <li><a href="#">Đang chuẩn bị</a></li>
                    <li><a href="#">Giao hàng</a></li>
                 </ul>
                </div>
                <br>
                <div class="bill">
                    <div class="scroll">
                        <div class="khung">
                            <div class="left">
                                Đơn hàng #0001
    
                            </div>
                            <div class="time">
                                <img src="/chickcuisine/content/image/admin/Vector.png" alt="">
                                hhghh</div>
                            <div class="right">
                                <strong>100,000 vnđ</strong>
                            </div>
                        </div>
                        <div class="khung">
                            <div class="left">
                                Đơn hàng #0001
    
                            </div>
                            <div class="time">
                                <img src="/chickcuisine/content/image/admin/Vector.png" alt="">
                                hhghh</div>
                            <div class="right">
                                <strong>100,000 vnđ</strong>
                            </div>
                        </div>
                        <div class="khung">
                            <div class="left">
                                Đơn hàng #0001
    
                            </div>
                            <div class="time">
                                <img src="/chickcuisine/content/image/admin/Vector.png" alt="">
                                hhghh</div>
                            <div class="right">
                                <strong>100,000 vnđ</strong>
                            </div>
                        </div>
                        <div class="khung">
                            <div class="left">
                                Đơn hàng #0001
    
                            </div>
                            <div class="time">
                                <img src="/chickcuisine/content/image/admin/Vector.png" alt="">
                                hhghh</div>
                            <div class="right">
                                <strong>100,000 vnđ</strong>
                            </div>
                        </div>
                        <div class="khung">
                            <div class="left">
                                Đơn hàng #0001
    
                            </div>
                            <div class="time">
                                <img src="/chickcuisine/content/image/admin/Vector.png" alt="">
                                hhghh</div>
                            <div class="right">
                                <strong>100,000 vnđ</strong>
                            </div>
                        </div>
                        <div class="khung">
                            <div class="left">
                                Đơn hàng #0001
    
                            </div>
                            <div class="time">
                                <img src="/chickcuisine/content/image/admin/Vector.png" alt="">
                                hhghh</div>
                            <div class="right">
                                <strong>100,000 vnđ</strong>
                            </div>
                        </div>
                        <div class="khung">
                            <div class="left">
                                Đơn hàng #0001
    
                            </div>
                            <div class="time">
                                <img src="/chickcuisine/content/image/admin/Vector.png" alt="">
                                hhghh</div>
                            <div class="right">
                                <strong>100,000 vnđ</strong>
                            </div>
                        </div>
                        <div class="khung">
                            <div class="left">
                                Đơn hàng #0001
    
                            </div>
                            <div class="time">
                                <img src="/chickcuisine/content/image/admin/Vector.png" alt="">
                                hhghh</div>
                            <div class="right">
                                <strong>100,000 vnđ</strong>
                            </div>
                        </div>
                    </div>

                    
                </div>
                
            </div>
            <div class="bill-information">
                <div class="content">
                    Thông tin đơn hàng
                </div>
                <div class="information">
                    <div class="time">
                        <div class="distance">
                            Thời gian chuẩn bị<br>
                            <strong>00h : 25m 00s</strong>
                        </div>
                    </div>
                    <div class="address">
                        <div class="distance">
                            Địa chỉ<br>
                            <strong>24/5 Tân Chánh Hiệp 24/5</strong>
                        </div>
                        
                    </div>
                    <div class="number-phone">
                        <div class="distance">
                            Số điện thoại<br>
                            <strong>0903252xxx</strong>
                        </div>
                        
                    </div>
                </div>
                <div class="showbill">
                    <div class="scroll">
                        
                        <div class="khungsp">
                            <img src="/chickcuisine/content/image/food.png" alt="">
                            <div class="name">
                                Mỳ Ramen
                            </div>
                            <strong>0</strong>
                            <div class="tien">
                                35.000 vnd
                            </div>
                        </div>
                        <div class="khungsp">
                            <img src="/chickcuisine/content/image/food.png" alt="">
                            <div class="name">
                                Mỳ Ramen
                            </div>
                            <strong>0</strong>
                            <div class="tien">
                                35.000 vnd
                            </div>
                        </div>
                        <div class="khungsp">
                            <img src="/chickcuisine/content/image/food.png" alt="">
                            <div class="name">
                                Mỳ Ramen
                            </div>
                            <strong>0</strong>
                            <div class="tien">
                                35.000 vnd
                            </div>
                        </div>
                        <div class="khungsp">
                            <img src="/chickcuisine/content/image/food.png" alt="">
                            <div class="name">
                                Mỳ Ramen
                            </div>
                            <strong>0</strong>
                            <div class="tien">
                                35.000 vnd
                            </div>
                        </div>
                        <div class="khungsp">
                            <img src="/chickcuisine/content/image/food.png" alt="">
                            <div class="name">
                                Mỳ Ramen
                            </div>
                            <strong>0</strong>
                            <div class="tien">
                                35.000 vnd
                            </div>
                        </div>
                        <div class="khungsp">
                            <img src="/chickcuisine/content/image/food.png" alt="">
                            <div class="name">
                                Mỳ Ramen
                            </div>
                            <strong>0</strong>
                            <div class="tien">
                                35.000 vnd
                            </div>
                        </div>
                        <div class="khungsp">
                            <img src="/chickcuisine/content/image/food.png" alt="">
                            <div class="name">
                                Mỳ Ramen
                            </div>
                            <strong>0</strong>
                            <div class="tien">
                                35.000 vnd
                            </div>
                        </div>
                        <div class="khungsp">
                            <img src="/chickcuisine/content/image/food.png" alt="">
                            <div class="name">
                                Mỳ Ramen
                            </div>
                            <strong>0</strong>
                            <div class="tien">
                                35.000 vnd
                            </div>
                        </div>
                        <div class="khungsp">
                            <img src="/chickcuisine/content/image/food.png" alt="">
                            <div class="name">
                                Mỳ Ramen
                            </div>
                            <strong>0</strong>
                            <div class="tien">
                                35.000 vnd
                            </div>
                        </div>
                        <div class="khungsp">
                            <img src="/chickcuisine/content/image/food.png" alt="">
                            <div class="name">
                                Mỳ Ramen
                            </div>
                            <strong>0</strong>
                            <div class="tien">
                                35.000 vnd
                            </div>
                        </div>
                        <div class="khungsp">
                            <img src="/chickcuisine/content/image/food.png" alt="">
                            <div class="name">
                                Mỳ Ramen
                            </div>
                            <strong>0</strong>
                            <div class="tien">
                                35.000 vnd
                            </div>
                        </div>
                    </div>
                    
                    <div class="money">
                        <div class="price-sale">
                            Giảm giá: - 3,500 vnđ
                        </div>
                        <strong>Tổng: 35,000 vnđ</strong>
                    </div>
                
                </div>
            
            </div>
        </div>
    </main>
</body>
</html>