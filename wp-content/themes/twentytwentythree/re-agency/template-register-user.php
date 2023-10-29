<section>
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3">
                <h1>Inschrijven</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6 mb-3">
                <form method="post" id="createRegistration">
                    <button id="SubmitForm" type="submit" class="btn btn-primary">Submit</button>
                    <div class="row">
                        <div class="col-6 mb-3">
                            <label for="aanhef" class="form-label">Aanhef</label>
                            <select name="aanhef" class="form-select" id="aanhef">
                                <option value="">kies</option>
                                <option value="dhr" <?php if (!empty($_POST['aanhef']) && $_POST['aanhef'] == 'dhr' ? ' selected ' : '') ?> >
                                    dhr
                                </option>
                                <option value="mevr" <?php if (!empty($_POST['aanhef']) && $_POST['aanhef'] == 'dhr' ? ' selected ' : '') ?>>
                                    mevr
                                </option>

                            </select>
                        </div>
                        <div class="col-6 mb-3">
                            <label for="voorletters" class="form-label">Voorletters</label>
                            <input type="text" class="form-control" id="voorletters" name="voorletters"
                                   value="<?php if (!empty($_POST['voorletters']) ? $_POST['voorletters'] : '') ?>">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="voornaam" class="form-label">Voornaam</label>
                            <input type="text" class="form-control" id="voornaam" name="voornaam"
                                   value="<?php if (!empty($_POST['voornaam ']) ? $_POST['voornaam'] : '') ?>">
                        </div>

                        <div class="col-6 mb-3">
                            <label for="achternaam" class="form-label">Achternaam</label>
                            <input type="text" class="form-control" id="achternaam" name="achternaam"
                                   value="<?php if (!empty($_POST['achternaam']) ? $_POST['achternaam'] : '') ?>">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="adres" class="form-label">Adres/Straat</label>
                            <input type="text" class="form-control" id="adres" name="adres"
                                   value="<?php if (!empty($_POST['adres']) ? $_POST['adres'] : '') ?>">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="adres" class="form-label">Huisnummer</label>
                            <input type="number" class="form-control" id="huisnummer" name="huisnummer"
                                   value="<?php if (!empty($_POST['huisnummer']) ? $_POST['huisnummer'] : '') ?>">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="postcode" class="form-label">Postcode</label>
                            <input type="text" class="form-control" id="postcode" name="postcode"
                                   value="<?php if (!empty($_POST['postcode']) ? $_POST['postcode'] : '') ?>">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="woonplaats" class="form-label">Woonplaats</label>
                            <input type="text" class="form-control" id="woonplaats" name="woonplaats"
                                   value="<?php if (!empty($_POST['woonplaats']) ? $_POST['woonplaats'] : '') ?>">
                        </div>

                        <div class="col-6 mb-3">
                            <label for="woonsituatie" class="form-label">Huidige woonsituatie</label>
                            <select class="form-select" name="woonsituatie" id="woonsituatie">
                                <option value="">kies</option>
                                <option value="samenwonend huurwoning" <?php if (!empty($_POST['woonsituatie']) && $_POST['woonsituatie'] == 'samenwonend huurwoning' ? ' selected ' : '') ?>>
                                    samenwonend huurwoning
                                </option>
                                <option value="samenwonend koopwoning" <?php if (!empty($_POST['woonsituatie']) && $_POST['woonsituatie'] == 'samenwonend koopwoning' ? ' selected ' : '') ?>>
                                    samenwonend koopwoning
                                </option>
                                <option value="inwonend" <?php if (!empty($_POST['woonsituatie']) && $_POST['woonsituatie'] == 'inwonend' ? ' selected ' : '') ?>>
                                    inwonend
                                </option>
                                <option value="studentenhuis" <?php if (!empty($_POST['woonsituatie']) && $_POST['woonsituatie'] == 'studentenhuis' ? ' selected ' : '') ?>>
                                    studentenhuis
                                </option>

                            </select>

                        </div>
                        <div class="col-6 mb-3">
                            <label for="zoektwoningper" class="form-label">Zoekt woning per</label>
                            <input type="date" class="form-control" id="zoektwoningper" name="zoektwoningper"
                                   value="<?php if (!empty($_POST['zoektwoningper']) ? $_POST['zoektwoningper'] : '') ?>">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                   value="<?php if (!empty($_POST['email']) ? $_POST['email'] : '') ?>">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="wachtwoord" class="form-label">Wachtwoord</label>
                            <input type="password" class="form-control" id="wachtwoord" name="wachtwoord"
                                   value="<?php if (!empty($_POST['wachtwoord']) ? $_POST['wachtwoord'] : '') ?>">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="telefoon" class="form-label">Telefoon</label>
                            <input type="number" class="form-control" id="telefoon" name="telefoon"
                                   value="<?php if (!empty($_POST['telefoon']) ? $_POST['telefoon'] : '') ?>">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="geboortedatum" class="form-label">Geboortedatum</label>
                            <input type="date" class="form-control" id="geboortedatum" name="geboortedatum"
                                   value="<?php if (!empty($_POST['geboortedatum']) ? $_POST['geboortedatum'] : '') ?>">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="geboorteplaats" class="form-label">Geboorteplaats</label>
                            <input type="text" class="form-control" id="geboorteplaats" name="geboorteplaats"
                                   value="<?php if (!empty($_POST['geboorteplaats']) ? $_POST['geboorteplaats'] : '') ?>">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="beroep" class="form-label">Beroep</label>
                            <input type="text" class="form-control" id="beroep" name="beroep"
                                   value="<?php if (!empty($_POST['beroep']) ? $_POST['beroep'] : '') ?>">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="werkgever" class="form-label">Werkgever</label>
                            <input type="text" class="form-control" id="werkgever" name="werkgever"
                                   value="<?php if (!empty($_POST['werkgever']) ? $_POST['werkgever'] : '') ?>">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="dienstverband" class="form-label">Dienstverband</label>
                            <select class="form-select" name="dienstverband" id="dienstverband">
                                <option value="">kies</option>
                                <option value="vast" <?php if (!empty($_POST['dienstverband']) && $_POST['dienstverband'] == 'vast' ? ' selected ' : '') ?>>
                                    vast dienstverband
                                </option>
                                <option value="tijdelijk" <?php if (!empty($_POST['dienstverband']) && $_POST['dienstverband'] == 'tijdelijk' ? ' selected ' : '') ?>>
                                    tijdelijk
                                </option>
                                <option value="zelfstandig" <?php if (!empty($_POST['dienstverband']) && $_POST['dienstverband'] == 'zelfstandig' ? ' selected ' : '') ?>>
                                    zelfstandig
                                </option>
                                <option value="student" <?php if (!empty($_POST['dienstverband']) && $_POST['dienstverband'] == 'student' ? ' selected ' : '') ?>>
                                    student
                                </option>
                            </select>

                        </div>

                        <div class="col-6 mb-3">
                            <label for="inkomen" class="form-label">Inkomen</label>
                            <select class="form-select"
                                    name="inkomen"
                                    id="inkomen">
                                <option value="">kies</option>
                                <option value="1000" <?php if (!empty($_POST['inkomen']) && $_POST['inkomen'] == '1000' ? ' selected ' : '') ?>>
                                    0-1000
                                </option>
                                <option value="1500" <?php if (!empty($_POST['inkomen']) && $_POST['inkomen'] == '1500' ? ' selected ' : '') ?>>
                                    1000-1500
                                </option>
                                <option value="2000" <?php if (!empty($_POST['inkomen']) && $_POST['inkomen'] == '2000' ? ' selected ' : '') ?>>
                                    1500-2000
                                </option>
                                <option value="2500" <?php if (!empty($_POST['inkomen']) && $_POST['inkomen'] == '2500' ? ' selected ' : '') ?>>
                                    2000-2500
                                </option>
                                <option value="3000" <?php if (!empty($_POST['inkomen']) && $_POST['inkomen'] == '3000' ? ' selected ' : '') ?>>
                                    2500-3000
                                </option>
                                <option value="3500" <?php if (!empty($_POST['inkomen']) && $_POST['inkomen'] == '3500' ? ' selected ' : '') ?>>
                                    3000-3500
                                </option>
                                <option value="4000" <?php if (!empty($_POST['inkomen']) && $_POST['inkomen'] == '4000' ? ' selected ' : '') ?>>
                                    3500-4000
                                </option>
                                <option value="5000" <?php if (!empty($_POST['inkomen']) && $_POST['inkomen'] == '5000' ? ' selected ' : '') ?>>
                                    4000-5000
                                </option>
                                <option value="5001" <?php if (!empty($_POST['inkomen']) && $_POST['inkomen'] == '5001' ? ' selected ' : '') ?>>
                                    &gt;5000
                                </option>
                            </select>

                            <p>Kies hier altijd je eigen inkomen, als je met een partner wilt huren kies je later voor 'Met
                                partner huren'. Jouw inkomen wordt opgeteld bij die van je partner voor de minimale
                                inkomensbepalingen.</p>
                        </div>
                        <div class="col-6 mb-3">
                            <label for="garantieverklaring" class="form-label">Garantieverklaring</label>
                            <select name="garantieverklaring" class="form-select" name="garantieverklaring"
                                    id="garantieverklaring">
                                <option value="nee">kies</option>
                                <option value="ja" <?php if (!empty($_POST['garantieverklaring']) && $_POST['garantieverklaring'] == 'ja' ? ' selected ' : '') ?> >
                                    ja
                                </option>
                                <option value="nee" <?php if (!empty($_POST['garantieverklaring']) && $_POST['garantieverklaring'] == 'nee' ? ' selected ' : '') ?>>
                                    nee
                                </option>

                            </select>
                            <p>Indien je student bent heb je een garantieverklaring nodig. Deze moet je later in je
                                dashboard uploaden indien je via ons wilt huren.</p>
                        </div>
                        <hr>

                        <div class="col-6 mb-3">
                            <label for="inkomengezamenlijk" class="form-label">Met partner</label>
                            <select class="form-select" name="inkomengezamenlijk" id="inkomengezamenlijk">
                                <option value="0">kies</option>
                                <option value="1" <?php if (!empty($_POST['inkomengezamenlijk']) && $_POST['inkomengezamenlijk'] == '1' ? ' selected ' : '') ?>>
                                    met partner
                                </option>
                                <option value="0" <?php if (!empty($_POST['inkomengezamenlijk']) && $_POST['inkomengezamenlijk'] == '0' ? ' selected ' : '') ?>>
                                    zonder partner
                                </option>

                            </select>

                        </div>
                        <div class="col-6 mb-3">
                            <label for="partner_type" class="form-label">Partnertype</label>
                            <select class="form-select" name="partner_type" id="partner_type">
                                <option value="0">kies</option>
                                <option value="huisgenoot"
                                    <?php if (!empty($_POST['partner_type']) && $_POST['partner_type'] == 'huisgenoot' ? ' selected ' : '') ?>>
                                    huisgenoot
                                </option>
                                <option value="samenwonend"
                                    <?php if (!empty($_POST['partner_type']) && $_POST['partner_type'] == 'samenwonend' ? ' selected ' : '') ?>>
                                    samenwonend
                                </option>
                                <option value="getrouwd"
                                    <?php if (!empty($_POST['partner_type']) && $_POST['partner_type'] == 'getrouwd' ? ' selected ' : '') ?>>
                                    getrouwd
                                </option>

                            </select>

                        </div>

                        <hr>
                        <h2>Partner details</h2>

                        <div class="col-6 mb-3">
                            <label for="partner_aanhef" class="form-label">Aanhef</label>
                            <select name="aanhef" class="form-select" id="partner_aanhef" name="partner_aanhef">
                                <option value="mr">dhr</option>
                                <option value="dhr" <?php if (!empty($_POST['aanhef']) && $_POST['aanhef'] == 'dhr' ? ' selected ' : '') ?> >
                                    dhr
                                </option>
                                <option value="mevr" <?php if (!empty($_POST['aanhef']) && $_POST['aanhef'] == 'dhr' ? ' selected ' : '') ?>>
                                    mevr
                                </option>
                            </select>
                        </div>
                        <div class="col-6 mb-3">
                            <label for="partner_voorletters" class="form-label">Voorletters</label>
                            <input type="text" class="form-control" id="partner_voorletters" name="partner_voorletters"
                                   value="<?php if (!empty($_POST['partner_voorletters']) ? $_POST['partner_voorletters'] : '') ?>">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="partner_voornaam" class="form-label">Voornaam</label>
                            <input type="text" class="form-control" id="partner_voornaam" name="partner_voornaam"
                                   value="<?php if (!empty($_POST['partner_voornaam']) ? $_POST['partner_voornaam'] : '') ?>">
                        </div>

                        <div class="col-6 mb-3">
                            <label for="partner_achternaam" class="form-label">Achternaam</label>
                            <input type="text" class="form-control" id="partner_achternaam" name="partner_achternaam"
                                   value="<?php if (!empty($_POST['partner_achternaam']) ? $_POST['partner_achternaam'] : '') ?>">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="partner_adres" class="form-label">Adres/Straat</label>
                            <input type="text" class="form-control" id="partner_adres" name="partner_adres"
                                   value="<?php if (!empty($_POST['partner_adres']) ? $_POST['partner_adres'] : '') ?>">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="partner_adres" class="form-label">Huisnummer</label>
                            <input type="number" class="form-control" id="partner_huisnummer" name="partner_huisnummer"
                                   value="<?php if (!empty($_POST['partner_huisnummer']) ? $_POST['partner_huisnummer'] : '') ?>">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="partner_postcode" class="form-label">Postcode</label>
                            <input type="text" class="form-control" id="partner_postcode" name="partner_postcode"
                                   value="<?php if (!empty($_POST['partner_postcode']) ? $_POST['partner_postcode'] : '') ?>">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="partner_woonplaats" class="form-label">Woonplaats</label>
                            <input type="text" class="form-control" id="partner_woonplaats" name="partner_woonplaats"
                                   value="<?php if (!empty($_POST['partner_woonplaats']) ? $_POST['partner_woonplaats'] : '') ?>">
                        </div>

                        <div class="col-6 mb-3">
                            <label for="partner_woonsituatie" class="form-label">Huidige woonsituatie</label>
                            <select class="form-select" name="partner_woonsituatie" id="partner_woonsituatie">
                                <option value="0">kies</option>
                                <option value="samenwonend huurwoning" <?php if (!empty($_POST['partner_woonsituatie']) && $_POST['partner_woonsituatie'] == 'samenwonend huurwoning' ? ' selected ' : '') ?>>
                                    samenwonend huurwoning
                                </option>
                                <option value="samenwonend koopwoning" <?php if (!empty($_POST['partner_woonsituatie']) && $_POST['partner_woonsituatie'] == 'samenwonend koopwoning' ? ' selected ' : '') ?>>
                                    samenwonend koopwoning
                                </option>
                                <option value="inwonend" <?php if (!empty($_POST['partner_woonsituatie']) && $_POST['partner_woonsituatie'] == 'inwonend' ? ' selected ' : '') ?>>
                                    inwonend
                                </option>
                                <option value="studentenhuis" <?php if (!empty($_POST['partner_woonsituatie']) && $_POST['partner_woonsituatie'] == 'studentenhuis' ? ' selected ' : '') ?>>
                                    studentenhuis
                                </option>

                            </select>

                        </div>
                        <div class="col-6 mb-3">
                            <label for="partner_email" class="form-label">Email</label>
                            <input type="partner_email" class="form-control" id="partner_email" name=partner_"email"
                                   value="<?php if (!empty($_POST['partner_email']) ? $_POST['partner_email'] : '') ?>">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="partner_wachtwoord" class="form-label">Password</label>
                            <input type="password" class="form-control" id="partner_wachtwoord" name="partner_wachtwoord"
                                   value="<?php if (!empty($_POST['partner_wachtwoord']) ? $_POST['partner_wachtwoord'] : '') ?>">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="partner_telefoon" class="form-label">Telefoon</label>
                            <input type="number" class="form-control" id="partner_telefoon" name="partner_telefoon"
                                   value="<?php if (!empty($_POST['partner_telefoon']) ? $_POST['partner_telefoon'] : '') ?>">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="partner_geboortedatum" class="form-label">Geboortedatum</label>
                            <input type="date" class="form-control" id="partner_geboortedatum" name="partner_geboortedatum"
                                   value="<?php if (!empty($_POST['partner_geboortedatum']) ? $_POST['partner_geboortedatum'] : '') ?>">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="partner_geboorteplaats" class="form-label">Geboorteplaats</label>
                            <input type="text" class="form-control" id="partner_geboorteplaats"
                                   name="partner_geboorteplaats"
                                   value="<?php if (!empty($_POST['partner_geboorteplaats']) ? $_POST['partner_geboorteplaats'] : '') ?>">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="partner_beroep" class="form-label">Beroep</label>
                            <input type="text" class="form-control" id="partner_beroep" name="partner_beroep"
                                   value="<?php if (!empty($_POST['partner_beroep']) ? $_POST['partner_beroep'] : '') ?>">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="partner_werkgever" class="form-label">Werkgever</label>
                            <input type="text" class="form-control" id="partner_werkgever" name="partner_werkgever"
                                   value="<?php if (!empty($_POST['partner_werkgever']) ? $_POST['partner_werkgever'] : '') ?>">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="partner_dienstverband" class="form-label">Dienstverband</label>
                            <select class="form-select" name="partner_dienstverband" id="" partner_dienstverband>
                                <option value="">kies</option>
                                <option value="vast" <?php if (!empty($_POST['partner_dienstverband']) && $_POST['partner_dienstverband'] == 'vast' ? ' selected ' : '') ?>>
                                    vast dienstverband
                                </option>
                                <option value="tijdelijk" <?php if (!empty($_POST['partner_dienstverband']) && $_POST['partner_dienstverband'] == 'tijdelijk' ? ' selected ' : '') ?>>
                                    tijdelijk
                                </option>
                                <option value="zelfstandig" <?php if (!empty($_POST['partner_dienstverband']) && $_POST['partner_dienstverband'] == 'zelfstandig' ? ' selected ' : '') ?>>
                                    zelfstandig
                                </option>
                                <option value="student" <?php if (!empty($_POST['partner_dienstverband']) && $_POST['partner_dienstverband'] == 'student' ? ' selected ' : '') ?>>
                                    student
                                </option>
                            </select>

                        </div>

                        <div class="col-6 mb-3">
                            <label for="partner_inkomen" class="form-label">Inkomen</label>

                            <select class="form-select"
                                    name="partner_inkomen" id="partner_inkomen">
                                <option value="1000" <?php if (!empty($_POST['partner_inkomen']) && $_POST['partner_inkomen'] == '1000' ? ' selected ' : '') ?>>
                                    0-1000
                                </option>
                                <option value="1500" <?php if (!empty($_POST['partner_inkomen']) && $_POST['partner_inkomen'] == '1500' ? ' selected ' : '') ?>>
                                    1000-1500
                                </option>
                                <option value="2000" <?php if (!empty($_POST['partner_inkomen']) && $_POST['partner_inkomen'] == '2000' ? ' selected ' : '') ?>>
                                    1500-2000
                                </option>
                                <option value="2500" <?php if (!empty($_POST['partner_inkomen']) && $_POST['partner_inkomen'] == '2500' ? ' selected ' : '') ?>>
                                    2000-2500
                                </option>
                                <option value="3000" <?php if (!empty($_POST['partner_inkomen']) && $_POST['partner_inkomen'] == '3000' ? ' selected ' : '') ?>>
                                    2500-3000
                                </option>
                                <option value="3500" <?php if (!empty($_POST['partner_inkomen']) && $_POST['partner_inkomen'] == '3500' ? ' selected ' : '') ?>>
                                    3000-3500
                                </option>
                                <option value="4000" <?php if (!empty($_POST['partner_inkomen']) && $_POST['partner_inkomen'] == '4000' ? ' selected ' : '') ?>>
                                    3500-4000
                                </option>
                                <option value="5000" <?php if (!empty($_POST['partner_inkomen']) && $_POST['partner_inkomen'] == '5000' ? ' selected ' : '') ?>>
                                    4000-5000
                                </option>
                                <option value="5001" <?php if (!empty($_POST['inkomen']) && $_POST['inkomen'] == '5001' ? ' selected ' : '') ?>>
                                    &gt;5000
                                </option>
                            </select>

                            <p>Kies hier altijd je eigen inkomen. Dat van je partner is eerder al opgegeven. Deze worden bij
                                elkaar opgeteld bij minimale inkomensbepalingen.</p>
                        </div>
                        <div class="col-6 mb-3">
                            <label for="partner_garantieverklaring" class="form-label">Garantieverklaring</label>
                            <select class="form-select" name="partner_garantieverklaring"
                                    id="partner_garantieverklaring">
                                <option value="nee">kies</option>
                                <option value="ja" <?php if (!empty($_POST['partner_garantieverklaring']) && $_POST['partner_garantieverklaring'] == 'ja' ? ' selected ' : '') ?> >
                                    ja
                                </option>
                                <option value="nee" <?php if (!empty($_POST['partner_garantieverklaring']) && $_POST['partner_garantieverklaring'] == 'nee' ? ' selected ' : '') ?>>
                                    nee
                                </option>

                            </select>
                            <p>Indien je student bent heb je een garantieverklaring nodig. Deze moet je later in je
                                dashboard
                                uploaden indien je via ons wilt huren.</p>
                        </div>
                    </div>

                    <hr>

                    <h2>Zoekvoorkeuren</h2>

                    <div class="col-6 mb-3">
                        <label for="min_huur" class="form-label">Min prijs</label>
                        <input type="number" class="form-control" id="min_huur" name="min_huur"
                               value="<?php if (!empty($_POST['min_huur']) ? $_POST['min_huur'] : '') ?>">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="max_huur" class="form-label">Max prijs</label>
                        <input type="number" class="form-control" id="max_huur" name="max_huur"
                               value="<?php if (!empty($_POST['max_huur']) ? $_POST['max_huur'] : '') ?>">
                        <p>De maximale huurpijs kan niet hoger zijn dan 3 keer het inkomen. Wel lager.</p>
                    </div>
                    <div class="col-6 mb-3">
                        <label for="soort_woning" class="form-label">Soort woning</label>
                        <select class="form-select" name="soort_woning" id="soort_woning">
                            <option value="appartement">kies</option>
                            <option value="appartement" <?php if (!empty($_POST['soort_woning']) && $_POST['soort_woning'] == 'appartement' ? ' selected ' : '') ?>>
                                appartement
                            </option>
                            <option value="eengezinswoning" <?php if (!empty($_POST['soort_woning']) && $_POST['soort_woning'] == 'eengezinswoning' ? ' selected ' : '') ?>>
                                eengezinswoning
                            </option>
                            <option value="kamer" <?php if (!empty($_POST['soort_woning']) && $_POST['soort_woning'] == 'kamer' ? ' selected ' : '') ?>>
                                kamer
                            </option>


                        </select>

                    </div>

                    <div class="col-6 mb-3">
                        <label for="inrichting" class="form-label">Interieur</label>
                        <select class="form-select" name="inrichting" id="inrichting">
                            <option value="gestoffeerd">kies</option>
                            <option value="kaal" <?php if (!empty($_POST['inrichting']) && $_POST['inrichting'] == 'kaal' ? ' selected ' : '') ?>>
                                kaal
                            </option>
                            <option value="gestoffeerd" <?php if (!empty($_POST['inrichting']) && $_POST['inrichting'] == 'gestoffeerd' ? ' selected ' : '') ?>>
                                gestoffeerd
                            </option>
                            <option value="gemeubileerd" <?php if (!empty($_POST['inrichting']) && $_POST['inrichting'] == 'gemeubileerd' ? ' selected ' : '') ?>>
                                gemeubileerd
                            </option>

                        </select>

                    </div>
                    <div class="col-6 mb-3">
                        <label for="aantal_kamers" class="form-label">Aantal kamers</label>
                        <select class="form-select" name="aantal_kamers" id="aantal_kamers">
                            <option value="1">kies</option>
                            <?php
                            for ($i = 1; $i < 8; $i++) {
                                ?>
                                <option value="<?php echo $i; ?>" <?php if (!empty($_POST['aantal_kamers']) && $_POST['aantal_kamers'] == $i ? ' selected ' : '') ?>>
                                    <?php echo $i; ?>
                                </option>
                                <?php
                            }
                            ?>


                        </select>

                    </div>


                    <br><br><br><br><br><br>


                </form>
            </div>
            <div class="col-6 mb-3">
                <br><br>
                RESPONSE<br>

                <div id="response">

                </div>
                <div class="alert alert-success" role="alert" id="successMsg" style="">

                </div>
            </div>

        </div>
    </div>
</section>