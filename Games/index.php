<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" id="www-roblox-com">


    <!--[if lte IE 7]>
    <style>
    .Navigation .dropdownnavcontainer
    {
        margin-left:121px;
    }
    </style>
    <![endif]-->
    <?php
        require("../important/title.php");
	?>

</script>
<link href="/CSS/BASE/ALLCSS.css" type="text/css" rel="stylesheet"/></head>





        <!-- Used for execution that must happen before page load -->
    

    
    
    
    
    <div id="MasterContainer">
     <!-- Begin chat bar -->
        <div style="width: 100%">
        
        </div>
    <!-- End chat bar -->
    
        <div id="Container">
            <div id="HeaderContainer">
            
    <div id="AdvertisingLeaderboard">
        
            <div id="ctl00_cphBannerAd_ItemBannerAd_OutsideAdPanel" class="AdPanel">
	
            <iframe id="ctl00_cphBannerAd_ItemBannerAd_AsyncAdIFrame" allowtransparency="true" frameborder="0" scrolling="no" height="90" src="/images/SalesPitcher/PlayNow3.png" width="528"></iframe>
            
</div>
            <a id="ctl00_cphBannerAd_ItemBannerAd_ReportAdButton" title="click to report an offensive ad" class="BadAdButton" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphBannerAd$ItemBannerAd$ReportAdButton&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">[ report ]</a>
              <script type="text/javascript">
			    $(function()
                {
	                $(".AdPanel").css("z-index", 9998);
                });
            </script>
        
    

    </div>

             
            <div id="Header">
                <div id="Banner">
                    
                            

<div id="Options">
	<div id="Authentication">
		    <?php
                // Check if the user is logged in, if not then redirect him to login page
                if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
                        echo '<span id="AuthenticationBannerSpan" style="width: 40px;">
                        <a id="ctl00_BannerOptionsLoginView_BannerOptions_Anonymous_LoginHyperLink" href="/Login.php">Login</a>
                        </span>';
                }
                
                if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                    echo '<span id="AuthenticationBannerSpan" style="width: 130px;">
                    <p1>Hi '.htmlspecialchars($_SESSION["username"]).'</p1><a id="ctl00_BannerOptionsLoginView_BannerOptions_Anonymous_LoginHyperLink" href="/logout.php">Logout</a>
                    </span>';
                }
                ?>
	</div>
	<div id="Settings"></div>
</div>
                            <a id="Logo" href="/index.php" style="cursor: pointer; border: none;"></a>
                        
                    
                            
<div style="float: right; width: 203px;">


</div>

                        
                </div>
                


    <?php
        require("../important/dropdownNav.php");
        require("../important/navbar.php");
	?>
            </div>
            </div>
            <div id="Body">
                
    <script type="text/javascript" src="https://web.archive.org/web/20110207224553js_/http://www.roblox.com/js/jquery.address-1.3.1.min.js"></script>
    <script src="https://web.archive.org/web/20110207224553js_/http://www.roblox.com/js/GamesDisplay.js" type="text/javascript"></script>
    <div id="PlaceTemplate" style="display: none">
        <div style="float:left;">
            <div class="GameItem">
                <div class="AlwaysShown"> 
                    THUMBNAIL
                    <div class="GameName" style="font-weight:bold;font-size:12px;overflow: hidden;white-space: nowrap;">
                        <a href="GAMENAVIGATEURL">GAMENAME</a>
                    </div>
                    <div class="PlayerCount" style="color:Red;float:left;">
                        CURRENTPLAYERSCOUNT
                    </div>
                    <div class="GenreIcons" style="float:right;">
                        <img class="GenreIcon" alt="GENREICONALT"/>
                        <img class="GearIcon" alt="GEARICONALT"/>
                    </div>
                    <div class="CreatorName" style="clear:both;display:none;">
                        by <a href="CREATORURL">CREATORNAME</a>
                    </div>
                </div>
                <div class="HoverShown">
                    <div class="StatsPlayed">
                        Played PLAYSCOUNT
                    </div>
                    <div class="StatsFavorited">
                        Favorited FAVORITESCOUNT
                    </div>
                    <div class="StatsUpdated">
                        Updated LASTUPDATED
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="Column1e">
        <div class="StandardBoxHeader">
            <span>Games&nbsp;<a id="ctl00_cphRoblox_hlNewsFeed"><img src="/web/20110207224553im_/http://www.roblox.com/css/rbx2/images/topNav_rss.png" alt="RSS" border="0"/></a>
            </span>
        </div>
        <div class="StandardBox" id="GamesLeftColumn" style="padding: 20px 5px;">
            <div id="Timespan" class="GameFilter">
                <div>Time:</div>
                <ul>
                    <li><a class="GamesFilter SelectedFilter" filter="Now" href="?t=Now">Now</a></li>
                    <li><a class="GamesFilter " filter="PastDay" href="?t=PastDay">Past Day</a></li>
                    <li><a class="GamesFilter " filter="PastWeek" href="?t=PastWeek">Past Week</a></li>
                    <li><a class="GamesFilter " filter="AllTime" href="?t=AllTime">All Time</a></li>
                </ul>
            </div>    
            <div id="Genres" class="GameFilter" style="margin-top:20px;">
                <div>Genres:</div>
                <ul>
                    
                            <li>
                                <a class="GamesGenre SelectedGenre" genre="all" href="/web/20110207224553/http://www.roblox.com/all-games" genresinfotext="" title="All Games"><h3>All</h3></a>
                            </li>
                        
                            <li>
                                <a class="GamesGenre " genre="town-and-city" href="/web/20110207224553/http://www.roblox.com/town-and-city-games" genresinfotext="Roblox is proud to offer the web's best collection of town and city games, other free online games and 3D virtual worlds. We are committed to making sure that all of our free games are fun and safe. Roblox members can create their own virtual world online games; customize their avatar character with the best virtual goods like hats, shirts and gear; and play free online town and city games with their friends while also meeting new friends. Whether you are interested in Town and City games, Action games, Adventure games, Funny games, Car games, or even Tycoon games, count on Roblox to deliver the best free online games for you to play. Check out our Builders Club membership service for an enhanced building games experience. " title="Town and City Games"><h3>Town and City</h3></a>
                            </li>
                        
                            <li>
                                <a class="GamesGenre " genre="medieval" href="/web/20110207224553/http://www.roblox.com/medieval-games" genresinfotext="Roblox is proud to offer the web's best collection of medieval games, other free online games and 3D virtual worlds. We are committed to making sure that all of our free games are fun and safe. Roblox members can create their own virtual world online games; customize their avatar character with the best virtual goods like hats, shirts and gear; and play free online medieval games with their friends while also meeting new friends. Whether you are interested in Medieval games, Action games, Adventure games, Funny games, Car games, or even Tycoon games, count on Roblox to deliver the best free online games for you to play. Check out our Builders Club membership service for an enhanced building games experience." title="Fantasy Games"><h3>Fantasy</h3></a>
                            </li>
                        
                            <li>
                                <a class="GamesGenre " genre="sci-fi" href="https://web.archive.org/web/20110207224553/http://www.roblox.com/sci-fi-games" genresinfotext="Roblox is proud to offer the web's best collection of sci-fi games, other free online games and 3D virtual worlds. We are committed to making sure that all of our free games are fun and safe. Roblox members can create their own virtual world online games; customize their avatar character with the best virtual goods like hats, shirts and gear; and play free online sci-fi games with their friends while also meeting new friends. Whether you are interested in Sci-Fi games, Action games, Adventure games, Funny games, Car games, or even Tycoon games, count on Roblox to deliver the best free online games for you to play. Check out our Builders Club membership service for an enhanced building games experience. " title="Sci-Fi Games"><h3>Sci-Fi</h3></a>
                            </li>
                        
                            <li>
                                <a class="GamesGenre " genre="ninja" href="https://web.archive.org/web/20110207224553/http://www.roblox.com/ninja-games" genresinfotext="Roblox is proud to offer the web's best collection of ninja games, other free online games and 3D virtual worlds. We are committed to making sure that all of our free games are fun and safe. Roblox members can create their own virtual world online games; customize their avatar character with the best virtual goods like hats, shirts and gear; and play ninja games online with their friends while also meeting new friends. Whether you are interested in Ninja games, Action games, Adventure games, Funny games, Car games, or even Tycoon games, count on Roblox to deliver the best free online games for you to play. Check out our Builders Club membership service for an enhanced building games experience. " title="Ninja Games"><h3>Ninja</h3></a>
                            </li>
                        
                            <li>
                                <a class="GamesGenre " genre="scary" href="/web/20110207224553/http://www.roblox.com/scary-games" genresinfotext="Roblox is proud to offer the web's best collection of scary games, other free online games and 3D virtual worlds. We are committed to making sure that all of our free games are fun and safe. Roblox members can create their own virtual world online games; customize their avatar character with the best virtual goods like hats, shirts and gear; and play free online scary games with their friends while also meeting new friends. Whether you are interested in scary games, Action games, Adventure games, Funny games, Car games, or even Tycoon games, count on Roblox to deliver the best free online games for you to play. Check out our Builders Club membership service for an enhanced building games experience. " title="Scary Games"><h3>Scary</h3></a>
                            </li>
                        
                            <li>
                                <a class="GamesGenre " genre="pirate" href="/web/20110207224553/http://www.roblox.com/pirate-games" genresinfotext="Roblox is proud to offer the web's best collection of pirate games, other free online games and 3D virtual worlds. We are committed to making sure that all of our free games are fun and safe. Roblox members can create their own virtual world online games; customize their avatar character with the best virtual goods like hats, shirts and gear; and play free online pirate games with their friends while also meeting new friends. Whether you are interested in Pirate games, Action games, Adventure games, Funny games, Car games, or even Tycoon games, count on Roblox to deliver the best free online games for you to play. Check out our Builders Club membership service for an enhanced building games experience. " title="Pirate Games"><h3>Pirate</h3></a>
                            </li>
                        
                            <li>
                                <a class="GamesGenre " genre="adventure" href="/web/20110207224553/http://www.roblox.com/adventure-games" genresinfotext="Roblox is proud to offer the web's best collection of adventure games, other free online games and 3D virtual worlds. We are committed to making sure that all of our free games are fun and safe. Roblox members can create their own virtual world online games; customize their avatar character with the best virtual goods like hats, shirts and gear; and play free online adventure games with their friends while also meeting new friends. Whether you are interested in Adventure games, Action games, Adventure games, Funny games, Car games, or even Tycoon games, count on Roblox to deliver the best free online games for you to play. Check out our Builders Club membership service for an enhanced building games experience. " title="Adventure Games"><h3>Adventure</h3></a>
                            </li>
                        
                            <li>
                                <a class="GamesGenre " genre="sports" href="/web/20110207224553/http://www.roblox.com/sports-games" genresinfotext="Roblox is proud to offer the web's best collection of sports games, other free online games and 3D virtual worlds. We are committed to making sure that all of our free games are fun and safe. Roblox members can create their own virtual world online games; customize their avatar character with the best virtual goods like hats, shirts and gear; and play free online sports games with their friends while also meeting new friends. Whether you are interested in Sports games, Action games, Adventure games, Funny games, Car games, or even Tycoon games, count on Roblox to deliver the best free online games for you to play. Check out our Builders Club membership service for an enhanced building games experience. " title="Sports Games"><h3>Sports</h3></a>
                            </li>
                        
                            <li>
                                <a class="GamesGenre " genre="funny" href="/web/20110207224553/http://www.roblox.com/funny-games" genresinfotext="Roblox is proud to offer the web's best collection of funny games, other free online games and 3D virtual worlds. We are committed to making sure that all of our free games are fun and safe. Roblox members can create their own virtual world online games; customize their avatar character with the best virtual goods like hats, shirts and gear; and play free online funny games with their friends while also meeting new friends. Whether you are interested in Funny games, Action games, Adventure games, Funny games, Car games, or even Tycoon games, count on Roblox to deliver the best free online games for you to play. Check out our Builders Club membership service for an enhanced building games experience. " title="Funny Games"><h3>Funny</h3></a>
                            </li>
                        
                            <li>
                                <a class="GamesGenre " genre="wild-west-cowboy" href="/web/20110207224553/http://www.roblox.com/wild-west-cowboy-games" genresinfotext="Roblox is proud to offer the web's best collection of wild west cowboy games, other free online games and 3D virtual worlds. We are committed to making sure that all of our free games are fun and safe. Roblox members can create their own virtual world online games; customize their avatar character with the best virtual goods like hats, shirts and gear; and play free online wild west cowboy games with their friends while also meeting new friends. Whether you are interested in Wild West Cowboy games, Action games, Adventure games, Funny games, Car games, or even Tycoon games, count on Roblox to deliver the best free online games for you to play. Check out our Builders Club membership service for an enhanced building games experience. " title="Wild West Games"><h3>Wild West</h3></a>
                            </li>
                        
                            <li>
                                <a class="GamesGenre " genre="war" href="/web/20110207224553/http://www.roblox.com/war-games" genresinfotext="Roblox is proud to offer the web's best collection of war games, other free online games and 3D virtual worlds. We are committed to making sure that all of our free games are fun and safe. Roblox members can create their own virtual world online games; customize their avatar character with the best virtual goods like hats, shirts and gear; and play free online war games with their friends while also meeting new friends. Whether you are interested in War games, Action games, Adventure games, Funny games, Car games, or even Tycoon games, count on Roblox to deliver the best free online games for you to play. Check out our Builders Club membership service for an enhanced building games experience. " title="War Games"><h3>War</h3></a>
                            </li>
                        
                            <li>
                                <a class="GamesGenre " genre="skatepark" href="/web/20110207224553/http://www.roblox.com/skatepark-games" genresinfotext="" title="Skate Park Games"><h3>Skate Park</h3></a>
                            </li>
                        
                            <li>
                                <a class="GamesGenre " genre="gametutorials" href="/web/20110207224553/http://www.roblox.com/gametutorials-games" genresinfotext="Game Tutorials - Learn more about ROBLOX virtual world and online games through useful games with game tutorials. ROBLOX also provides game design software to let users design and make a 3D game. Play ROBLOX and the millions of free virtual world and online games now. It's always free to play games at ROBLOX!" title="Tutorial Games"><h3>Tutorial</h3></a>
                            </li>
                        
                </ul>    
            </div>
        </div>
        <!-- Filters / genres -->
    </div>
    <div class="Column2e">
        <div id="PlayTabs" style="float:left;">
            <!-- DO NOT PUT NEW LINES IN BETWEEN TABS... This will add a 4px margin because of the display: inline-block -->
            <div id="PlayMostPopularTab" class="StandardTabGrayActive GamesSort" sort="MostPopular"><span><a href=""><h2>Popular</h2></a></span></div><div id="PlayTopFavoritesTab" class="StandardTabGray GamesSort" sort="TopFavorites"><span><a href="?m=TopFavorites"><h2>Top Favorites</h2></a></span></div><div id="PlayFeaturedTab" class="StandardTabGray GamesSort" sort="Featured"><span><a href="?m=Featured"><h2>Featured</h2></a></span></div>
        </div>
        <div style="position:relative;float:right;"><input id="searchbox" type="text" name="search" value="Search" style="color:#888;height:20px;" onkeypress="if (event.keyCode == 13) { return Search(); }"/><div class="SearchIconButton" onclick="Search()"></div></div>
        <div class="StandardBoxGray" style="float: left">
            <div id="Games">
                <div id="BCOnlyPlaces" style="display: none">
                    <div class="StandardBoxHeaderGray"><span style="text-align: center">
                        <div class="BCHat" style="position: relative; top: -5px"></div>
                        <div id="BCOnlyPlacesTitle">Builders Club Games</div>
                    </span></div>
                    <div class="StandardBox" style="width: 410px">
                        <div id="BCOnlyGamesContentPrevNavButton" class="SkinnyLeftArrow"></div>
                        <div id="BCOnlyGamesContent"></div>
                        <div id="BCOnlyGamesContentNextNavButton" class="SkinnyRightArrow"></div>
                    </div>
                </div>
                <div id="GamePageAdDiv" style="width: 300px; height: 300px;float: right;display: inline">
                    
            <div id="ctl00_cphRoblox_GamesPageAd_OutsideAdPanel" class="AdPanel">
	
            <iframe id="ctl00_cphRoblox_GamesPageAd_AsyncAdIFrame" allowtransparency="true" frameborder="0" scrolling="no" height="250" src="https://web.archive.org/web/20110207224553if_/http://www.roblox.com/Ads/IFrameAdContent.aspx?v=2&amp;slot=Roblox_Default_Middle_300x250&amp;format=rectangle&amp;v=2" width="300"></iframe>
            
</div>
        
    

                </div>
                <div id="GamesContent">
                    <noscript>
                        <span style="font-size: 18px; font-weight: bold">You must have javascript enabled to view this page.</span>
                    </noscript>
                </div>
                <div style="text-align:center; padding-bottom:20px;color:#888;font-size:14px; clear:both">
                    <div id="GamesContentPrevNavButton" class="BlueLeftArrow" style="position:relative;top:12px;visibility: hidden;"></div>
                    <span style="margin:0 5px;"><span id="GamesContentCurrPageNum">1</span> of <span id="GamesContentTotalPageNums"></span></span>
                    <div id="GamesContentNextNavButton" class="BlueRightArrow" style="position:relative;top:12px;"></div>
                </div>
            </div>
            <div id="GenreDescriptionPanel">
                <span id="GenreDescriptionPanelGenresInfoText"></span> 
            </div>
        </div>
    </div>
        
    <script type="text/javascript">
        var defaultParamData = eval({"FilterString":"Now","GameTypeString":"Play","GenreString":"all","MinBCLevelString":"None","PageNumString":"1","PageSizeString":"16","SortString":"MostPopular"});
        var defaultSeedData = eval({"TotalPages" : "207","Count" : "16","Items" : [{"BCOverlay":{"Alt":null,"Url":null},"Creator":{"Name":"Ralphieboy","Url":"~\/User.aspx?ID=2287710"},"GearIcon":{"Alt":"All gear allowed","Url":"~\/images\/Suitcase16x16.png"},"GenreIcon":{"Alt":"Town and City","Url":"~\/images\/GenreIcons\/City.png"},"ItemID":21328269,"Name":"Bank Tycoon [Playground Added!] VIP s...","NavigateUrl":"\/Bank-Tycoon-Playground-Added-VIP-stuff-item?id=21328269","Stats":{"CurrentPlayersCount":698,"FavoritesCount":"343 times","LastUpdated":"4 hours ago","PlaysCount":"8,685 times"},"ThumbnailFinal":true,"ThumbnailUrl":"https:\/\/web.archive.org\/web\/20110207224553\/http:\/\/t7bg.roblox.com\/53e6a1b38ecf89eb81dbe133502e5475"},{"BCOverlay":{"Alt":null,"Url":null},"Creator":{"Name":"Her0z","Url":"~\/User.aspx?ID=2698004"},"GearIcon":{"Alt":"No gear allowed","Url":"~\/images\/NoSuitcase16x16.png"},"GenreIcon":{"Alt":"Scary","Url":"~\/images\/GenreIcons\/Cthulu.png"},"ItemID":30624688,"Name":"R . U . N .","NavigateUrl":"\/R-U-N-item?id=30624688","Stats":{"CurrentPlayersCount":536,"FavoritesCount":"71 times","LastUpdated":"2 hours ago","PlaysCount":"12,110 times"},"ThumbnailFinal":true,"ThumbnailUrl":"https:\/\/web.archive.org\/web\/20110207224553\/http:\/\/t5bg.roblox.com\/dc734b188a2ace7f6f68384f89000aea"},{"BCOverlay":{"Alt":null,"Url":null},"Creator":{"Name":"d4rk886","Url":"~\/User.aspx?ID=5239900"},"GearIcon":{"Alt":"No gear allowed","Url":"~\/images\/NoSuitcase16x16.png"},"GenreIcon":{"Alt":"War","Url":"~\/images\/GenreIcons\/ModernMilitary.png"},"ItemID":18164449,"Name":"@Base War: The Land@ v8.41 [WWII weapon]","NavigateUrl":"\/Base-War-The-Land-v8-41-WWII-weapon-item?id=18164449","Stats":{"CurrentPlayersCount":528,"FavoritesCount":"324 times","LastUpdated":"13 hours ago","PlaysCount":"12,435 times"},"ThumbnailFinal":true,"ThumbnailUrl":"https:\/\/web.archive.org\/web\/20110207224553\/http:\/\/t6bg.roblox.com\/2a7da295b9d979c94529139726496fa2"},{"BCOverlay":{"Alt":null,"Url":null},"Creator":{"Name":"BCGames","Url":"~\/User.aspx?ID=13868292"},"GearIcon":{"Alt":"No gear allowed","Url":"~\/images\/NoSuitcase16x16.png"},"GenreIcon":{"Alt":"Funny","Url":"~\/images\/GenreIcons\/LOL.png"},"ItemID":43270338,"Name":"Sharks and Minnows *Maps*","NavigateUrl":"\/Sharks-and-Minnows-Maps-item?id=43270338","Stats":{"CurrentPlayersCount":509,"FavoritesCount":"262 times","LastUpdated":"1 minute ago","PlaysCount":"3,974 times"},"ThumbnailFinal":true,"ThumbnailUrl":"https:\/\/web.archive.org\/web\/20110207224553\/http:\/\/t7bg.roblox.com\/40a92ebee091b0214b863632a92189f8"},{"BCOverlay":{"Alt":null,"Url":null},"Creator":{"Name":"IxIRenegadeIxI","Url":"~\/User.aspx?ID=3070139"},"GearIcon":{"Alt":"Genre specific gear only","Url":"~\/images\/GenreSuitcase16x16.png"},"GenreIcon":{"Alt":"Adventure","Url":"~\/images\/GenreIcons\/Adventure.png"},"ItemID":10722684,"Name":"HUNGER GAMES V.2.4 (FIXED fly cheat +...","NavigateUrl":"\/HUNGER-GAMES-V-2-4-FIXED-fly-cheat-rifle-item?id=10722684","Stats":{"CurrentPlayersCount":476,"FavoritesCount":"493 times","LastUpdated":"46 minutes ago","PlaysCount":"7,642 times"},"ThumbnailFinal":true,"ThumbnailUrl":"https:\/\/web.archive.org\/web\/20110207224553\/http:\/\/t1bg.roblox.com\/bb4fa17f084cec9b307075818f60a4a4"},{"BCOverlay":{"Alt":null,"Url":null},"Creator":{"Name":"jamie26666","Url":"~\/User.aspx?ID=1945509"},"GearIcon":{"Alt":"All gear allowed","Url":"~\/images\/Suitcase16x16.png"},"GenreIcon":{"Alt":"Funny","Url":"~\/images\/GenreIcons\/LOL.png"},"ItemID":6932096,"Name":"Cart Ride Through Crazy Fruits ADMIN","NavigateUrl":"\/Cart-Ride-Through-Crazy-Fruits-ADMIN-item?id=6932096","Stats":{"CurrentPlayersCount":468,"FavoritesCount":"156 times","LastUpdated":"1 week ago","PlaysCount":"6,137 times"},"ThumbnailFinal":true,"ThumbnailUrl":"https:\/\/web.archive.org\/web\/20110207224553\/http:\/\/t7bg.roblox.com\/e73f9ff47e62046d679e8ee6cb9cecae"},{"BCOverlay":{"Alt":null,"Url":null},"Creator":{"Name":"metallicaman97","Url":"~\/User.aspx?ID=3171226"},"GearIcon":{"Alt":"All gear allowed","Url":"~\/images\/Suitcase16x16.png"},"GenreIcon":{"Alt":"War","Url":"~\/images\/GenreIcons\/ModernMilitary.png"},"ItemID":11040376,"Name":"Black Ops Tycoon (Updated) (read desc.)","NavigateUrl":"\/Black-Ops-Tycoon-Updated-read-desc-item?id=11040376","Stats":{"CurrentPlayersCount":451,"FavoritesCount":"726 times","LastUpdated":"1 day ago","PlaysCount":"4,163 times"},"ThumbnailFinal":true,"ThumbnailUrl":"https:\/\/web.archive.org\/web\/20110207224553\/http:\/\/t3bg.roblox.com\/dec3b784332da28b5b54c736e621f233"},{"BCOverlay":{"Alt":null,"Url":null},"Creator":{"Name":"coolwhip900","Url":"~\/User.aspx?ID=2793437"},"GearIcon":{"Alt":"No gear allowed","Url":"~\/images\/NoSuitcase16x16.png"},"GenreIcon":{"Alt":"Adventure","Url":"~\/images\/GenreIcons\/Adventure.png"},"ItemID":9851978,"Name":"New Sea Prison Version 2.1.9 {Selling...","NavigateUrl":"\/New-Sea-Prison-Version-2-1-9-Selling-for-500R-item?id=9851978","Stats":{"CurrentPlayersCount":402,"FavoritesCount":"123 times","LastUpdated":"4 days ago","PlaysCount":"5,706 times"},"ThumbnailFinal":true,"ThumbnailUrl":"https:\/\/web.archive.org\/web\/20110207224553\/http:\/\/t4bg.roblox.com\/e78632cb1891d93d2dfc24284dd9c423"},{"BCOverlay":{"Alt":null,"Url":null},"Creator":{"Name":"Boopbot","Url":"~\/User.aspx?ID=644704"},"GearIcon":{"Alt":"Genre specific gear only","Url":"~\/images\/GenreSuitcase16x16.png"},"GenreIcon":{"Alt":"Fantasy","Url":"~\/images\/GenreIcons\/Castle.png"},"ItemID":9583639,"Name":"Kingdom Lifeâ„¢ II","NavigateUrl":"\/Kingdom-Life-II-item?id=9583639","Stats":{"CurrentPlayersCount":386,"FavoritesCount":"324 times","LastUpdated":"15 seconds ago","PlaysCount":"12,053 times"},"ThumbnailFinal":true,"ThumbnailUrl":"https:\/\/web.archive.org\/web\/20110207224553\/http:\/\/t4bg.roblox.com\/8b6e30ba348b45c103305cbf4bacbae4"},{"BCOverlay":{"Alt":null,"Url":null},"Creator":{"Name":"TheFurryFox","Url":"~\/User.aspx?ID=4307571"},"GearIcon":{"Alt":"No gear allowed","Url":"~\/images\/NoSuitcase16x16.png"},"GenreIcon":{"Alt":"All","Url":"~\/images\/GenreIcons\/Classic.png"},"ItemID":18540115,"Name":"Survive The 85 Disasters! VIP FIXED","NavigateUrl":"\/Survive-The-85-Disasters-VIP-FIXED-item?id=18540115","Stats":{"CurrentPlayersCount":388,"FavoritesCount":"280 times","LastUpdated":"2 days ago","PlaysCount":"11,731 times"},"ThumbnailFinal":true,"ThumbnailUrl":"https:\/\/web.archive.org\/web\/20110207224553\/http:\/\/t5bg.roblox.com\/48b224d6016217f1d27acc159b674e7f"},{"BCOverlay":{"Alt":null,"Url":null},"Creator":{"Name":"4Popcorn","Url":"~\/User.aspx?ID=5783019"},"GearIcon":{"Alt":"All gear allowed","Url":"~\/images\/Suitcase16x16.png"},"GenreIcon":{"Alt":"Funny","Url":"~\/images\/GenreIcons\/LOL.png"},"ItemID":22917971,"Name":"Are You Bad Luck? -Obby-","NavigateUrl":"\/Are-You-Bad-Luck-Obby-item?id=22917971","Stats":{"CurrentPlayersCount":421,"FavoritesCount":"88 times","LastUpdated":"3 weeks ago","PlaysCount":"4,261 times"},"ThumbnailFinal":true,"ThumbnailUrl":"https:\/\/web.archive.org\/web\/20110207224553\/http:\/\/t4bg.roblox.com\/d111be09116660211458edb98c67232f"},{"BCOverlay":{"Alt":null,"Url":null},"Creator":{"Name":"TheGamer101","Url":"~\/User.aspx?ID=2231221"},"GearIcon":{"Alt":"Genre specific gear only","Url":"~\/images\/GenreSuitcase16x16.png"},"GenreIcon":{"Alt":"War","Url":"~\/images\/GenreIcons\/ModernMilitary.png"},"ItemID":14375697,"Name":"Sword Fighting Tournament*New sword*","NavigateUrl":"\/Sword-Fighting-Tournament-New-sword-item?id=14375697","Stats":{"CurrentPlayersCount":361,"FavoritesCount":"125 times","LastUpdated":"1 day ago","PlaysCount":"10,062 times"},"ThumbnailFinal":true,"ThumbnailUrl":"https:\/\/web.archive.org\/web\/20110207224553\/http:\/\/t4bg.roblox.com\/92e9605b0aa330ef7cc900605f7d25a0"},{"BCOverlay":{"Alt":null,"Url":null},"Creator":{"Name":"crazyman32","Url":"~\/User.aspx?ID=308165"},"GearIcon":{"Alt":"No gear allowed","Url":"~\/images\/NoSuitcase16x16.png"},"GenreIcon":{"Alt":"All","Url":"~\/images\/GenreIcons\/Classic.png"},"ItemID":3430664,"Name":"Helicopter TEST","NavigateUrl":"\/Helicopter-TEST-item?id=3430664","Stats":{"CurrentPlayersCount":353,"FavoritesCount":"1,075 times","LastUpdated":"1 day ago","PlaysCount":"15,381 times"},"ThumbnailFinal":true,"ThumbnailUrl":"https:\/\/web.archive.org\/web\/20110207224553\/http:\/\/t5bg.roblox.com\/46b9b8ed4397f6cb019d1212801d1c83"},{"BCOverlay":{"Alt":null,"Url":null},"Creator":{"Name":"Playrobot","Url":"~\/User.aspx?ID=130749"},"GearIcon":{"Alt":"All gear allowed","Url":"~\/images\/Suitcase16x16.png"},"GenreIcon":{"Alt":"Town and City","Url":"~\/images\/GenreIcons\/City.png"},"ItemID":272941,"Name":"RobloxavilleÂ® ","NavigateUrl":"\/Robloxaville-item?id=272941","Stats":{"CurrentPlayersCount":301,"FavoritesCount":"98 times","LastUpdated":"17 hours ago","PlaysCount":"7,658 times"},"ThumbnailFinal":true,"ThumbnailUrl":"https:\/\/web.archive.org\/web\/20110207224553\/http:\/\/t7bg.roblox.com\/c644f29195e95693ac8a4edca5c4ef05"},{"BCOverlay":{"Alt":null,"Url":null},"Creator":{"Name":"eter","Url":"~\/User.aspx?ID=729151"},"GearIcon":{"Alt":"Genre specific gear only","Url":"~\/images\/GenreSuitcase16x16.png"},"GenreIcon":{"Alt":"Adventure","Url":"~\/images\/GenreIcons\/Adventure.png"},"ItemID":15997985,"Name":"Elemental RPG (Free Starting Sword) *...","NavigateUrl":"\/Elemental-RPG-Free-Starting-Sword-New-Badge-item?id=15997985","Stats":{"CurrentPlayersCount":318,"FavoritesCount":"277 times","LastUpdated":"37 seconds ago","PlaysCount":"4,966 times"},"ThumbnailFinal":true,"ThumbnailUrl":"https:\/\/web.archive.org\/web\/20110207224553\/http:\/\/t2bg.roblox.com\/77e447710caae503d0169b372df18ce2"},{"BCOverlay":{"Alt":null,"Url":null},"Creator":{"Name":"lando64000","Url":"~\/User.aspx?ID=1123551"},"GearIcon":{"Alt":"No gear allowed","Url":"~\/images\/NoSuitcase16x16.png"},"GenreIcon":{"Alt":"All","Url":"~\/images\/GenreIcons\/Classic.png"},"ItemID":9424459,"Name":"Hide And Seek (28 Fields)","NavigateUrl":"\/Hide-And-Seek-28-Fields-item?id=9424459","Stats":{"CurrentPlayersCount":282,"FavoritesCount":"65 times","LastUpdated":"1 week ago","PlaysCount":"4,766 times"},"ThumbnailFinal":true,"ThumbnailUrl":"https:\/\/web.archive.org\/web\/20110207224553\/http:\/\/t2bg.roblox.com\/714028d6aa37c378aa883430e0cec5b7"}]});
        
        var pageSize = 16;
        
        var defaultBCOnlyParamData = eval({"FilterString":"Now","GameTypeString":"Play","GenreString":"all","MinBCLevelString":"BuildersClub","PageNumString":"1","PageSizeString":"2","SortString":"MostPopular"});
        var defaultBCOnlySeedData = eval({"TotalPages" : "33","Count" : "2","Items" : [{"BCOverlay":{"Alt":"Builders Club Only","Url":"\/images\/icons\/overlay_bcOnly.png"},"Creator":{"Name":"nelly97","Url":"~\/User.aspx?ID=2313418"},"GearIcon":{"Alt":"Genre specific gear only","Url":"~\/images\/GenreSuitcase16x16.png"},"GenreIcon":{"Alt":"Sci-Fi","Url":"~\/images\/GenreIcons\/SciFi.png"},"ItemID":18167889,"Name":"MEGA Tsunami!! [BC]","NavigateUrl":"\/MEGA-Tsunami-BC-item?id=18167889","Stats":{"CurrentPlayersCount":84,"FavoritesCount":"231 times","LastUpdated":"22 minutes ago","PlaysCount":"3,569 times"},"ThumbnailFinal":true,"ThumbnailUrl":"https:\/\/web.archive.org\/web\/20110207224553\/http:\/\/t4bg.roblox.com\/1a300c60f54340798b4c6934caebad5c"},{"BCOverlay":{"Alt":"Builders Club Only","Url":"\/images\/icons\/overlay_bcOnly.png"},"Creator":{"Name":"FizzyPops","Url":"~\/User.aspx?ID=9809486"},"GearIcon":{"Alt":"Genre specific gear only","Url":"~\/images\/GenreSuitcase16x16.png"},"GenreIcon":{"Alt":"Funny","Url":"~\/images\/GenreIcons\/LOL.png"},"ItemID":35750996,"Name":"The Pop Clubâ„¢","NavigateUrl":"\/The-Pop-Club-item?id=35750996","Stats":{"CurrentPlayersCount":76,"FavoritesCount":"200 times","LastUpdated":"2 days ago","PlaysCount":"2,487 times"},"ThumbnailFinal":true,"ThumbnailUrl":"https:\/\/web.archive.org\/web\/20110207224553\/http:\/\/t3bg.roblox.com\/9b0572d5322c64778eb856fd2a90baba"}]});
        var BCOnlyPageSize = 2;
        
        var GamesDisplay = new CreateGamesDisplay();
        var BCOnlyGamesDisplay = null;
        if (true)
        {
            BCOnlyGamesDisplay = new CreateGamesDisplay();    
        }
        
        $(function()
        {
            GamesPageInit();
        });
    </script>
    <br style="clear: both"/>

            </div>
            
<div id="Footer">
    <div class="FooterNav">
        <a id="ctl00_rbxFooter_PrivacyHyperLink" href="/web/20110207224553/http://www.roblox.com/info/Privacy.aspx"><b>Privacy Policy</b></a>
        &nbsp;|&nbsp; 
        <a id="ctl00_rbxFooter_AdvertiseHyperLink" href="https://web.archive.org/web/20110207224553/http://sales.roblox.com/">Advertise with Us</a>
        &nbsp;|&nbsp; 
        <a id="ctl00_rbxFooter_ContactHyperLink" href="/web/20110207224553/http://www.roblox.com/info/ContactUs.aspx">Contact Us</a>
        &nbsp;|&nbsp;
        <a id="ctl00_rbxFooter_AboutHyperLink" href="/web/20110207224553/http://www.roblox.com/info/About.aspx">About Us</a>
        &nbsp;|&nbsp;
        <a id="ctl00_rbxFooter_FreeGamesHyperLink" href="/web/20110207224553/http://www.roblox.com/FreeGames.aspx">Free Games</a>
        &nbsp;|&nbsp;
        <a id="ctl00_rbxFooter_JobsHyperLink" href="https://web.archive.org/web/20110207224553/http://jobs.roblox.com/">Jobs</a>
    </div>
    <div class="FooterNav">
        <div id="ctl00_rbxFooter_SEOGenreLinks" class="SEOGenreLinks"><a href="/web/20110207224553/http://www.roblox.com/town-and-city-games" title="Town and City Games">Town and City</a>&nbsp;|&nbsp;<a href="/web/20110207224553/http://www.roblox.com/medieval-games" title="Fantasy Games">Fantasy</a>&nbsp;|&nbsp;<a href="/web/20110207224553/http://www.roblox.com/sci-fi-games" title="Sci-Fi Games">Sci-Fi</a>&nbsp;|&nbsp;<a href="/web/20110207224553/http://www.roblox.com/ninja-games" title="Ninja Games">Ninja</a>&nbsp;|&nbsp;<a href="/web/20110207224553/http://www.roblox.com/scary-games" title="Scary Games">Scary</a>&nbsp;|&nbsp;<a href="/web/20110207224553/http://www.roblox.com/pirate-games" title="Pirate Games">Pirate</a>&nbsp;|&nbsp;<a href="/web/20110207224553/http://www.roblox.com/adventure-games" title="Adventure Games">Adventure</a>&nbsp;|&nbsp;<a href="/web/20110207224553/http://www.roblox.com/sports-games" title="Sports Games">Sports</a>&nbsp;|&nbsp;<a href="/web/20110207224553/http://www.roblox.com/funny-games" title="Funny Games">Funny</a>&nbsp;|&nbsp;<a href="/web/20110207224553/http://www.roblox.com/wild-west-cowboy-games" title="Wild West Games">Wild West</a>&nbsp;|&nbsp;<a href="/web/20110207224553/http://www.roblox.com/war-games" title="War Games">War</a>&nbsp;|&nbsp;<a href="/web/20110207224553/http://www.roblox.com/skatepark-games" title="Skate Park Games">Skate Park</a>&nbsp;|&nbsp;<a href="/web/20110207224553/http://www.roblox.com/gametutorials-games" title="Tutorial Games">Tutorial</a></div>
    </div>
    <p class="Legalese">
        ROBLOX, "Online Building Toy", characters, logos, names, and all related indicia are trademarks of <a id="ctl00_rbxFooter_hlRobloxCorporation" href="/web/20110207224553/http://www.roblox.com/info/About.aspx">ROBLOX Corporation</a>, ©2011. Patents pending.
        <br/>
        ROBLOX is not sponsored, authorized or endorsed by any producer of plastic building bricks, including The LEGO Group, MEGA Brands, and K'Nex,<br/> and no resemblance to the products of these companies is intended.<br/>Use of this site signifies your acceptance of the <a id="ctl00_rbxFooter_hlTermsOfService" href="/web/20110207224553/http://www.roblox.com/info/TermsOfService.aspx">Terms and Conditions</a>.
        <br/>
    </p>
</div>
   
    
</body>
</html>