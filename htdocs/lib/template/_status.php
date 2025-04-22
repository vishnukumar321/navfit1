<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>User Panel</title>
  <link rel="stylesheet" href="/navfit1/htdocs/lib/template/css/status.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="panel-body">

    <!-- <aside>
        <h2 class="title">ZBank.</h2>

        <ul class="sidebar-container">

            <li class="sidebar-object active">
            <i class="fas fa-home"></i>
                &nbsp;&nbsp; Dashboard
            </li> 

            <div class="active-invert"></div>
            <div class="active-invert2"></div>

            <li class="sidebar-object other">
                <i class="fas fa-chart-pie-alt"></i>
                &nbsp;&nbsp; statistics
            </li>

            <li class="sidebar-object other">
                <i class="fas fa-wallet"></i>
                &nbsp;&nbsp; wallet
            </li>

            <li class="sidebar-object other">
                <i class="fas fa-inbox"></i>
                &nbsp;&nbsp; Message
            </li>     
            
            <li class="sidebar-object other">
                <i class="fas fa-users"></i>
                &nbsp;&nbsp; Profile
            </li>
            
            <li class="sidebar-object other">
                <i class="fas fa-heart"></i>
                &nbsp;&nbsp; Favorites
            </li>
            
            <li class="sidebar-object other">
                <i class="fas fa-exchange-alt"></i>
                &nbsp;&nbsp; Transfers
            </li>

            

        </ul>

        <div class="logout">
            <i class="fas fa-sign-out-alt"></i> &nbsp;Log Out
        </div>

    </aside> -->

        <div class="center-div">
            
            <nav class="nav">
            <span class="welcome-title">Hi Mahdiyar,</span> <span class="welcome"> Welcome back</span>
            <input class="search-box" placeholder="Search" type="text" maxlength="30"> <i class="fal fa-search"></i>
            </nav>

            <div class="visa">
                <img src="https://drive.google.com/uc?export=download&id=11AC_4Vf_QK1X-mO2d49btiaAOxnSKWOs" alt="" class="visa-img">
                <span class="cart-number">4111&nbsp;&nbsp;1581&nbsp;&nbsp;3121&nbsp;&nbsp;8761</span>
                <div class="info-visa"><strong>Card Holder </strong> <br> Rakib Kowshar</div>
                <div class="info-visa"><strong>Exp date </strong> <br> 05/22</div>
            </div>

            <div class="users">
                <nav class="users-nav">
                    <span class="title-users">Send money</span> 
                    <span class="users-fliter">Monthly ‌&nbsp; <i class="fa fa-angle-down"></i></span> 
                </nav>
                    <div class="user">
                        <img class="user-img" src="https://drive.google.com/uc?export=download&id=12EEyVmSJQ2k2qDpoQxu5w-1YC3CtXrY3" alt=""> <span class="user-family">Erfan Felan</span> <span class="user-price">$25,000</span>
                    </div>      
                     <div class="user">
                        <img class="user-img" src="https://drive.google.com/uc?export=download&id=1bzvddZUoMz9E6YXb3oPMu7HwmQHAA8LW" alt=""> <span class="user-family">Naryan Felan</span> <span class="user-price">$1,000</span>
            </div>

    
        </div>

        <div class="column-chart">
            <span class="chart-title">Income</span>
            <span class="chart-fliter">Recent ‌&nbsp; <i class="fa fa-angle-down"></i></span> 
            <div class="months">Apr</div> <div class="column"></div>
            <div class="months">May</div> <div class="column column-2"></div>
            <div class="months">Jun</div> <div class="column column-3"></div>
            <div class="months">Aug</div> <div class="column column-4"></div>
            <div class="months">Sep</div> <div class="column column-5"></div>
        </div>

        <div class="column-circle">
            <span class="chart-title">Type of expenses</span>
            <span class="chart-circle-fliter">Recent ‌&nbsp; <i class="fa fa-angle-down"></i></span> 

            <svg class="chart-circle" width="130" height="138" viewBox="0 0 130 138" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="path-1-inside-1" fill="white">
                <path d="M125.384 73C127.934 73 130.017 75.0691 129.836 77.6118C129.095 88.0397 125.846 98.1595 120.338 107.098C114.021 117.35 104.981 125.646 94.2246 131.06C83.4687 136.474 71.4203 138.793 59.423 137.76C47.4257 136.727 35.9513 132.382 26.2794 125.208C16.6074 118.035 9.11822 108.316 4.64699 97.1353C0.175766 85.9546 -1.10172 73.7515 0.957014 61.8871C3.01575 50.0227 8.32976 38.9635 16.3064 29.9427C23.2616 22.0771 32.0026 16.0309 41.7663 12.2942C44.147 11.383 46.7318 12.7762 47.4717 15.2156V15.2156C48.2117 17.6549 46.8249 20.2143 44.455 21.1534C36.3242 24.3753 29.0437 29.4735 23.2218 36.0576C16.3779 43.7973 11.8186 53.2859 10.0523 63.4654C8.2859 73.6448 9.38196 84.1148 13.2182 93.7077C17.0544 103.301 23.48 111.639 31.7784 117.794C40.0767 123.948 49.9216 127.677 60.215 128.563C70.5085 129.45 80.8458 127.459 90.0742 122.814C99.3026 118.169 107.059 111.052 112.479 102.256C117.09 94.7733 119.855 86.3264 120.578 77.6104C120.789 75.0701 122.835 73 125.384 73V73Z"/>
                </mask>
                <path d="M125.384 73C127.934 73 130.017 75.0691 129.836 77.6118C129.095 88.0397 125.846 98.1595 120.338 107.098C114.021 117.35 104.981 125.646 94.2246 131.06C83.4687 136.474 71.4203 138.793 59.423 137.76C47.4257 136.727 35.9513 132.382 26.2794 125.208C16.6074 118.035 9.11822 108.316 4.64699 97.1353C0.175766 85.9546 -1.10172 73.7515 0.957014 61.8871C3.01575 50.0227 8.32976 38.9635 16.3064 29.9427C23.2616 22.0771 32.0026 16.0309 41.7663 12.2942C44.147 11.383 46.7318 12.7762 47.4717 15.2156V15.2156C48.2117 17.6549 46.8249 20.2143 44.455 21.1534C36.3242 24.3753 29.0437 29.4735 23.2218 36.0576C16.3779 43.7973 11.8186 53.2859 10.0523 63.4654C8.2859 73.6448 9.38196 84.1148 13.2182 93.7077C17.0544 103.301 23.48 111.639 31.7784 117.794C40.0767 123.948 49.9216 127.677 60.215 128.563C70.5085 129.45 80.8458 127.459 90.0742 122.814C99.3026 118.169 107.059 111.052 112.479 102.256C117.09 94.7733 119.855 86.3264 120.578 77.6104C120.789 75.0701 122.835 73 125.384 73V73Z" stroke="url(#paint0_linear)" stroke-opacity="0.8" stroke-width="28" mask="url(#path-1-inside-1)"/>
                <mask id="path-2-inside-2" fill="white">
                <path d="M62.86 12.1452C62.7886 9.65621 64.7507 7.56429 67.2386 7.66563C79.9425 8.18312 92.2526 12.4197 102.617 19.8981C112.98 27.3765 120.881 37.7238 125.376 49.6169C126.257 51.9461 124.89 54.4675 122.505 55.1843V55.1843C120.121 55.9011 117.624 54.5405 116.717 52.2213C112.81 42.2238 106.096 33.5282 97.3401 27.2103C88.5844 20.8923 78.2158 17.261 67.4963 16.7042C65.0097 16.5751 62.9313 14.6342 62.86 12.1452V12.1452Z"/>
                </mask>
                <path d="M62.86 12.1452C62.7886 9.65621 64.7507 7.56429 67.2386 7.66563C79.9425 8.18312 92.2526 12.4197 102.617 19.8981C112.98 27.3765 120.881 37.7238 125.376 49.6169C126.257 51.9461 124.89 54.4675 122.505 55.1843V55.1843C120.121 55.9011 117.624 54.5405 116.717 52.2213C112.81 42.2238 106.096 33.5282 97.3401 27.2103C88.5844 20.8923 78.2158 17.261 67.4963 16.7042C65.0097 16.5751 62.9313 14.6342 62.86 12.1452V12.1452Z" stroke="url(#paint1_linear)" stroke-opacity="0.7" stroke-width="28" mask="url(#path-2-inside-2)"/>
                <path d="M43.8203 74.3379C43.8203 73.7389 43.6087 73.2344 43.1855 72.8242C42.7689 72.4141 42.0625 72.043 41.0664 71.7109C39.6797 71.2878 38.6673 70.7376 38.0293 70.0605C37.3978 69.377 37.082 68.5111 37.082 67.4629C37.082 66.3952 37.3913 65.5195 38.0098 64.8359C38.6348 64.1523 39.4909 63.7454 40.5781 63.6152V61.4766H42.0332V63.625C43.127 63.7747 43.9766 64.2337 44.582 65.002C45.194 65.7702 45.5 66.8216 45.5 68.1562H43.7031C43.7031 67.2383 43.485 66.5091 43.0488 65.9688C42.6126 65.4284 42.0234 65.1582 41.2812 65.1582C40.5065 65.1582 39.9141 65.36 39.5039 65.7637C39.0938 66.1608 38.8887 66.7174 38.8887 67.4336C38.8887 68.0977 39.1035 68.6283 39.5332 69.0254C39.9694 69.416 40.6823 69.7741 41.6719 70.0996C42.668 70.4186 43.4427 70.7734 43.9961 71.1641C44.556 71.5482 44.9661 71.9974 45.2266 72.5117C45.4935 73.026 45.627 73.6283 45.627 74.3184C45.627 75.4186 45.2949 76.304 44.6309 76.9746C43.9733 77.6452 43.0488 78.0423 41.8574 78.166V80.0312H40.4121V78.166C39.2012 78.0553 38.2507 77.6257 37.5605 76.877C36.877 76.1217 36.5352 75.0996 36.5352 73.8105H38.3418C38.3418 74.7155 38.5794 75.4121 39.0547 75.9004C39.5299 76.3887 40.2038 76.6328 41.0762 76.6328C41.929 76.6328 42.5996 76.4277 43.0879 76.0176C43.5762 75.6074 43.8203 75.0475 43.8203 74.3379ZM54.9629 63.7715V65.3047H54.6309C53.2246 65.3307 52.1048 65.7474 51.2715 66.5547C50.4382 67.362 49.9564 68.498 49.8262 69.9629C50.5749 69.1035 51.597 68.6738 52.8926 68.6738C54.1296 68.6738 55.1159 69.11 55.8516 69.9824C56.5938 70.8548 56.9648 71.9811 56.9648 73.3613C56.9648 74.8262 56.5645 75.998 55.7637 76.877C54.9694 77.7559 53.9017 78.1953 52.5605 78.1953C51.1999 78.1953 50.0964 77.6745 49.25 76.6328C48.4036 75.5846 47.9805 74.237 47.9805 72.5898V71.8965C47.9805 69.2793 48.5371 67.2806 49.6504 65.9004C50.7702 64.5137 52.4336 63.804 54.6406 63.7715H54.9629ZM52.5898 70.1777C51.9714 70.1777 51.4017 70.3633 50.8809 70.7344C50.36 71.1055 49.9987 71.571 49.7969 72.1309V72.7949C49.7969 73.9668 50.0605 74.9108 50.5879 75.627C51.1152 76.3431 51.7728 76.7012 52.5605 76.7012C53.3743 76.7012 54.0124 76.4017 54.4746 75.8027C54.9434 75.2038 55.1777 74.4193 55.1777 73.4492C55.1777 72.4727 54.9401 71.6849 54.4648 71.0859C53.9961 70.4805 53.3711 70.1777 52.5898 70.1777ZM59.2305 80.832L58.2051 80.1289C58.8171 79.276 59.1361 78.3971 59.1621 77.4922V75.8613H60.9297V77.2773C60.9297 77.9349 60.7669 78.5924 60.4414 79.25C60.1224 79.9076 59.7188 80.4349 59.2305 80.832ZM70.6562 73.2246H72.6289V74.6992H70.6562V78H68.8398V74.6992H62.3652V73.6348L68.7324 63.7812H70.6562V73.2246ZM64.416 73.2246H68.8398V66.252L68.625 66.6426L64.416 73.2246ZM82.8828 67.4922C82.8828 68.2018 82.694 68.8333 82.3164 69.3867C81.9453 69.9401 81.4408 70.373 80.8027 70.6855C81.5449 71.0046 82.1309 71.4701 82.5605 72.082C82.9967 72.694 83.2148 73.3874 83.2148 74.1621C83.2148 75.3926 82.7982 76.3724 81.9648 77.1016C81.138 77.8307 80.0475 78.1953 78.6934 78.1953C77.3262 78.1953 76.2292 77.8307 75.4023 77.1016C74.582 76.3659 74.1719 75.3861 74.1719 74.1621C74.1719 73.3939 74.3802 72.7005 74.7969 72.082C75.2201 71.4635 75.8027 70.9948 76.5449 70.6758C75.9134 70.3633 75.4154 69.9303 75.0508 69.377C74.6862 68.8236 74.5039 68.1953 74.5039 67.4922C74.5039 66.2943 74.888 65.3438 75.6562 64.6406C76.4245 63.9375 77.4368 63.5859 78.6934 63.5859C79.9434 63.5859 80.9525 63.9375 81.7207 64.6406C82.4954 65.3438 82.8828 66.2943 82.8828 67.4922ZM81.4082 74.123C81.4082 73.3288 81.1543 72.681 80.6465 72.1797C80.1452 71.6784 79.4876 71.4277 78.6738 71.4277C77.86 71.4277 77.2057 71.6751 76.7109 72.1699C76.2227 72.6647 75.9785 73.3158 75.9785 74.123C75.9785 74.9303 76.2161 75.5651 76.6914 76.0273C77.1732 76.4896 77.8405 76.7207 78.6934 76.7207C79.5397 76.7207 80.2038 76.4896 80.6855 76.0273C81.1673 75.5586 81.4082 74.9238 81.4082 74.123ZM78.6934 65.0703C77.9837 65.0703 77.4076 65.2917 76.9648 65.7344C76.5286 66.1706 76.3105 66.7663 76.3105 67.5215C76.3105 68.2441 76.5254 68.8301 76.9551 69.2793C77.3913 69.722 77.9707 69.9434 78.6934 69.9434C79.416 69.9434 79.9922 69.722 80.4219 69.2793C80.8581 68.8301 81.0762 68.2441 81.0762 67.5215C81.0762 66.7988 80.8516 66.2096 80.4023 65.7539C79.9531 65.2982 79.3835 65.0703 78.6934 65.0703ZM94.4062 71.9355C94.4062 74.0514 94.0449 75.6237 93.3223 76.6523C92.5996 77.681 91.4701 78.1953 89.9336 78.1953C88.4167 78.1953 87.2936 77.694 86.5645 76.6914C85.8353 75.6823 85.4577 74.1784 85.4316 72.1797V69.7676C85.4316 67.6777 85.793 66.125 86.5156 65.1094C87.2383 64.0938 88.3711 63.5859 89.9141 63.5859C91.444 63.5859 92.5703 64.0775 93.293 65.0605C94.0156 66.0371 94.3867 67.5475 94.4062 69.5918V71.9355ZM92.5996 69.4648C92.5996 67.9349 92.3848 66.8216 91.9551 66.125C91.5254 65.4219 90.8451 65.0703 89.9141 65.0703C88.9896 65.0703 88.3158 65.4186 87.8926 66.1152C87.4694 66.8118 87.2513 67.8828 87.2383 69.3281V72.2188C87.2383 73.7552 87.4596 74.8913 87.9023 75.627C88.3516 76.3561 89.0286 76.7207 89.9336 76.7207C90.8255 76.7207 91.4863 76.3757 91.916 75.6855C92.3522 74.9954 92.5801 73.9082 92.5996 72.4238V69.4648Z" fill="#F5F5F5"/>
                <defs>
                <linearGradient id="paint0_linear" x1="58.5" y1="46" x2="130" y2="92.5" gradientUnits="userSpaceOnUse">
                <stop stop-color="#C7F2F0" stop-opacity="0.86"/>
                <stop offset="1" stop-color="#F14141" stop-opacity="0.68"/>
                </linearGradient>
                <linearGradient id="paint1_linear" x1="73.4934" y1="25.7686" x2="128.939" y2="63.5319" gradientUnits="userSpaceOnUse">
                <stop stop-color="#AF699C"/>
                <stop offset="1" stop-color="#9A55BB" stop-opacity="0.68"/>
                </linearGradient>
                </defs>
            </svg>
                
            <div class="chart-circle-data"><div class="circle-chart-1"></div><div class="chart-1-title">Shopping</div><div class="chart-1-int">66%</div></div>
            <div class="chart-circle-data"><div class="circle-chart-2"></div><div class="chart-1-title">Transport</div><div class="chart-1-int">26%</div></div>

        </div>

    
    
    </div>
    
    <div class="profile">
        <img class="img-profile" src="https://drive.google.com/uc?export=download&id=1pAsdIwosYAGwwgMT65nr9js0c3aWqFWp" alt=""> <div class="username">MahdiyarGHD</div> <div class="info">FrontEnd Developer</div>
         <i class="fas fa-ellipsis-v"></i>
    </div>

    <hr class="hr">

    <div class="orders">
        <div class="order-title">Transaction</div> <span class="orders-fliter">Monthly ‌&nbsp; <i class="fa fa-angle-down"></i></span> 
        
        <div class="order">
        <img class="order-img" src="https://drive.google.com/uc?export=download&id=1pAsdIwosYAGwwgMT65nr9js0c3aWqFWp" alt=""> <div class="order-name">Dribble Pro</div> <div class="order-info">Apr 18,2020</div>
        <div class="order-price">$25</div>
        </div>        

        <hr class="hr-2">
        <div class="order">
        <img class="order-img" src="https://drive.google.com/uc?export=download&id=1pAsdIwosYAGwwgMT65nr9js0c3aWqFWp" alt=""> <div class="order-name">Dribble Pro</div> <div class="order-info">Apr 18,2020</div>
        <div class="order-price">$25</div>
        </div>
        
        <hr class="hr-2">
        <div class="order">
        <img class="order-img" src="https://drive.google.com/uc?export=download&id=1pAsdIwosYAGwwgMT65nr9js0c3aWqFWp" alt=""> <div class="order-name">Dribble Pro</div> <div class="order-info">Apr 18,2020</div>
        <div class="order-price">$25</div>
        </div>
        
        <hr class="hr-2">
        <div class="order">
        <img class="order-img" src="https://drive.google.com/uc?export=download&id=1pAsdIwosYAGwwgMT65nr9js0c3aWqFWp" alt=""> <div class="order-name">Dribble Pro</div> <div class="order-info">Apr 18,2020</div>
        <div class="order-price">$25</div>
        </div>
        <hr class="hr-2">

        <div class="footer-title">Track your acc anytime anywhere</div>

        <img class="img-footer" src="https://drive.google.com/uc?export=download&id=1tlgvapU1WfGnhnf-LMjJC8yLV6Xipi5I" alt="">

    </div>
<!-- partial -->
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
