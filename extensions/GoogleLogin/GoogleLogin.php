require_once "$IP/extensions/GoogleLogin/GoogleLogin.php";
$wgGLSecret = '<your-client-secret>';
$wgGLAppId = '<your-client-id>';

$wgGLShowCreateReason = false;
$wgGLAllowedDomains = '';
$wgGLAllowedDomainsStrict = false;
$wgGLShowKeepLogin = true;
$wgGLAllowAccountCreation = $wgGroupPermissions['*']['createaccount'];
$wgGLReplaceMWLogin = false;
