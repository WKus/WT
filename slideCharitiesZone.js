window.onload = function () {

    <!-- images for the slider, size 1060 x 327 px -->
    var images = [
	    <!-- 1 -->
        'slideshow/wtslideshows-poverty3.jpg',
        <!-- 2 -->
		'slideshow/wtslideshows-schools3.jpg',
        <!-- 3 -->
		'slideshow/wtslideshows-environment-endangeredspecies3.jpg',
		<!-- 4 -->
		'slideshow/wtslideshows-grants-education2.jpg',
		<!-- 5 -->
		'slideshow/wtslideshows-community13.jpg',
		
    ];

    <!-- array with strings for bottom text, use <br /> to divide txt into 2 parts -->
    var btm_text = [
        <!-- 1 -->
		'The Wisdom Trust sets aside over 70% of its income for donations to support the work \& activities of hundreds of other charities \& good causes all over the world. ',
        <!-- 2 -->
		'The largest part of our donations fund is decided by a vote of Wisdom Trust\'s members.  They can vote every day for their own favourite causes to get a share of our fund. ',
        <!-- 3 -->
		'As well as donating funds to support charities and good causes, we\'ll also help promote their issues and campaigns on our website and through our various media projects. ',
		<!-- 4 -->
		'The Wisdom Trust offers special Wisdom Trust grants to help the friends and supporters of the causes we support to make positive changes in their own lives.',
        <!-- 5 -->
		'Make sure your favourite cause is listed with us so we can help you to support them as well.  If they\'re not, simply go to our website and invite them to sign up. ',
		
	]

    <!-- array with strings for right text -->
    var rightTxt = [
	     <!-- 1 -->
        'Funding from The Wisdom Trust helps to relieve poverty and to feed hungry children in the UK and in communities on every continent.  ',
        <!-- 2 -->
		'Wisdom Trust donates funds to support schools, hospitals and youth organisations in the UK and all over the world, as well as helping sports projects, environmental initiatives, poverty relief programmes and thousands of other local good causes everywhere. ',
        <!-- 3 -->
		'For example, funding from The Wisdom Trust supports the work of organisations which protect endangered species, but we can also promote their issues and campaigns via our website and through our various newsletters and other media projects - Wisdom TV and Radio Wisdom.',
		<!-- 4 -->
		'Wisdom Trust grants help people reduce their carbon footprint, help students offset the costs of higher education and support low-income families and the elderly with food or heating vouchers. ',
        <!-- 5 -->
		'The Wisdom Trust aims to help people and good causes in communities on every continent, making a clear, positive difference to the lives of local people, of all ages and backgrounds, everywhere.  ',
		
	]
	
	<!-- generate random number to start slideshow from, size of image array = max length -->
	var FirstSlide = 0;
	<!-- load the element for the first cycle, empty otherwise --> 
    elem = document.getElementById("btmText");
    elem2 = document.getElementById("rightText");
    <!-- starting texts-->

    elem.innerHTML = btm_text[FirstSlide];
    elem2.innerHTML = rightTxt[FirstSlide];
	
    <!-- initial animation, are repeated in the setInterval function -->
    <!--  picture fade in -->
    $(function () {
        $('#pic').fadeOut(0).fadeIn( 1000 );
			pic.src = images[FirstSlide];
			images.current = FirstSlide;
    });
    
    <!--  bottom text animation, from left to right -->
    $(function () {
        $( "#btmText" ).fadeOut(0).delay( 2500 ).fadeIn( 500 );
    });
    <!--  right text animation, from up -->
    $(function () {
        $( "#rightText" ).fadeOut(0).delay( 3500 ).fadeIn( 800 );
    });
	images.current++;


    setInterval(function () {
	    elem.innerHTML = btm_text[images.current];
        elem2.innerHTML = rightTxt[images.current];
		
        pic.src = images[images.current++];
        if (images.current === images.length) images.current = 0;
        
        <!-- animate bottom left text every cycle -->
        $( "#btmText" ).fadeOut(0).delay( 2500 ).fadeIn( 500 );
        <!-- amimate right text every cycle -->
        $( "#rightText" ).fadeOut(0).delay( 3500 ).fadeIn( 800 );
		<!-- fade in picture every cycle -->
        $('#pic').fadeOut(0).fadeIn( 1000 );
		<!--  Interval -->
    }, 5000);

};