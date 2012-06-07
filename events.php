<?php
function generate_calendar_button($name, $description, DateTime $start, DateTime $end, $location, $mysite_url, $mysite_name) {

   $url = 'http://www.google.com/calendar/event?';
   $parts = array();
   $parts['action'] = 'TEMPLATE';
   $parts['text'] = urlencode($name);
   $parts['details'] = urlencode($description);
   $parts['dates'] = urlencode($start->format("c")) . "/" . urlencode($end->format("c"));
   $parts['location'] = urlencode($location);
   $parts['sprop'] = urlencode($mysite_url);
#   $parts['sprop'][1] = urlencode($mysite_url);

   $full_link = $url;
   foreach ($parts as $key => $value) {
      $full_link .= "&" . $key . "=" . $value;
   }

   return '<a href="' . $full_link . '" target="_blank"><img src="//www.google.com/calendar/images/ext/gc_button1.gif" border=0></a>';
}

?>
<!-- Event start - normal description -->
<div id="txt_272" style="position:absolute;left:203px;top:1048px;width:571px;height:187px;overflow:hidden;">
<p class="Wp-Body-P"><span class="Body-C-C0">Boulevard Summer Show</span></p>
<p class="Wp-Body-P"><span class="Body-C"><a href="http://www.boulevardnewcastle.co.uk/"  target="_blank" style="text-decoration:underline;">www.boulevardnewcastle.co.uk</a></span></p>
<p class="Wp-Body-P"><span class="Body-C">Starting Friday 15th June, the Boulevard Summer Show 2012 features new sets and musical
    numbers led by the legendary Betty Legs Diamond, performing alongside established
    favourites and some rather fetching new faces, all held together by the incomparable
    Miss Rory.</span></p>
<p class="Wp-Body-P"><span class="Body-C">Boulevard Box Office is open Mon-<wbr>Sat 11am till 6pm. Please call us on 0191 250 7068.</span></p>

<p class="Wp-Body-P"><span class="Body-C">A popular night out!</span></p>
<!-- Google calendar button -->
<p><?php
print generate_calendar_button(
    "Boulevard Summer Show",
    "Starting Friday 15th June, the Boulevard Summer Show 2012 features new sets and musical
    numbers led by the legendary Betty Legs Diamond, performing alongside established
    favourites and some rather fetching new faces, all held together by the incomparable
    Miss Rory.",
    new DateTime("2012-07-15 8:00"),
    new DateTime("2012-07-15 10:00"),
    "123 Example Lane, Exampleville",
    "http://www.northernpink.co.uk/",
    "Northern Pink"
);
?></p>
