function bws_ready(callbackFunc) {
  if (document.readyState !== 'loading') {
    // Document is already ready, call the callback directly
    callbackFunc();
  } else if (document.addEventListener) {
    // All modern browsers to register DOMContentLoaded
    document.addEventListener('DOMContentLoaded', callbackFunc);
  } else {
    // Old IE browsers
    document.attachEvent('onreadystatechange', function() {
      if (document.readyState === 'complete') {
        callbackFunc();
      }
    });
  }
}

bws_ready(function() {

	// scroll to top button start
	var toTopBtn = document.getElementById('to-top-btn');
	function handleToTopBtn(){
		if( isScrollingUp ) {
			toTopBtn.classList.add('top-top-btn-active');
		} else {
			toTopBtn.classList.remove('top-top-btn-active');
		}
	}
	// scroll to top button end

	// detect scroll direction start
	var isScrollingUp = false,
		prevScroll = 0;
	function handleScrolling(){
		var currentScroll = window.pageYOffset || document.documentElement.scrollTop;
        if ( currentScroll > 100 && currentScroll < prevScroll ) {
            isScrollingUp = true;
            console.log('show')
        } else {
            isScrollingUp = false;
            console.log('hide')
        }
        prevScroll = currentScroll;
        handleToTopBtn()
	}
    window.addEventListener('scroll', handleScrolling);
	// detect scroll direction end








});
