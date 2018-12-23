<nav class="navbar navbar-default  brand-center bootsnav">
    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group"> <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span> 
            </div>
        </div>
    </div>
    <!-- End Top Search -->
    <div class="container">                
        <!-- Start Header Navigation -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="fa fa-bars"></i> </button>
            <a class="navbar-brand" href="{{ url('/')}}"><img src="{{ asset('img/logo-5-dark.png')}}" class="logo logo-scrolled" alt=""> </a> 
        </div>
        <!-- End Header Navigation -->
        <!-- Megamenu -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav" data-in="fadeInDown" data-out="fadeOutUp">
                <li class="active dropdown">
                    <a href="{{ url('/')}}" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/')}}">Default</a></li>
                        <li><a href="corporate">Corporate</a></li>
                        <li><a href="consultant">Consultant</a></li>
                        <li><a href="construction">Construction</a></li>
                        <li><a href="medical">Medical</a></li>
                        <li><a href="gym">Fitness</a></li>
                        <li><a href="mobile-app">App</a></li>
                        <li><a href="personal">Personal</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Features</a>                            
                    <ul class="dropdown-menu">
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Header</a>                                    
                            <ul class="dropdown-menu">
                                <li><a href="header-default">Header Default</a></li>
                                <li><a href="header-fixed">Header Fixed</a></li>
                                <li><a href="header-transparent">Header Transparent</a></li>
                                <li><a href="header-fullwidth">Header Full Width</a></li>
                                <li><a href="header-topbar">Header Topbar</a></li>
                                <li><a href="header-logo-center">Header Logo Center</a></li>
                                <li><a href="header-logo-top">Header Logo Top</a></li>
                                <li><a href="header-side-left">Side Menu Left</a></li>
                                <li><a href="header-fullscreen">Header Fullscreen</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Banner</a>                                    
                            <ul class="dropdown-menu">
                                <li><a href="banner-owl-slider">Owl Slider</a></li>
                                <li><a href="banner-youtube">Youtube Video</a></li>
                                <li><a href="banner-vimeo">Vimeo Video</a></li>
                                <li><a href="banner-html-video">HTML5 Video</a></li>
                                <li><a href="banner-text-rotator">Text Rotator</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Footer</a>                                    
                            <ul class="dropdown-menu">
                                <li><a href="footer1">Footer 1</a></li>
                                <li><a href="footer2">Footer 2</a></li>
                                <li><a href="footer3">Footer 3</a></li>
                                <li><a href="footer4">Footer 4</a></li>
                                <li><a href="footer5">Footer 5</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Page Tittle</a>                                    
                            <ul class="dropdown-menu">
                                <li class="dropdown">
                                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Size</a>                                            
                                    <ul class="dropdown-menu">
                                        <li><a href="page-title-sm">Page Title Small</a></li>
                                        <li><a href="page-title-md">Page Title Medium</a></li>
                                        <li><a href="page-title-lg">Page Title Large</a></li>
                                        <li><a href="page-title-xlg">Page Title Extra Large</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Alignment</a>                                            
                                    <ul class="dropdown-menu">
                                        <li><a href="page-title-left">Align Left</a></li>
                                        <li><a href="page-title-right">Align Right</a></li>
                                        <li><a href="page-title-center">Align Center</a></li>
                                    </ul>
                                </li>
                                <li><a href="page-title-bg">White Background</a></li>
                                <li><a href="page-title-grey">Grey Background</a></li>
                                <li><a href="page-title-dark">Dark Background</a></li>
                                <li><a href="page-title-theme">Theme Background</a></li>
                                <li><a href="page-title-parallax">Parallax</a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Video</a>                                            
                                    <ul class="dropdown-menu">
                                        <li><a href="page-title-youtube">Youtube</a></li>
                                        <li><a href="page-title-vimeo">Vimeo</a></li>
                                        <li><a href="page-title-html5">HTML5</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>                            
                    <ul class="dropdown-menu">
                        <li><a href="about-company">About Company</a></li>
                        <li><a href="about-me">About Me</a></li>
                        <li><a href="about-team">About Team</a></li>
                        <li><a href="service">Service</a></li>
                        <li><a href="contact">Contact 1</a></li>
                        <li><a href="contact2">Contact 2</a></li>
                        <li><a href="contact3">Contact 3</a></li>
                        <li><a href="maintenance">Maintenance</a></li>
                        <li><a href="coming-soon">Coming Soon</a></li>
                        <li><a href="404">404</a></li>
                    </ul>
                </li>
                <li class="dropdown megamenu-fw">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Elements</a>                            
                    <ul class="dropdown-menu megamenu-content" role="menu">
                        <li>
                            <div class="row">
                                <div class="col-menu col-md-3">
                                    <h6 class="title">Elements 1</h6>
                                    <div class="content">
                                        <ul class="menu-col">
                                            <li><a href="element-accordions">Accordion</a></li>
                                            <li><a href="element-button">Button</a></li>
                                            <li><a href="element-blockquote">Blockquote</a></li>
                                            <li><a href="element-client">Client</a></li>
                                            <li><a href="element-columns">Columns</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-menu col-md-3">
                                    <h6 class="title">Elements 2</h6>                                 
                                    <div class="content">
                                        <ul class="menu-col">
                                            <li><a href="element-counter">Counter</a></li>
                                            <li><a href="element-dropcap">Dropcap</a></li>
                                            <li><a href="element-feature-box">Feature Box</a></li>
                                            <li><a href="element-form">Form</a></li>
                                            <li><a href="element-heading">Heading Style</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-menu col-md-3">
                                    <h6 class="title">Elements 3</h6>                                 
                                    <div class="content">
                                        <ul class="menu-col">
                                            <li><a href="element-list">List Style</a></li>
                                            <li><a href="element-price-table">Price Table</a></li>
                                            <li><a href="element-post">Post Style</a></li>
                                            <li><a href="element-skill">Skill</a></li>
                                            <li><a href="element-social">Social icons</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-menu col-md-3">
                                    <h6 class="title">Elements 4</h6>                                 
                                    <div class="content">
                                        <ul class="menu-col">
                                            <li><a href="element-step-feature">Step Feature</a></li>
                                            <li><a href="element-tab">Tabs</a></li>
                                            <li><a href="element-team">Team</a></li>
                                            <li><a href="element-testimonials">Testimonials</a></li>
                                            <li><a href="element-timeline">Timelines</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown dropdown-left">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Blog</a>                            
                    <ul class="dropdown-menu">
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Blog Classic</a>                                    
                            <ul class="dropdown-menu">
                                <li><a href="blog-left-side">Left Sidebar</a></li>
                                <li><a href="blog-right-side">Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Blog Grid</a>                                    
                            <ul class="dropdown-menu">
                                <li><a href="blog-grid-left-side">Left Sidebar</a></li>
                                <li><a href="blog-grid-right-side">Right Sidebar</a></li>
                                <li><a href="blog-grid-boxed">Boxed</a></li>
                                <li><a href="blog-grid-fullwidth">Fullwidth</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Blog Masonry</a>                                    
                            <ul class="dropdown-menu">
                                <li><a href="blog-masonry-boxed">Boxed</a></li>
                                <li><a href="blog-masonry-fullwidth">Fullwidth</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Single Post</a>                                    
                            <ul class="dropdown-menu">
                                <li><a href="blog-single-left-side">Left Sidebar</a></li>
                                <li><a href="blog-single-right-side">Right Sidebar</a></li>
                                <li><a href="blog-single-no-side">No Sidebar</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown dropdown-left">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Portfolio</a>                            
                    <ul class="dropdown-menu">
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Grid</a>                                    
                            <ul class="dropdown-menu">
                                <li><a href="portfolio-grid-2-col">2 Columns</a></li>
                                <li><a href="portfolio-grid-3-col">3 Columns</a></li>
                                <li><a href="portfolio-grid-4-col">4 Columns</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Masonry</a>                                    
                            <ul class="dropdown-menu">
                                <li><a href="portfolio-masonry-2-col">2 Columns</a></li>
                                <li><a href="portfolio-masonry-3-col">3 Columns</a></li>
                                <li><a href="portfolio-masonry-4-col">4 Columns</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Standard</a>                                    
                            <ul class="dropdown-menu">
                                <li><a href="portfolio-standard-2-col">2 Columns</a></li>
                                <li><a href="portfolio-standard-3-col">3 Columns</a></li>
                                <li><a href="portfolio-standard-4-col">4 Columns</a></li>
                            </ul>
                        </li>
                        <li><a href="portfolio-details">Single Post</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
</nav>