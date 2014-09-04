
<?php 
    set_include_path($_SERVER['DOCUMENT_ROOT'] . '/includes');
    $page_title = "Sitemap | National Registry of Diseases Office Singapore";
    $primary = 9;
    include('header.php');
?>
 --><div class="link-description <?php if($primary==9){ echo 'internal-description';}?>">
        <div class="searchbox wrapper ">
            <form> 
                <div class="publi-search publi-notmain">
                    <input type="text" placeholder="Search our Publications" />
                </div>
            </form>                     
        </div>    
        <div class="wrapper publi-head">
            <h1>Sitemap</h1>
            <p>Fusce ultrices rutrum velit eget feugiat. Quisque nisl magna, vehicula et lacus sed, tempus tincidunt nunc. </p>     
        </div>
    </div>
    <div class="breadcrumb-block">
        <div class="wrapper">
            <ul class="breadcrumb">
                <li><a href="/"><span>Home</span></a></li>
                <li><span class="current">Sitemap</span></li>    
            </ul>  
        </div>                            
    </div> 
    
    <div class="wrapper clearfix main-container">
       <section class="about-left">
        <p>Sitemap</p>
       </section>  
       <section class="about-right">
        <article class="about-main">
            <h2>Sitemap</h2>
              
        </article>
        <article class="about-main sitemap-divider">
            
            <ul class="sitemap-link">
                <li><a href="/">Home</a>
                    <ul class="sitemap-link">
                        <li><a href="/about_us/">About Us</a></li>
                        <li><a href="/publications/">Publications</a>
                            <ul class="sitemap-link">
                                <li><a href="/publications/ami/">Acute Myocardial Infarction (AMI)</a></li>
                                <li><a href="/publications/cancer/">Cancer</a></li>
                                <li><a href="#">Chronic Kidney Failure</a></li>
                                <li><a href="#">Stroke</a></li>  
                                <li><a href="#">Trauma</a></li> 
                            </ul>    
                        </li>
                        <li><a href="#">Legislation</a></li>
                        <li><a href="#">Diseases Notification</a>
                            <ul class="sitemap-link">
                                <li><a href="#">Acute Myocardial Infarction Notification</a></li> 
                                <li><a href="#">Cancer Registry Notification</a></li>
                                <li><a href="#">Chronic Kidney Failure Notification</a></li>
                                <li><a href="#">Donor Care Registry Notification</a></li>  
                            </ul>    
                        </li>
                        <li><a href="data_enquiry">Data Request</a>
                            <ul class="sitemap-link">
                                <li><a href="#">FAQ</a></li>
                            </ul> 
                        </li>
                        <li><a href="#">Contact Info</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Statement</a></li>
                        
                    </ul>
                </li>
            </ul>


        </article>
       </section> 
    </div>    
<?php 
     include('footer.php');
?>
      

