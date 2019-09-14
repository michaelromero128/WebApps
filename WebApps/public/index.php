<?php
require_once('../private/initialize.php');

$page_title = 'TweetBook';
include_once (SHARED_PATH . "/header.php");

include_once(SHARED_PATH . "/nav.php");
?>
<div class="intro-text">
    <br>
    <br>
    <p>Hello! Welcome to TweetBook. In the future we hope to introduce a page with interesting posts made by me pretending to be other people. This is a wholly original idea and in no way infringes any copyright.
        I plan to use a mysql database to allow users to post and then use simple queries built into a php page to populate a given page full of posts. I have never made a content management system before but I watched a video on lynda.com that showed me a lot of the techniques used to populate a page with php and I hope to apply that knowledge.</p>
    <br><br>
    <p>When I first started thinking of ideas, I thought maybe make this themed to make it particular. At first I thought of making it wizard themed because I thought it would be funny. Then I remembered I am at a public university and some people might be offended due to the involvement with the occult despite wizards not being real. There is a type of "magic" called chaos magic that is used by Grant Morrison and Satanists but my understanding is that it is basically ritualized wishful thinking. Again, I find this amusing because wizards aren't real things. Much of the themes in chaos magic is like the stuff in the book "The Secret". And nobody gets made about "The Secret" in regards to its occult nature. </p>

</div>

<?php
include(SHARED_PATH . "/footer.php");

?>