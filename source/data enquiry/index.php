
<?php 
    set_include_path($_SERVER['DOCUMENT_ROOT'] . '/includes');
    $primary = 7;
    include('header.php');
    

?>

     --><div class="link-description <?php if($primary==7){ echo 'internal-description';}?>">    
            <div class="wrapper publi-head">
                 <h1>Data Enquiry</h1>
                    <p>Fusce ultrices rutrum velit eget feugiat. Quisque nisl magna, vehicula et lacus sed, tempus tincidunt nunc. </p>            
            </div>
        </div>     

        <div class="breadcrumb-block">
                    <div class="wrapper">
                        
                                <ul class="breadcrumb">
                                    <li><a href="/"><span>Home</span></a></li>
                                    <li><span class="current">Data Enquiry</span></li>    
                                </ul>    
                        
                   </div>                            
        </div> 

        <div class="container">
                            <div class="wrapper">
                                       
                            <section class="data-req">
                                  <form method="" action="#">  
                                    <article class="personal-particular">
                                      <h2 class="main-heading"><span>Personal</span> Particulars</h2>
                                      <div class="data-row">
                                            <p>Name of Requestor*</p>
                                            <div><input type="text" placeholder="Surname" class="surname" /><!--
                                            --><input type="text" placeholder="Given name" class="givenname" /></div>
                                       </div>
                                       <div class="data-row">
                                            <p>Country*</p>
                                                                <div><span class="dropdown-span">Singapore</span><select class="dropdown" name="select">
                                                                   <option value="Singapore" selected>Singapore</option> 
                                                                  <option value="value1">Value 1</option> 
                                                                  <option value="value2">Value 2</option>
                                                                  <option value="value3">Value 3</option>
                                                                </select></div>
                                            
                                       </div>
                                       <div class="data-row">
                                            <p>Organisation*</p>
                                            <div><input type="text" placeholder="Organisation name" /></div>
                                            
                                       </div>
                                       <div class="data-row">
                                            <p>Designation*</p>
                                            <div><input type="text" placeholder="Designation" /></div>
                                            
                                       </div>       
                                       <div class="data-row">
                                            <p>Mobile Number*</p>
                                            <div><input type="text" placeholder="Mobile number" /></div>
                                            
                                       </div>
                                       <div class="data-row">
                                            <p>Official email address*</p>
                                            <div><input type="text" placeholder="Email address" class="emailClass"/><img src="/assets/img/invalid-email.png" alt="invalid email" class="invalid-image">
                                              <p class="invalid-email">Your email address is invalid</p></div>
                                            
                                       </div>
                                       <div class="data-row">
                                            <p>Company Address</p>
                                            <div><input type="text" placeholder="Address line 1" />
                                            <input type="text" placeholder="Address line 2" />
                                            <div class="address-zip">
                                                <input type="text" placeholder="City" class="zip city-left" /><!-- 
                                                         --><div class="zip">
                                                                <span class="dropdown-span">State</span>
                                                                <select class="dropdown" name="select">
                                                                     <option value="Singapore" selected>state</option> 
                                                                     <option value="value1">Value 1</option> 
                                                                     <option value="value2">Value 2</option>
                                                                     <option value="value3">Value 3</option>
                                                                </select>     
                                                        </div>
                                                <input type="text" placeholder="Zip" class="zip zip-right"/>
                                            </div>
                                            
                                       </div>

                                    </article>    

                                    <article class="data-inquiry">
                                    <h2 class="main-heading"><span>Enquiry</span> Type</h2>
                                        <div class="data-row">
                                            <p>Enquiry Type*</p>
                                            <div>
                                                <span class="dropdown-span">Select enquiry type</span>
                                                <select class="dropdown" name="select">
                                                    <option value="Singapore" selected disabled>Select enquiry type</option> 
                                                    <option value="General">General</option> 
                                                    <option value="Notification">Notification</option>
                                                    <option value="Data Request">Data Request</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="data-row non-data-request">
                                            <p>Message*</p>
                                            <div><textarea name="textarea" rows="10" cols="50" placeholder="Message"></textarea></div>
                                        </div>

                                      <div class="only-data-request">  
                                        <div class="data-row">
                                            <p>Type of Registry/Database*</p>
                                            <div class="checkbox-data">
                                                <label><span class="checkimage"></span><input type="checkbox" name="Cancer Registry" value="cancer"><p>Cancer Registry</p></label>
                                                <label><span class="checkimage"></span><input type="checkbox" name="Stroke Registry" value="Stroke"><p>Stroke Registry</p></label>
                                                <label><span class="checkimage"></span><input type="checkbox" name="Donor Care" value="donor"><p>Donor Care Registry (For MOH only)</p></label>
                                                <label><span class="checkimage"></span><input type="checkbox" name="Renal Registry" value="renal"><p>Renal Registry</p></label>
                                                <label><span class="checkimage"></span><input type="checkbox" name="AMI Registry" value="ami"><p>AMI Registry</p></label>
                                                <label><span class="checkimage"></span><input type="checkbox" name="Death information" value="death"><p>Death information</p></label>
                                                <label><span class="checkimage"></span><input type="checkbox" name="Trauma Registry" value="trauma"><p>Trauma Registry</p></label>
                                            </div>    
                                        </div>
                                        <div class="data-row">
                                            <p>Type of Data Requested*</p>
                                            <div class="checkbox-data">
                                                <label><span class="checkimage"></span><input type="checkbox" name="Aggregate" value="aggregate"><p>Aggregate</p></label>
                                                <label><span class="checkimage"></span><input type="checkbox" name="Identifiable" value="identifiable"><p>Identifiable</p></label>
                                                <label><span class="checkimage"></span><input type="checkbox" name="To be determined" value="determined"><p>To be determined</p></label>
                                                <label><span class="checkimage"></span><input type="checkbox" name="Non-Identifiable" value="nonidentifiable"><p>Non-Identifiable</p></label>
                                                <label><span class="checkimage"></span><input type="checkbox" name="Key coded" value="ami"><p>Key coded</p></label>                                                
                                            </div> 
                                            
                                        </div>
                                        <div class="data-row">
                                            <p>Details of Data/Report Requested*</p>
                                            <div><textarea name="textarea" rows="10" cols="50" placeholder="Message"></textarea></div>

                                        </div>
                                        <div class="data-row">
                                            <p>Purpose of Request/Research Objectives*</p>
                                            <div><textarea name="textarea" rows="10" cols="50" placeholder="Message"></textarea></div>
                                        </div>
                                        <div class="data-row">
                                            <p>Remarks</p>
                                            <div><textarea name="textarea" rows="10" cols="50" placeholder="Message"></textarea></div>
                                            
                                        </div>
                                        <div class="data-row">
                                            <p>Upload Data Request Form</p> 
                                            <div><span class='upload'><input type="file" />Upload Attachements</span></div>                                           
                                        </div>
                                      </div>  


                                            <div class='btnValidate'>Completed</div>
                                            
                                       
                                    </article> 
                                  </form>  
                            </section>   
                            </div>
                    </div>       


                   
             

<?php 
     include('footer.php');
?>
      

