thissiteurl = "http://p4nd4.net/privacy-policy";

var config = {
    
    apiKey: '9dc6b499e2c228f0058a670becbdada938ec4f3b',         //  http://p4nd4.net/
    product: 'COMMUNITY', // the free edition
  	initialState: 'OPEN',  // this ensures the window is open when the user first arrives
    closeStyle: 'button', // otherwise an X appears, which is too easy for the user to use for our purposes
    necessaryCookies: ['_a*','_b*','_c*'], // here you list all essential cookies - the * allows a wildcard value after the stated cookie name
    rejectButton: true,  // this ensures a reject button is shown beside the accept recommended cookies button
    position: 'RIGHT', // this forces the window to be on the left of the screen
    theme: 'LIGHT', // this sets the basic theme

    text: {
        // this section sets the content at the top of the window
		title: 'THIS SITE USES COOKIES.',
        acceptRecommended: 'ACCEPT RECOMMENDED COOKIES',
        rejectSettings: 'REJECT',
        intro: 'Some cookies are essential to the functioning of this website, while others help us to improve your experience. We recommend you accept all cookies.',
        necessaryTitle: 'STRICTLY NECESSARY COOKIES',
        necessaryDescription: 'These essential cookies are inherent to and/or enable this website\'s core functionality. The website cannot function properly without these cookies.',
        closeLabel :'SAVE &amp; CLOSE',
        thirdPartyTitle: 'Warning: Some cookies require your attention',
        thirdPartyDescription: 'Please visit our <a href="http://p4nd4.net/privacy-policy">privacy policy page</a> to view details on Ve and Captify',
    },
    
    statement : {
    	description: 'For more information visit our',
    	name : 'privacy policy',  // the link text
    	url: thissiteurl,
    	updated : '04/01/2019' 	// this date is checked by the Civic code and if consent was given earlier, it will ask for nre consent
    },
      

};

CookieControl.load(config);

