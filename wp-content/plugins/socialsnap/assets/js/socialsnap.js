!function(t){jQuery.fn[t]=function(s){return s?this.bind("resize",(e=s,function(){var s=this,t=arguments;o?clearTimeout(o):n&&e.apply(s,t),o=setTimeout(function(){n||e.apply(s,t),o=null},a||100)})):this.trigger(t);var e,a,n,o}}((jQuery,"ss_smartresize")),function(a){a.fn.ssIsOnScreen=function(){var s=a(window),t={top:s.scrollTop(),left:s.scrollLeft()};t.right=t.left+s.width(),t.bottom=t.top+s.height();var e=this.offset();return e.right=e.left+this.outerWidth(),e.bottom=e.top+this.outerHeight(),!(t.right<e.left||t.left>e.right||t.bottom<e.top||t.top>e.bottom)},a.throttle=ss_throttle=function(n,o,i,r){var c,l=0;function s(){var s=this,t=new Date-l,e=arguments;function a(){l=+new Date,i.apply(s,e)}r&&!c&&a(),c&&clearTimeout(c),void 0===r&&n<t?a():!0!==o&&(c=setTimeout(r?function(){c=void 0}:a,void 0===r?n-t:n))}return"boolean"!=typeof o&&(r=i,i=o,o=void 0),a.guid&&(s.guid=i.guid=i.guid||a.guid++),s}}(jQuery),function(c){var i=[],r={init:function(){r.abortAjaX(),c(document).ready(r.ready),c(window).on("load",r.load),c(window).ss_smartresize(r.resize)},ready:function(){r.onMediaShareController(),r.calcShareBarHeight(),r.socialShareButtons(),r.revealLabel(),r.clickToTweet(),r.stickyBar(),r.stickyAfterScroll()},load:function(){r.entranceAnimation(),setTimeout(function(){r.updateShareCounts(),r.updateFollowCountsAPI(),r.cacheShortenedURLs(),r.updateCTTcount(),r.onMediaShareController()},250)},resize:function(){r.calcShareBarHeight(),r.stickyAfterScroll(),r.stickyBar(),r.onMediaShareController()},abortAjaX:function(){c(document).ajaxComplete(function(s,t,e){i=c.grep(i,function(s){return s!=t})});var t=window.onbeforeunload;window.onbeforeunload=function(){var s=t?t():void 0;return null==s&&c.each(i,function(s,t){t.abort()}),s}},entranceAnimation:function(){c(".ss-animate-entrance").length&&c(".ss-animate-entrance").addClass("ss-animated")},calcShareBarHeight:function(){var s,t,e,a,n=c("#ss-floating-bar");n.length&&(void(s=0)!==n.attr("data-offset")&&(t=parseInt(n.attr("data-offset")),isNaN(t)||(s+=t)),e=n.innerHeight(),a=c(window).height(),n.hasClass("ss-right-top-sidebar")||n.hasClass("ss-left-top-sidebar")||(n.hasClass("ss-left-bottom-sidebar")||n.hasClass("ss-right-bottom-sidebar")?s+=a-e:s+=a/2-e/2),s<0&&(s=0),a<e?n.css({top:"0",bottom:"initial"}):a<s+e?n.css({top:"initial",bottom:"0"}):n.css({top:s+"px",bottom:"initial"}))},revealLabel:function(){var s,t,e,a,n,o,i;c(".ss-reveal-label").length&&(c(".ss-reveal-label").on("mouseenter",".ss-social-icons-container > li > a",function(){s=c(this),t=s.find(".ss-reveal-label-wrap"),e=t.find(".ss-network-label"),a=t.find(".ss-network-count"),o=s.outerWidth(),(e.length||a.length)&&(n=e.outerWidth(!0)+a.outerWidth(!0),n=parseInt(n),i=1+n/o,s.parent().css({flex:i+" 1 0%"}),t.css("padding-right",n+"px"))}),c(".ss-reveal-label").on("mouseleave",".ss-social-icons-container > li > a",function(){s=c(this),(t=s.find(".ss-reveal-label-wrap")).css("padding-right",0),s.parent().removeAttr("style")}))},socialShareButtons:function(){var o,i;c(".ss-social-icons-container").not("#ss-all-networks-popup .ss-social-icons-container").length<=0||(o=c("#ss-copy-popup"),c("body").on("click",".ss-social-icons-container > li > a, .ss-popup-networks .ss-popup-network > a, .ss-on-media-container ul.ss-social-icons-container > li > div",function(s){var t,e,a,n;i=c(this),r.clickTracking(i),s.preventDefault(),i.hasClass("ss-print-color")?window.print():i.hasClass("ss-copy-color")?(o.data("copy"),o.addClass("ss-copy-visible"),o.find(".ss-copy-action-field"),o.hasClass("ss-visible")||(r.showSharePopup("#ss-copy-popup"),o.find(".ss-copy-action-field").val(decodeURIComponent(i.data("ss-ss-link"))))):i.hasClass("ss-share-all")?r.showSharePopup("#ss-all-networks-popup"):i.hasClass("ss-pinterest-color")&&(i.data("ss-ss-link")&&"#"===i.data("ss-ss-link")||!i.data("ss-ss-link")&&i.attr("href")&&"#"===i.attr("href"))?((t=document.createElement("script")).setAttribute("type","text/javascript"),t.setAttribute("charset","UTF-8"),t.setAttribute("src","https://assets.pinterest.com/js/pinmarklet.js"),document.body.appendChild(t)):i.hasClass("ss-heart-color")||(i.hasClass("ss-envelope-color")||i.hasClass("ss-viber-color")||i.hasClass("ss-sms-color")?window.location.href=i.data("ss-ss-link"):(e=550,a=448,"twitter"==i.data("ss-ss-network-id")&&(e=739,a=253),"parler"==i.data("ss-ss-network-id")&&(e=780,a=500),n=i.data("ss-ss-link"),r.popupWindow(n,e,a))),i.hasClass("ss-share-all")||r.incrementShareClickCount(i)}),c("#ss-share-hub > a").click(function(s){s.preventDefault()}),c("#ss-floating-bar").on("click",".ss-hide-floating-bar",function(s){s.preventDefault(),c("#ss-floating-bar").toggleClass("ss-hidden")}),c(".ss-close-modal").click(function(s){s.preventDefault(),r.hideSharePopup()}),o.on("click",".ss-copy-action .ss-button",function(s){s.preventDefault();var t=c(this);o.find(".ss-copy-action-field").select();try{document.execCommand("copy"),r.removeSelection(),t.addClass("ss-visible-tooltip"),setTimeout(function(){t.removeClass("ss-visible-tooltip")},1500)}catch(s){alert("Press Ctrl/Cmd+C to copy")}}))},removeSelection:function(){window.getSelection?window.getSelection().empty?window.getSelection().empty():window.getSelection().removeAllRanges&&window.getSelection().removeAllRanges():document.selection&&document.selection.empty()},clickTracking:function(s){void 0!==socialsnap_script.click_tracking&&1==socialsnap_script.click_tracking&&s.attr("data-ss-ss-network-id")&&"ga"in window&&(tracker=ga.getAll()[0],tracker&&tracker.send("event",{eventCategory:"socialsnap_share",eventAction:"socialsnap_"+s.attr("data-ss-ss-network-id")+"_share"}))},popupWindow:function(s,t,e){var a=null!=window.screenLeft?window.screenLeft:screen.left,n=null!=window.screenTop?window.screenTop:screen.top,o=(window.innerWidth?window.innerWidth:document.documentElement.clientWidth?document.documentElement.clientWidth:screen.width)/2-t/2+a,i=(window.innerHeight?window.innerHeight:document.documentElement.clientHeight?document.documentElement.clientHeight:screen.height)/2-e/2+n,r=window.open(s,"Please wait...","scrollbars=1,status=0,menubar=0,personalbar=0,location=1,width="+t+", height="+e+", top="+i+", left="+o);window.focus&&r.focus()},showSharePopup:function(s){var t=c(s);t.addClass("ss-visible"),setTimeout(function(){t.addClass("ss-animate-popup")},10),c("body").on("keyup",r.escHideSharePopup)},hideSharePopup:function(){var s=c(".ss-popup-overlay.ss-visible");s.addClass("ss-hide-popup"),setTimeout(function(){s.addClass("ss-remove-visible"),setTimeout(function(){s.removeClass("ss-remove-visible ss-hide-popup ss-visible ss-animate-popup ss-copy-visible"),s.find(".ss-popup-heading > span").html(s.data("share"))},400)},250),c("body").off("keyup",r.escHideSharePopup)},escHideSharePopup:function(s){27==s.keyCode&&r.hideSharePopup()},incrementShareClickCount:function(e){if(e.hasClass("ss-heart-color")){if(e.hasClass("ss-already-liked"))return;var s=e.data("ss-ss-post-id");e.addClass("ss-heart-pulse-animation"),c(".ss-heart-color[data-ss-ss-post-id="+s+"]").addClass("ss-already-liked")}var a={url:window.location.href,network:e.data("ss-ss-network-id"),post_id:e.data("ss-ss-post-id"),location:e.data("ss-ss-location"),permalink:e.data("ss-ss-permalink")},t={action:"ss_social_share_clicks",ss_click_data:JSON.stringify(a),_ajax_nonce:socialsnap_script.nonce},n=c.post(socialsnap_script.ajaxurl,t,function(s){var t;s.success&&(void 0!==e.data("ss-ss-network-id")&&(t='[data-ss-ss-network-id="'+e.data("ss-ss-network-id")+'"][data-ss-ss-post-id="'+a.post_id+'"]',e.data("has-api")||t.length&&(void 0!==s.data&&void 0!==s.data.share_count?c(t).find(".ss-network-count").html(s.data.share_count):c(t).find(".ss-network-count").html(parseInt(c(t).find(".ss-network-count").html(),10)+1))),r.refreshTotalShares(e.data("ss-ss-post-id")))});i.push(n)},updateCTTcount:function(){c(".ss-ctt-wrapper").on("click",".ss-ctt-tweet, .ss-ctt-link",function(){var s={post_id:c(this).parent().data("ss-post-id"),url:c(this).attr("href")},t={action:"ss_ctt_clicked",ss_click_data:JSON.stringify(s),_ajax_nonce:socialsnap_script.nonce},e=c.post(socialsnap_script.ajaxurl,t,function(s){});i.push(e)})},clickToTweet:function(){c(".ss-ctt-wrapper").on("click","a",function(s){s.preventDefault(),r.popupWindow(c(this).attr("href"),739,253)})},refreshTotalShares:function(t){var s={url:window.location.href,post_id:t},e={action:"ss_social_share_total",ss_data:JSON.stringify(s),_ajax_nonce:socialsnap_script.nonce},a=c.post(socialsnap_script.ajaxurl,e,function(s){if(s.success){if(void 0===s.data||void 0===s.data.total_count)return;c('.ss-total-shares[data-ss-ss-post-id="'+t+'"] span:first-child').length&&c('.ss-total-shares[data-ss-ss-post-id="'+t+'"] span:first-child').html(s.data.total_count)}});i.push(a)},updateShareCounts:function(){c(".ss-social-icons-container").not("#ss-all-networks-popup .ss-social-icons-container").length<=0||"undefined"!=typeof SocialSnapShareCacheExpired&&1==SocialSnapShareCacheExpired&&r.updateShareCountsAPI()},updateShareCountsAPI:function(s){var t,e,a,n;"undefined"==typeof SocialSnapShareCacheExpired||1!=SocialSnapShareCacheExpired||(t=socialsnap_script.post_id)&&(e={url:window.location.href,post_id:t,networks:SocialSnapShareNetworks},"object"==jQuery.type(s)&&c.extend(e,s),a={action:"ss_social_share_api_counts",socialsnap_data:JSON.stringify(e),_ajax_nonce:socialsnap_script.nonce},n=c.post(socialsnap_script.ajaxurl,a,function(s){if(s.success){for(var t in s.data.result)c('.ss-social-icons-container [data-ss-ss-network-id="'+t+'"][data-ss-ss-post-id="'+e.post_id+'"] .ss-network-count').html(s.data.result[t]);r.refreshTotalShares(e.post_id)}}),i.push(n))},updateFollowCountsAPI:function(){var s,n,o,i;"undefined"!=typeof socialsnap_follow_counts&&(s=socialsnap_follow_counts.networks,n=socialsnap_follow_counts.authorized,o=socialsnap_follow_counts.configured_networks,i=socialsnap_follow_counts.security,c.each(s,function(s,t){var e={network:t,authorized:n,configured:o},a=c(".ss-follow-column[data-ss-sf-network-id="+t+"] .ss-follow-network-count-number");r.updateFollowCounts("ss_sf_counts",e,a,i)}))},updateFollowCounts:function(s,t,e,a){t.network;var n={action:s,sf_networks:JSON.stringify(t),security:a},o=c.post(socialsnap_script.ajaxurl,n,function(s){s.success&&s.data.count&&e.html(s.data.count)});i.push(o)},cacheShortenedURLs:function(){var s,t;"undefined"!=typeof SocialSnapUncachedBitlyLinks&&"undefined"!=typeof SocialSnapUncachedBitlySecurity&&(s={action:"ss_cache_links",ss_ls_arr:SocialSnapUncachedBitlyLinks,security:SocialSnapUncachedBitlySecurity},t=c.post(socialsnap_script.ajaxurl,s,function(s){s.success}),i.push(t))},onMediaShareController:function(){var e,a,n=parseInt(socialsnap_script.on_media_width),o=parseInt(socialsnap_script.on_media_height);c(".ss-on-media-container").each(function(s,t){e=c(this),a=e.find("img"),e.find(".ss-on-media-wrapper").css({display:"block"}),"inline"==a.css("display")&&e.css("display","inline"),(a.outerHeight()<o||a.outerWidth()<n||a.hasClass("skip-on-media"))&&e.find(".ss-on-media-wrapper").css({display:"none"})})},stickyAfterScroll:function(){var s,t,e,a=c("#ss-sticky-bar");a.length&&(a.hasClass("ss-sync-inline")||(0!=a.data("afterscroll")&&a.data("afterscroll")?(s=0,t=parseInt(a.data("afterscroll")),e=function(){s=c(window).scrollTop(),t<s?(a.removeClass("ss-initially-hidden"),setTimeout(function(){a.addClass("ss-animated ss-visible")},70),a.hasClass("ss-bottom-sticky-bar")&&c("body").css({"margin-bottom":a.outerHeight()})):(a.removeClass("ss-animated ss-visible"),c("body").css({"margin-bottom":""}))},c(window).scroll(c.throttle(250,e)),e()):a.hasClass("ss-top-sticky-bar")?c("body").css({"margin-top":a.outerHeight()}):a.hasClass("ss-bottom-sticky-bar")&&c("body").css({"margin-bottom":a.outerHeight()})))},stickyBar:function(){var s=c("#ss-sticky-bar");if(s.length&&c(".ss-inline-share-wrapper").length&&s.hasClass("ss-sync-inline")){var t,e,a=[],n=[],o=c(window).width(),i=!1;if(c(".ss-inline-share-wrapper").each(function(){return"ss-sticky-bar"===(t=c(this)).parent().attr("id")?(c(this).addClass("ss-sticky-bar-as-inline"),!0):(e=t.offset(),a.push(e.left),void n.push(t.outerWidth()))}),a=c.unique(a),n=c.unique(n),1!=a.length||1!=n.length)return s.find(".ss-inline-share-wrapper").removeAttr("style"),!1;700<o?s.find(".ss-inline-share-wrapper").css({width:n[0],left:a[0]+"px",padding:"0px"}):s.find(".ss-inline-share-wrapper").removeAttr("style");function r(){if(o<=700)return s.addClass("ss-animated"),!1;i=!1,c(".ss-inline-share-wrapper").not(".ss-sticky-bar-as-inline").each(function(){c(this).find(".ss-social-icons-container").ssIsOnScreen()&&(i=!0)}),i?(s.removeClass("ss-animated").addClass("ss-hidden"),s.hasClass("ss-bottom-sticky-bar")&&c("body").css({"margin-bottom":""})):(s.addClass("ss-animated").removeClass("ss-hidden"),s.hasClass("ss-bottom-sticky-bar")&&c("body").css({"margin-bottom":s.outerHeight()}))}c(window).scroll(c.throttle(250,r)),r()}}};r.init(),window.socialsnapfields=r}(jQuery);