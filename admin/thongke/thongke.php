<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý bán hàng</title>
    <style>
        .statistics {
    display: grid;
    width: 100%;
    grid-template-columns: 69% 30%;
    gap: 15px;
    height: 300px;
}
.statistics>* {
    background-color: white;
    border-radius: 10px;
    padding: 10px;
    border: 1px solid var(--gray);
}
.statistics .revenue {
    display: grid;
    grid-template-columns: 35% 65%;
}
.statistics .revenue .left {
    display: block;
    width: 100%;
    grid-column: 1 / 2;
    grid-row: 1 / 2;
}
.statistics .revenue .left p {
    height: 20px;
}
.statistics .revenue .right {
    width: 100%;
    height: 100%;
    grid-column: 2 / 3;
    grid-row: 1 / 2;
    margin-top: 20px;
}
.statistics .revenue .bottom {
    grid-column: 1 / 3;
    grid-row: 2 / 3;
}
.statistics .revenue p {
    display: block;
    width: 100%;
    text-align: left;
}
.statistics .category {
    display: block;
}
.statistics .category>p {
    height: 20px;
}
.statistics-total {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}
.statistics-total>* {
    width: 300px;
    height: 120px;
    border-radius: 10px;
    margin-top: 15px;
    position: relative;
}
.statistics-total .product {
    background: linear-gradient(-45deg, #6692D9 25.73%, #45C4F1 72.52%);
}
.statistics-total .category {
    background: linear-gradient(-45deg, #5546B9 26.29%, #875FC0 74.94%);
}
.statistics-total .user {
    background: linear-gradient(-45deg, #B954A4 28.01%, #EC4887 66.14%);
}
.statistics-total .invoice {
    background: linear-gradient(-45deg, #F57F59 32.22%, #FFB82C 66.53%);
}
.statistics-total .feedback {
    background: linear-gradient(-45deg, #57D2CA 33.73%, #45F1A9 72.23%);
}
.statistics-total svg{
    fill: white;
    position: absolute;
    top: 10px;
    left: 10px;
    filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
}
.statistics-total>* .name {
    color: white;
    font-size: 20px;
    position: absolute;
    bottom: 10px;
    left: 10px;
}
.statistics-total>* .count {
    color: white;
    font-size: 30px;
    font-weight: bold;
    position: absolute;
    top: 50%;
    transform: translate(0, -50%);
    right: 10px;
    text-align: right;
}



/*-----------*/
/* .chart {
    background-color: red;
    height: 200px;
    width: 100%;
} */
    </style>
</head>
<body>
    <main>
        <div class="statistics">
            <div class="revenue">
                <div class="left">
                    <p>Thống kê doanh thu</p>
                    <p style="color: var(--gray); font-size: 15px; margin-bottom: 20px;">Toàn bộ</p>
                    <p class="total-revenue-current-monthly" style="font-weight: bold; font-size: 25px; margin-bottom: 10px;">100.000.000 vnđ</p>
                    <p style="color: var(--gray); font-size: 15px; margin-bottom: 20px;">Tổng doanh thu tháng hiện tại</p>
                    <p class="total-order-current-monthly" style="font-weight: bold; font-size: 25px; margin-bottom: 10px;">425</p>
                    <p style="color: var(--gray); font-size: 15px; margin-bottom: 20px;">Tổng đơn hàng tháng hiện tại</p>
                </div>
                <div class="right chart" id="revenue-chart"></div>
                <div class="bottom"></div>
            </div>
            <div class="category">
                <p>Thống kê danh mục</p>
                <div id="category-chart" class="chart"></div>
            </div>
        </div>
        <div class="statistics-total">
            <div class="product">
                <svg width="45" height="45" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 1.25C0 0.55965 0.55965 0 1.25 0H13.75C14.4404 0 15 0.55965 15 1.25V2.5C15 3.19035 14.4404 3.75 13.75 3.75H1.25C0.55965 3.75 0 3.19035 0 2.5V1.25Z"/>
                    <path d="M1.25 5V12.5C1.25 13.8807 2.36929 15 3.75 15H11.25C12.6308 15 13.75 13.8807 13.75 12.5V5H1.25ZM6.25 6.25H8.75C9.09518 6.25 9.375 6.52982 9.375 6.875C9.375 7.22018 9.09518 7.5 8.75 7.5H6.25C5.90483 7.5 5.625 7.22018 5.625 6.875C5.625 6.52982 5.90483 6.25 6.25 6.25Z"/>
                </svg>
                <p class="count">500</p>
                <p class="name">Tổng sản phẩm</p>
            </div>
            <div class="category">
                <svg width="39" height="45" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.971832 14.8938C0.556611 15.171 0 14.8734 0 14.3741V2.51287C0 1.13422 1.1163 0.0159194 2.49494 0.0134495L9.9932 4.05791e-06C11.3736 -0.0024567 12.4946 1.11456 12.4971 2.49495V14.3741C12.4971 14.8734 11.9405 15.171 11.5253 14.8938L6.24855 11.3705L0.971832 14.8938Z"/>
                </svg>
                <p class="count">500</p>
                <p class="name">Tổng danh mục</p>
            </div>
            <div class="user">
                <svg width="36" height="45" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.75 7.5C10.9926 7.5 12 8.50735 12 9.75C12 11.4241 11.3115 12.7654 10.1818 13.6722C9.06987 14.5647 7.57962 15 6 15C4.42038 15 2.93013 14.5647 1.81823 13.6722C0.688455 12.7654 0 11.4241 0 9.75C0 8.58051 0.892315 7.61933 2.03328 7.5103L2.24997 7.5H9.75ZM6 0C7.65686 0 9 1.34314 9 3C9 4.65686 7.65686 6 6 6C4.34314 6 3 4.65686 3 3C3 1.34314 4.34314 0 6 0Z"/>
                </svg>
                <p class="count">500</p>
                <p class="name">Tổng người dùng</p>
            </div>
            <div class="invoice">
                <svg width="45" height="45" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.14286 0C0.959389 0 0 0.959389 0 2.14286V12.8571C0 14.0406 0.959389 15 2.14286 15H12.8571C14.0406 15 15 14.0406 15 12.8571V2.14286C15 0.959389 14.0406 0 12.8571 0H2.14286ZM4.82143 4.55357C4.82143 4.99737 4.46165 5.35714 4.01786 5.35714C3.57406 5.35714 3.21429 4.99737 3.21429 4.55357C3.21429 4.10978 3.57406 3.75 4.01786 3.75C4.46165 3.75 4.82143 4.10978 4.82143 4.55357ZM4.01786 8.57143C3.57406 8.57143 3.21429 8.21164 3.21429 7.76786C3.21429 7.32406 3.57406 6.96429 4.01786 6.96429C4.46165 6.96429 4.82143 7.32406 4.82143 7.76786C4.82143 8.21164 4.46165 8.57143 4.01786 8.57143ZM4.82143 10.9821C4.82143 11.4259 4.46165 11.7857 4.01786 11.7857C3.57406 11.7857 3.21429 11.4259 3.21429 10.9821C3.21429 10.5384 3.57406 10.1786 4.01786 10.1786C4.46165 10.1786 4.82143 10.5384 4.82143 10.9821ZM6.96429 4.28571H11.25C11.5458 4.28571 11.7857 4.52556 11.7857 4.82143C11.7857 5.11729 11.5458 5.35714 11.25 5.35714H6.96429C6.66842 5.35714 6.42857 5.11729 6.42857 4.82143C6.42857 4.52556 6.66842 4.28571 6.96429 4.28571ZM6.42857 8.03571C6.42857 7.73989 6.66842 7.5 6.96429 7.5H11.25C11.5458 7.5 11.7857 7.73989 11.7857 8.03571C11.7857 8.33154 11.5458 8.57143 11.25 8.57143H6.96429C6.66842 8.57143 6.42857 8.33154 6.42857 8.03571ZM6.96429 10.7143H11.25C11.5458 10.7143 11.7857 10.9542 11.7857 11.25C11.7857 11.5458 11.5458 11.7857 11.25 11.7857H6.96429C6.66842 11.7857 6.42857 11.5458 6.42857 11.25C6.42857 10.9542 6.66842 10.7143 6.96429 10.7143Z"/>
                </svg>
                <p class="count">500</p>
                <p class="name">Tổng đơn hàng</p>
            </div>
            <div class="feedback">
                <svg width="45" height="45" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.96875 9.375C8.74537 9.375 9.375 10.0046 9.375 10.7812V11.25C9.375 13.0982 7.63172 15 4.6875 15C1.74329 15 0 13.0982 0 11.25V10.7812C0 10.0046 0.629597 9.375 1.40625 9.375H7.96875ZM4.6875 3.28125C6.11136 3.28125 7.26562 4.43552 7.26562 5.85938C7.26562 7.28323 6.11136 8.4375 4.6875 8.4375C3.26364 8.4375 2.10938 7.28323 2.10938 5.85938C2.10938 4.43552 3.26364 3.28125 4.6875 3.28125ZM13.125 0C14.1135 0 14.9233 0.764887 14.9948 1.73507L15 1.875V3.75C15 4.73846 14.2351 5.54828 13.265 5.61985L13.125 5.625H11.7178L10.5947 7.1248C10.0984 7.78687 9.09047 7.51866 8.92903 6.77274L8.91244 6.6681L8.907 6.5625L8.90625 5.56406L8.8335 5.54561C8.15344 5.3408 7.63613 4.76018 7.52306 4.04513L7.50516 3.88993L7.5 3.75V1.875C7.5 0.886537 8.26491 0.0767157 9.23503 0.00514694L9.375 0H13.125Z"/>
                </svg>
                <p class="count">500</p>
                <p class="name">Tổng đánh giá</p>
            </div>
        </div>
    </main>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ['Year', 'Sales', 'Expenses'],
            ['2004',  1000,      400],
            ['2005',  1170,      460],
            ['2006',  660,       1120],
            ['2007',  1030,      540]
          ]);
  
          var options = {
            animation: {
                duration: 1000,
                easing: 'out',
                startup: true
            },
            curveType: 'function',
            legend: { position: 'bottom' }
          };
  
          var chart = new google.visualization.LineChart(document.getElementById('revenue-chart'));
  
          chart.draw(data, options);
        }
      </script>
      <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
  
        function drawChart() {
  
          var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Work',     11],
            ['Eat',      2],
            ['Commute',  2],
            ['Watch TV', 2],
            ['Sleep',    7]
          ]);
  
          var options = {
            is3D: 'true',
            pieSliceText: 'none'
          };
  
          var chart = new google.visualization.PieChart(document.getElementById('category-chart'));
  
          chart.draw(data, options);
        }
      </script>
</body>
</html>