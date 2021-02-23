<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/css/scss/main.min.css" />
    <!-- Load an icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="d-flex">
    <div class="dashboard-sidebar">
        <div class="menu">
            <a class="logo-white" href="./dashboard.html"></a>
            <span class="menu-item">
                <a href="./home.html">
                    <i class="fas fa-home"></i>
                </a>
            </span>
            <span class="menu-item">
                <a href="./post.html">
                    <i class="fas fa-user-friends"></i>
                </a>
            </span>
            <span class="menu-item">
                <a href="./profile-settings.html">
                    <i class="fa fa-cog"></i>
                </a>
            </span>
        </div>
        <div class="signout">
            <a href="/">
                <img src="images/log-out.svg" alt="">
            </a>
        </div>
    </div>

    <div class="dashboard--authors">
        <div class="searchbar">
            <div>
                <input type="text" class="search--area" placeholder="Search for author">
            </div>
            <div class="avatar"></div>
        </div>

        <?php include_once 'partials/flash-messages.php' ?>

        <div class="dashboard-main-inner">
        
            <h2 class="dashboard-main-inner-row1">Dashboard</h2>
            

            <div class="dashboard-contents">

                <div class="dashboard-contents-inner-left">
                    <div class="dashboard-contents-inner-row1">
                        <div class="dashboard-content-box1"><img src="images/top-author.svg" alt=""></div>
                        <div class="dashboard-content-box2"><img src="images/sharing-channel.svg" alt=""></div>
                    </div>
                    <div class="dashboard-contents-inner-row2">
                        <div class="dashboard-content-box3 box3-outer">
                            <h3>Top Shared Author</h3>
                            <span>
                                <p>1</p>
                                <img src="images/jenny-icon.svg" alt="">
                                <p>Jenny Wilson</p>
                                <p>3.4k Shares</p>
                            </span>
                            <hr>
                            <span>
                                <p>2</p>
                                <img src="images/jenny-icon.svg" alt="">
                                <p>Savannah Nguyen</p>
                                <p>3.4k Shares</p>
                            </span>
                            <hr>
                            <span>
                                <p>3</p>
                                <img src="images/jenny-icon.svg" alt="">
                                <p>Courtney Henry</p>
                                <p>3.4k Shares</p>
                            </span>
                            <hr>
                            <span>
                                <p>4</p>
                                <img src="images/jenny-icon.svg" alt="">
                                <p>Robert Fox</p>
                                <p>3.4k Shares</p>
                            </span>
                            <hr>
                            <span>
                                <p>5</p>
                                <img src="images/jenny-icon.svg" alt="">
                                <p>Jerome Bell</p>
                                <p>3.4k Shares</p>
                            </span>

                        </div>
                        <div class="dashboard-content-box4 box4-outer">
                            <h3>Top Post</h3>
                            <span>
                                <p>1</p>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae labore laborum
                                    soluta</p>
                                <img src="images/jenny-icon.svg" alt="">
                                <p>Eleanor Pena</p>
                                <p>3.4k</p>
                            </span>
                            <hr>
                            <span>
                                <p>2</p>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae labore laborum
                                    soluta</p>
                                <img src="images/jenny-icon.svg" alt="">
                                <p>Kristin Watson</p>
                                <p>3.4k</p>
                            </span>
                            <hr>
                            <span>
                                <p>3</p>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae labore laborum
                                    soluta</p>
                                <img src="images/jenny-icon.svg" alt="">
                                <p>Eleanor Pena</p>
                                <p>3.4k</p>
                            </span>
                            <hr>
                            <span>
                                <p>4</p>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae labore laborum
                                    soluta</p>
                                <img src="images/jenny-icon.svg" alt="">
                                <p>Cameron Williamson</p>
                                <p>3.4k</p>
                            </span>
                            <hr>
                            <span>
                                <p>5</p>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae labore laborum
                                    soluta</p>
                                <img src="images/jenny-icon.svg" alt="">
                                <p>Eleanor Pena</p>
                                <p>3.4k</p>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="dashboard-contents-inner-right">
                    <div class="right-content-inner author-list">
                        <span>
                            <h3>Authors</h3>
                            <img src="images/right-arrow.svg" alt="">
                        </span>
                        <span>
                            <p>1</p>
                            <img src="images/jenny-icon.svg" alt="">
                            <span class="author-profile">
                                <p>Jenny Wilson</p>
                                <p>jenny@gmail.com</p>
                            </span>
                            <p class="post-count">120 Post</p>
                        </span>
                        <hr>
                        <span>
                            <p>2</p>
                            <img src="images/jenny-icon.svg" alt="">
                            <span class="author-profile">
                                <p>Cameron Williamson</p>
                                <p>debra.holt@example.com</p>
                            </span>
                            <p class="post-count">120 Post</p>
                        </span>
                        <hr>
                        <span>
                            <p>3</p>
                            <img src="images/jenny-icon.svg" alt="">
                            <span class="author-profile">
                                <p>Esther Howard</p>
                                <p>willie.jennings@example.com</p>
                            </span>
                            <p class="post-count">120 Post</p>
                        </span>
                        <hr>
                        <span>
                            <p>4</p>
                            <img src="images/jenny-icon.svg" alt="">
                            <span class="author-profile">
                                <p>Darrell Steward</p>
                                <p>alma.lawson@example.com</p>
                            </span>
                            <p class="post-count">120 Post</p>
                        </span>
                        <hr>
                        <span>
                            <p>5</p>
                            <img src="images/jenny-icon.svg" alt="">
                            <span class="author-profile">
                                <p>Devon Lane</p>
                                <p>tim.jennings@example.com</p>
                            </span>
                            <p class="post-count">120 Post</p>
                        </span>
                        <hr>
                        <span>
                            <p>6</p>
                            <img src="images/jenny-icon.svg" alt="">
                            <span class="author-profile">
                                <p>Annette Black</p>
                                <p>kenzi.lawson@example.com</p>
                            </span>
                            <p class="post-count">120 Post</p>
                        </span>
                        <hr>
                        <span>
                            <p>7</p>
                            <img src="images/jenny-icon.svg" alt="">
                            <span class="author-profile">
                                <p>Dianne Russell</p>
                                <p>kenzi.lawson@example.com</p>
                            </span>
                            <p class="post-count">120 Post</p>
                        </span>
                        <hr>
                        <span>
                            <p>8</p>
                            <img src="images/jenny-icon.svg" alt="">
                            <span class="author-profile">
                                <p>Bessie Cooper</p>
                                <p>georgia.young@example.com</p>
                            </span>
                            <p class="post-count">120 Post</p>
                        </span>
                        <hr>
                        <span>
                            <p>9</p>
                            <img src="images/jenny-icon.svg" alt="">
                            <span class="author-profile">
                                <p>Leslie Alexander</p>
                                <p>jenny@gmail.com</p>
                            </span>
                            <p class="post-count">120 Post</p>
                        </span>



                    </div>
                </div>

            </div>

            <!-- <div></div> -->
        </div>

    </div>




    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="scripts/app.js"></script>
</body>

</html>













<!-- <?php
include_once 'partials/header.php'
?>

<body class="body">
    <div class="wrapper">
        <div class="sidebar">
            <div class="menu">
                <span class="logo-white">
                    
                </span>
                    <span class="menu-item highlight">
                        <a href="#">
                            <img src="static/src/images/home.svg" alt="">
                        </a>
                    </span>
                <span class="menu-item">
                    <a href="#">
                        <img src="images/people.svg" alt="">
                    </a>
                </span>
                <span class="menu-item">
                    <a href="#">
                        <img src="images/settings.svg" alt="">
                    </a>
                </span>
            </div>
            <div class="signout">
                <span class="">
                    <a href="/auth/logout" class="signout-link">
                        <img src="images/signout.svg" alt="">
                    </a>
                </span>
            </div>
        </div>
        <main class="main">
            <div class="header">
                <div class="search-width ">
                    <div class="input-control ">
                        <form action="">
                            <label for="search"></label>
                            <input type="text" placeholder="Search for author" class="search--area">
                        </form>
                    </div>
                    <div class="avatar">
                        <a href="#">
                            <img src="images/avatar.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="content-wrapper">
                    <div class="title-wrap">
                        <h3 class="page-title">Dashboard</h3>
                        <?php include_once 'partials/flash-messages.php' ?>
                    </div>
                    <div class="content-area">
                        <div class="grid-area">
                            <div class="card">
                                <img src="images/graph.svg" alt="" width="100%" height="100%"> 
                            </div>
                            <div class="card">
                                <img src="images/pie-chart.svg" alt="" width="100%" height="100%"> 
                            </div>
                            <div class="card">
                                <div class="card-title">
                                    <p class="card-heading">Top Shared Author</p>
                                    <div class="card-content">
                                        <div class="row-container">
                                            <div class="card-rows">
                                                <div class="span-text digit">1</div>
                                                
                                                <div class="card-rows underline ">
                                                    <div class="span-text img"> 
                                                        <img src="images/author.svg" alt=""> 
                                                    </div>
                                                    <div class="card-rows  spread">
                                                        <div class="span-text">Jenny Wilson</div>
                                                        <div class="span-text right">3.4K Shares</div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row-container">
                                            <div class="card-rows">
                                                <div class="span-text digit">2</div>
                                                
                                                <div class="card-rows underline">
                                                    <div class="span-text img"> 
                                                        <img src="images/author.svg" alt=""> 
                                                    </div>
                                                    <div class="card-rows spread">
                                                        <div class="span-text">Savannah Nguyen</div>
                                                        <div class="span-text right">3.4K Shares</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row-container">
                                            <div class="card-rows">
                                                <div class="span-text digit">3</div>
                                                
                                                <div class="card-rows underline">
                                                    <div class="span-text img"> 
                                                        <img src="images/henry.svg" alt=""> 
                                                    </div>
                                                    <div class="card-rows spread">
                                                        <div class="span-text">Courtney Henry</div>
                                                        <div class="span-text right">3.4K Shares</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row-container">
                                            <div class="card-rows">
                                                <div class="span-text digit">4</div>
                                                
                                                <div class="card-rows underline">
                                                    <div class="span-text img"> 
                                                        <img src="images/robert.svg" alt=""> 
                                                    </div>
                                                    <div class="card-rows spread">
                                                        <div class="span-text">Robert Fox</div>
                                                        <div class="span-text right">3.4K Shares</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row-container">
                                            <div class="card-rows">
                                                <div class="span-text digit">5</div>
                                                
                                                <div class="card-rows underline">
                                                    <div class="span-text img "> 
                                                        <img src="images/bell.svg" alt=""> 
                                                    </div>
                                                    <div class="card-rows spread">
                                                        <div class="span-text">Jerome Bell</div>
                                                        <div class="span-text right">3.4K Shares</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <p class="card-heading">Top Post</p>
                                <div class="card-content">
                                    <div class="row-container">
                                        <div class="card-rows">
                                            <div class="span-text digit">1</div>
                                            <div class="card-rows-post">
                                                <div class="link-text"> <a href="#" target="_blank" >Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</a> </div>
                                                <div class="card-rows-author link-text-right">
                                                    <div class="span-text img"> 
                                                        <img src="images/author.svg" alt=""> 
                                                    </div>
                                                    <div class="card-rows spread">
                                                        <div class="span-text">Jenny Wilson</div>
                                                        <div class="span-text right">3.4K Shares</div>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-container">
                                        <div class="card-rows">
                                            <div class="span-text digit">2</div>
                                            <div class="card-rows-post">
                                                <div class="link-text"> <a href="#" target="_blank" >Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</a> </div>
                                                <div class="card-rows-author link-text-right">
                                                    <div class="span-text img"> 
                                                        <img src="images/author.svg" alt=""> 
                                                    </div>
                                                    <div class="card-rows spread">
                                                        <div class="span-text">Jenny Wilson</div>
                                                        <div class="span-text right">3.4K Shares</div>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-container">
                                        <div class="card-rows">
                                            <div class="span-text digit">3</div>
                                            <div class="card-rows-post">
                                                <div class="link-text"> <a href="#" target="_blank" >Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</a> </div>
                                                <div class="card-rows-author link-text-right">
                                                    <div class="span-text img"> 
                                                        <img src="images/author.svg" alt=""> 
                                                    </div>
                                                    <div class="card-rows spread">
                                                        <div class="span-text">Jenny Wilson</div>
                                                        <div class="span-text right">3.4K Shares</div>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-container">
                                        <div class="card-rows">
                                            <div class="span-text digit">4</div>
                                            <div class="card-rows-post">
                                                <div class="link-text"> <a href="#" target="_blank" >Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</a> </div>
                                                <div class="card-rows-author link-text-right">
                                                    <div class="span-text img"> 
                                                        <img src="images/author.svg" alt=""> 
                                                    </div>
                                                    <div class="card-rows spread">
                                                        <div class="span-text">Jenny Wilson</div>
                                                        <div class="span-text right">3.4K Shares</div>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-container">
                                        <div class="card-rows">
                                            <div class="span-text digit">5</div>
                                            <div class="card-rows-post">
                                                <div class="link-text"> <a href="#" target="_blank" >Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</a> </div>
                                                <div class="card-rows-author link-text-right">
                                                    <div class="span-text img"> 
                                                        <img src="images/author.svg" alt=""> 
                                                    </div>
                                                    <div class="card-rows spread">
                                                        <div class="span-text">Jenny Wilson</div>
                                                        <div class="span-text right">3.4K Shares</div>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-sidebar">
                            <div class="right-sidebar-title">
                                <div class="card-heading author-title">Authors</div>
                                <div class="author-arrow"> 
                                    <img src="images/arrow.svg" alt=""> 
                                </div>
                            </div>
                            <div class="author-content-container">
                                <div class="right-sidebar-content">
                                    <div class="text number">1</div>
                                    <div class="span-content">
                                        <div class="author-details">
                                            <div class="author-image">
                                                <img src="images/author.svg" alt=""> 
                                            </div>
                                            <div class="author-name-row">
                                                <div class="text author-name">Jenny Wilson</div>
                                                <div class="text author-rate">120 posts</div>
                                            </div>
                                        </div>
                                        <div class="text author-email">jennywilson@gmail.com</div>
                                    </div>
                                </div>
                                <div class="right-sidebar-content">
                                    <div class="text number">2</div>
                                    <div class="span-content">
                                        <div class="author-details">
                                            <div class="author-image">
                                                <img src="images/author.svg" alt=""> 
                                            </div>
                                            <div class="author-name-row">
                                                <div class="text author-name">Cameron Williamson</div>
                                                <div class="text author-rate">120 posts</div>
                                            </div>
                                        </div>
                                        <div class="text author-email">debra.holt@example.com</div>
                                    </div>
                                </div>
                                <div class="right-sidebar-content">
                                    <div class="text number">3</div>
                                    <div class="span-content">
                                        <div class="author-details">
                                            <div class="author-image">
                                                <img src="images/author.svg" alt=""> 
                                            </div>
                                            <div class="author-name-row">
                                                <div class="text author-name">Esther Howard</div>
                                                <div class="text author-rate">120 posts</div>
                                            </div>
                                        </div>
                                        <div class="text author-email">willie.jennings@example.com</div>
                                    </div>
                                </div>
                                <div class="right-sidebar-content">
                                    <div class="text number">4</div>
                                    <div class="span-content">
                                        <div class="author-details">
                                            <div class="author-image">
                                                <img src="images/author.svg" alt=""> 
                                            </div>
                                            <div class="author-name-row">
                                                <div class="text author-name">Darrell Steward</div>
                                                <div class="text author-rate">120 posts</div>
                                            </div>
                                        </div>
                                        <div class="text author-email">alma.lawson@example.com</div>
                                    </div>
                                </div>
                                <div class="right-sidebar-content">
                                    <div class="text number">5</div>
                                    <div class="span-content">
                                        <div class="author-details">
                                            <div class="author-image">
                                                <img src="images/author.svg" alt=""> 
                                            </div>
                                            <div class="author-name-row">
                                                <div class="text author-name">Devon Lane</div>
                                                <div class="text author-rate">120 posts</div>
                                            </div>
                                        </div>
                                        <div class="text author-email">tim.jennings@example.com</div>
                                    </div>
                                </div>
                                <div class="right-sidebar-content">
                                    <div class="text number">6</div>
                                    <div class="span-content">
                                        <div class="author-details">
                                            <div class="author-image">
                                                <img src="images/author.svg" alt=""> 
                                            </div>
                                            <div class="author-name-row">
                                                <div class="text author-name">Annette Black</div>
                                                <div class="text author-rate">120 posts</div>
                                            </div>
                                        </div>
                                        <div class="text author-email">kenzi.lawson@example.com</div>
                                    </div>
                                </div>
                                <div class="right-sidebar-content">
                                    <div class="text number">7</div>
                                    <div class="span-content">
                                        <div class="author-details">
                                            <div class="author-image">
                                                <img src="images/author.svg" alt=""> 
                                            </div>
                                            <div class="author-name-row">
                                                <div class="text author-name">Dianne Russell</div>
                                                <div class="text author-rate">120 posts</div>
                                            </div>
                                        </div>
                                        <div class="text author-email">kenzi.lawson@example.com</div>
                                    </div>
                                </div>
                                <div class="right-sidebar-content">
                                    <div class="text number">8</div>
                                    <div class="span-content">
                                        <div class="author-details">
                                            <div class="author-image">
                                                <img src="images/author.svg" alt=""> 
                                            </div>
                                            <div class="author-name-row">
                                                <div class="text author-name">Bessie Cooper</div>
                                                <div class="text author-rate">120 posts</div>
                                            </div>
                                        </div>
                                        <div class="text author-email">georgia.young@example.com</div>
                                    </div>
                                </div>
                                <div class="right-sidebar-content">
                                    <div class="text number">9</div>
                                    <div class="span-content">
                                        <div class="author-details">
                                            <div class="author-image">
                                                <img src="images/author.svg" alt=""> 
                                            </div>
                                            <div class="author-name-row">
                                                <div class="text author-name">Leslie Alexander</div>
                                                <div class="text author-rate">120 posts</div>
                                            </div>
                                        </div>
                                        <div class="text author-email">georgia.young@example.com</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html> -->