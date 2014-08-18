<script type="text/javascript"><!--

/* for older Browser Fallback, put this on top of the Header: 
 * var speedTrackingStartpoint = Number(new Date());
 */

if('http:' == document.location.protocol) {
	var speedTrackingExistingOnload = window.onload;
	var speedTrackingTracking = function() {
		var st = document.createElement('script'); 
		st.type = 'text/javascript'; 
		st.async = true;
		st.src = 'speedtracking.js';
		var s = document.getElementsByTagName('script')[0]; 
		s.parentNode.insertBefore(st, s);
	}
	window.onload = function() {
		if(typeof(speedTrackingExistingOnload) == "function"){ speedTrackingExistingOnload(); }
		setTimeout(speedTrackingTracking, 1000);
	}
}
//--></script>