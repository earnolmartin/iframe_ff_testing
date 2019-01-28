# iframe_ff_testing
Firefox 3rd Party Cookies Blocking - Testing
## Testing
In Firefox, in the address bar, type "about:preferences#privacy" and press enter.  Set "Block cookies and site data" to "Cookies from unvisited websites" like so:
<p><a href='https://serv1.dragndropz.com/user_images/2019_01_28/812_MWg3wr_ff_options_3rd_party.png' target='_blank'><img src='https://serv1.dragndropz.com/user_images/2019_01_28/thumbs/812_8ZRt3X_ff_options_3rd_party.png' alt='Attached Image Hosted by DragNDropz www.dragndropz.com'></a></p>
Simply download "index.html" from the "local_src" folder, and open it in Firefox.
Different iframes have been loaded from a cross origin domain.  Enter a random name in the various iframes, and then click on the "GO" button.  If sessions are maintained, you'll get a "Session Value Maintained and Set to Yes in Browser" message after clicking on the button.  If they're not maintained, you'll get a "Session Value NOT MAINTAINED AND NOT SET" error message.
