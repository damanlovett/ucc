http://twitter.ncsu.edu

NC State University
 * Outreach Technology (http://ot.ncsu.edu)
 * Web Communications (http://www.ncsu.edu)
 * Contact twitter@ncsu.edu for additional assistance.


The contents of this package are released under the following license:

=================================================

This license is governed by United States copyright law, and with respect to matters
of tort, contract, and other causes of action it is governed by North Carolina law,
without regard to North Carolina choice of law provisions.  The forum for any dispute
resolution shall be in Wake County, North Carolina.

Redistribution and use in source and binary forms, with or without modification, are
permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this list
   of conditions and the following disclaimer.

2. Redistributions in binary form must reproduce the above copyright notice, this
   list of conditions and the following disclaimer in the documentation and/or other
   materials provided with the distribution.

3. The name of the author may not be used to endorse or promote products derived from
   this software without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE AUTHOR "AS IS" AND ANY EXPRESS OR IMPLIED
WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY
AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE AUTHOR BE
LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL
DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF
ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

=================================================

Notes

*  The files included in this package are just the functional pieces that interact 
   with the twitter API.
   
*  This code is based on Zend Framework version 1.9.0.  You will need to download
   that separately from http://framework.zend.com
   
*  While not required, we would prefer that you state where the code used to create 
   your site came from.  Our contact information is at the top of this document.
   

Installation

*  Extract the download into a web accessible directory on your webserver

*  Extract the library folder from the Zend Framework download package into the
   /inc folder.  (You should have /inc/Zend/...)
   
*  Add permissions for the web server to write to /cache.  This code caches all
   requests to the twitter API so that if twitter goes down, the site still 
   functions.  The cache lifetime is set to 6 hours, but can be extended by
   changing the cache lifetime in the _initCache() method in Ncsutwitter.php.
   The caching mechanism only works for page one of the index.php tweets and for
   the orgs.php.  Additional pages of tweets are not cached.
   
*  Go to twitter.com and create an account to be used for your twitter site.  

*  In Ncsutwitter.php, replace the values for USERNAME and PASSWORD with your 
   new twitter account.
   
*  Go to twitter.com and follow your organization's accounts with your new twitter
   account.  As you follow people, they will begin showing up in the orgs.php
   page, and their tweets will start to be displayed on the home page.
   
*  You will want to update the feed.php RSS feed settings to match your orgs
   desires, specifically lines 16 - 19.  You will want to update these with
   your organizations name and the URL to the RSS feed for it to function
   correctly.
   
*  In index.php and orgs.php, you will want to customize the page title's so 
   that they include your organizations name.
   

Any additional questions should be sent to twitter@ncsu.edu.
