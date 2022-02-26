
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
                                            <h4 class="card-title">informations personnelles</h4>
                                            <p class="card-title-desc mb-4">Remplissez toutes les informations ci-dessous</p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="billing-name" class="col-form-label">Prénom<small style="color:red;">*</small></label>
                                                        <input type="text" class="form-control" id="first" name="first_name" placeholder="Prénom" required>
                                                        <span id="error_first_name" class="text-danger"></span>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="billing-name" class="col-form-label"> Téléphone <small style="color:red;">*</small></label>
                                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Téléphone" required>
                                                        <span id="error_phone" class="text-danger"></span>

                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="billing-email-address" class="col-form-label">Cne<small style="color:red;">*</small></label>
                                                        <input type="text" class="form-control" name="cne" id="cne" placeholder=" cne" required>
                                                        <span id="error_cne" class="text-danger"></span>

                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="billing-email-address" class="col-form-label">mot de passe<small style="color:red;">*</small></label>
                                                        <input type="password" class="form-control" id="password" name="password" placeholder="mot de passe" required>
                                                        <i id="eye" class="fa fa-eye" style="position:absolute;top:54%;left:92%"></i>
                                                        <span id="error_password" class="text-danger"></span>

                                                    </div>
                                                    <div class="mb-3 p-1">
                                                        <label for="name" class="col-sm-3 col-form-label"> Genre <small class="text-danger">*</small></label>
                                                        <select name="gender" id="gender" class="form-control" required>
                                                            <option value="">-Sélectionnez votre Genre-</option>
                                                            <option value="Male">Homme</option>
                                                            <option value="Female">Femme</option>
                                                        </select>
                                                        <span id="error_gender" class="text-danger"></span>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label class="col-form-label">Pays <small style="color:red;">*</small></label>
                                                        <select class="form-control select2" title="Country" name="nationality" id="natio" required>
                                                            <option value="Morocco">Maroc</option>
                                                            <option value="AF">Afghanistan</option>
                                                            <option value="AL">Albanie</option>
                                                            <option value="DZ">Algerie</option>
                                                            <option value="AS">Samoa américaines</option>
                                                            <option value="AD">Andorre</option>
                                                            <option value="AO">Angola</option>
                                                            <option value="AI">Anguilla</option>
                                                            <option value="AQ">Antarctique</option>
                                                            <option value="AR">Argentine</option>
                                                            <option value="AM">Arménie</option>
                                                            <option value="AW">Aruba</option>
                                                            <option value="AU">Australie</option>
                                                            <option value="AT">L'Autriche</option>
                                                            <option value="AZ">Azerbaïdjan</option>
                                                            <option value="BS">Bahamas</option>
                                                            <option value="BH">bahreïn</option>
                                                            <option value="BD">Bengladesh</option>
                                                            <option value="BB">Barbade</option>
                                                            <option value="BY">Biélorussie</option>
                                                            <option value="BE">Belgique</option>
                                                            <option value="BZ">Bélize</option>
                                                            <option value="BJ">Benin</option>
                                                            <option value="BM">Bermudes</option>
                                                            <option value="BT">Bhoutan</option>
                                                            <option value="BO">Bolivie</option>
                                                            <option value="BW">Bostwana</option>
                                                            <option value="BV">Île Bouvet</option>
                                                            <option value="BR">Brésil</option>
                                                            <option value="BN">Brunei Darussalam</option>
                                                            <option value="BG">Bulgarie</option>
                                                            <option value="BF">Burkina Faso</option>
                                                            <option value="BI">Burundi</option>
                                                            <option value="KH">Cambodge</option>
                                                            <option value="CM">Cameroun</option>
                                                            <option value="CA">Canada</option>
                                                            <option value="CV">Cap-Vert</option>
                                                            <option value="KY">Îles Caïmans</option>
                                                            <option value="CF">République centrafricaine</option>
                                                            <option value="TD">Tchad</option>
                                                            <option value="CL">Chili</option>
                                                            <option value="CN">Chine</option>
                                                            <option value="CX">L'île de noël</option>
                                                            <option value="CC">Îles Cocos (Keeling)</option>
                                                            <option value="CO">Colombie</option>
                                                            <option value="KM">Comores</option>
                                                            <option value="CG">Congo</option>
                                                            <option value="CK">les Îles Cook</option>
                                                            <option value="CR">Costa Rica</option>
                                                            <option value="CI">Côte d'Ivoire</option>
                                                            <option value="HR">Croatie (Hrvatska)</option>
                                                            <option value="CU">Cuba</option>
                                                            <option value="CY">Chypre</option>
                                                            <option value="CZ">République Tchèque</option>
                                                            <option value="DK">Danemark</option>
                                                            <option value="DJ">Djibouti</option>
                                                            <option value="DM">Dominique</option>
                                                            <option value="DO">République Dominicaine</option>
                                                            <option value="EC">Equateur</option>
                                                            <option value="EG">Egypte</option>
                                                            <option value="SV">Le Salvador</option>
                                                            <option value="GQ">Guinée Équatoriale</option>
                                                            <option value="ER">Érythrée</option>
                                                            <option value="EE">Estonie</option>
                                                            <option value="ET">Ethiopie</option>
                                                            <option value="FK">Îles Falkland (Malouines)</option>
                                                            <option value="FO">Îles Féroé</option>
                                                            <option value="FJ">Fidji</option>
                                                            <option value="FI">Finlande</option>
                                                            <option value="FR">France</option>
                                                            <option value="GF">Guyane Française</option>
                                                            <option value="PF">Polynésie française</option>
                                                            <option value="GA">Gabon</option>
                                                            <option value="GM">Gambie</option>
                                                            <option value="GE">Géorgie</option>
                                                            <option value="DE">Allemagne</option>
                                                            <option value="GH">Ghana</option>
                                                            <option value="GI">Gibraltar</option>
                                                            <option value="GR">Grèce</option>
                                                            <option value="GL">Groenland</option>
                                                            <option value="GD">Grenade</option>
                                                            <option value="GP">Guadeloupe</option>
                                                            <option value="GU">Guam</option>
                                                            <option value="GT">Guatemala</option>
                                                            <option value="GN">Guinée</option>
                                                            <option value="GW">Guinée-Bissau</option>
                                                            <option value="GY">Guyane</option>
                                                            <option value="HT">Haïti</option>
                                                            <option value="HN">Honduras</option>
                                                            <option value="HK">Hong Kong</option>
                                                            <option value="HU">Hongrie</option>
                                                            <option value="IS">Islande</option>
                                                            <option value="IN">Inde</option>
                                                            <option value="ID">Indonésie</option>
                                                            <option value="IQ">Irak</option>
                                                            <option value="IE">Irlande</option>
                                                            <option value="IL">Israël</option>
                                                            <option value="IT">Italie</option>
                                                            <option value="JM">Jamaïque</option>
                                                            <option value="JP">Japon</option>
                                                            <option value="JO">Jordan</option>
                                                            <option value="KZ">Kazakhstan</option>
                                                            <option value="KE">Kenya</option>
                                                            <option value="KI">Kiribati</option>
                                                            <option value="KR">Corée, République </option>
                                                            <option value="KW">Koweit</option>
                                                            <option value="KG">Kirghizistan</option>
                                                            <option value="LV">Lettonie</option>
                                                            <option value="LB">Liban</option>
                                                            <option value="LS">Lesotho</option>
                                                            <option value="LR">Libéria</option>
                                                            <option value="LY">Jamahiriya arabe libyenne</option>
                                                            <option value="LI">Liechtenstein</option>
                                                            <option value="LT">Lituanie</option>
                                                            <option value="LU">Luxembourg</option>
                                                            <option value="MO">Macao</option>
                                                            <option value="MG">Madagascar</option>
                                                            <option value="MW">Malawi</option>
                                                            <option value="MY">Malaisie</option>
                                                            <option value="MV">Maldives</option>
                                                            <option value="ML">Mali</option>
                                                            <option value="MT">Malte</option>
                                                            <option value="MH">Iles Marshall</option>
                                                            <option value="MQ">Martinique</option>
                                                            <option value="MR">Mauritanie</option>
                                                            <option value="MU">Maurice</option>
                                                            <option value="YT">Mayotte</option>
                                                            <option value="MX">Mexique</option>
                                                            <option value="MD">Moldavie, République </option>
                                                            <option value="MC">Monaco</option>
                                                            <option value="MN">Mongolie</option>
                                                            <option value="MS">Montserrat</option>
                                                            <option value="MA">Maroc</option>
                                                            <option value="MZ">Mozambique</option>
                                                            <option value="MM">Birmanie</option>
                                                            <option value="NA">Namibie</option>
                                                            <option value="NR">Nauru</option>
                                                            <option value="NP">Népal</option>
                                                            <option value="NL">Pays-Bas</option>
                                                            <option value="AN">Antilles néerlandaises</option>
                                                            <option value="NC">Nouvelle Calédonie</option>
                                                            <option value="NZ">Nouvelle-Zélande</option>
                                                            <option value="NI">Nicaragua</option>
                                                            <option value="NE">Niger</option>
                                                            <option value="NG">Nigeria</option>
                                                            <option value="NU">Niué</option>
                                                            <option value="NF">l'ile de Norfolk</option>
                                                            <option value="MR">Îles Mariannes du Nord</option>
                                                            <option value="NO">Norvège</option>
                                                            <option value="OM">Oman</option>
                                                            <option value="PL">Palaos</option>
                                                            <option value="PA">Panama</option>
                                                            <option value="PG">Papouasie Nouvelle Guinée</option>
                                                            <option value="PY">Paraguay</option>
                                                            <option value="PE">Pérou</option>
                                                            <option value="PH">Philippines</option>
                                                            <option value="PN">Pitcairn</option>
                                                            <option value="PL">Pologne</option>
                                                            <option value="PT">Portugal</option>
                                                            <option value="PR">Porto Rico</option>
                                                            <option value="QA">Qatar</option>
                                                            <option value="RE">Réunion</option>
                                                            <option value="RO">Roumanie</option>
                                                            <option value="RU">Fédération Russe</option>
                                                            <option value="RW">Rwanda</option>
                                                            <option value="KN">Saint-Christophe-et-Niévès</option>
                                                            <option value="LC">Sainte-Lucie</option>
                                                            <option value="WS">Samoa</option>
                                                            <option value="SM">Saint Marin</option>
                                                            <option value="ST">Sao Tomé et Principe</option>
                                                            <option value="SA">Arabie Saoudite</option>
                                                            <option value="SN">Sénégal</option>
                                                            <option value="SC">les Seychelles</option>
                                                            <option value="SL">Sierra Leone</option>
                                                            <option value="SG">Singapour</option>
                                                            <option value="SK">Slovaquie (République slovaque)</option>
                                                            <option value="SI">Slovénie</option>
                                                            <option value="SB">îles Salomon</option>
                                                            <option value="SO">Somalie</option>
                                                            <option value="ZA">Afrique du Sud</option>
                                                            <option value="ES">Espagne</option>
                                                            <option value="LK">Sri Lanka</option>
                                                            <option value="SH">Sainte-Hélène</option>
                                                            <option value="PM">Saint-Pierre et Miquelon</option>
                                                            <option value="SD">Soudan</option>
                                                            <option value="SR">Suriname</option>
                                                            <option value="SZ">Swaziland</option>
                                                            <option value="SE">Suède</option>
                                                            <option value="SUI">Suisse</option>
                                                            <option value="SY">République arabe syrienne</option>
                                                            <option value="TW">Taiwan, Province de Chine</option>
                                                            <option value="TJ">Tajikistan</option>
                                                            <option value="TZ">Tanzanie, République-Unie de</option>
                                                            <option value="TH">Thaïlande</option>
                                                            <option value="TG">Togo</option>
                                                            <option value="TK">Tokélaou</option>
                                                            <option value="TO">Tonga</option>
                                                            <option value="TT">Trinité-et-Tobago</option>
                                                            <option value="TN">Tunisie</option>
                                                            <option value="TR">Turquie</option>
                                                            <option value="TM">Turkménistan</option>
                                                            <option value="TC">îles Turques-et-Caïques</option>
                                                            <option value="TV">Tuvalu</option>
                                                            <option value="UG">Ouganda</option>
                                                            <option value="UA">Ukraine</option>
                                                            <option value="AE">Emirats Arabes Unis</option>
                                                            <option value="GB">Royaume-Uni</option>
                                                            <option value="US">États-Unis</option>
                                                            <option value="UY">Uruguay</option>
                                                            <option value="UZ">Ouzbékistan</option>
                                                            <option value="VU">Vanuatu</option>
                                                            <option value="VE">Venezuela</option>
                                                            <option value="VN">Vietnam</option>
                                                            <option value="VG">Îles Vierges (britanniques)</option>
                                                            <option value="VI">Îles Vierges (États-Unis)</option>
                                                            <option value="WF">Iles Wallis et Futuna</option>
                                                            <option value="EH">Sahara occidental</option>
                                                            <option value="YE">Yémen</option>
                                                            <option value="ZM">Zambie</option>
                                                            <option value="ZW">Zimbabwe</option>
                                                        </select>
                                                        <span id="error_nationality" class="text-danger"></span>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        handicapé: <small style="color: red">*</small><input type="radio" name="disabled" value="yes" id="show">
                                                        <label for="yes">oui</label>
                                                        <input type="radio" name="disabled" value="no" id="hide">
                                                        <label for="no">non</label>
                                                        <select name="disabled" id="disabled" class="form-control" required style="display: none" />
                                                        <option value="">-sélectionner-</option>
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
                                                        <label for="billing-email-address" class="col-form-label">Nom <small style="color:red;">*</small></label>
                                                        <input type="text" class="form-control" name="last_name" id="last" placeholder="Entrer votre nom" required>
                                                        <span id="error_last_name" class="text-danger"></span>
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label for="billing-email-address" class="col-form-label">Email <small style="color:red;">*</small></label>
                                                        <input type="email" class="form-control" name="email" id="email" placeholder="Entrer votre email " required>
                                                        <span id="error_email" class="text-danger"></span>

                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="billing-email-address" class="col-form-label">Date de naissence <small style="color:red;">*</small></label>
                                                        <input type="date" class="form-control" name="birthday" id="birthday" placeholder="" required>
                                                        <span id="error_birthday" class="text-danger"></span>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="billing-email-address" class="col-form-label">Confirmez le mot de passe<small style="color:red;">*</small></label>
                                                        <input type="text" class="form-control" name="confirm_password" id="passconf" placeholder="Confirmez votre mot de passe" required>
                                                        <span id="error_confirm_password" class="text-danger"></span>
                                                    </div>
                                                    <div class="mb-3 p-1">
                                                        <label for="name" class="col-sm-3 col-form-label"> Situation <small class="text-danger">*</small></label>
                                                        <select name="situation" id="situation" class="form-control" required>
                                                            <option value="">-sélectionner-</option>
                                                            <option value="single">Célibataire</option>
                                                            <option value="Married">marié(e)</option>
                                                            <option value="Divorced">Divorcé(e)</option>
                                                        </select>
                                                        <span id="error_situation" class="text-danger"></span>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="billing-address" class="col-form-label">Addresse <small style="color:red;">*</small></label>
                                                        <textarea class="form-control" name="adress" id="adress" rows="3" placeholder="" required></textarea>
                                                        <span id="error_adress" class="text-danger"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-sm-6">
                                                <button type="submit" id="step1Btn" class="btn btn-success" style="width:40%;" name="step1Btn">Suivant</button>
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
                                            <p class="card-title-desc mb-4">Remplissez toutes les informations ci-dessous</p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="name" class="col-sm-3 col-form-label">Année de bac<small class="text-danger">*</small></label>
                                                        <input type="text" id="bac_year" class="form-control" name="bac_year" placeholder="Année de bac" required>
                                                        <span id="error_bac_year" class="text-danger"></span>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="name" class="col-sm-3 col-form-label"> type de bac <small class="text-danger">*</small></label>
                                                        <select name="bac_type" id="bactype" class="form-control" required>
                                                            <option value="">-sélectionner-</option>
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
                                                        <label for="name" class="col-sm-3 col-form-label"> Année scolaire <small class="text-danger">*</small></label>
                                                        <input type="text" name="school_year" class="form-control" id="shoole" placeholder="Année scolaire" required>
                                                        <span id="error_school_year" class="text-danger"></span>
                                                    </div>
                                                    <div class="mb-3 p-1">
                                                        <label for="name" class="col-sm-3 col-form-label"> Bac:  Recto <small class="text-danger">*</small></label>
                                                        <input type="file" name="bac_recto" id="recto" class="form-control" required>
                                                        <span id="error_recto" class="text-danger"></span>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="name" class="col-sm-3 col-form-label">Photo personnelle<small class="text-danger">*</small></label>
                                                        <input type="file" name="personal_picture" id="picture" class="form-control" required>
                                                        <span id="error_personal_picture" class="text-danger"></span>
                                                    </div>

                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="name" class="col-sm-3 col-form-label"> note de bac <small class="text-danger">*</small></label>
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
                                                        <label for="name" class="col-sm-3 col-form-label"> Fillière <small class="text-danger">*</small></label>
                                                        <select name="sector" id="sector" class="form-control" required>
                                                            <option value="">-sélectionner-</option>
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
                                                <button type="button" class="btn btn-success" style="width:40%;" id="step2btn" name="registre">S'inscrire</button>
                                            </div>
                                            <a href="../students/fichier.fr"> Aprés vous confirmez  votre inscription, Allez vers ce lien pour téléchargie votre fichier d'inscription </a>

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
