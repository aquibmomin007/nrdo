
<?php 
    set_include_path($_SERVER['DOCUMENT_ROOT'] . '/includes');
    $page_title = "Data Enquiry | National Registry of Diseases Office Singapore";
    $primary = 7;
    include('header.php');
    
 
    
?>

     --><div class="link-description <?php if($primary==7){ echo 'internal-description';}?>">    
            <div class="wrapper publi-head">
                 <h1>Enquiry Request</h1>
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
                                                                
                            <section class="data-req">
                                  <form method="" action="#">  
                                    <article class="personal-particular">
                          <div class="disclaimer">
                            <div class="wrapper">
                                  <p><a href="#"><img src="/assets/img/disclaimer.png" alt="disclaimer"/></a></p>
                                    <p><span>Proin facilisis enim convallis felis suscipit, morbi ultrices quam sit amet urna. <a href="#" target="_blank">Link Here.</a></span> </p>
                            </div>                    
                          </div> 
                                      <div class="wrapper">  
                                      <h2 class="main-heading"><span>Personal</span> Particulars</h2>
                                      <div class="data-row">
                                            <p>Name of Requestor*</p>
                                            <div><input type="text" placeholder="Surname" class="surname" /><!--
                                            --><input type="text" placeholder="Given name" class="givenname" /></div>
                                       </div>
                                       <div class="data-row">
                                            <p>Country*</p>
                                                                <div><span class="dropdown-span ">Singapore</span><select class="dropdown country-code" name="select">
                                                                   <option value="+65" selected>Singapore</option> 
                                                                  <option value="+44">UK </options>
                                                                   <option value="+1">USA</options>
                                                                   <option value="+213">Algeria</options>
                                                                   <option value="+376">Andorra</options>
                                                                   <option value="+244">Angola</options>
                                                                   <option value="+1264">Anguilla4</options>
                                                                   <option value="+1268">Antigua &amp; Barbuda</options>
                                                                   <option value="+599">Antilles</options>
                                                                   <option value="+54">Argentina</options>
                                                                   <option value="+374">Armenia</options>
                                                                   <option value="+297">Aruba</options>
                                                                   <option value="+247">Ascension Island</options>
                                                                   <option value="+61">Australia</options>
                                                                   <option value="+43">Austria</options>
                                                                   <option value="+994">Azerbaijan</options>
                                                                   <option value="+1242">Bahamas</options>
                                                                   <option value="+973">Bahrain</options>
                                                                   <option value="+880">Bangladesh</options>
                                                                   <option value="+1246">Barbados</options>
                                                                   <option value="+375">Belarus</options>
                                                                   <option value="+32">Belgium</options>
                                                                   <option value="+501">Belize</options>
                                                                   <option value="+229">Benin</options>
                                                                   <option value="+1441">Bermuda</options>
                                                                   <option value="+975">Bhutan</options>
                                                                   <option value="+591">Bolivia</options>
                                                                   <option value="+387">Bosnia Herzegovina</options>
                                                                   <option value="+267">Botswana</options>
                                                                   <option value="+55">Brazil</options>
                                                                   <option value="+673">Brunei</options>
                                                                   <option value="+359">Bulgaria</options>
                                                                   <option value="+226">Burkina Faso</options>
                                                                   <option value="+257">Burundi</options>
                                                                   <option value="+855">Cambodia</options>
                                                                   <option value="+237">Cameroon</options>
                                                                   <option value="+1">Canadaoptions</option>
                                                                   <option value="+238">Cape Verde Islands</options>
                                                                   <option value="+1345">Cayman Islands5</options>
                                                                   <option value="+236">Central African Republic</options>
                                                                   <option value="+56">Chile</options>
                                                                   <option value="+86">China</options>
                                                                   <option value="+57">Colombia</options>
                                                                   <option value="+269">Comoros</options>
                                                                   <option value="+242">Congo</options>
                                                                   <option value="+682">Cook Islands</options>
                                                                   <option value="+506">Costa Rica</options>
                                                                   <option value="+385">Croatia</options>
                                                                   <option value="+53">Cuba</options>
                                                                   <option value="+90392">Cyprus North</options>
                                                                   <option value="+357">Cyprus South</options>
                                                                   <option value="+42">Czech Republic</options>
                                                                   <option value="+45">Denmark</options>
                                                                   <option value="+2463">Diego Garcia3</options>
                                                                   <option value="+253">Djibouti</options>
                                                                   <option value="+1809">Dominica9</options>
                                                                   <option value="+1809">Dominican Republic</options>
                                                                   <option value="+593">Ecuador</options>
                                                                   <option value="+20">Egypt</options>
                                                                   <option value="+353">Eire</options>
                                                                   <option value="+503">El Salvador</options>
                                                                   <option value="+240">Equatorial Guinea</options>
                                                                   <option value="+291">Eritrea</options>
                                                                   <option value="+372">Estonia</options>
                                                                   <option value="+251">Ethiopia</options>
                                                                   <option value="+500">Falkland Islands</options>
                                                                   <option value="+298">Faroe Islands</options>
                                                                   <option value="+679">Fiji</options>
                                                                   <option value="+358">Finland</options>
                                                                   <option value="+33">France</options>
                                                                   <option value="+594">French Guiana</options>
                                                                   <option value="+689">French Polynesia</options>
                                                                   <option value="+241">Gabon</options>
                                                                   <option value="+220">Gambia</options>
                                                                   <option value="+7880">Georgia</options>
                                                                   <option value="+49">Germany</options>
                                                                   <option value="+233">Ghana</options>
                                                                   <option value="+350">Gibraltar</options>
                                                                   <option value="+30">Greece</options>
                                                                   <option value="+299">Greenland</options>
                                                                   <option value="+1473">Grenada3</options>
                                                                   <option value="+590">Guadeloupe</options>
                                                                   <option value="+671">Guam</options>
                                                                   <option value="+502">Guatemala</options>
                                                                   <option value="+224">Guinea</options>
                                                                   <option value="+245">Guinea - Bissau</options>
                                                                   <option value="+592">Guyana</options>
                                                                   <option value="+509">Haiti</options>
                                                                   <option value="+504">Honduras</options>
                                                                   <option value="+852">Hong Kong</options>
                                                                   <option value="+36">Hungary</options>
                                                                   <option value="+354">Iceland</options>
                                                                   <option value="+91">India</options>
                                                                   <option value="+62">Indonesia</options>
                                                                   <option value="+98">Iran</options>
                                                                   <option value="+964">Iraq</options>
                                                                   <option value="+972">Israel</options>
                                                                   <option value="+39">Italy</options>
                                                                   <option value="+225">Ivory Coast</options>
                                                                   <option value="+1876">Jamaica</options>
                                                                   <option value="+81">Japan</options>
                                                                   <option value="+962">Jordan</options>
                                                                   <option value="+7">Kazakhstan</options>
                                                                   <option value="+254">Kenya</options>
                                                                   <option value="+686">Kiribati</options>
                                                                   <option value="+850">Korea North</options>
                                                                   <option value="+82">Korea South</options>
                                                                   <option value="+965">Kuwait</options>
                                                                   <option value="+996">Kyrgyzstan</options>
                                                                   <option value="+856">Laos</options>
                                                                   <option value="+371">Latvia</options>
                                                                   <option value="+961">Lebanon</options>
                                                                   <option value="+266">Lesotho</options>
                                                                   <option value="+231">Liberia</options>
                                                                   <option value="+218">Libya</options>
                                                                   <option value="+417">Liechtenstein</options>
                                                                   <option value="+370">Lithuania</options>
                                                                   <option value="+352">Luxembourg</options>
                                                                   <option value="+853">Macao</options>
                                                                   <option value="+389">Macedonia</options>
                                                                   <option value="+261">Madagascar</options>
                                                                   <option value="+265">Malawi</options>
                                                                   <option value="+60">Malaysia</options>
                                                                   <option value="+960">Maldives</options>
                                                                   <option value="+223">Mali</options>
                                                                   <option value="+356">Malta</options>
                                                                   <option value="+692">Marshall Islands</options>
                                                                   <option value="+596">Martinique</options>
                                                                   <option value="+222">Mauritania</options>
                                                                   <option value="+269">Mayotte</options>
                                                                   <option value="+52">Mexico</options>
                                                                   <option value="+691">Micronesia</options>
                                                                   <option value="+373">Moldova</options>
                                                                   <option value="+377">Monaco</options>
                                                                   <option value="+976">Mongolia</options>
                                                                   <option value="+1664">Montserrat4</options>
                                                                   <option value="+212">Morocco</options>
                                                                   <option value="+258">Mozambique</options>
                                                                   <option value="+95">Myanmar/options>
                                                                   <option value="+264">Namibia</options>
                                                                   <option value="+674">Nauru</options>
                                                                   <option value="+977">Nepal</options>
                                                                   <option value="+31">Netherlands</options>
                                                                   <option value="+687">New Caledonia</options>
                                                                   <option value="+64">New Zealand</options>
                                                                   <option value="+505">Nicaragua</options>
                                                                   <option value="+227">Niger</options>
                                                                   <option value="+234">Nigeria</options>
                                                                   <option value="+683">Niue</options>
                                                                   <option value="+672">Norfolk Islands</options>
                                                                   <option value="+670">Northern Marianas</options>
                                                                   <option value="+47">Norway/options>
                                                                   <option value="+968">Oman</options>
                                                                   <option value="+680">Palau</options>
                                                                   <option value="+507">Panama</options>
                                                                   <option value="+675">Papua New Guinea</options>
                                                                   <option value="+595">Paraguay</options>
                                                                   <option value="+51">Peru</options>
                                                                   <option value="+63">Philippines</options>
                                                                   <option value="+48">Poland</options>
                                                                   <option value="+351">Portugal</options>
                                                                   <option value="+1787">Puerto Rico</options>
                                                                   <option value="+974">Qatar</options>
                                                                   <option value="+262">Reunion</options>
                                                                   <option value="+40">Romania</options>
                                                                   <option value="+7">Russia</options>
                                                                   <option value="+250">Rwanda</options>
                                                                   <option value="+378">San Marino</options>
                                                                   <option value="+239">Sao Tome &amp; Principe</options>
                                                                   <option value="+966">Saudi Arabia</options>
                                                                   <option value="+221">Senegal</options>
                                                                   <option value="+381">Serbia</options>
                                                                   <option value="+248">Seychelles</options>
                                                                   <option value="+232">Sierra Leone</options>                                                                   
                                                                   <option value="+421">Slovak Republic</options>
                                                                   <option value="+386">Slovenia</options>
                                                                   <option value="+677">Solomon Islands</options>
                                                                   <option value="+252">Somalia</options>
                                                                   <option value="+27">South Africa</options>
                                                                   <option value="+34">Spain</options>
                                                                   <option value="+94">Sri Lanka</options>
                                                                   <option value="+290">St. Helena</options>
                                                                   <option value="+1869">St. Kitts</options>
                                                                   <option value="+1758">St. Lucia</options>
                                                                   <option value="+249">Sudan</options>
                                                                   <option value="+597">Suriname</options>
                                                                   <option value="+268">Swaziland</options>
                                                                   <option value="+46">Sweden</options>
                                                                   <option value="+41">Switzerland</options>
                                                                   <option value="+963">Syria</options>
                                                                   <option value="+886">Taiwan</options>
                                                                   <option value="+7">Tajikstan</options>
                                                                   <option value="+66">Thailand</options>
                                                                   <option value="+228">Togo</options>
                                                                   <option value="+676">Tonga</options>
                                                                   <option value="+1868">Trinidad &amp; Tobago</options>
                                                                   <option value="+216">Tunisia</options>
                                                                   <option value="+90">Turkey</options>
                                                                   <option value="+7">Turkmenistan</options>
                                                                   <option value="+993">Turkmenistan</options>
                                                                   <option value="+1649">Turks &amp; Caicos Islands</options>
                                                                   <option value="+688">Tuvalu</options>
                                                                   <option value="+256">Uganda</options>
                                                                   <option value="+44" selected>UK</options>
                                                                   <option value="+380">Ukraine</options>
                                                                   <option value="+971">United Arab Emirates</options>
                                                                   <option value="+598">Uruguay</options>
                                                                   <option value="+1">USA</options>
                                                                   <option value="+7">Uzbekistan</options>
                                                                   <option value="+678">Vanuatu</options>
                                                                   <option value="+379">Vatican City</options>
                                                                   <option value="+58">Venezuela</options>
                                                                   <option value="+84">Vietnam </options>
                                                                   <option value="+84">Virgin Islands - British </options>
                                                                   <option value="+84">Virgin Islands - US </options>
                                                                   <option value="+681">Wallis &amp; Futuna</options>
                                                                   <option value="+969">Yemen </options>
                                                                   <option value="+381">Yugoslavia </options>
                                                                   <option value="+243">Zaire </options>
                                                                   <option value="+260">Zambia </options>
                                                                   <option value="+263">Zimbabwe </options
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
                                            <div><span class="phone-code">+65</span><input type="text" placeholder="Mobile number" class="mobile-number" /></div>
                                            
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
                                      </div> 
                                    </article>    

                                    <article class="data-inquiry">
                                    <div class="disclaimer">
                                      <div class="wrapper">
                                            <p><a href="#"><img src="/assets/img/download-disclaimer.png" alt="download-disclaimer"/></a></p>
                                            <p><span>Proin facilisis enim convallis felis suscipit, morbi ultrices quam sit amet urna. <a href="#" target="_blank">Link Here.</a></span></p> 
                                      </div>                    
                                    </div>   
                                      <div class="wrapper">  
                                    <h2 class="main-heading"><span>Enquiry</span> Type</h2>
                                        <div class="data-row">
                                            <p>Enquiry Type*</p>
                                            <div>
                                                <span class="dropdown-span data-dropdown-span">Select enquiry type</span>
                                                <select class="dropdown data-dropdown" name="select">
                                                   <!--  <option value="Singapore" selected disabled>Select enquiry type</option>  -->
                                                    <option value="general" >General</option> 
                                                    <option value="Notification">Notification</option>
                                                    <option value="request">Data Request</option>
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
                                            <p>Purpose of Request/Research<br />Objectives*</p>
                                            <div><textarea name="textarea" rows="10" cols="50" placeholder="Message"></textarea></div>
                                        </div>
                                        <div class="data-row">
                                            <p>Remarks</p>
                                            <div><textarea name="textarea" rows="10" cols="50" placeholder="Message"></textarea></div>
                                            
                                        </div>
                                        <!-- <div class="data-row">
                                            <p>Upload Data Request Form</p> 
                                            <div><span class='upload'><input type="file" />Upload Attachements</span></div>                                           
                                        </div> -->
                                      </div>  


                                            <div class='btnValidate'>Submit</div>
                                            
                                       
                                    </article> 
                                   </div> 
                                  </form>  
                            </section>   
                           
                    </div>       


                   
             

<?php 
     include('footer.php');
?>
      

