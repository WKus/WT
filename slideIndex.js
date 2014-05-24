window.onload = function () {

    <!-- images for the slider, size 1060 x 327 px -->
    var images = [
	    <!-- 1 -->
        'slideshow/wtslideshows-environment-rainforest4.jpg',
        <!-- 2 -->
		'slideshow/wtslideshows-poverty1.jpg',
        <!-- 3 -->
		'slideshow/wtslideshows-environment-endangeredspecies8.jpg',
		<!-- 4 -->
		'slideshow/wtslideshows-health1.jpg',
		<!-- 5 -->
		'slideshow/wtslideshows-environment-fishing1.jpg',
		<!-- 6 -->
		'slideshow/wtslideshows-environment-renewableenergy1.jpg',
		<!-- 7 -->
		'slideshow/wtslideshows-elderly1.jpg',
		<!-- 8 -->
		'slideshow/wtslideshows-schools1.jpg',
		<!-- 9 -->
		'slideshow/wtslideshows-environment-recycling3.jpg',
		<!-- 10 -->
		'slideshow/wtslideshows-environment-water1.jpg',
		<!-- 11 -->
		'slideshow/wtslideshows-environment-naturaldisasters1.jpg',
		<!-- 12 -->
		'slideshow/wtslideshows-youngpeople3.jpg',
    ];

    <!-- array with strings for bottom text, use <br /> to divide txt into 2 parts -->
    var btm_text = [
        <!-- 1 -->
		'At the current rate of destruction the world&#39;s rainforests could disappear within 40-50 years.  Yet they provide 20% of the world&#39;s oxygen and 25% of all prescription medicines. ',
        <!-- 2 -->
		'The lives of over 7 million children will be lost needlessly every year due to poverty.  Yet just $25 billion would go a long way to alleviating all poverty worldwide. ',
        <!-- 3 -->
		'The largest animal on the planet, the blue whale, now has a global population of less than 5,000. ',
		<!-- 4 -->
		'Worldwide, more than 250 million children live without access to any health service whatsoever.',
        <!-- 5 -->
		'Over 65% of the world&#39;s marine fish stocks are already either fully or over-exploited and yet fish provide the main protein source for over 20% of the world&#39;s population. ',
		<!-- 6 -->
		'Enough sunlight falls on the earth&#39;s surface every hour to meet world energy demand for a whole year. ',
		<!-- 7 -->
		' At the current rate of destruction the world\'s rainforests could disappear within 40-50 years.  Yet they provide 20% of the world\'s oxygen and 25% of all prescription medicines. ',
		<!-- 8 -->
		' Globally, over 125 million children between the ages of 7 and 18 have never been to school. ',
		<!-- 9 -->
		' Recycling a one-foot (30cm) high stack of newspapers saves enough electricity to heat a home for 17 hours. ',
		<!-- 10 -->
		' Over a million children die each year because they don\’t have access to safe drinking water or adequate sanitation.  ',
		<!-- 11 -->
		' Since 2000, over a million people have died as a result of natural disasters and nearly ten times more lost their homes.  ',
		<!-- 12 -->
		' Young people involved in youth projects or sport are more healthy, do better at school and less likely to turn to crime. ',
	]

    <!-- array with strings for right text -->
    var rightTxt = [
	     <!-- 1 -->
        'The Wisdom Trust makes donations to support the work of organisations which protect and preserve the world&#39;s rainforests. ',
        <!-- 2 -->
		'Funding from The Wisdom Trust helps support the work of organisations which strive to reduce global poverty.',
        <!-- 3 -->
		'Regular donations from The Wisdom Trust support the work of organisations which protect endangered species.',
		<!-- 4 -->
		'The Wisdom Trust allocates regular funding to support organisations which deliver healthcare  in the world&#39;s poorest communities. ',
        <!-- 5 -->
		'The Wisdom Trust  makes donations to  support organisations which protect  the world&#39;s oceans and marine life. ',
		<!-- 6 -->
		'Funds from The Wisdom Trust support organisations which promote and initiate renewable energy projects. ',
		<!-- 7 -->
		' Funding from The Wisdom Trust supports the work of organisations which help improve the lives of older people. ',
		<!-- 8 -->
		' Regular donations from The Wisdom Trust support the campaigns of organisations which improve education worldwide. ',
		<!-- 9 -->
		'  ',
		<!-- 10 -->
		' Over a million children die each year because they don\’t have access to safe drinking water or adequate sanitation.  ',
		<!-- 11 -->
		' Funding is available from The Wisdom Trust to support organisations which provide emergency aid during natural disasters. ',
		<!-- 12 -->
		' Regular funding from The Wisdom Trust supports organisations which deliver youth and sporting projects worldwide.  ',
	]
	
	<!-- generate random number to start slideshow from, size of image array = max length -->
	var randomFirstSlide = Math.floor((Math.random()*images.length-1));
	<!-- load the element for the first cycle, empty otherwise --> 
    elem = document.getElementById("btmText");
    elem2 = document.getElementById("rightText");
    <!-- starting texts-->

    elem.innerHTML = btm_text[randomFirstSlide];
    elem2.innerHTML = rightTxt[randomFirstSlide];
	
    <!-- initial animation, are repeated in the setInterval function -->
    <!--  picture fade in -->
    $(function () {
        $('#pic').fadeOut(0).fadeIn( 1000 );
			pic.src = images[randomFirstSlide];
			images.current = randomFirstSlide;
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