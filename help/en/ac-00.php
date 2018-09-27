<?php require_once( 'couch/cms.php' ); ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Instant War Help</title>

    <script src="../js/modernizr.min.js"></script>
    <!--[if (gt IE 8) | (IEMobile)]><!-->
    <link rel="stylesheet" href="../css/style.css">
    <!--<![endif]-->
    <!--[if (lt IE 9) & (!IEMobile)]>
    <link rel="stylesheet" href="css/ie.css">
    <![endif]-->
</head>
<body class="">

<div id="outer-wrap">
<div id="inner-wrap">
    <header id="top" role="banner">
        <h1 class="site-title" id="logo"><a href="index.html">Instant War Help</a></h1>
        <div class="block">
            <h1 class="block-title" ></h1>
            <a class="nav-btn" id="nav-open-btn" href="#nav"><span>Navigation</span></a>
        </div>
    </header>
    <!-- navigation should go here -->
    <nav id="nav" role="navigation" class="main-navigation">
    <div class="block">
        <h2 class="block-title">Pages</h2>
        <ul>
            <li class="has-children">
                <a href="bg-01.html" aria-haspopup="true">Beginner's Guide</a>
                <button class="dropdown-toggle" aria-expanded="false">
                    <span class="svg-fallback icon-angle-down"></span>
                </button>
                <ul class="submenu">
                    <li><a href="bg-02.html">Resources</a></li>
                    <li><a href="bg-03.html">Military Actions</a></li>
                    <li><a href="bg-04.html">Base Improvement</a></li>
                    <li><a href="bg-05.html">Items</a></li>
                </ul>
            </li><!--/beginner's guide-->
            <li class="has-children"><a href="di-00.html" aria-haspopup="true">Districts</a>
                <button class="dropdown-toggle" aria-expanded="false"><span class="svg-fallback icon-angle-down"></span></button>
                <ul class="submenu">
                    <li><a href="di-01.html">Headquarters (HQ)</a></li>
                    <li><a href="di-02.html">Industrial District</a></li>
                    <li><a href="di-03.html">Military District</a></li>
                    <li><a href="di-04.html">Civil District</a></li>
                    <li><a href="di-05.html">Scientific District</a></li>
                    <li><a href="di-06.html">Tech District</a></li>
                    <li><a href="di-07.html">Social District</a></li>
                </ul>
            </li><!-- districts-->
            <li class="has-children"><a id="ad" href="ad-00.html" aria-haspopup="true"><span>Add-ons</span></a>
            <button class="dropdown-toggle" aria-expanded="false"><span class="svg-fallback icon-angle-down"></span></button>
                 <ul>
                    <li><a href="ad-01.html">Construction</a></li>
                    <li><a href="ad-02.html">Add-on Abilities</a></li>
                </ul>
            </li><!-- add-ons-->
            <li class="has-children"><a id="ac" href="ac-00.html" aria-haspopup="true"><span>Actions</span></a>
            <button class="dropdown-toggle" aria-expanded="false"><span class="svg-fallback icon-angle-down"></span></button>
                 <ul class="submneu">
                    <li><a href="ac-01.html">Building</a></li>
                    <li><a href="ac-02.html">Recruiting</a></li>
                    <li><a href="ac-03.html">Researching</a></li>
                    <li><a href="ac-04.html">Recovering</a></li>
                    <li><a href="ac-05.html">Crafting</a></li>
                </ul> 
            </li><!-- actions-->
            <li class="has-children"><a id="al" href="al-00.html" aria-haspopup="true">Alliance</a>
            <button class="dropdown-toggle" aria-expanded="false"><span class="svg-fallback icon-angle-down"></span></button>
                <ul class="submenu">
                    <li><a href="al-01.html">How to create an Alliance?</a></li>
                    <li><a href="al-02.html">Alliance Clearance</a></li>
                    <li><a href="al-03.html">Alliance Buildings</a></li>
                    <li><a href="al-04.html">Alliance Currencies</a></li>
                    <li><a href="al-05.html">Alliance Shop</a></li>
                    <li><a href="al-06.html">Alliance Diplomacy</a></li>
                    <li><a href="al-07.html">Reinforcing</a></li>
                    <li><a href="al-08.html">Alliance Commands</a></li>
                    <li><a href="al-09.html">Alliance Battles</a></li>
                    <li><a href="al-10.html">Alliance Assist</a></li>
                    <li><a href="al-11.html">Alliance Technology</a></li>
                </ul>
            </li><!-- alliances-->
            <li><a id="co" href="cb-01.html">Combat</a></li><!-- combat -->
            <li class="has-children"><a id="gov" href="gv-00.html">Government</a>
             <button class="dropdown-toggle" aria-expanded="false"><span class="svg-fallback icon-angle-down"></span></button>
                 <ul class="submenu">
                    <li><a href="gv-01.html">Titles</a></li>
                    <li><a href="gv-02.html">Laws</a></li>
                    <li><a href="gv-03.html">War Chests</a></li>
                    <li><a href="gv-04.html">More...</a></li>
                </ul>
            </li><!-- government -->
            <li><a id="pp" href="pp-01.html">Player Profile</a></li><!-- player profile -->
            <li class="has-children"><a id="wm" href="wm-00.html">World Map</a>
            <button class="dropdown-toggle" aria-expanded="false"><span class="svg-fallback icon-angle-down"></span></button>
                 <ul class="submenu">
                    <li><a href="wm-01.html">Mines</a>
                    </li>
                    <li><a href="wm-02.html">Camping</a></li>
                    <li><a href="wm-03.html">Strategic Map and Region Points</a></li>
                    <li><a href="wm-04.html">Scouting</a></li>
                    <li><a href="wm-05.html">Teleporting</a></li>
                </ul>
            </li><!-- world map -->
            <li class="has-children"><a id="cb" href="co-00.html">Commander Base</a>
            <button class="dropdown-toggle" aria-expanded="false"><span class="svg-fallback icon-angle-down"></span></button>
                 <ul class="submneu">
                    <li><a href="co-01.html">HQ Defense</a></li>
                    <li><a href="co-02.html">City Boosters</a></li>
                    <li><a href="co-03.html">Troop Formations</a></li>
                    <li><a href="co-04.html">Alerts</a></li>
                    <li><a href="co-05.html">City Customization</a></li>
                </ul>
            </li><!-- commander base -->
            <li><a id="gs" href="gs-00.html"> General Skills</%></a></li><!-- general skills -->                
            <li class="has-children"><a id="ev" href="ev-01.html">Events</a>
            <button class="dropdown-toggle" aria-expanded="false"><span class="svg-fallback icon-angle-down"></span></button>
                <ul class="submenu">
                    <li><a href="ev-02.html">Mark of Supremacy</a></li>
                    <li><a href="ev-03.html">Liberation Day</a></li>
                    <li><a href="ev-04.html">DEFCON One</a></li>
                </ul>
            </li><!-- events -->                
            <li class="has-children"><a id="bp" href="bp-00.html">Benefit Passes</a><span class="svg-fallback icon-angle-down"></span>
            </li><!-- benefit passes -->
            <li class="has-children"><a id="in" href="in-00.html">Inventory</a>
            <button class="dropdown-toggle" aria-expanded="false"><span class="svg-fallback icon-angle-down"></span></button>
                 <ul class="submenu">
                    <li><a href="in-01.html">Inventory</a></li>
                    <li><a href="in-02.html">Store</a></li>
                </ul>
            </li><!-- inventory -->
            <li class="has-children"><a id="of" href="of-00.html">Other Features</a>
            <button class="dropdown-toggle" aria-expanded="false"><span class="svg-fallback icon-angle-down"></span></button>
                 <ul class="submenu">
                    <li><a href="of-01.html">Missions</a></li>
                    <li><a href="of-02.html">Inbox &#38; Reports</a></li>
                    <li><a href="of-03.html">Bookmarks</a></li>
                </ul>
            </li><!-- other features -->
            <li><a id="lb" href="lb-01.html">Leaderboards</a></li><!-- leaderboards -->
            <li><a id="se" href="st-01.html">Settings</a></li><!-- settings -->
            <li><a id="pi" href="pi-00.html">Purchase Info</a></li><!-- purchase info -->
            <li class="has-children"><a id="faq" href="fq-00.html">FAQ</a>
             <button class="dropdown-toggle" aria-expanded="false"><span class="svg-fallback icon-angle-down"></span></button>
                 <ul class="submenu">
                    <li><a href="fq-01.html">What is Instant War?</a></li>
                    <li><a href="fq-02.html">How do I change my name?</a></li>
                    <li><a href="fq-03.html">How do I change my player Avatar?</a></li>
                    <li><a href="fq-04.html">How do I change my General?</a></li>
                    <li><a href="fq-05.html">How do I protect my Base?</a></li>
                    <li><a href="fq-06.html">How can I get free Gold?</a></li>
                    <li><a href="fq-07.html">I made a purchase, but I didn't get my Gold?</a></li>
                    <li><a href="fq-08.html">What are Encounters?</a></li>
                    <li><a href="fq-09.html">How do I secure my progress?</a></li>
                    <li><a href="fq-10.html">How does the VIP work?</a></li>
                    <li><a href="fq-11.html">How do I increase my Force?</a></li>
                    <li><a href="fq-12.html">Why my Base is on fire?</a></li>
                    <li><a href="fq-13.html">How can I obtain more crafting parts?</a></li>
                    <li><a href="fq-14.html">How do I report offensive behavior?</a></li>
                    <li><a href="fq-17.html">How do I block a player?</a></li>
                    <li><a href="fq-15.html">Realm Transfer</a></li>
                    <li><a href="fq-16.html">Why can't I log into the game?</a></li>
                </ul>
            </li><!-- faq -->
            <li><a id="su" href="mp-01.html">Support</a></li><!-- support -->
            <li class="has-children"><a id="le" href="lg-00.html">Legal</a>
                <button class="dropdown-toggle" aria-expanded="false"><span class="svg-fallback icon-angle-down"></span></button>
                 <ul class="submenu">
                    <li><a href="lg-01.html">Terms of Use</a></li>
                    <li><a href="lg-02.html">Privacy Policy</a></li>
                </ul>
            </li><!-- legal -->
        </ul>
        <a class="close-btn" id="nav-close-btn" href="#top">Return to Content</a>
    </div>
</nav>
    <div id="main" role="main">
<article class="prose"><div class="content"><div class="container block"><div class="banner"><h1></h1></div><div class="title"><h4>Overview</h4></div><p>To make things easier, we've identified the 5 main actions in your Command and have emphasized the interface to reflect their importance. Each of these actions will help you grow and further develop your base, gaining more strength in the process. All of them can be observed in the bottom middle area of your command interface in a place we've called the &quot;Action Bar&quot;</p><div class="title"><h4>Action Bar</h4></div><p>All production queues are contained within it. With just a simple tap over any of the options, you can expand the interface and quickly get an idea of the status and progress for that selected Action. The buttons themselves also have a red label that give important info about the status of the queues in a glance before even expanding it further. All this will help you manage your Base more efficiently and save time when doing your daily activities.</p><p>All queues can be selected for quicker navigation towards their corresponding actions instead of going through your Base to do so.</p><ul class="internal_links grid-wrapper"><li><a class="internal_link" href="ac-01.html"><img alt="" src="../images/ac-01-Building.jpg"/>Building</a></li><li><a class="internal_link" href="ac-02.html"><img alt="" src="../images/ac-02-Recruit.jpg"/>Recruiting</a></li><li><a class="internal_link" href="ac-03.html"><img alt="" src="../images/ac-03-Research.jpg"/>Researching</a></li><li><a class="internal_link" href="ac-04.html"><img alt="" src="../images/ac-04-Recover.jpg"/>Recovering</a></li><li><a class="internal_link" href="ac-05.html"><img alt="" src="../images/ac-05-Crafting.jpg"/>Crafting</a></li></ul></div></div>    
        <footer role="contentinfo">
        <div class="block prose">
            <p class="small">Copyright © 2018 Playwing. All rights reserved.</p>
        </div>
    </footer>

</div>
<!--/#inner-wrap-->
</div>
<!--/#outer-wrap-->
<script src="../js/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../js/nav.js"></script>
</body>
</html>
<?php COUCH::invoke(); ?>