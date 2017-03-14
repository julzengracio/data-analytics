//loads all of the google charts API



function checkLoginStatus() {
    FB.getLoginStatus(function(response) {
        if (response.status === 'connected') {
            // the user is logged in and has authenticated your
            // app, and response.authResponse supplies
            // the user's ID, a valid access token, a signed
            // request, and the time the access token 
            // and signed request each expire
            var uid = response.authResponse.userID;
            var accessToken = response.authResponse.accessToken;
            //loadAPI();
        }
    }, true);
}

function displayFB() {
    document.getElementById('analytics').style.display = "block";
    loadAPI();
}

//calls all functions in this script
function loadAPI() {
    fanCount();
    pageViews();
    mapGraph();
    barGraph();
    pageImpressions();
    pageVideoViews();
}

/* All codes below uses Facebook Graph API to gather data */

//returns lifetime fan count
function fanCount() {
    FB.api(
        '/IrishNationalSailingSchool/insights/page_fans',
        'GET',
        {},
        function(response) {
            console.log(response);
            var obj = response.data["0"].values["0"].value;
            var obj2 = response.data["0"].values["1"].value;
            
            document.getElementById("pageFansB").innerHTML = obj2;
            document.getElementById("pageFansA").innerHTML = obj;
        }
    );
}

//returns page views for a week
function pageViews() {
    FB.api(
        '/IrishNationalSailingSchool/insights/page_views_total/week',
        'GET',
        {},
        function(response) {
            console.log(response);
            var obj = response.data["0"].values["2"].value;
            
            document.getElementById("pageViews").innerHTML = obj;
        }
    );
}

function pageImpressions() {
    FB.api(
        '/IrishNationalSailingSchool/insights/page_impressions/week',
        'GET',
        {},
        function(response) {
            console.log(response);
            var obj = response.data["0"].values["2"].value;
            
            document.getElementById("pageImpressions").innerHTML = obj;
        }
    );
}

function pageVideoViews() {
    FB.api(
        '/IrishNationalSailingSchool/insights/page_video_views/week',
        'GET',
        {},
        function(response) {
            console.log(response);
            var obj = response.data["0"].values["2"].value;
            
            document.getElementById("pageVideoViews").innerHTML = obj;
        }
    );
}

//returns and display a World map of fan count
function mapGraph() {
    google.charts.load('upcoming', {packages: ['corechart', 'geochart']});
	FB.api(
		'/IrishNationalSailingSchool/insights/page_fans_country',
		'GET',
		{},
		function(response) {
			console.log(response);

            var AE = response.data["0"].values["0"].value.AE;
            var AT = response.data["0"].values["0"].value.AT;
            var AU = response.data["0"].values["0"].value.AU;
            //var BE = response.data["0"].values["0"].value.BE;
            var BR = response.data["0"].values["0"].value.BR;
            //var BY = response.data["0"].values["0"].value.BY;
            var CA = response.data["0"].values["0"].value.CA;
            var CH = response.data["0"].values["0"].value.CH;
            var CZ = response.data["0"].values["0"].value.CZ;
            var DE = response.data["0"].values["0"].value.DE;
            var DK = response.data["0"].values["0"].value.DK;
            var EG = response.data["0"].values["0"].value.EG;
            var ES = response.data["0"].values["0"].value.ES;
            var FR = response.data["0"].values["0"].value.FR;
            var GB = response.data["0"].values["0"].value.GB;
            var GR = response.data["0"].values["0"].value.GR;
            //var GT = response.data["0"].values["0"].value.GT;
            var HR = response.data["0"].values["0"].value.HR;
            var HU = response.data["0"].values["0"].value.HU;
            var ID = response.data["0"].values["0"].value.ID;
            var IE = response.data["0"].values["0"].value.IE;
            var IL = response.data["0"].values["0"].value.IL;
            var IN = response.data["0"].values["0"].value.IN;
            var IQ = response.data["0"].values["0"].value.IQ;
            var IT = response.data["0"].values["0"].value.IT;
            var LU = response.data["0"].values["0"].value.LU;
            var LV = response.data["0"].values["0"].value.LV;
            var MQ = response.data["0"].values["0"].value.MQ;
            var MT = response.data["0"].values["0"].value.MT;
            var MY = response.data["0"].values["0"].value.MY;
            var NL = response.data["0"].values["0"].value.NL;
            var NZ = response.data["0"].values["0"].value.NZ;
            var PE = response.data["0"].values["0"].value.PE;
            var PK = response.data["0"].values["0"].value.PK;
            var PL = response.data["0"].values["0"].value.PL;
            var PT = response.data["0"].values["0"].value.PT;
            var RO = response.data["0"].values["0"].value.RO;
            var RU = response.data["0"].values["0"].value.RU;
            var SE = response.data["0"].values["0"].value.SE;
            var SG = response.data["0"].values["0"].value.SG;
            var TH = response.data["0"].values["0"].value.TH;
            var TR = response.data["0"].values["0"].value.TR;
            var US = response.data["0"].values["0"].value.US;
            var VN = response.data["0"].values["0"].value.VN;

            google.charts.setOnLoadCallback(drawMap);

            function drawMap() {
                var data = google.visualization.arrayToDataTable([
                        ['Country', 'Popularity'],
                        ['United Arab Emirates', AE],
                        ['Austria', AT],
                        ['Australia', AU],
                        //['Belgium', BE],
                        ['Brazil', BR],
                        //['Belarus', BY],
                        ['Canada', CA],
                        ['Switzerland', CH],
                        ['Czech Republic', CZ],
                        ['Germany', DE],
                        ['Denmark', DK],
                        ['Egypt', EG],
                        ['Spain', ES],
                        ['France', FR],
                        ['United Kingdom', GB],
                        ['Greece', GR],
                        //['Guatemala', GT],
                        ['Croatia', HR],
                        ['Hungary', HU],
                        ['Indonesia', ID],
                        ['Ireland', IE],
                        ['Israel', IL],
                        ['India', IN],
                        ['Iraq', IQ],
                        ['Italy', IT],
                        ['Luxembourg', LU],
                        ['Latvia', LV],
                        ['Martinique', MQ],
                        ['Malta', MT],
                        ['Malaysia', MY],
                        ['Netherlands', NL],
                        ['New Zealand', NZ],
                        ['Peru', PE],
                        ['Pakistan', PK],
                        ['Poland', PL],
                        ['Portugal', PT],
                        ['Romania', RO],
                        ['Russian Federation', RU],
                        ['Sweden', SE],
                        ['Singapore', SG],
                        ['Thailand', TH],
                        ['Turkey', TR],
                        ['United States', US],
                        ['Viet Nam', VN]
                    ]);

                var options = {};
                var chart = new google.visualization.GeoChart(document.getElementById('geograph'));
                chart.draw(data, options);
            }
		}
	);
}

//returns a demograph of fans, age and gender group
function barGraph() {
    google.charts.load('current', {packages: ['corechart', 'bar']});
    FB.api(
        'IrishNationalSailingSchool/insights/page_fans_gender_age',
        'GET',
        {},
        function(response) {
            console.log(response);
            var f17 = response.data["0"].values["0"].value["F.13-17"];
            var f24 = response.data["0"].values["0"].value["F.18-24"];
            var f34 = response.data["0"].values["0"].value["F.25-34"];
            var f44 = response.data["0"].values["0"].value["F.35-44"];
            var f54 = response.data["0"].values["0"].value["F.45-54"];
            var f64 = response.data["0"].values["0"].value["F.55-64"];
            var f65 = response.data["0"].values["0"].value["F.65+"];
            var m17 = response.data["0"].values["0"].value["M.13-17"];
            var m24 = response.data["0"].values["0"].value["M.18-24"];
            var m34 = response.data["0"].values["0"].value["M.25-34"];
            var m44 = response.data["0"].values["0"].value["M.35-44"];
            var m54 = response.data["0"].values["0"].value["M.45-54"];
            var m64 = response.data["0"].values["0"].value["M.55-64"];
            var m65 = response.data["0"].values["0"].value["M.65+"];
            var u17 = response.data["0"].values["0"].value["U.13-17"];
            var u24 = response.data["0"].values["0"].value["U.18-24"];
            var u34 = response.data["0"].values["0"].value["U.25-34"];
            var u44 = response.data["0"].values["0"].value["U.35-44"];
            var u54 = response.data["0"].values["0"].value["U.45-54"];
            var u64 = response.data["0"].values["0"].value["U.55-64"];
            var u65 = response.data["0"].values["0"].value["U.65+"];

            console.log(f17);
            
            google.charts.setOnLoadCallback(drawBarGraph);
            
            function drawBarGraph() {
                var data = google.visualization.arrayToDataTable([
                    ['Age','Female','Male','Not Defined'],
                    ['13-17', f17, m17, u17],
                    ['18-24', f24, m24, u24],
                    ['25-34', f34, m34, u34],
                    ['35-44', f44, m44, u44],
                    ['45-54', f54, m54, u54],
                    ['55-64', f64, m64, u64],
                    ['65+', f65, m65, u65]
                ]);
                
                var options = {
                    title: 'Fans Demograph',
                    chartArea: {width: '50%'},
                    hAxis: {
                        title: 'Total Fans',
                        minValue: 0
                    },
                    vAxis: {
                        title: 'Age Group'
                    }
                };
                
                var chart = new google.visualization.BarChart(document.getElementById('demograph'));
                chart.draw(data, options);
            }
        }
    );
}

