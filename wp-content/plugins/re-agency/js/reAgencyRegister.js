


jQuery(document).ready(function ($) {
    $('#SubmitForm').click(function (e) {
        e.preventDefault();
        console.log('clickedieclick');

        let haspartner = $('#haspartner').val();
        const data = {
            'aanhef': $('#aanhef').val(),
            'name': $('#voornaam').val() + $('#achternaam').val(),
            'voornaam': $('#voornaam').val(),
            'voorletters': $('#voorletters').val(),
            'achternaam': $('#achternaam').val(),
            'email': $('#email').val(),
            'wachtwoord': $('#wachtwoord').val(),
            'telefoon': $('#telefoon').val(),
            'adres': $('#adres').val(),
            'huisnummer': $('#huisnummer').val(),
            'postcode': $('#postcode').val(),
            'woonplaats': $('#woonplaats').val(),
            'woonsituatie': $('#woonsituatie').val(),
            'beroep': $('#beroep').val(),
            'werkgever': $('#werkgever').val(),
            'dienstverband': $('#dienstverband').val(),
            'inkomen': $('#inkomen').val(),
            'inkomengezamenlijk': $('#inkomengezamenlijk').val(),
            'geboorteplaats': $('#geboorteplaats').val(),
            'geboortedatum': $('#geboortedatum').val(),
            'garantieverklaring': $('#garantieverklaring').val(),
            'zoektwoningper': $('#zoektwoningper').val(),
            'min_huur': $('#min_huur').val(),
            'max_huur': $('#max_huur').val(),
            'aantal_kamers': $('#aantal_kamers').val(),
            'inrichting': $('#inrichting').val(),
            'soort_woning': $('#soort_woning').val(),
        };


        if ($('#inkomengezamenlijk').val() == 1) {
            console.log('Has partner');

            data.partner_type = $('#partner_type').val();
            data.partner_aanhef = $('#partner_aanhef').val();
            data.partner_voornaam = $('#partner_voornaam').val();
            data.partner_voorletters = $('#partner_voorletters').val();
            data.partner_achternaam = $('#partner_achternaam').val();
            data.partner_email = $('#partner_email').val();
            data.partner_wachtwoord = $('#partner_wachtwoord').val();
            data.partner_telefoon = $('#partner_telefoon').val();
            data.partner_adres = $('#partner_adres').val();
            data.partner_huisnummer = $('#partner_huisnummer').val();
            data.partner_postcode = $('#partner_postcode').val();
            data.partner_woonplaats = $('#partner_woonplaats').val();
            data.partner_woonsituatie = $('#partner_woonsituatie').val();
            data.partner_beroep = $('#partner_beroep').val();
            data.partner_werkgever = $('#partner_werkgever').val();
            data.partner_dienstverband = $('#partner_dienstverband').val();
            data.partner_inkomen = $('#partner_inkomen').val();
            data.partner_geboorteplaats = $('#partner_geboorteplaats').val();
            data.partner_geboortedatum = $('#partner_geboortedatum').val();
            data.partner_garantieverklaring = $('#partner_garantieverklaring').val();


        }

        console.log('Data requested %o', data);

        $.ajax({
            url: "https://agency.vectrus.nl/api/v1/newuser",
            type: "POST",
            data: data
            ,
            returnType: "JSON",
            success: function (response) {
                console.log("Success Response: %o", response);
                //let responseText = $.parseJSON(response);

                $('#successMsg').text((response.message));
                //$('#successMsg').show();

            },
            error: function (response) {

                let errormesssages;
                let responseText = $.parseJSON(response['responseText']);

                $('#successMsg').text(responseText.message);
                $.each(responseText.errors, function (key, value) {
                    var appendWith = "<br/>" + value;
                    $('#successMsg').append(appendWith);
                });
                //$('#successMsg').text(responseText.message);
                console.log("response %o", response);
            }

        });

    });
});
/*

The offerings

 */


jQuery(document).ready(function ($) {

    var siteUrl = myData.siteUrl;
    var imageUrl = myData.imageUrl;
    var theme = myData.theme;
    // Check custom aanbod url
    if(myData.custom_offer_template == 'custom') {
        var template = $.get(siteUrl + "/wp-content/themes/"+theme+"/templates/partial-assetitem.html");
    }
    else {
        var template = $.get(siteUrl + "/wp-content/plugins/re-agency/templates/partial-assetitem.html");
    }
// Check custom api url
    if (myData.custom_domain == 'same domain') {

        var apiUrl = 'https://admin.nrw-wonen.nl/api/v1/aanbod';
        console.log('APi URL: ', apiUrl);
    } else {
        var apiUrl = myData.apiUrl;
    }
    // Check custom Image url
    if (myData.custom_domain == 'same domain') {

        var imageUrl = 'https://admin.nrw-wonen.nl/storage/panden';
        console.log('IMAGE URL: ', imageUrl);
    } else {
        var imageUrl = myData.imageUrl;
    }
    console.log('Asseturl', siteUrl);

   // / template = JSON.stringify(template['responseText']);

    $.ajax({
        type: "GET",
        dataType: "json",
        data: {name: name},
        url: apiUrl,
        success: function (response) {
            //alert('Get Success');
            //$('#json').text(JSON.stringify(response));
            document.getElementById("json").textContent = JSON.stringify(response, undefined, 2);

            var toAdd = document.createDocumentFragment();
            var i = 0;
            while (i < Object.keys(response).length) {
                if (jQuery.isEmptyObject(response[i]['assetimages']))
                 {
                   //  continue;

                     continue;
                }
                //console.log(response[i]['assetstreet']);
                let assetstreet = response[i]['assetstreet'];
                let assetnumber = response[i]['assetnumber'];
                let assetnumberadd = response[i]['assetnumberadd'];
                let assetpostalcode = response[i]['assetpostalcode'];
                let assetcity = response[i]['assetcity'];
                let assetimage = response[i]['assetimages'][0]['image'];
                //let assetimage = 'default';
             /*   console.log("Current asset image", response[i]['assetimages'][0]['image']);
                if(typeof response[i]['assetimages'][0]['image'] !== 'undefined') {*/


             /*   } else {
                    assetimage = 'default';

                }*/
                let assetrent = response[i]['assetrent'];
                let id = response[i]['id'];
                let updated_at = response[i]['updated_at'];
                let status = response[i]['status'];
                let statussince = response[i]['statussince'];
                let assetservice = response[i]['assetservice'];
                let assetfurniture = response[i]['assetfurniture'];
                let assetupholstery = response[i]['assetupholstery'];
                let assetwater = response[i]['assetwater'];
                let assetgasandlight = response[i]['assetgasandlight'];
                let assetcableandinternet = response[i]['assetcableandinternet'];
                let assetheatingsystem = response[i]['assetheatingsystem'];
                let assetrest = response[i]['assetrest'];
                let totalrent = assetrent + assetservice + assetfurniture + assetupholstery + assetwater + assetgasandlight + assetcableandinternet + assetheatingsystem + assetrest;
                let assetadtitle = response[i]['assetadtitle'];
                let assetsmallintrotext = response[i]['assetsmallintrotext'];
                let assetstatuschangedate = response[i]['assetstatuschangedate'];
                let assetnumberbedrooms = response[i]['assetnumberbedrooms'];
                let assetnumberbathrooms = response[i]['assetnumberbathrooms'];
                let assetnumbertoilets = response[i]['assetnumbertoilets'];
                let assetgarden = response[i]['assetgarden'];
                let assetterras = response[i]['assetterras'];
                let assetliving = response[i]['assetliving'];
                let assetbalcony = response[i]['assetbalcony'];
                let assetgarage = response[i]['assetgarage'];
                let assethasbath = response[i]['assethasbath'];
                let assethasparking = response[i]['assethasparking'];
                let assethaslift = response[i]['assethaslift'];
                let assethasairconditioning = response[i]['assethasairconditioning'];
                let assethasswimmingpool = response[i]['assethasswimmingpool'];
                let assethasfireplace = response[i]['assethasfireplace'];
                let assettitleen = response[i]['assettitleen'];
                let assetdetailtextensmall = response[i]['assetdetailtextensmall'];
                let assetenergylable = response[i]['assetenergylable'];
                let assetneighbourhood = response[i]['assetneighbourhood'];
                let assettype = response[i]['assetminrent'];
                let assetshorttermcontract = response[i]['assetshorttermcontract'];
                let assetmaxrent = response[i]['assetmaxrent'];
                let assetminrent = response[i]['assetminrent'];
                let assetfloor = response[i]['assetfloor'];
                let assetnofloors = response[i]['assetnofloors'];
                let assetavailableper = response[i]['assetavailableper'];
                let assetavailabledate = response[i]['assetavailabledate'];
                let assetmusicalinstruments = response[i]['assetmusicalinstruments'];
                let assetstateofmaintenance = response[i]['assetstateofmaintenance'];
                let assetsurface = response[i]['assetsurface'];
                let assetpets = response[i]['assetpets'];
                let assetrentaltype = response[i]['assetrentaltype'];
                let assetobjecttype = response[i]['assetobjecttype'];
                let assethousekind = response[i]['assethousekind'];
                let assetyear = response[i]['assetyear'];
                let assetconstructiontype = response[i]['assetconstructiontype'];
                let assetisshared = response[i]['assetisshared'];
                let assetupholsterytype = response[i]['assetupholsterytype'];
                let assetwarranteerequired = response[i]['assetwarranteerequired'];
                let assetmaxperson = response[i]['assetmaxperson'];
                let assetwashingmachine = response[i]['assetwashingmachine'];



                freshtemplate = template['responseText'].replace('{{assetstreet}}', assetstreet);
                freshtemplate = freshtemplate.replace('{{assetnumber}}', assetnumber);
                if(assetnumberadd != null) {
                    freshtemplate = freshtemplate.replace('{{assetnumberadd}}', assetnumberadd);
                }
                else {
                    freshtemplate = freshtemplate.replace('{{assetnumberadd}}', '');
                }

                freshtemplate =freshtemplate.replace('{{assetpostalcode}}', assetpostalcode);
                freshtemplate =freshtemplate.replace('{{assetcity}}', assetcity);
                freshtemplate = freshtemplate.replace('{{assetrent}}', assetrent);
                freshtemplate = freshtemplate.replace('{{updated_at}}', updated_at);
                freshtemplate = freshtemplate.replace('{{status}}', status);
                freshtemplate = freshtemplate.replace('{{statussince}}', statussince);
                freshtemplate = freshtemplate.replace('{{assetservice}}', assetservice);
                freshtemplate = freshtemplate.replace('{{assetfurniture}}', assetfurniture);
                freshtemplate = freshtemplate.replace('{{assetupholstery}}', assetupholstery);
                freshtemplate = freshtemplate.replace('{{assetwater}}', assetwater);
                freshtemplate = freshtemplate.replace('{{assetgasandlight}}', assetgasandlight);
                freshtemplate = freshtemplate.replace('{{assetcableandinternet}}', assetcableandinternet);
                freshtemplate = freshtemplate.replace('{{assetheatingsystem}}', assetheatingsystem);
                freshtemplate = freshtemplate.replace('{{assetrest}}', assetrest);
                freshtemplate = freshtemplate.replace('{{totalrent}}', totalrent);
                freshtemplate = freshtemplate.replace('{{assetadtitle}}', assetadtitle);
                freshtemplate = freshtemplate.replace('{{assetsmallintrotext}}', assetsmallintrotext);
                freshtemplate = freshtemplate.replace('{{assetstatuschangedate}}', assetstatuschangedate);
                freshtemplate = freshtemplate.replace('{{assetnumberbedrooms}}', assetnumberbedrooms);
                freshtemplate = freshtemplate.replace('{{assetnumberbathrooms}}', assetnumberbathrooms);
                freshtemplate = freshtemplate.replace('{{assetnumbertoilets}}', assetnumbertoilets);
                freshtemplate = freshtemplate.replace('{{assetgarden}}', assetgarden);
                freshtemplate = freshtemplate.replace('{{assetterras}}', assetterras);
                freshtemplate = freshtemplate.replace('{{assetliving}}', assetliving);
                freshtemplate = freshtemplate.replace('{{assetbalcony}}', assetbalcony);
                freshtemplate = freshtemplate.replace('{{assetgarage}}', assetgarage);
                freshtemplate = freshtemplate.replace('{{assethasbath}}', assethasbath);
                freshtemplate = freshtemplate.replace('{{assethasparking}}', assethasparking);
                freshtemplate = freshtemplate.replace('{{assethaslift}}', assethaslift);
                freshtemplate = freshtemplate.replace('{{assethasairconditioning}}', assethasairconditioning);
                freshtemplate = freshtemplate.replace('{{assethasswimmingpool}}', assethasswimmingpool);
                freshtemplate = freshtemplate.replace('{{assethasfireplace}}', assethasfireplace);
                freshtemplate = freshtemplate.replace('{{assettitleen}}', assettitleen);
                freshtemplate = freshtemplate.replace('{{assetdetailtextensmall}}', assetdetailtextensmall);
                freshtemplate = freshtemplate.replace('{{assetenergylable}}', assetenergylable);
                freshtemplate = freshtemplate.replace('{{assetneighbourhood}}', assetneighbourhood);
                freshtemplate = freshtemplate.replace('{{assettype}}', assettype);
                freshtemplate = freshtemplate.replace('{{assetminrent}}', assetminrent);
                freshtemplate = freshtemplate.replace('{{assetshorttermcontract}}', assetshorttermcontract);
                freshtemplate = freshtemplate.replace('{{assetmaxrent}}', assetmaxrent);
                freshtemplate = freshtemplate.replace('{{assetfloor}}', assetfloor);
                freshtemplate = freshtemplate.replace('{{assetnofloors}}', assetnofloors);
                freshtemplate = freshtemplate.replace('{{assetavailableper}}', assetavailableper);
                freshtemplate = freshtemplate.replace('{{assetavailabledate}}', assetavailabledate);
                freshtemplate = freshtemplate.replace('{{assetmusicalinstruments}}', assetmusicalinstruments);
                freshtemplate = freshtemplate.replace('{{assetstateofmaintenance}}', assetstateofmaintenance);
                freshtemplate = freshtemplate.replace('{{assetsurface}}', assetsurface);
                freshtemplate = freshtemplate.replace('{{assetpets}}', assetpets);
                freshtemplate = freshtemplate.replace('{{assetrentaltype}}', assetrentaltype);
                freshtemplate = freshtemplate.replace('{{assetobjecttype}}', assetobjecttype);
                freshtemplate = freshtemplate.replace('{{assethousekind}}', assethousekind);
                freshtemplate = freshtemplate.replace('{{assetyear}}', assetyear);
                freshtemplate = freshtemplate.replace('{{assetconstructiontype}}', assetconstructiontype);
                freshtemplate = freshtemplate.replace('{{assetupholsterytype}}', assetupholsterytype);
                freshtemplate = freshtemplate.replace('{{assetwarranteerequired}}', assetwarranteerequired);
                freshtemplate = freshtemplate.replace('{{assetmaxperson}}', assetmaxperson);
                freshtemplate = freshtemplate.replace('{{assetwashingmachine}}', assetwashingmachine);
                freshtemplate = freshtemplate.replace('{{assetisshared}}', assetisshared);

                console.log('AssetImage' , assetimage);
                if (response[i]['assetimages'][0]['image'] !== 'undefined') {
                    if (assetnumberadd != '' && assetnumberadd != null) {
                        console.log(assetnumberadd);
                        let url = imageUrl + '/' + assetstreet + '/' + assetnumber + '/' + assetnumberadd + '/' + assetimage + '.jpg';
                        freshtemplate = freshtemplate.replace('{{assetimage}}', url);
                    } else {
                        let url = imageUrl + '/' + assetstreet + '/' + assetnumber + '/' + assetimage + '.jpg';
                        freshtemplate = freshtemplate.replace('{{assetimage}}', url);
                    }
                }
                else {
                    let url = siteUrl + '/wp-content/plugins/re-agency/images/default.jpg';
                    freshtemplate = freshtemplate.replace('{{assetimage}}', url);
                }




                var newLi = document.createElement('li');

                newLi.id = 'asset_' + i;
                newLi.className = 'asset-item';
                newLi.innerHTML = freshtemplate;
                toAdd.appendChild(newLi);
                i++;
            }

            document.getElementById('currentOfferings').appendChild(toAdd);


        },
        error: function (response) {
            console.log("Errors found getting offerings %o", response);
        }
    });

    function assetOfferings() {

    }

});