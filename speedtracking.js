if ('undefined' != typeof window.performance && 'undefined' != typeof window.performance.timing) {
	var wpt = window.performance.timing;
	var speedTrackingDataString = 'page='+window.location.href+'&dlt='+(wpt.domainLookupEnd-wpt.domainLookupStart)+'&ct='+(wpt.connectEnd-wpt.connectStart)+'&wt='+(wpt.responseStart-wpt.requestStart)+'&tt='+(wpt.responseEnd-wpt.responseStart)+'&dt='+(wpt.domComplete-wpt.domLoading)+'&let='+(wpt.loadEventEnd-wpt.loadEventStart)+'&sum='+(wpt.loadEventEnd-wpt.navigationStart);
	speedTrackingImg = new Image();
	speedTrackingImg.src = 'img.php?' + speedTrackingDataString;
} else if ('undefined' != typeof speedTrackingStartpoint) {
	var speedTrackingDataString = 'page='+window.location.href+'&sum='+(Number(new Date()) - speedTrackingStartpoint);
	speedTrackingImg = new Image();
	speedTrackingImg.src = 'img.php?' + speedTrackingDataString;
}