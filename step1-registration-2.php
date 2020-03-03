<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="format-detection" content="telephone=no">
<title>CBM Global</title>

<!-- Favicon -->
<link rel="icon" href="imgs/favicon.png" type="image/png" sizes="16x16">

<!-- Bootstrap CSS -->
<link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css">

<!-- Responsive CSS -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">

<!-- Animate CSS -->
<link rel="stylesheet" href="plugins/animate/animate.min.css"/>

<!-- Tel Input CSS -->
<link rel="stylesheet" href="plugins/intltelinput/intltelinput.css"/>
</head>
<body id="step1-registration">
<!-- ########## Wrapper Start ########## -->
<div class="wrapper"> 
  <!-- ########## Sidebar Start ########## -->
  <?php include("sidebar.php"); ?>
  <!-- ########## Sidebar End ########## --> 
  <!-- ########## Page Content Start ########## -->
  <div id="content" class="step1-registration bg-gradiant">
    <div class="content-inner">
      <div class="btnCollapse"> <i></i> </div>
      <div class="container-fluid">
        <div class="row mb3">
          <div class="col-md-12">
            <div class="logo"><a href="index.php"><img src="imgs/logo.svg" class="img-fluid"></a></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-lg-12 col-xl-9">
            <div class="tabs-registration">
              <div class="row">
                <div class="col-md-3 col-lg-3 col-xl-3 p0">
                  <ul class="nav nav-tabs flex-column" id="myTab" role="tablist">
                    <li class="nav-item step1"> <a class="nav-link completed" href="step1-registration-1.php">Profile <br>
                      Information</a> </li>
                    <li class="nav-item step2"> <a class="nav-link active" href="step1-registration-2.php">Address <br>
                      Information</a> </li>
                    <li class="nav-item step3"> <a class="nav-link" href="step1-registration-3.php">Payout <br>
                      Information</a> </li>
                  </ul>
                </div>
                <div class="col-md-9 col-lg-9 col-xl-9">
                  <div class="tab-content" id="myTabContent"> 
                    <!-- Tab 2 Content Start -->
                    <div class="tab-pane show active"> 
                      <!-- <h4 class="text-blue text-uppercase text-semibold mb4">Address Information</h4> -->
                      <form action="">
                        <div class="row">
                          <div class="col-lg-12 col-xl-6">
                            <div class="form-group">
                              <label for="street">Street Name<span>*</span></label>
                              <input type="text" class="form-control" id="street">
                            </div>
                          </div>
                          <div class="col-lg-12 col-xl-6">
                            <div class="row">
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <label for="houseno">House No.<span>*</span></label>
                                  <input type="text" class="form-control" id="houseno">
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <label for="postal">Postal Code<span>*</span></label>
                                  <input type="text" class="form-control" id="postal">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row mb3">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label for="city">City<span>*</span></label>
                              <input type="text" class="form-control" id="city">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label for="region">Region</label>
                              <input type="text" class="form-control" id="region">
                            </div>
                          </div>
                        </div>
                        <div class="row mb1">
                          <div class="col-lg-12">
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="customCheck1" name="example1" checked>
                              <label class="custom-control-label text-normal" for="customCheck1">Add Business Address</label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label for="company">Company Name <span>*</span></label>
                              <input type="text" class="form-control" id="company" placeholder="">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label for="vatmo">VAT Number</label>
                              <input type="text" class="form-control" id="vatno" placeholder="">
                            </div>
                          </div>
                        </div>
                        <div class="row mb3">
                          <div class="col-lg-12">
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="customCheck2" name="example1">
                              <label class="custom-control-label text-normal" for="customCheck2">Same Address</label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label for="country2">Country<span>*</span></label>
                              <select id="country2" class="custom-select">
                                <option value="Afganistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bonaire">Bonaire</option>
                                <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                <option value="Brunei">Brunei</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Canary Islands">Canary Islands</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Channel Islands">Channel Islands</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos Island">Cocos Island</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote DIvoire">Cote DIvoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Curaco">Curacao</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="East Timor">East Timor</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands">Falkland Islands</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Ter">French Southern Ter</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Great Britain">Great Britain</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Hawaii">Hawaii</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="India">India</option>
                                <option value="Iran">Iran</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea North">Korea North</option>
                                <option value="Korea Sout">Korea South</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Laos">Laos</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libya">Libya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macau">Macau</option>
                                <option value="Macedonia">Macedonia</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Midway Islands">Midway Islands</option>
                                <option value="Moldova">Moldova</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Nambia">Nambia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherland Antilles">Netherland Antilles</option>
                                <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                <option value="Nevis">Nevis</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau Island">Palau Island</option>
                                <option value="Palestine">Palestine</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Phillipines">Philippines</option>
                                <option value="Pitcairn Island">Pitcairn Island</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Republic of Montenegro">Republic of Montenegro</option>
                                <option value="Republic of Serbia">Republic of Serbia</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russia">Russia</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="St Barthelemy">St Barthelemy</option>
                                <option value="St Eustatius">St Eustatius</option>
                                <option value="St Helena">St Helena</option>
                                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                <option value="St Lucia">St Lucia</option>
                                <option value="St Maarten">St Maarten</option>
                                <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                <option value="Saipan">Saipan</option>
                                <option value="Samoa">Samoa</option>
                                <option value="Samoa American">Samoa American</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syria">Syria</option>
                                <option value="Tahiti">Tahiti</option>
                                <option value="Taiwan">Taiwan</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Erimates">United Arab Emirates</option>
                                <option value="United States of America">United States of America</option>
                                <option value="Uraguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Vatican City State">Vatican City State</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Vietnam</option>
                                <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                <option value="Wake Island">Wake Island</option>
                                <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zaire">Zaire</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-lg-6"> </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-12 col-xl-6">
                            <div class="form-group">
                              <label for="street">Street Name<span>*</span></label>
                              <input type="text" class="form-control" id="street">
                            </div>
                          </div>
                          <div class="col-lg-12 col-xl-6">
                            <div class="row">
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <label for="houseno">House No.<span>*</span></label>
                                  <input type="text" class="form-control" id="houseno">
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <label for="postal">Postal Code<span>*</span></label>
                                  <input type="text" class="form-control" id="postal">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row mb1">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label for="city">City<span>*</span></label>
                              <input type="text" class="form-control" id="city">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label for="region">Region</label>
                              <input type="text" class="form-control" id="region">
                            </div>
                          </div>
                        </div>
                      </form>
                      <div class="text-right">
                        <button type="submit" class="btn btn-primary" onclick="location.href = 'step1-registration-3.php';">Proceed <i class="fa fa-angle-right"></i></button>
                      </div>
                    </div>
                    <!-- Tab 2 Content End --> 
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-9 col-lg-9 col-xl-3 offset-md-3 offset-lg-3 offset-xl-0">
            <ul class="mandatory-terms">
              <li>Your emailaddress should be the same in all partner registrations.</li>
              <li>Use a strong password to login into your CBM Global account.</li>
              <li>Choose your country of residence. Beware, some countries are restricted from registering with partners. Check the legal compliance page here.</li>
              <li>Choose the language in which you want to be addressed.</li>
              <li>Your full name should be your official name on your ID.</li>
              <li>Subaccounts?</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ########## Page Content End ########## --> 
</div>
<!-- ########## Wrapper End ########## --> 

<!-- jQuery JavaScript --> 
<script type="text/javascript" src="plugins/jquery/jquery-3.3.1.min.js"></script> 

<!-- Bootstrap JavaScript --> 
<script type="text/javascript" src="plugins/bootstrap/js/bootstrap.min.js"></script> 

<!-- Animate Script --> 
<script type="text/javascript" src="plugins/animate/animate.min.js"></script> 
<script type="text/javascript">
  new WOW().init();
</script> 

<!-- SVG Fill Script --> 
<script type="text/javascript" src="plugins/js/svg-img.js"></script> 

<!-- Sidebar Toggle Script --> 
<script type="text/javascript">
  $(document).ready(function () {
    $('.btnCollapse').on('click', function () {
      $('#sidebar').toggleClass('active');
    });
  });
</script>

<!-- Input Script --> 
<script src="plugins/intltelinput/intltelinput.js"></script> 
<script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
      utilsScript: "build/js/utils.js",
    });
</script>

<!-- Accordion Script --> 
<script type="text/javascript">
       $('.panel-collapse').on('show.bs.collapse', function () {
    $(this).siblings('.panel-heading').addClass('active');
  });

  $('.panel-collapse').on('hide.bs.collapse', function () {
    $(this).siblings('.panel-heading').removeClass('active');
  });

  // $('[id^=accordion]').on('show.bs.collapse', function (e) {
  // $('[id^=accordion] .panel-collapse.collapse').not(e.target).collapse('hide');
  // });
</script>  
</body>
</html>