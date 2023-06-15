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
	
            <iframe id="ctl00_cphBannerAd_ItemBannerAd_AsyncAdIFrame" allowtransparency="true" frameborder="0" scrolling="no" height="90" src="http://etcune.ga/images/SalesPitcher/PlayNow3.png" width="528"></iframe>
            
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
                
    
    <div id="CatalogContainer">
        

<div style="width: 876px; height: 28px; clear: both; display: block; background-color: #006699;" class="StandardBox">
    <table width="876px" border="0">
        <tr>
            <td style="font-family: Verdana, Helvetica, Sans-Serif; font-size: 12pt; color: Black; font-weight: bold; width: 200px; text-align: left;">
                Catalog
            </td>
            <td style="width: 660px; text-align: right;">
                <input type="hidden" name="ctl00$cphRoblox$rbxCatalog$UserIDHiddenField" id="ctl00_cphRoblox_rbxCatalog_UserIDHiddenField"/>
                <input name="ctl00$cphRoblox$rbxCatalog$SearchTextBox" type="text" maxlength="100" id="ctl00_cphRoblox_rbxCatalog_SearchTextBox" style="width: 520px;"/>
                <input type="submit" name="ctl00$cphRoblox$rbxCatalog$SearchButton" value="Search" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$rbxCatalog$SearchButton&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="ctl00_cphRoblox_rbxCatalog_SearchButton"/>
                <input type="submit" name="ctl00$cphRoblox$rbxCatalog$ResetSearchButton" value="Reset" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$rbxCatalog$ResetSearchButton&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="ctl00_cphRoblox_rbxCatalog_ResetSearchButton"/>
            </td>
        </tr>
    </table>
</div>
<div id="SearchBar" style="display: none;" class="SearchBar">
    <span class="SearchBox"></span><span class="SearchButton"></span><span class="SearchLinks">
        <sup>&nbsp;|&nbsp;</sup><a href="#"><sup>Tips</sup> <span>Exact Phrase: "red brick"<br/>
            Find ALL Terms: red and brick =OR= red + brick<br/>
            Find ANY Term: red or brick =OR= red | brick<br/>
            Wildcard Suffix: tel* (Finds teleport, telamon, telephone, etc.)<br/>
            Terms Near each other: red near brick =OR= red ~ brick<br/>
            Excluding Terms: red and not brick =OR= red - brick<br/>
            Grouping operations: brick and (red or blue) =OR= brick + (red | blue)<br/>
            Combinations: "red brick" and not (tele* or tower) =OR= "red brick" - (tele* | tower)<br/>
            Wildcard Prefix is NOT supported: *port will not find teleport, airport, etc. </span>
        </a></span>
</div>
<div class="SearchError">
    
</div>
<!--[if IE 6]>
<table width="900px">
<td width="210px" align="left" valign="top">
<![endif]-->
<div style="float: left; margin-right: 8px">
    <div class="StandardBox" style="width: 185px">
        <div id="BrowseMode">
            <h2><a id="ctl00_cphRoblox_rbxCatalog_CafePressHyperLink" href="https://web.archive.org/web/20110207224543/http://www.cafepress.com/roblox" target="_blank">Buy ROBLOX Stuff!</a></h2>
            <h2><a id="ctl00_cphRoblox_rbxCatalog_CurrencyPurchaseHyperLink" href="Upgrades/Robux.aspx">Buy ROBUX!</a></h2>
            <h2><a id="ctl00_cphRoblox_rbxCatalog_CurrencyExchangeHyperLink" href="Marketplace/TradeCurrency.aspx">Trade Currency!</a></h2>

            <h2 style="margin-top: 20px;">Browse</h2>
            <ul>
                <li class="Selected">
                    <h3><a id="ctl00_cphRoblox_rbxCatalog_BrowseModeFeaturedSelector" href="Catalog.aspx?m=Featured">Featured</a></h3>
                </li>
                <li class="">
                    <h3><a id="ctl00_cphRoblox_rbxCatalog_BrowseModeTopFavoritesSelector" href="Catalog.aspx?m=TopFavorites&amp;c=8&amp;t=PastWeek&amp;d=All&amp;q=">Top Favorites</a></h3>
                </li>
                <li class="">
                    <h3><a id="ctl00_cphRoblox_rbxCatalog_BrowseModeBestSellingSelector" href="Catalog.aspx?m=BestSelling&amp;c=8&amp;t=PastWeek&amp;d=All&amp;q=">Best Selling</a></h3>
                </li>
                <li class="">
                    <h3><a id="ctl00_cphRoblox_rbxCatalog_BrowseModeRecentlyUpdatedSelector" href="Catalog.aspx?m=RecentlyUpdated&amp;c=8&amp;q=">Recently Updated</a></h3>
                </li>
                <li class="">
                    <h3><a id="ctl00_cphRoblox_rbxCatalog_BrowseModeForSaleSelector" href="Catalog.aspx?m=ForSale&amp;c=8&amp;d=All&amp;q=&amp;mn=-9223372036854775808&amp;mx=9223372036854775807">For Sale</a></h3>
                </li>
                <li class="">
                    <h3><a id="ctl00_cphRoblox_rbxCatalog_BrowseModePublicDomainSelector" href="Catalog.aspx?m=PublicDomain&amp;c=8&amp;q=">Public Domain</a></h3>
                </li>
                <li class="">
                    <h3><a id="ctl00_cphRoblox_rbxCatalog_BrowseModeCollectibleSelector" href="Catalog.aspx?m=Collectible">Collectible</a></h3>
                </li>
                <li visible="" class="">
                    <h3><a id="ctl00_cphRoblox_rbxCatalog_BrowseModeAssetSetsSelector" href="Catalog.aspx?m=AssetSets&amp;q=">Sets</a></h3>
                </li>
            </ul>
        </div>
        
        
        
    </div>
    <br clear="all"/>
    <div class="StandardBox" style="width: 185px;">
        <b style="font-size: 14px; color: #990000">LEGEND</b><br/>
        <br/>
        <img src="/images/icons/overlay_bcOnly.png"/><br/>
        <b>Builders Club Only</b> items are those which can only be purchased by users with a <a href="#" alt="Builders Club!">Builders Club</a> membership.<br/>
        <br/>
        <img src="/images/assetIcons/limited.png"/><br/>
        <b>Limited Items</b> are those which were once sold by Roblox and will not be sold again. Users who own these items can re-sell them to other users for the price of their choice.<br/>
        <br/>
        <img src="/images/assetIcons/limitedunique.png"/><br/>
        <b>Limited Unique Items</b> are sold by Roblox until they run out (we could release, say, 100 of a certain hat.) When you buy these, they are stamped with a serial number (i.e. 7 / 100) that shows which one you got.<br/>
        <br/>
        Once these items run out, they can also be sold to other users.
    </div>
</div>
<div id="ctl00_cphRoblox_rbxCatalog_CreateSetPanelDiv" class="createSetPanelPopup" style="width: 400px; height: 100%; padding: 0px; float: left; display: none">
	
    

</div>
<!--[if IE 6]>
</td>
<td valign="top" align="left">
<![endif]-->
<div class="Assets">
    <div id="ctl00_cphRoblox_rbxCatalog_HeaderPagerPanel" class="HeaderPager" style="display: none;">
        
        <span id="ctl00_cphRoblox_rbxCatalog_HeaderPagerLabel">Page 1 of 97</span>
        <a id="ctl00_cphRoblox_rbxCatalog_HeaderPagerHyperLink_Next" href="Catalog.aspx?m=Featured&amp;c=8&amp;t=PastWeek&amp;d=All&amp;q=&amp;p=2&amp;mn=-9223372036854775808&amp;mx=9223372036854775807">Next <span class="NavigationIndicators">&gt;&gt;</span></a>
    </div>
    <div class="StandardBoxHeader">
        <span id="ctl00_cphRoblox_rbxCatalog_AssetsDisplaySetLabel">Featured Items</span>
    </div>
    <div class="StandardBox">
    <table id="ctl00_cphRoblox_rbxCatalog_AssetsDataList" cellspacing="0" align="Center" border="0">
	<tr>
		<td valign="top">
	        <div class="Asset" style="margin-left:5px;margin-right:5px;">
	            
		        <div class="AssetThumbnail">
			        <a id="ctl00_cphRoblox_rbxCatalog_AssetsDataList_ctl00_AssetThumbnailHyperLink" title="Roblox Cap" href="/item.php?id=1" style="display:inline-block;cursor:pointer;"><img src="https://i.ibb.co/C7KfBgg/Screenshot-2020-12-14-235137.png" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="ROBLOX Cap" blankurl="http://t6bg.roblox.com/blank-110x110.gif"/></a>
		                  
		            
                    
                    
                    
                    
                    
		        </div>
		        <div class="AssetDetails">
			        <div class="AssetName"><a id="ctl00_cphRoblox_rbxCatalog_AssetsDataList_ctl00_AssetNameHyperLink" href="/web/20110207224543/http://www.roblox.com/Heros-Helmet-item?id=45630453">Roblox Cap</a></div>
			        <div class="AssetLastUpdate">
			            <span class="Label">Updated:</span>
			            <span class="Detail">1 day ago</span>
			        </div>
			        <div class="AssetCreator">
			            <span class="Label">Creator:</span>
			            <span class="Detail"><a id="ctl00_cphRoblox_rbxCatalog_AssetsDataList_ctl00_CreatorHyperLink" href="User.aspx?ID=1">somedude</a></span>
			        </div>
			        <div class="AssetsSold">
			            <span class="Label">Number Sold:</span> 
			            <span class="Detail">0</span>
			        </div>
			        
			        
			        <div class="AssetFavorites">
			            <span class="Label">Favorited:</span>
			            <span class="Detail">0 Times</span>
			        </div>
			        <div class="AssetPrice">
			            <span class="PriceInRobux">Free</span>
			        </div>
			        
		            
		        </div>
		    </div>
	    </td>
	</tr><tr>
		<td colspan="5">
	        <div id="ctl00_cphRoblox_rbxCatalog_AssetsDataList_ctl20_CatalogDescriptionPanel" style="float: left; width: 630px; font-size: 0.9em; padding: 10px; border-top: 1px solid #AAAAAA;">
			
                Avatar Items - ROBLOX has a full virtual goods catalog with avatar items and other virtual items. Create a free account on ROBLOX and start collecting <h1 style="display:inline; font-size:100%; font-weight:normal;">virtual avatar items</h1>, virtual goods, virtual items, and other gear for your virtual avatars.
            
		</div>
	    </td>
	</tr>
</table>
    
    </div>
    <div id="ctl00_cphRoblox_rbxCatalog_FooterPagerPanel" class="HeaderPager">
        
        <span id="ctl00_cphRoblox_rbxCatalog_FooterPagerLabel">Page 1 of 97</span>
        <a id="ctl00_cphRoblox_rbxCatalog_FooterPagerHyperLink_Next" href="Catalog.aspx?m=Featured&amp;c=8&amp;t=PastWeek&amp;d=All&amp;q=&amp;p=2&amp;mn=-9223372036854775808&amp;mx=9223372036854775807">Next <span class="NavigationIndicators">&gt;&gt;</span></a>
    </div>
</div>

<script language="javascript" type="text/javascript">
    $(document).ready(function()
    {
        $('.SetAddButton').click(function()
        {
            var assetId = $(this).parent().parent().attr('id').replace('setList_', '');
            var setId = $(this).children('.setId')[0].value;
            var setDivId = 'set_' + setId + '_' + assetId;
            var imgId = "waiting" + setDivId;
            $(setDivId).append("<img src='/images/spinners/spinner16x16.gif' id='" + imgId + "'");
            $.ajax(
            {
                type: "GET",
                async: true,
                cache: false,
                timeout: 50000,
                url: "/Sets/SetHandler.ashx?rqtype=addtoset&assetId=" + assetId + "&setId=" + setId,
                success: function(data)
                {
                    if (data !== null)
                    {
                        // Remove that set from the list of available sets
                        $('#' + setDivId).removeClass('SetAddButton');
                        $('#' + setDivId).addClass('SetAddButtonAlreadyContainsItem');
                        $('#' + setDivId).unbind('click');
                        // Remove the spinner
                        $('#' + imgId).remove();
                    }
                },
                failure: function(data)
                {
                    if (data !== null)
                    {
                        //alert("failure");
                    }
                }
            });
        });
    });
</script>

<!--[if IE 6]>
</td>
</table>
<![endif]-->
        <div style="clear: both;"></div>
    </div>

            </div>
            
<div id="Footer">
    <div class="FooterNav">
        <a id="ctl00_rbxFooter_PrivacyHyperLink" href="/web/20110207224543/http://www.roblox.com/info/Privacy.aspx"><b>Privacy Policy</b></a>
        &nbsp;|&nbsp; 
        <a id="ctl00_rbxFooter_AdvertiseHyperLink" href="https://web.archive.org/web/20110207224543/http://sales.roblox.com/">Advertise with Us</a>
        &nbsp;|&nbsp; 
        <a id="ctl00_rbxFooter_ContactHyperLink" href="/web/20110207224543/http://www.roblox.com/info/ContactUs.aspx">Contact Us</a>
        &nbsp;|&nbsp;
        <a id="ctl00_rbxFooter_AboutHyperLink" href="/web/20110207224543/http://www.roblox.com/info/About.aspx">About Us</a>
        &nbsp;|&nbsp;
        <a id="ctl00_rbxFooter_FreeGamesHyperLink" href="/web/20110207224543/http://www.roblox.com/FreeGames.aspx">Free Games</a>
        &nbsp;|&nbsp;
        <a id="ctl00_rbxFooter_JobsHyperLink" href="https://web.archive.org/web/20110207224543/http://jobs.roblox.com/">Jobs</a>
    </div>
    <div class="FooterNav">
        <div id="ctl00_rbxFooter_SEOGenreLinks" class="SEOGenreLinks"><a href="/web/20110207224543/http://www.roblox.com/town-and-city-games" title="Town and City Games">Town and City</a>&nbsp;|&nbsp;<a href="/web/20110207224543/http://www.roblox.com/medieval-games" title="Fantasy Games">Fantasy</a>&nbsp;|&nbsp;<a href="/web/20110207224543/http://www.roblox.com/sci-fi-games" title="Sci-Fi Games">Sci-Fi</a>&nbsp;|&nbsp;<a href="/web/20110207224543/http://www.roblox.com/ninja-games" title="Ninja Games">Ninja</a>&nbsp;|&nbsp;<a href="/web/20110207224543/http://www.roblox.com/scary-games" title="Scary Games">Scary</a>&nbsp;|&nbsp;<a href="/web/20110207224543/http://www.roblox.com/pirate-games" title="Pirate Games">Pirate</a>&nbsp;|&nbsp;<a href="/web/20110207224543/http://www.roblox.com/adventure-games" title="Adventure Games">Adventure</a>&nbsp;|&nbsp;<a href="/web/20110207224543/http://www.roblox.com/sports-games" title="Sports Games">Sports</a>&nbsp;|&nbsp;<a href="/web/20110207224543/http://www.roblox.com/funny-games" title="Funny Games">Funny</a>&nbsp;|&nbsp;<a href="/web/20110207224543/http://www.roblox.com/wild-west-cowboy-games" title="Wild West Games">Wild West</a>&nbsp;|&nbsp;<a href="/web/20110207224543/http://www.roblox.com/war-games" title="War Games">War</a>&nbsp;|&nbsp;<a href="/web/20110207224543/http://www.roblox.com/skatepark-games" title="Skate Park Games">Skate Park</a>&nbsp;|&nbsp;<a href="/web/20110207224543/http://www.roblox.com/gametutorials-games" title="Tutorial Games">Tutorial</a></div>
    </div>
    <p class="Legalese">
        ROBLOX, "Online Building Toy", characters, logos, names, and all related indicia are trademarks of <a id="ctl00_rbxFooter_hlRobloxCorporation" href="/web/20110207224543/http://www.roblox.com/info/About.aspx">ROBLOX Corporation</a>, ©2011. Patents pending.
        <br/>
        ROBLOX is not sponsored, authorized or endorsed by any producer of plastic building bricks, including The LEGO Group, MEGA Brands, and K'Nex,<br/> and no resemblance to the products of these companies is intended.<br/>Use of this site signifies your acceptance of the <a id="ctl00_rbxFooter_hlTermsOfService" href="/web/20110207224543/http://www.roblox.com/info/TermsOfService.aspx">Terms and Conditions</a>.
        <br/>
    </p>
</div>
   
    
</body>
</html>