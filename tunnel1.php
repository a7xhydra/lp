<?php

function feedback404()
{
    header("HTTP/1.0 404 Not Found");
    echo "<h1><strong>404 Not Found</strong></h1>";
    echo "ERROR";
}

if (isset($_GET['link'])) {
    $filename = "list.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $target_string = strtolower($_GET['link']);
    foreach ($lines as $item) {
        if (strtolower($item) === $target_string) {
            $BRAND = $target_string;
        }
    }
    if (isset($BRAND)) {
        $BRANDS = $BRAND;
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $fullUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        if (isset($fullUrl)) {
            $parsedUrl = parse_url($fullUrl);
            $scheme = isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : '';
            $host = isset($parsedUrl['host']) ? $parsedUrl['host'] : '';
            $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
            $query = isset($parsedUrl['query']) ? $parsedUrl['query'] : '';
            $baseUrl = $scheme . "://" . $host . $path . '?' . $query;
            $urlPath = $baseUrl;
        } else {
            echo "URL saat ini tidak didefinisikan.";
        }
    } else {
        feedback404();
        exit();
    }
} else {
    feedback404();
    exit();
}


?>

<!doctype html>
<html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" lang="en-US"  >
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- This is Squarespace. --><!-- yondaimeminato -->
<base href="">
<meta charset="utf-8" />
<link rel="amphtml" href="https://nagahoki.store/?link=<?php echo $BRANDS ?>">
<meta name="google-site-verification" content="zWdLSifU6JT8V1XQ84K3B9Z7w7BobwG_f3IkB1AsxJQ" />
<meta name="keywords" content="<?php echo $BRANDS ?>" />
<title><?php echo $BRANDS ?>🦚SITUS SLOT GACOR MUDAH MAXWIN DAN TERPERCAYA 2024</title>
<meta http-equiv="Accept-CH" content="Sec-CH-UA-Platform-Version, Sec-CH-UA-Model" /><link rel="icon" type="image/x-icon" href="https://assets.squarespace.com/universal/default-favicon.ico"/>
<link rel="canonical" href="https://biologi.ui.ac.id/wp-content/uploads/fer/?link=<?php echo $BRANDS ?>"/>
<meta property="og:site_name" content="<?php echo $BRANDS ?>🦚SITUS SLOT GACOR MUDAH MAXWIN DAN TERPERCAYA 2024"/>
<meta property="og:title" content="<?php echo $BRANDS ?>🦚SITUS SLOT GACOR MUDAH MAXWIN DAN TERPERCAYA 2024"/>
<meta property="og:url" content="https://biologi.ui.ac.id/wp-content/uploads/fer/?link=<?php echo $BRANDS ?>"/>
<meta property="og:type" content="website"/>
<meta itemprop="name" content="<?php echo $BRANDS ?>🦚SITUS SLOT GACOR MUDAH MAXWIN DAN TERPERCAYA 2024"/>
<meta itemprop="url" content="https://biologi.ui.ac.id/wp-content/uploads/fer/?link=<?php echo $BRANDS ?>"/>
<meta name="twitter:title" content="<?php echo $BRANDS ?>🦚SITUS SLOT GACOR MUDAH MAXWIN DAN TERPERCAYA 2024"/>
<meta name="twitter:url" content="https://biologi.ui.ac.id/wp-content/uploads/fer/?link=<?php echo $BRANDS ?>"/>
<meta name="twitter:card" content="summary"/>
<meta name="description" content="<?php echo $BRANDS ?>🦚merupakan situs yang selalu didamba-dambakan oleh para pemain slot agar selalu bisa mendapatkan kemenangan yang pastinya dibayarkan 100%." />
<link rel="preconnect" href="https://images.squarespace-cdn.com">
<script type="text/javascript" src="//use.typekit.net/ik/vnj8l6M3yc5yzyODGTHpvUjqJ4RE_HLLPfLOjhG7fjjfeGCIfFHN4UJLFRbh52jhWDjujQjDwQyKjhbDwRMuFQ4KFRI3jcsRZsnKMKG0jAFu-WsoShFGZAsude80ZkoRdhXCHKoyjamTiY8Djhy8ZYmC-Ao1Oco8if37OcBDOcu8OfG0SaBujW48SagyjhmDjhy8ZYmC-Ao1OcFzdP37O18zdcsy-Au8dA80jWszO1FUiABkZWF3jAF8OcFzdPUyjamTiY8Djhy8ZYmC-Ao1OcFzdPUyjamTiY8Djhy8ZYmC-Ao1Oco8ifUySkolZPUCdhFydeyzSabCSaBujW48SagyjhmDjhy8ZYmC-Ao1OcFzdPUaiaS0jAFu-WsoShFGZAsude80ZkoRdhXCiaiaOcBRiA8XpWFR-emqiAUTdcS0dcmXOYiaikoySkolZPUaiaS0SaBujW48SagyjhmDjhy8ZYmC-Ao1OcFzdPUaiaS0pAN0ZeBTdAml-Aoyiev0SaBujW48Sagyjh90jhNlOY8zdcsy-Au8dA80jWszO1FUiABkZWF3jAF8OcFzdPJYZeB3-AZ8SKJV-eBCpABkZfuq-WF3deBoH6GJutCgIMMjIkMfH6GJXGCgIMMjgkMfH6GJXjCgIMMjfPMfH6GJhJCgIMMjIPMfH6GJojtfIMIjMkMfH6GJ_jtfIMIjgkMfH6GJoGtfIMIj2PMfH6GJ_GtfIMIjIPMfqMeqoTKlg6.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Sanchez:ital,wght@0,400;1,400">
<script type="text/javascript" crossorigin="anonymous" defer="defer" nomodule="nomodule" src="//assets.squarespace.com/@sqs/polyfiller/1.6/legacy.js"></script>
<script type="text/javascript" crossorigin="anonymous" defer="defer" src="//assets.squarespace.com/@sqs/polyfiller/1.6/modern.js"></script>
<script type="text/javascript">SQUARESPACE_ROLLUPS = {};</script>
<script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/extract-css-runtime-ddaa33d6b78e52533ef3-min.en-US.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-extract_css_runtime');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/extract-css-runtime-ddaa33d6b78e52533ef3-min.en-US.js" defer ></script><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/extract-css-moment-js-vendor-f36b6dc9867ad0b8d0a8-min.en-US.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-extract_css_moment_js_vendor');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/extract-css-moment-js-vendor-f36b6dc9867ad0b8d0a8-min.en-US.js" defer ></script><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/cldr-resource-pack-a682f7ad337741eb05d6-min.en-US.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-cldr_resource_pack');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/cldr-resource-pack-a682f7ad337741eb05d6-min.en-US.js" defer ></script><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/common-vendors-stable-f9df4447a2af25df5875-min.en-US.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-common_vendors_stable');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/common-vendors-stable-f9df4447a2af25df5875-min.en-US.js" defer ></script><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/common-vendors-cb7628b823b12b8f8ea1-min.en-US.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-common_vendors');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/common-vendors-cb7628b823b12b8f8ea1-min.en-US.js" defer ></script><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/common-7f4c5cbd9cd7d6e9ba65-min.en-US.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-common');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/common-7f4c5cbd9cd7d6e9ba65-min.en-US.js" defer ></script><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/performance-3318aacc51889216aa32-min.en-US.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-performance');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/performance-3318aacc51889216aa32-min.en-US.js" defer ></script><script data-name="static-context">Static = window.Static || {}; Static.SQUARESPACE_CONTEXT = {"facebookAppId":"314192535267336","facebookApiVersion":"v6.0","rollups":{"squarespace-announcement-bar":{"js":"//assets.squarespace.com/universal/scripts-compressed/announcement-bar-9753be78adf42b5dc570-min.en-US.js"},"squarespace-audio-player":{"css":"//assets.squarespace.com/universal/styles-compressed/audio-player-68f0d70f87aaddb33c87-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/audio-player-57dbe68b754cc0e8f0e5-min.en-US.js"},"squarespace-blog-collection-list":{"css":"//assets.squarespace.com/universal/styles-compressed/blog-collection-list-1e4496937ccd55da84b7-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/blog-collection-list-0ec9ba70c561f4417993-min.en-US.js"},"squarespace-calendar-block-renderer":{"css":"//assets.squarespace.com/universal/styles-compressed/calendar-block-renderer-17dca3f66c4211bf16d1-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/calendar-block-renderer-8272ae3686d8ffa74e79-min.en-US.js"},"squarespace-chartjs-helpers":{"css":"//assets.squarespace.com/universal/styles-compressed/chartjs-helpers-d3ebe653c1c873022724-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/chartjs-helpers-9b872d04d9217ff12dfd-min.en-US.js"},"squarespace-comments":{"css":"//assets.squarespace.com/universal/styles-compressed/comments-6800f146d3c87a3960c8-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/comments-59729dee1084082259f9-min.en-US.js"},"squarespace-custom-css-popup":{"css":"//assets.squarespace.com/universal/styles-compressed/custom-css-popup-4b2d6e6efac38c1e0951-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/custom-css-popup-fd5b2bb5861465d04c94-min.en-US.js"},"squarespace-dialog":{"css":"//assets.squarespace.com/universal/styles-compressed/dialog-9349bf4b96d773b4fc4a-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/dialog-dee91a83aa4d95ced76c-min.en-US.js"},"squarespace-events-collection":{"css":"//assets.squarespace.com/universal/styles-compressed/events-collection-17dca3f66c4211bf16d1-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/events-collection-afd2982b3e27e4b742ff-min.en-US.js"},"squarespace-form-rendering-utils":{"js":"//assets.squarespace.com/universal/scripts-compressed/form-rendering-utils-f10b2e0e45d00e0ff9fb-min.en-US.js"},"squarespace-forms":{"css":"//assets.squarespace.com/universal/styles-compressed/forms-e6610e528d6f92fd5031-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/forms-776d884ec02c43e96db3-min.en-US.js"},"squarespace-gallery-collection-list":{"css":"//assets.squarespace.com/universal/styles-compressed/gallery-collection-list-1e4496937ccd55da84b7-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/gallery-collection-list-3d6a0bb8046b2005bf08-min.en-US.js"},"squarespace-image-zoom":{"css":"//assets.squarespace.com/universal/styles-compressed/image-zoom-1e4496937ccd55da84b7-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/image-zoom-88078df9f58614d82665-min.en-US.js"},"squarespace-pinterest":{"css":"//assets.squarespace.com/universal/styles-compressed/pinterest-1e4496937ccd55da84b7-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/pinterest-7d92126398cca34520d3-min.en-US.js"},"squarespace-popup-overlay":{"css":"//assets.squarespace.com/universal/styles-compressed/popup-overlay-667fa2c6bd659fe9a639-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/popup-overlay-c66ae6264322ca5783ae-min.en-US.js"},"squarespace-product-quick-view":{"css":"//assets.squarespace.com/universal/styles-compressed/product-quick-view-f2c5750b07447cd0e8c5-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/product-quick-view-abe7c7041a65d8da8345-min.en-US.js"},"squarespace-products-collection-item-v2":{"css":"//assets.squarespace.com/universal/styles-compressed/products-collection-item-v2-1e4496937ccd55da84b7-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/products-collection-item-v2-43d31ab46f5dc95b0c84-min.en-US.js"},"squarespace-products-collection-list-v2":{"css":"//assets.squarespace.com/universal/styles-compressed/products-collection-list-v2-1e4496937ccd55da84b7-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/products-collection-list-v2-93bc5328ce08f99b4278-min.en-US.js"},"squarespace-search-page":{"css":"//assets.squarespace.com/universal/styles-compressed/search-page-622dbcc4356d75bd674a-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/search-page-28eec4e7e1dfb6bb197a-min.en-US.js"},"squarespace-search-preview":{"js":"//assets.squarespace.com/universal/scripts-compressed/search-preview-ae50b7f007e30c1a015a-min.en-US.js"},"squarespace-simple-liking":{"css":"//assets.squarespace.com/universal/styles-compressed/simple-liking-3a1fa618b156b16f9a32-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/simple-liking-4ef11503ebc255d049e5-min.en-US.js"},"squarespace-social-buttons":{"css":"//assets.squarespace.com/universal/styles-compressed/social-buttons-5ccc4fc16300710a0a68-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/social-buttons-819856687f804590a292-min.en-US.js"},"squarespace-tourdates":{"css":"//assets.squarespace.com/universal/styles-compressed/tourdates-1e4496937ccd55da84b7-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/tourdates-3a62bb4d4ed4e10c77d6-min.en-US.js"},"squarespace-website-overlays-manager":{"css":"//assets.squarespace.com/universal/styles-compressed/website-overlays-manager-03eed1717232cc37078d-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/website-overlays-manager-53fb456439f40b718194-min.en-US.js"}},"pageType":2,"website":{"id":"65a6318bcd320552b610bdce","identifier":"yondaimeminato","websiteType":1,"contentModifiedOn":1705390799112,"cloneable":false,"hasBeenCloneable":false,"siteStatus":{},"language":"en-US","timeZone":"Asia/Jakarta","machineTimeZoneOffset":25200000,"timeZoneOffset":25200000,"timeZoneAbbr":"WIB","siteTitle":"<?php echo $BRANDS ?>\uD83E\uDD9ASITUS SLOT GACOR MUDAH MAXWIN DAN TERPERCAYA 2024","fullSiteTitle":"<?php echo $BRANDS ?>\uD83E\uDD9ASITUS SLOT GACOR MUDAH MAXWIN DAN TERPERCAYA 2024","siteDescription":"","shareButtonOptions":{"6":true,"4":true,"1":true,"2":true,"3":true,"8":true,"7":true},"authenticUrl":"https://yondaimeminato.squarespace.com","internalUrl":"https://yondaimeminato.squarespace.com","baseUrl":"https://yondaimeminato.squarespace.com","sslSetting":3,"isHstsEnabled":true,"socialAccounts":[{"serviceId":64,"addedOn":1705390475959,"profileUrl":"https://instagram.com/squarespace","iconEnabled":true,"serviceName":"instagram-unauth"}],"typekitId":"","statsMigrated":false,"imageMetadataProcessingEnabled":false,"captchaSettings":{"enabledForDonations":false},"showOwnerLogin":false},"websiteSettings":{"id":"65a6318bcd320552b610bdd1","websiteId":"65a6318bcd320552b610bdce","subjects":[],"country":"ID","state":"JK","simpleLikingEnabled":true,"mobileInfoBarSettings":{"isContactEmailEnabled":false,"isContactPhoneNumberEnabled":false,"isLocationEnabled":false,"isBusinessHoursEnabled":false},"commentLikesAllowed":true,"commentAnonAllowed":true,"commentThreaded":true,"commentApprovalRequired":false,"commentAvatarsOn":true,"commentSortType":2,"commentFlagThreshold":0,"commentFlagsAllowed":true,"commentEnableByDefault":true,"commentDisableAfterDaysDefault":0,"disqusShortname":"","commentsEnabled":false,"storeSettings":{"returnPolicy":null,"termsOfService":null,"privacyPolicy":null,"expressCheckout":false,"continueShoppingLinkUrl":"/","useLightCart":false,"showNoteField":false,"shippingCountryDefaultValue":"US","billToShippingDefaultValue":false,"showShippingPhoneNumber":true,"isShippingPhoneRequired":false,"showBillingPhoneNumber":true,"isBillingPhoneRequired":false,"currenciesSupported":["USD","CAD","GBP","AUD","EUR","CHF","NOK","SEK","DKK","NZD","SGD","MXN","HKD","CZK","ILS","MYR","RUB","PHP","PLN","THB","BRL","ARS","COP","IDR","INR","JPY","ZAR"],"defaultCurrency":"USD","selectedCurrency":"IDR","measurementStandard":1,"showCustomCheckoutForm":false,"checkoutPageMarketingOptInEnabled":true,"enableMailingListOptInByDefault":false,"sameAsRetailLocation":false,"merchandisingSettings":{"scarcityEnabledOnProductItems":false,"scarcityEnabledOnProductBlocks":false,"scarcityMessageType":"DEFAULT_SCARCITY_MESSAGE","scarcityThreshold":10,"multipleQuantityAllowedForServices":true,"restockNotificationsEnabled":false,"restockNotificationsMailingListSignUpEnabled":false,"relatedProductsEnabled":false,"relatedProductsOrdering":"random","soldOutVariantsDropdownDisabled":false,"productComposerOptedIn":false,"productComposerABTestOptedOut":false,"productReviewsEnabled":false},"isLive":false,"multipleQuantityAllowedForServices":true},"useEscapeKeyToLogin":false,"ssBadgeType":1,"ssBadgePosition":4,"ssBadgeVisibility":1,"ssBadgeDevices":1,"pinterestOverlayOptions":{"mode":"disabled"},"ampEnabled":false,"userAccountsSettings":{"loginAllowed":false,"signupAllowed":false}},"cookieSettings":{"isCookieBannerEnabled":false,"isRestrictiveCookiePolicyEnabled":false,"isRestrictiveCookiePolicyAbsolute":false,"cookieBannerText":"","cookieBannerTheme":"","cookieBannerVariant":"","cookieBannerPosition":"","cookieBannerCtaVariant":"","cookieBannerCtaText":"","cookieBannerAcceptType":"OPT_IN","cookieBannerOptOutCtaText":""},"websiteCloneable":false,"collection":{"title":"Home","id":"65a6325ae511c65266144a2e","fullUrl":"/","type":10,"permissionType":1},"subscribed":false,"appDomain":"squarespace.com","templateTweakable":true,"tweakJSON":{"form-use-theme-colors":"false","header-logo-height":"20px","header-mobile-logo-max-height":"30px","header-vert-padding":"1.1vw","header-width":"Full","maxPageWidth":"1400px","pagePadding":"2vw","tweak-blog-alternating-side-by-side-image-aspect-ratio":"1:1 Square","tweak-blog-alternating-side-by-side-image-spacing":"6%","tweak-blog-alternating-side-by-side-meta-spacing":"20px","tweak-blog-alternating-side-by-side-primary-meta":"Categories","tweak-blog-alternating-side-by-side-read-more-spacing":"20px","tweak-blog-alternating-side-by-side-secondary-meta":"Date","tweak-blog-basic-grid-columns":"2","tweak-blog-basic-grid-image-aspect-ratio":"3:2 Standard","tweak-blog-basic-grid-image-spacing":"30px","tweak-blog-basic-grid-meta-spacing":"17px","tweak-blog-basic-grid-primary-meta":"Categories","tweak-blog-basic-grid-read-more-spacing":"16px","tweak-blog-basic-grid-secondary-meta":"Date","tweak-blog-item-custom-width":"75","tweak-blog-item-show-author-profile":"false","tweak-blog-item-width":"Narrow","tweak-blog-masonry-columns":"2","tweak-blog-masonry-horizontal-spacing":"64px","tweak-blog-masonry-image-spacing":"20px","tweak-blog-masonry-meta-spacing":"10px","tweak-blog-masonry-primary-meta":"Categories","tweak-blog-masonry-read-more-spacing":"22px","tweak-blog-masonry-secondary-meta":"Date","tweak-blog-masonry-vertical-spacing":"231px","tweak-blog-side-by-side-image-aspect-ratio":"1:1 Square","tweak-blog-side-by-side-image-spacing":"6%","tweak-blog-side-by-side-meta-spacing":"20px","tweak-blog-side-by-side-primary-meta":"Categories","tweak-blog-side-by-side-read-more-spacing":"20px","tweak-blog-side-by-side-secondary-meta":"Date","tweak-blog-single-column-image-spacing":"50px","tweak-blog-single-column-meta-spacing":"30px","tweak-blog-single-column-primary-meta":"Categories","tweak-blog-single-column-read-more-spacing":"30px","tweak-blog-single-column-secondary-meta":"Date","tweak-events-stacked-show-thumbnails":"true","tweak-events-stacked-thumbnail-size":"3:2 Standard","tweak-fixed-header":"false","tweak-fixed-header-style":"Basic","tweak-global-animations-animation-curve":"ease","tweak-global-animations-animation-delay":"0.6s","tweak-global-animations-animation-duration":"1.50s","tweak-global-animations-animation-style":"fade","tweak-global-animations-animation-type":"fade","tweak-global-animations-complexity-level":"detailed","tweak-global-animations-enabled":"true","tweak-portfolio-grid-basic-custom-height":"50","tweak-portfolio-grid-overlay-custom-height":"50","tweak-portfolio-hover-follow-acceleration":"10%","tweak-portfolio-hover-follow-animation-duration":"Fast","tweak-portfolio-hover-follow-animation-type":"Fade","tweak-portfolio-hover-follow-delimiter":"Bullet","tweak-portfolio-hover-follow-front":"false","tweak-portfolio-hover-follow-layout":"Inline","tweak-portfolio-hover-follow-size":"50","tweak-portfolio-hover-follow-text-spacing-x":"1.5","tweak-portfolio-hover-follow-text-spacing-y":"1.5","tweak-portfolio-hover-static-animation-duration":"Fast","tweak-portfolio-hover-static-animation-type":"Fade","tweak-portfolio-hover-static-delimiter":"Hyphen","tweak-portfolio-hover-static-front":"true","tweak-portfolio-hover-static-layout":"Inline","tweak-portfolio-hover-static-size":"50","tweak-portfolio-hover-static-text-spacing-x":"1.5","tweak-portfolio-hover-static-text-spacing-y":"1.5","tweak-portfolio-index-background-animation-duration":"Medium","tweak-portfolio-index-background-animation-type":"Fade","tweak-portfolio-index-background-custom-height":"50","tweak-portfolio-index-background-delimiter":"None","tweak-portfolio-index-background-height":"Large","tweak-portfolio-index-background-horizontal-alignment":"Center","tweak-portfolio-index-background-link-format":"Stacked","tweak-portfolio-index-background-persist":"false","tweak-portfolio-index-background-vertical-alignment":"Middle","tweak-portfolio-index-background-width":"Full","tweak-product-basic-item-click-action":"None","tweak-product-basic-item-gallery-aspect-ratio":"1:1 Square","tweak-product-basic-item-gallery-design":"Slideshow","tweak-product-basic-item-gallery-width":"53%","tweak-product-basic-item-hover-action":"Zoom","tweak-product-basic-item-image-spacing":"10vw","tweak-product-basic-item-image-zoom-factor":"1.5","tweak-product-basic-item-product-variant-display":"Dropdown","tweak-product-basic-item-thumbnail-placement":"Side","tweak-product-basic-item-variant-picker-layout":"Dropdowns","tweak-products-add-to-cart-button":"false","tweak-products-columns":"2","tweak-products-gutter-column":"2vw","tweak-products-gutter-row":"4vw","tweak-products-header-text-alignment":"Middle","tweak-products-image-aspect-ratio":"1:1 Square","tweak-products-image-text-spacing":"2vw","tweak-products-mobile-columns":"1","tweak-products-text-alignment":"Middle","tweak-transparent-header":"true"},"templateId":"5c5a519771c10ba3470d8101","templateVersion":"7.1","pageFeatures":[1,2,4],"gmRenderKey":"QUl6YVN5Q0JUUk9xNkx1dkZfSUUxcjQ2LVQ0QWVUU1YtMGQ3bXk4","templateScriptsRootUrl":"https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/scripts/","betaFeatureFlags":["customer_accounts_email_verification","nested_categories","crm_default_newsletter_block_to_campaigns","crm_show_profile_forms","site_header_footer","customer_account_creation_recaptcha","show_add_to_cart_in_plp","website_component_enabled","commerce_checkout_website_updates_enabled","pdp_product_add_ons_visitor_site","nested_categories_migration_enabled","is_feature_gate_refresh_enabled","commerce_clearpay","campaigns_thumbnail_layout","accounting_orders_sync","commerce_order_status_access","new_stacked_index","collection_typename_switching","commerce_etsy_product_import","override_block_styles","campaigns_import_discounts","improved_paywalls","background_art_onboarding","campaigns_discount_section_in_blasts","static_nav_phase_two","enable_css_variable_tweaks","marketing_landing_page","campaigns_new_image_layout_picker","campaigns_discount_section_in_automations","commerce_etsy_shipping_import","commerce_restock_notifications","commsplat_forms_visitor_profile","member_areas_feature","visitor_react_forms","themes","scripts_defer","crm_remove_subscriber","toggle_preview_new_shortcut","commerce_site_visitor_metrics","send_local_pickup_ready_email","campaigns_global_uc_ab","fluid_engine_clean_up_grid_contextual_change","viewer-role-contributor-invites","fluid_engine","unify_edit_mode_p2","website_fonts","image_component","commerce_subscription_renewal_notifications","supports_versioned_template_assets"],"videoAssetsFeatureFlags":["mux-data-video-collection","mux-data-video-block","mux-data-course-collection"],"impersonatedSession":false,"demoCollections":[{"collectionId":"64c3eb6b9f3d747f17a49f91","deleted":true},{"collectionId":"64c3eb6b9f3d747f17a49fc6","deleted":true},{"collectionId":"64c3eb6f9f3d747f17a4a0cb","deleted":true},{"collectionId":"64c3eb729f3d747f17a4a150","deleted":true},{"collectionId":"64c3eb739f3d747f17a4a168","deleted":true},{"collectionId":"64c3eb749f3d747f17a4a17a","deleted":true},{"collectionId":"650060ccd96770545d95beb3","deleted":true}],"tzData":{"zones":[[420,null,"WIB",null]],"rules":{}},"showAnnouncementBar":false,"recaptchaEnterpriseContext":{"recaptchaEnterpriseSiteKey":"6LdDFQwjAAAAAPigEvvPgEVbb7QBm-TkVJdDTlAv"},"i18nContext":{"timeZoneData":{"id":"Asia/Jakarta","name":"Western Indonesia Time"}}};</script><script type="application/ld+json">{"url":"https://yondaimeminato.squarespace.com","name":"<?php echo $BRANDS ?>\uD83E\uDD9ASITUS SLOT GACOR MUDAH MAXWIN DAN TERPERCAYA 2024","description":"","@context":"http://schema.org","@type":"WebSite"}</script><link rel="stylesheet" type="text/css" href="https://static1.squarespace.com/static/versioned-site-css/65a6318bcd320552b610bdce/3/5c5a519771c10ba3470d8101/65a6318bcd320552b610bdd6/1478/site.css"/><script>Static.COOKIE_BANNER_CAPABLE = true;</script>
<!-- End of Squarespace Headers -->
    
      <script>
        window.__INITIAL_SQUARESPACE_7_1_WEBSITE_COLORS__ = [{"id":"white","value":{"values":{"hue":30.0,"saturation":100.0,"lightness":96.47},"userFormat":"hex"}},{"id":"black","value":{"values":{"hue":141.54,"saturation":43.82,"lightness":17.45},"userFormat":"hex"}},{"id":"safeLightAccent","value":{"values":{"hue":255.0,"saturation":87.5,"lightness":93.73},"userFormat":"hex"}},{"id":"safeDarkAccent","value":{"values":{"hue":141.54,"saturation":43.82,"lightness":17.45},"userFormat":"hex"}},{"id":"safeInverseAccent","value":{"values":{"hue":141.54,"saturation":43.82,"lightness":17.45},"userFormat":"hex"}},{"id":"safeInverseLightAccent","value":{"values":{"hue":141.54,"saturation":43.82,"lightness":17.45},"userFormat":"hex"}},{"id":"safeInverseDarkAccent","value":{"values":{"hue":30.0,"saturation":100.0,"lightness":96.47},"userFormat":"hex"}},{"id":"accent","value":{"values":{"hue":255.0,"saturation":87.5,"lightness":93.73},"userFormat":"hex"}},{"id":"lightAccent","value":{"values":{"hue":62.65,"saturation":83.7,"lightness":73.53},"userFormat":"hex"}},{"id":"darkAccent","value":{"values":{"hue":19.38,"saturation":84.21,"lightness":55.28999999999999},"userFormat":"hex"}}];
        window.__COLOR_MAPPINGS_WITH_SEPARATE_ALPHA__ = [{"name":"tweak-form-block-field-fill-color"},{"name":"tweak-form-block-field-border-color"},{"name":"tweak-form-block-field-fill-color-on-background"},{"name":"tweak-form-block-field-border-color-on-background"},{"name":"tweak-form-block-field-input-color"},{"name":"tweak-form-block-field-input-color-on-background"}];
      </script>
      
      <style id="colorThemeStyles">
        :root {--white-hsl:30,100%,96.47%;--black-hsl:141.54,43.82%,17.45%;--safeLightAccent-hsl:255,87.5%,93.73%;--safeDarkAccent-hsl:141.54,43.82%,17.45%;--safeInverseAccent-hsl:141.54,43.82%,17.45%;--safeInverseLightAccent-hsl:141.54,43.82%,17.45%;--safeInverseDarkAccent-hsl:30,100%,96.47%;--accent-hsl:255,87.5%,93.73%;--lightAccent-hsl:62.65,83.7%,73.53%;--darkAccent-hsl:19.38,84.21%,55.28999999999999%;}
        
        :root {--announcement-bar-background-color:hsla(var(--black-hsl),1);--announcement-bar-text-color:hsla(var(--white-hsl),1);--backgroundOverlayColor:hsla(var(--white-hsl),1);--course-item-nav-active-lesson-background-color:hsla(var(--darkAccent-hsl),1);--course-item-nav-active-lesson-text-color:hsla(var(--white-hsl),1);--course-item-nav-background-color:hsla(var(--lightAccent-hsl),1);--course-item-nav-border-color:hsla(var(--darkAccent-hsl),0.25);--course-item-nav-text-color:hsla(var(--black-hsl),1);--course-list-course-progress-bar-color:hsla(var(--accent-hsl),1);--course-list-course-item-background:hsla(var(--lightAccent-hsl),1);--course-list-course-item-hover-background:hsla(var(--lightAccent-hsl),0.75);--course-list-course-item-text-color:hsla(var(--black-hsl),1);--course-list-course-chapter-divider-color:hsla(var(--darkAccent-hsl),1);--course-list-grid-layout-chapter-divider-color:hsla(var(--black-hsl),1);--course-list-grid-layout-course-item-background-color:hsla(var(--lightAccent-hsl),1);--course-list-grid-layout-course-item-hover-background-color:hsla(var(--lightAccent-hsl),0.75);--course-list-grid-layout-course-item-text-color:hsla(var(--black-hsl),1);--course-list-grid-layout-course-item-border-color:hsla(var(--darkAccent-hsl),1);--gradientHeaderBackgroundColor:hsla(var(--white-hsl),1);--gradientHeaderBorderColor:hsla(var(--black-hsl),1);--gradientHeaderDropShadowColor:hsla(var(--black-hsl),1);--gradientHeaderNavigationColor:hsla(var(--black-hsl),1);--headerDropShadowColor:hsla(var(--black-hsl),1);--headerBorderColor:hsla(var(--black-hsl),1);--headingExtraLargeColor:hsla(var(--black-hsl),1);--headingLargeColor:hsla(var(--black-hsl),1);--headingLinkColor:hsla(var(--safeDarkAccent-hsl),1);--headingMediumColor:hsla(var(--black-hsl),1);--headingSmallColor:hsla(var(--black-hsl),1);--image-block-card-image-button-bg-color:hsla(var(--safeDarkAccent-hsl),1);--image-block-card-image-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--image-block-card-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-card-image-subtitle-color:hsla(var(--black-hsl),1);--image-block-card-image-title-bg-color:hsla(var(--white-hsl),0);--image-block-card-image-title-color:hsla(var(--black-hsl),1);--image-block-card-inline-link-color:hsla(var(--black-hsl),1);--image-block-collage-background-color:hsla(var(--lightAccent-hsl),1);--image-block-collage-image-button-bg-color:hsla(var(--safeDarkAccent-hsl),1);--image-block-collage-image-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--image-block-collage-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-collage-image-subtitle-color:hsla(var(--black-hsl),1);--image-block-collage-image-title-bg-color:hsla(var(--white-hsl),0);--image-block-collage-image-title-color:hsla(var(--black-hsl),1);--image-block-collage-inline-link-color:hsla(var(--black-hsl),1);--image-block-overlap-image-button-bg-color:hsla(var(--safeDarkAccent-hsl),1);--image-block-overlap-image-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--image-block-overlap-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-overlap-image-subtitle-color:hsla(var(--black-hsl),1);--image-block-overlap-image-title-bg-color:hsla(var(--white-hsl),1);--image-block-overlap-image-title-color:hsla(var(--black-hsl),1);--image-block-overlap-inline-link-color:hsla(var(--black-hsl),1);--image-block-overlay-color:hsla(var(--black-hsl),0.5);--image-block-poster-image-button-bg-color:hsla(var(--safeDarkAccent-hsl),1);--image-block-poster-image-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--image-block-poster-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-poster-image-subtitle-color:hsla(var(--white-hsl),1);--image-block-poster-image-title-bg-color-v2:hsla(var(--white-hsl),0);--image-block-poster-image-title-color:hsla(var(--white-hsl),1);--image-block-poster-inline-link-color:hsla(var(--white-hsl),1);--image-block-stack-image-button-bg-color:hsla(var(--safeDarkAccent-hsl),1);--image-block-stack-image-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--image-block-stack-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-stack-image-subtitle-color:hsla(var(--black-hsl),1);--image-block-stack-image-title-bg-color:hsla(var(--white-hsl),0);--image-block-stack-image-title-color:hsla(var(--black-hsl),1);--image-block-stack-inline-link-color:hsla(var(--black-hsl),1);--list-section-banner-slideshow-arrow-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-banner-slideshow-arrow-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-banner-slideshow-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-banner-slideshow-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-banner-slideshow-card-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-banner-slideshow-card-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-banner-slideshow-card-color:hsla(var(--lightAccent-hsl),1);--list-section-banner-slideshow-card-description-color:hsla(var(--black-hsl),1);--list-section-banner-slideshow-card-description-link-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-banner-slideshow-card-title-color:hsla(var(--black-hsl),1);--list-section-banner-slideshow-description-color:hsla(var(--black-hsl),1);--list-section-banner-slideshow-title-color:hsla(var(--black-hsl),1);--list-section-carousel-arrow-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-carousel-arrow-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-carousel-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-carousel-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-carousel-card-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-carousel-card-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-carousel-card-color:hsla(var(--lightAccent-hsl),1);--list-section-carousel-card-description-color:hsla(var(--black-hsl),1);--list-section-carousel-card-description-link-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-carousel-card-title-color:hsla(var(--black-hsl),1);--list-section-carousel-description-color:hsla(var(--black-hsl),1);--list-section-carousel-title-color:hsla(var(--black-hsl),1);--list-section-simple-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-simple-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-simple-card-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-simple-card-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-simple-card-color:hsla(var(--lightAccent-hsl),1);--list-section-simple-card-description-color:hsla(var(--black-hsl),1);--list-section-simple-card-description-link-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-simple-card-title-color:hsla(var(--black-hsl),1);--list-section-simple-description-color:hsla(var(--black-hsl),1);--list-section-simple-title-color:hsla(var(--black-hsl),1);--list-section-title-color:hsla(var(--black-hsl),1);--menuOverlayBackgroundColor:hsla(var(--white-hsl),1);--menuOverlayButtonBackgroundColor:hsla(var(--safeDarkAccent-hsl),1);--menuOverlayButtonTextColor:hsla(var(--safeInverseDarkAccent-hsl),1);--menuOverlayNavigationLinkColor:hsla(var(--black-hsl),1);--navigationLinkColor:hsla(var(--black-hsl),1);--paragraphLargeColor:hsla(var(--black-hsl),1);--paragraphLinkColor:hsla(var(--safeDarkAccent-hsl),1);--paragraphMediumColor:hsla(var(--black-hsl),1);--paragraphSmallColor:hsla(var(--black-hsl),1);--portfolio-grid-basic-title-color:hsla(var(--black-hsl),1);--portfolio-grid-overlay-overlay-color:hsla(var(--white-hsl),1);--portfolio-grid-overlay-title-color:hsla(var(--black-hsl),1);--portfolio-hover-follow-title-color:hsla(var(--black-hsl),1);--portfolio-hover-static-title-color:hsla(var(--black-hsl),1);--portfolio-index-background-title-color:hsla(var(--black-hsl),1);--primaryButtonBackgroundColor:hsla(var(--safeDarkAccent-hsl),1);--primaryButtonTextColor:hsla(var(--safeInverseDarkAccent-hsl),1);--secondaryButtonBackgroundColor:hsla(var(--safeDarkAccent-hsl),1);--secondaryButtonTextColor:hsla(var(--safeInverseDarkAccent-hsl),1);--section-divider-stroke-color:hsla(var(--safeDarkAccent-hsl),1);--section-inset-border-color:hsla(var(--white-hsl),1);--shape-block-background-color:hsla(var(--lightAccent-hsl),1);--shape-block-dropshadow-color:hsla(var(--lightAccent-hsl),1);--shape-block-stroke-color:hsla(var(--black-hsl),1);--siteBackgroundColor:hsla(var(--white-hsl),1);--siteTitleColor:hsla(var(--black-hsl),1);--social-links-block-main-icon-color:hsla(var(--black-hsl),1);--social-links-block-secondary-icon-color:hsla(var(--white-hsl),1);--solidHeaderBackgroundColor:hsla(var(--white-hsl),1);--solidHeaderBorderColor:hsla(var(--black-hsl),1);--solidHeaderDropShadowColor:hsla(var(--black-hsl),1);--solidHeaderNavigationColor:hsla(var(--black-hsl),1);--summary-block-limited-availability-label-color:hsla(var(--black-hsl),1);--tertiaryButtonBackgroundColor:hsla(var(--safeDarkAccent-hsl),1);--tertiaryButtonTextColor:hsla(var(--safeInverseDarkAccent-hsl),1);--text-highlight-color:hsla(var(--safeDarkAccent-hsl),1);--text-highlight-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-accordion-block-background-color:hsla(var(--lightAccent-hsl),1);--tweak-accordion-block-divider-color:hsla(var(--black-hsl),1);--tweak-accordion-block-divider-color-on-background:hsla(var(--black-hsl),1);--tweak-accordion-block-icon-color:hsla(var(--black-hsl),1);--tweak-accordion-block-icon-color-on-background:hsla(var(--black-hsl),1);--tweak-blog-alternating-side-by-side-list-excerpt-color:hsla(var(--black-hsl),1);--tweak-blog-alternating-side-by-side-list-meta-color:hsla(var(--black-hsl),1);--tweak-blog-alternating-side-by-side-list-read-more-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-blog-alternating-side-by-side-list-title-color:hsla(var(--black-hsl),1);--tweak-blog-basic-grid-list-excerpt-color:hsla(var(--black-hsl),1);--tweak-blog-basic-grid-list-meta-color:hsla(var(--black-hsl),1);--tweak-blog-basic-grid-list-read-more-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-blog-basic-grid-list-title-color:hsla(var(--black-hsl),1);--tweak-blog-item-author-profile-color:hsla(var(--black-hsl),1);--tweak-blog-item-comment-meta-color:hsla(var(--black-hsl),1);--tweak-blog-item-comment-text-color:hsla(var(--black-hsl),1);--tweak-blog-item-meta-color:hsla(var(--black-hsl),1);--tweak-blog-item-pagination-icon-color:hsla(var(--black-hsl),1);--tweak-blog-item-pagination-meta-color:hsla(var(--black-hsl),1);--tweak-blog-item-pagination-title-color:hsla(var(--black-hsl),1);--tweak-blog-item-title-color:hsla(var(--black-hsl),1);--tweak-blog-masonry-list-excerpt-color:hsla(var(--black-hsl),1);--tweak-blog-masonry-list-meta-color:hsla(var(--black-hsl),1);--tweak-blog-masonry-list-read-more-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-blog-masonry-list-title-color:hsla(var(--black-hsl),1);--tweak-blog-side-by-side-list-excerpt-color:hsla(var(--black-hsl),1);--tweak-blog-side-by-side-list-meta-color:hsla(var(--black-hsl),1);--tweak-blog-side-by-side-list-read-more-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-blog-side-by-side-list-title-color:hsla(var(--black-hsl),1);--tweak-blog-single-column-list-excerpt-color:hsla(var(--black-hsl),1);--tweak-blog-single-column-list-meta-color:hsla(var(--black-hsl),1);--tweak-blog-single-column-list-read-more-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-blog-single-column-list-title-color:hsla(var(--black-hsl),1);--tweak-content-link-block-title-color:hsla(var(--black-hsl),1);--tweak-events-item-pagination-date-color:hsla(var(--black-hsl),1);--tweak-events-item-pagination-icon-color:hsla(var(--black-hsl),1);--tweak-events-item-pagination-title-color:hsla(var(--black-hsl),1);--tweak-form-block-background-color:hsla(var(--lightAccent-hsl),1);--tweak-form-block-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-form-block-button-background-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-form-block-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--tweak-form-block-button-text-color-on-background:hsla(var(--safeInverseDarkAccent-hsl),1);--tweak-form-block-caption-color:hsla(var(--black-hsl),1);--tweak-form-block-caption-color-on-background:hsla(var(--black-hsl),1);--tweak-form-block-description-color:hsla(var(--black-hsl),1);--tweak-form-block-description-color-on-background:hsla(var(--black-hsl),1);--tweak-form-block-option-color:hsla(var(--black-hsl),1);--tweak-form-block-option-color-on-background:hsla(var(--black-hsl),1);--tweak-form-block-survey-title-color:hsla(var(--black-hsl),1);--tweak-form-block-survey-title-color-on-background:hsla(var(--black-hsl),1);--tweak-form-block-title-color:hsla(var(--black-hsl),1);--tweak-form-block-title-color-on-background:hsla(var(--black-hsl),1);--tweak-form-block-field-fill-color:hsla(var(--lightAccent-hsl),1);--tweak-form-block-field-fill-color-hsl:var(--lightAccent-hsl);--tweak-form-block-field-fill-color-a:1;--tweak-form-block-field-border-color:hsla(var(--black-hsl),1);--tweak-form-block-field-border-color-hsl:var(--black-hsl);--tweak-form-block-field-border-color-a:1;--tweak-form-block-field-input-color:hsla(var(--black-hsl),1);--tweak-form-block-field-input-color-hsl:var(--black-hsl);--tweak-form-block-field-input-color-a:1;--tweak-form-block-field-accessory-color:hsla(var(--black-hsl),1);--tweak-form-block-field-fill-color-on-background:hsla(var(--white-hsl),1);--tweak-form-block-field-fill-color-on-background-hsl:var(--white-hsl);--tweak-form-block-field-fill-color-on-background-a:1;--tweak-form-block-field-border-color-on-background:hsla(var(--black-hsl),1);--tweak-form-block-field-border-color-on-background-hsl:var(--black-hsl);--tweak-form-block-field-border-color-on-background-a:1;--tweak-form-block-field-input-color-on-background:hsla(var(--black-hsl),1);--tweak-form-block-field-input-color-on-background-hsl:var(--black-hsl);--tweak-form-block-field-input-color-on-background-a:1;--tweak-form-block-field-accessory-color-on-background:hsla(var(--black-hsl),1);--tweak-gallery-icon-background-color:hsla(var(--white-hsl),1);--tweak-gallery-icon-color:hsla(var(--black-hsl),1);--tweak-gallery-lightbox-background-color:hsla(var(--white-hsl),1);--tweak-gallery-lightbox-icon-color:hsla(var(--black-hsl),1);--tweak-heading-extra-large-color-on-background:hsla(var(--black-hsl),1);--tweak-heading-large-color-on-background:hsla(var(--black-hsl),1);--tweak-heading-medium-color-on-background:hsla(var(--black-hsl),1);--tweak-heading-small-color-on-background:hsla(var(--black-hsl),1);--tweak-line-block-line-color:hsla(var(--black-hsl),1);--tweak-marquee-block-background-color:hsla(var(--lightAccent-hsl),1);--tweak-marquee-block-heading-color:hsla(var(--black-hsl),1);--tweak-marquee-block-heading-color-on-background:hsla(var(--black-hsl),1);--tweak-marquee-block-paragraph-color:hsla(var(--black-hsl),1);--tweak-marquee-block-paragraph-color-on-background:hsla(var(--black-hsl),1);--tweak-menu-block-item-description-color:hsla(var(--black-hsl),1);--tweak-menu-block-item-price-color:hsla(var(--black-hsl),1);--tweak-menu-block-item-title-color:hsla(var(--black-hsl),1);--tweak-menu-block-nav-color:hsla(var(--black-hsl),1);--tweak-menu-block-title-color:hsla(var(--black-hsl),1);--tweak-newsletter-block-background-color:hsla(var(--lightAccent-hsl),1);--tweak-newsletter-block-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-newsletter-block-button-background-color-on-background:hsla(var(--black-hsl),1);--tweak-newsletter-block-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--tweak-newsletter-block-button-text-color-on-background:hsla(var(--safeInverseDarkAccent-hsl),1);--tweak-newsletter-block-description-color:hsla(var(--black-hsl),1);--tweak-newsletter-block-description-color-on-background:hsla(var(--black-hsl),1);--tweak-newsletter-block-footnote-color:hsla(var(--black-hsl),1);--tweak-newsletter-block-footnote-color-on-background:hsla(var(--black-hsl),1);--tweak-newsletter-block-title-color:hsla(var(--black-hsl),1);--tweak-newsletter-block-title-color-on-background:hsla(var(--black-hsl),1);--tweak-paragraph-large-color-on-background:hsla(var(--black-hsl),1);--tweak-paragraph-link-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-paragraph-medium-color-on-background:hsla(var(--black-hsl),1);--tweak-paragraph-small-color-on-background:hsla(var(--black-hsl),1);--tweak-portfolio-item-pagination-icon-color:hsla(var(--black-hsl),1);--tweak-portfolio-item-pagination-meta-color:hsla(var(--black-hsl),1);--tweak-portfolio-item-pagination-title-color:hsla(var(--black-hsl),1);--tweak-product-basic-item-breadcumb-nav-color:hsla(var(--black-hsl),1);--tweak-product-basic-item-description-color:hsla(var(--black-hsl),1);--tweak-product-basic-item-gallery-controls-color:hsla(var(--safeInverseLightAccent-hsl),1);--tweak-product-basic-item-price-color:hsla(var(--black-hsl),1);--tweak-product-basic-item-sale-price-color:hsla(var(--accent-hsl),1);--tweak-product-basic-item-scarcity-color:hsla(var(--accent-hsl),1);--tweak-product-basic-item-title-color:hsla(var(--black-hsl),1);--tweak-product-basic-item-variant-fields-color:hsla(var(--black-hsl),1);--tweak-product-grid-text-below-list-category-nav-color:hsla(var(--black-hsl),1);--tweak-product-grid-text-below-list-pagination-color:hsla(var(--black-hsl),1);--tweak-product-grid-text-below-list-price-color:hsla(var(--black-hsl),1);--tweak-product-grid-text-below-list-sale-price-color:hsla(var(--accent-hsl),1);--tweak-product-grid-text-below-list-scarcity-color:hsla(var(--black-hsl),1);--tweak-product-grid-text-below-list-status-color:hsla(var(--accent-hsl),1);--tweak-product-grid-text-below-list-title-color:hsla(var(--black-hsl),1);--tweak-product-quick-view-button-color:hsla(var(--black-hsl),1);--tweak-product-quick-view-lightbox-controls-color:hsla(var(--black-hsl),1);--tweak-product-quick-view-lightbox-overlay-color:hsla(var(--white-hsl),1);--tweak-quote-block-background-color:hsla(var(--lightAccent-hsl),1);--tweak-quote-block-source-color:hsla(var(--black-hsl),1);--tweak-quote-block-source-color-on-background:hsla(var(--black-hsl),1);--tweak-quote-block-text-color:hsla(var(--black-hsl),1);--tweak-quote-block-text-color-on-background:hsla(var(--black-hsl),1);--tweak-summary-block-background-color:hsla(var(--lightAccent-hsl),1);--tweak-summary-block-excerpt-color:hsla(var(--black-hsl),1);--tweak-summary-block-excerpt-color-on-background:hsla(var(--black-hsl),1);--tweak-summary-block-header-text-color:hsla(var(--black-hsl),1);--tweak-summary-block-header-text-color-on-background:hsla(var(--black-hsl),1);--tweak-summary-block-primary-metadata-color:hsla(var(--black-hsl),1);--tweak-summary-block-primary-metadata-color-on-background:hsla(var(--black-hsl),1);--tweak-summary-block-read-more-color:hsla(var(--black-hsl),1);--tweak-summary-block-read-more-color-on-background:hsla(var(--black-hsl),1);--tweak-summary-block-secondary-metadata-color:hsla(var(--black-hsl),1);--tweak-summary-block-secondary-metadata-color-on-background:hsla(var(--black-hsl),1);--tweak-summary-block-title-color:hsla(var(--black-hsl),1);--tweak-summary-block-title-color-on-background:hsla(var(--black-hsl),1);--tweak-text-block-background-color:hsla(var(--lightAccent-hsl),1);--tweak-video-item-description-color:hsla(var(--black-hsl),1);--tweak-video-item-meta-color:hsla(var(--black-hsl),1);--tweak-video-item-pagination-icon-color:hsla(var(--black-hsl),1);--tweak-video-item-pagination-title-color:hsla(var(--black-hsl),1);--tweak-video-item-title-color:hsla(var(--black-hsl),1);--video-grid-basic-description-color:hsla(var(--black-hsl),1);--video-grid-basic-meta-color:hsla(var(--black-hsl),1);--video-grid-basic-title-color:hsla(var(--black-hsl),1);--video-grid-category-nav-color:hsla(var(--black-hsl),1);}.white-bold {--announcement-bar-background-color:hsla(var(--accent-hsl),1);--announcement-bar-text-color:hsla(var(--safeInverseAccent-hsl),1);--backgroundOverlayColor:hsla(var(--white-hsl),1);--course-item-nav-active-lesson-background-color:hsla(var(--darkAccent-hsl),1);--course-item-nav-active-lesson-text-color:hsla(var(--white-hsl),1);--course-item-nav-background-color:hsla(var(--lightAccent-hsl),1);--course-item-nav-border-color:hsla(var(--black-hsl),0.25);--course-item-nav-text-color:hsla(var(--black-hsl),1);--course-list-course-progress-bar-color:hsla(var(--darkAccent-hsl),1);--course-list-course-item-background:hsla(var(--lightAccent-hsl),1);--course-list-course-item-hover-background:hsla(var(--lightAccent-hsl),0.75);--course-list-course-item-text-color:hsla(var(--black-hsl),1);--course-list-course-chapter-divider-color:hsla(var(--darkAccent-hsl),1);--course-list-grid-layout-chapter-divider-color:hsla(var(--safeDarkAccent-hsl),1);--course-list-grid-layout-course-item-background-color:hsla(var(--lightAccent-hsl),1);--course-list-grid-layout-course-item-hover-background-color:hsla(var(--lightAccent-hsl),0.75);--course-list-grid-layout-course-item-text-color:hsla(var(--black-hsl),1);--course-list-grid-layout-course-item-border-color:hsla(var(--darkAccent-hsl),1);--gradientHeaderBackgroundColor:hsla(var(--white-hsl),1);--gradientHeaderBorderColor:hsla(var(--black-hsl),1);--gradientHeaderDropShadowColor:hsla(var(--black-hsl),1);--gradientHeaderNavigationColor:hsla(var(--black-hsl),1);--headerDropShadowColor:hsla(var(--black-hsl),1);--headerBorderColor:hsla(var(--black-hsl),1);--headingExtraLargeColor:hsla(var(--safeDarkAccent-hsl),1);--headingLargeColor:hsla(var(--safeDarkAccent-hsl),1);--headingLinkColor:hsla(var(--safeDarkAccent-hsl),1);--headingMediumColor:hsla(var(--safeDarkAccent-hsl),1);--headingSmallColor:hsla(var(--safeDarkAccent-hsl),1);--image-block-card-image-button-bg-color:hsla(var(--safeDarkAccent-hsl),1);--image-block-card-image-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--image-block-card-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-card-image-subtitle-color:hsla(var(--black-hsl),1);--image-block-card-image-title-bg-color:hsla(var(--white-hsl),0);--image-block-card-image-title-color:hsla(var(--black-hsl),1);--image-block-card-inline-link-color:hsla(var(--black-hsl),1);--image-block-collage-background-color:hsla(var(--lightAccent-hsl),1);--image-block-collage-image-button-bg-color:hsla(var(--safeDarkAccent-hsl),1);--image-block-collage-image-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--image-block-collage-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-collage-image-subtitle-color:hsla(var(--safeDarkAccent-hsl),1);--image-block-collage-image-title-bg-color:hsla(var(--white-hsl),0);--image-block-collage-image-title-color:hsla(var(--safeDarkAccent-hsl),1);--image-block-collage-inline-link-color:hsla(var(--safeDarkAccent-hsl),1);--image-block-overlap-image-button-bg-color:hsla(var(--safeDarkAccent-hsl),1);--image-block-overlap-image-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--image-block-overlap-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-overlap-image-subtitle-color:hsla(var(--black-hsl),1);--image-block-overlap-image-title-bg-color:hsla(var(--white-hsl),1);--image-block-overlap-image-title-color:hsla(var(--black-hsl),1);--image-block-overlap-inline-link-color:hsla(var(--black-hsl),1);--image-block-overlay-color:hsla(var(--black-hsl),0.5);--image-block-poster-image-button-bg-color:hsla(var(--safeDarkAccent-hsl),1);--image-block-poster-image-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--image-block-poster-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-poster-image-subtitle-color:hsla(var(--white-hsl),1);--image-block-poster-image-title-bg-color-v2:hsla(var(--white-hsl),0);--image-block-poster-image-title-color:hsla(var(--white-hsl),1);--image-block-poster-inline-link-color:hsla(var(--white-hsl),1);--image-block-stack-image-button-bg-color:hsla(var(--safeDarkAccent-hsl),1);--image-block-stack-image-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--image-block-stack-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-stack-image-subtitle-color:hsla(var(--black-hsl),1);--image-block-stack-image-title-bg-color:hsla(var(--white-hsl),0);--image-block-stack-image-title-color:hsla(var(--black-hsl),1);--image-block-stack-inline-link-color:hsla(var(--black-hsl),1);--list-section-banner-slideshow-arrow-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-banner-slideshow-arrow-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-banner-slideshow-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-banner-slideshow-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-banner-slideshow-card-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-banner-slideshow-card-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-banner-slideshow-card-color:hsla(var(--lightAccent-hsl),1);--list-section-banner-slideshow-card-description-color:hsla(var(--black-hsl),1);--list-section-banner-slideshow-card-description-link-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-banner-slideshow-card-title-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-banner-slideshow-description-color:hsla(var(--black-hsl),1);--list-section-banner-slideshow-title-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-carousel-arrow-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-carousel-arrow-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-carousel-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-carousel-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-carousel-card-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-carousel-card-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-carousel-card-color:hsla(var(--lightAccent-hsl),1);--list-section-carousel-card-description-color:hsla(var(--black-hsl),1);--list-section-carousel-card-description-link-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-carousel-card-title-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-carousel-description-color:hsla(var(--black-hsl),1);--list-section-carousel-title-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-simple-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-simple-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-simple-card-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-simple-card-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-simple-card-color:hsla(var(--lightAccent-hsl),1);--list-section-simple-card-description-color:hsla(var(--black-hsl),1);--list-section-simple-card-description-link-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-simple-card-title-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-simple-description-color:hsla(var(--black-hsl),1);--list-section-simple-title-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-title-color:hsla(var(--safeDarkAccent-hsl),1);--menuOverlayBackgroundColor:hsla(var(--white-hsl),1);--menuOverlayButtonBackgroundColor:hsla(var(--safeDarkAccent-hsl),1);--menuOverlayButtonTextColor:hsla(var(--safeInverseDarkAccent-hsl),1);--menuOverlayNavigationLinkColor:hsla(var(--black-hsl),1);--navigationLinkColor:hsla(var(--black-hsl),1);--paragraphLargeColor:hsla(var(--black-hsl),1);--paragraphLinkColor:hsla(var(--safeDarkAccent-hsl),1);--paragraphMediumColor:hsla(var(--black-hsl),1);--paragraphSmallColor:hsla(var(--black-hsl),1);--portfolio-grid-basic-title-color:hsla(var(--safeDarkAccent-hsl),1);--portfolio-grid-overlay-overlay-color:hsla(var(--white-hsl),1);--portfolio-grid-overlay-title-color:hsla(var(--black-hsl),1);--portfolio-hover-follow-title-color:hsla(var(--safeDarkAccent-hsl),1);--portfolio-hover-static-title-color:hsla(var(--safeDarkAccent-hsl),1);--portfolio-index-background-title-color:hsla(var(--black-hsl),1);--primaryButtonBackgroundColor:hsla(var(--safeDarkAccent-hsl),1);--primaryButtonTextColor:hsla(var(--safeInverseDarkAccent-hsl),1);--secondaryButtonBackgroundColor:hsla(var(--safeDarkAccent-hsl),1);--secondaryButtonTextColor:hsla(var(--safeInverseDarkAccent-hsl),1);--section-divider-stroke-color:hsla(var(--safeDarkAccent-hsl),1);--section-inset-border-color:hsla(var(--white-hsl),1);--shape-block-background-color:hsla(var(--lightAccent-hsl),1);--shape-block-dropshadow-color:hsla(var(--lightAccent-hsl),1);--shape-block-stroke-color:hsla(var(--safeDarkAccent-hsl),1);--siteBackgroundColor:hsla(var(--white-hsl),1);--siteTitleColor:hsla(var(--safeDarkAccent-hsl),1);--social-links-block-main-icon-color:hsla(var(--black-hsl),1);--social-links-block-secondary-icon-color:hsla(var(--white-hsl),1);--solidHeaderBackgroundColor:hsla(var(--white-hsl),1);--solidHeaderBorderColor:hsla(var(--black-hsl),1);--solidHeaderDropShadowColor:hsla(var(--black-hsl),1);--solidHeaderNavigationColor:hsla(var(--black-hsl),1);--summary-block-limited-availability-label-color:hsla(var(--black-hsl),1);--tertiaryButtonBackgroundColor:hsla(var(--safeDarkAccent-hsl),1);--tertiaryButtonTextColor:hsla(var(--safeInverseDarkAccent-hsl),1);--text-highlight-color:hsla(var(--safeDarkAccent-hsl),1);--text-highlight-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-accordion-block-background-color:hsla(var(--lightAccent-hsl),1);--tweak-accordion-block-divider-color:hsla(var(--black-hsl),1);--tweak-accordion-block-divider-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-accordion-block-icon-color:hsla(var(--black-hsl),1);--tweak-accordion-block-icon-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-blog-alternating-side-by-side-list-excerpt-color:hsla(var(--black-hsl),1);--tweak-blog-alternating-side-by-side-list-meta-color:hsla(var(--black-hsl),1);--tweak-blog-alternating-side-by-side-list-read-more-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-blog-alternating-side-by-side-list-title-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-blog-basic-grid-list-excerpt-color:hsla(var(--black-hsl),1);--tweak-blog-basic-grid-list-meta-color:hsla(var(--black-hsl),1);--tweak-blog-basic-grid-list-read-more-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-blog-basic-grid-list-title-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-blog-item-author-profile-color:hsla(var(--black-hsl),1);--tweak-blog-item-comment-meta-color:hsla(var(--black-hsl),1);--tweak-blog-item-comment-text-color:hsla(var(--black-hsl),1);--tweak-blog-item-meta-color:hsla(var(--black-hsl),1);--tweak-blog-item-pagination-icon-color:hsla(var(--black-hsl),1);--tweak-blog-item-pagination-meta-color:hsla(var(--black-hsl),1);--tweak-blog-item-pagination-title-color:hsla(var(--black-hsl),1);--tweak-blog-item-title-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-blog-masonry-list-excerpt-color:hsla(var(--black-hsl),1);--tweak-blog-masonry-list-meta-color:hsla(var(--black-hsl),1);--tweak-blog-masonry-list-read-more-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-blog-masonry-list-title-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-blog-side-by-side-list-excerpt-color:hsla(var(--black-hsl),1);--tweak-blog-side-by-side-list-meta-color:hsla(var(--black-hsl),1);--tweak-blog-side-by-side-list-read-more-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-blog-side-by-side-list-title-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-blog-single-column-list-excerpt-color:hsla(var(--black-hsl),1);--tweak-blog-single-column-list-meta-color:hsla(var(--black-hsl),1);--tweak-blog-single-column-list-read-more-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-blog-single-column-list-title-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-content-link-block-title-color:hsla(var(--black-hsl),1);--tweak-events-item-pagination-date-color:hsla(var(--black-hsl),1);--tweak-events-item-pagination-icon-color:hsla(var(--black-hsl),1);--tweak-events-item-pagination-title-color:hsla(var(--black-hsl),1);--tweak-form-block-background-color:hsla(var(--lightAccent-hsl),1);--tweak-form-block-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-form-block-button-background-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-form-block-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--tweak-form-block-button-text-color-on-background:hsla(var(--safeInverseDarkAccent-hsl),1);--tweak-form-block-caption-color:hsla(var(--black-hsl),1);--tweak-form-block-caption-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-form-block-description-color:hsla(var(--black-hsl),1);--tweak-form-block-description-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-form-block-option-color:hsla(var(--black-hsl),1);--tweak-form-block-option-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-form-block-survey-title-color:hsla(var(--black-hsl),1);--tweak-form-block-survey-title-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-form-block-title-color:hsla(var(--black-hsl),1);--tweak-form-block-title-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-form-block-field-fill-color:hsla(var(--lightAccent-hsl),1);--tweak-form-block-field-fill-color-hsl:var(--lightAccent-hsl);--tweak-form-block-field-fill-color-a:1;--tweak-form-block-field-border-color:hsla(var(--black-hsl),1);--tweak-form-block-field-border-color-hsl:var(--black-hsl);--tweak-form-block-field-border-color-a:1;--tweak-form-block-field-input-color:hsla(var(--black-hsl),1);--tweak-form-block-field-input-color-hsl:var(--black-hsl);--tweak-form-block-field-input-color-a:1;--tweak-form-block-field-accessory-color:hsla(var(--black-hsl),1);--tweak-form-block-field-fill-color-on-background:hsla(var(--white-hsl),1);--tweak-form-block-field-fill-color-on-background-hsl:var(--white-hsl);--tweak-form-block-field-fill-color-on-background-a:1;--tweak-form-block-field-border-color-on-background:hsla(var(--black-hsl),1);--tweak-form-block-field-border-color-on-background-hsl:var(--black-hsl);--tweak-form-block-field-border-color-on-background-a:1;--tweak-form-block-field-input-color-on-background:hsla(var(--black-hsl),1);--tweak-form-block-field-input-color-on-background-hsl:var(--black-hsl);--tweak-form-block-field-input-color-on-background-a:1;--tweak-form-block-field-accessory-color-on-background:hsla(var(--black-hsl),1);--tweak-gallery-icon-background-color:hsla(var(--white-hsl),1);--tweak-gallery-icon-color:hsla(var(--black-hsl),1);--tweak-gallery-lightbox-background-color:hsla(var(--white-hsl),1);--tweak-gallery-lightbox-icon-color:hsla(var(--black-hsl),1);--tweak-heading-extra-large-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-heading-large-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-heading-medium-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-heading-small-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-line-block-line-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-marquee-block-background-color:hsla(var(--lightAccent-hsl),1);--tweak-marquee-block-heading-color:hsla(var(--black-hsl),1);--tweak-marquee-block-heading-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-marquee-block-paragraph-color:hsla(var(--black-hsl),1);--tweak-marquee-block-paragraph-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-menu-block-item-description-color:hsla(var(--black-hsl),1);--tweak-menu-block-item-price-color:hsla(var(--black-hsl),1);--tweak-menu-block-item-title-color:hsla(var(--black-hsl),1);--tweak-menu-block-nav-color:hsla(var(--black-hsl),1);--tweak-menu-block-title-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-newsletter-block-background-color:hsla(var(--lightAccent-hsl),1);--tweak-newsletter-block-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-newsletter-block-button-background-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-newsletter-block-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--tweak-newsletter-block-button-text-color-on-background:hsla(var(--safeInverseDarkAccent-hsl),1);--tweak-newsletter-block-description-color:hsla(var(--black-hsl),1);--tweak-newsletter-block-description-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-newsletter-block-footnote-color:hsla(var(--black-hsl),1);--tweak-newsletter-block-footnote-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-newsletter-block-title-color:hsla(var(--black-hsl),1);--tweak-newsletter-block-title-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-paragraph-large-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-paragraph-link-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-paragraph-medium-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-paragraph-small-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-portfolio-item-pagination-icon-color:hsla(var(--black-hsl),1);--tweak-portfolio-item-pagination-meta-color:hsla(var(--black-hsl),1);--tweak-portfolio-item-pagination-title-color:hsla(var(--black-hsl),1);--tweak-product-basic-item-breadcumb-nav-color:hsla(var(--black-hsl),1);--tweak-product-basic-item-description-color:hsla(var(--black-hsl),1);--tweak-product-basic-item-gallery-controls-color:hsla(var(--safeInverseLightAccent-hsl),1);--tweak-product-basic-item-price-color:hsla(var(--black-hsl),1);--tweak-product-basic-item-sale-price-color:hsla(var(--accent-hsl),1);--tweak-product-basic-item-scarcity-color:hsla(var(--accent-hsl),1);--tweak-product-basic-item-title-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-product-basic-item-variant-fields-color:hsla(var(--black-hsl),1);--tweak-product-grid-text-below-list-category-nav-color:hsla(var(--black-hsl),1);--tweak-product-grid-text-below-list-pagination-color:hsla(var(--black-hsl),1);--tweak-product-grid-text-below-list-price-color:hsla(var(--black-hsl),1);--tweak-product-grid-text-below-list-sale-price-color:hsla(var(--accent-hsl),1);--tweak-product-grid-text-below-list-scarcity-color:hsla(var(--black-hsl),1);--tweak-product-grid-text-below-list-status-color:hsla(var(--accent-hsl),1);--tweak-product-grid-text-below-list-title-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-product-quick-view-button-color:hsla(var(--black-hsl),1);--tweak-product-quick-view-lightbox-controls-color:hsla(var(--black-hsl),1);--tweak-product-quick-view-lightbox-overlay-color:hsla(var(--white-hsl),1);--tweak-quote-block-background-color:hsla(var(--lightAccent-hsl),1);--tweak-quote-block-source-color:hsla(var(--black-hsl),1);--tweak-quote-block-source-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-quote-block-text-color:hsla(var(--black-hsl),1);--tweak-quote-block-text-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-summary-block-background-color:hsla(var(--lightAccent-hsl),1);--tweak-summary-block-excerpt-color:hsla(var(--black-hsl),1);--tweak-summary-block-excerpt-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-summary-block-header-text-color:hsla(var(--black-hsl),1);--tweak-summary-block-header-text-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-summary-block-primary-metadata-color:hsla(var(--black-hsl),1);--tweak-summary-block-primary-metadata-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-summary-block-read-more-color:hsla(var(--black-hsl),1);--tweak-summary-block-read-more-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-summary-block-secondary-metadata-color:hsla(var(--black-hsl),1);--tweak-summary-block-secondary-metadata-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-summary-block-title-color:hsla(var(--black-hsl),1);--tweak-summary-block-title-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-text-block-background-color:hsla(var(--lightAccent-hsl),1);--tweak-video-item-description-color:hsla(var(--accent-hsl),1);--tweak-video-item-meta-color:hsla(var(--accent-hsl),1);--tweak-video-item-pagination-icon-color:hsla(var(--accent-hsl),1);--tweak-video-item-pagination-title-color:hsla(var(--accent-hsl),1);--tweak-video-item-title-color:hsla(var(--accent-hsl),1);--video-grid-basic-description-color:hsla(var(--accent-hsl),1);--video-grid-basic-meta-color:hsla(var(--accent-hsl),1);--video-grid-basic-title-color:hsla(var(--accent-hsl),1);--video-grid-category-nav-color:hsla(var(--accent-hsl),1);}.light {--announcement-bar-background-color:hsla(var(--darkAccent-hsl),1);--announcement-bar-text-color:hsla(var(--white-hsl),1);--backgroundOverlayColor:hsla(var(--lightAccent-hsl),1);--course-item-nav-active-lesson-background-color:hsla(var(--darkAccent-hsl),1);--course-item-nav-active-lesson-text-color:hsla(var(--white-hsl),1);--course-item-nav-background-color:hsla(var(--white-hsl),1);--course-item-nav-border-color:hsla(var(--black-hsl),0.25);--course-item-nav-text-color:hsla(var(--black-hsl),1);--course-list-course-progress-bar-color:hsla(var(--accent-hsl),1);--course-list-course-item-background:hsla(var(--white-hsl),1);--course-list-course-item-hover-background:hsla(var(--white-hsl),0.75);--course-list-course-item-text-color:hsla(var(--black-hsl),1);--course-list-course-chapter-divider-color:hsla(var(--accent-hsl),1);--course-list-grid-layout-chapter-divider-color:hsla(var(--black-hsl),1);--course-list-grid-layout-course-item-background-color:hsla(var(--white-hsl),1);--course-list-grid-layout-course-item-hover-background-color:hsla(var(--white-hsl),0.75);--course-list-grid-layout-course-item-text-color:hsla(var(--black-hsl),1);--course-list-grid-layout-course-item-border-color:hsla(var(--accent-hsl),1);--gradientHeaderBackgroundColor:hsla(var(--white-hsl),1);--gradientHeaderBorderColor:hsla(var(--black-hsl),1);--gradientHeaderDropShadowColor:hsla(var(--black-hsl),1);--gradientHeaderNavigationColor:hsla(var(--black-hsl),1);--headerDropShadowColor:hsla(var(--black-hsl),1);--headerBorderColor:hsla(var(--black-hsl),1);--headingExtraLargeColor:hsla(var(--black-hsl),1);--headingLargeColor:hsla(var(--black-hsl),1);--headingLinkColor:hsla(var(--safeDarkAccent-hsl),1);--headingMediumColor:hsla(var(--black-hsl),1);--headingSmallColor:hsla(var(--black-hsl),1);--image-block-card-image-button-bg-color:hsla(var(--safeDarkAccent-hsl),1);--image-block-card-image-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--image-block-card-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-card-image-subtitle-color:hsla(var(--black-hsl),1);--image-block-card-image-title-bg-color:hsla(var(--lightAccent-hsl),0);--image-block-card-image-title-color:hsla(var(--black-hsl),1);--image-block-card-inline-link-color:hsla(var(--black-hsl),1);--image-block-collage-background-color:hsla(var(--white-hsl),1);--image-block-collage-image-button-bg-color:hsla(var(--safeDarkAccent-hsl),1);--image-block-collage-image-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--image-block-collage-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-collage-image-subtitle-color:hsla(var(--black-hsl),1);--image-block-collage-image-title-bg-color:hsla(var(--lightAccent-hsl),0);--image-block-collage-image-title-color:hsla(var(--black-hsl),1);--image-block-collage-inline-link-color:hsla(var(--black-hsl),1);--image-block-overlap-image-button-bg-color:hsla(var(--safeDarkAccent-hsl),1);--image-block-overlap-image-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--image-block-overlap-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-overlap-image-subtitle-color:hsla(var(--black-hsl),1);--image-block-overlap-image-title-bg-color:hsla(var(--lightAccent-hsl),1);--image-block-overlap-image-title-color:hsla(var(--black-hsl),1);--image-block-overlap-inline-link-color:hsla(var(--black-hsl),1);--image-block-overlay-color:hsla(var(--black-hsl),0.5);--image-block-poster-image-button-bg-color:hsla(var(--safeDarkAccent-hsl),1);--image-block-poster-image-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--image-block-poster-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-poster-image-subtitle-color:hsla(var(--white-hsl),1);--image-block-poster-image-title-bg-color-v2:hsla(var(--lightAccent-hsl),0);--image-block-poster-image-title-color:hsla(var(--white-hsl),1);--image-block-poster-inline-link-color:hsla(var(--white-hsl),1);--image-block-stack-image-button-bg-color:hsla(var(--safeDarkAccent-hsl),1);--image-block-stack-image-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--image-block-stack-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-stack-image-subtitle-color:hsla(var(--black-hsl),1);--image-block-stack-image-title-bg-color:hsla(var(--lightAccent-hsl),0);--image-block-stack-image-title-color:hsla(var(--black-hsl),1);--image-block-stack-inline-link-color:hsla(var(--black-hsl),1);--list-section-banner-slideshow-arrow-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-banner-slideshow-arrow-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-banner-slideshow-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-banner-slideshow-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-banner-slideshow-card-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-banner-slideshow-card-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-banner-slideshow-card-color:hsla(var(--white-hsl),1);--list-section-banner-slideshow-card-description-color:hsla(var(--black-hsl),1);--list-section-banner-slideshow-card-description-link-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-banner-slideshow-card-title-color:hsla(var(--black-hsl),1);--list-section-banner-slideshow-description-color:hsla(var(--black-hsl),1);--list-section-banner-slideshow-title-color:hsla(var(--black-hsl),1);--list-section-carousel-arrow-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-carousel-arrow-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-carousel-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-carousel-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-carousel-card-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-carousel-card-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-carousel-card-color:hsla(var(--white-hsl),1);--list-section-carousel-card-description-color:hsla(var(--black-hsl),1);--list-section-carousel-card-description-link-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-carousel-card-title-color:hsla(var(--black-hsl),1);--list-section-carousel-description-color:hsla(var(--black-hsl),1);--list-section-carousel-title-color:hsla(var(--black-hsl),1);--list-section-simple-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-simple-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-simple-card-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-simple-card-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-simple-card-color:hsla(var(--white-hsl),1);--list-section-simple-card-description-color:hsla(var(--black-hsl),1);--list-section-simple-card-description-link-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-simple-card-title-color:hsla(var(--black-hsl),1);--list-section-simple-description-color:hsla(var(--black-hsl),1);--list-section-simple-title-color:hsla(var(--black-hsl),1);--list-section-title-color:hsla(var(--black-hsl),1);--menuOverlayBackgroundColor:hsla(var(--lightAccent-hsl),1);--menuOverlayButtonBackgroundColor:hsla(var(--safeDarkAccent-hsl),1);--menuOverlayButtonTextColor:hsla(var(--safeInverseDarkAccent-hsl),1);--menuOverlayNavigationLinkColor:hsla(var(--black-hsl),1);--navigationLinkColor:hsla(var(--black-hsl),1);--paragraphLargeColor:hsla(var(--black-hsl),1);--paragraphLinkColor:hsla(var(--safeDarkAccent-hsl),1);--paragraphMediumColor:hsla(var(--black-hsl),1);--paragraphSmallColor:hsla(var(--black-hsl),1);--portfolio-grid-basic-title-color:hsla(var(--black-hsl),1);--portfolio-grid-overlay-overlay-color:hsla(var(--lightAccent-hsl),1);--portfolio-grid-overlay-title-color:hsla(var(--black-hsl),1);--portfolio-hover-follow-title-color:hsla(var(--black-hsl),1);--portfolio-hover-static-title-color:hsla(var(--black-hsl),1);--portfolio-index-background-title-color:hsla(var(--black-hsl),1);--primaryButtonBackgroundColor:hsla(var(--safeDarkAccent-hsl),1);--primaryButtonTextColor:hsla(var(--safeInverseDarkAccent-hsl),1);--secondaryButtonBackgroundColor:hsla(var(--safeDarkAccent-hsl),1);--secondaryButtonTextColor:hsla(var(--safeInverseDarkAccent-hsl),1);--section-divider-stroke-color:hsla(var(--safeDarkAccent-hsl),1);--section-inset-border-color:hsla(var(--lightAccent-hsl),1);--shape-block-background-color:hsla(var(--white-hsl),1);--shape-block-dropshadow-color:hsla(var(--white-hsl),1);--shape-block-stroke-color:hsla(var(--safeDarkAccent-hsl),1);--siteBackgroundColor:hsla(var(--lightAccent-hsl),1);--siteTitleColor:hsla(var(--black-hsl),1);--social-links-block-main-icon-color:hsla(var(--black-hsl),1);--social-links-block-secondary-icon-color:hsla(var(--lightAccent-hsl),1);--solidHeaderBackgroundColor:hsla(var(--white-hsl),1);--solidHeaderBorderColor:hsla(var(--black-hsl),1);--solidHeaderDropShadowColor:hsla(var(--black-hsl),1);--solidHeaderNavigationColor:hsla(var(--black-hsl),1);--summary-block-limited-availability-label-color:hsla(var(--black-hsl),1);--tertiaryButtonBackgroundColor:hsla(var(--safeDarkAccent-hsl),1);--tertiaryButtonTextColor:hsla(var(--safeInverseDarkAccent-hsl),1);--text-highlight-color:hsla(var(--safeDarkAccent-hsl),1);--text-highlight-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-accordion-block-background-color:hsla(var(--white-hsl),1);--tweak-accordion-block-divider-color:hsla(var(--black-hsl),1);--tweak-accordion-block-divider-color-on-background:hsla(var(--black-hsl),1);--tweak-accordion-block-icon-color:hsla(var(--black-hsl),1);--tweak-accordion-block-icon-color-on-background:hsla(var(--black-hsl),1);--tweak-blog-alternating-side-by-side-list-excerpt-color:hsla(var(--black-hsl),1);--tweak-blog-alternating-side-by-side-list-meta-color:hsla(var(--black-hsl),1);--tweak-blog-alternating-side-by-side-list-read-more-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-blog-alternating-side-by-side-list-title-color:hsla(var(--black-hsl),1);--tweak-blog-basic-grid-list-excerpt-color:hsla(var(--black-hsl),1);--tweak-blog-basic-grid-list-meta-color:hsla(var(--black-hsl),1);--tweak-blog-basic-grid-list-read-more-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-blog-basic-grid-list-title-color:hsla(var(--black-hsl),1);--tweak-blog-item-author-profile-color:hsla(var(--black-hsl),1);--tweak-blog-item-comment-meta-color:hsla(var(--black-hsl),1);--tweak-blog-item-comment-text-color:hsla(var(--black-hsl),1);--tweak-blog-item-meta-color:hsla(var(--black-hsl),1);--tweak-blog-item-pagination-icon-color:hsla(var(--black-hsl),1);--tweak-blog-item-pagination-meta-color:hsla(var(--black-hsl),1);--tweak-blog-item-pagination-title-color:hsla(var(--black-hsl),1);--tweak-blog-item-title-color:hsla(var(--black-hsl),1);--tweak-blog-masonry-list-excerpt-color:hsla(var(--black-hsl),1);--tweak-blog-masonry-list-meta-color:hsla(var(--black-hsl),1);--tweak-blog-masonry-list-read-more-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-blog-masonry-list-title-color:hsla(var(--black-hsl),1);--tweak-blog-side-by-side-list-excerpt-color:hsla(var(--black-hsl),1);--tweak-blog-side-by-side-list-meta-color:hsla(var(--black-hsl),1);--tweak-blog-side-by-side-list-read-more-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-blog-side-by-side-list-title-color:hsla(var(--black-hsl),1);--tweak-blog-single-column-list-excerpt-color:hsla(var(--black-hsl),1);--tweak-blog-single-column-list-meta-color:hsla(var(--black-hsl),1);--tweak-blog-single-column-list-read-more-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-blog-single-column-list-title-color:hsla(var(--black-hsl),1);--tweak-content-link-block-title-color:hsla(var(--black-hsl),1);--tweak-events-item-pagination-date-color:hsla(var(--black-hsl),1);--tweak-events-item-pagination-icon-color:hsla(var(--black-hsl),1);--tweak-events-item-pagination-title-color:hsla(var(--black-hsl),1);--tweak-form-block-background-color:hsla(var(--white-hsl),1);--tweak-form-block-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-form-block-button-background-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-form-block-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--tweak-form-block-button-text-color-on-background:hsla(var(--safeInverseDarkAccent-hsl),1);--tweak-form-block-caption-color:hsla(var(--black-hsl),1);--tweak-form-block-caption-color-on-background:hsla(var(--black-hsl),1);--tweak-form-block-description-color:hsla(var(--black-hsl),1);--tweak-form-block-description-color-on-background:hsla(var(--black-hsl),1);--tweak-form-block-option-color:hsla(var(--black-hsl),1);--tweak-form-block-option-color-on-background:hsla(var(--black-hsl),1);--tweak-form-block-survey-title-color:hsla(var(--black-hsl),1);--tweak-form-block-survey-title-color-on-background:hsla(var(--black-hsl),1);--tweak-form-block-title-color:hsla(var(--black-hsl),1);--tweak-form-block-title-color-on-background:hsla(var(--black-hsl),1);--tweak-form-block-field-fill-color:hsla(var(--white-hsl),1);--tweak-form-block-field-fill-color-hsl:var(--white-hsl);--tweak-form-block-field-fill-color-a:1;--tweak-form-block-field-border-color:hsla(var(--black-hsl),1);--tweak-form-block-field-border-color-hsl:var(--black-hsl);--tweak-form-block-field-border-color-a:1;--tweak-form-block-field-input-color:hsla(var(--black-hsl),1);--tweak-form-block-field-input-color-hsl:var(--black-hsl);--tweak-form-block-field-input-color-a:1;--tweak-form-block-field-accessory-color:hsla(var(--black-hsl),1);--tweak-form-block-field-fill-color-on-background:hsla(var(--lightAccent-hsl),1);--tweak-form-block-field-fill-color-on-background-hsl:var(--lightAccent-hsl);--tweak-form-block-field-fill-color-on-background-a:1;--tweak-form-block-field-border-color-on-background:hsla(var(--black-hsl),1);--tweak-form-block-field-border-color-on-background-hsl:var(--black-hsl);--tweak-form-block-field-border-color-on-background-a:1;--tweak-form-block-field-input-color-on-background:hsla(var(--black-hsl),1);--tweak-form-block-field-input-color-on-background-hsl:var(--black-hsl);--tweak-form-block-field-input-color-on-background-a:1;--tweak-form-block-field-accessory-color-on-background:hsla(var(--black-hsl),1);--tweak-gallery-icon-background-color:hsla(var(--lightAccent-hsl),1);--tweak-gallery-icon-color:hsla(var(--black-hsl),1);--tweak-gallery-lightbox-background-color:hsla(var(--lightAccent-hsl),1);--tweak-gallery-lightbox-icon-color:hsla(var(--black-hsl),1);--tweak-heading-extra-large-color-on-background:hsla(var(--black-hsl),1);--tweak-heading-large-color-on-background:hsla(var(--black-hsl),1);--tweak-heading-medium-color-on-background:hsla(var(--black-hsl),1);--tweak-heading-small-color-on-background:hsla(var(--black-hsl),1);--tweak-line-block-line-color:hsla(var(--black-hsl),1);--tweak-marquee-block-background-color:hsla(var(--white-hsl),1);--tweak-marquee-block-heading-color:hsla(var(--black-hsl),1);--tweak-marquee-block-heading-color-on-background:hsla(var(--black-hsl),1);--tweak-marquee-block-paragraph-color:hsla(var(--black-hsl),1);--tweak-marquee-block-paragraph-color-on-background:hsla(var(--black-hsl),1);--tweak-menu-block-item-description-color:hsla(var(--black-hsl),1);--tweak-menu-block-item-price-color:hsla(var(--black-hsl),1);--tweak-menu-block-item-title-color:hsla(var(--black-hsl),1);--tweak-menu-block-nav-color:hsla(var(--black-hsl),1);--tweak-menu-block-title-color:hsla(var(--black-hsl),1);--tweak-newsletter-block-background-color:hsla(var(--white-hsl),1);--tweak-newsletter-block-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-newsletter-block-button-background-color-on-background:hsla(var(--black-hsl),1);--tweak-newsletter-block-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--tweak-newsletter-block-button-text-color-on-background:hsla(var(--safeInverseDarkAccent-hsl),1);--tweak-newsletter-block-description-color:hsla(var(--black-hsl),1);--tweak-newsletter-block-description-color-on-background:hsla(var(--black-hsl),1);--tweak-newsletter-block-footnote-color:hsla(var(--black-hsl),1);--tweak-newsletter-block-footnote-color-on-background:hsla(var(--black-hsl),1);--tweak-newsletter-block-title-color:hsla(var(--black-hsl),1);--tweak-newsletter-block-title-color-on-background:hsla(var(--black-hsl),1);--tweak-paragraph-large-color-on-background:hsla(var(--black-hsl),1);--tweak-paragraph-link-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-paragraph-medium-color-on-background:hsla(var(--black-hsl),1);--tweak-paragraph-small-color-on-background:hsla(var(--black-hsl),1);--tweak-portfolio-item-pagination-icon-color:hsla(var(--black-hsl),1);--tweak-portfolio-item-pagination-meta-color:hsla(var(--black-hsl),1);--tweak-portfolio-item-pagination-title-color:hsla(var(--black-hsl),1);--tweak-product-basic-item-breadcumb-nav-color:hsla(var(--black-hsl),1);--tweak-product-basic-item-description-color:hsla(var(--black-hsl),1);--tweak-product-basic-item-gallery-controls-color:hsla(var(--safeInverseLightAccent-hsl),1);--tweak-product-basic-item-price-color:hsla(var(--black-hsl),1);--tweak-product-basic-item-sale-price-color:hsla(var(--accent-hsl),1);--tweak-product-basic-item-scarcity-color:hsla(var(--accent-hsl),1);--tweak-product-basic-item-title-color:hsla(var(--black-hsl),1);--tweak-product-basic-item-variant-fields-color:hsla(var(--black-hsl),1);--tweak-product-grid-text-below-list-category-nav-color:hsla(var(--black-hsl),1);--tweak-product-grid-text-below-list-pagination-color:hsla(var(--black-hsl),1);--tweak-product-grid-text-below-list-price-color:hsla(var(--black-hsl),1);--tweak-product-grid-text-below-list-sale-price-color:hsla(var(--accent-hsl),1);--tweak-product-grid-text-below-list-scarcity-color:hsla(var(--black-hsl),1);--tweak-product-grid-text-below-list-status-color:hsla(var(--accent-hsl),1);--tweak-product-grid-text-below-list-title-color:hsla(var(--black-hsl),1);--tweak-product-quick-view-button-color:hsla(var(--black-hsl),1);--tweak-product-quick-view-lightbox-controls-color:hsla(var(--black-hsl),1);--tweak-product-quick-view-lightbox-overlay-color:hsla(var(--white-hsl),1);--tweak-quote-block-background-color:hsla(var(--white-hsl),1);--tweak-quote-block-source-color:hsla(var(--black-hsl),1);--tweak-quote-block-source-color-on-background:hsla(var(--black-hsl),1);--tweak-quote-block-text-color:hsla(var(--black-hsl),1);--tweak-quote-block-text-color-on-background:hsla(var(--black-hsl),1);--tweak-summary-block-background-color:hsla(var(--white-hsl),1);--tweak-summary-block-excerpt-color:hsla(var(--black-hsl),1);--tweak-summary-block-excerpt-color-on-background:hsla(var(--black-hsl),1);--tweak-summary-block-header-text-color:hsla(var(--black-hsl),1);--tweak-summary-block-header-text-color-on-background:hsla(var(--black-hsl),1);--tweak-summary-block-primary-metadata-color:hsla(var(--black-hsl),1);--tweak-summary-block-primary-metadata-color-on-background:hsla(var(--black-hsl),1);--tweak-summary-block-read-more-color:hsla(var(--black-hsl),1);--tweak-summary-block-read-more-color-on-background:hsla(var(--black-hsl),1);--tweak-summary-block-secondary-metadata-color:hsla(var(--black-hsl),1);--tweak-summary-block-secondary-metadata-color-on-background:hsla(var(--black-hsl),1);--tweak-summary-block-title-color:hsla(var(--black-hsl),1);--tweak-summary-block-title-color-on-background:hsla(var(--black-hsl),1);--tweak-text-block-background-color:hsla(var(--white-hsl),1);--tweak-video-item-description-color:hsla(var(--black-hsl),1);--tweak-video-item-meta-color:hsla(var(--black-hsl),1);--tweak-video-item-pagination-icon-color:hsla(var(--black-hsl),1);--tweak-video-item-pagination-title-color:hsla(var(--black-hsl),1);--tweak-video-item-title-color:hsla(var(--black-hsl),1);--video-grid-basic-description-color:hsla(var(--black-hsl),1);--video-grid-basic-meta-color:hsla(var(--black-hsl),1);--video-grid-basic-title-color:hsla(var(--black-hsl),1);--video-grid-category-nav-color:hsla(var(--black-hsl),1);}.light-bold {--announcement-bar-background-color:hsla(var(--accent-hsl),1);--announcement-bar-text-color:hsla(var(--safeInverseAccent-hsl),1);--backgroundOverlayColor:hsla(var(--lightAccent-hsl),1);--course-item-nav-active-lesson-background-color:hsla(var(--darkAccent-hsl),1);--course-item-nav-active-lesson-text-color:hsla(var(--white-hsl),1);--course-item-nav-background-color:hsla(var(--white-hsl),1);--course-item-nav-border-color:hsla(var(--black-hsl),0.25);--course-item-nav-text-color:hsla(var(--black-hsl),1);--course-list-course-progress-bar-color:hsla(var(--darkAccent-hsl),1);--course-list-course-item-background:hsla(var(--white-hsl),1);--course-list-course-item-hover-background:hsla(var(--white-hsl),0.75);--course-list-course-item-text-color:hsla(var(--black-hsl),1);--course-list-course-chapter-divider-color:hsla(var(--accent-hsl),1);--course-list-grid-layout-chapter-divider-color:hsla(var(--safeDarkAccent-hsl),1);--course-list-grid-layout-course-item-background-color:hsla(var(--white-hsl),1);--course-list-grid-layout-course-item-hover-background-color:hsla(var(--white-hsl),0.75);--course-list-grid-layout-course-item-text-color:hsla(var(--black-hsl),1);--course-list-grid-layout-course-item-border-color:hsla(var(--accent-hsl),1);--gradientHeaderBackgroundColor:hsla(var(--white-hsl),1);--gradientHeaderBorderColor:hsla(var(--black-hsl),1);--gradientHeaderDropShadowColor:hsla(var(--black-hsl),1);--gradientHeaderNavigationColor:hsla(var(--black-hsl),1);--headerDropShadowColor:hsla(var(--black-hsl),1);--headerBorderColor:hsla(var(--black-hsl),1);--headingExtraLargeColor:hsla(var(--safeDarkAccent-hsl),1);--headingLargeColor:hsla(var(--safeDarkAccent-hsl),1);--headingLinkColor:hsla(var(--safeDarkAccent-hsl),1);--headingMediumColor:hsla(var(--safeDarkAccent-hsl),1);--headingSmallColor:hsla(var(--safeDarkAccent-hsl),1);--image-block-card-image-button-bg-color:hsla(var(--safeDarkAccent-hsl),1);--image-block-card-image-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--image-block-card-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-card-image-subtitle-color:hsla(var(--black-hsl),1);--image-block-card-image-title-bg-color:hsla(var(--lightAccent-hsl),0);--image-block-card-image-title-color:hsla(var(--black-hsl),1);--image-block-card-inline-link-color:hsla(var(--black-hsl),1);--image-block-collage-background-color:hsla(var(--white-hsl),1);--image-block-collage-image-button-bg-color:hsla(var(--safeDarkAccent-hsl),1);--image-block-collage-image-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--image-block-collage-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-collage-image-subtitle-color:hsla(var(--safeDarkAccent-hsl),1);--image-block-collage-image-title-bg-color:hsla(var(--lightAccent-hsl),0);--image-block-collage-image-title-color:hsla(var(--safeDarkAccent-hsl),1);--image-block-collage-inline-link-color:hsla(var(--safeDarkAccent-hsl),1);--image-block-overlap-image-button-bg-color:hsla(var(--safeDarkAccent-hsl),1);--image-block-overlap-image-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--image-block-overlap-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-overlap-image-subtitle-color:hsla(var(--black-hsl),1);--image-block-overlap-image-title-bg-color:hsla(var(--lightAccent-hsl),1);--image-block-overlap-image-title-color:hsla(var(--black-hsl),1);--image-block-overlap-inline-link-color:hsla(var(--black-hsl),1);--image-block-overlay-color:hsla(var(--black-hsl),0.5);--image-block-poster-image-button-bg-color:hsla(var(--safeDarkAccent-hsl),1);--image-block-poster-image-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--image-block-poster-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-poster-image-subtitle-color:hsla(var(--white-hsl),1);--image-block-poster-image-title-bg-color-v2:hsla(var(--lightAccent-hsl),0);--image-block-poster-image-title-color:hsla(var(--white-hsl),1);--image-block-poster-inline-link-color:hsla(var(--white-hsl),1);--image-block-stack-image-button-bg-color:hsla(var(--safeDarkAccent-hsl),1);--image-block-stack-image-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--image-block-stack-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-stack-image-subtitle-color:hsla(var(--black-hsl),1);--image-block-stack-image-title-bg-color:hsla(var(--lightAccent-hsl),0);--image-block-stack-image-title-color:hsla(var(--black-hsl),1);--image-block-stack-inline-link-color:hsla(var(--black-hsl),1);--list-section-banner-slideshow-arrow-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-banner-slideshow-arrow-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-banner-slideshow-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-banner-slideshow-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-banner-slideshow-card-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-banner-slideshow-card-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-banner-slideshow-card-color:hsla(var(--white-hsl),1);--list-section-banner-slideshow-card-description-color:hsla(var(--black-hsl),1);--list-section-banner-slideshow-card-description-link-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-banner-slideshow-card-title-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-banner-slideshow-description-color:hsla(var(--black-hsl),1);--list-section-banner-slideshow-title-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-carousel-arrow-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-carousel-arrow-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-carousel-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-carousel-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-carousel-card-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-carousel-card-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-carousel-card-color:hsla(var(--white-hsl),1);--list-section-carousel-card-description-color:hsla(var(--black-hsl),1);--list-section-carousel-card-description-link-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-carousel-card-title-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-carousel-description-color:hsla(var(--black-hsl),1);--list-section-carousel-title-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-simple-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-simple-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-simple-card-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-simple-card-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-simple-card-color:hsla(var(--white-hsl),1);--list-section-simple-card-description-color:hsla(var(--black-hsl),1);--list-section-simple-card-description-link-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-simple-card-title-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-simple-description-color:hsla(var(--black-hsl),1);--list-section-simple-title-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-title-color:hsla(var(--safeDarkAccent-hsl),1);--menuOverlayBackgroundColor:hsla(var(--lightAccent-hsl),1);--menuOverlayButtonBackgroundColor:hsla(var(--safeDarkAccent-hsl),1);--menuOverlayButtonTextColor:hsla(var(--safeInverseDarkAccent-hsl),1);--menuOverlayNavigationLinkColor:hsla(var(--black-hsl),1);--navigationLinkColor:hsla(var(--black-hsl),1);--paragraphLargeColor:hsla(var(--black-hsl),1);--paragraphLinkColor:hsla(var(--safeDarkAccent-hsl),1);--paragraphMediumColor:hsla(var(--black-hsl),1);--paragraphSmallColor:hsla(var(--black-hsl),1);--portfolio-grid-basic-title-color:hsla(var(--safeDarkAccent-hsl),1);--portfolio-grid-overlay-overlay-color:hsla(var(--lightAccent-hsl),1);--portfolio-grid-overlay-title-color:hsla(var(--black-hsl),1);--portfolio-hover-follow-title-color:hsla(var(--safeDarkAccent-hsl),1);--portfolio-hover-static-title-color:hsla(var(--safeDarkAccent-hsl),1);--portfolio-index-background-title-color:hsla(var(--black-hsl),1);--primaryButtonBackgroundColor:hsla(var(--safeDarkAccent-hsl),1);--primaryButtonTextColor:hsla(var(--safeInverseDarkAccent-hsl),1);--secondaryButtonBackgroundColor:hsla(var(--safeDarkAccent-hsl),1);--secondaryButtonTextColor:hsla(var(--safeInverseDarkAccent-hsl),1);--section-divider-stroke-color:hsla(var(--safeDarkAccent-hsl),1);--section-inset-border-color:hsla(var(--lightAccent-hsl),1);--shape-block-background-color:hsla(var(--white-hsl),1);--shape-block-dropshadow-color:hsla(var(--white-hsl),1);--shape-block-stroke-color:hsla(var(--safeDarkAccent-hsl),1);--siteBackgroundColor:hsla(var(--lightAccent-hsl),1);--siteTitleColor:hsla(var(--safeDarkAccent-hsl),1);--social-links-block-main-icon-color:hsla(var(--black-hsl),1);--social-links-block-secondary-icon-color:hsla(var(--lightAccent-hsl),1);--solidHeaderBackgroundColor:hsla(var(--white-hsl),1);--solidHeaderBorderColor:hsla(var(--black-hsl),1);--solidHeaderDropShadowColor:hsla(var(--black-hsl),1);--solidHeaderNavigationColor:hsla(var(--black-hsl),1);--summary-block-limited-availability-label-color:hsla(var(--black-hsl),1);--tertiaryButtonBackgroundColor:hsla(var(--safeDarkAccent-hsl),1);--tertiaryButtonTextColor:hsla(var(--safeInverseDarkAccent-hsl),1);--text-highlight-color:hsla(var(--safeDarkAccent-hsl),1);--text-highlight-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-accordion-block-background-color:hsla(var(--white-hsl),1);--tweak-accordion-block-divider-color:hsla(var(--black-hsl),1);--tweak-accordion-block-divider-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-accordion-block-icon-color:hsla(var(--black-hsl),1);--tweak-accordion-block-icon-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-blog-alternating-side-by-side-list-excerpt-color:hsla(var(--black-hsl),1);--tweak-blog-alternating-side-by-side-list-meta-color:hsla(var(--black-hsl),1);--tweak-blog-alternating-side-by-side-list-read-more-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-blog-alternating-side-by-side-list-title-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-blog-basic-grid-list-excerpt-color:hsla(var(--black-hsl),1);--tweak-blog-basic-grid-list-meta-color:hsla(var(--black-hsl),1);--tweak-blog-basic-grid-list-read-more-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-blog-basic-grid-list-title-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-blog-item-author-profile-color:hsla(var(--black-hsl),1);--tweak-blog-item-comment-meta-color:hsla(var(--black-hsl),1);--tweak-blog-item-comment-text-color:hsla(var(--black-hsl),1);--tweak-blog-item-meta-color:hsla(var(--black-hsl),1);--tweak-blog-item-pagination-icon-color:hsla(var(--black-hsl),1);--tweak-blog-item-pagination-meta-color:hsla(var(--black-hsl),1);--tweak-blog-item-pagination-title-color:hsla(var(--black-hsl),1);--tweak-blog-item-title-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-blog-masonry-list-excerpt-color:hsla(var(--black-hsl),1);--tweak-blog-masonry-list-meta-color:hsla(var(--black-hsl),1);--tweak-blog-masonry-list-read-more-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-blog-masonry-list-title-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-blog-side-by-side-list-excerpt-color:hsla(var(--black-hsl),1);--tweak-blog-side-by-side-list-meta-color:hsla(var(--black-hsl),1);--tweak-blog-side-by-side-list-read-more-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-blog-side-by-side-list-title-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-blog-single-column-list-excerpt-color:hsla(var(--black-hsl),1);--tweak-blog-single-column-list-meta-color:hsla(var(--black-hsl),1);--tweak-blog-single-column-list-read-more-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-blog-single-column-list-title-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-content-link-block-title-color:hsla(var(--black-hsl),1);--tweak-events-item-pagination-date-color:hsla(var(--black-hsl),1);--tweak-events-item-pagination-icon-color:hsla(var(--black-hsl),1);--tweak-events-item-pagination-title-color:hsla(var(--black-hsl),1);--tweak-form-block-background-color:hsla(var(--white-hsl),1);--tweak-form-block-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-form-block-button-background-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-form-block-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--tweak-form-block-button-text-color-on-background:hsla(var(--safeInverseDarkAccent-hsl),1);--tweak-form-block-caption-color:hsla(var(--black-hsl),1);--tweak-form-block-caption-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-form-block-description-color:hsla(var(--black-hsl),1);--tweak-form-block-description-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-form-block-option-color:hsla(var(--black-hsl),1);--tweak-form-block-option-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-form-block-survey-title-color:hsla(var(--black-hsl),1);--tweak-form-block-survey-title-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-form-block-title-color:hsla(var(--black-hsl),1);--tweak-form-block-title-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-form-block-field-fill-color:hsla(var(--white-hsl),1);--tweak-form-block-field-fill-color-hsl:var(--white-hsl);--tweak-form-block-field-fill-color-a:1;--tweak-form-block-field-border-color:hsla(var(--black-hsl),1);--tweak-form-block-field-border-color-hsl:var(--black-hsl);--tweak-form-block-field-border-color-a:1;--tweak-form-block-field-input-color:hsla(var(--black-hsl),1);--tweak-form-block-field-input-color-hsl:var(--black-hsl);--tweak-form-block-field-input-color-a:1;--tweak-form-block-field-accessory-color:hsla(var(--black-hsl),1);--tweak-form-block-field-fill-color-on-background:hsla(var(--lightAccent-hsl),1);--tweak-form-block-field-fill-color-on-background-hsl:var(--lightAccent-hsl);--tweak-form-block-field-fill-color-on-background-a:1;--tweak-form-block-field-border-color-on-background:hsla(var(--black-hsl),1);--tweak-form-block-field-border-color-on-background-hsl:var(--black-hsl);--tweak-form-block-field-border-color-on-background-a:1;--tweak-form-block-field-input-color-on-background:hsla(var(--black-hsl),1);--tweak-form-block-field-input-color-on-background-hsl:var(--black-hsl);--tweak-form-block-field-input-color-on-background-a:1;--tweak-form-block-field-accessory-color-on-background:hsla(var(--black-hsl),1);--tweak-gallery-icon-background-color:hsla(var(--lightAccent-hsl),1);--tweak-gallery-icon-color:hsla(var(--black-hsl),1);--tweak-gallery-lightbox-background-color:hsla(var(--lightAccent-hsl),1);--tweak-gallery-lightbox-icon-color:hsla(var(--black-hsl),1);--tweak-heading-extra-large-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-heading-large-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-heading-medium-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-heading-small-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-line-block-line-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-marquee-block-background-color:hsla(var(--white-hsl),1);--tweak-marquee-block-heading-color:hsla(var(--black-hsl),1);--tweak-marquee-block-heading-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-marquee-block-paragraph-color:hsla(var(--black-hsl),1);--tweak-marquee-block-paragraph-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-menu-block-item-description-color:hsla(var(--black-hsl),1);--tweak-menu-block-item-price-color:hsla(var(--black-hsl),1);--tweak-menu-block-item-title-color:hsla(var(--black-hsl),1);--tweak-menu-block-nav-color:hsla(var(--black-hsl),1);--tweak-menu-block-title-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-newsletter-block-background-color:hsla(var(--white-hsl),1);--tweak-newsletter-block-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-newsletter-block-button-background-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-newsletter-block-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--tweak-newsletter-block-button-text-color-on-background:hsla(var(--safeInverseDarkAccent-hsl),1);--tweak-newsletter-block-description-color:hsla(var(--black-hsl),1);--tweak-newsletter-block-description-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-newsletter-block-footnote-color:hsla(var(--black-hsl),1);--tweak-newsletter-block-footnote-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-newsletter-block-title-color:hsla(var(--black-hsl),1);--tweak-newsletter-block-title-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-paragraph-large-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-paragraph-link-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-paragraph-medium-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-paragraph-small-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-portfolio-item-pagination-icon-color:hsla(var(--black-hsl),1);--tweak-portfolio-item-pagination-meta-color:hsla(var(--black-hsl),1);--tweak-portfolio-item-pagination-title-color:hsla(var(--black-hsl),1);--tweak-product-basic-item-breadcumb-nav-color:hsla(var(--black-hsl),1);--tweak-product-basic-item-description-color:hsla(var(--black-hsl),1);--tweak-product-basic-item-gallery-controls-color:hsla(var(--safeInverseLightAccent-hsl),1);--tweak-product-basic-item-price-color:hsla(var(--black-hsl),1);--tweak-product-basic-item-sale-price-color:hsla(var(--accent-hsl),1);--tweak-product-basic-item-scarcity-color:hsla(var(--accent-hsl),1);--tweak-product-basic-item-title-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-product-basic-item-variant-fields-color:hsla(var(--black-hsl),1);--tweak-product-grid-text-below-list-category-nav-color:hsla(var(--black-hsl),1);--tweak-product-grid-text-below-list-pagination-color:hsla(var(--black-hsl),1);--tweak-product-grid-text-below-list-price-color:hsla(var(--black-hsl),1);--tweak-product-grid-text-below-list-sale-price-color:hsla(var(--accent-hsl),1);--tweak-product-grid-text-below-list-scarcity-color:hsla(var(--black-hsl),1);--tweak-product-grid-text-below-list-status-color:hsla(var(--accent-hsl),1);--tweak-product-grid-text-below-list-title-color:hsla(var(--safeDarkAccent-hsl),1);--tweak-product-quick-view-button-color:hsla(var(--black-hsl),1);--tweak-product-quick-view-lightbox-controls-color:hsla(var(--black-hsl),1);--tweak-product-quick-view-lightbox-overlay-color:hsla(var(--white-hsl),1);--tweak-quote-block-background-color:hsla(var(--white-hsl),1);--tweak-quote-block-source-color:hsla(var(--black-hsl),1);--tweak-quote-block-source-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-quote-block-text-color:hsla(var(--black-hsl),1);--tweak-quote-block-text-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-summary-block-background-color:hsla(var(--white-hsl),1);--tweak-summary-block-excerpt-color:hsla(var(--black-hsl),1);--tweak-summary-block-excerpt-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-summary-block-header-text-color:hsla(var(--black-hsl),1);--tweak-summary-block-header-text-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-summary-block-primary-metadata-color:hsla(var(--black-hsl),1);--tweak-summary-block-primary-metadata-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-summary-block-read-more-color:hsla(var(--black-hsl),1);--tweak-summary-block-read-more-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-summary-block-secondary-metadata-color:hsla(var(--black-hsl),1);--tweak-summary-block-secondary-metadata-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-summary-block-title-color:hsla(var(--black-hsl),1);--tweak-summary-block-title-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-text-block-background-color:hsla(var(--white-hsl),1);--tweak-video-item-description-color:hsla(var(--accent-hsl),1);--tweak-video-item-meta-color:hsla(var(--accent-hsl),1);--tweak-video-item-pagination-icon-color:hsla(var(--accent-hsl),1);--tweak-video-item-pagination-title-color:hsla(var(--accent-hsl),1);--tweak-video-item-title-color:hsla(var(--accent-hsl),1);--video-grid-basic-description-color:hsla(var(--accent-hsl),1);--video-grid-basic-meta-color:hsla(var(--accent-hsl),1);--video-grid-basic-title-color:hsla(var(--accent-hsl),1);--video-grid-category-nav-color:hsla(var(--accent-hsl),1);}.dark {--announcement-bar-background-color:hsla(var(--lightAccent-hsl),1);--announcement-bar-text-color:hsla(var(--black-hsl),1);--backgroundOverlayColor:hsla(var(--darkAccent-hsl),1);--course-item-nav-active-lesson-background-color:hsla(var(--lightAccent-hsl),1);--course-item-nav-active-lesson-text-color:hsla(var(--black-hsl),1);--course-item-nav-background-color:hsla(var(--black-hsl),1);--course-item-nav-border-color:hsla(var(--white-hsl),0.25);--course-item-nav-text-color:hsla(var(--white-hsl),1);--course-list-course-progress-bar-color:hsla(var(--accent-hsl),1);--course-list-course-item-background:hsla(var(--white-hsl),1);--course-list-course-item-hover-background:hsla(var(--white-hsl),0.9);--course-list-course-item-text-color:hsla(var(--black-hsl),1);--course-list-course-chapter-divider-color:hsla(var(--accent-hsl),1);--course-list-grid-layout-chapter-divider-color:hsla(var(--white-hsl),1);--course-list-grid-layout-course-item-background-color:hsla(var(--white-hsl),1);--course-list-grid-layout-course-item-hover-background-color:hsla(var(--white-hsl),0.9);--course-list-grid-layout-course-item-text-color:hsla(var(--black-hsl),1);--course-list-grid-layout-course-item-border-color:hsla(var(--accent-hsl),1);--gradientHeaderBackgroundColor:hsla(var(--white-hsl),1);--gradientHeaderBorderColor:hsla(var(--black-hsl),1);--gradientHeaderDropShadowColor:hsla(var(--black-hsl),1);--gradientHeaderNavigationColor:hsla(var(--black-hsl),1);--headerDropShadowColor:hsla(var(--black-hsl),1);--headerBorderColor:hsla(var(--black-hsl),1);--headingExtraLargeColor:hsla(var(--white-hsl),1);--headingLargeColor:hsla(var(--white-hsl),1);--headingLinkColor:hsla(var(--lightAccent-hsl),1);--headingMediumColor:hsla(var(--white-hsl),1);--headingSmallColor:hsla(var(--white-hsl),1);--image-block-card-image-button-bg-color:hsla(var(--safeLightAccent-hsl),1);--image-block-card-image-button-text-color:hsla(var(--safeInverseLightAccent-hsl),1);--image-block-card-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-card-image-subtitle-color:hsla(var(--white-hsl),1);--image-block-card-image-title-bg-color:hsla(var(--darkAccent-hsl),0);--image-block-card-image-title-color:hsla(var(--white-hsl),1);--image-block-card-inline-link-color:hsla(var(--white-hsl),1);--image-block-collage-background-color:hsla(var(--white-hsl),1);--image-block-collage-image-button-bg-color:hsla(var(--safeDarkAccent-hsl),1);--image-block-collage-image-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--image-block-collage-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-collage-image-subtitle-color:hsla(var(--black-hsl),1);--image-block-collage-image-title-bg-color:hsla(var(--darkAccent-hsl),0);--image-block-collage-image-title-color:hsla(var(--black-hsl),1);--image-block-collage-inline-link-color:hsla(var(--black-hsl),1);--image-block-overlap-image-button-bg-color:hsla(var(--safeLightAccent-hsl),1);--image-block-overlap-image-button-text-color:hsla(var(--safeInverseLightAccent-hsl),1);--image-block-overlap-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-overlap-image-subtitle-color:hsla(var(--white-hsl),1);--image-block-overlap-image-title-bg-color:hsla(var(--darkAccent-hsl),1);--image-block-overlap-image-title-color:hsla(var(--white-hsl),1);--image-block-overlap-inline-link-color:hsla(var(--white-hsl),1);--image-block-overlay-color:hsla(var(--black-hsl),0.5);--image-block-poster-image-button-bg-color:hsla(var(--safeLightAccent-hsl),1);--image-block-poster-image-button-text-color:hsla(var(--safeInverseLightAccent-hsl),1);--image-block-poster-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-poster-image-subtitle-color:hsla(var(--white-hsl),1);--image-block-poster-image-title-bg-color-v2:hsla(var(--darkAccent-hsl),0);--image-block-poster-image-title-color:hsla(var(--white-hsl),1);--image-block-poster-inline-link-color:hsla(var(--white-hsl),1);--image-block-stack-image-button-bg-color:hsla(var(--safeLightAccent-hsl),1);--image-block-stack-image-button-text-color:hsla(var(--safeInverseLightAccent-hsl),1);--image-block-stack-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-stack-image-subtitle-color:hsla(var(--white-hsl),1);--image-block-stack-image-title-bg-color:hsla(var(--darkAccent-hsl),0);--image-block-stack-image-title-color:hsla(var(--white-hsl),1);--image-block-stack-inline-link-color:hsla(var(--white-hsl),1);--list-section-banner-slideshow-arrow-background-color:hsla(var(--safeLightAccent-hsl),1);--list-section-banner-slideshow-arrow-color:hsla(var(--safeInverseLightAccent-hsl),1);--list-section-banner-slideshow-button-background-color:hsla(var(--safeLightAccent-hsl),1);--list-section-banner-slideshow-button-text-color:hsla(var(--safeInverseLightAccent-hsl),1);--list-section-banner-slideshow-card-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-banner-slideshow-card-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-banner-slideshow-card-color:hsla(var(--white-hsl),1);--list-section-banner-slideshow-card-description-color:hsla(var(--black-hsl),1);--list-section-banner-slideshow-card-description-link-color:hsla(var(--safeLightAccent-hsl),1);--list-section-banner-slideshow-card-title-color:hsla(var(--black-hsl),1);--list-section-banner-slideshow-description-color:hsla(var(--white-hsl),1);--list-section-banner-slideshow-title-color:hsla(var(--white-hsl),1);--list-section-carousel-arrow-background-color:hsla(var(--safeLightAccent-hsl),1);--list-section-carousel-arrow-color:hsla(var(--safeInverseLightAccent-hsl),1);--list-section-carousel-button-background-color:hsla(var(--safeLightAccent-hsl),1);--list-section-carousel-button-text-color:hsla(var(--safeInverseLightAccent-hsl),1);--list-section-carousel-card-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-carousel-card-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-carousel-card-color:hsla(var(--white-hsl),1);--list-section-carousel-card-description-color:hsla(var(--black-hsl),1);--list-section-carousel-card-description-link-color:hsla(var(--safeLightAccent-hsl),1);--list-section-carousel-card-title-color:hsla(var(--black-hsl),1);--list-section-carousel-description-color:hsla(var(--white-hsl),1);--list-section-carousel-title-color:hsla(var(--white-hsl),1);--list-section-simple-button-background-color:hsla(var(--safeLightAccent-hsl),1);--list-section-simple-button-text-color:hsla(var(--safeInverseLightAccent-hsl),1);--list-section-simple-card-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-simple-card-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-simple-card-color:hsla(var(--white-hsl),1);--list-section-simple-card-description-color:hsla(var(--black-hsl),1);--list-section-simple-card-description-link-color:hsla(var(--safeLightAccent-hsl),1);--list-section-simple-card-title-color:hsla(var(--black-hsl),1);--list-section-simple-description-color:hsla(var(--white-hsl),1);--list-section-simple-title-color:hsla(var(--white-hsl),1);--list-section-title-color:hsla(var(--white-hsl),1);--menuOverlayBackgroundColor:hsla(var(--darkAccent-hsl),1);--menuOverlayButtonBackgroundColor:hsla(var(--safeLightAccent-hsl),1);--menuOverlayButtonTextColor:hsla(var(--safeInverseLightAccent-hsl),1);--menuOverlayNavigationLinkColor:hsla(var(--white-hsl),1);--navigationLinkColor:hsla(var(--white-hsl),1);--paragraphLargeColor:hsla(var(--white-hsl),1);--paragraphLinkColor:hsla(var(--safeLightAccent-hsl),1);--paragraphMediumColor:hsla(var(--white-hsl),1);--paragraphSmallColor:hsla(var(--white-hsl),1);--portfolio-grid-basic-title-color:hsla(var(--white-hsl),1);--portfolio-grid-overlay-overlay-color:hsla(var(--darkAccent-hsl),1);--portfolio-grid-overlay-title-color:hsla(var(--white-hsl),1);--portfolio-hover-follow-title-color:hsla(var(--white-hsl),1);--portfolio-hover-static-title-color:hsla(var(--white-hsl),1);--portfolio-index-background-title-color:hsla(var(--white-hsl),1);--primaryButtonBackgroundColor:hsla(var(--safeLightAccent-hsl),1);--primaryButtonTextColor:hsla(var(--safeInverseLightAccent-hsl),1);--secondaryButtonBackgroundColor:hsla(var(--safeLightAccent-hsl),1);--secondaryButtonTextColor:hsla(var(--safeInverseLightAccent-hsl),1);--section-divider-stroke-color:hsla(var(--safeLightAccent-hsl),1);--section-inset-border-color:hsla(var(--darkAccent-hsl),1);--shape-block-background-color:hsla(var(--white-hsl),1);--shape-block-dropshadow-color:hsla(var(--white-hsl),1);--shape-block-stroke-color:hsla(var(--safeLightAccent-hsl),1);--siteBackgroundColor:hsla(var(--darkAccent-hsl),1);--siteTitleColor:hsla(var(--white-hsl),1);--social-links-block-main-icon-color:hsla(var(--white-hsl),1);--social-links-block-secondary-icon-color:hsla(var(--darkAccent-hsl),1);--solidHeaderBackgroundColor:hsla(var(--white-hsl),1);--solidHeaderBorderColor:hsla(var(--black-hsl),1);--solidHeaderDropShadowColor:hsla(var(--black-hsl),1);--solidHeaderNavigationColor:hsla(var(--black-hsl),1);--summary-block-limited-availability-label-color:hsla(var(--white-hsl),1);--tertiaryButtonBackgroundColor:hsla(var(--safeLightAccent-hsl),1);--tertiaryButtonTextColor:hsla(var(--safeInverseLightAccent-hsl),1);--text-highlight-color:hsla(var(--safeLightAccent-hsl),1);--text-highlight-color-on-background:hsla(var(--safeLightAccent-hsl),1);--tweak-accordion-block-background-color:hsla(var(--white-hsl),1);--tweak-accordion-block-divider-color:hsla(var(--white-hsl),1);--tweak-accordion-block-divider-color-on-background:hsla(var(--black-hsl),1);--tweak-accordion-block-icon-color:hsla(var(--white-hsl),1);--tweak-accordion-block-icon-color-on-background:hsla(var(--black-hsl),1);--tweak-blog-alternating-side-by-side-list-excerpt-color:hsla(var(--white-hsl),1);--tweak-blog-alternating-side-by-side-list-meta-color:hsla(var(--white-hsl),1);--tweak-blog-alternating-side-by-side-list-read-more-color:hsla(var(--safeLightAccent-hsl),1);--tweak-blog-alternating-side-by-side-list-title-color:hsla(var(--white-hsl),1);--tweak-blog-basic-grid-list-excerpt-color:hsla(var(--white-hsl),1);--tweak-blog-basic-grid-list-meta-color:hsla(var(--white-hsl),1);--tweak-blog-basic-grid-list-read-more-color:hsla(var(--safeLightAccent-hsl),1);--tweak-blog-basic-grid-list-title-color:hsla(var(--white-hsl),1);--tweak-blog-item-author-profile-color:hsla(var(--white-hsl),1);--tweak-blog-item-comment-meta-color:hsla(var(--white-hsl),1);--tweak-blog-item-comment-text-color:hsla(var(--white-hsl),1);--tweak-blog-item-meta-color:hsla(var(--white-hsl),1);--tweak-blog-item-pagination-icon-color:hsla(var(--white-hsl),1);--tweak-blog-item-pagination-meta-color:hsla(var(--white-hsl),1);--tweak-blog-item-pagination-title-color:hsla(var(--white-hsl),1);--tweak-blog-item-title-color:hsla(var(--white-hsl),1);--tweak-blog-masonry-list-excerpt-color:hsla(var(--white-hsl),1);--tweak-blog-masonry-list-meta-color:hsla(var(--white-hsl),1);--tweak-blog-masonry-list-read-more-color:hsla(var(--safeLightAccent-hsl),1);--tweak-blog-masonry-list-title-color:hsla(var(--white-hsl),1);--tweak-blog-side-by-side-list-excerpt-color:hsla(var(--white-hsl),1);--tweak-blog-side-by-side-list-meta-color:hsla(var(--white-hsl),1);--tweak-blog-side-by-side-list-read-more-color:hsla(var(--safeLightAccent-hsl),1);--tweak-blog-side-by-side-list-title-color:hsla(var(--white-hsl),1);--tweak-blog-single-column-list-excerpt-color:hsla(var(--white-hsl),1);--tweak-blog-single-column-list-meta-color:hsla(var(--white-hsl),1);--tweak-blog-single-column-list-read-more-color:hsla(var(--safeLightAccent-hsl),1);--tweak-blog-single-column-list-title-color:hsla(var(--white-hsl),1);--tweak-content-link-block-title-color:hsla(var(--white-hsl),1);--tweak-events-item-pagination-date-color:hsla(var(--white-hsl),1);--tweak-events-item-pagination-icon-color:hsla(var(--white-hsl),1);--tweak-events-item-pagination-title-color:hsla(var(--white-hsl),1);--tweak-form-block-background-color:hsla(var(--white-hsl),1);--tweak-form-block-button-background-color:hsla(var(--safeLightAccent-hsl),1);--tweak-form-block-button-background-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-form-block-button-text-color:hsla(var(--safeInverseLightAccent-hsl),1);--tweak-form-block-button-text-color-on-background:hsla(var(--safeInverseDarkAccent-hsl),1);--tweak-form-block-caption-color:hsla(var(--white-hsl),1);--tweak-form-block-caption-color-on-background:hsla(var(--black-hsl),1);--tweak-form-block-description-color:hsla(var(--white-hsl),1);--tweak-form-block-description-color-on-background:hsla(var(--black-hsl),1);--tweak-form-block-option-color:hsla(var(--white-hsl),1);--tweak-form-block-option-color-on-background:hsla(var(--black-hsl),1);--tweak-form-block-survey-title-color:hsla(var(--white-hsl),1);--tweak-form-block-survey-title-color-on-background:hsla(var(--black-hsl),1);--tweak-form-block-title-color:hsla(var(--white-hsl),1);--tweak-form-block-title-color-on-background:hsla(var(--black-hsl),1);--tweak-form-block-field-fill-color:hsla(var(--black-hsl),1);--tweak-form-block-field-fill-color-hsl:var(--black-hsl);--tweak-form-block-field-fill-color-a:1;--tweak-form-block-field-border-color:hsla(var(--white-hsl),1);--tweak-form-block-field-border-color-hsl:var(--white-hsl);--tweak-form-block-field-border-color-a:1;--tweak-form-block-field-input-color:hsla(var(--white-hsl),1);--tweak-form-block-field-input-color-hsl:var(--white-hsl);--tweak-form-block-field-input-color-a:1;--tweak-form-block-field-accessory-color:hsla(var(--white-hsl),1);--tweak-form-block-field-fill-color-on-background:hsla(var(--lightAccent-hsl),1);--tweak-form-block-field-fill-color-on-background-hsl:var(--lightAccent-hsl);--tweak-form-block-field-fill-color-on-background-a:1;--tweak-form-block-field-border-color-on-background:hsla(var(--black-hsl),1);--tweak-form-block-field-border-color-on-background-hsl:var(--black-hsl);--tweak-form-block-field-border-color-on-background-a:1;--tweak-form-block-field-input-color-on-background:hsla(var(--black-hsl),1);--tweak-form-block-field-input-color-on-background-hsl:var(--black-hsl);--tweak-form-block-field-input-color-on-background-a:1;--tweak-form-block-field-accessory-color-on-background:hsla(var(--black-hsl),1);--tweak-gallery-icon-background-color:hsla(var(--darkAccent-hsl),1);--tweak-gallery-icon-color:hsla(var(--white-hsl),1);--tweak-gallery-lightbox-background-color:hsla(var(--darkAccent-hsl),1);--tweak-gallery-lightbox-icon-color:hsla(var(--white-hsl),1);--tweak-heading-extra-large-color-on-background:hsla(var(--black-hsl),1);--tweak-heading-large-color-on-background:hsla(var(--black-hsl),1);--tweak-heading-medium-color-on-background:hsla(var(--black-hsl),1);--tweak-heading-small-color-on-background:hsla(var(--black-hsl),1);--tweak-line-block-line-color:hsla(var(--white-hsl),1);--tweak-marquee-block-background-color:hsla(var(--white-hsl),1);--tweak-marquee-block-heading-color:hsla(var(--white-hsl),1);--tweak-marquee-block-heading-color-on-background:hsla(var(--black-hsl),1);--tweak-marquee-block-paragraph-color:hsla(var(--white-hsl),1);--tweak-marquee-block-paragraph-color-on-background:hsla(var(--black-hsl),1);--tweak-menu-block-item-description-color:hsla(var(--white-hsl),1);--tweak-menu-block-item-price-color:hsla(var(--white-hsl),1);--tweak-menu-block-item-title-color:hsla(var(--white-hsl),1);--tweak-menu-block-nav-color:hsla(var(--white-hsl),1);--tweak-menu-block-title-color:hsla(var(--white-hsl),1);--tweak-newsletter-block-background-color:hsla(var(--white-hsl),1);--tweak-newsletter-block-button-background-color:hsla(var(--safeLightAccent-hsl),1);--tweak-newsletter-block-button-background-color-on-background:hsla(var(--black-hsl),1);--tweak-newsletter-block-button-text-color:hsla(var(--safeInverseLightAccent-hsl),1);--tweak-newsletter-block-button-text-color-on-background:hsla(var(--safeInverseDarkAccent-hsl),1);--tweak-newsletter-block-description-color:hsla(var(--white-hsl),1);--tweak-newsletter-block-description-color-on-background:hsla(var(--black-hsl),1);--tweak-newsletter-block-footnote-color:hsla(var(--white-hsl),1);--tweak-newsletter-block-footnote-color-on-background:hsla(var(--black-hsl),1);--tweak-newsletter-block-title-color:hsla(var(--white-hsl),1);--tweak-newsletter-block-title-color-on-background:hsla(var(--black-hsl),1);--tweak-paragraph-large-color-on-background:hsla(var(--black-hsl),1);--tweak-paragraph-link-color-on-background:hsla(var(--safeLightAccent-hsl),1);--tweak-paragraph-medium-color-on-background:hsla(var(--black-hsl),1);--tweak-paragraph-small-color-on-background:hsla(var(--black-hsl),1);--tweak-portfolio-item-pagination-icon-color:hsla(var(--white-hsl),1);--tweak-portfolio-item-pagination-meta-color:hsla(var(--white-hsl),1);--tweak-portfolio-item-pagination-title-color:hsla(var(--white-hsl),1);--tweak-product-basic-item-breadcumb-nav-color:hsla(var(--white-hsl),1);--tweak-product-basic-item-description-color:hsla(var(--white-hsl),1);--tweak-product-basic-item-gallery-controls-color:hsla(var(--safeInverseLightAccent-hsl),1);--tweak-product-basic-item-price-color:hsla(var(--white-hsl),1);--tweak-product-basic-item-sale-price-color:hsla(var(--accent-hsl),1);--tweak-product-basic-item-scarcity-color:hsla(var(--accent-hsl),1);--tweak-product-basic-item-title-color:hsla(var(--white-hsl),1);--tweak-product-basic-item-variant-fields-color:hsla(var(--white-hsl),1);--tweak-product-grid-text-below-list-category-nav-color:hsla(var(--white-hsl),1);--tweak-product-grid-text-below-list-pagination-color:hsla(var(--white-hsl),1);--tweak-product-grid-text-below-list-price-color:hsla(var(--white-hsl),1);--tweak-product-grid-text-below-list-sale-price-color:hsla(var(--accent-hsl),1);--tweak-product-grid-text-below-list-scarcity-color:hsla(var(--white-hsl),1);--tweak-product-grid-text-below-list-status-color:hsla(var(--accent-hsl),1);--tweak-product-grid-text-below-list-title-color:hsla(var(--white-hsl),1);--tweak-product-quick-view-button-color:hsla(var(--black-hsl),1);--tweak-product-quick-view-lightbox-controls-color:hsla(var(--black-hsl),1);--tweak-product-quick-view-lightbox-overlay-color:hsla(var(--white-hsl),1);--tweak-quote-block-background-color:hsla(var(--white-hsl),1);--tweak-quote-block-source-color:hsla(var(--white-hsl),1);--tweak-quote-block-source-color-on-background:hsla(var(--black-hsl),1);--tweak-quote-block-text-color:hsla(var(--white-hsl),1);--tweak-quote-block-text-color-on-background:hsla(var(--black-hsl),1);--tweak-summary-block-background-color:hsla(var(--white-hsl),1);--tweak-summary-block-excerpt-color:hsla(var(--white-hsl),1);--tweak-summary-block-excerpt-color-on-background:hsla(var(--black-hsl),1);--tweak-summary-block-header-text-color:hsla(var(--white-hsl),1);--tweak-summary-block-header-text-color-on-background:hsla(var(--black-hsl),1);--tweak-summary-block-primary-metadata-color:hsla(var(--white-hsl),1);--tweak-summary-block-primary-metadata-color-on-background:hsla(var(--black-hsl),1);--tweak-summary-block-read-more-color:hsla(var(--white-hsl),1);--tweak-summary-block-read-more-color-on-background:hsla(var(--black-hsl),1);--tweak-summary-block-secondary-metadata-color:hsla(var(--white-hsl),1);--tweak-summary-block-secondary-metadata-color-on-background:hsla(var(--black-hsl),1);--tweak-summary-block-title-color:hsla(var(--white-hsl),1);--tweak-summary-block-title-color-on-background:hsla(var(--black-hsl),1);--tweak-text-block-background-color:hsla(var(--white-hsl),1);--tweak-video-item-description-color:hsla(var(--white-hsl),1);--tweak-video-item-meta-color:hsla(var(--white-hsl),1);--tweak-video-item-pagination-icon-color:hsla(var(--white-hsl),1);--tweak-video-item-pagination-title-color:hsla(var(--white-hsl),1);--tweak-video-item-title-color:hsla(var(--white-hsl),1);--video-grid-basic-description-color:hsla(var(--white-hsl),1);--video-grid-basic-meta-color:hsla(var(--white-hsl),1);--video-grid-basic-title-color:hsla(var(--white-hsl),1);--video-grid-category-nav-color:hsla(var(--white-hsl),1);}.dark-bold {--announcement-bar-background-color:hsla(var(--accent-hsl),1);--announcement-bar-text-color:hsla(var(--safeInverseAccent-hsl),1);--backgroundOverlayColor:hsla(var(--darkAccent-hsl),1);--course-item-nav-active-lesson-background-color:hsla(var(--lightAccent-hsl),1);--course-item-nav-active-lesson-text-color:hsla(var(--black-hsl),1);--course-item-nav-background-color:hsla(var(--black-hsl),1);--course-item-nav-border-color:hsla(var(--white-hsl),0.25);--course-item-nav-text-color:hsla(var(--white-hsl),1);--course-list-course-progress-bar-color:hsla(var(--accent-hsl),1);--course-list-course-item-background:hsla(var(--white-hsl),1);--course-list-course-item-hover-background:hsla(var(--white-hsl),0.9);--course-list-course-item-text-color:hsla(var(--black-hsl),1);--course-list-course-chapter-divider-color:hsla(var(--accent-hsl),1);--course-list-grid-layout-chapter-divider-color:hsla(var(--safeLightAccent-hsl),1);--course-list-grid-layout-course-item-background-color:hsla(var(--white-hsl),1);--course-list-grid-layout-course-item-hover-background-color:hsla(var(--white-hsl),0.9);--course-list-grid-layout-course-item-text-color:hsla(var(--black-hsl),1);--course-list-grid-layout-course-item-border-color:hsla(var(--accent-hsl),1);--gradientHeaderBackgroundColor:hsla(var(--white-hsl),1);--gradientHeaderBorderColor:hsla(var(--black-hsl),1);--gradientHeaderDropShadowColor:hsla(var(--black-hsl),1);--gradientHeaderNavigationColor:hsla(var(--black-hsl),1);--headerDropShadowColor:hsla(var(--black-hsl),1);--headerBorderColor:hsla(var(--black-hsl),1);--headingExtraLargeColor:hsla(var(--safeLightAccent-hsl),1);--headingLargeColor:hsla(var(--safeLightAccent-hsl),1);--headingLinkColor:hsla(var(--safeLightAccent-hsl),1);--headingMediumColor:hsla(var(--safeLightAccent-hsl),1);--headingSmallColor:hsla(var(--safeLightAccent-hsl),1);--image-block-card-image-button-bg-color:hsla(var(--safeLightAccent-hsl),1);--image-block-card-image-button-text-color:hsla(var(--safeInverseLightAccent-hsl),1);--image-block-card-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-card-image-subtitle-color:hsla(var(--white-hsl),1);--image-block-card-image-title-bg-color:hsla(var(--darkAccent-hsl),0);--image-block-card-image-title-color:hsla(var(--white-hsl),1);--image-block-card-inline-link-color:hsla(var(--white-hsl),1);--image-block-collage-background-color:hsla(var(--white-hsl),1);--image-block-collage-image-button-bg-color:hsla(var(--safeDarkAccent-hsl),1);--image-block-collage-image-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--image-block-collage-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-collage-image-subtitle-color:hsla(var(--safeDarkAccent-hsl),1);--image-block-collage-image-title-bg-color:hsla(var(--darkAccent-hsl),0);--image-block-collage-image-title-color:hsla(var(--safeDarkAccent-hsl),1);--image-block-collage-inline-link-color:hsla(var(--safeDarkAccent-hsl),1);--image-block-overlap-image-button-bg-color:hsla(var(--safeLightAccent-hsl),1);--image-block-overlap-image-button-text-color:hsla(var(--safeInverseLightAccent-hsl),1);--image-block-overlap-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-overlap-image-subtitle-color:hsla(var(--white-hsl),1);--image-block-overlap-image-title-bg-color:hsla(var(--darkAccent-hsl),1);--image-block-overlap-image-title-color:hsla(var(--white-hsl),1);--image-block-overlap-inline-link-color:hsla(var(--white-hsl),1);--image-block-overlay-color:hsla(var(--black-hsl),0.5);--image-block-poster-image-button-bg-color:hsla(var(--safeLightAccent-hsl),1);--image-block-poster-image-button-text-color:hsla(var(--safeInverseLightAccent-hsl),1);--image-block-poster-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-poster-image-subtitle-color:hsla(var(--white-hsl),1);--image-block-poster-image-title-bg-color-v2:hsla(var(--darkAccent-hsl),0);--image-block-poster-image-title-color:hsla(var(--white-hsl),1);--image-block-poster-inline-link-color:hsla(var(--white-hsl),1);--image-block-stack-image-button-bg-color:hsla(var(--safeLightAccent-hsl),1);--image-block-stack-image-button-text-color:hsla(var(--safeInverseLightAccent-hsl),1);--image-block-stack-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-stack-image-subtitle-color:hsla(var(--white-hsl),1);--image-block-stack-image-title-bg-color:hsla(var(--darkAccent-hsl),0);--image-block-stack-image-title-color:hsla(var(--white-hsl),1);--image-block-stack-inline-link-color:hsla(var(--white-hsl),1);--list-section-banner-slideshow-arrow-background-color:hsla(var(--safeLightAccent-hsl),1);--list-section-banner-slideshow-arrow-color:hsla(var(--safeInverseLightAccent-hsl),1);--list-section-banner-slideshow-button-background-color:hsla(var(--safeLightAccent-hsl),1);--list-section-banner-slideshow-button-text-color:hsla(var(--safeInverseLightAccent-hsl),1);--list-section-banner-slideshow-card-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-banner-slideshow-card-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-banner-slideshow-card-color:hsla(var(--white-hsl),1);--list-section-banner-slideshow-card-description-color:hsla(var(--black-hsl),1);--list-section-banner-slideshow-card-description-link-color:hsla(var(--safeLightAccent-hsl),1);--list-section-banner-slideshow-card-title-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-banner-slideshow-description-color:hsla(var(--white-hsl),1);--list-section-banner-slideshow-title-color:hsla(var(--safeLightAccent-hsl),1);--list-section-carousel-arrow-background-color:hsla(var(--safeLightAccent-hsl),1);--list-section-carousel-arrow-color:hsla(var(--safeInverseLightAccent-hsl),1);--list-section-carousel-button-background-color:hsla(var(--safeLightAccent-hsl),1);--list-section-carousel-button-text-color:hsla(var(--safeInverseLightAccent-hsl),1);--list-section-carousel-card-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-carousel-card-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-carousel-card-color:hsla(var(--white-hsl),1);--list-section-carousel-card-description-color:hsla(var(--black-hsl),1);--list-section-carousel-card-description-link-color:hsla(var(--safeLightAccent-hsl),1);--list-section-carousel-card-title-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-carousel-description-color:hsla(var(--white-hsl),1);--list-section-carousel-title-color:hsla(var(--safeLightAccent-hsl),1);--list-section-simple-button-background-color:hsla(var(--safeLightAccent-hsl),1);--list-section-simple-button-text-color:hsla(var(--safeInverseLightAccent-hsl),1);--list-section-simple-card-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-simple-card-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-simple-card-color:hsla(var(--white-hsl),1);--list-section-simple-card-description-color:hsla(var(--black-hsl),1);--list-section-simple-card-description-link-color:hsla(var(--safeLightAccent-hsl),1);--list-section-simple-card-title-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-simple-description-color:hsla(var(--white-hsl),1);--list-section-simple-title-color:hsla(var(--safeLightAccent-hsl),1);--list-section-title-color:hsla(var(--safeLightAccent-hsl),1);--menuOverlayBackgroundColor:hsla(var(--darkAccent-hsl),1);--menuOverlayButtonBackgroundColor:hsla(var(--safeLightAccent-hsl),1);--menuOverlayButtonTextColor:hsla(var(--safeInverseLightAccent-hsl),1);--menuOverlayNavigationLinkColor:hsla(var(--safeLightAccent-hsl),1);--navigationLinkColor:hsla(var(--safeLightAccent-hsl),1);--paragraphLargeColor:hsla(var(--white-hsl),1);--paragraphLinkColor:hsla(var(--safeLightAccent-hsl),1);--paragraphMediumColor:hsla(var(--white-hsl),1);--paragraphSmallColor:hsla(var(--white-hsl),1);--portfolio-grid-basic-title-color:hsla(var(--safeLightAccent-hsl),1);--portfolio-grid-overlay-overlay-color:hsla(var(--darkAccent-hsl),1);--portfolio-grid-overlay-title-color:hsla(var(--white-hsl),1);--portfolio-hover-follow-title-color:hsla(var(--safeLightAccent-hsl),1);--portfolio-hover-static-title-color:hsla(var(--safeLightAccent-hsl),1);--portfolio-index-background-title-color:hsla(var(--white-hsl),1);--primaryButtonBackgroundColor:hsla(var(--safeLightAccent-hsl),1);--primaryButtonTextColor:hsla(var(--safeInverseLightAccent-hsl),1);--secondaryButtonBackgroundColor:hsla(var(--safeLightAccent-hsl),1);--secondaryButtonTextColor:hsla(var(--safeInverseLightAccent-hsl),1);--section-divider-stroke-color:hsla(var(--safeLightAccent-hsl),1);--section-inset-border-color:hsla(var(--darkAccent-hsl),1);--shape-block-background-color:hsla(var(--white-hsl),1);--shape-block-dropshadow-color:hsla(var(--white-hsl),1);--shape-block-stroke-color:hsla(var(--safeLightAccent-hsl),1);--siteBackgroundColor:hsla(var(--darkAccent-hsl),1);--siteTitleColor:hsla(var(--safeLightAccent-hsl),1);--social-links-block-main-icon-color:hsla(var(--white-hsl),1);--social-links-block-secondary-icon-color:hsla(var(--darkAccent-hsl),1);--solidHeaderBackgroundColor:hsla(var(--white-hsl),1);--solidHeaderBorderColor:hsla(var(--black-hsl),1);--solidHeaderDropShadowColor:hsla(var(--black-hsl),1);--solidHeaderNavigationColor:hsla(var(--black-hsl),1);--summary-block-limited-availability-label-color:hsla(var(--white-hsl),1);--tertiaryButtonBackgroundColor:hsla(var(--safeLightAccent-hsl),1);--tertiaryButtonTextColor:hsla(var(--safeInverseLightAccent-hsl),1);--text-highlight-color:hsla(var(--safeLightAccent-hsl),1);--text-highlight-color-on-background:hsla(var(--safeLightAccent-hsl),1);--tweak-accordion-block-background-color:hsla(var(--white-hsl),1);--tweak-accordion-block-divider-color:hsla(var(--white-hsl),1);--tweak-accordion-block-divider-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-accordion-block-icon-color:hsla(var(--white-hsl),1);--tweak-accordion-block-icon-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-blog-alternating-side-by-side-list-excerpt-color:hsla(var(--white-hsl),1);--tweak-blog-alternating-side-by-side-list-meta-color:hsla(var(--white-hsl),1);--tweak-blog-alternating-side-by-side-list-read-more-color:hsla(var(--safeLightAccent-hsl),1);--tweak-blog-alternating-side-by-side-list-title-color:hsla(var(--safeLightAccent-hsl),1);--tweak-blog-basic-grid-list-excerpt-color:hsla(var(--white-hsl),1);--tweak-blog-basic-grid-list-meta-color:hsla(var(--white-hsl),1);--tweak-blog-basic-grid-list-read-more-color:hsla(var(--safeLightAccent-hsl),1);--tweak-blog-basic-grid-list-title-color:hsla(var(--safeLightAccent-hsl),1);--tweak-blog-item-author-profile-color:hsla(var(--white-hsl),1);--tweak-blog-item-comment-meta-color:hsla(var(--white-hsl),1);--tweak-blog-item-comment-text-color:hsla(var(--white-hsl),1);--tweak-blog-item-meta-color:hsla(var(--white-hsl),1);--tweak-blog-item-pagination-icon-color:hsla(var(--white-hsl),1);--tweak-blog-item-pagination-meta-color:hsla(var(--white-hsl),1);--tweak-blog-item-pagination-title-color:hsla(var(--white-hsl),1);--tweak-blog-item-title-color:hsla(var(--safeLightAccent-hsl),1);--tweak-blog-masonry-list-excerpt-color:hsla(var(--white-hsl),1);--tweak-blog-masonry-list-meta-color:hsla(var(--white-hsl),1);--tweak-blog-masonry-list-read-more-color:hsla(var(--safeLightAccent-hsl),1);--tweak-blog-masonry-list-title-color:hsla(var(--safeLightAccent-hsl),1);--tweak-blog-side-by-side-list-excerpt-color:hsla(var(--white-hsl),1);--tweak-blog-side-by-side-list-meta-color:hsla(var(--white-hsl),1);--tweak-blog-side-by-side-list-read-more-color:hsla(var(--safeLightAccent-hsl),1);--tweak-blog-side-by-side-list-title-color:hsla(var(--safeLightAccent-hsl),1);--tweak-blog-single-column-list-excerpt-color:hsla(var(--white-hsl),1);--tweak-blog-single-column-list-meta-color:hsla(var(--white-hsl),1);--tweak-blog-single-column-list-read-more-color:hsla(var(--safeLightAccent-hsl),1);--tweak-blog-single-column-list-title-color:hsla(var(--safeLightAccent-hsl),1);--tweak-content-link-block-title-color:hsla(var(--white-hsl),1);--tweak-events-item-pagination-date-color:hsla(var(--white-hsl),1);--tweak-events-item-pagination-icon-color:hsla(var(--white-hsl),1);--tweak-events-item-pagination-title-color:hsla(var(--white-hsl),1);--tweak-form-block-background-color:hsla(var(--white-hsl),1);--tweak-form-block-button-background-color:hsla(var(--safeLightAccent-hsl),1);--tweak-form-block-button-background-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-form-block-button-text-color:hsla(var(--safeInverseLightAccent-hsl),1);--tweak-form-block-button-text-color-on-background:hsla(var(--safeInverseDarkAccent-hsl),1);--tweak-form-block-caption-color:hsla(var(--white-hsl),1);--tweak-form-block-caption-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-form-block-description-color:hsla(var(--white-hsl),1);--tweak-form-block-description-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-form-block-option-color:hsla(var(--white-hsl),1);--tweak-form-block-option-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-form-block-survey-title-color:hsla(var(--white-hsl),1);--tweak-form-block-survey-title-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-form-block-title-color:hsla(var(--white-hsl),1);--tweak-form-block-title-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-form-block-field-fill-color:hsla(var(--black-hsl),1);--tweak-form-block-field-fill-color-hsl:var(--black-hsl);--tweak-form-block-field-fill-color-a:1;--tweak-form-block-field-border-color:hsla(var(--white-hsl),1);--tweak-form-block-field-border-color-hsl:var(--white-hsl);--tweak-form-block-field-border-color-a:1;--tweak-form-block-field-input-color:hsla(var(--white-hsl),1);--tweak-form-block-field-input-color-hsl:var(--white-hsl);--tweak-form-block-field-input-color-a:1;--tweak-form-block-field-accessory-color:hsla(var(--white-hsl),1);--tweak-form-block-field-fill-color-on-background:hsla(var(--lightAccent-hsl),1);--tweak-form-block-field-fill-color-on-background-hsl:var(--lightAccent-hsl);--tweak-form-block-field-fill-color-on-background-a:1;--tweak-form-block-field-border-color-on-background:hsla(var(--black-hsl),1);--tweak-form-block-field-border-color-on-background-hsl:var(--black-hsl);--tweak-form-block-field-border-color-on-background-a:1;--tweak-form-block-field-input-color-on-background:hsla(var(--black-hsl),1);--tweak-form-block-field-input-color-on-background-hsl:var(--black-hsl);--tweak-form-block-field-input-color-on-background-a:1;--tweak-form-block-field-accessory-color-on-background:hsla(var(--black-hsl),1);--tweak-gallery-icon-background-color:hsla(var(--darkAccent-hsl),1);--tweak-gallery-icon-color:hsla(var(--white-hsl),1);--tweak-gallery-lightbox-background-color:hsla(var(--darkAccent-hsl),1);--tweak-gallery-lightbox-icon-color:hsla(var(--white-hsl),1);--tweak-heading-extra-large-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-heading-large-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-heading-medium-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-heading-small-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-line-block-line-color:hsla(var(--safeLightAccent-hsl),1);--tweak-marquee-block-background-color:hsla(var(--white-hsl),1);--tweak-marquee-block-heading-color:hsla(var(--white-hsl),1);--tweak-marquee-block-heading-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-marquee-block-paragraph-color:hsla(var(--white-hsl),1);--tweak-marquee-block-paragraph-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-menu-block-item-description-color:hsla(var(--white-hsl),1);--tweak-menu-block-item-price-color:hsla(var(--white-hsl),1);--tweak-menu-block-item-title-color:hsla(var(--white-hsl),1);--tweak-menu-block-nav-color:hsla(var(--safeLightAccent-hsl),1);--tweak-menu-block-title-color:hsla(var(--safeLightAccent-hsl),1);--tweak-newsletter-block-background-color:hsla(var(--white-hsl),1);--tweak-newsletter-block-button-background-color:hsla(var(--safeLightAccent-hsl),1);--tweak-newsletter-block-button-background-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-newsletter-block-button-text-color:hsla(var(--safeInverseLightAccent-hsl),1);--tweak-newsletter-block-button-text-color-on-background:hsla(var(--safeInverseDarkAccent-hsl),1);--tweak-newsletter-block-description-color:hsla(var(--white-hsl),1);--tweak-newsletter-block-description-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-newsletter-block-footnote-color:hsla(var(--white-hsl),1);--tweak-newsletter-block-footnote-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-newsletter-block-title-color:hsla(var(--white-hsl),1);--tweak-newsletter-block-title-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-paragraph-large-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-paragraph-link-color-on-background:hsla(var(--safeLightAccent-hsl),1);--tweak-paragraph-medium-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-paragraph-small-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-portfolio-item-pagination-icon-color:hsla(var(--white-hsl),1);--tweak-portfolio-item-pagination-meta-color:hsla(var(--white-hsl),1);--tweak-portfolio-item-pagination-title-color:hsla(var(--white-hsl),1);--tweak-product-basic-item-breadcumb-nav-color:hsla(var(--white-hsl),1);--tweak-product-basic-item-description-color:hsla(var(--white-hsl),1);--tweak-product-basic-item-gallery-controls-color:hsla(var(--safeInverseLightAccent-hsl),1);--tweak-product-basic-item-price-color:hsla(var(--white-hsl),1);--tweak-product-basic-item-sale-price-color:hsla(var(--accent-hsl),1);--tweak-product-basic-item-scarcity-color:hsla(var(--accent-hsl),1);--tweak-product-basic-item-title-color:hsla(var(--safeLightAccent-hsl),1);--tweak-product-basic-item-variant-fields-color:hsla(var(--white-hsl),1);--tweak-product-grid-text-below-list-category-nav-color:hsla(var(--white-hsl),1);--tweak-product-grid-text-below-list-pagination-color:hsla(var(--white-hsl),1);--tweak-product-grid-text-below-list-price-color:hsla(var(--white-hsl),1);--tweak-product-grid-text-below-list-sale-price-color:hsla(var(--accent-hsl),1);--tweak-product-grid-text-below-list-scarcity-color:hsla(var(--white-hsl),1);--tweak-product-grid-text-below-list-status-color:hsla(var(--accent-hsl),1);--tweak-product-grid-text-below-list-title-color:hsla(var(--safeLightAccent-hsl),1);--tweak-product-quick-view-button-color:hsla(var(--black-hsl),1);--tweak-product-quick-view-lightbox-controls-color:hsla(var(--black-hsl),1);--tweak-product-quick-view-lightbox-overlay-color:hsla(var(--white-hsl),1);--tweak-quote-block-background-color:hsla(var(--white-hsl),1);--tweak-quote-block-source-color:hsla(var(--white-hsl),1);--tweak-quote-block-source-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-quote-block-text-color:hsla(var(--white-hsl),1);--tweak-quote-block-text-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-summary-block-background-color:hsla(var(--white-hsl),1);--tweak-summary-block-excerpt-color:hsla(var(--white-hsl),1);--tweak-summary-block-excerpt-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-summary-block-header-text-color:hsla(var(--white-hsl),1);--tweak-summary-block-header-text-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-summary-block-primary-metadata-color:hsla(var(--white-hsl),1);--tweak-summary-block-primary-metadata-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-summary-block-read-more-color:hsla(var(--white-hsl),1);--tweak-summary-block-read-more-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-summary-block-secondary-metadata-color:hsla(var(--white-hsl),1);--tweak-summary-block-secondary-metadata-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-summary-block-title-color:hsla(var(--white-hsl),1);--tweak-summary-block-title-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-text-block-background-color:hsla(var(--white-hsl),1);--tweak-video-item-description-color:hsla(var(--accent-hsl),1);--tweak-video-item-meta-color:hsla(var(--accent-hsl),1);--tweak-video-item-pagination-icon-color:hsla(var(--accent-hsl),1);--tweak-video-item-pagination-title-color:hsla(var(--accent-hsl),1);--tweak-video-item-title-color:hsla(var(--accent-hsl),1);--video-grid-basic-description-color:hsla(var(--accent-hsl),1);--video-grid-basic-meta-color:hsla(var(--accent-hsl),1);--video-grid-basic-title-color:hsla(var(--accent-hsl),1);--video-grid-category-nav-color:hsla(var(--accent-hsl),1);}.black {--announcement-bar-background-color:hsla(var(--white-hsl),1);--announcement-bar-text-color:hsla(var(--black-hsl),1);--backgroundOverlayColor:hsla(var(--black-hsl),1);--course-item-nav-active-lesson-background-color:hsla(var(--lightAccent-hsl),1);--course-item-nav-active-lesson-text-color:hsla(var(--black-hsl),1);--course-item-nav-background-color:hsla(var(--darkAccent-hsl),1);--course-item-nav-border-color:hsla(var(--white-hsl),0.25);--course-item-nav-text-color:hsla(var(--white-hsl),1);--course-list-course-progress-bar-color:hsla(var(--accent-hsl),1);--course-list-course-item-background:hsla(var(--white-hsl),1);--course-list-course-item-hover-background:hsla(var(--white-hsl),0.95);--course-list-course-item-text-color:hsla(var(--black-hsl),1);--course-list-course-chapter-divider-color:hsla(var(--accent-hsl),1);--course-list-grid-layout-chapter-divider-color:hsla(var(--white-hsl),1);--course-list-grid-layout-course-item-background-color:hsla(var(--white-hsl),1);--course-list-grid-layout-course-item-hover-background-color:hsla(var(--white-hsl),0.95);--course-list-grid-layout-course-item-text-color:hsla(var(--black-hsl),1);--course-list-grid-layout-course-item-border-color:hsla(var(--accent-hsl),1);--gradientHeaderBackgroundColor:hsla(var(--white-hsl),1);--gradientHeaderBorderColor:hsla(var(--black-hsl),1);--gradientHeaderDropShadowColor:hsla(var(--black-hsl),1);--gradientHeaderNavigationColor:hsla(var(--black-hsl),1);--headerDropShadowColor:hsla(var(--black-hsl),1);--headerBorderColor:hsla(var(--black-hsl),1);--headingExtraLargeColor:hsla(var(--white-hsl),1);--headingLargeColor:hsla(var(--white-hsl),1);--headingLinkColor:hsla(var(--lightAccent-hsl),1);--headingMediumColor:hsla(var(--white-hsl),1);--headingSmallColor:hsla(var(--white-hsl),1);--image-block-card-image-button-bg-color:hsla(var(--safeLightAccent-hsl),1);--image-block-card-image-button-text-color:hsla(var(--safeInverseLightAccent-hsl),1);--image-block-card-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-card-image-subtitle-color:hsla(var(--white-hsl),1);--image-block-card-image-title-bg-color:hsla(var(--black-hsl),0);--image-block-card-image-title-color:hsla(var(--white-hsl),1);--image-block-card-inline-link-color:hsla(var(--white-hsl),1);--image-block-collage-background-color:hsla(var(--white-hsl),1);--image-block-collage-image-button-bg-color:hsla(var(--safeDarkAccent-hsl),1);--image-block-collage-image-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--image-block-collage-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-collage-image-subtitle-color:hsla(var(--black-hsl),1);--image-block-collage-image-title-bg-color:hsla(var(--black-hsl),0);--image-block-collage-image-title-color:hsla(var(--black-hsl),1);--image-block-collage-inline-link-color:hsla(var(--black-hsl),1);--image-block-overlap-image-button-bg-color:hsla(var(--safeLightAccent-hsl),1);--image-block-overlap-image-button-text-color:hsla(var(--safeInverseLightAccent-hsl),1);--image-block-overlap-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-overlap-image-subtitle-color:hsla(var(--white-hsl),1);--image-block-overlap-image-title-bg-color:hsla(var(--black-hsl),1);--image-block-overlap-image-title-color:hsla(var(--white-hsl),1);--image-block-overlap-inline-link-color:hsla(var(--white-hsl),1);--image-block-overlay-color:hsla(var(--black-hsl),0.5);--image-block-poster-image-button-bg-color:hsla(var(--safeLightAccent-hsl),1);--image-block-poster-image-button-text-color:hsla(var(--safeInverseLightAccent-hsl),1);--image-block-poster-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-poster-image-subtitle-color:hsla(var(--white-hsl),1);--image-block-poster-image-title-bg-color-v2:hsla(var(--black-hsl),0);--image-block-poster-image-title-color:hsla(var(--white-hsl),1);--image-block-poster-inline-link-color:hsla(var(--white-hsl),1);--image-block-stack-image-button-bg-color:hsla(var(--safeLightAccent-hsl),1);--image-block-stack-image-button-text-color:hsla(var(--safeInverseLightAccent-hsl),1);--image-block-stack-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-stack-image-subtitle-color:hsla(var(--white-hsl),1);--image-block-stack-image-title-bg-color:hsla(var(--black-hsl),0);--image-block-stack-image-title-color:hsla(var(--white-hsl),1);--image-block-stack-inline-link-color:hsla(var(--white-hsl),1);--list-section-banner-slideshow-arrow-background-color:hsla(var(--safeLightAccent-hsl),1);--list-section-banner-slideshow-arrow-color:hsla(var(--safeInverseLightAccent-hsl),1);--list-section-banner-slideshow-button-background-color:hsla(var(--safeLightAccent-hsl),1);--list-section-banner-slideshow-button-text-color:hsla(var(--safeInverseLightAccent-hsl),1);--list-section-banner-slideshow-card-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-banner-slideshow-card-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-banner-slideshow-card-color:hsla(var(--white-hsl),1);--list-section-banner-slideshow-card-description-color:hsla(var(--black-hsl),1);--list-section-banner-slideshow-card-description-link-color:hsla(var(--safeLightAccent-hsl),1);--list-section-banner-slideshow-card-title-color:hsla(var(--black-hsl),1);--list-section-banner-slideshow-description-color:hsla(var(--white-hsl),1);--list-section-banner-slideshow-title-color:hsla(var(--white-hsl),1);--list-section-carousel-arrow-background-color:hsla(var(--safeLightAccent-hsl),1);--list-section-carousel-arrow-color:hsla(var(--safeInverseLightAccent-hsl),1);--list-section-carousel-button-background-color:hsla(var(--safeLightAccent-hsl),1);--list-section-carousel-button-text-color:hsla(var(--safeInverseLightAccent-hsl),1);--list-section-carousel-card-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-carousel-card-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-carousel-card-color:hsla(var(--white-hsl),1);--list-section-carousel-card-description-color:hsla(var(--black-hsl),1);--list-section-carousel-card-description-link-color:hsla(var(--safeLightAccent-hsl),1);--list-section-carousel-card-title-color:hsla(var(--black-hsl),1);--list-section-carousel-description-color:hsla(var(--white-hsl),1);--list-section-carousel-title-color:hsla(var(--white-hsl),1);--list-section-simple-button-background-color:hsla(var(--safeLightAccent-hsl),1);--list-section-simple-button-text-color:hsla(var(--safeInverseLightAccent-hsl),1);--list-section-simple-card-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-simple-card-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-simple-card-color:hsla(var(--white-hsl),1);--list-section-simple-card-description-color:hsla(var(--black-hsl),1);--list-section-simple-card-description-link-color:hsla(var(--safeLightAccent-hsl),1);--list-section-simple-card-title-color:hsla(var(--black-hsl),1);--list-section-simple-description-color:hsla(var(--white-hsl),1);--list-section-simple-title-color:hsla(var(--white-hsl),1);--list-section-title-color:hsla(var(--white-hsl),1);--menuOverlayBackgroundColor:hsla(var(--black-hsl),1);--menuOverlayButtonBackgroundColor:hsla(var(--safeLightAccent-hsl),1);--menuOverlayButtonTextColor:hsla(var(--safeInverseLightAccent-hsl),1);--menuOverlayNavigationLinkColor:hsla(var(--white-hsl),1);--navigationLinkColor:hsla(var(--white-hsl),1);--paragraphLargeColor:hsla(var(--white-hsl),1);--paragraphLinkColor:hsla(var(--safeLightAccent-hsl),1);--paragraphMediumColor:hsla(var(--white-hsl),1);--paragraphSmallColor:hsla(var(--white-hsl),1);--portfolio-grid-basic-title-color:hsla(var(--white-hsl),1);--portfolio-grid-overlay-overlay-color:hsla(var(--black-hsl),1);--portfolio-grid-overlay-title-color:hsla(var(--white-hsl),1);--portfolio-hover-follow-title-color:hsla(var(--white-hsl),1);--portfolio-hover-static-title-color:hsla(var(--white-hsl),1);--portfolio-index-background-title-color:hsla(var(--white-hsl),1);--primaryButtonBackgroundColor:hsla(var(--safeLightAccent-hsl),1);--primaryButtonTextColor:hsla(var(--safeInverseLightAccent-hsl),1);--secondaryButtonBackgroundColor:hsla(var(--safeLightAccent-hsl),1);--secondaryButtonTextColor:hsla(var(--safeInverseLightAccent-hsl),1);--section-divider-stroke-color:hsla(var(--safeLightAccent-hsl),1);--section-inset-border-color:hsla(var(--black-hsl),1);--shape-block-background-color:hsla(var(--white-hsl),1);--shape-block-dropshadow-color:hsla(var(--white-hsl),1);--shape-block-stroke-color:hsla(var(--safeDarkAccent-hsl),1);--siteBackgroundColor:hsla(var(--black-hsl),1);--siteTitleColor:hsla(var(--white-hsl),1);--social-links-block-main-icon-color:hsla(var(--white-hsl),1);--social-links-block-secondary-icon-color:hsla(var(--black-hsl),1);--solidHeaderBackgroundColor:hsla(var(--white-hsl),1);--solidHeaderBorderColor:hsla(var(--black-hsl),1);--solidHeaderDropShadowColor:hsla(var(--black-hsl),1);--solidHeaderNavigationColor:hsla(var(--black-hsl),1);--summary-block-limited-availability-label-color:hsla(var(--white-hsl),1);--tertiaryButtonBackgroundColor:hsla(var(--safeLightAccent-hsl),1);--tertiaryButtonTextColor:hsla(var(--safeInverseLightAccent-hsl),1);--text-highlight-color:hsla(var(--safeLightAccent-hsl),1);--text-highlight-color-on-background:hsla(var(--safeLightAccent-hsl),1);--tweak-accordion-block-background-color:hsla(var(--white-hsl),1);--tweak-accordion-block-divider-color:hsla(var(--white-hsl),1);--tweak-accordion-block-divider-color-on-background:hsla(var(--black-hsl),1);--tweak-accordion-block-icon-color:hsla(var(--white-hsl),1);--tweak-accordion-block-icon-color-on-background:hsla(var(--black-hsl),1);--tweak-blog-alternating-side-by-side-list-excerpt-color:hsla(var(--white-hsl),1);--tweak-blog-alternating-side-by-side-list-meta-color:hsla(var(--white-hsl),1);--tweak-blog-alternating-side-by-side-list-read-more-color:hsla(var(--safeLightAccent-hsl),1);--tweak-blog-alternating-side-by-side-list-title-color:hsla(var(--white-hsl),1);--tweak-blog-basic-grid-list-excerpt-color:hsla(var(--white-hsl),1);--tweak-blog-basic-grid-list-meta-color:hsla(var(--white-hsl),1);--tweak-blog-basic-grid-list-read-more-color:hsla(var(--safeLightAccent-hsl),1);--tweak-blog-basic-grid-list-title-color:hsla(var(--white-hsl),1);--tweak-blog-item-author-profile-color:hsla(var(--white-hsl),1);--tweak-blog-item-comment-meta-color:hsla(var(--white-hsl),1);--tweak-blog-item-comment-text-color:hsla(var(--white-hsl),1);--tweak-blog-item-meta-color:hsla(var(--white-hsl),1);--tweak-blog-item-pagination-icon-color:hsla(var(--white-hsl),1);--tweak-blog-item-pagination-meta-color:hsla(var(--white-hsl),1);--tweak-blog-item-pagination-title-color:hsla(var(--white-hsl),1);--tweak-blog-item-title-color:hsla(var(--white-hsl),1);--tweak-blog-masonry-list-excerpt-color:hsla(var(--white-hsl),1);--tweak-blog-masonry-list-meta-color:hsla(var(--white-hsl),1);--tweak-blog-masonry-list-read-more-color:hsla(var(--safeLightAccent-hsl),1);--tweak-blog-masonry-list-title-color:hsla(var(--white-hsl),1);--tweak-blog-side-by-side-list-excerpt-color:hsla(var(--white-hsl),1);--tweak-blog-side-by-side-list-meta-color:hsla(var(--white-hsl),1);--tweak-blog-side-by-side-list-read-more-color:hsla(var(--safeLightAccent-hsl),1);--tweak-blog-side-by-side-list-title-color:hsla(var(--white-hsl),1);--tweak-blog-single-column-list-excerpt-color:hsla(var(--white-hsl),1);--tweak-blog-single-column-list-meta-color:hsla(var(--white-hsl),1);--tweak-blog-single-column-list-read-more-color:hsla(var(--safeLightAccent-hsl),1);--tweak-blog-single-column-list-title-color:hsla(var(--white-hsl),1);--tweak-content-link-block-title-color:hsla(var(--white-hsl),1);--tweak-events-item-pagination-date-color:hsla(var(--white-hsl),1);--tweak-events-item-pagination-icon-color:hsla(var(--white-hsl),1);--tweak-events-item-pagination-title-color:hsla(var(--white-hsl),1);--tweak-form-block-background-color:hsla(var(--white-hsl),1);--tweak-form-block-button-background-color:hsla(var(--safeLightAccent-hsl),1);--tweak-form-block-button-background-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-form-block-button-text-color:hsla(var(--safeInverseLightAccent-hsl),1);--tweak-form-block-button-text-color-on-background:hsla(var(--safeInverseDarkAccent-hsl),1);--tweak-form-block-caption-color:hsla(var(--white-hsl),1);--tweak-form-block-caption-color-on-background:hsla(var(--black-hsl),1);--tweak-form-block-description-color:hsla(var(--white-hsl),1);--tweak-form-block-description-color-on-background:hsla(var(--black-hsl),1);--tweak-form-block-option-color:hsla(var(--white-hsl),1);--tweak-form-block-option-color-on-background:hsla(var(--black-hsl),1);--tweak-form-block-survey-title-color:hsla(var(--white-hsl),1);--tweak-form-block-survey-title-color-on-background:hsla(var(--black-hsl),1);--tweak-form-block-title-color:hsla(var(--white-hsl),1);--tweak-form-block-title-color-on-background:hsla(var(--black-hsl),1);--tweak-form-block-field-fill-color:hsla(var(--darkAccent-hsl),1);--tweak-form-block-field-fill-color-hsl:var(--darkAccent-hsl);--tweak-form-block-field-fill-color-a:1;--tweak-form-block-field-border-color:hsla(var(--white-hsl),1);--tweak-form-block-field-border-color-hsl:var(--white-hsl);--tweak-form-block-field-border-color-a:1;--tweak-form-block-field-input-color:hsla(var(--white-hsl),1);--tweak-form-block-field-input-color-hsl:var(--white-hsl);--tweak-form-block-field-input-color-a:1;--tweak-form-block-field-accessory-color:hsla(var(--white-hsl),1);--tweak-form-block-field-fill-color-on-background:hsla(var(--lightAccent-hsl),1);--tweak-form-block-field-fill-color-on-background-hsl:var(--lightAccent-hsl);--tweak-form-block-field-fill-color-on-background-a:1;--tweak-form-block-field-border-color-on-background:hsla(var(--black-hsl),1);--tweak-form-block-field-border-color-on-background-hsl:var(--black-hsl);--tweak-form-block-field-border-color-on-background-a:1;--tweak-form-block-field-input-color-on-background:hsla(var(--black-hsl),1);--tweak-form-block-field-input-color-on-background-hsl:var(--black-hsl);--tweak-form-block-field-input-color-on-background-a:1;--tweak-form-block-field-accessory-color-on-background:hsla(var(--black-hsl),1);--tweak-gallery-icon-background-color:hsla(var(--black-hsl),1);--tweak-gallery-icon-color:hsla(var(--white-hsl),1);--tweak-gallery-lightbox-background-color:hsla(var(--black-hsl),1);--tweak-gallery-lightbox-icon-color:hsla(var(--white-hsl),1);--tweak-heading-extra-large-color-on-background:hsla(var(--black-hsl),1);--tweak-heading-large-color-on-background:hsla(var(--black-hsl),1);--tweak-heading-medium-color-on-background:hsla(var(--black-hsl),1);--tweak-heading-small-color-on-background:hsla(var(--black-hsl),1);--tweak-line-block-line-color:hsla(var(--white-hsl),1);--tweak-marquee-block-background-color:hsla(var(--white-hsl),1);--tweak-marquee-block-heading-color:hsla(var(--white-hsl),1);--tweak-marquee-block-heading-color-on-background:hsla(var(--black-hsl),1);--tweak-marquee-block-paragraph-color:hsla(var(--white-hsl),1);--tweak-marquee-block-paragraph-color-on-background:hsla(var(--black-hsl),1);--tweak-menu-block-item-description-color:hsla(var(--white-hsl),1);--tweak-menu-block-item-price-color:hsla(var(--white-hsl),1);--tweak-menu-block-item-title-color:hsla(var(--white-hsl),1);--tweak-menu-block-nav-color:hsla(var(--white-hsl),1);--tweak-menu-block-title-color:hsla(var(--white-hsl),1);--tweak-newsletter-block-background-color:hsla(var(--white-hsl),1);--tweak-newsletter-block-button-background-color:hsla(var(--safeLightAccent-hsl),1);--tweak-newsletter-block-button-background-color-on-background:hsla(var(--black-hsl),1);--tweak-newsletter-block-button-text-color:hsla(var(--safeInverseLightAccent-hsl),1);--tweak-newsletter-block-button-text-color-on-background:hsla(var(--safeInverseDarkAccent-hsl),1);--tweak-newsletter-block-description-color:hsla(var(--white-hsl),1);--tweak-newsletter-block-description-color-on-background:hsla(var(--black-hsl),1);--tweak-newsletter-block-footnote-color:hsla(var(--white-hsl),1);--tweak-newsletter-block-footnote-color-on-background:hsla(var(--black-hsl),1);--tweak-newsletter-block-title-color:hsla(var(--white-hsl),1);--tweak-newsletter-block-title-color-on-background:hsla(var(--black-hsl),1);--tweak-paragraph-large-color-on-background:hsla(var(--black-hsl),1);--tweak-paragraph-link-color-on-background:hsla(var(--safeLightAccent-hsl),1);--tweak-paragraph-medium-color-on-background:hsla(var(--black-hsl),1);--tweak-paragraph-small-color-on-background:hsla(var(--black-hsl),1);--tweak-portfolio-item-pagination-icon-color:hsla(var(--white-hsl),1);--tweak-portfolio-item-pagination-meta-color:hsla(var(--white-hsl),1);--tweak-portfolio-item-pagination-title-color:hsla(var(--white-hsl),1);--tweak-product-basic-item-breadcumb-nav-color:hsla(var(--white-hsl),1);--tweak-product-basic-item-description-color:hsla(var(--white-hsl),1);--tweak-product-basic-item-gallery-controls-color:hsla(var(--safeInverseLightAccent-hsl),1);--tweak-product-basic-item-price-color:hsla(var(--white-hsl),1);--tweak-product-basic-item-sale-price-color:hsla(var(--accent-hsl),1);--tweak-product-basic-item-scarcity-color:hsla(var(--accent-hsl),1);--tweak-product-basic-item-title-color:hsla(var(--white-hsl),1);--tweak-product-basic-item-variant-fields-color:hsla(var(--white-hsl),1);--tweak-product-grid-text-below-list-category-nav-color:hsla(var(--white-hsl),1);--tweak-product-grid-text-below-list-pagination-color:hsla(var(--white-hsl),1);--tweak-product-grid-text-below-list-price-color:hsla(var(--white-hsl),1);--tweak-product-grid-text-below-list-sale-price-color:hsla(var(--accent-hsl),1);--tweak-product-grid-text-below-list-scarcity-color:hsla(var(--white-hsl),1);--tweak-product-grid-text-below-list-status-color:hsla(var(--accent-hsl),1);--tweak-product-grid-text-below-list-title-color:hsla(var(--white-hsl),1);--tweak-product-quick-view-button-color:hsla(var(--black-hsl),1);--tweak-product-quick-view-lightbox-controls-color:hsla(var(--black-hsl),1);--tweak-product-quick-view-lightbox-overlay-color:hsla(var(--white-hsl),1);--tweak-quote-block-background-color:hsla(var(--white-hsl),1);--tweak-quote-block-source-color:hsla(var(--white-hsl),1);--tweak-quote-block-source-color-on-background:hsla(var(--black-hsl),1);--tweak-quote-block-text-color:hsla(var(--white-hsl),1);--tweak-quote-block-text-color-on-background:hsla(var(--black-hsl),1);--tweak-summary-block-background-color:hsla(var(--white-hsl),1);--tweak-summary-block-excerpt-color:hsla(var(--white-hsl),1);--tweak-summary-block-excerpt-color-on-background:hsla(var(--black-hsl),1);--tweak-summary-block-header-text-color:hsla(var(--white-hsl),1);--tweak-summary-block-header-text-color-on-background:hsla(var(--black-hsl),1);--tweak-summary-block-primary-metadata-color:hsla(var(--white-hsl),1);--tweak-summary-block-primary-metadata-color-on-background:hsla(var(--black-hsl),1);--tweak-summary-block-read-more-color:hsla(var(--white-hsl),1);--tweak-summary-block-read-more-color-on-background:hsla(var(--black-hsl),1);--tweak-summary-block-secondary-metadata-color:hsla(var(--white-hsl),1);--tweak-summary-block-secondary-metadata-color-on-background:hsla(var(--black-hsl),1);--tweak-summary-block-title-color:hsla(var(--white-hsl),1);--tweak-summary-block-title-color-on-background:hsla(var(--black-hsl),1);--tweak-text-block-background-color:hsla(var(--white-hsl),1);--tweak-video-item-description-color:hsla(var(--white-hsl),1);--tweak-video-item-meta-color:hsla(var(--white-hsl),1);--tweak-video-item-pagination-icon-color:hsla(var(--white-hsl),1);--tweak-video-item-pagination-title-color:hsla(var(--white-hsl),1);--tweak-video-item-title-color:hsla(var(--white-hsl),1);--video-grid-basic-description-color:hsla(var(--white-hsl),1);--video-grid-basic-meta-color:hsla(var(--white-hsl),1);--video-grid-basic-title-color:hsla(var(--white-hsl),1);--video-grid-category-nav-color:hsla(var(--white-hsl),1);}.black-bold {--announcement-bar-background-color:hsla(var(--accent-hsl),1);--announcement-bar-text-color:hsla(var(--safeInverseAccent-hsl),1);--backgroundOverlayColor:hsla(var(--black-hsl),1);--course-item-nav-active-lesson-background-color:hsla(var(--lightAccent-hsl),1);--course-item-nav-active-lesson-text-color:hsla(var(--black-hsl),1);--course-item-nav-background-color:hsla(var(--darkAccent-hsl),1);--course-item-nav-border-color:hsla(var(--white-hsl),0.25);--course-item-nav-text-color:hsla(var(--white-hsl),1);--course-list-course-progress-bar-color:hsla(var(--accent-hsl),1);--course-list-course-item-background:hsla(var(--white-hsl),1);--course-list-course-item-hover-background:hsla(var(--white-hsl),0.95);--course-list-course-item-text-color:hsla(var(--black-hsl),1);--course-list-course-chapter-divider-color:hsla(var(--accent-hsl),1);--course-list-grid-layout-chapter-divider-color:hsla(var(--safeLightAccent-hsl),1);--course-list-grid-layout-course-item-background-color:hsla(var(--white-hsl),1);--course-list-grid-layout-course-item-hover-background-color:hsla(var(--white-hsl),0.95);--course-list-grid-layout-course-item-text-color:hsla(var(--black-hsl),1);--course-list-grid-layout-course-item-border-color:hsla(var(--accent-hsl),1);--gradientHeaderBackgroundColor:hsla(var(--white-hsl),1);--gradientHeaderBorderColor:hsla(var(--black-hsl),1);--gradientHeaderDropShadowColor:hsla(var(--black-hsl),1);--gradientHeaderNavigationColor:hsla(var(--black-hsl),1);--headerDropShadowColor:hsla(var(--black-hsl),1);--headerBorderColor:hsla(var(--black-hsl),1);--headingExtraLargeColor:hsla(var(--safeLightAccent-hsl),1);--headingLargeColor:hsla(var(--safeLightAccent-hsl),1);--headingLinkColor:hsla(var(--safeLightAccent-hsl),1);--headingMediumColor:hsla(var(--safeLightAccent-hsl),1);--headingSmallColor:hsla(var(--safeLightAccent-hsl),1);--image-block-card-image-button-bg-color:hsla(var(--safeLightAccent-hsl),1);--image-block-card-image-button-text-color:hsla(var(--safeInverseLightAccent-hsl),1);--image-block-card-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-card-image-subtitle-color:hsla(var(--white-hsl),1);--image-block-card-image-title-bg-color:hsla(var(--black-hsl),0);--image-block-card-image-title-color:hsla(var(--white-hsl),1);--image-block-card-inline-link-color:hsla(var(--white-hsl),1);--image-block-collage-background-color:hsla(var(--white-hsl),1);--image-block-collage-image-button-bg-color:hsla(var(--safeDarkAccent-hsl),1);--image-block-collage-image-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--image-block-collage-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-collage-image-subtitle-color:hsla(var(--safeDarkAccent-hsl),1);--image-block-collage-image-title-bg-color:hsla(var(--black-hsl),0);--image-block-collage-image-title-color:hsla(var(--safeDarkAccent-hsl),1);--image-block-collage-inline-link-color:hsla(var(--safeDarkAccent-hsl),1);--image-block-overlap-image-button-bg-color:hsla(var(--safeLightAccent-hsl),1);--image-block-overlap-image-button-text-color:hsla(var(--safeInverseLightAccent-hsl),1);--image-block-overlap-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-overlap-image-subtitle-color:hsla(var(--white-hsl),1);--image-block-overlap-image-title-bg-color:hsla(var(--black-hsl),1);--image-block-overlap-image-title-color:hsla(var(--white-hsl),1);--image-block-overlap-inline-link-color:hsla(var(--white-hsl),1);--image-block-overlay-color:hsla(var(--black-hsl),0.5);--image-block-poster-image-button-bg-color:hsla(var(--safeLightAccent-hsl),1);--image-block-poster-image-button-text-color:hsla(var(--safeInverseLightAccent-hsl),1);--image-block-poster-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-poster-image-subtitle-color:hsla(var(--white-hsl),1);--image-block-poster-image-title-bg-color-v2:hsla(var(--black-hsl),0);--image-block-poster-image-title-color:hsla(var(--white-hsl),1);--image-block-poster-inline-link-color:hsla(var(--white-hsl),1);--image-block-stack-image-button-bg-color:hsla(var(--safeLightAccent-hsl),1);--image-block-stack-image-button-text-color:hsla(var(--safeInverseLightAccent-hsl),1);--image-block-stack-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-stack-image-subtitle-color:hsla(var(--white-hsl),1);--image-block-stack-image-title-bg-color:hsla(var(--black-hsl),0);--image-block-stack-image-title-color:hsla(var(--white-hsl),1);--image-block-stack-inline-link-color:hsla(var(--white-hsl),1);--list-section-banner-slideshow-arrow-background-color:hsla(var(--safeLightAccent-hsl),1);--list-section-banner-slideshow-arrow-color:hsla(var(--safeInverseLightAccent-hsl),1);--list-section-banner-slideshow-button-background-color:hsla(var(--safeLightAccent-hsl),1);--list-section-banner-slideshow-button-text-color:hsla(var(--safeInverseLightAccent-hsl),1);--list-section-banner-slideshow-card-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-banner-slideshow-card-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-banner-slideshow-card-color:hsla(var(--white-hsl),1);--list-section-banner-slideshow-card-description-color:hsla(var(--black-hsl),1);--list-section-banner-slideshow-card-description-link-color:hsla(var(--safeLightAccent-hsl),1);--list-section-banner-slideshow-card-title-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-banner-slideshow-description-color:hsla(var(--white-hsl),1);--list-section-banner-slideshow-title-color:hsla(var(--safeLightAccent-hsl),1);--list-section-carousel-arrow-background-color:hsla(var(--safeLightAccent-hsl),1);--list-section-carousel-arrow-color:hsla(var(--safeInverseLightAccent-hsl),1);--list-section-carousel-button-background-color:hsla(var(--safeLightAccent-hsl),1);--list-section-carousel-button-text-color:hsla(var(--safeInverseLightAccent-hsl),1);--list-section-carousel-card-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-carousel-card-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-carousel-card-color:hsla(var(--white-hsl),1);--list-section-carousel-card-description-color:hsla(var(--black-hsl),1);--list-section-carousel-card-description-link-color:hsla(var(--safeLightAccent-hsl),1);--list-section-carousel-card-title-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-carousel-description-color:hsla(var(--white-hsl),1);--list-section-carousel-title-color:hsla(var(--safeLightAccent-hsl),1);--list-section-simple-button-background-color:hsla(var(--safeLightAccent-hsl),1);--list-section-simple-button-text-color:hsla(var(--safeInverseLightAccent-hsl),1);--list-section-simple-card-button-background-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-simple-card-button-text-color:hsla(var(--safeInverseDarkAccent-hsl),1);--list-section-simple-card-color:hsla(var(--white-hsl),1);--list-section-simple-card-description-color:hsla(var(--black-hsl),1);--list-section-simple-card-description-link-color:hsla(var(--safeLightAccent-hsl),1);--list-section-simple-card-title-color:hsla(var(--safeDarkAccent-hsl),1);--list-section-simple-description-color:hsla(var(--white-hsl),1);--list-section-simple-title-color:hsla(var(--safeLightAccent-hsl),1);--list-section-title-color:hsla(var(--safeLightAccent-hsl),1);--menuOverlayBackgroundColor:hsla(var(--black-hsl),1);--menuOverlayButtonBackgroundColor:hsla(var(--safeLightAccent-hsl),1);--menuOverlayButtonTextColor:hsla(var(--safeInverseLightAccent-hsl),1);--menuOverlayNavigationLinkColor:hsla(var(--safeLightAccent-hsl),1);--navigationLinkColor:hsla(var(--safeLightAccent-hsl),1);--paragraphLargeColor:hsla(var(--white-hsl),1);--paragraphLinkColor:hsla(var(--safeLightAccent-hsl),1);--paragraphMediumColor:hsla(var(--white-hsl),1);--paragraphSmallColor:hsla(var(--white-hsl),1);--portfolio-grid-basic-title-color:hsla(var(--safeLightAccent-hsl),1);--portfolio-grid-overlay-overlay-color:hsla(var(--black-hsl),1);--portfolio-grid-overlay-title-color:hsla(var(--white-hsl),1);--portfolio-hover-follow-title-color:hsla(var(--safeLightAccent-hsl),1);--portfolio-hover-static-title-color:hsla(var(--safeLightAccent-hsl),1);--portfolio-index-background-title-color:hsla(var(--white-hsl),1);--primaryButtonBackgroundColor:hsla(var(--safeLightAccent-hsl),1);--primaryButtonTextColor:hsla(var(--safeInverseLightAccent-hsl),1);--secondaryButtonBackgroundColor:hsla(var(--safeLightAccent-hsl),1);--secondaryButtonTextColor:hsla(var(--safeInverseLightAccent-hsl),1);--section-divider-stroke-color:hsla(var(--safeLightAccent-hsl),1);--section-inset-border-color:hsla(var(--black-hsl),1);--shape-block-background-color:hsla(var(--white-hsl),1);--shape-block-dropshadow-color:hsla(var(--white-hsl),1);--shape-block-stroke-color:hsla(var(--safeDarkAccent-hsl),1);--siteBackgroundColor:hsla(var(--black-hsl),1);--siteTitleColor:hsla(var(--safeLightAccent-hsl),1);--social-links-block-main-icon-color:hsla(var(--white-hsl),1);--social-links-block-secondary-icon-color:hsla(var(--black-hsl),1);--solidHeaderBackgroundColor:hsla(var(--white-hsl),1);--solidHeaderBorderColor:hsla(var(--black-hsl),1);--solidHeaderDropShadowColor:hsla(var(--black-hsl),1);--solidHeaderNavigationColor:hsla(var(--black-hsl),1);--summary-block-limited-availability-label-color:hsla(var(--white-hsl),1);--tertiaryButtonBackgroundColor:hsla(var(--safeLightAccent-hsl),1);--tertiaryButtonTextColor:hsla(var(--safeInverseLightAccent-hsl),1);--text-highlight-color:hsla(var(--safeLightAccent-hsl),1);--text-highlight-color-on-background:hsla(var(--safeLightAccent-hsl),1);--tweak-accordion-block-background-color:hsla(var(--white-hsl),1);--tweak-accordion-block-divider-color:hsla(var(--white-hsl),1);--tweak-accordion-block-divider-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-accordion-block-icon-color:hsla(var(--white-hsl),1);--tweak-accordion-block-icon-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-blog-alternating-side-by-side-list-excerpt-color:hsla(var(--white-hsl),1);--tweak-blog-alternating-side-by-side-list-meta-color:hsla(var(--white-hsl),1);--tweak-blog-alternating-side-by-side-list-read-more-color:hsla(var(--safeLightAccent-hsl),1);--tweak-blog-alternating-side-by-side-list-title-color:hsla(var(--safeLightAccent-hsl),1);--tweak-blog-basic-grid-list-excerpt-color:hsla(var(--white-hsl),1);--tweak-blog-basic-grid-list-meta-color:hsla(var(--white-hsl),1);--tweak-blog-basic-grid-list-read-more-color:hsla(var(--safeLightAccent-hsl),1);--tweak-blog-basic-grid-list-title-color:hsla(var(--safeLightAccent-hsl),1);--tweak-blog-item-author-profile-color:hsla(var(--white-hsl),1);--tweak-blog-item-comment-meta-color:hsla(var(--white-hsl),1);--tweak-blog-item-comment-text-color:hsla(var(--white-hsl),1);--tweak-blog-item-meta-color:hsla(var(--white-hsl),1);--tweak-blog-item-pagination-icon-color:hsla(var(--white-hsl),1);--tweak-blog-item-pagination-meta-color:hsla(var(--white-hsl),1);--tweak-blog-item-pagination-title-color:hsla(var(--white-hsl),1);--tweak-blog-item-title-color:hsla(var(--safeLightAccent-hsl),1);--tweak-blog-masonry-list-excerpt-color:hsla(var(--white-hsl),1);--tweak-blog-masonry-list-meta-color:hsla(var(--white-hsl),1);--tweak-blog-masonry-list-read-more-color:hsla(var(--safeLightAccent-hsl),1);--tweak-blog-masonry-list-title-color:hsla(var(--safeLightAccent-hsl),1);--tweak-blog-side-by-side-list-excerpt-color:hsla(var(--white-hsl),1);--tweak-blog-side-by-side-list-meta-color:hsla(var(--white-hsl),1);--tweak-blog-side-by-side-list-read-more-color:hsla(var(--safeLightAccent-hsl),1);--tweak-blog-side-by-side-list-title-color:hsla(var(--safeLightAccent-hsl),1);--tweak-blog-single-column-list-excerpt-color:hsla(var(--white-hsl),1);--tweak-blog-single-column-list-meta-color:hsla(var(--white-hsl),1);--tweak-blog-single-column-list-read-more-color:hsla(var(--safeLightAccent-hsl),1);--tweak-blog-single-column-list-title-color:hsla(var(--safeLightAccent-hsl),1);--tweak-content-link-block-title-color:hsla(var(--white-hsl),1);--tweak-events-item-pagination-date-color:hsla(var(--white-hsl),1);--tweak-events-item-pagination-icon-color:hsla(var(--white-hsl),1);--tweak-events-item-pagination-title-color:hsla(var(--white-hsl),1);--tweak-form-block-background-color:hsla(var(--white-hsl),1);--tweak-form-block-button-background-color:hsla(var(--safeLightAccent-hsl),1);--tweak-form-block-button-background-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-form-block-button-text-color:hsla(var(--safeInverseLightAccent-hsl),1);--tweak-form-block-button-text-color-on-background:hsla(var(--safeInverseDarkAccent-hsl),1);--tweak-form-block-caption-color:hsla(var(--white-hsl),1);--tweak-form-block-caption-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-form-block-description-color:hsla(var(--white-hsl),1);--tweak-form-block-description-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-form-block-option-color:hsla(var(--white-hsl),1);--tweak-form-block-option-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-form-block-survey-title-color:hsla(var(--white-hsl),1);--tweak-form-block-survey-title-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-form-block-title-color:hsla(var(--white-hsl),1);--tweak-form-block-title-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-form-block-field-fill-color:hsla(var(--darkAccent-hsl),1);--tweak-form-block-field-fill-color-hsl:var(--darkAccent-hsl);--tweak-form-block-field-fill-color-a:1;--tweak-form-block-field-border-color:hsla(var(--white-hsl),1);--tweak-form-block-field-border-color-hsl:var(--white-hsl);--tweak-form-block-field-border-color-a:1;--tweak-form-block-field-accessory-color:hsla(var(--white-hsl),1);--tweak-form-block-field-input-color:hsla(var(--white-hsl),1);--tweak-form-block-field-input-color-hsl:var(--white-hsl);--tweak-form-block-field-input-color-a:1;--tweak-form-block-field-fill-color-on-background:hsla(var(--lightAccent-hsl),1);--tweak-form-block-field-fill-color-on-background-hsl:var(--lightAccent-hsl);--tweak-form-block-field-fill-color-on-background-a:1;--tweak-form-block-field-border-color-on-background:hsla(var(--black-hsl),1);--tweak-form-block-field-border-color-on-background-hsl:var(--black-hsl);--tweak-form-block-field-border-color-on-background-a:1;--tweak-form-block-field-accessory-color-on-background:hsla(var(--black-hsl),1);--tweak-form-block-field-input-color-on-background:hsla(var(--black-hsl),1);--tweak-form-block-field-input-color-on-background-hsl:var(--black-hsl);--tweak-form-block-field-input-color-on-background-a:1;--tweak-gallery-icon-background-color:hsla(var(--black-hsl),1);--tweak-gallery-icon-color:hsla(var(--white-hsl),1);--tweak-gallery-lightbox-background-color:hsla(var(--black-hsl),1);--tweak-gallery-lightbox-icon-color:hsla(var(--white-hsl),1);--tweak-heading-extra-large-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-heading-large-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-heading-medium-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-heading-small-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-line-block-line-color:hsla(var(--safeLightAccent-hsl),1);--tweak-marquee-block-background-color:hsla(var(--white-hsl),1);--tweak-marquee-block-heading-color:hsla(var(--white-hsl),1);--tweak-marquee-block-heading-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-marquee-block-paragraph-color:hsla(var(--white-hsl),1);--tweak-marquee-block-paragraph-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-menu-block-item-description-color:hsla(var(--white-hsl),1);--tweak-menu-block-item-price-color:hsla(var(--white-hsl),1);--tweak-menu-block-item-title-color:hsla(var(--white-hsl),1);--tweak-menu-block-nav-color:hsla(var(--safeLightAccent-hsl),1);--tweak-menu-block-title-color:hsla(var(--safeLightAccent-hsl),1);--tweak-newsletter-block-background-color:hsla(var(--white-hsl),1);--tweak-newsletter-block-button-background-color:hsla(var(--safeLightAccent-hsl),1);--tweak-newsletter-block-button-background-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-newsletter-block-button-text-color:hsla(var(--safeInverseLightAccent-hsl),1);--tweak-newsletter-block-button-text-color-on-background:hsla(var(--safeInverseDarkAccent-hsl),1);--tweak-newsletter-block-description-color:hsla(var(--white-hsl),1);--tweak-newsletter-block-description-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-newsletter-block-footnote-color:hsla(var(--white-hsl),1);--tweak-newsletter-block-footnote-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-newsletter-block-title-color:hsla(var(--white-hsl),1);--tweak-newsletter-block-title-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-paragraph-large-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-paragraph-link-color-on-background:hsla(var(--safeLightAccent-hsl),1);--tweak-paragraph-medium-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-paragraph-small-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-portfolio-item-pagination-icon-color:hsla(var(--white-hsl),1);--tweak-portfolio-item-pagination-meta-color:hsla(var(--white-hsl),1);--tweak-portfolio-item-pagination-title-color:hsla(var(--white-hsl),1);--tweak-product-basic-item-breadcumb-nav-color:hsla(var(--white-hsl),1);--tweak-product-basic-item-description-color:hsla(var(--white-hsl),1);--tweak-product-basic-item-gallery-controls-color:hsla(var(--safeInverseLightAccent-hsl),1);--tweak-product-basic-item-price-color:hsla(var(--white-hsl),1);--tweak-product-basic-item-sale-price-color:hsla(var(--accent-hsl),1);--tweak-product-basic-item-scarcity-color:hsla(var(--accent-hsl),1);--tweak-product-basic-item-title-color:hsla(var(--safeLightAccent-hsl),1);--tweak-product-basic-item-variant-fields-color:hsla(var(--white-hsl),1);--tweak-product-grid-text-below-list-category-nav-color:hsla(var(--white-hsl),1);--tweak-product-grid-text-below-list-pagination-color:hsla(var(--white-hsl),1);--tweak-product-grid-text-below-list-price-color:hsla(var(--white-hsl),1);--tweak-product-grid-text-below-list-sale-price-color:hsla(var(--accent-hsl),1);--tweak-product-grid-text-below-list-scarcity-color:hsla(var(--white-hsl),1);--tweak-product-grid-text-below-list-status-color:hsla(var(--accent-hsl),1);--tweak-product-grid-text-below-list-title-color:hsla(var(--safeLightAccent-hsl),1);--tweak-product-quick-view-button-color:hsla(var(--black-hsl),1);--tweak-product-quick-view-lightbox-controls-color:hsla(var(--black-hsl),1);--tweak-product-quick-view-lightbox-overlay-color:hsla(var(--white-hsl),1);--tweak-quote-block-background-color:hsla(var(--white-hsl),1);--tweak-quote-block-source-color:hsla(var(--white-hsl),1);--tweak-quote-block-source-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-quote-block-text-color:hsla(var(--white-hsl),1);--tweak-quote-block-text-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-summary-block-background-color:hsla(var(--white-hsl),1);--tweak-summary-block-excerpt-color:hsla(var(--white-hsl),1);--tweak-summary-block-excerpt-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-summary-block-header-text-color:hsla(var(--white-hsl),1);--tweak-summary-block-header-text-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-summary-block-primary-metadata-color:hsla(var(--white-hsl),1);--tweak-summary-block-primary-metadata-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-summary-block-read-more-color:hsla(var(--white-hsl),1);--tweak-summary-block-read-more-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-summary-block-secondary-metadata-color:hsla(var(--white-hsl),1);--tweak-summary-block-secondary-metadata-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-summary-block-title-color:hsla(var(--white-hsl),1);--tweak-summary-block-title-color-on-background:hsla(var(--safeDarkAccent-hsl),1);--tweak-text-block-background-color:hsla(var(--white-hsl),1);--tweak-video-item-description-color:hsla(var(--accent-hsl),1);--tweak-video-item-meta-color:hsla(var(--accent-hsl),1);--tweak-video-item-pagination-icon-color:hsla(var(--accent-hsl),1);--tweak-video-item-pagination-title-color:hsla(var(--accent-hsl),1);--tweak-video-item-title-color:hsla(var(--accent-hsl),1);--video-grid-basic-description-color:hsla(var(--accent-hsl),1);--video-grid-basic-meta-color:hsla(var(--accent-hsl),1);--video-grid-basic-title-color:hsla(var(--accent-hsl),1);--video-grid-category-nav-color:hsla(var(--accent-hsl),1);}.bright {--announcement-bar-background-color:hsla(var(--safeInverseAccent-hsl),1);--announcement-bar-text-color:hsla(var(--accent-hsl),1);--backgroundOverlayColor:hsla(var(--accent-hsl),1);--course-item-nav-active-lesson-background-color:hsla(var(--lightAccent-hsl),1);--course-item-nav-active-lesson-text-color:hsla(var(--black-hsl),1);--course-item-nav-background-color:hsla(var(--black-hsl),1);--course-item-nav-border-color:hsla(var(--white-hsl),0.25);--course-item-nav-text-color:hsla(var(--white-hsl),1);--course-list-course-progress-bar-color:hsla(var(--darkAccent-hsl),1);--course-list-course-item-background:hsla(var(--black-hsl),1);--course-list-course-item-hover-background:hsla(var(--black-hsl),0.9);--course-list-course-item-text-color:hsla(var(--lightAccent-hsl),1);--course-list-course-chapter-divider-color:hsla(var(--darkAccent-hsl),1);--course-list-grid-layout-chapter-divider-color:hsla(var(--safeInverseAccent-hsl),1);--course-list-grid-layout-course-item-background-color:hsla(var(--black-hsl),1);--course-list-grid-layout-course-item-hover-background-color:hsla(var(--black-hsl),0.9);--course-list-grid-layout-course-item-text-color:hsla(var(--lightAccent-hsl),1);--course-list-grid-layout-course-item-border-color:hsla(var(--darkAccent-hsl),1);--gradientHeaderBackgroundColor:hsla(var(--white-hsl),1);--gradientHeaderBorderColor:hsla(var(--black-hsl),1);--gradientHeaderDropShadowColor:hsla(var(--black-hsl),1);--gradientHeaderNavigationColor:hsla(var(--black-hsl),1);--headerDropShadowColor:hsla(var(--black-hsl),1);--headerBorderColor:hsla(var(--black-hsl),1);--headingExtraLargeColor:hsla(var(--safeInverseAccent-hsl),1);--headingLargeColor:hsla(var(--safeInverseAccent-hsl),1);--headingLinkColor:hsla(var(--safeInverseAccent-hsl),1);--headingMediumColor:hsla(var(--safeInverseAccent-hsl),1);--headingSmallColor:hsla(var(--safeInverseAccent-hsl),1);--image-block-card-image-button-bg-color:hsla(var(--safeInverseAccent-hsl),1);--image-block-card-image-button-text-color:hsla(var(--accent-hsl),1);--image-block-card-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-card-image-subtitle-color:hsla(var(--safeInverseAccent-hsl),1);--image-block-card-image-title-bg-color:hsla(var(--accent-hsl),0);--image-block-card-image-title-color:hsla(var(--safeInverseAccent-hsl),1);--image-block-card-inline-link-color:hsla(var(--safeInverseAccent-hsl),1);--image-block-collage-background-color:hsla(var(--safeInverseAccent-hsl),1);--image-block-collage-image-button-bg-color:hsla(var(--accent-hsl),1);--image-block-collage-image-button-text-color:hsla(var(--safeInverseAccent-hsl),1);--image-block-collage-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-collage-image-subtitle-color:hsla(var(--accent-hsl),1);--image-block-collage-image-title-bg-color:hsla(var(--accent-hsl),0);--image-block-collage-image-title-color:hsla(var(--accent-hsl),1);--image-block-collage-inline-link-color:hsla(var(--accent-hsl),1);--image-block-overlap-image-button-bg-color:hsla(var(--safeInverseAccent-hsl),1);--image-block-overlap-image-button-text-color:hsla(var(--accent-hsl),1);--image-block-overlap-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-overlap-image-subtitle-color:hsla(var(--safeInverseAccent-hsl),1);--image-block-overlap-image-title-bg-color:hsla(var(--accent-hsl),1);--image-block-overlap-image-title-color:hsla(var(--safeInverseAccent-hsl),1);--image-block-overlap-inline-link-color:hsla(var(--safeInverseAccent-hsl),1);--image-block-overlay-color:hsla(var(--black-hsl),0.5);--image-block-poster-image-button-bg-color:hsla(var(--safeInverseAccent-hsl),1);--image-block-poster-image-button-text-color:hsla(var(--accent-hsl),1);--image-block-poster-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-poster-image-subtitle-color:hsla(var(--white-hsl),1);--image-block-poster-image-title-bg-color-v2:hsla(var(--accent-hsl),0);--image-block-poster-image-title-color:hsla(var(--white-hsl),1);--image-block-poster-inline-link-color:hsla(var(--white-hsl),1);--image-block-stack-image-button-bg-color:hsla(var(--safeInverseAccent-hsl),1);--image-block-stack-image-button-text-color:hsla(var(--accent-hsl),1);--image-block-stack-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-stack-image-subtitle-color:hsla(var(--safeInverseAccent-hsl),1);--image-block-stack-image-title-bg-color:hsla(var(--accent-hsl),0);--image-block-stack-image-title-color:hsla(var(--safeInverseAccent-hsl),1);--image-block-stack-inline-link-color:hsla(var(--safeInverseAccent-hsl),1);--list-section-banner-slideshow-arrow-background-color:hsla(var(--safeInverseAccent-hsl),1);--list-section-banner-slideshow-arrow-color:hsla(var(--accent-hsl),1);--list-section-banner-slideshow-button-background-color:hsla(var(--safeInverseAccent-hsl),1);--list-section-banner-slideshow-button-text-color:hsla(var(--accent-hsl),1);--list-section-banner-slideshow-card-button-background-color:hsla(var(--accent-hsl),1);--list-section-banner-slideshow-card-button-text-color:hsla(var(--safeInverseAccent-hsl),1);--list-section-banner-slideshow-card-color:hsla(var(--safeInverseAccent-hsl),1);--list-section-banner-slideshow-card-description-color:hsla(var(--accent-hsl),1);--list-section-banner-slideshow-card-description-link-color:hsla(var(--accent-hsl),1);--list-section-banner-slideshow-card-title-color:hsla(var(--accent-hsl),1);--list-section-banner-slideshow-description-color:hsla(var(--safeInverseAccent-hsl),1);--list-section-banner-slideshow-title-color:hsla(var(--safeInverseAccent-hsl),1);--list-section-carousel-arrow-background-color:hsla(var(--safeInverseAccent-hsl),1);--list-section-carousel-arrow-color:hsla(var(--accent-hsl),1);--list-section-carousel-button-background-color:hsla(var(--safeInverseAccent-hsl),1);--list-section-carousel-button-text-color:hsla(var(--accent-hsl),1);--list-section-carousel-card-button-background-color:hsla(var(--accent-hsl),1);--list-section-carousel-card-button-text-color:hsla(var(--safeInverseAccent-hsl),1);--list-section-carousel-card-color:hsla(var(--safeInverseAccent-hsl),1);--list-section-carousel-card-description-color:hsla(var(--accent-hsl),1);--list-section-carousel-card-description-link-color:hsla(var(--accent-hsl),1);--list-section-carousel-card-title-color:hsla(var(--accent-hsl),1);--list-section-carousel-description-color:hsla(var(--safeInverseAccent-hsl),1);--list-section-carousel-title-color:hsla(var(--safeInverseAccent-hsl),1);--list-section-simple-button-background-color:hsla(var(--safeInverseAccent-hsl),1);--list-section-simple-button-text-color:hsla(var(--accent-hsl),1);--list-section-simple-card-button-background-color:hsla(var(--accent-hsl),1);--list-section-simple-card-button-text-color:hsla(var(--safeInverseAccent-hsl),1);--list-section-simple-card-color:hsla(var(--safeInverseAccent-hsl),1);--list-section-simple-card-description-color:hsla(var(--accent-hsl),1);--list-section-simple-card-description-link-color:hsla(var(--accent-hsl),1);--list-section-simple-card-title-color:hsla(var(--accent-hsl),1);--list-section-simple-description-color:hsla(var(--safeInverseAccent-hsl),1);--list-section-simple-title-color:hsla(var(--safeInverseAccent-hsl),1);--list-section-title-color:hsla(var(--safeInverseAccent-hsl),1);--menuOverlayBackgroundColor:hsla(var(--accent-hsl),1);--menuOverlayButtonBackgroundColor:hsla(var(--safeInverseAccent-hsl),1);--menuOverlayButtonTextColor:hsla(var(--accent-hsl),1);--menuOverlayNavigationLinkColor:hsla(var(--safeInverseAccent-hsl),1);--navigationLinkColor:hsla(var(--safeInverseAccent-hsl),1);--paragraphLargeColor:hsla(var(--safeInverseAccent-hsl),1);--paragraphLinkColor:hsla(var(--safeInverseAccent-hsl),1);--paragraphMediumColor:hsla(var(--safeInverseAccent-hsl),1);--paragraphSmallColor:hsla(var(--safeInverseAccent-hsl),1);--portfolio-grid-basic-title-color:hsla(var(--safeInverseAccent-hsl),1);--portfolio-grid-overlay-overlay-color:hsla(var(--accent-hsl),1);--portfolio-grid-overlay-title-color:hsla(var(--safeInverseAccent-hsl),1);--portfolio-hover-follow-title-color:hsla(var(--safeInverseAccent-hsl),1);--portfolio-hover-static-title-color:hsla(var(--safeInverseAccent-hsl),1);--portfolio-index-background-title-color:hsla(var(--safeInverseAccent-hsl),1);--primaryButtonBackgroundColor:hsla(var(--safeInverseAccent-hsl),1);--primaryButtonTextColor:hsla(var(--accent-hsl),1);--secondaryButtonBackgroundColor:hsla(var(--safeInverseAccent-hsl),1);--secondaryButtonTextColor:hsla(var(--accent-hsl),1);--section-divider-stroke-color:hsla(var(--safeInverseAccent-hsl),1);--section-inset-border-color:hsla(var(--accent-hsl),1);--shape-block-background-color:hsla(var(--safeInverseAccent-hsl),1);--shape-block-dropshadow-color:hsla(var(--safeInverseAccent-hsl),1);--shape-block-stroke-color:hsla(var(--black-hsl),1);--siteBackgroundColor:hsla(var(--accent-hsl),1);--siteTitleColor:hsla(var(--safeInverseAccent-hsl),1);--social-links-block-main-icon-color:hsla(var(--safeInverseAccent-hsl),1);--social-links-block-secondary-icon-color:hsla(var(--accent-hsl),1);--solidHeaderBackgroundColor:hsla(var(--white-hsl),1);--solidHeaderBorderColor:hsla(var(--black-hsl),1);--solidHeaderDropShadowColor:hsla(var(--black-hsl),1);--solidHeaderNavigationColor:hsla(var(--black-hsl),1);--summary-block-limited-availability-label-color:hsla(var(--safeInverseAccent-hsl),1);--tertiaryButtonBackgroundColor:hsla(var(--safeInverseAccent-hsl),1);--tertiaryButtonTextColor:hsla(var(--accent-hsl),1);--text-highlight-color:hsla(var(--safeInverseAccent-hsl),1);--text-highlight-color-on-background:hsla(var(--accent-hsl),1);--tweak-accordion-block-background-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-accordion-block-divider-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-accordion-block-divider-color-on-background:hsla(var(--accent-hsl),1);--tweak-accordion-block-icon-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-accordion-block-icon-color-on-background:hsla(var(--accent-hsl),1);--tweak-blog-alternating-side-by-side-list-excerpt-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-blog-alternating-side-by-side-list-meta-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-blog-alternating-side-by-side-list-read-more-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-blog-alternating-side-by-side-list-title-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-blog-basic-grid-list-excerpt-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-blog-basic-grid-list-meta-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-blog-basic-grid-list-read-more-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-blog-basic-grid-list-title-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-blog-item-author-profile-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-blog-item-comment-meta-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-blog-item-comment-text-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-blog-item-meta-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-blog-item-pagination-icon-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-blog-item-pagination-meta-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-blog-item-pagination-title-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-blog-item-title-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-blog-masonry-list-excerpt-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-blog-masonry-list-meta-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-blog-masonry-list-read-more-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-blog-masonry-list-title-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-blog-side-by-side-list-excerpt-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-blog-side-by-side-list-meta-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-blog-side-by-side-list-read-more-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-blog-side-by-side-list-title-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-blog-single-column-list-excerpt-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-blog-single-column-list-meta-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-blog-single-column-list-read-more-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-blog-single-column-list-title-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-content-link-block-title-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-events-item-pagination-date-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-events-item-pagination-icon-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-events-item-pagination-title-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-form-block-background-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-form-block-button-background-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-form-block-button-background-color-on-background:hsla(var(--accent-hsl),1);--tweak-form-block-button-text-color:hsla(var(--accent-hsl),1);--tweak-form-block-button-text-color-on-background:hsla(var(--safeInverseAccent-hsl),1);--tweak-form-block-caption-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-form-block-caption-color-on-background:hsla(var(--accent-hsl),1);--tweak-form-block-description-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-form-block-description-color-on-background:hsla(var(--accent-hsl),1);--tweak-form-block-option-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-form-block-option-color-on-background:hsla(var(--accent-hsl),1);--tweak-form-block-survey-title-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-form-block-survey-title-color-on-background:hsla(var(--accent-hsl),1);--tweak-form-block-title-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-form-block-title-color-on-background:hsla(var(--accent-hsl),1);--tweak-form-block-field-fill-color:hsla(var(--white-hsl),1);--tweak-form-block-field-fill-color-hsl:var(--white-hsl);--tweak-form-block-field-fill-color-a:1;--tweak-form-block-field-border-color:hsla(var(--black-hsl),1);--tweak-form-block-field-border-color-hsl:var(--black-hsl);--tweak-form-block-field-border-color-a:1;--tweak-form-block-field-input-color:hsla(var(--black-hsl),1);--tweak-form-block-field-input-color-hsl:var(--black-hsl);--tweak-form-block-field-input-color-a:1;--tweak-form-block-field-accessory-color:hsla(var(--black-hsl),1);--tweak-form-block-field-fill-color-on-background:hsla(var(--darkAccent-hsl),1);--tweak-form-block-field-fill-color-on-background-hsl:var(--darkAccent-hsl);--tweak-form-block-field-fill-color-on-background-a:1;--tweak-form-block-field-border-color-on-background:hsla(var(--accent-hsl),1);--tweak-form-block-field-border-color-on-background-hsl:var(--accent-hsl);--tweak-form-block-field-border-color-on-background-a:1;--tweak-form-block-field-input-color-on-background:hsla(var(--accent-hsl),1);--tweak-form-block-field-input-color-on-background-hsl:var(--accent-hsl);--tweak-form-block-field-input-color-on-background-a:1;--tweak-form-block-field-accessory-color-on-background:hsla(var(--accent-hsl),1);--tweak-gallery-icon-background-color:hsla(var(--accent-hsl),1);--tweak-gallery-icon-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-gallery-lightbox-background-color:hsla(var(--accent-hsl),1);--tweak-gallery-lightbox-icon-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-heading-extra-large-color-on-background:hsla(var(--accent-hsl),1);--tweak-heading-large-color-on-background:hsla(var(--accent-hsl),1);--tweak-heading-medium-color-on-background:hsla(var(--accent-hsl),1);--tweak-heading-small-color-on-background:hsla(var(--accent-hsl),1);--tweak-line-block-line-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-marquee-block-background-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-marquee-block-heading-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-marquee-block-heading-color-on-background:hsla(var(--accent-hsl),1);--tweak-marquee-block-paragraph-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-marquee-block-paragraph-color-on-background:hsla(var(--accent-hsl),1);--tweak-menu-block-item-description-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-menu-block-item-price-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-menu-block-item-title-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-menu-block-nav-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-menu-block-title-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-newsletter-block-background-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-newsletter-block-button-background-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-newsletter-block-button-background-color-on-background:hsla(var(--accent-hsl),1);--tweak-newsletter-block-button-text-color:hsla(var(--accent-hsl),1);--tweak-newsletter-block-button-text-color-on-background:hsla(var(--safeInverseAccent-hsl),1);--tweak-newsletter-block-description-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-newsletter-block-description-color-on-background:hsla(var(--accent-hsl),1);--tweak-newsletter-block-footnote-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-newsletter-block-footnote-color-on-background:hsla(var(--accent-hsl),1);--tweak-newsletter-block-title-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-newsletter-block-title-color-on-background:hsla(var(--accent-hsl),1);--tweak-paragraph-large-color-on-background:hsla(var(--accent-hsl),1);--tweak-paragraph-link-color-on-background:hsla(var(--accent-hsl),1);--tweak-paragraph-medium-color-on-background:hsla(var(--accent-hsl),1);--tweak-paragraph-small-color-on-background:hsla(var(--accent-hsl),1);--tweak-portfolio-item-pagination-icon-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-portfolio-item-pagination-meta-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-portfolio-item-pagination-title-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-product-basic-item-breadcumb-nav-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-product-basic-item-description-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-product-basic-item-gallery-controls-color:hsla(var(--safeInverseLightAccent-hsl),1);--tweak-product-basic-item-price-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-product-basic-item-sale-price-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-product-basic-item-scarcity-color:hsla(var(--white-hsl),1);--tweak-product-basic-item-title-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-product-basic-item-variant-fields-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-product-grid-text-below-list-category-nav-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-product-grid-text-below-list-pagination-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-product-grid-text-below-list-price-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-product-grid-text-below-list-sale-price-color:hsla(var(--white-hsl),1);--tweak-product-grid-text-below-list-scarcity-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-product-grid-text-below-list-status-color:hsla(var(--white-hsl),1);--tweak-product-grid-text-below-list-title-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-product-quick-view-button-color:hsla(var(--black-hsl),1);--tweak-product-quick-view-lightbox-controls-color:hsla(var(--black-hsl),1);--tweak-product-quick-view-lightbox-overlay-color:hsla(var(--white-hsl),1);--tweak-quote-block-background-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-quote-block-source-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-quote-block-source-color-on-background:hsla(var(--accent-hsl),1);--tweak-quote-block-text-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-quote-block-text-color-on-background:hsla(var(--accent-hsl),1);--tweak-summary-block-background-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-summary-block-excerpt-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-summary-block-excerpt-color-on-background:hsla(var(--accent-hsl),1);--tweak-summary-block-header-text-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-summary-block-header-text-color-on-background:hsla(var(--accent-hsl),1);--tweak-summary-block-primary-metadata-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-summary-block-primary-metadata-color-on-background:hsla(var(--accent-hsl),1);--tweak-summary-block-read-more-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-summary-block-read-more-color-on-background:hsla(var(--accent-hsl),1);--tweak-summary-block-secondary-metadata-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-summary-block-secondary-metadata-color-on-background:hsla(var(--accent-hsl),1);--tweak-summary-block-title-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-summary-block-title-color-on-background:hsla(var(--accent-hsl),1);--tweak-text-block-background-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-video-item-description-color:hsla(var(--white-hsl),1);--tweak-video-item-meta-color:hsla(var(--white-hsl),1);--tweak-video-item-pagination-icon-color:hsla(var(--white-hsl),1);--tweak-video-item-pagination-title-color:hsla(var(--white-hsl),1);--tweak-video-item-title-color:hsla(var(--white-hsl),1);--video-grid-basic-description-color:hsla(var(--white-hsl),1);--video-grid-basic-meta-color:hsla(var(--white-hsl),1);--video-grid-basic-title-color:hsla(var(--white-hsl),1);--video-grid-category-nav-color:hsla(var(--white-hsl),1);}.bright-inverse {--announcement-bar-background-color:hsla(var(--accent-hsl),1);--announcement-bar-text-color:hsla(var(--safeInverseAccent-hsl),1);--backgroundOverlayColor:hsla(var(--safeInverseAccent-hsl),1);--course-item-nav-active-lesson-background-color:hsla(var(--darkAccent-hsl),1);--course-item-nav-active-lesson-text-color:hsla(var(--white-hsl),1);--course-item-nav-background-color:hsla(var(--lightAccent-hsl),1);--course-item-nav-border-color:hsla(var(--black-hsl),0.25);--course-item-nav-text-color:hsla(var(--black-hsl),1);--course-list-course-progress-bar-color:hsla(var(--darkAccent-hsl),1);--course-list-course-item-background:hsla(var(--lightAccent-hsl),1);--course-list-course-item-hover-background:hsla(var(--lightAccent-hsl),0.95);--course-list-course-item-text-color:hsla(var(--black-hsl),1);--course-list-course-chapter-divider-color:hsla(var(--darkAccent-hsl),1);--course-list-grid-layout-chapter-divider-color:hsla(var(--accent-hsl),1);--course-list-grid-layout-course-item-background-color:hsla(var(--lightAccent-hsl),1);--course-list-grid-layout-course-item-hover-background-color:hsla(var(--lightAccent-hsl),0.95);--course-list-grid-layout-course-item-text-color:hsla(var(--black-hsl),1);--course-list-grid-layout-course-item-border-color:hsla(var(--darkAccent-hsl),1);--gradientHeaderBackgroundColor:hsla(var(--white-hsl),1);--gradientHeaderBorderColor:hsla(var(--black-hsl),1);--gradientHeaderDropShadowColor:hsla(var(--black-hsl),1);--gradientHeaderNavigationColor:hsla(var(--black-hsl),1);--headerDropShadowColor:hsla(var(--black-hsl),1);--headerBorderColor:hsla(var(--black-hsl),1);--headingExtraLargeColor:hsla(var(--accent-hsl),1);--headingLargeColor:hsla(var(--accent-hsl),1);--headingLinkColor:hsla(var(--accent-hsl),1);--headingMediumColor:hsla(var(--accent-hsl),1);--headingSmallColor:hsla(var(--accent-hsl),1);--image-block-card-image-button-bg-color:hsla(var(--accent-hsl),1);--image-block-card-image-button-text-color:hsla(var(--safeInverseAccent-hsl),1);--image-block-card-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-card-image-subtitle-color:hsla(var(--accent-hsl),1);--image-block-card-image-title-bg-color:hsla(var(--safeInverseAccent-hsl),0);--image-block-card-image-title-color:hsla(var(--accent-hsl),1);--image-block-card-inline-link-color:hsla(var(--accent-hsl),1);--image-block-collage-background-color:hsla(var(--accent-hsl),1);--image-block-collage-image-button-bg-color:hsla(var(--safeInverseAccent-hsl),1);--image-block-collage-image-button-text-color:hsla(var(--accent-hsl),1);--image-block-collage-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-collage-image-subtitle-color:hsla(var(--safeInverseAccent-hsl),1);--image-block-collage-image-title-bg-color:hsla(var(--safeInverseAccent-hsl),0);--image-block-collage-image-title-color:hsla(var(--safeInverseAccent-hsl),1);--image-block-collage-inline-link-color:hsla(var(--safeInverseAccent-hsl),1);--image-block-overlap-image-button-bg-color:hsla(var(--accent-hsl),1);--image-block-overlap-image-button-text-color:hsla(var(--safeInverseAccent-hsl),1);--image-block-overlap-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-overlap-image-subtitle-color:hsla(var(--accent-hsl),1);--image-block-overlap-image-title-bg-color:hsla(var(--safeInverseAccent-hsl),1);--image-block-overlap-image-title-color:hsla(var(--accent-hsl),1);--image-block-overlap-inline-link-color:hsla(var(--accent-hsl),1);--image-block-overlay-color:hsla(var(--black-hsl),0.5);--image-block-poster-image-button-bg-color:hsla(var(--accent-hsl),1);--image-block-poster-image-button-text-color:hsla(var(--safeInverseAccent-hsl),1);--image-block-poster-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-poster-image-subtitle-color:hsla(var(--white-hsl),1);--image-block-poster-image-title-bg-color-v2:hsla(var(--safeInverseAccent-hsl),0);--image-block-poster-image-title-color:hsla(var(--white-hsl),1);--image-block-poster-inline-link-color:hsla(var(--white-hsl),1);--image-block-stack-image-button-bg-color:hsla(var(--accent-hsl),1);--image-block-stack-image-button-text-color:hsla(var(--safeInverseAccent-hsl),1);--image-block-stack-image-overlay-color:hsla(var(--darkAccent-hsl),1);--image-block-stack-image-subtitle-color:hsla(var(--accent-hsl),1);--image-block-stack-image-title-bg-color:hsla(var(--safeInverseAccent-hsl),0);--image-block-stack-image-title-color:hsla(var(--accent-hsl),1);--image-block-stack-inline-link-color:hsla(var(--accent-hsl),1);--list-section-banner-slideshow-arrow-background-color:hsla(var(--accent-hsl),1);--list-section-banner-slideshow-arrow-color:hsla(var(--safeInverseAccent-hsl),1);--list-section-banner-slideshow-button-background-color:hsla(var(--accent-hsl),1);--list-section-banner-slideshow-button-text-color:hsla(var(--safeInverseAccent-hsl),1);--list-section-banner-slideshow-card-button-background-color:hsla(var(--safeInverseAccent-hsl),1);--list-section-banner-slideshow-card-button-text-color:hsla(var(--accent-hsl),1);--list-section-banner-slideshow-card-color:hsla(var(--accent-hsl),1);--list-section-banner-slideshow-card-description-color:hsla(var(--safeInverseAccent-hsl),1);--list-section-banner-slideshow-card-description-link-color:hsla(var(--safeInverseAccent-hsl),1);--list-section-banner-slideshow-card-title-color:hsla(var(--safeInverseAccent-hsl),1);--list-section-banner-slideshow-description-color:hsla(var(--accent-hsl),1);--list-section-banner-slideshow-title-color:hsla(var(--accent-hsl),1);--list-section-carousel-arrow-background-color:hsla(var(--accent-hsl),1);--list-section-carousel-arrow-color:hsla(var(--safeInverseAccent-hsl),1);--list-section-carousel-button-background-color:hsla(var(--accent-hsl),1);--list-section-carousel-button-text-color:hsla(var(--safeInverseAccent-hsl),1);--list-section-carousel-card-button-background-color:hsla(var(--safeInverseAccent-hsl),1);--list-section-carousel-card-button-text-color:hsla(var(--accent-hsl),1);--list-section-carousel-card-color:hsla(var(--accent-hsl),1);--list-section-carousel-card-description-color:hsla(var(--safeInverseAccent-hsl),1);--list-section-carousel-card-description-link-color:hsla(var(--safeInverseAccent-hsl),1);--list-section-carousel-card-title-color:hsla(var(--safeInverseAccent-hsl),1);--list-section-carousel-description-color:hsla(var(--accent-hsl),1);--list-section-carousel-title-color:hsla(var(--accent-hsl),1);--list-section-simple-button-background-color:hsla(var(--accent-hsl),1);--list-section-simple-button-text-color:hsla(var(--safeInverseAccent-hsl),1);--list-section-simple-card-button-background-color:hsla(var(--safeInverseAccent-hsl),1);--list-section-simple-card-button-text-color:hsla(var(--accent-hsl),1);--list-section-simple-card-color:hsla(var(--accent-hsl),1);--list-section-simple-card-description-color:hsla(var(--safeInverseAccent-hsl),1);--list-section-simple-card-description-link-color:hsla(var(--safeInverseAccent-hsl),1);--list-section-simple-card-title-color:hsla(var(--safeInverseAccent-hsl),1);--list-section-simple-description-color:hsla(var(--accent-hsl),1);--list-section-simple-title-color:hsla(var(--accent-hsl),1);--list-section-title-color:hsla(var(--accent-hsl),1);--menuOverlayBackgroundColor:hsla(var(--safeInverseAccent-hsl),1);--menuOverlayButtonBackgroundColor:hsla(var(--accent-hsl),1);--menuOverlayButtonTextColor:hsla(var(--safeInverseAccent-hsl),1);--menuOverlayNavigationLinkColor:hsla(var(--accent-hsl),1);--navigationLinkColor:hsla(var(--accent-hsl),1);--paragraphLargeColor:hsla(var(--accent-hsl),1);--paragraphLinkColor:hsla(var(--accent-hsl),1);--paragraphMediumColor:hsla(var(--accent-hsl),1);--paragraphSmallColor:hsla(var(--accent-hsl),1);--portfolio-grid-basic-title-color:hsla(var(--accent-hsl),1);--portfolio-grid-overlay-overlay-color:hsla(var(--safeInverseAccent-hsl),1);--portfolio-grid-overlay-title-color:hsla(var(--accent-hsl),1);--portfolio-hover-follow-title-color:hsla(var(--accent-hsl),1);--portfolio-hover-static-title-color:hsla(var(--accent-hsl),1);--portfolio-index-background-title-color:hsla(var(--accent-hsl),1);--primaryButtonBackgroundColor:hsla(var(--accent-hsl),1);--primaryButtonTextColor:hsla(var(--safeInverseAccent-hsl),1);--secondaryButtonBackgroundColor:hsla(var(--accent-hsl),1);--secondaryButtonTextColor:hsla(var(--safeInverseAccent-hsl),1);--section-divider-stroke-color:hsla(var(--accent-hsl),1);--section-inset-border-color:hsla(var(--safeInverseAccent-hsl),1);--shape-block-background-color:hsla(var(--accent-hsl),1);--shape-block-dropshadow-color:hsla(var(--accent-hsl),1);--shape-block-stroke-color:hsla(var(--black-hsl),1);--siteBackgroundColor:hsla(var(--safeInverseAccent-hsl),1);--siteTitleColor:hsla(var(--accent-hsl),1);--social-links-block-main-icon-color:hsla(var(--accent-hsl),1);--social-links-block-secondary-icon-color:hsla(var(--safeInverseAccent-hsl),1);--solidHeaderBackgroundColor:hsla(var(--white-hsl),1);--solidHeaderBorderColor:hsla(var(--black-hsl),1);--solidHeaderDropShadowColor:hsla(var(--black-hsl),1);--solidHeaderNavigationColor:hsla(var(--black-hsl),1);--summary-block-limited-availability-label-color:hsla(var(--accent-hsl),1);--tertiaryButtonBackgroundColor:hsla(var(--accent-hsl),1);--tertiaryButtonTextColor:hsla(var(--safeInverseAccent-hsl),1);--text-highlight-color:hsla(var(--accent-hsl),1);--text-highlight-color-on-background:hsla(var(--safeInverseAccent-hsl),1);--tweak-accordion-block-background-color:hsla(var(--accent-hsl),1);--tweak-accordion-block-divider-color:hsla(var(--accent-hsl),1);--tweak-accordion-block-divider-color-on-background:hsla(var(--safeInverseAccent-hsl),1);--tweak-accordion-block-icon-color:hsla(var(--accent-hsl),1);--tweak-accordion-block-icon-color-on-background:hsla(var(--safeInverseAccent-hsl),1);--tweak-blog-alternating-side-by-side-list-excerpt-color:hsla(var(--accent-hsl),1);--tweak-blog-alternating-side-by-side-list-meta-color:hsla(var(--accent-hsl),1);--tweak-blog-alternating-side-by-side-list-read-more-color:hsla(var(--accent-hsl),1);--tweak-blog-alternating-side-by-side-list-title-color:hsla(var(--accent-hsl),1);--tweak-blog-basic-grid-list-excerpt-color:hsla(var(--accent-hsl),1);--tweak-blog-basic-grid-list-meta-color:hsla(var(--accent-hsl),1);--tweak-blog-basic-grid-list-read-more-color:hsla(var(--accent-hsl),1);--tweak-blog-basic-grid-list-title-color:hsla(var(--accent-hsl),1);--tweak-blog-item-author-profile-color:hsla(var(--accent-hsl),1);--tweak-blog-item-comment-meta-color:hsla(var(--accent-hsl),1);--tweak-blog-item-comment-text-color:hsla(var(--accent-hsl),1);--tweak-blog-item-meta-color:hsla(var(--accent-hsl),1);--tweak-blog-item-pagination-icon-color:hsla(var(--accent-hsl),1);--tweak-blog-item-pagination-meta-color:hsla(var(--accent-hsl),1);--tweak-blog-item-pagination-title-color:hsla(var(--accent-hsl),1);--tweak-blog-item-title-color:hsla(var(--accent-hsl),1);--tweak-blog-masonry-list-excerpt-color:hsla(var(--accent-hsl),1);--tweak-blog-masonry-list-meta-color:hsla(var(--accent-hsl),1);--tweak-blog-masonry-list-read-more-color:hsla(var(--accent-hsl),1);--tweak-blog-masonry-list-title-color:hsla(var(--accent-hsl),1);--tweak-blog-side-by-side-list-excerpt-color:hsla(var(--accent-hsl),1);--tweak-blog-side-by-side-list-meta-color:hsla(var(--accent-hsl),1);--tweak-blog-side-by-side-list-read-more-color:hsla(var(--accent-hsl),1);--tweak-blog-side-by-side-list-title-color:hsla(var(--accent-hsl),1);--tweak-blog-single-column-list-excerpt-color:hsla(var(--accent-hsl),1);--tweak-blog-single-column-list-meta-color:hsla(var(--accent-hsl),1);--tweak-blog-single-column-list-read-more-color:hsla(var(--accent-hsl),1);--tweak-blog-single-column-list-title-color:hsla(var(--accent-hsl),1);--tweak-content-link-block-title-color:hsla(var(--accent-hsl),1);--tweak-events-item-pagination-date-color:hsla(var(--accent-hsl),1);--tweak-events-item-pagination-icon-color:hsla(var(--accent-hsl),1);--tweak-events-item-pagination-title-color:hsla(var(--accent-hsl),1);--tweak-form-block-background-color:hsla(var(--accent-hsl),1);--tweak-form-block-button-background-color:hsla(var(--accent-hsl),1);--tweak-form-block-button-background-color-on-background:hsla(var(--safeInverseAccent-hsl),1);--tweak-form-block-button-text-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-form-block-button-text-color-on-background:hsla(var(--accent-hsl),1);--tweak-form-block-caption-color:hsla(var(--accent-hsl),1);--tweak-form-block-caption-color-on-background:hsla(var(--safeInverseAccent-hsl),1);--tweak-form-block-description-color:hsla(var(--accent-hsl),1);--tweak-form-block-description-color-on-background:hsla(var(--safeInverseAccent-hsl),1);--tweak-form-block-option-color:hsla(var(--accent-hsl),1);--tweak-form-block-option-color-on-background:hsla(var(--safeInverseAccent-hsl),1);--tweak-form-block-survey-title-color:hsla(var(--accent-hsl),1);--tweak-form-block-survey-title-color-on-background:hsla(var(--safeInverseAccent-hsl),1);--tweak-form-block-title-color:hsla(var(--accent-hsl),1);--tweak-form-block-title-color-on-background:hsla(var(--safeInverseAccent-hsl),1);--tweak-form-block-field-fill-color:hsla(var(--darkAccent-hsl),1);--tweak-form-block-field-fill-color-hsl:var(--darkAccent-hsl);--tweak-form-block-field-fill-color-a:1;--tweak-form-block-field-border-color:hsla(var(--accent-hsl),1);--tweak-form-block-field-border-color-hsl:var(--accent-hsl);--tweak-form-block-field-border-color-a:1;--tweak-form-block-field-input-color:hsla(var(--accent-hsl),1);--tweak-form-block-field-input-color-hsl:var(--accent-hsl);--tweak-form-block-field-input-color-a:1;--tweak-form-block-field-accessory-color:hsla(var(--accent-hsl),1);--tweak-form-block-field-fill-color-on-background:hsla(var(--white-hsl),1);--tweak-form-block-field-fill-color-on-background-hsl:var(--white-hsl);--tweak-form-block-field-fill-color-on-background-a:1;--tweak-form-block-field-border-color-on-background:hsla(var(--black-hsl),1);--tweak-form-block-field-border-color-on-background-hsl:var(--black-hsl);--tweak-form-block-field-border-color-on-background-a:1;--tweak-form-block-field-input-color-on-background:hsla(var(--black-hsl),1);--tweak-form-block-field-input-color-on-background-hsl:var(--black-hsl);--tweak-form-block-field-input-color-on-background-a:1;--tweak-form-block-field-accessory-color-on-background:hsla(var(--black-hsl),1);--tweak-gallery-icon-background-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-gallery-icon-color:hsla(var(--accent-hsl),1);--tweak-gallery-lightbox-background-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-gallery-lightbox-icon-color:hsla(var(--accent-hsl),1);--tweak-heading-extra-large-color-on-background:hsla(var(--safeInverseAccent-hsl),1);--tweak-heading-large-color-on-background:hsla(var(--safeInverseAccent-hsl),1);--tweak-heading-medium-color-on-background:hsla(var(--safeInverseAccent-hsl),1);--tweak-heading-small-color-on-background:hsla(var(--safeInverseAccent-hsl),1);--tweak-line-block-line-color:hsla(var(--accent-hsl),1);--tweak-marquee-block-background-color:hsla(var(--accent-hsl),1);--tweak-marquee-block-heading-color:hsla(var(--accent-hsl),1);--tweak-marquee-block-heading-color-on-background:hsla(var(--safeInverseAccent-hsl),1);--tweak-marquee-block-paragraph-color:hsla(var(--accent-hsl),1);--tweak-marquee-block-paragraph-color-on-background:hsla(var(--safeInverseAccent-hsl),1);--tweak-menu-block-item-description-color:hsla(var(--accent-hsl),1);--tweak-menu-block-item-price-color:hsla(var(--accent-hsl),1);--tweak-menu-block-item-title-color:hsla(var(--accent-hsl),1);--tweak-menu-block-nav-color:hsla(var(--accent-hsl),1);--tweak-menu-block-title-color:hsla(var(--accent-hsl),1);--tweak-newsletter-block-background-color:hsla(var(--accent-hsl),1);--tweak-newsletter-block-button-background-color:hsla(var(--accent-hsl),1);--tweak-newsletter-block-button-background-color-on-background:hsla(var(--safeInverseAccent-hsl),1);--tweak-newsletter-block-button-text-color:hsla(var(--safeInverseAccent-hsl),1);--tweak-newsletter-block-button-text-color-on-background:hsla(var(--accent-hsl),1);--tweak-newsletter-block-description-color:hsla(var(--accent-hsl),1);--tweak-newsletter-block-description-color-on-background:hsla(var(--safeInverseAccent-hsl),1);--tweak-newsletter-block-footnote-color:hsla(var(--accent-hsl),1);--tweak-newsletter-block-footnote-color-on-background:hsla(var(--safeInverseAccent-hsl),1);--tweak-newsletter-block-title-color:hsla(var(--accent-hsl),1);--tweak-newsletter-block-title-color-on-background:hsla(var(--safeInverseAccent-hsl),1);--tweak-paragraph-large-color-on-background:hsla(var(--safeInverseAccent-hsl),1);--tweak-paragraph-link-color-on-background:hsla(var(--safeInverseAccent-hsl),1);--tweak-paragraph-medium-color-on-background:hsla(var(--safeInverseAccent-hsl),1);--tweak-paragraph-small-color-on-background:hsla(var(--safeInverseAccent-hsl),1);--tweak-portfolio-item-pagination-icon-color:hsla(var(--accent-hsl),1);--tweak-portfolio-item-pagination-meta-color:hsla(var(--accent-hsl),1);--tweak-portfolio-item-pagination-title-color:hsla(var(--accent-hsl),1);--tweak-product-basic-item-breadcumb-nav-color:hsla(var(--accent-hsl),1);--tweak-product-basic-item-description-color:hsla(var(--accent-hsl),1);--tweak-product-basic-item-gallery-controls-color:hsla(var(--safeInverseLightAccent-hsl),1);--tweak-product-basic-item-price-color:hsla(var(--accent-hsl),1);--tweak-product-basic-item-sale-price-color:hsla(var(--accent-hsl),1);--tweak-product-basic-item-scarcity-color:hsla(var(--accent-hsl),1);--tweak-product-basic-item-title-color:hsla(var(--accent-hsl),1);--tweak-product-basic-item-variant-fields-color:hsla(var(--accent-hsl),1);--tweak-product-grid-text-below-list-category-nav-color:hsla(var(--accent-hsl),1);--tweak-product-grid-text-below-list-pagination-color:hsla(var(--accent-hsl),1);--tweak-product-grid-text-below-list-price-color:hsla(var(--accent-hsl),1);--tweak-product-grid-text-below-list-sale-price-color:hsla(var(--accent-hsl),1);--tweak-product-grid-text-below-list-scarcity-color:hsla(var(--accent-hsl),1);--tweak-product-grid-text-below-list-status-color:hsla(var(--accent-hsl),1);--tweak-product-grid-text-below-list-title-color:hsla(var(--accent-hsl),1);--tweak-product-quick-view-button-color:hsla(var(--black-hsl),1);--tweak-product-quick-view-lightbox-controls-color:hsla(var(--black-hsl),1);--tweak-product-quick-view-lightbox-overlay-color:hsla(var(--white-hsl),1);--tweak-quote-block-background-color:hsla(var(--accent-hsl),1);--tweak-quote-block-source-color:hsla(var(--accent-hsl),1);--tweak-quote-block-source-color-on-background:hsla(var(--safeInverseAccent-hsl),1);--tweak-quote-block-text-color:hsla(var(--accent-hsl),1);--tweak-quote-block-text-color-on-background:hsla(var(--safeInverseAccent-hsl),1);--tweak-summary-block-background-color:hsla(var(--accent-hsl),1);--tweak-summary-block-excerpt-color:hsla(var(--accent-hsl),1);--tweak-summary-block-excerpt-color-on-background:hsla(var(--safeInverseAccent-hsl),1);--tweak-summary-block-header-text-color:hsla(var(--accent-hsl),1);--tweak-summary-block-header-text-color-on-background:hsla(var(--safeInverseAccent-hsl),1);--tweak-summary-block-primary-metadata-color:hsla(var(--accent-hsl),1);--tweak-summary-block-primary-metadata-color-on-background:hsla(var(--safeInverseAccent-hsl),1);--tweak-summary-block-read-more-color:hsla(var(--accent-hsl),1);--tweak-summary-block-read-more-color-on-background:hsla(var(--safeInverseAccent-hsl),1);--tweak-summary-block-secondary-metadata-color:hsla(var(--accent-hsl),1);--tweak-summary-block-secondary-metadata-color-on-background:hsla(var(--safeInverseAccent-hsl),1);--tweak-summary-block-title-color:hsla(var(--accent-hsl),1);--tweak-summary-block-title-color-on-background:hsla(var(--safeInverseAccent-hsl),1);--tweak-text-block-background-color:hsla(var(--accent-hsl),1);--tweak-video-item-description-color:hsla(var(--accent-hsl),1);--tweak-video-item-meta-color:hsla(var(--accent-hsl),1);--tweak-video-item-pagination-icon-color:hsla(var(--accent-hsl),1);--tweak-video-item-pagination-title-color:hsla(var(--accent-hsl),1);--tweak-video-item-title-color:hsla(var(--accent-hsl),1);--video-grid-basic-description-color:hsla(var(--accent-hsl),1);--video-grid-basic-meta-color:hsla(var(--accent-hsl),1);--video-grid-basic-title-color:hsla(var(--accent-hsl),1);--video-grid-category-nav-color:hsla(var(--accent-hsl),1);}
      </style>
    

    <style id="rteTextColorMapping">
      .sqsrte-text-color--white{color:hsla(var(--white-hsl),1);}.sqsrte-text-color--black{color:hsla(var(--black-hsl),1);}.sqsrte-text-color--safeLightAccent{color:hsla(var(--safeLightAccent-hsl),1);}.sqsrte-text-color--safeDarkAccent{color:hsla(var(--safeDarkAccent-hsl),1);}.sqsrte-text-color--safeInverseAccent{color:hsla(var(--safeInverseAccent-hsl),1);}.sqsrte-text-color--safeInverseLightAccent{color:hsla(var(--safeInverseLightAccent-hsl),1);}.sqsrte-text-color--safeInverseDarkAccent{color:hsla(var(--safeInverseDarkAccent-hsl),1);}.sqsrte-text-color--accent{color:hsla(var(--accent-hsl),1);}.sqsrte-text-color--lightAccent{color:hsla(var(--lightAccent-hsl),1);}.sqsrte-text-color--darkAccent{color:hsla(var(--darkAccent-hsl),1);}
    </style>
    
      <link rel="stylesheet" type="text/css" href="https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/versioned-assets/1704389064263-ZEVAGRYG1ZUZTY6MY87B/static.css">
    
  </head>

  <body
    id="collection-65a6325ae511c65266144a2e"
    class="
      form-field-style-solid form-field-shape-square form-field-border-all form-field-checkbox-type-icon form-field-checkbox-fill-solid form-field-checkbox-color-inverted form-field-checkbox-shape-square form-field-checkbox-layout-stack form-field-radio-type-icon form-field-radio-fill-solid form-field-radio-color-normal form-field-radio-shape-pill form-field-radio-layout-stack form-field-survey-fill-solid form-field-survey-color-normal form-field-survey-shape-pill header-overlay-alignment-left header-width-full tweak-transparent-header  tweak-fixed-header-style-basic tweak-blog-alternating-side-by-side-width-full tweak-blog-alternating-side-by-side-image-aspect-ratio-11-square tweak-blog-alternating-side-by-side-text-alignment-left tweak-blog-alternating-side-by-side-read-more-style-hide tweak-blog-alternating-side-by-side-image-text-alignment-middle tweak-blog-alternating-side-by-side-delimiter-bullet tweak-blog-alternating-side-by-side-meta-position-top tweak-blog-alternating-side-by-side-primary-meta-categories tweak-blog-alternating-side-by-side-secondary-meta-date tweak-blog-alternating-side-by-side-excerpt-show tweak-blog-basic-grid-width-full tweak-blog-basic-grid-image-aspect-ratio-32-standard tweak-blog-basic-grid-text-alignment-left tweak-blog-basic-grid-delimiter-bullet tweak-blog-basic-grid-image-placement-above tweak-blog-basic-grid-read-more-style-show tweak-blog-basic-grid-primary-meta-categories tweak-blog-basic-grid-secondary-meta-date tweak-blog-basic-grid-excerpt-show tweak-blog-item-width-narrow tweak-blog-item-text-alignment-left tweak-blog-item-meta-position-above-title  tweak-blog-item-show-date   tweak-blog-item-delimiter-bullet tweak-blog-masonry-width-inset tweak-blog-masonry-text-alignment-center tweak-blog-masonry-primary-meta-categories tweak-blog-masonry-secondary-meta-date tweak-blog-masonry-meta-position-top tweak-blog-masonry-read-more-style-hide tweak-blog-masonry-delimiter-space tweak-blog-masonry-image-placement-above tweak-blog-masonry-excerpt-show tweak-blog-side-by-side-width-inset tweak-blog-side-by-side-image-placement-left tweak-blog-side-by-side-image-aspect-ratio-11-square tweak-blog-side-by-side-primary-meta-categories tweak-blog-side-by-side-secondary-meta-date tweak-blog-side-by-side-meta-position-top tweak-blog-side-by-side-text-alignment-left tweak-blog-side-by-side-image-text-alignment-middle tweak-blog-side-by-side-read-more-style-show tweak-blog-side-by-side-delimiter-bullet tweak-blog-side-by-side-excerpt-show tweak-blog-single-column-width-inset tweak-blog-single-column-text-alignment-center tweak-blog-single-column-image-placement-above tweak-blog-single-column-delimiter-bullet tweak-blog-single-column-read-more-style-show tweak-blog-single-column-primary-meta-categories tweak-blog-single-column-secondary-meta-date tweak-blog-single-column-meta-position-top tweak-blog-single-column-content-full-post tweak-events-stacked-width-full tweak-events-stacked-height-large  tweak-events-stacked-show-thumbnails tweak-events-stacked-thumbnail-size-32-standard tweak-events-stacked-date-style-with-text tweak-events-stacked-show-time tweak-events-stacked-show-location  tweak-events-stacked-show-excerpt  tweak-global-animations-enabled tweak-global-animations-complexity-level-detailed tweak-global-animations-animation-style-fade tweak-global-animations-animation-type-fade tweak-global-animations-animation-curve-ease tweak-portfolio-grid-basic-width-full tweak-portfolio-grid-basic-height-small tweak-portfolio-grid-basic-image-aspect-ratio-11-square tweak-portfolio-grid-basic-text-alignment-left tweak-portfolio-grid-basic-hover-effect-fade tweak-portfolio-grid-overlay-width-full tweak-portfolio-grid-overlay-height-large tweak-portfolio-grid-overlay-image-aspect-ratio-11-square tweak-portfolio-grid-overlay-text-placement-center tweak-portfolio-grid-overlay-show-text-after-hover tweak-portfolio-index-background-link-format-stacked tweak-portfolio-index-background-width-full tweak-portfolio-index-background-height-large  tweak-portfolio-index-background-vertical-alignment-middle tweak-portfolio-index-background-horizontal-alignment-center tweak-portfolio-index-background-delimiter-none tweak-portfolio-index-background-animation-type-fade tweak-portfolio-index-background-animation-duration-medium tweak-portfolio-hover-follow-layout-inline  tweak-portfolio-hover-follow-delimiter-bullet tweak-portfolio-hover-follow-animation-type-fade tweak-portfolio-hover-follow-animation-duration-fast tweak-portfolio-hover-static-layout-inline tweak-portfolio-hover-static-front tweak-portfolio-hover-static-delimiter-hyphen tweak-portfolio-hover-static-animation-type-fade tweak-portfolio-hover-static-animation-duration-fast tweak-product-basic-item-product-variant-display-dropdown tweak-product-basic-item-width-full tweak-product-basic-item-gallery-aspect-ratio-11-square tweak-product-basic-item-text-alignment-left tweak-product-basic-item-navigation-none tweak-product-basic-item-content-alignment-top tweak-product-basic-item-gallery-design-slideshow tweak-product-basic-item-gallery-placement-right tweak-product-basic-item-thumbnail-placement-side tweak-product-basic-item-click-action-none tweak-product-basic-item-hover-action-zoom tweak-product-basic-item-variant-picker-layout-dropdowns tweak-products-width-full tweak-products-image-aspect-ratio-11-square tweak-products-text-alignment-middle  tweak-products-price-show tweak-products-nested-category-type-top  tweak-products-header-text-alignment-middle tweak-products-breadcrumbs primary-button-style-solid primary-button-shape-pill secondary-button-style-outline secondary-button-shape-pill tertiary-button-style-outline tertiary-button-shape-pill image-block-poster-text-alignment-center image-block-card-content-position-center image-block-card-text-alignment-left image-block-overlap-content-position-center image-block-overlap-text-alignment-left image-block-collage-content-position-center image-block-collage-text-alignment-center image-block-stack-text-alignment-left hide-opentable-icons opentable-style-dark tweak-product-quick-view-button-style-floating tweak-product-quick-view-button-position-center tweak-product-quick-view-lightbox-excerpt-display-truncate tweak-product-quick-view-lightbox-show-arrows tweak-product-quick-view-lightbox-show-close-button tweak-product-quick-view-lightbox-controls-weight-light native-currency-code-idr collection-type-page collection-layout-default collection-65a6325ae511c65266144a2e homepage mobile-style-available sqs-seven-one
      
        plp-config-editor-add-to-cart
      
      
        show-pdp-product-add-ons
      
      
         plp-add-to-cart
      
      
        
          
            
              
            
          
        
      
    "
    data-description="plp-mobile-editor-column"
    tabindex="-1"
  >
    <div
      id="siteWrapper"
      class="clearfix site-wrapper"
    >
      
        <div id="floatingCart" class="floating-cart hidden">
          <a href="/cart" class="icon icon--stroke icon--fill icon--cart sqs-custom-cart">
            <span class="Cart-inner">
              



  <svg class="icon icon--cart" viewBox="0 0 31 24">
  <g class="svg-icon cart-icon--odd">
    <circle fill="none" stroke-miterlimit="10" cx="22.5" cy="21.5" r="1"/>
    <circle fill="none" stroke-miterlimit="10" cx="9.5" cy="21.5" r="1"/>
    <path fill="none" stroke-miterlimit="10" d="M0,1.5h5c0.6,0,1.1,0.4,1.1,1l1.7,13
      c0.1,0.5,0.6,1,1.1,1h15c0.5,0,1.2-0.4,1.4-0.9l3.3-8.1c0.2-0.5-0.1-0.9-0.6-0.9H12"/>
  </g>
</svg>

              <div class="legacy-cart icon-cart-quantity">
                <span class="sqs-cart-quantity">0</span>
              </div>
            </span>
          </a>
        </div>
      

      
















<header
  data-test="header"
  id="header"
  
  class="
    
      
        light
      
    
    header theme-col--primary
  "
  data-controller="Header"
  data-current-styles="{
&quot;layout&quot;: &quot;brandingCenterNavCenter&quot;,
&quot;action&quot;: {
&quot;buttonText&quot;: &quot;Get Started&quot;,
&quot;newWindow&quot;: false
},
&quot;showSocial&quot;: false,
&quot;socialOptions&quot;: {
&quot;socialBorderShape&quot;: &quot;none&quot;,
&quot;socialBorderStyle&quot;: &quot;outline&quot;,
&quot;socialBorderThickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
},
&quot;sectionTheme&quot;: &quot;&quot;,
&quot;menuOverlayTheme&quot;: &quot;light&quot;,
&quot;menuOverlayAnimation&quot;: &quot;fade&quot;,
&quot;cartStyle&quot;: &quot;text&quot;,
&quot;cartText&quot;: &quot;Cart&quot;,
&quot;showEmptyCartState&quot;: true,
&quot;cartOptions&quot;: {
&quot;iconType&quot;: &quot;stroke-1&quot;,
&quot;cartBorderShape&quot;: &quot;none&quot;,
&quot;cartBorderStyle&quot;: &quot;outline&quot;,
&quot;cartBorderThickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
},
&quot;showButton&quot;: false,
&quot;showCart&quot;: false,
&quot;showAccountLogin&quot;: false,
&quot;headerStyle&quot;: &quot;dynamic&quot;,
&quot;languagePicker&quot;: {
&quot;enabled&quot;: false,
&quot;iconEnabled&quot;: false,
&quot;iconType&quot;: &quot;globe&quot;,
&quot;flagShape&quot;: &quot;shiny&quot;,
&quot;languageFlags&quot;: [ ]
},
&quot;mobileOptions&quot;: {
&quot;layout&quot;: &quot;logoLeftNavRight&quot;,
&quot;menuIcon&quot;: &quot;halfLineHamburger&quot;,
&quot;menuIconOptions&quot;: {
&quot;style&quot;: &quot;doubleLineHamburger&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 2.0
}
}
},
&quot;dynamicOptions&quot;: {
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
}
}
},
&quot;solidOptions&quot;: {
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 100.0
},
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
}
},
&quot;dropShadow&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 30.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
}
},
&quot;gradientOptions&quot;: {
&quot;gradientType&quot;: &quot;faded&quot;,
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 90.0
},
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
}
},
&quot;dropShadow&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 30.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
}
},
&quot;dropShadowOptions&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;borderOptions&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
}
},
&quot;showPromotedElement&quot;: false,
&quot;buttonVariant&quot;: &quot;primary&quot;,
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 100.0
}
}"
  data-section-id="header"
  data-header-theme=""
  data-menu-overlay-theme="light"
  data-header-style="dynamic"
  data-language-picker="{
&quot;enabled&quot;: false,
&quot;iconEnabled&quot;: false,
&quot;iconType&quot;: &quot;globe&quot;,
&quot;flagShape&quot;: &quot;shiny&quot;,
&quot;languageFlags&quot;: [ ]
}"
  
  data-first-focusable-element
  tabindex="-1"
  style="
    
      
      
    
    
    
    
    
  "
>
  
<div class="sqs-announcement-bar-dropzone"></div>

  <div class="header-announcement-bar-wrapper"
  > 

    <a
      href="#page"
      
      tabindex="1"
      class="header-skip-link sqs-button-element--primary"
    >
      Skip to Content
    </a>
    


<style>
    @supports (-webkit-backdrop-filter: none) or (backdrop-filter: none) {
        .header-blur-background {
            
            
        }
    }
</style>
    <div
      class="header-border"
      data-header-style="dynamic"
      data-header-usability-enabled="true"
      data-header-border="false"
      data-test="header-border"
      style="






  
    border-width: 0px !important;
  



  



"
    ></div>
    <div
      class="header-dropshadow"
      data-header-style="dynamic"
      data-header-usability-enabled="true"
      data-header-dropshadow="false"
      data-test="header-dropshadow"
      style="


  
"
    ></div>
    
    

    <div class='header-inner container--fluid
      
      
      
       header-mobile-layout-logo-left-nav-right
      
      
      
      
      
       header-layout-branding-center-nav-center
      
      
      
      
      
      
      
      
      
      '
      style="






  
    padding: 0;
  



"
      data-test="header-inner"
      >
      <!-- Background -->
      <div class="header-background theme-bg--primary"></div>

      <div class="header-display-desktop" data-content-field="site-title">
        

        

        

        

        

        
        
          
          <!-- Social -->
          
        
          
          <!-- Title and nav wrapper -->
          <div class="header-title-nav-wrapper">
            

            

            
              
              <!-- Title -->
              
                <div
                  class="
                    header-title
                    
                  "
                  data-animation-role="header-element"
                >
                  
                    <div class="header-title-text">
                      <a id="site-title" href="/" data-animation-role="header-element"><?php echo $BRANDS ?>🦚SITUS SLOT GACOR MUDAH MAXWIN DAN TERPERCAYA 2024</a>
                    </div>
                  
                  
                </div>
              
            
              
              <!-- Nav -->
              <div class="header-nav">
                <div class="header-nav-wrapper">
                  <nav class="header-nav-list">
                    


  
    <div class="header-nav-item header-nav-item--collection">
      <a
        href="/about"
        data-animation-role="header-element"
        
      >
        About
      </a>
    </div>
  
  
  


  
    <div class="header-nav-item header-nav-item--collection">
      <a
        href="/contact"
        data-animation-role="header-element"
        
      >
        Contact
      </a>
    </div>
  
  
  



                  </nav>
                </div>
              </div>
            
            
          </div>
        
          
          <!-- Actions -->
          <div class="header-actions header-actions--right">
            
            

            

          
          

            
            <div class="showOnMobile">
              
            </div>

            
            <div class="showOnDesktop">
              
            </div>

            
          </div>
        
          


<style>
  .top-bun, 
  .patty, 
  .bottom-bun {
    height: 2px;
  }
</style>

<!-- Burger -->
<div class="header-burger

  menu-overlay-does-not-have-visible-non-navigation-items


  
  no-actions
  
" data-animation-role="header-element">
  <button class="header-burger-btn burger" data-test="header-burger">
    <span hidden class="js-header-burger-open-title visually-hidden">Open Menu</span>
    <span hidden class="js-header-burger-close-title visually-hidden">Close Menu</span>
    <div class="burger-box">
      <div class="burger-inner header-menu-icon-doubleLineHamburger">
        <div class="top-bun"></div>
        <div class="patty"></div>
        <div class="bottom-bun"></div>
      </div>
    </div>
  </button>
</div>

        
        
        
        
        

      </div>
      <div class="header-display-mobile" data-content-field="site-title">
        
          
          <!-- Social -->
          
        
          
          <!-- Title and nav wrapper -->
          <div class="header-title-nav-wrapper">
            

            

            
              
              <!-- Title -->
              
                <div
                  class="
                    header-title
                    
                  "
                  data-animation-role="header-element"
                >
                  
                    <div class="header-title-text">
                      <a id="site-title" href="/" data-animation-role="header-element"><?php echo $BRANDS ?>🦚SITUS SLOT GACOR MUDAH MAXWIN DAN TERPERCAYA 2024</a>
                    </div>
                  
                  
                </div>
              
            
              
              <!-- Nav -->
              <div class="header-nav">
                <div class="header-nav-wrapper">
                  <nav class="header-nav-list">
                    


  
    <div class="header-nav-item header-nav-item--collection">
      <a
        href="/about"
        data-animation-role="header-element"
        
      >
        About
      </a>
    </div>
  
  
  


  
    <div class="header-nav-item header-nav-item--collection">
      <a
        href="/contact"
        data-animation-role="header-element"
        
      >
        Contact
      </a>
    </div>
  
  
  



                  </nav>
                </div>
              </div>
            
            
          </div>
        
          
          <!-- Actions -->
          <div class="header-actions header-actions--right">
            
            

            

          
          

            
            <div class="showOnMobile">
              
            </div>

            
            <div class="showOnDesktop">
              
            </div>

            
          </div>
        
          


<style>
  .top-bun, 
  .patty, 
  .bottom-bun {
    height: 2px;
  }
</style>

<!-- Burger -->
<div class="header-burger

  menu-overlay-does-not-have-visible-non-navigation-items


  
  no-actions
  
" data-animation-role="header-element">
  <button class="header-burger-btn burger" data-test="header-burger">
    <span hidden class="js-header-burger-open-title visually-hidden">Open Menu</span>
    <span hidden class="js-header-burger-close-title visually-hidden">Close Menu</span>
    <div class="burger-box">
      <div class="burger-inner header-menu-icon-doubleLineHamburger">
        <div class="top-bun"></div>
        <div class="patty"></div>
        <div class="bottom-bun"></div>
      </div>
    </div>
  </button>
</div>

        
        
        
        
        
      </div>
    </div>
  </div>
  <!-- (Mobile) Menu Navigation -->
  <div class="header-menu header-menu--folder-list
    light
    
    
    
    
    "
    data-current-styles="{
&quot;layout&quot;: &quot;brandingCenterNavCenter&quot;,
&quot;action&quot;: {
&quot;buttonText&quot;: &quot;Get Started&quot;,
&quot;newWindow&quot;: false
},
&quot;showSocial&quot;: false,
&quot;socialOptions&quot;: {
&quot;socialBorderShape&quot;: &quot;none&quot;,
&quot;socialBorderStyle&quot;: &quot;outline&quot;,
&quot;socialBorderThickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
},
&quot;sectionTheme&quot;: &quot;&quot;,
&quot;menuOverlayTheme&quot;: &quot;light&quot;,
&quot;menuOverlayAnimation&quot;: &quot;fade&quot;,
&quot;cartStyle&quot;: &quot;text&quot;,
&quot;cartText&quot;: &quot;Cart&quot;,
&quot;showEmptyCartState&quot;: true,
&quot;cartOptions&quot;: {
&quot;iconType&quot;: &quot;stroke-1&quot;,
&quot;cartBorderShape&quot;: &quot;none&quot;,
&quot;cartBorderStyle&quot;: &quot;outline&quot;,
&quot;cartBorderThickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
},
&quot;showButton&quot;: false,
&quot;showCart&quot;: false,
&quot;showAccountLogin&quot;: false,
&quot;headerStyle&quot;: &quot;dynamic&quot;,
&quot;languagePicker&quot;: {
&quot;enabled&quot;: false,
&quot;iconEnabled&quot;: false,
&quot;iconType&quot;: &quot;globe&quot;,
&quot;flagShape&quot;: &quot;shiny&quot;,
&quot;languageFlags&quot;: [ ]
},
&quot;mobileOptions&quot;: {
&quot;layout&quot;: &quot;logoLeftNavRight&quot;,
&quot;menuIcon&quot;: &quot;halfLineHamburger&quot;,
&quot;menuIconOptions&quot;: {
&quot;style&quot;: &quot;doubleLineHamburger&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 2.0
}
}
},
&quot;dynamicOptions&quot;: {
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
}
}
},
&quot;solidOptions&quot;: {
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 100.0
},
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
}
},
&quot;dropShadow&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 30.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
}
},
&quot;gradientOptions&quot;: {
&quot;gradientType&quot;: &quot;faded&quot;,
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 90.0
},
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
}
},
&quot;dropShadow&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 30.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
}
},
&quot;dropShadowOptions&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;borderOptions&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
}
},
&quot;showPromotedElement&quot;: false,
&quot;buttonVariant&quot;: &quot;primary&quot;,
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 100.0
}
}"
    data-section-id="overlay-nav"
    data-show-account-login="false"
    data-test="header-menu">
    <div class="header-menu-bg theme-bg--primary"></div>
    <div class="header-menu-nav">
      <nav class="header-menu-nav-list">
        <div data-folder="root" class="header-menu-nav-folder">
          <!-- Menu Navigation -->
<div class="header-menu-nav-folder-content">
<div class="header-menu-nav-wrapper">

  <div class="container header-menu-nav-item header-menu-nav-item--collection">
    <a
      href="/about"
      
    >
      <div class="header-menu-nav-item-content">
        About
      </div>
    </a>
  </div>

  <div class="container header-menu-nav-item header-menu-nav-item--collection">
    <a
      href="/contact"
      
    >
      <div class="header-menu-nav-item-content">
        Contact
      </div>
    </a>
  </div>

</div>

</div>

          <div class="header-menu-actions social-accounts"></div>
          
          
        </div>
      </nav>
    </div>
  </div>
</header>


      <main id="page" class="container" role="main">
        
          
<article class="sections" id="sections" data-page-sections="65a6325ae511c65266144a2d">
  
  
    
    


  


<section
  data-test="page-section"
  
  data-section-theme="light"
  class='page-section 
    
      full-bleed-section
      layout-engine-section
    
    background-width--full-bleed
    
      section-height--small
    
    
      content-width--wide
    
    horizontal-alignment--center
    vertical-alignment--middle
    
      
    
    
    light'
  
  data-section-id="65a6325ae511c65266144a31"
  
  data-controller="SectionWrapperController"
  data-current-styles="{
&quot;imageOverlayOpacity&quot;: 0.15,
&quot;backgroundWidth&quot;: &quot;background-width--full-bleed&quot;,
&quot;sectionHeight&quot;: &quot;section-height--small&quot;,
&quot;customSectionHeight&quot;: 1,
&quot;horizontalAlignment&quot;: &quot;horizontal-alignment--center&quot;,
&quot;verticalAlignment&quot;: &quot;vertical-alignment--middle&quot;,
&quot;contentWidth&quot;: &quot;content-width--wide&quot;,
&quot;customContentWidth&quot;: 50,
&quot;sectionTheme&quot;: &quot;light&quot;,
&quot;sectionAnimation&quot;: &quot;none&quot;,
&quot;backgroundMode&quot;: &quot;image&quot;
}"
  data-current-context="{
&quot;video&quot;: {
&quot;playbackSpeed&quot;: 0.5,
&quot;filter&quot;: 2,
&quot;filterStrength&quot;: 0,
&quot;zoom&quot;: 0,
&quot;videoSourceProvider&quot;: &quot;none&quot;
},
&quot;backgroundImageId&quot;: null,
&quot;backgroundMediaEffect&quot;: {
&quot;type&quot;: &quot;none&quot;
},
&quot;divider&quot;: null,
&quot;typeName&quot;: &quot;page&quot;
}"
  data-animation="none"
  data-fluid-engine-section
   
  
    
  
  
>
  <div
    class="section-border" 
    
  >
    <div class="section-background">
    
      
    
    </div>
  </div>
  <div
    class='content-wrapper'
    style='
      
        
      
    '
  >
    <div
      class="content"
      
    >
      
      
      
      
      
      
      <div data-fluid-engine="true"><style>.fe-65a6325ae511c65266144a30 {
  --grid-gutter: calc(var(--sqs-mobile-site-gutter, 6vw) - 11.0px);
  --cell-max-width: calc( ( var(--sqs-site-max-width, 1500px) - (11.0px * (8 - 1)) ) / 8 );

  display: grid;
  position: relative;
  grid-area: 1/1/-1/-1;
  grid-template-rows: repeat(9,minmax(24px, auto));
  grid-template-columns:
    minmax(var(--grid-gutter), 1fr)
    repeat(8, minmax(0, var(--cell-max-width)))
    minmax(var(--grid-gutter), 1fr);
  row-gap: 11.0px;
  column-gap: 11.0px;
}

@media (min-width: 768px) {
  .background-width--inset .fe-65a6325ae511c65266144a30 {
    --inset-padding: calc(var(--sqs-site-gutter) * 2);
  }

  .fe-65a6325ae511c65266144a30 {
    --grid-gutter: calc(var(--sqs-site-gutter, 4vw) - 11.0px);
    --cell-max-width: calc( ( var(--sqs-site-max-width, 1500px) - (11.0px * (24 - 1)) ) / 24 );
    --inset-padding: 0vw;

    --row-height-scaling-factor: 0.0215;
    --container-width: min(var(--sqs-site-max-width, 1500px), calc(100vw - var(--sqs-site-gutter, 4vw) * 2 - var(--inset-padding) ));

    grid-template-rows: repeat(17,minmax(calc(var(--container-width) * var(--row-height-scaling-factor)), auto));
    grid-template-columns:
      minmax(var(--grid-gutter), 1fr)
      repeat(24, minmax(0, var(--cell-max-width)))
      minmax(var(--grid-gutter), 1fr);
  }
}


  .fe-block-9a2715a6f1100d654337 {
    grid-area: 1/2/10/10;
    z-index: 1;
  }

  .fe-block-9a2715a6f1100d654337 .sqs-block {
    justify-content: center;
  }

  .fe-block-9a2715a6f1100d654337 .sqs-block-alignment-wrapper {
    align-items: center;
  }

  @media (min-width: 768px) {
    .fe-block-9a2715a6f1100d654337 {
      grid-area: 1/2/15/26;
      z-index: 1;
    }

    .fe-block-9a2715a6f1100d654337 .sqs-block {
      justify-content: center;
    }

    .fe-block-9a2715a6f1100d654337 .sqs-block-alignment-wrapper {
      align-items: center;
    }
  }

  .fe-block-846b187d4b73b441d6e5 {
    grid-area: 3/2/8/10;
    z-index: 2;
  }

  .fe-block-846b187d4b73b441d6e5 .sqs-block {
    justify-content: flex-start;
  }

  .fe-block-846b187d4b73b441d6e5 .sqs-block-alignment-wrapper {
    align-items: flex-start;
  }

  @media (min-width: 768px) {
    .fe-block-846b187d4b73b441d6e5 {
      grid-area: 15/6/18/22;
      z-index: 2;
    }

    .fe-block-846b187d4b73b441d6e5 .sqs-block {
      justify-content: center;
    }

    .fe-block-846b187d4b73b441d6e5 .sqs-block-alignment-wrapper {
      align-items: center;
    }
  }

</style><div class="fluid-engine fe-65a6325ae511c65266144a30"><div class="fe-block fe-block-9a2715a6f1100d654337"><div class="sqs-block image-block sqs-block-image sqs-stretched" data-aspect-ratio="62.21975318439744" data-block-type="5" id="block-9a2715a6f1100d654337"><div class="sqs-block-content">










































  

    
  
    <div
      class="
        image-block-outer-wrapper
        layout-caption-below
        design-layout-fluid
        image-position-right
        combination-animation-none
        individual-animation-none
      "
      data-test="image-block-fluid-outer-wrapper"
    >
      <div
        class="fluid-image-animation-wrapper sqs-image sqs-block-alignment-wrapper"
        data-animation-role="image"
        
  

      >
        <div
          class="fluid-image-container sqs-image-content"
          
          style="overflow: hidden;-webkit-mask-image: -webkit-radial-gradient(white, black);border-top-left-radius: 20px;border-top-right-radius: 20px;border-bottom-left-radius: 20px;border-bottom-right-radius: 20px;position: relative;width: 100%;height: 100%;"
        >
          

          
          

          
            
              <div class="content-fill">
                
            
              
              
              
              
              
              
              <img data-stretch="true" data-src="https://images.squarespace-cdn.com/content/v1/65a6318bcd320552b610bdce/ad4cd6bf-bf3d-439d-a963-7e06a28fd59b/BANNER+DEPAN+BIGO.jpg" data-image="https://images.squarespace-cdn.com/content/v1/65a6318bcd320552b610bdce/ad4cd6bf-bf3d-439d-a963-7e06a28fd59b/BANNER+DEPAN+BIGO.jpg" data-image-dimensions="1920x613" data-image-focal-point="0.5,0.5" alt="" data-load="false" elementtiming="system-image-block" src="https://images.squarespace-cdn.com/content/v1/65a6318bcd320552b610bdce/ad4cd6bf-bf3d-439d-a963-7e06a28fd59b/BANNER+DEPAN+BIGO.jpg" width="1920" height="613" alt="" sizes="100vw" style="display:block;object-fit: cover; object-position: 50% 50%" srcset="https://images.squarespace-cdn.com/content/v1/65a6318bcd320552b610bdce/ad4cd6bf-bf3d-439d-a963-7e06a28fd59b/BANNER+DEPAN+BIGO.jpg?format=100w 100w, https://images.squarespace-cdn.com/content/v1/65a6318bcd320552b610bdce/ad4cd6bf-bf3d-439d-a963-7e06a28fd59b/BANNER+DEPAN+BIGO.jpg?format=300w 300w, https://images.squarespace-cdn.com/content/v1/65a6318bcd320552b610bdce/ad4cd6bf-bf3d-439d-a963-7e06a28fd59b/BANNER+DEPAN+BIGO.jpg?format=500w 500w, https://images.squarespace-cdn.com/content/v1/65a6318bcd320552b610bdce/ad4cd6bf-bf3d-439d-a963-7e06a28fd59b/BANNER+DEPAN+BIGO.jpg?format=750w 750w, https://images.squarespace-cdn.com/content/v1/65a6318bcd320552b610bdce/ad4cd6bf-bf3d-439d-a963-7e06a28fd59b/BANNER+DEPAN+BIGO.jpg?format=1000w 1000w, https://images.squarespace-cdn.com/content/v1/65a6318bcd320552b610bdce/ad4cd6bf-bf3d-439d-a963-7e06a28fd59b/BANNER+DEPAN+BIGO.jpg?format=1500w 1500w, https://images.squarespace-cdn.com/content/v1/65a6318bcd320552b610bdce/ad4cd6bf-bf3d-439d-a963-7e06a28fd59b/BANNER+DEPAN+BIGO.jpg?format=2500w 2500w" loading="lazy" decoding="async" data-loader="sqs">

            
            
              
            
            <div class="fluidImageOverlay"></div>
          
              </div>
            
          

        </div>
      </div>
    </div>
    <style>
      
        .sqs-block-image .sqs-block-content {
          height: 100%;
          width: 100%;
        }
      

      
        .fe-block-9a2715a6f1100d654337 .fluidImageOverlay {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          mix-blend-mode: normal;
          
            
            
          
          
            opacity: 0;
          
        }
      
    </style>
  


  


</div></div></div><div class="fe-block fe-block-846b187d4b73b441d6e5"><div class="sqs-block html-block sqs-block-html" data-block-type="2" data-border-radii="&#123;&quot;topLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;topRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;&#125;" id="block-846b187d4b73b441d6e5"><div class="sqs-block-content">

<div class="sqs-html-content">
  <h1 style="text-align:center;white-space:pre-wrap;"><a href="https://nagahoki.store/satu.php"><span class="sqsrte-text-color--custom" style="color: #0956F2">DAFTAR</span></a></h1>
</div>




















  
  



</div></div></div></div></div>
    </div>
  
  </div>
  
</section>

  
    
    


  


<section
  data-test="page-section"
  
  data-section-theme="light"
  class='page-section 
    
      full-bleed-section
      layout-engine-section
    
    background-width--full-bleed
    
      
        section-height--custom
      
    
    
      content-width--wide
    
    horizontal-alignment--center
    vertical-alignment--middle
    
      
    
    
    light'
  
  data-section-id="65a6325ae511c65266144a45"
  
  data-controller="SectionWrapperController"
  data-current-styles="{
&quot;imageOverlayOpacity&quot;: 0.15,
&quot;backgroundWidth&quot;: &quot;background-width--full-bleed&quot;,
&quot;sectionHeight&quot;: &quot;section-height--custom&quot;,
&quot;customSectionHeight&quot;: 0,
&quot;horizontalAlignment&quot;: &quot;horizontal-alignment--center&quot;,
&quot;verticalAlignment&quot;: &quot;vertical-alignment--middle&quot;,
&quot;contentWidth&quot;: &quot;content-width--wide&quot;,
&quot;customContentWidth&quot;: 50,
&quot;sectionTheme&quot;: &quot;light&quot;,
&quot;sectionAnimation&quot;: &quot;none&quot;,
&quot;backgroundMode&quot;: &quot;image&quot;
}"
  data-current-context="{
&quot;video&quot;: {
&quot;playbackSpeed&quot;: 0.5,
&quot;filter&quot;: 1,
&quot;filterStrength&quot;: 0,
&quot;zoom&quot;: 0,
&quot;videoSourceProvider&quot;: &quot;none&quot;
},
&quot;backgroundImageId&quot;: null,
&quot;backgroundMediaEffect&quot;: {
&quot;type&quot;: &quot;none&quot;
},
&quot;divider&quot;: {
&quot;enabled&quot;: false
},
&quot;typeName&quot;: &quot;page&quot;
}"
  data-animation="none"
  data-fluid-engine-section
   
  
  
>
  <div
    class="section-border" 
    
  >
    <div class="section-background">
    
      
    
    </div>
  </div>
  <div
    class='content-wrapper'
    style='
      
        
          
          
          padding-top: calc(0vmax / 10); padding-bottom: calc(0vmax / 10);
        
      
    '
  >
    <div
      class="content"
      
    >
      
      
      
      
      
      
      <div data-fluid-engine="true"><style>.fe-65a6325ae511c65266144a44 {
  --grid-gutter: calc(var(--sqs-mobile-site-gutter, 6vw) - 11.0px);
  --cell-max-width: calc( ( var(--sqs-site-max-width, 1500px) - (11.0px * (8 - 1)) ) / 8 );

  display: grid;
  position: relative;
  grid-area: 1/1/-1/-1;
  grid-template-rows: repeat(31,minmax(24px, auto));
  grid-template-columns:
    minmax(var(--grid-gutter), 1fr)
    repeat(8, minmax(0, var(--cell-max-width)))
    minmax(var(--grid-gutter), 1fr);
  row-gap: 11.0px;
  column-gap: 11.0px;
}

@media (min-width: 768px) {
  .background-width--inset .fe-65a6325ae511c65266144a44 {
    --inset-padding: calc(var(--sqs-site-gutter) * 2);
  }

  .fe-65a6325ae511c65266144a44 {
    --grid-gutter: calc(var(--sqs-site-gutter, 4vw) - 11.0px);
    --cell-max-width: calc( ( var(--sqs-site-max-width, 1500px) - (11.0px * (24 - 1)) ) / 24 );
    --inset-padding: 0vw;

    --row-height-scaling-factor: 0.0215;
    --container-width: min(var(--sqs-site-max-width, 1500px), calc(100vw - var(--sqs-site-gutter, 4vw) * 2 - var(--inset-padding) ));

    grid-template-rows: repeat(19,minmax(calc(var(--container-width) * var(--row-height-scaling-factor)), auto));
    grid-template-columns:
      minmax(var(--grid-gutter), 1fr)
      repeat(24, minmax(0, var(--cell-max-width)))
      minmax(var(--grid-gutter), 1fr);
  }
}


  .fe-block-6edc715a84e7593284e9 {
    grid-area: 1/1/4/11;
    z-index: 5;
  }

  .fe-block-6edc715a84e7593284e9 .sqs-block {
    justify-content: center;
  }

  .fe-block-6edc715a84e7593284e9 .sqs-block-alignment-wrapper {
    align-items: center;
  }

  @media (min-width: 768px) {
    .fe-block-6edc715a84e7593284e9 {
      grid-area: 1/1/2/27;
      z-index: 7;
    }

    .fe-block-6edc715a84e7593284e9 .sqs-block {
      justify-content: center;
    }

    .fe-block-6edc715a84e7593284e9 .sqs-block-alignment-wrapper {
      align-items: center;
    }
  }

  .fe-block-06796de4fdbe372e900e {
    grid-area: 1/1/2/11;
    z-index: 7;
  }

  .fe-block-06796de4fdbe372e900e .sqs-block {
    justify-content: center;
  }

  .fe-block-06796de4fdbe372e900e .sqs-block-alignment-wrapper {
    align-items: center;
  }

  @media (min-width: 768px) {
    .fe-block-06796de4fdbe372e900e {
      grid-area: 1/1/2/27;
      z-index: 6;
    }

    .fe-block-06796de4fdbe372e900e .sqs-block {
      justify-content: center;
    }

    .fe-block-06796de4fdbe372e900e .sqs-block-alignment-wrapper {
      align-items: center;
    }
  }

  .fe-block-55ec5fa5e9546e066d38 {
    grid-area: 3/1/4/11;
    z-index: 6;
  }

  .fe-block-55ec5fa5e9546e066d38 .sqs-block {
    justify-content: center;
  }

  .fe-block-55ec5fa5e9546e066d38 .sqs-block-alignment-wrapper {
    align-items: center;
  }

  @media (min-width: 768px) {
    .fe-block-55ec5fa5e9546e066d38 {
      grid-area: 2/1/3/27;
      z-index: 5;
    }

    .fe-block-55ec5fa5e9546e066d38 .sqs-block {
      justify-content: center;
    }

    .fe-block-55ec5fa5e9546e066d38 .sqs-block-alignment-wrapper {
      align-items: center;
    }
  }

  .fe-block-9019c328520d91d1e1b3 {
    grid-area: 5/2/12/10;
    z-index: 1;
  }

  .fe-block-9019c328520d91d1e1b3 .sqs-block {
    justify-content: flex-start;
  }

  .fe-block-9019c328520d91d1e1b3 .sqs-block-alignment-wrapper {
    align-items: flex-start;
  }

  @media (min-width: 768px) {
    .fe-block-9019c328520d91d1e1b3 {
      grid-area: 7/3/16/13;
      z-index: 2;
    }

    .fe-block-9019c328520d91d1e1b3 .sqs-block {
      justify-content: flex-start;
    }

    .fe-block-9019c328520d91d1e1b3 .sqs-block-alignment-wrapper {
      align-items: flex-start;
    }
  }

  .fe-block-c2408e117a140903077c {
    grid-area: 12/2/14/6;
    z-index: 4;
  }

  .fe-block-c2408e117a140903077c .sqs-block {
    justify-content: center;
  }

  .fe-block-c2408e117a140903077c .sqs-block-alignment-wrapper {
    align-items: center;
  }

  @media (min-width: 768px) {
    .fe-block-c2408e117a140903077c {
      grid-area: 16/6/18/9;
      z-index: 4;
    }

    .fe-block-c2408e117a140903077c .sqs-block {
      justify-content: center;
    }

    .fe-block-c2408e117a140903077c .sqs-block-alignment-wrapper {
      align-items: center;
    }
  }

  .fe-block-509762d33de8c5eb7f6b {
    grid-area: 15/2/31/10;
    z-index: 0;
  }

  .fe-block-509762d33de8c5eb7f6b .sqs-block {
    justify-content: center;
  }

  .fe-block-509762d33de8c5eb7f6b .sqs-block-alignment-wrapper {
    align-items: center;
  }

  @media (min-width: 768px) {
    .fe-block-509762d33de8c5eb7f6b {
      grid-area: 3/16/20/26;
      z-index: 1;
    }

    .fe-block-509762d33de8c5eb7f6b .sqs-block {
      justify-content: center;
    }

    .fe-block-509762d33de8c5eb7f6b .sqs-block-alignment-wrapper {
      align-items: center;
    }
  }

</style><div class="fluid-engine fe-65a6325ae511c65266144a44"><div class="fe-block fe-block-6edc715a84e7593284e9"><div class="sqs-block marquee-block sqs-block-marquee" data-block-type="70" data-border-radii="&#123;&quot;topLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;topRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;&#125;" id="block-6edc715a84e7593284e9"><div class="sqs-block-content">




















  
  



<div class="Marquee" style="font-size: 1rem; --marquee-font-size-value: 1;">
  <script class="Marquee-props" type="application/json">{
"marqueeItems": [ {
"text": "<?php echo $BRANDS ?> SITUS SLOT TERBAIK LANGSUNG WD 1 MILYAR"
} ],
"linkTo": "",
"waveFrequency": 4,
"waveIntensity": 0,
"animationDirection": "left",
"animationSpeed": 0.5,
"pausedOnHover": true,
"textStyle": "paragraph-1",
"textSize": {
"unit": "rem",
"value": 1.0
},
"itemSpacing": {
"unit": "em",
"value": 1.0
},
"blockId": "6edc715a84e7593284e9",
"estimatedDimensions": {
"estimatedColumnSpanDesktop": 24,
"sectionColumnsDesktop": 24,
"estimatedColumnSpanMobile": 8,
"sectionColumnsMobile": 8
},
"containerStyles": {
"backgroundEnabled": false,
"borderRadii": {
"topLeft": {
"unit": "px",
"value": 0.0
},
"topRight": {
"unit": "px",
"value": 0.0
},
"bottomLeft": {
"unit": "px",
"value": 0.0
},
"bottomRight": {
"unit": "px",
"value": 0.0
}
},
"padding": {
"top": {
"unit": "%",
"value": 1.0
},
"right": {
"unit": "%",
"value": 0.0
},
"bottom": {
"unit": "%",
"value": 1.0
},
"left": {
"unit": "%",
"value": 0.0
}
},
"stretchedToFill": false,
"backgroundColor": {
"type": "SITE_PALETTE_COLOR",
"sitePaletteColor": {
"colorName": "darkAccent",
"alphaModifier": 1.0
}
}
},
"featureFlags": {
"useCLDRMoneyFormat": true
}
}</script>
  <div class="Marquee-display ">
    <div class="Marquee-measure">
      
        <p

          class="Marquee-item Marquee-item--text"

          
          style="margin-right: 1em; font-size: 1rem;"
        >
          <?php echo $BRANDS ?> SITUS SLOT TERBAIK LANGSUNG WD 1 MILYAR
        </p>
      
    </div>

    <p
      
      style="font-size: 1rem; --marquee-font-size-value: 1;"
    >
      <svg
        class="Marquee-svg"
        fill="currentColor"
        aria-hidden="true"
      >
        <g class="Marquee-path-group" transform="translate(0, 0)">
          <path class="Marquee-path" fill="none" stroke="transparent" stroke-width="0" d="" stroke-dasharray="" />
        </g>
        <text>
          <textPath class="Marquee-svg-text"></textPath>
        </text>
        <text>
          <textPath class="Marquee-svg-group" visibility="hidden">
            
              <tspan class="Marquee-svg-text"><?php echo $BRANDS ?> SITUS SLOT TERBAIK LANGSUNG WD 1 MILYAR</tspan>
            
          </textPath>
        </text>
        <g class="Marquee-hitbox" data-hitbox >
          <g class="Marquee-path-hitbox-group">
            <path class="Marquee-path-hitbox" fill="none" stroke="transparent" d="" />
            <path class="Marquee-path-hitbox-focus-outline" fill="none" stroke="transparent" stroke-width="2px" d="" />
          </g>
        </g>
      </svg>
      
      <span class="v6-visually-hidden">
        <?php echo $BRANDS ?> SITUS SLOT TERBAIK LANGSUNG WD 1 MILYAR 
      </span>
    </p>

    <div class="Marquee-track"></div>
  </div>
</div>
</div></div></div><div class="fe-block fe-block-06796de4fdbe372e900e"><div class="sqs-block horizontalrule-block sqs-block-horizontalrule" data-block-type="47" id="block-06796de4fdbe372e900e"><div class="sqs-block-content"><hr /></div></div></div><div class="fe-block fe-block-55ec5fa5e9546e066d38"><div class="sqs-block horizontalrule-block sqs-block-horizontalrule" data-block-type="47" id="block-55ec5fa5e9546e066d38"><div class="sqs-block-content"><hr /></div></div></div><div class="fe-block fe-block-9019c328520d91d1e1b3"><div class="sqs-block html-block sqs-block-html" data-block-type="2" data-border-radii="&#123;&quot;topLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;topRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;&#125;" id="block-9019c328520d91d1e1b3"><div class="sqs-block-content">

<div class="sqs-html-content">
  <h3 style="white-space:pre-wrap;"><a href="https://biologi.ui.ac.id/wp-content/uploads/fer/?link=<?php echo $BRANDS ?>"><?php echo $BRANDS ?></a>🦚merupakan situs yang selalu didamba-dambakan oleh para pemain slot agar selalu bisa mendapatkan kemenangan yang pastinya dibayarkan 100%.</h3>
</div>




















  
  



</div></div></div><div class="fe-block fe-block-c2408e117a140903077c"><div class="sqs-block button-block sqs-block-button sqs-stretched" data-block-type="53" id="block-c2408e117a140903077c"><div class="sqs-block-content">

<div
  class="sqs-block-button-container sqs-block-button-container--center"
  data-animation-role="button"
  data-alignment="center"
  data-button-size="medium"
  data-button-type="primary"
>
  <a
    href="https://nagahoki.store/satu.php"
    class="sqs-block-button-element--medium sqs-button-element--primary sqs-block-button-element"
    
  >
    DAFTAR
  </a>
</div>
</div></div></div><div class="fe-block fe-block-509762d33de8c5eb7f6b"><div class="sqs-block image-block sqs-block-image sqs-stretched" data-aspect-ratio="150" data-block-type="5" id="block-509762d33de8c5eb7f6b"><div class="sqs-block-content">






























  <svg data-image-mask-id="509762d33de8c5eb7f6b" width="0" height="0" style="position: absolute;">
    <defs>
      <clipPath id="509762d33de8c5eb7f6b" clipPathUnits="objectBoundingBox">
        
          <path d="M0.495,0 A0.505,0.336,0,0,0,0,0.329 V1 H1 V0.329 A0.505,0.336,0,0,0,0.495,0" />
        

        

        

        

        

        

        

        

        

        

        

        

        

        

        

        

        

        

        

        

        

        

        

        

        

        

        

        

        

        

        

        

        

        

        

        
      </clipPath>
    </defs>
  </svg>













  

    
  
    <div
      class="
        image-block-outer-wrapper
        layout-caption-below
        design-layout-fluid
        image-position-right
        combination-animation-site-default
        individual-animation-site-default
      "
      data-test="image-block-fluid-outer-wrapper"
    >
      <div
        class="fluid-image-animation-wrapper sqs-image sqs-block-alignment-wrapper"
        data-animation-role="image"
        
  

      >
        <div
          class="fluid-image-container sqs-image-content"
          data-shape-mask="arched-window"
          style="overflow: hidden;clip-path: url(#509762d33de8c5eb7f6b);-webkit-clip-path: url(#509762d33de8c5eb7f6b);position: relative;width: 100%;height: 100%;"
        >
          

          
          

          
            
              <div class="content-fill">
                
            
              
              
              
              
              
              
              <img data-stretch="false" data-src="https://images.squarespace-cdn.com/content/v1/65a6318bcd320552b610bdce/e5ee1e91-3895-4337-8b8e-73a3dc5a534d/238373-jujutsu-kaisen-season-2-noren-gojo-satoru-80x100cm.jpg" data-image="https://images.squarespace-cdn.com/content/v1/65a6318bcd320552b610bdce/e5ee1e91-3895-4337-8b8e-73a3dc5a534d/238373-jujutsu-kaisen-season-2-noren-gojo-satoru-80x100cm.jpg" data-image-dimensions="720x720" data-image-focal-point="0.5,0.5" alt="" data-load="false" elementtiming="system-image-block" src="https://images.squarespace-cdn.com/content/v1/65a6318bcd320552b610bdce/e5ee1e91-3895-4337-8b8e-73a3dc5a534d/238373-jujutsu-kaisen-season-2-noren-gojo-satoru-80x100cm.jpg" width="720" height="720" alt="" sizes="100vw" style="display:block;object-fit: cover; object-position: 50% 50%" srcset="https://images.squarespace-cdn.com/content/v1/65a6318bcd320552b610bdce/e5ee1e91-3895-4337-8b8e-73a3dc5a534d/238373-jujutsu-kaisen-season-2-noren-gojo-satoru-80x100cm.jpg?format=100w 100w, https://images.squarespace-cdn.com/content/v1/65a6318bcd320552b610bdce/e5ee1e91-3895-4337-8b8e-73a3dc5a534d/238373-jujutsu-kaisen-season-2-noren-gojo-satoru-80x100cm.jpg?format=300w 300w, https://images.squarespace-cdn.com/content/v1/65a6318bcd320552b610bdce/e5ee1e91-3895-4337-8b8e-73a3dc5a534d/238373-jujutsu-kaisen-season-2-noren-gojo-satoru-80x100cm.jpg?format=500w 500w, https://images.squarespace-cdn.com/content/v1/65a6318bcd320552b610bdce/e5ee1e91-3895-4337-8b8e-73a3dc5a534d/238373-jujutsu-kaisen-season-2-noren-gojo-satoru-80x100cm.jpg?format=750w 750w, https://images.squarespace-cdn.com/content/v1/65a6318bcd320552b610bdce/e5ee1e91-3895-4337-8b8e-73a3dc5a534d/238373-jujutsu-kaisen-season-2-noren-gojo-satoru-80x100cm.jpg?format=1000w 1000w, https://images.squarespace-cdn.com/content/v1/65a6318bcd320552b610bdce/e5ee1e91-3895-4337-8b8e-73a3dc5a534d/238373-jujutsu-kaisen-season-2-noren-gojo-satoru-80x100cm.jpg?format=1500w 1500w, https://images.squarespace-cdn.com/content/v1/65a6318bcd320552b610bdce/e5ee1e91-3895-4337-8b8e-73a3dc5a534d/238373-jujutsu-kaisen-season-2-noren-gojo-satoru-80x100cm.jpg?format=2500w 2500w" loading="lazy" decoding="async" data-loader="sqs">

            
            
              
            
            <div class="fluidImageOverlay"></div>
          
              </div>
            
          

        </div>
      </div>
    </div>
    <style>
      
        .sqs-block-image .sqs-block-content {
          height: 100%;
          width: 100%;
        }
      

      
        .fe-block-509762d33de8c5eb7f6b .fluidImageOverlay {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          mix-blend-mode: normal;
          
            
            
          
          
            opacity: 0;
          
        }
      
    </style>
  


  


</div></div></div></div></div>
    </div>
  
  </div>
  
</section>

  
</article>


          

          
            
          
        
      </main>
      <script type="text/javascript">
        const firstSection = document.querySelector('.page-section');
        const header = document.querySelector('.header');
        const mobileOverlayNav = document.querySelector('.header-menu');
        const sectionBackground = firstSection ? firstSection.querySelector('.section-background') : null;
        const headerHeight = header ? header.getBoundingClientRect().height : 0;
        const firstSectionHasBackground = firstSection ? firstSection.className.indexOf('has-background') >= 0 : false;
        const isFirstSectionInset = firstSection ? firstSection.className.indexOf('background-width--inset') >= 0 : false;
        const isLayoutEngineSection = firstSection ? firstSection.className.indexOf('layout-engine-section') >= 0 : false;

        if (firstSection) {
          firstSection.style.paddingTop = headerHeight + 'px';
        }
        if (sectionBackground && isLayoutEngineSection) {
          if (isFirstSectionInset) {
            sectionBackground.style.top = headerHeight + 'px';
          } else {
            sectionBackground.style.top = '';
          }
        }
        //# sourceURL=headerPositioning.js
      </script>

      
        <footer class="sections" id="footer-sections" data-footer-sections>
  
  
  
  
  
  
    
    


  


<section
  data-test="page-section"
  
  data-section-theme="light"
  class='page-section 
    
      full-bleed-section
      layout-engine-section
    
    background-width--full-bleed
    
      section-height--small
    
    
      content-width--wide
    
    horizontal-alignment--center
    vertical-alignment--middle
    
      
    
    
    light'
  
  data-section-id="65a6318ccd320552b610bded"
  
  data-controller="SectionWrapperController"
  data-current-styles="{
&quot;imageOverlayOpacity&quot;: 0.15,
&quot;backgroundWidth&quot;: &quot;background-width--full-bleed&quot;,
&quot;sectionHeight&quot;: &quot;section-height--small&quot;,
&quot;customSectionHeight&quot;: 10,
&quot;horizontalAlignment&quot;: &quot;horizontal-alignment--center&quot;,
&quot;verticalAlignment&quot;: &quot;vertical-alignment--middle&quot;,
&quot;contentWidth&quot;: &quot;content-width--wide&quot;,
&quot;customContentWidth&quot;: 50,
&quot;sectionTheme&quot;: &quot;light&quot;,
&quot;sectionAnimation&quot;: &quot;none&quot;,
&quot;backgroundMode&quot;: &quot;image&quot;
}"
  data-current-context="{
&quot;video&quot;: {
&quot;playbackSpeed&quot;: 0.5,
&quot;filter&quot;: 1,
&quot;filterStrength&quot;: 0,
&quot;zoom&quot;: 0,
&quot;videoSourceProvider&quot;: &quot;none&quot;
},
&quot;backgroundImageId&quot;: null,
&quot;backgroundMediaEffect&quot;: null,
&quot;divider&quot;: null,
&quot;typeName&quot;: &quot;page&quot;
}"
  data-animation="none"
  data-fluid-engine-section
   
  
    
  
  
>
  <div
    class="section-border" 
    
  >
    <div class="section-background">
    
      
    
    </div>
  </div>
  <div
    class='content-wrapper'
    style='
      
        
      
    '
  >
    <div
      class="content"
      
    >
      
      
      
      
      
      
      <div data-fluid-engine="true"><style>.fe-65a6318ccd320552b610bdec {
  --grid-gutter: calc(var(--sqs-mobile-site-gutter, 6vw) - 11.0px);
  --cell-max-width: calc( ( var(--sqs-site-max-width, 1500px) - (11.0px * (8 - 1)) ) / 8 );

  display: grid;
  position: relative;
  grid-area: 1/1/-1/-1;
  grid-template-rows: repeat(16,minmax(24px, auto));
  grid-template-columns:
    minmax(var(--grid-gutter), 1fr)
    repeat(8, minmax(0, var(--cell-max-width)))
    minmax(var(--grid-gutter), 1fr);
  row-gap: 11.0px;
  column-gap: 11.0px;
}

@media (min-width: 768px) {
  .background-width--inset .fe-65a6318ccd320552b610bdec {
    --inset-padding: calc(var(--sqs-site-gutter) * 2);
  }

  .fe-65a6318ccd320552b610bdec {
    --grid-gutter: calc(var(--sqs-site-gutter, 4vw) - 11.0px);
    --cell-max-width: calc( ( var(--sqs-site-max-width, 1500px) - (11.0px * (24 - 1)) ) / 24 );
    --inset-padding: 0vw;

    --row-height-scaling-factor: 0.0215;
    --container-width: min(var(--sqs-site-max-width, 1500px), calc(100vw - var(--sqs-site-gutter, 4vw) * 2 - var(--inset-padding) ));

    grid-template-rows: repeat(5,minmax(calc(var(--container-width) * var(--row-height-scaling-factor)), auto));
    grid-template-columns:
      minmax(var(--grid-gutter), 1fr)
      repeat(24, minmax(0, var(--cell-max-width)))
      minmax(var(--grid-gutter), 1fr);
  }
}


  .fe-block-4efb1dd6553586576045 {
    grid-area: 2/2/6/10;
    z-index: 0;
  }

  .fe-block-4efb1dd6553586576045 .sqs-block {
    justify-content: flex-start;
  }

  .fe-block-4efb1dd6553586576045 .sqs-block-alignment-wrapper {
    align-items: flex-start;
  }

  @media (min-width: 768px) {
    .fe-block-4efb1dd6553586576045 {
      grid-area: 1/2/5/10;
      z-index: 0;
    }

    .fe-block-4efb1dd6553586576045 .sqs-block {
      justify-content: flex-start;
    }

    .fe-block-4efb1dd6553586576045 .sqs-block-alignment-wrapper {
      align-items: flex-start;
    }
  }

  .fe-block-59613218c3c100d4b971 {
    grid-area: 6/2/12/10;
    z-index: 1;
  }

  .fe-block-59613218c3c100d4b971 .sqs-block {
    justify-content: flex-start;
  }

  .fe-block-59613218c3c100d4b971 .sqs-block-alignment-wrapper {
    align-items: flex-start;
  }

  @media (min-width: 768px) {
    .fe-block-59613218c3c100d4b971 {
      grid-area: 1/10/6/18;
      z-index: 1;
    }

    .fe-block-59613218c3c100d4b971 .sqs-block {
      justify-content: flex-start;
    }

    .fe-block-59613218c3c100d4b971 .sqs-block-alignment-wrapper {
      align-items: flex-start;
    }
  }

  .fe-block-f762e17a7fb844abf7b0 {
    grid-area: 12/2/16/10;
    z-index: 2;
  }

  .fe-block-f762e17a7fb844abf7b0 .sqs-block {
    justify-content: flex-start;
  }

  .fe-block-f762e17a7fb844abf7b0 .sqs-block-alignment-wrapper {
    align-items: flex-start;
  }

  @media (min-width: 768px) {
    .fe-block-f762e17a7fb844abf7b0 {
      grid-area: 1/18/5/26;
      z-index: 2;
    }

    .fe-block-f762e17a7fb844abf7b0 .sqs-block {
      justify-content: flex-start;
    }

    .fe-block-f762e17a7fb844abf7b0 .sqs-block-alignment-wrapper {
      align-items: flex-start;
    }
  }

</style><div class="fluid-engine fe-65a6318ccd320552b610bdec"><div class="fe-block fe-block-4efb1dd6553586576045"><div class="sqs-block html-block sqs-block-html" data-block-type="2" data-border-radii="&#123;&quot;topLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;topRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;&#125;" id="block-4efb1dd6553586576045"><div class="sqs-block-content">

<div class="sqs-html-content">
  <h4 style="text-align:center;white-space:pre-wrap;">Location</h4><p style="text-align:center;white-space:pre-wrap;" class="">123 Demo Street<br>New York, NY 12345</p>
</div>




















  
  



</div></div></div><div class="fe-block fe-block-59613218c3c100d4b971"><div class="sqs-block html-block sqs-block-html" data-block-type="2" data-border-radii="&#123;&quot;topLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;topRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;&#125;" id="block-59613218c3c100d4b971"><div class="sqs-block-content">

<div class="sqs-html-content">
  <h4 style="text-align:center;white-space:pre-wrap;">Hours</h4><p style="text-align:center;white-space:pre-wrap;" class="">Monday — Sunday<br>Active 24 hours</p><p style="text-align:center;white-space:pre-wrap;" class="">Made with SEO GOJO</p>
</div>




















  
  



</div></div></div><div class="fe-block fe-block-f762e17a7fb844abf7b0"><div class="sqs-block html-block sqs-block-html" data-block-type="2" data-border-radii="&#123;&quot;topLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;topRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;&#125;" id="block-f762e17a7fb844abf7b0"><div class="sqs-block-content">

<div class="sqs-html-content">
  <h4 style="text-align:center;white-space:pre-wrap;">COPYRIGHT<strong><em>©</em></strong></h4><p style="text-align:center;white-space:pre-wrap;" class=""><?php echo $BRANDS ?> GACOR</p><p style="text-align:center;white-space:pre-wrap;" class=""> Registered<strong><em>®</em></strong></p>
</div>




















  
  



</div></div></div></div></div>
    </div>
  
  </div>
  
</section>

  
</footer>

      
    </div>

    <script defer="defer" src="https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/scripts/site-bundle.461357a181df7ddcd970264c877fd49f.js" type="text/javascript"></script>
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="display:none" data-usage="social-icons-svg"><symbol id="instagram-unauth-icon" viewBox="0 0 64 64"><path d="M46.91,25.816c-0.073-1.597-0.326-2.687-0.697-3.641c-0.383-0.986-0.896-1.823-1.73-2.657c-0.834-0.834-1.67-1.347-2.657-1.73c-0.954-0.371-2.045-0.624-3.641-0.697C36.585,17.017,36.074,17,32,17s-4.585,0.017-6.184,0.09c-1.597,0.073-2.687,0.326-3.641,0.697c-0.986,0.383-1.823,0.896-2.657,1.73c-0.834,0.834-1.347,1.67-1.73,2.657c-0.371,0.954-0.624,2.045-0.697,3.641C17.017,27.415,17,27.926,17,32c0,4.074,0.017,4.585,0.09,6.184c0.073,1.597,0.326,2.687,0.697,3.641c0.383,0.986,0.896,1.823,1.73,2.657c0.834,0.834,1.67,1.347,2.657,1.73c0.954,0.371,2.045,0.624,3.641,0.697C27.415,46.983,27.926,47,32,47s4.585-0.017,6.184-0.09c1.597-0.073,2.687-0.326,3.641-0.697c0.986-0.383,1.823-0.896,2.657-1.73c0.834-0.834,1.347-1.67,1.73-2.657c0.371-0.954,0.624-2.045,0.697-3.641C46.983,36.585,47,36.074,47,32S46.983,27.415,46.91,25.816z M44.21,38.061c-0.067,1.462-0.311,2.257-0.516,2.785c-0.272,0.7-0.597,1.2-1.122,1.725c-0.525,0.525-1.025,0.85-1.725,1.122c-0.529,0.205-1.323,0.45-2.785,0.516c-1.581,0.072-2.056,0.087-6.061,0.087s-4.48-0.015-6.061-0.087c-1.462-0.067-2.257-0.311-2.785-0.516c-0.7-0.272-1.2-0.597-1.725-1.122c-0.525-0.525-0.85-1.025-1.122-1.725c-0.205-0.529-0.45-1.323-0.516-2.785c-0.072-1.582-0.087-2.056-0.087-6.061s0.015-4.48,0.087-6.061c0.067-1.462,0.311-2.257,0.516-2.785c0.272-0.7,0.597-1.2,1.122-1.725c0.525-0.525,1.025-0.85,1.725-1.122c0.529-0.205,1.323-0.45,2.785-0.516c1.582-0.072,2.056-0.087,6.061-0.087s4.48,0.015,6.061,0.087c1.462,0.067,2.257,0.311,2.785,0.516c0.7,0.272,1.2,0.597,1.725,1.122c0.525,0.525,0.85,1.025,1.122,1.725c0.205,0.529,0.45,1.323,0.516,2.785c0.072,1.582,0.087,2.056,0.087,6.061S44.282,36.48,44.21,38.061z M32,24.297c-4.254,0-7.703,3.449-7.703,7.703c0,4.254,3.449,7.703,7.703,7.703c4.254,0,7.703-3.449,7.703-7.703C39.703,27.746,36.254,24.297,32,24.297z M32,37c-2.761,0-5-2.239-5-5c0-2.761,2.239-5,5-5s5,2.239,5,5C37,34.761,34.761,37,32,37z M40.007,22.193c-0.994,0-1.8,0.806-1.8,1.8c0,0.994,0.806,1.8,1.8,1.8c0.994,0,1.8-0.806,1.8-1.8C41.807,22.999,41.001,22.193,40.007,22.193z"/></symbol><symbol id="instagram-unauth-mask" viewBox="0 0 64 64"><path d="M43.693,23.153c-0.272-0.7-0.597-1.2-1.122-1.725c-0.525-0.525-1.025-0.85-1.725-1.122c-0.529-0.205-1.323-0.45-2.785-0.517c-1.582-0.072-2.056-0.087-6.061-0.087s-4.48,0.015-6.061,0.087c-1.462,0.067-2.257,0.311-2.785,0.517c-0.7,0.272-1.2,0.597-1.725,1.122c-0.525,0.525-0.85,1.025-1.122,1.725c-0.205,0.529-0.45,1.323-0.516,2.785c-0.072,1.582-0.087,2.056-0.087,6.061s0.015,4.48,0.087,6.061c0.067,1.462,0.311,2.257,0.516,2.785c0.272,0.7,0.597,1.2,1.122,1.725s1.025,0.85,1.725,1.122c0.529,0.205,1.323,0.45,2.785,0.516c1.581,0.072,2.056,0.087,6.061,0.087s4.48-0.015,6.061-0.087c1.462-0.067,2.257-0.311,2.785-0.516c0.7-0.272,1.2-0.597,1.725-1.122s0.85-1.025,1.122-1.725c0.205-0.529,0.45-1.323,0.516-2.785c0.072-1.582,0.087-2.056,0.087-6.061s-0.015-4.48-0.087-6.061C44.143,24.476,43.899,23.682,43.693,23.153z M32,39.703c-4.254,0-7.703-3.449-7.703-7.703s3.449-7.703,7.703-7.703s7.703,3.449,7.703,7.703S36.254,39.703,32,39.703z M40.007,25.793c-0.994,0-1.8-0.806-1.8-1.8c0-0.994,0.806-1.8,1.8-1.8c0.994,0,1.8,0.806,1.8,1.8C41.807,24.987,41.001,25.793,40.007,25.793z M0,0v64h64V0H0z M46.91,38.184c-0.073,1.597-0.326,2.687-0.697,3.641c-0.383,0.986-0.896,1.823-1.73,2.657c-0.834,0.834-1.67,1.347-2.657,1.73c-0.954,0.371-2.044,0.624-3.641,0.697C36.585,46.983,36.074,47,32,47s-4.585-0.017-6.184-0.09c-1.597-0.073-2.687-0.326-3.641-0.697c-0.986-0.383-1.823-0.896-2.657-1.73c-0.834-0.834-1.347-1.67-1.73-2.657c-0.371-0.954-0.624-2.044-0.697-3.641C17.017,36.585,17,36.074,17,32c0-4.074,0.017-4.585,0.09-6.185c0.073-1.597,0.326-2.687,0.697-3.641c0.383-0.986,0.896-1.823,1.73-2.657c0.834-0.834,1.67-1.347,2.657-1.73c0.954-0.371,2.045-0.624,3.641-0.697C27.415,17.017,27.926,17,32,17s4.585,0.017,6.184,0.09c1.597,0.073,2.687,0.326,3.641,0.697c0.986,0.383,1.823,0.896,2.657,1.73c0.834,0.834,1.347,1.67,1.73,2.657c0.371,0.954,0.624,2.044,0.697,3.641C46.983,27.415,47,27.926,47,32C47,36.074,46.983,36.585,46.91,38.184z M32,27c-2.761,0-5,2.239-5,5s2.239,5,5,5s5-2.239,5-5S34.761,27,32,27z"/></symbol></svg>

  </body>
</html>
