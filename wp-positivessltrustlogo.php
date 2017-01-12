<?php
/*
Plugin Name: wp-positivessltrustlogo
Plugin URI: https://github.com/oatcpe/WP-PositiveSSL-TrustLogo
Description: Displays a Positive TrustLogo on your WordPress site.
Version: 0.1
Author: OatCPE
Author URI: https://github.com/oatcpe/
License: GPL-3.0
*/
function trustlogo_header() {
?>
<script type="text/javascript"> 
//<![CDATA[ 
var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.comodo.com/" : "http://www.trustlogo.com/");
document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
//]]>
</script>
<?php
}
add_action('wp_head', 'trustlogo_header');
function trustlogo_footer() {
?>
<div style="position:fixed;bottom:0px;left:0px;" >
<script language="JavaScript" type="text/javascript">
TrustLogo("<?php echo plugins_url('/comodo_secure_seal.png', __FILE__) ?>", "CL1", "none");
</script>
<a  href="https://www.positivessl.com/" id="comodoTL">Positive SSL</a>
</div>
<?php
}
add_action('wp_footer', 'trustlogo_footer', 250);
?>
