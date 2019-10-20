@extends('layouts.master')

@section('content')
    


    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(/img/bg-img/pre.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Ticket registration</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Register Your Ticket</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Contact Us Area Start -->
    <section class="section-padding-100-0">
        <div class="container">
            <div class="row reg" align="center">
                <div class="col-12">
                    <h3 align="center">Register Your Ticket</h3>
                </div>
            </div>
            <div class="row reg" align="center">
                <div class="col-12 mb-30" align="center">
                   <p>Please fill up this form to register yourself at DevCon Event!</p>
                </div>
            </div>
            <div class="row">
                
                <div class="col-12">
                    <div class="mb-100 clearfix">
                        <div class="login_form">
                            <form action="" method="post">
                                <div class="input_area st">
                                    <div class="row bg-img bg-gradient-overlay">
                                        <!-- Form Group -->
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <label for="name" class="col-md-5 col-form-label text-md-right">Full Name</label>
                                                <input type="text" class="form-control mb-30 col-md-6" name="name" id="name" placeholder="" required>
                                            </div>
                                        </div>
                                         <div class="col-12">
                                            <div class="form-group row">
                                                  <label for="email" class="col-md-5 col-form-label text-md-right">Email Address</label>
                                                <input type="text" class="form-control mb-30 col-md-6" name="email" id="email" placeholder="" required>
                                            </div>
                                        </div>
                                         <div class="col-12">
                                            <div class="form-group row">
                                                 <label for="Password" class="col-md-5 col-form-label text-md-right">Password</label>
                                                <input type="text" class="form-control mb-30 col-md-6" name="Password" id="Password" placeholder="" required>
                                            </div>
                                        </div>
                                         <div class="col-12">
                                            <div class="form-group row">
                                                <label for="Comfirm Password" class="col-md-5 col-form-label text-md-right">Comfirm Password</label>
                                                <input type="text" class="form-control mb-30 col-md-6" name="Comfirm Password" id="Comfirm Password" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <label for="Date of Birth" class="col-md-5 col-form-label text-md-right">Date of Birth</label>
                                                <input type="text" class="form-control mb-30 col-md-6" name="Date of Birth" id="Date of Birth" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <label for="gender" class="col-md-5 col-form-label text-md-right">Gender</label>
                                                <div class="col-md-6">
                                                <label>Male</label>
                                                <input type="radio" class="" name="gender">
                                                  <label>Female</label>
                                                 <input type="radio" class="" name="gender">
                                             </div>
                                            </div>
                                        </div>
                                         <div class="col-12">
                                            <div class="form-group row">
                                                <label for="phone" class="col-md-5 col-form-label text-md-right">Phone</label>
                                                <input type="text" class="form-control mb-30 col-md-6" name="phone" id="phone" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <label for="region" class="col-md-5 col-form-label text-md-right">Township/Region</label>
                                                <input type="text" class="form-control mb-30 col-md-6" name="region" id="region" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <label for="state" class="col-md-5 col-form-label text-md-right">State</label>
                                                <div class="col-md-6">
                                                     <select id="country" name="region" class="form-control region">
                                                         <option value="Yangon Region">Yangon Region</option>
                                                         <option value="Shan State">Shan State</option>
                                                         <option value="Rakhine State ">Rakhine State </option>
                                                         <option value="Sagaing Region">Sagaing Region</option>
                                                         <option value="Ayeyarwady Region">Ayeyarwady Region</option>
                                                         <option value="Kayin State">Kayin State</option>
                                                         <option value="Naypyidaw Union Territory">Naypyidaw Union Territory</option>
                                                         <option value="Kachin State">Kachin State</option>
                                                         <option value="Mon State">Mon State</option>
                                                         <option value="Mandalay Region ">Mandalay Region </option>
                                                         <option value="Magway Region">Magway Region</option>
                                                         <option value="Kayah State ">Kayah State </option>
                                                         <option value="Chin State">Chin State</option>
                                                         <option value="Tanintharyi Region">Tanintharyi Region</option>
                                                         <option value="Bago Region ">Bago Region </option>
                                                     </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <label for="country" class="col-md-5 col-form-label text-md-right">Country</label>
                                                <div class="col-md-6">
                                                    <select id="country" name="country" class="form-control">
                                                             <option value="MM">Myanmar</option><!-- 
                                                            <option value="GB">United Kingdom</option>
                                                            <option value="US">United States</option> -->
                                                            <option disabled>-- Full list --</option>
                                                            <option value="Afghanistan">Afghanistan</option> 
                                                            <option value="Albania">Albania</option> 
                                                            <option value="Algeria">Algeria</option> 
                                                            <option value="American Samoa">American Samoa</option> 
                                                            <option value="Andorra">Andorra</option> 
                                                            <option value="Angola">Angola</option> 
                                                            <option value="Anguilla">Anguilla</option> 
                                                            <option value="Antarctica">Antarctica</option> 
                                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option> 
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
                                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
                                                            <option value="Botswana">Botswana</option> 
                                                            <option value="Bouvet Island">Bouvet Island</option> 
                                                            <option value="Brazil">Brazil</option> 
                                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
                                                            <option value="Brunei Darussalam">Brunei Darussalam</option> 
                                                            <option value="Bulgaria">Bulgaria</option> 
                                                            <option value="Burkina Faso">Burkina Faso</option> 
                                                            <option value="Burundi">Burundi</option> 
                                                            <option value="Cambodia">Cambodia</option> 
                                                            <option value="Cameroon">Cameroon</option> 
                                                            <option value="Canada">Canada</option> 
                                                            <option value="Cape Verde">Cape Verde</option> 
                                                            <option value="Cayman Islands">Cayman Islands</option> 
                                                            <option value="Central African Republic">Central African Republic</option> 
                                                            <option value="Chad">Chad</option> 
                                                            <option value="Chile">Chile</option> 
                                                            <option value="China">China</option> 
                                                            <option value="Christmas Island">Christmas Island</option> 
                                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
                                                            <option value="Colombia">Colombia</option> 
                                                            <option value="Comoros">Comoros</option> 
                                                            <option value="Congo">Congo</option> 
                                                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
                                                            <option value="Cook Islands">Cook Islands</option> 
                                                            <option value="Costa Rica">Costa Rica</option> 
                                                            <option value="Cote D'ivoire">Cote D'ivoire</option> 
                                                            <option value="Croatia">Croatia</option> 
                                                            <option value="Cuba">Cuba</option> 
                                                            <option value="Cyprus">Cyprus</option> 
                                                            <option value="Czech Republic">Czech Republic</option> 
                                                            <option value="Denmark">Denmark</option> 
                                                            <option value="Djibouti">Djibouti</option> 
                                                            <option value="Dominica">Dominica</option> 
                                                            <option value="Dominican Republic">Dominican Republic</option> 
                                                            <option value="Ecuador">Ecuador</option> 
                                                            <option value="Egypt">Egypt</option> 
                                                            <option value="El Salvador">El Salvador</option> 
                                                            <option value="Equatorial Guinea">Equatorial Guinea</option> 
                                                            <option value="Eritrea">Eritrea</option> 
                                                            <option value="Estonia">Estonia</option> 
                                                            <option value="Ethiopia">Ethiopia</option> 
                                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
                                                            <option value="Faroe Islands">Faroe Islands</option> 
                                                            <option value="Fiji">Fiji</option> 
                                                            <option value="Finland">Finland</option> 
                                                            <option value="France">France</option> 
                                                            <option value="French Guiana">French Guiana</option> 
                                                            <option value="French Polynesia">French Polynesia</option> 
                                                            <option value="French Southern Territories">French Southern Territories</option> 
                                                            <option value="Gabon">Gabon</option> 
                                                            <option value="Gambia">Gambia</option> 
                                                            <option value="Georgia">Georgia</option> 
                                                            <option value="Germany">Germany</option> 
                                                            <option value="Ghana">Ghana</option> 
                                                            <option value="Gibraltar">Gibraltar</option> 
                                                            <option value="Greece">Greece</option> 
                                                            <option value="Greenland">Greenland</option> 
                                                            <option value="Grenada">Grenada</option> 
                                                            <option value="Guadeloupe">Guadeloupe</option> 
                                                            <option value="Guam">Guam</option> 
                                                            <option value="Guatemala">Guatemala</option> 
                                                            <option value="Guinea">Guinea</option> 
                                                            <option value="Guinea-bissau">Guinea-bissau</option> 
                                                            <option value="Guyana">Guyana</option> 
                                                            <option value="Haiti">Haiti</option> 
                                                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
                                                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
                                                            <option value="Honduras">Honduras</option> 
                                                            <option value="Hong Kong">Hong Kong</option> 
                                                            <option value="Hungary">Hungary</option> 
                                                            <option value="Iceland">Iceland</option> 
                                                            <option value="India">India</option> 
                                                            <option value="Indonesia">Indonesia</option> 
                                                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
                                                            <option value="Iraq">Iraq</option> 
                                                            <option value="Ireland">Ireland</option> 
                                                            <option value="Israel">Israel</option> 
                                                            <option value="Italy">Italy</option> 
                                                            <option value="Jamaica">Jamaica</option> 
                                                            <option value="Japan">Japan</option> 
                                                            <option value="Jordan">Jordan</option> 
                                                            <option value="Kazakhstan">Kazakhstan</option> 
                                                            <option value="Kenya">Kenya</option> 
                                                            <option value="Kiribati">Kiribati</option> 
                                                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
                                                            <option value="Korea, Republic of">Korea, Republic of</option> 
                                                            <option value="Kuwait">Kuwait</option> 
                                                            <option value="Kyrgyzstan">Kyrgyzstan</option> 
                                                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
                                                            <option value="Latvia">Latvia</option> 
                                                            <option value="Lebanon">Lebanon</option> 
                                                            <option value="Lesotho">Lesotho</option> 
                                                            <option value="Liberia">Liberia</option> 
                                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
                                                            <option value="Liechtenstein">Liechtenstein</option> 
                                                            <option value="Lithuania">Lithuania</option> 
                                                            <option value="Luxembourg">Luxembourg</option> 
                                                            <option value="Macao">Macao</option> 
                                                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
                                                            <option value="Madagascar">Madagascar</option> 
                                                            <option value="Malawi">Malawi</option> 
                                                            <option value="Malaysia">Malaysia</option> 
                                                            <option value="Maldives">Maldives</option> 
                                                            <option value="Mali">Mali</option> 
                                                            <option value="Malta">Malta</option> 
                                                            <option value="Marshall Islands">Marshall Islands</option> 
                                                            <option value="Martinique">Martinique</option> 
                                                            <option value="Mauritania">Mauritania</option> 
                                                            <option value="Mauritius">Mauritius</option> 
                                                            <option value="Mayotte">Mayotte</option> 
                                                            <option value="Mexico">Mexico</option> 
                                                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
                                                            <option value="Moldova, Republic of">Moldova, Republic of</option> 
                                                            <option value="Monaco">Monaco</option> 
                                                            <option value="Mongolia">Mongolia</option> 
                                                            <option value="Montserrat">Montserrat</option> 
                                                            <option value="Morocco">Morocco</option> 
                                                            <option value="Mozambique">Mozambique</option> 
                                                            <option value="Myanmar">Myanmar</option> 
                                                            <option value="Namibia">Namibia</option> 
                                                            <option value="Nauru">Nauru</option> 
                                                            <option value="Nepal">Nepal</option> 
                                                            <option value="Netherlands">Netherlands</option> 
                                                            <option value="Netherlands Antilles">Netherlands Antilles</option> 
                                                            <option value="New Caledonia">New Caledonia</option> 
                                                            <option value="New Zealand">New Zealand</option> 
                                                            <option value="Nicaragua">Nicaragua</option> 
                                                            <option value="Niger">Niger</option> 
                                                            <option value="Nigeria">Nigeria</option> 
                                                            <option value="Niue">Niue</option> 
                                                            <option value="Norfolk Island">Norfolk Island</option> 
                                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option> 
                                                            <option value="Norway">Norway</option> 
                                                            <option value="Oman">Oman</option> 
                                                            <option value="Pakistan">Pakistan</option> 
                                                            <option value="Palau">Palau</option> 
                                                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
                                                            <option value="Panama">Panama</option> 
                                                            <option value="Papua New Guinea">Papua New Guinea</option> 
                                                            <option value="Paraguay">Paraguay</option> 
                                                            <option value="Peru">Peru</option> 
                                                            <option value="Philippines">Philippines</option> 
                                                            <option value="Pitcairn">Pitcairn</option> 
                                                            <option value="Poland">Poland</option> 
                                                            <option value="Portugal">Portugal</option> 
                                                            <option value="Puerto Rico">Puerto Rico</option> 
                                                            <option value="Qatar">Qatar</option> 
                                                            <option value="Reunion">Reunion</option> 
                                                            <option value="Romania">Romania</option> 
                                                            <option value="Russian Federation">Russian Federation</option> 
                                                            <option value="Rwanda">Rwanda</option> 
                                                            <option value="Saint Helena">Saint Helena</option> 
                                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                                                            <option value="Saint Lucia">Saint Lucia</option> 
                                                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
                                                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
                                                            <option value="Samoa">Samoa</option> 
                                                            <option value="San Marino">San Marino</option> 
                                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                                                            <option value="Saudi Arabia">Saudi Arabia</option> 
                                                            <option value="Senegal">Senegal</option> 
                                                            <option value="Serbia and Montenegro">Serbia and Montenegro</option> 
                                                            <option value="Seychelles">Seychelles</option> 
                                                            <option value="Sierra Leone">Sierra Leone</option> 
                                                            <option value="Singapore">Singapore</option> 
                                                            <option value="Slovakia">Slovakia</option> 
                                                            <option value="Slovenia">Slovenia</option> 
                                                            <option value="Solomon Islands">Solomon Islands</option> 
                                                            <option value="Somalia">Somalia</option> 
                                                            <option value="South Africa">South Africa</option> 
                                                            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
                                                            <option value="Spain">Spain</option> 
                                                            <option value="Sri Lanka">Sri Lanka</option> 
                                                            <option value="Sudan">Sudan</option> 
                                                            <option value="Suriname">Suriname</option> 
                                                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
                                                            <option value="Swaziland">Swaziland</option> 
                                                            <option value="Sweden">Sweden</option> 
                                                            <option value="Switzerland">Switzerland</option> 
                                                            <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
                                                            <option value="Taiwan, Province of China">Taiwan, Province of China</option> 
                                                            <option value="Tajikistan">Tajikistan</option> 
                                                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
                                                            <option value="Thailand">Thailand</option> 
                                                            <option value="Timor-leste">Timor-leste</option> 
                                                            <option value="Togo">Togo</option> 
                                                            <option value="Tokelau">Tokelau</option> 
                                                            <option value="Tonga">Tonga</option> 
                                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option> 
                                                            <option value="Tunisia">Tunisia</option> 
                                                            <option value="Turkey">Turkey</option> 
                                                            <option value="Turkmenistan">Turkmenistan</option> 
                                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
                                                            <option value="Tuvalu">Tuvalu</option> 
                                                            <option value="Uganda">Uganda</option> 
                                                            <option value="Ukraine">Ukraine</option> 
                                                            <option value="United Arab Emirates">United Arab Emirates</option> 
                                                            <option value="United Kingdom">United Kingdom</option> 
                                                            <option value="United States">United States</option> 
                                                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
                                                            <option value="Uruguay">Uruguay</option> 
                                                            <option value="Uzbekistan">Uzbekistan</option> 
                                                            <option value="Vanuatu">Vanuatu</option> 
                                                            <option value="Venezuela">Venezuela</option> 
                                                            <option value="Viet Nam">Viet Nam</option> 
                                                            <option value="Virgin Islands, British">Virgin Islands, British</option> 
                                                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
                                                            <option value="Wallis and Futuna">Wallis and Futuna</option> 
                                                            <option value="Western Sahara">Western Sahara</option> 
                                                            <option value="Yemen">Yemen</option> 
                                                            <option value="Zambia">Zambia</option> 
                                                            <option value="Zimbabwe">Zimbabwe</option>                          
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="col-12">
                                            <div class="form-group row">
                                                <label for="employee-type" class="col-md-5 col-form-label text-md-right">Employee Type</label>
                                                <div class="col-md-6">
                                                     <select id="country" name="employee-type" class="form-control">
                                                         <option value="full-time">full-time</option>
                                                         <option value="part-time">part-time</option>
                                                         <option value="self-Employed">self-Employed</option>
                                                         <option value="Owned Business">Owned Business</option>
                                                         <option value="Freelance">Freelance</option>
                                                         <option value="Others">Others</option>
                                                     </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <label for="occupation" class="col-md-5 col-form-label text-md-right">Occupation/Position</label>
                                                <input type="text" class="form-control mb-30 col-md-6" name="occupation" id="occupation" placeholder="" required>
                                            </div>
                                        </div>
                                         <div class="col-12">
                                            <div class="form-group row">
                                                <label for="company-name" class="col-md-5 col-form-label text-md-right">Company Name</label>
                                                <input type="text" class="form-control mb-30 col-md-6" name="company-name" id="company-name" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <label for="Development-Environment" class="col-md-5 col-form-label text-md-right">What is your Development Environment?</label>
                                                <textarea class="col-md-6 mb-30 form-control" name="Development-Environment" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <label for="Development-Environment" class="col-md-5 col-form-label text-md-right">What is your Development Platform/Scripting language?</label>
                                                <textarea class="col-md-6 mb-30 form-control" name="Development-Environment" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <label for="studied" class="col-md-5 col-form-label text-md-right">Place where you studied</label>
                                                <div class="col-md-7 mt-20">
                                                    <input type="checkbox" class="" name="" value="Computer Universities"><span>&nbsp;Computer Universities</span><br>
                                                    <input type="checkbox" class="" name="" value="Technological Universities"><span>&nbsp;Technological Universities</span> <br>
                                                    <input type="checkbox" class="" name="" value="Universities of Information Technology"><span>&nbsp;Universities of Information Technology</span><br>
                                                    <input type="checkbox" class="" name="" value="Private Colleges/Universities"><span>&nbsp;Private  Colleges/Universities</span><br>
                                                    <input type="checkbox" class="" name="" value="Private Training Centers"><span>&nbsp;Private Training Centers</span><br>
                                                    <input type="checkbox" class="" name="" value="Oversea Colleges/Universities"><span>&nbsp;Oversea Colleges/Universities</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <label for="attendprevious" class="col-md-5 col-form-label text-md-right">Did you attend previous year DevCon?</label>
                                                <div class="col-md-7 mt-20">
                                                    <input type="checkbox" class="" name="" value="Not at all"><span>&nbsp;Not at all</span><br>
                                                    <input type="checkbox" class="" name="" value="DevCon2012"><span>&nbsp;DevCon2012</span><br>
                                                    <input type="checkbox" class="" name="" value="DevCon2013"><span>&nbsp;DevCon2013</span><br>
                                                    <input type="checkbox" class="" name="" value="DevCon2014"><span>&nbsp;DevCon2014</span><br>
                                                    <input type="checkbox" class="" name="" value="DevCon2016"><span>&nbsp;DevCon2016</span><br>
                                                    <input type="checkbox" class="" name="" value="DevCon2017"><span>&nbsp;DevCon2017</span>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="col-12">
                                            <div class="form-group row">
                                                <label for="about" class="col-md-5 col-form-label text-md-right">How did you hear about DevCon Myanmar?</label>
                                                <div class="col-md-7 mt-20">
                                                    <input type="checkbox" class="" name="" value="Search Engines"><span>&nbsp;Search Engines</span><br>
                                                    <input type="checkbox" class="" name="" value="Social Networking"><span>&nbsp;Social Networking</span><br>
                                                    <input type="checkbox" class="" name="" value="Offline/Online Publicating & News"><span>&nbsp;Offline/Online Publicating & News</span><br>
                                                    <input type="checkbox" class="" name="" value="Attend Previous Years"><span>&nbsp;Attend Previous Years</span><br>
                                                    <input type="checkbox" class="" name="" value="World of Mouth"><span>&nbsp;Word of Mouth</span><br>
                                                    <input type="checkbox" class="" name="" value="Others"><span>&nbsp;Others</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Button -->
                                        <div class="col-12" align="center">
                                            <button type="submit" class="btn confer-btn-white" name="register">Register<i class="zmdi zmdi-long-arrow-right"></i></button>
                                        </div>
                                       
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us Area End -->
    @endsection