# MobileFrontend
## Source: https://www.mediawiki.org/wiki/Extension:MobileFrontend

### WARNING: This file is publically viewable on the web.
### Do not put private data here.

require_once "$IP/extensions/MobileFrontend/MobileFrontend.php";
$wgMFAutodetectMobileView = true;

$wgMFDefaultSkinClass = 'SkinMinerva';
$wgMFUseCentralAuthToken = false;
$wgMFPhotoUploadEndpoint = '';
$wgMFUploadMinEdits = 0;
$wgMFNearbyEndpoint = '';
$wgMFContentNamespace = NS_MAIN;
$wgMFPhotoUploadWiki = null;
$wgMobileFrontendLogo = "{$wgScriptPath}/mf-logo.png";
$wgMobileUrlTemplate = '';
$wgMobileFrontendFormatCookieExpiry = null;
$wgMFRemovableClasses = array(
                        // These rules will be used for all transformations
                        'base' => array(),
                        // HTML view
                        'HTML' => array(),
                        );
$wgMFNoindexPages = true;
$wgMFStopRedirectCookieHost = null;
$wgMFTrademarkSitename = false;
$wgDeviceDetectionClass = 'DeviceDetection';
$wgMFNearby = false;
$wgMFNearbyRange = 10000;
$wgMFMinCachedPageSize = 64 * 1024;
$wgMFEnableSiteNotice = false;
$wgMFShowMobileViewToTablets = true;
$wgMFPhotoUploadAppendToDesc = '';
$wgMFEnableXAnalyticsLogging = false;
$wgMFAnonymousEditing = false;
$wgMFLeadPhotoUploadCssSelector = 'img, .navbox';
$wgMFEnableCssAnimations = true;
$wgMFNoMobileCategory = false;
$wgMFNoMobilePages = array();
$wgMFAjaxUploadProgressSupport = true;
$wgMFDeviceWidthTablet = 768;
$wgMFDeviceWidthMobileSmall = 280;
$wgMFKeepGoing = false;
$wgMFTidyMobileViewSections = true;
$wgMFMobileHeader = 'X-WAP';
$wgMFEnableMinervaBetaFeature = false;
$wgMFEnableNearbyPagesBetaFeature = false;
$wgMFCollapseSectionsByDefault = true;
$wgMFAppPackageId = false;
$wgMFAppScheme = 'http';
$wgMFPageActions = array( 'edit', 'talk', 'upload', 'watch' );
