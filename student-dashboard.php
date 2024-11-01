<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CareerSpark</title>

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

        <link rel="stylesheet" href="style.css">

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    </head>

    <body>
        
        <input type="checkbox" id="menu-toggle">
        <div class="sidebar">
            <div class="side-header">
                <h3>CareerSpark</h3>
            </div>
            
            <div class="side-content">
                <div class="profile">
                    <div class="profile-img bg-img" style="background-image: url(img/3.jpeg)"></div>
                    <h4>John Doe</h4>
                    <small>Student</small>
                </div>
    
                <div class="side-menu">
                    <ul>
                        <li>
                            <a href="index.php">
                                 <span class="las la-home"></span>
                                 <small>Home</small>
                             </a>
                         </li
                        <li>
                           <a href="" class="active">
                                <span class="las la-home"></span>
                                <small>Dashboard</small>
                            </a>
                        </li>
                        <li>
                           <a href="">
                                <span class="las la-tasks"></span>
                                <small>Profile</small>
                            </a>
                        </li>
    
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="main-content">
            
            <header>
                <div class="header-content">
                    <label for="menu-toggle">
                        <span class="las la-bars"></span>
                    </label>
                    
                    <div class="header-menu">
                        <label for="">
                            <span class="las la-search"></span>
                        </label>
                        
                        <div class="user">
                            <div class="bg-img" style="background-image: url(img/1.jpeg)"></div>
                            
                            <span class="las la-power-off"></span>
                            <span>Logout</span>
                        </div>
                    </div>
                </div>
            </header>

            <main>
                
                <div class="page-header">
                    <h1>Dashboard</h1>
                    <small>Welcome to your Dashboard</small>
                </div>
                
                <div class="page-content">
    
                    <div class="records table-responsive">
    
                        <div class="record-header">
                            <div class="add">
                                <a href="institutions.php"><button>Apply</button></a>
                            </div>
                            <div class="add">
                                <a href=""><button>View Admissions</button></a>
                            </div>
                        </div>
    
                        <div>
                            <table width="100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th><span class="las la-sort"></span> COURSE</th>
                                        <th><span class="las la-sort"></span> APPLICANTION PROGRESS</th>
                                        <th><span class="las la-sort"></span> DURATION</th>
                                        <th><span class="las la-sort"></span> ACTIONS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>
                                            <div class="client">
                                               <div class="client-img bg-img" style="background-image: url(img/3.jpeg)"></div>
                                                <div class="client-info">
                                                    <h4>Bachelor of Arts in Fashion & Retailing</h4>
                                                    <small>Faculty of Fashion</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            PENDING
                                        </td>
                                        <td>
                                            2 years
                                        </td>
                                        <td>
                                            <div class="actions">
                                                <span class="lab la-telegram-plane"></span>
                                                <span class="las la-eye"></span>
                                                <span class="las la-ellipsis-v"></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>
                                            <div class="client">
                                               <div class="client-img bg-img" style="background-image: url(img/1.jpeg)"></div>
                                                <div class="client-info">
                                                    <h4>Bachelor of Arts in Interior Architecture</h4>
                                                    <small>Faculty of Science and Technology</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            PENDING
                                        </td>
                                        <td>
                                            4½ years
                                        </td>
                                        <td>
                                            <div class="actions">
                                                <span class="lab la-telegram-plane"></span>
                                                <span class="las la-eye"></span>
                                                <span class="las la-ellipsis-v"></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>
                                            <div class="client">
                                               <div class="client-img bg-img" style="background-image: url(img/1.jpeg)"></div>
                                                <div class="client-info">
                                                    <h4>Bachelor of Science in Information Technology</h4>
                                                    <small>Faculty of Engineering and Technology</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            APPROVED
                                        </td>
                                        <td>
                                            3 years
                                        </td>
                                        <td>
                                            <div class="actions">
                                                <span class="lab la-telegram-plane"></span>
                                                <span class="las la-eye"></span>
                                                <span class="las la-ellipsis-v"></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>04</td>
                                        <td>
                                            <div class="client">
                                               <div class="client-img bg-img" style="background-image: url(img/3.jpeg)"></div>
                                                <div class="client-info">
                                                    <h4>Diploma in Creative Advertising</h4>
                                                    <small>Faculty of Business and Communication</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            PENDING
                                        </td>
                                        <td>
                                            2 years
                                        </td>
                                        <td>
                                            <div class="actions">
                                                <span class="lab la-telegram-plane"></span>
                                                <span class="las la-eye"></span>
                                                <span class="las la-ellipsis-v"></span>
                                            </div>
                                        </td>
                                    </tr>
                                        <td>05</td>
                                        <td>
                                            <div class="client">
                                               <div class="client-img bg-img" style="background-image: url(img/3.jpeg)"></div>
                                                <div class="client-info">
                                                    <h4>Diploma in Multimedia and Software Engineering</h4>
                                                    <small>Faculty of Engineering and Technology</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            IN REVIEW
                                        </td>
                                        <td>
                                            3 years
                                        </td>
                                        <td>
                                            <div class="actions">
                                                <span class="lab la-telegram-plane"></span>
                                                <span class="las la-eye"></span>
                                                <span class="las la-ellipsis-v"></span>
                                            </div>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
    
                    </div>
                
                </div>
                
            </main>
            
        </div>

    </body>
</html>