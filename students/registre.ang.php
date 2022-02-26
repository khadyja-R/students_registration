<?php
require_once 'connection.php';
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/c/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.css">
    <script src="../js/sweetalert.min.js"></script>
</head>

<body data-topbar="dark">
<div class="row">
    <div class="col-md-6 mx-auto mt-5">
        <div class="card p-4">
            <div class="card-body">
                <form id="stdRegForm" action="index.php" method="post" enctype='multipart/form-data'>
                    <div id="step1">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-shipping" role="tabpanel" aria-labelledby="v-pills-shipping-tab">
                                        <div>
                                            <h4 class="card-title">personal information </h4>
                                            <p class="card-title-desc mb-4">Fill all information below</p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="billing-name" class="col-form-label">First Name <small style="color:red;">*</small></label>
                                                        <input type="text" class="form-control" id="first" name="first_name" placeholder="Enter your name" required>
                                                        <span id="error_first_name" class="text-danger"></span>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="billing-name" class="col-form-label"> Phone <small style="color:red;">*</small></label>
                                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter your Phone." required>
                                                        <span id="error_phone" class="text-danger"></span>

                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="billing-email-address" class="col-form-label">Cne<small style="color:red;">*</small></label>
                                                        <input type="text" class="form-control" name="cne" id="cne" placeholder="Enter your cne" required>
                                                        <span id="error_cne" class="text-danger"></span>

                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="billing-email-address" class="col-form-label">Password<small style="color:red;">*</small></label>
                                                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                                                        <i id="eye" class="fa fa-eye" style="position:absolute;top:54%;left:92%"></i>
                                                        <span id="error_password" class="text-danger"></span>

                                                    </div>
                                                    <div class="mb-3 p-1">
                                                        <label for="name" class="col-sm-3 col-form-label"> Gender <small class="text-danger">*</small></label>
                                                        <select name="gender" id="gender" class="form-control" required>
                                                            <option value="">-Select Gender-</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>
                                                        <span id="error_gender" class="text-danger"></span>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label class="col-form-label">Country <small style="color:red;">*</small></label>
                                                        <select class="form-control select2" title="Country" name="nationality" id="natio" required>
                                                            <option value="Morocco">Morocco</option>
                                                            <option value="AF">Afghanistan</option>
                                                            <option value="AL">Albania</option>
                                                            <option value="DZ">Algeria</option>
                                                            <option value="AS">American Samoa</option>
                                                            <option value="AD">Andorra</option>
                                                            <option value="AO">Angola</option>
                                                            <option value="AI">Anguilla</option>
                                                            <option value="AQ">Antarctica</option>
                                                            <option value="AR">Argentina</option>
                                                            <option value="AM">Armenia</option>
                                                            <option value="AW">Aruba</option>
                                                            <option value="AU">Australia</option>
                                                            <option value="AT">Austria</option>
                                                            <option value="AZ">Azerbaijan</option>
                                                            <option value="BS">Bahamas</option>
                                                            <option value="BH">Bahrain</option>
                                                            <option value="BD">Bangladesh</option>
                                                            <option value="BB">Barbados</option>
                                                            <option value="BY">Belarus</option>
                                                            <option value="BE">Belgium</option>
                                                            <option value="BZ">Belize</option>
                                                            <option value="BJ">Benin</option>
                                                            <option value="BM">Bermuda</option>
                                                            <option value="BT">Bhutan</option>
                                                            <option value="BO">Bolivia</option>
                                                            <option value="BW">Botswana</option>
                                                            <option value="BV">Bouvet Island</option>
                                                            <option value="BR">Brazil</option>
                                                            <option value="BN">Brunei Darussalam</option>
                                                            <option value="BG">Bulgaria</option>
                                                            <option value="BF">Burkina Faso</option>
                                                            <option value="BI">Burundi</option>
                                                            <option value="KH">Cambodia</option>
                                                            <option value="CM">Cameroon</option>
                                                            <option value="CA">Canada</option>
                                                            <option value="CV">Cape Verde</option>
                                                            <option value="KY">Cayman Islands</option>
                                                            <option value="CF">Central African Republic</option>
                                                            <option value="TD">Chad</option>
                                                            <option value="CL">Chile</option>
                                                            <option value="CN">China</option>
                                                            <option value="CX">Christmas Island</option>
                                                            <option value="CC">Cocos (Keeling) Islands</option>
                                                            <option value="CO">Colombia</option>
                                                            <option value="KM">Comoros</option>
                                                            <option value="CG">Congo</option>
                                                            <option value="CK">Cook Islands</option>
                                                            <option value="CR">Costa Rica</option>
                                                            <option value="CI">Cote d'Ivoire</option>
                                                            <option value="HR">Croatia (Hrvatska)</option>
                                                            <option value="CU">Cuba</option>
                                                            <option value="CY">Cyprus</option>
                                                            <option value="CZ">Czech Republic</option>
                                                            <option value="DK">Denmark</option>
                                                            <option value="DJ">Djibouti</option>
                                                            <option value="DM">Dominica</option>
                                                            <option value="DO">Dominican Republic</option>
                                                            <option value="EC">Ecuador</option>
                                                            <option value="EG">Egypt</option>
                                                            <option value="SV">El Salvador</option>
                                                            <option value="GQ">Equatorial Guinea</option>
                                                            <option value="ER">Eritrea</option>
                                                            <option value="EE">Estonia</option>
                                                            <option value="ET">Ethiopia</option>
                                                            <option value="FK">Falkland Islands (Malvinas)</option>
                                                            <option value="FO">Faroe Islands</option>
                                                            <option value="FJ">Fiji</option>
                                                            <option value="FI">Finland</option>
                                                            <option value="FR">France</option>
                                                            <option value="GF">French Guiana</option>
                                                            <option value="PF">French Polynesia</option>
                                                            <option value="GA">Gabon</option>
                                                            <option value="GM">Gambia</option>
                                                            <option value="GE">Georgia</option>
                                                            <option value="DE">Germany</option>
                                                            <option value="GH">Ghana</option>
                                                            <option value="GI">Gibraltar</option>
                                                            <option value="GR">Greece</option>
                                                            <option value="GL">Greenland</option>
                                                            <option value="GD">Grenada</option>
                                                            <option value="GP">Guadeloupe</option>
                                                            <option value="GU">Guam</option>
                                                            <option value="GT">Guatemala</option>
                                                            <option value="GN">Guinea</option>
                                                            <option value="GW">Guinea-Bissau</option>
                                                            <option value="GY">Guyana</option>
                                                            <option value="HT">Haiti</option>
                                                            <option value="HN">Honduras</option>
                                                            <option value="HK">Hong Kong</option>
                                                            <option value="HU">Hungary</option>
                                                            <option value="IS">Iceland</option>
                                                            <option value="IN">India</option>
                                                            <option value="ID">Indonesia</option>
                                                            <option value="IQ">Iraq</option>
                                                            <option value="IE">Ireland</option>
                                                            <option value="IL">Israel</option>
                                                            <option value="IT">Italy</option>
                                                            <option value="JM">Jamaica</option>
                                                            <option value="JP">Japan</option>
                                                            <option value="JO">Jordan</option>
                                                            <option value="KZ">Kazakhstan</option>
                                                            <option value="KE">Kenya</option>
                                                            <option value="KI">Kiribati</option>
                                                            <option value="KR">Korea, Republic of</option>
                                                            <option value="KW">Kuwait</option>
                                                            <option value="KG">Kyrgyzstan</option>
                                                            <option value="LV">Latvia</option>
                                                            <option value="LB">Lebanon</option>
                                                            <option value="LS">Lesotho</option>
                                                            <option value="LR">Liberia</option>
                                                            <option value="LY">Libyan Arab Jamahiriya</option>
                                                            <option value="LI">Liechtenstein</option>
                                                            <option value="LT">Lithuania</option>
                                                            <option value="LU">Luxembourg</option>
                                                            <option value="MO">Macau</option>
                                                            <option value="MG">Madagascar</option>
                                                            <option value="MW">Malawi</option>
                                                            <option value="MY">Malaysia</option>
                                                            <option value="MV">Maldives</option>
                                                            <option value="ML">Mali</option>
                                                            <option value="MT">Malta</option>
                                                            <option value="MH">Marshall Islands</option>
                                                            <option value="MQ">Martinique</option>
                                                            <option value="MR">Mauritania</option>
                                                            <option value="MU">Mauritius</option>
                                                            <option value="YT">Mayotte</option>
                                                            <option value="MX">Mexico</option>
                                                            <option value="MD">Moldova, Republic of</option>
                                                            <option value="MC">Monaco</option>
                                                            <option value="MN">Mongolia</option>
                                                            <option value="MS">Montserrat</option>
                                                            <option value="MA">Morocco</option>
                                                            <option value="MZ">Mozambique</option>
                                                            <option value="MM">Myanmar</option>
                                                            <option value="NA">Namibia</option>
                                                            <option value="NR">Nauru</option>
                                                            <option value="NP">Nepal</option>
                                                            <option value="NL">Netherlands</option>
                                                            <option value="AN">Netherlands Antilles</option>
                                                            <option value="NC">New Caledonia</option>
                                                            <option value="NZ">New Zealand</option>
                                                            <option value="NI">Nicaragua</option>
                                                            <option value="NE">Niger</option>
                                                            <option value="NG">Nigeria</option>
                                                            <option value="NU">Niue</option>
                                                            <option value="NF">Norfolk Island</option>
                                                            <option value="MP">Northern Mariana Islands</option>
                                                            <option value="NO">Norway</option>
                                                            <option value="OM">Oman</option>
                                                            <option value="PW">Palau</option>
                                                            <option value="PA">Panama</option>
                                                            <option value="PG">Papua New Guinea</option>
                                                            <option value="PY">Paraguay</option>
                                                            <option value="PE">Peru</option>
                                                            <option value="PH">Philippines</option>
                                                            <option value="PN">Pitcairn</option>
                                                            <option value="PL">Poland</option>
                                                            <option value="PT">Portugal</option>
                                                            <option value="PR">Puerto Rico</option>
                                                            <option value="QA">Qatar</option>
                                                            <option value="RE">Reunion</option>
                                                            <option value="RO">Romania</option>
                                                            <option value="RU">Russian Federation</option>
                                                            <option value="RW">Rwanda</option>
                                                            <option value="KN">Saint Kitts and Nevis</option>
                                                            <option value="LC">Saint LUCIA</option>
                                                            <option value="WS">Samoa</option>
                                                            <option value="SM">San Marino</option>
                                                            <option value="ST">Sao Tome and Principe</option>
                                                            <option value="SA">Saudi Arabia</option>
                                                            <option value="SN">Senegal</option>
                                                            <option value="SC">Seychelles</option>
                                                            <option value="SL">Sierra Leone</option>
                                                            <option value="SG">Singapore</option>
                                                            <option value="SK">Slovakia (Slovak Republic)</option>
                                                            <option value="SI">Slovenia</option>
                                                            <option value="SB">Solomon Islands</option>
                                                            <option value="SO">Somalia</option>
                                                            <option value="ZA">South Africa</option>
                                                            <option value="ES">Spain</option>
                                                            <option value="LK">Sri Lanka</option>
                                                            <option value="SH">St. Helena</option>
                                                            <option value="PM">St. Pierre and Miquelon</option>
                                                            <option value="SD">Sudan</option>
                                                            <option value="SR">Suriname</option>
                                                            <option value="SZ">Swaziland</option>
                                                            <option value="SE">Sweden</option>
                                                            <option value="CH">Switzerland</option>
                                                            <option value="SY">Syrian Arab Republic</option>
                                                            <option value="TW">Taiwan, Province of China</option>
                                                            <option value="TJ">Tajikistan</option>
                                                            <option value="TZ">Tanzania, United Republic of</option>
                                                            <option value="TH">Thailand</option>
                                                            <option value="TG">Togo</option>
                                                            <option value="TK">Tokelau</option>
                                                            <option value="TO">Tonga</option>
                                                            <option value="TT">Trinidad and Tobago</option>
                                                            <option value="TN">Tunisia</option>
                                                            <option value="TR">Turkey</option>
                                                            <option value="TM">Turkmenistan</option>
                                                            <option value="TC">Turks and Caicos Islands</option>
                                                            <option value="TV">Tuvalu</option>
                                                            <option value="UG">Uganda</option>
                                                            <option value="UA">Ukraine</option>
                                                            <option value="AE">United Arab Emirates</option>
                                                            <option value="GB">United Kingdom</option>
                                                            <option value="US">United States</option>
                                                            <option value="UY">Uruguay</option>
                                                            <option value="UZ">Uzbekistan</option>
                                                            <option value="VU">Vanuatu</option>
                                                            <option value="VE">Venezuela</option>
                                                            <option value="VN">Viet Nam</option>
                                                            <option value="VG">Virgin Islands (British)</option>
                                                            <option value="VI">Virgin Islands (U.S.)</option>
                                                            <option value="WF">Wallis and Futuna Islands</option>
                                                            <option value="EH">Western Sahara</option>
                                                            <option value="YE">Yemen</option>
                                                            <option value="ZM">Zambia</option>
                                                            <option value="ZW">Zimbabwe</option>
                                                        </select>
                                                        <span id="error_nationality" class="text-danger"></span>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        disabled: <small style="color: red">*</small><input type="radio" name="disabled" value="yes" id="show">
                                                        <label for="yes">yes</label>
                                                        <input type="radio" name="disabled" value="no" id="hide">
                                                        <label for="no">no</label>
                                                        <select name="disabled" id="disabled" class="form-control" required style="display: none" />
                                                        <option value="">-select-</option>
                                                        <option value="Auditif">Auditif</option>
                                                        <option value="Moteur">Moteur</option>
                                                        <option value="Visuel">Visuel</option>
                                                        <option value="Auditif et Moteur">Auditif et Moteur</option>
                                                        <option value="Moteur et Visuel">Moteur et Visuel</option>
                                                        <option value="Auditif et Visuel "> Auditif et Visuel</option>
                                                        <option value="Auditif,Moteur et Visuel">Auditif,Moteur et Visuel</option>
                                                        </select>
                                                        <span id="error_disabled" class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="billing-email-address" class="col-form-label">Last name <small style="color:red;">*</small></label>
                                                        <input type="text" class="form-control" name="last_name" id="last" placeholder="Enter your last name" required>
                                                        <span id="error_last_name" class="text-danger"></span>
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label for="billing-email-address" class="col-form-label">Email <small style="color:red;">*</small></label>
                                                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                                                        <span id="error_email" class="text-danger"></span>

                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="billing-email-address" class="col-form-label">Birthday <small style="color:red;">*</small></label>
                                                        <input type="date" class="form-control" name="birthday" id="birthday" placeholder="" required>
                                                        <span id="error_birthday" class="text-danger"></span>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="billing-email-address" class="col-form-label">Confirm Password<small style="color:red;">*</small></label>
                                                        <input type="text" class="form-control" name="confirm_password" id="passconf" placeholder="confirm your password" required>
                                                        <span id="error_confirm_password" class="text-danger"></span>
                                                    </div>
                                                    <div class="mb-3 p-1">
                                                        <label for="name" class="col-sm-3 col-form-label"> Situation <small class="text-danger">*</small></label>
                                                        <select name="situation" id="situation" class="form-control" required>
                                                            <option value="">-select your situation-</option>
                                                            <option value="single">single</option>
                                                            <option value="Married">Married</option>
                                                            <option value="Divorced">Divorced</option>
                                                        </select>
                                                        <span id="error_situation" class="text-danger"></span>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="billing-address" class="col-form-label">Address <small style="color:red;">*</small></label>
                                                        <textarea class="form-control" name="adress" id="adress" rows="3" placeholder="Enter full address" required></textarea>
                                                        <span id="error_adress" class="text-danger"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-sm-6">
                                                <button type="submit" id="step1Btn" class="btn btn-success" style="width:40%;" name="step1Btn">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="step2" style="display: none">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-shipping" role="tabpanel" aria-labelledby="v-pills-shipping-tab">
                                        <div>
                                            <h4 class="card-title"> information </h4>
                                            <p class="card-title-desc mb-4">Fill all information below</p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="name" class="col-sm-3 col-form-label">Bac year <small class="text-danger">*</small></label>
                                                        <input type="text" id="bac_year" class="form-control" name="bac_year" placeholder="bac year" required>
                                                        <span id="error_bac_year" class="text-danger"></span>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="name" class="col-sm-3 col-form-label"> Bac type <small class="text-danger">*</small></label>
                                                        <select name="bac_type" id="bactype" class="form-control" required>
                                                            <option value="">-Select your bac type-</option>
                                                            <?php
                                                            $bacTypeQuery = $database->prepare("SELECT * FROM bac_type");
                                                            $bacTypeQuery->execute();
                                                            $bacTypes = $bacTypeQuery->fetchAll(PDO::FETCH_ASSOC);
                                                            foreach ($bacTypes as $bt) {
                                                                echo "<option value=" . $bt['name'] . ">" . $bt['name'] . "</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                        <span id="error_bac_type" class="text-danger"></span>

                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="name" class="col-sm-3 col-form-label"> School year <small class="text-danger">*</small></label>
                                                        <input type="text" name="school_year" class="form-control" id="shoole" placeholder="school year" required>
                                                        <span id="error_school_year" class="text-danger"></span>
                                                    </div>
                                                    <div class="mb-3 p-1">
                                                        <label for="name" class="col-sm-3 col-form-label"> Bac:  Recto <small class="text-danger">*</small></label>
                                                        <input type="file" name="bac_recto" id="recto" class="form-control" required>
                                                        <span id="error_recto" class="text-danger"></span>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="name" class="col-sm-3 col-form-label">Personal picture<small class="text-danger">*</small></label>
                                                        <input type="file" name="personal_picture" id="picture" class="form-control" required>
                                                        <span id="error_personal_picture" class="text-danger"></span>
                                                    </div>

                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="name" class="col-sm-3 col-form-label"> bac note <small class="text-danger">*</small></label>
                                                        <input id="note" class="form-control " name="bac_note" required />
                                                        <span id="error_note" class="text-danger"></span>
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label for="name" class="col-sm-3 col-form-label"> Cin <small class="text-danger">*</small></label>

                                                        <input type="text" name="cin" class="form-control" id="cin" value="" placeholder="cin" required>
                                                        <span id="error_cin" class="text-danger"></span>
                                                        <input type="hidden" name="registre_form" id="registre_form" value="true">

                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="name" class="col-sm-3 col-form-label"> Sector <small class="text-danger">*</small></label>
                                                        <select name="sector" id="sector" class="form-control" required>
                                                            <option value="">-Select your sector-</option>
                                                            <?php
                                                            $bacTypeQuery = $database->prepare("SELECT * FROM sector");
                                                            $bacTypeQuery->execute();
                                                            $bacTypes = $bacTypeQuery->fetchAll(PDO::FETCH_ASSOC);
                                                            foreach ($bacTypes as $bt) {
                                                                echo "<option value=" . $bt['name'] . ">" . $bt['name'] . "</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                        <span id="error_sector" class="text-danger"></span>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="name" class="col-sm-3 col-form-label"> Verso <small class="text-danger">*</small></label>
                                                        <input type="file" name="bac_verso" id="verso" class="form-control" required>
                                                        <span id="error_verso" class="text-danger"></span>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <button type="button" class="btn btn-success" style="width:40%;" id="step2btn" name="registre">registre</button>
                                            </div>
                                           <a href="../students/fichier.ang">After you confirm your registration, go to this link to download your registration file</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="../js/jquery-3.6.0.js" type="text/javascript"></script>
<script src="../js/test.js"></script>
<script>
</script>
</body>

</html>