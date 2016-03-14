/*
Google Calendar Jump to Month Script v 1.0
by Daniel Chase @ https://riseofweb.com
*/
function GoogleCalendarJump(){
 var iframeName = "Senate Events and GBMs"; //What is the Name attribute for the Google Calendar iframe embed?
 var divHolder = "GCoptions"; //The DIV ID attribute to write to
 var months = 48; //How many months you would like to show
 var maxYear = 3; //Max number of full years to show
 var columns = 3; //How many columns?

 var iframeLink = document.getElementsByName(iframeName)[0].src;
 var theMonths = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
 var today = new Date();
 var month = today.getMonth();
 var year = today.getFullYear();
 var i;
 var link;
 var writeToDiv = '';
 var yearCount = 0;

 function replaceFrameURL(url,param,value) {
 var re = new RegExp("([?|&])" + param + "=.*?(&|$)","i");
 if (url.match(re))
 return url.replace(re,'$1' + param + "=" + value + '$2');
 else
 return url + '&' + param + "=" + value;
 }

 columns = Math.floor(100/columns);

 writeToDiv = '<div class="GCcolumn" style="width:'+columns+'%;">';
 writeToDiv = writeToDiv + '<h3 class="GCyear">' + year + '</h3>';
 for (i=0; i<months; i++) {
 link = String(year) + String(("0" + (month+1)).slice(-2)) + '01';
 link = String(link) + '/' + String(link);
 link = replaceFrameURL(iframeLink,'dates',link);
 
 writeToDiv = writeToDiv + '<a class="GClink" href="'+link+'" target="'+iframeName+'">' + theMonths[month] + '</a>';
 month++;
 if (month % 12 === 0){
 year++;
 yearCount++;
 if(yearCount >= maxYear){ break; }
 writeToDiv = writeToDiv + '</div><div class="GCcolumn" style="width:'+columns+'%;">';
 writeToDiv = writeToDiv + '<h3 class="GCyear">' + year + '</h3>';
 }
 if (month > 11) {
 month = 0;
 }
 }
 writeToDiv = writeToDiv + '</div><div class="GCclear"></div>';
 document.getElementById(divHolder).innerHTML = writeToDiv;
}
