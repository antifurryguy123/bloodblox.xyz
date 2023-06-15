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
	
            <iframe id="ctl00_cphBannerAd_ItemBannerAd_AsyncAdIFrame" allowtransparency="true" frameborder="0" scrolling="no" height="90" src="https://web.archive.org/web/20110210222513if_/http://www.roblox.com/Ads/IFrameAdContent.aspx?v=2&amp;slot=Roblox_Item_Top_728x90&amp;format=banner&amp;v=2" width="728"></iframe>
            
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
    <a id="ctl00_BannerAlertsLoginView_BannerAlerts_Anonymous_rbxAlerts_SignupAndPlayHyperLink" class="SignUpAndPlay" text="Sign-up and Play!" href="https://web.archive.org/web/20110210222513/http://www.roblox.com/Games.aspx" style="display:inline-block;cursor:pointer;"><img src="https://web.archive.org/web/20110210222513im_/http://www.roblox.com/images/Holiday3Button.png" border="0" onerror="return Roblox.Controls.Image.OnError(this)" blankurl="http://t1bg.roblox.com/blank-210x40.gif"/></a>


</div>

                        
                </div>
                


    <?php
        require("../important/dropdownNav.php");
        require("../important/navbar.php");
	?>
            </div>
            </div>
            <div id="Body">
                
    <!-- The second set of script includes are for optimization (CompositeScript). The 'true' include is declared in PlaceLauncher.ascx -->
    
    
    <div id="ItemContainer">
        <div class="StandardBoxHeader" style="width: 709px;">
            <span class="item-header">
                <a id="ctl00_cphRoblox_FavoriteThisButton2" disabled="disabled" class="favoriteStar_20h tooltip" title="Add This to Your Favorites" style="background-position: 0px 0px;"></a>
                <h1>
                    Robot Friend
                </h1>
            </span>
        </div>
        <div id="Item" class="StandardBox" style="width: 709px;">
            <div id="Details">
                
                        
                        <div id="assetContainer">
                            <div id="Thumbnail">
                                <a id="ctl00_cphRoblox_AssetThumbnailImage" disabled="disabled" title="Robot Friend" onclick="return false" style="display:inline-block;"><img src="https://web.archive.org/web/20110218154048im_/http://t5bg.roblox.com/a41b2c4c0fe51bb7687978a4260ec673" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="Robot Friend" blankurl="http://t6bg.roblox.com/blank-420x420.gif"/></a>
                                
                                <img src="/web/20110218154048im_/http://www.roblox.com/images/overlay_limitedUnique_big.png" id="ctl00_cphRoblox_ItemLimitedOverlay" style="position:relative;top:-38px;" alt="Limited Unique"/>
                            </div>
                            <div id="Actions">
                                <a id="ctl00_cphRoblox_FavoriteThisButton" disabled="disabled">Favorite</a>
                            </div>
                        </div>
                    
                <!-- details -->
                <div id="Summary" style="float: right;">
                    <h3>
                        ROBLOX Gear
                    </h3>
                    <div>
                    <b></b>
                    
                    <div id="ctl00_cphRoblox_RobuxPurchasePanel">
                        <div id="RobuxPurchase">
                            <div id="ctl00_cphRoblox_LimitedEditionInfo">
                                <b>COLLECTIBLE ITEM. <br/><a href="#tabRegion">See 75 private sellers</a></b><br/><br/>
                            </div>
                            <div id="PriceInRobux">
                                Was R$: 200
                            </div>
                            <div id="BuyWithRobux">
                                
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="clear"></div>
                    </div>
                    <!-- timer -->
                    
                    <div id="Creator" class="Creator section">
                        <div class="Avatar">
                            
                            <a id="ctl00_cphRoblox_AvatarImage" class="tooltip-right" title="ROBLOX" href="/web/20110218154048/http://www.roblox.com/User.aspx?ID=1" style="display:inline-block;cursor:pointer;"><img src="https://web.archive.org/web/20110218154048im_/http://t0bg.roblox.com/06945cbdf4df1ea8144b139b91d992e8" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="ROBLOX" blankurl="http://t6bg.roblox.com/blank-100x100.gif"/></a>
                        </div>
                        <span class="label creator-name">Creator:</span>
                        <a id="ctl00_cphRoblox_CreatorHyperLink" href="User.aspx?ID=1">ROBLOX</a>
                    </div>
                    <div class="item-detail">
                        <div>
                            <span class="label">Created:</span>
                            2/4/2011
                        </div>
                        <div id="LastUpdate">
                            <span class="label">Updated:</span>
                            1 week ago</div>
                        <div id="Favorited">
                            <span class="label">Favorited:</span>
                            343 times</div>
                        
                        <div id="ctl00_cphRoblox_Sold_Limited">
                            <span class="label">Total Sold:</span>
                            1000</div>
                        
                    </div>
                    <div id="Genres" class="box section">
                        <div id="ctl00_cphRoblox_Genres">
	
                            <div class="head label">Genres:</div>
                            <div class="body">
                                
                                
                                
                                
                                
                                
                                
                                
                                <div id="ctl00_cphRoblox_Panel3">
		
                                    <img id="ctl00_cphRoblox_Image6" class="GamesInfoIcon" src="/web/20110218154048im_/http://www.roblox.com/images/GenreIcons/SciFi.png" alt="Sci-Fi" border="0"/>
                                    <a href="/web/20110218154048/http://www.roblox.com/sci-fi-games">Sci-Fi</a>
                                
	</div>
                                
                                
                                
                                
                                
                            </div>
                        
</div>
                    </div>
                    <div id="ctl00_cphRoblox_GearAttributes" class="box section">
	
                        <div style="margin-top: 5px; margin-bottom: 5px;">
                            <div class="head label">Gear Attributes:</div>
                            <div class="body">
                            
                            
                            
                            
                            
                            
                            
                            <div id="ctl00_cphRoblox_IsSocial">
		
                                <img id="ctl00_cphRoblox_Image13" class="GamesInfoIcon" src="/web/20110218154048im_/http://www.roblox.com/images/CategoryIcons/Social.png" alt="Social" border="0"/>
                                Social Item
	</div>
                            
                            </div>
                        </div>
                    
</div>
                    
                    <div id="ctl00_cphRoblox_DescriptionPanel" class="box section">
	
                        <div class="head label">
                            Description:</div>
                        <div class="Description body">
                            Binary solo!  000000100000111100001110</div>
                    
</div>
                    
                        
                    
                    <div class="ReportAbuse">
                        <div id="ctl00_cphRoblox_AbuseReportButton1_AbuseReportPanel" class="ReportAbusePanel">
	
    <span class="AbuseIcon"><a id="ctl00_cphRoblox_AbuseReportButton1_ReportAbuseIconHyperLink" href="AbuseReport/Asset.aspx?ID=45513247&amp;RedirectUrl=http%3a%2f%2fwww.roblox.com%2fitem.aspx%3fseoname%3dRobot-Friend%26id%3d45513247"><img src="/web/20110218154048im_/http://www.roblox.com/images/abuse.PNG?v=2" alt="Report Abuse" border="0"/></a></span>
    <span class="AbuseButton"><a id="ctl00_cphRoblox_AbuseReportButton1_ReportAbuseTextHyperLink" href="AbuseReport/Asset.aspx?ID=45513247&amp;RedirectUrl=http%3a%2f%2fwww.roblox.com%2fitem.aspx%3fseoname%3dRobot-Friend%26id%3d45513247">Report Abuse</a></span>

</div>
                    </div>
                    
                </div>
                
                
                 
                <div class="clear">
                </div>
            </div>
            <div id="ctl00_cphRoblox_PriceGraph">
                


<script language="javascript" type="text/javascript" src="/web/20110218154048js_/http://www.roblox.com/js/flot/jquery.js"></script>
<script language="javascript" type="text/javascript" src="/web/20110218154048js_/http://www.roblox.com/js/flot/excanvas.min.js"></script>
<script language="javascript" type="text/javascript" src="/web/20110218154048js_/http://www.roblox.com/js/flot/jquery.flot.js"></script>

<!--[if IE 6]>

<![endif]-->

<![if !IE 6]>


    
        <div class="ProductHistoryData" style="margin-left: 10px;">
    <h3>Robot Friend Market Data</h3>

    Recent Average Price: <span style="color: Green;"><b>410 R$</b></span>
    <br/>
    <br/>
    <div id="placeholder" style="width:680px;height:300px;"></div>
    <div id="volumegraph" style="width:680px;height:60px;"></div>
    
    <div style="margin-left: 40px;"> 
        <input id="30days" type="radio" checked="checked" name="group1" style="margin: 5px;">30 Days</input>
        <input id="90days" type="radio" name="group1" style="margin: 5px;">90 Days</input>
        <input id="180days" type="radio" name="group1" style="margin: 5px;">180 Days</input>
     
        <br/>
        <table class="pricestats">
        <tr>
        <td>Span</td>
        <td>Average Price</td>
        <td>Change</td>
        <td>Volume</td>
        </tr>
        <tr>
        <td>30 Days</td>
        <td>265 R$</td>
        <td><font color="#008000">+54.7%</font></td>
        <td>1738</td>
        </tr>
        <tr>
        <td>90 Days</td>
        <td>265 R$</td>
        <td><font color="#008000">+54.7%</font></td>
        <td>1738</td>
        </tr>
        <tr>
        <td>180 Days</td>
        <td>265 R$</td>
        <td><font color="#008000">+54.7%</font></td>
        <td>1738</td>
        </tr>
        </table> 
    </div>
    
    <script id="source" language="javascript" type="text/javascript"> 
    $(function () {
        
        var d1 = [[1297900800000,435],[1297814400000,399],[1297728000000,363],[1297641600000,411],[1297555200000,394],[1297468800000,398],[1297382400000,455],[1297296000000,467],[1297209600000,408],[1297123200000,366],[1297036800000,392],[1296950400000,359],[1296864000000,347],[1296777600000,270]]; var d2 = [[1297900800000,6],[1297814400000,7],[1297728000000,8],[1297641600000,7],[1297555200000,18],[1297468800000,35],[1297382400000,31],[1297296000000,30],[1297209600000,36],[1297123200000,28],[1297036800000,39],[1296950400000,99],[1296864000000,239],[1296777600000,1155]];
        
        $.plot($("#placeholder"), [ 
                                    {data: d1, label: "Avg Sales Price (R$)", color: "#008000", lines: {lineWidth: 3}}

                                    ],
                                {
                                    xaxis: { mode: 'time' , min: 1295430048197 },
                                    legend: {position: 'nw' },
                                    yaxis: {labelWidth: 40, tickFormatter: function (v, axis) { return v.toFixed(axis.tickDecimals) + "R$" }}
                                });

        $.plot($("#volumegraph"), [ 
                                    {data: d2, label: "Volume", yaxis: 1, color: "#A4A4C8", bars: { show: true }}
                                    ],
                                {
                                    xaxis: { mode: 'time', ticks: [],  min: 1295430048197 },
                                    legend: {position: 'nw' },
                                    yaxis: {labelWidth: 40, minTickSize: 1, tickDecimals: 0, ticks: []}
                                });


        $("#180days").click(function () {
            $.plot($("#placeholder"), [ 
                                        {data: d1, label: "Avg Sales Price (R$)", color: "#008000", lines: {lineWidth: 3}}

                                        ],
                                    {
                                        xaxis: { mode: 'time' , min: 1282470048197 },
                                        legend: {position: 'nw' },
                                        yaxis: {labelWidth: 40, tickFormatter: function (v, axis) { return v.toFixed(axis.tickDecimals) + "R$" }}
                                    });

            $.plot($("#volumegraph"), [ 
                                        {data: d2, label: "Volume", yaxis: 1, color: "#A4A4C8", bars: { show: true }}
                                        ],
                                    {
                                        xaxis: { mode: 'time', ticks: [],  min: 1282470048197 },
                                        legend: {position: 'nw' },
                                        yaxis: {labelWidth: 40, minTickSize: 1, tickDecimals: 0, ticks: []}
                                    });
        });
        
        $("#30days").click(function () {
            
            $.plot($("#placeholder"), [ 
                                    {data: d1, label: "Avg Sales Price (R$)", color: "#008000", lines: {lineWidth: 3}}

                                    ],
                                {
                                    xaxis: { mode: 'time' , min: 1295430048197 },
                                    legend: {position: 'nw' },
                                    yaxis: {labelWidth: 40, tickFormatter: function (v, axis) { return v.toFixed(axis.tickDecimals) + "R$" }}
                                });

            $.plot($("#volumegraph"), [ 
                                    {data: d2, label: "Volume", yaxis: 1, color: "#A4A4C8", bars: { show: true }}
                                    ],
                                {
                                    xaxis: { mode: 'time', ticks: [], min: 1295430048197 },
                                    legend: {position: 'nw' },
                                    yaxis: {labelWidth: 40, minTickSize: 1, tickDecimals: 0, ticks: []}
                                });                      
        });
     
        $("#90days").click(function () {
            
            $.plot($("#placeholder"), [ 
                                    {data: d1, label: "", color: "#008000", lines: {lineWidth: 3}}

                                    ],
                                {
                                    xaxis: { mode: 'time' , min: 1290246048197 },
                                    legend: {position: 'nw' },
                                    yaxis: {labelWidth: 40, tickFormatter: function (v, axis) { return v.toFixed(axis.tickDecimals) + "R$" }}
                                });

            $.plot($("#volumegraph"), [ 
                                    {data: d2, label: "Volume", yaxis: 1, color: "#A4A4C8", bars: { show: true }}
                                    ],
                                {
                                    xaxis: { mode: 'time', ticks: [], min: 1290246048197 },
                                    legend: {position: 'nw' },
                                    yaxis: {labelWidth: 40, minTickSize: 1, tickDecimals: 0, ticks: []}
                                });                      
        });

    });


    </script>
    
    
</div>
    
    

<![endif]>    
            </div>
            
            <div style="margin-top: 10px;">
                <div>
                    
<div class="StandardTabWhite"><span>Recommendations</span></div>
<div class="StandardBoxWhite">
    <div style="font-size: x-small;">Here are some other Gear that we think you might like.</div>
    <table id="ctl00_cphRoblox_AssetRec_dlAssets" cellspacing="0" align="Center" border="0" height="200" width="600">
	<tr>
		<td>
            <div class="PortraitDiv" style="width: 140px; height: 190px; overflow: hidden;" visible="True">
                <div class="AssetThumbnail">
                    <a id="ctl00_cphRoblox_AssetRec_dlAssets_ctl00_AssetThumbnailHyperLink" title="Taco" href="/web/20110218154048/http://www.roblox.com/Taco-item?id=15177716" style="display:inline-block;cursor:pointer;"><img src="https://web.archive.org/web/20110218154048im_/http://t1bg.roblox.com/ddbb1b6d37ffa83b4370a0f870a025da" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="Taco" blankurl="http://t6bg.roblox.com/blank-110x110.gif"/></a>
                </div>
                <div class="AssetDetails" style="height:90px;">
                    <div class="AssetName">
                        <a id="ctl00_cphRoblox_AssetRec_dlAssets_ctl00_AssetNameHyperLinkPortrait" href="/web/20110218154048/http://www.roblox.com/Taco-item?id=15177716">Taco</a>
                    </div>
                    <div class="AssetCreator">
                        <span class="Label">Creator:</span> <span class="Detail"><a id="ctl00_cphRoblox_AssetRec_dlAssets_ctl00_CreatorHyperLinkPortrait" href="User.aspx?ID=1">Builderman</a></span>
                    </div>
                </div>
            </div>
        </td>
	</tr>
</table>
    
</div>
                </div>
            </div>
            <div style="width: 703px; color: #000000; margin-bottom: 10px;">
                <a name="tabRegion">&nbsp;</a>
                <div id="ctl00_cphRoblox_TabbedInfo" class="tab_white_31h_container">
	<div id="ctl00_cphRoblox_TabbedInfo_header">
		<span id="__tab_ctl00_cphRoblox_TabbedInfo_UserSalesTab">
                            <h3 class="ajax_tab_label">
                                Private Sales</h3>
                        </span><span id="__tab_ctl00_cphRoblox_TabbedInfo_CommentaryTab">
                            <h3 class="ajax_tab_label">
                                Commentary</h3>
                        </span>
	</div><div id="ctl00_cphRoblox_TabbedInfo_body">
		<div id="ctl00_cphRoblox_TabbedInfo_UserSalesTab">
			
                            
                            
                                    <table width="680px" class="ItemSalesTable">
                                        <tr>
                                            <td width="100px">
                                                <b>Seller</b>
                                            </td>
                                            <td width="150px">
                                                <b>Serial Number</b>
                                            </td>
                                            <td width="100px">
                                                <b>Price</b>
                                            </td>
                                            <td>
                                                &nbsp;
                                            </td>
                                        </tr>
                                        
                                    <tr>
                                        <td>
                                            <a id="ctl00_cphRoblox_TabbedInfo_UserSalesTab_lstItemsForResale_ctrl0_AvatarImage2" title="Builderman" href="/My/Home.php" style="display:inline-block;cursor:pointer;"><img src="/images/NewFrontPageGuy.png" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="jayerdown"/></a>
                                            <br/>
                                            <a href="/web/20110218154048/http://www.roblox.com/user.aspx?id=3508077">
                                                Builderman
                                            </a>
                                        </td>
                                        <td>
                                            #1 / 1
                                        </td>
                                        <td>
                                            <b style="color: Green;">FREE</b>
                                        </td>
                                        <td>
                                            <a id="ctl00_cphRoblox_TabbedInfo_UserSalesTab_lstItemsForResale_ctrl0_lnkBuyNow" class="Button" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$TabbedInfo$UserSalesTab$lstItemsForResale$ctrl0$lnkBuyNow&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">Buy Now</a>
                                        </td>
                                    </tr>
                                
                                
                                    </table>
                                
                            <span id="ctl00_cphRoblox_TabbedInfo_UserSalesTab_pgItemsForResale"><a disabled="disabled">First</a>&nbsp;<a href="javascript:__doPostBack('ctl00$cphRoblox$TabbedInfo$UserSalesTab$pgItemsForResale$ctl01$ctl00','')">Last</a>&nbsp;<a disabled="disabled">Previous</a>&nbsp;<span>1</span>&nbsp;<a href="javascript:__doPostBack('ctl00$cphRoblox$TabbedInfo$UserSalesTab$pgItemsForResale$ctl03$ctl01','')">2</a>&nbsp;<a href="javascript:__doPostBack('ctl00$cphRoblox$TabbedInfo$UserSalesTab$pgItemsForResale$ctl03$ctl02','')">3</a>&nbsp;<a href="javascript:__doPostBack('ctl00$cphRoblox$TabbedInfo$UserSalesTab$pgItemsForResale$ctl03$ctl03','')">4</a>&nbsp;<a href="javascript:__doPostBack('ctl00$cphRoblox$TabbedInfo$UserSalesTab$pgItemsForResale$ctl03$ctl04','')">5</a>&nbsp;&nbsp;<a href="javascript:__doPostBack('ctl00$cphRoblox$TabbedInfo$UserSalesTab$pgItemsForResale$ctl03$ctl05','')">...</a>&nbsp;<a href="javascript:__doPostBack('ctl00$cphRoblox$TabbedInfo$UserSalesTab$pgItemsForResale$ctl04$ctl00','')">Next</a>&nbsp;</span>
                        
		</div><div id="ctl00_cphRoblox_TabbedInfo_CommentaryTab" style="display:none;">
			
                            <div id="ctl00_cphRoblox_TabbedInfo_CommentaryTab_CommentsPane_CommentsUpdatePanel">
				
        <div class="CommentsContainer">
            <a id="ctl00_cphRoblox_TabbedInfo_CommentaryTab_CommentsPane_LoadCommentsButton" class="GreenButton" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$TabbedInfo$CommentaryTab$CommentsPane$LoadCommentsButton&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))"><span>Load comments (3176)</span></a>
            
            
            
        </div>
        <script type="text/javascript" language="javascript">
            function limitText(limitField, limitNum)
            {
                if (limitField.value.length > limitNum) 
                {
                    limitField.value = limitField.value.substring(0, limitNum);
                }
                $('#CharsRemaining').html(Math.max(0, Math.min(200, limitNum - limitField.value.length)) + " characters remaining");
            }
        </script>   
    
			</div>

                        
		</div>
	</div>
</div>
                <script type="text/javascript">
                    var commentsLoaded = false;
                    function LoadComments(sender, eventargs) {
                        if (!commentsLoaded) {
                            __doPostBack('ctl00$cphRoblox$TabbedInfo$CommentaryTab$CommentsPane$LoadCommentsButton','');
                            commentsLoaded = true;
                        }
                    }
                </script>
            </div>
            
            <div id="FreeGames">
                <span><b>Other free games and items:</b></span><ul class="freegames" style="list-style: none; text-align: center;"><li style="display: inline; margin-right: 10px;"><a href="/web/20110218154048/http://www.roblox.com/Cupeycakeys-Place-item?id=45513147" title="Free Games: Cupeycakey" s place'>Cupeycakey's Place</a></li><li style="display: inline; margin-right: 10px;"><a href="/web/20110218154048/http://www.roblox.com/monster-item?id=45513237" title="Free Games: monster">monster</a></li><li style="display: inline; margin-right: 10px;"><a href="/web/20110218154048/http://www.roblox.com/Ty-item?id=45513246" title="Free Games: Ty ">Ty </a></li><li style="display: inline; margin-right: 10px;"><a href="/web/20110218154048/http://www.roblox.com/roblox-item?id=45513248" title="Free Games: roblox">roblox</a></li><li style="display: inline; margin-right: 10px;"><a href="/web/20110218154048/http://www.roblox.com/911kingJs-Place-item?id=45513257" title="Free Games: 911kingJ" s place'>911kingJ's Place</a></li><li style="display: inline; margin-right: 10px;"><a href="/web/20110218154048/http://www.roblox.com/imagesCAXF2SSQ-item?id=45513347" title="Free Games: imagesCAXF2SSQ">imagesCAXF2SSQ</a></li></ul><span><b>Other game genres you may like:</b></span><ul class="freegames" style="list-style: none; text-align: center;"><li style="display: inline; margin-right: 10px;"><a href="sci-fi-games" title="Sci-Fi games">Sci-Fi games</a></li><li style="display: inline; margin-right: 10px;"><a href="ninja-games" title="Ninja games">Ninja games</a></li><li style="display: inline; margin-right: 10px;"><a href="scary-games" title="Scary games">Scary games</a></li><li style="display: inline; margin-right: 10px;"><a href="pirate-games" title="Pirate games">Pirate games</a></li></ul></div>
        </div>
        <div class="Ads_WideSkyscraper">
            
            <div id="ctl00_cphRoblox_adsWideSkyscraper_OutsideAdPanel" class="AdPanel">
	
            <iframe id="ctl00_cphRoblox_adsWideSkyscraper_AsyncAdIFrame" allowtransparency="true" frameborder="0" scrolling="no" height="600" src="/web/20110218154048if_/http://www.roblox.com/Ads/IFrameAdContent.aspx?v=2&amp;slot=Roblox_Item_Right_160x600&amp;format=skyscraper&amp;v=2" width="160"></iframe>
            
</div>
            <a id="ctl00_cphRoblox_adsWideSkyscraper_ReportAdButton" title="click to report an offensive ad" class="BadAdButton" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$adsWideSkyscraper$ReportAdButton&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">[ report ]</a>
              <script type="text/javascript">
			    $(function()
                {
	                $(".AdPanel").css("z-index", 9998);
                });
            </script>
        
    

        </div>
        <div class="clear"></div>
    </div>
    <div id="ctl00_cphRoblox_ItemPurchasePopupPanel" class="modalPopup" style="display: none">
	
        <div id="ctl00_cphRoblox_ItemPurchasePopupUpdatePanel">
		
                
            
	</div>
    
</div>
    <div id="ctl00_cphRoblox_SalePriceConfirmPopupPanel" class="modalPopup" style="display: none">
	
        <div id="ctl00_cphRoblox_UpdatePanel1">
		
                <div id="RobloxOffer">
                    <h2>
                        <font color="red">Warning!</font></h2>
                    <p>
                        You are trying to sell this item for <b>
                            ERROR: No P2P offer price</b> ROBUX.</p>
                    <p>
                        This item normally sells for around <b>
                            410</b> ROBUX.</p>
                    <p>
                        If you want, ROBLOX will purchase this item from you instantly for <b>
                            41</b> ROBUX.</p>
                    <p>
                        Minus marketplace fees, your profit would be: <b>
                            ERROR: No P2P offer price</b> ROBUX</p>
                    <p>
                        <input type="submit" name="ctl00$cphRoblox$CancelAttemptedSale" value="Cancel Sale" onclick="$find('myBehavior2').hide();WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$CancelAttemptedSale&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="ctl00_cphRoblox_CancelAttemptedSale" class="MediumButton"/></p>
                    <p>
                        <input type="submit" name="ctl00$cphRoblox$SellItemToROBLOX" value="Sell to ROBLOX" onclick="document.getElementById('RobloxOffer').style.display = 'none';document.getElementById('ProcessROBLOXPurchase').style.display = 'block';WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$SellItemToROBLOX&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="ctl00_cphRoblox_SellItemToROBLOX" class="MediumButton"/></p>
                </div>
                <div id="ProcessROBLOXPurchase">
                    <div id="Div8" class="processingMgs">
                        <img id="ctl00_cphRoblox_Image22" src="/web/20110218154048im_/http://www.roblox.com/images/ProgressIndicator2.gif" alt="Processing..." align="middle" border="0"/>&nbsp;&nbsp; Processing transaction
                        ...
                    </div>
                </div>
            
	</div>
    
</div>
    <input type="hidden" name="ctl00$cphRoblox$HiddenField1" id="ctl00_cphRoblox_HiddenField1"/>
    <input type="hidden" name="ctl00$cphRoblox$HiddenField2" id="ctl00_cphRoblox_HiddenField2"/>
    <input type="hidden" name="ctl00$cphRoblox$HiddenField3" id="ctl00_cphRoblox_HiddenField3"/>
    
    






<div id="ctl00_cphRoblox_CreateSetPanelDiv" class="createSetPanelPopup">
	
        
      
</div>

    <script type="text/javascript" language="javascript">
        function UpdateSets(assetSetItemId, updateAllSets)
        {
            $.get(
                "/Sets/SetHandler.ashx?rqtype=getnewestversion&assetSetItemId=" + assetSetItemId + (updateAllSets ? "&allsets=true" : ""),
                function()
                {
                    $('#ctl00_cphRoblox_UpdateSet').hide("slow");
                    if (updateAllSets)
                    {
                        $('#ctl00_cphRoblox_updateSetsDiv').slideToggle("slow");
                    }
                });
        }
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

            </div>
            
<div id="Footer">
    <div class="FooterNav">
        <a id="ctl00_rbxFooter_PrivacyHyperLink" href="/web/20110218154048/http://www.roblox.com/info/Privacy.aspx"><b>Privacy Policy</b></a>
        &nbsp;|&nbsp; 
        <a id="ctl00_rbxFooter_AdvertiseHyperLink" href="https://web.archive.org/web/20110218154048/http://sales.roblox.com/">Advertise with Us</a>
        &nbsp;|&nbsp; 
        <a id="ctl00_rbxFooter_ContactHyperLink" href="/web/20110218154048/http://www.roblox.com/info/ContactUs.aspx">Contact Us</a>
        &nbsp;|&nbsp;
        <a id="ctl00_rbxFooter_AboutHyperLink" href="/web/20110218154048/http://www.roblox.com/info/About.aspx">About Us</a>
        &nbsp;|&nbsp;
        <a id="ctl00_rbxFooter_FreeGamesHyperLink" href="/web/20110218154048/http://www.roblox.com/FreeGames.aspx">Free Games</a>
        &nbsp;|&nbsp;
        <a id="ctl00_rbxFooter_JobsHyperLink" href="https://web.archive.org/web/20110218154048/http://jobs.roblox.com/">Jobs</a>
    </div>
    <div class="FooterNav">
        <div id="ctl00_rbxFooter_SEOGenreLinks" class="SEOGenreLinks"><a href="/web/20110218154048/http://www.roblox.com/town-and-city-games" title="Town and City Games">Town and City</a>&nbsp;|&nbsp;<a href="/web/20110218154048/http://www.roblox.com/medieval-games" title="Fantasy Games">Fantasy</a>&nbsp;|&nbsp;<a href="/web/20110218154048/http://www.roblox.com/sci-fi-games" title="Sci-Fi Games">Sci-Fi</a>&nbsp;|&nbsp;<a href="/web/20110218154048/http://www.roblox.com/ninja-games" title="Ninja Games">Ninja</a>&nbsp;|&nbsp;<a href="/web/20110218154048/http://www.roblox.com/scary-games" title="Scary Games">Scary</a>&nbsp;|&nbsp;<a href="/web/20110218154048/http://www.roblox.com/pirate-games" title="Pirate Games">Pirate</a>&nbsp;|&nbsp;<a href="/web/20110218154048/http://www.roblox.com/adventure-games" title="Adventure Games">Adventure</a>&nbsp;|&nbsp;<a href="/web/20110218154048/http://www.roblox.com/sports-games" title="Sports Games">Sports</a>&nbsp;|&nbsp;<a href="/web/20110218154048/http://www.roblox.com/funny-games" title="Funny Games">Funny</a>&nbsp;|&nbsp;<a href="/web/20110218154048/http://www.roblox.com/wild-west-cowboy-games" title="Wild West Games">Wild West</a>&nbsp;|&nbsp;<a href="/web/20110218154048/http://www.roblox.com/war-games" title="War Games">War</a>&nbsp;|&nbsp;<a href="/web/20110218154048/http://www.roblox.com/skatepark-games" title="Skate Park Games">Skate Park</a>&nbsp;|&nbsp;<a href="/web/20110218154048/http://www.roblox.com/gametutorials-games" title="Tutorial Games">Tutorial</a></div>
    </div>
    <p class="Legalese">
        ROBLOX, "Online Building Toy", characters, logos, names, and all related indicia are trademarks of <a id="ctl00_rbxFooter_hlRobloxCorporation" href="/web/20110218154048/http://www.roblox.com/info/About.aspx">ROBLOX Corporation</a>, ©2011. Patents pending.
        <br/>
        ROBLOX is not sponsored, authorized or endorsed by any producer of plastic building bricks, including The LEGO Group, MEGA Brands, and K'Nex,<br/> and no resemblance to the products of these companies is intended.<br/>Use of this site signifies your acceptance of the <a id="ctl00_rbxFooter_hlTermsOfService" href="/web/20110218154048/http://www.roblox.com/info/TermsOfService.aspx">Terms and Conditions</a>.
        <br/>
    </p>
</div>
   
    
</body>
</html>