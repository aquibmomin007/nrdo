
<?php 
    set_include_path($_SERVER['DOCUMENT_ROOT'] . '/includes');
    $primary = 4;
    include('header.php');
    

?>

     --><div class="link-description <?php if($primary==4){ echo 'internal-description';}?>">    
            <div class="wrapper publi-head">
                 <h1>Data Request</h1>
                    <p>Fusce ultrices rutrum velit eget feugiat. Quisque nisl magna, vehicula et lacus sed, tempus tincidunt nunc. </p>            
            </div>
        </div>     

        <div class="breadcrumb-block">
                    <div class="wrapper">
                        
                                <ul class="breadcrumb">
                                    <li><a href="/"><span>Home</span></a></li>
                                    <li><span class="current">Data Request</span></li>    
                                </ul>    
                        
                   </div>                            
        </div> 

        <div class="container">
                            <div class="wrapper">
                                       
                            <section class="data-req">
                                  <form>  
                                    <article class="personal-particular">
                                      <h2 class="main-heading"><span>Personal</span> Particulars</h2>
                                      <div class="data-row">
                                            <div class="tag-name"><p>Name of Requestor*</p></div>
                                            <span><input type="text" placeholder="Surname" /><!--
                                            --><input type="text" placeholder="Given name" /></span>
                                       </div>
                                       <div class="data-row">
                                            <p>Country*</p>
                                            
                                       </div>
                                       <div class="data-row">
                                            <p>Organisation*</p>
                                            <span><input type="text" placeholder="Organisation name" /></span>
                                            
                                       </div>
                                       <div class="data-row">
                                            <p>Designation*</p>
                                            <span><input type="text" placeholder="Your designation" /></span>
                                            
                                       </div>       
                                       <div class="data-row">
                                            <p>Mobile Number*</p>
                                            <span><input type="text" placeholder="Your mobile number" /></span>
                                            
                                       </div>
                                       <div class="data-row">
                                            <p>Official email address*</p>
                                            <span><input type="text" placeholder="Your email address" /></span>
                                            
                                       </div>
                                       <div class="data-row">
                                            <p>Company Address</p>
                                            <span><input type="text" placeholder="address line 1" />
                                            <input type="text" placeholder="address line 2" />
                                            <input type="text" placeholder="city" />
                                            <!---drOP-DOWMN-->
                                            <input type="text" placeholder="zip" /></span>
                                            
                                       </div>

                                    </article>    

                                    <article class="data-inquiry">
                                    <h2 class="main-heading"><span>Enquiry</span> Type</h2>
                                        <div class="data-row">
                                            <p>Enquiry Type*</p>
                                            <!---drOP-DOWMN-->
                                        </div>
                                        <div class="data-row">
                                            <p>Type of Registry/Database*</p>
                                            <!---checkboxes-->
                                        </div>
                                        <div class="data-row">
                                            <p>Type of Data Requested*</p>
                                            <!---checkboxes-->
                                            
                                        </div>
                                        <div class="data-row">
                                            <p>Details of Data/Report Requested*</p>
                                            
                                        </div>
                                        <div class="data-row">
                                            <p>Purpose of Request/Research Objectives*</p>
                                            
                                        </div>
                                        <div class="data-row">
                                            <p>Remarks</p>
                                            
                                        </div>
                                        <div class="data-row">
                                            <p>Upload Data Request Form</p>
                                            
                                        </div>
                                    </article> 
                                  </form>  
                            </section>   
                            </div>
                    </div>       


                   
             

<?php 
     include('footer.php');
?>
      

