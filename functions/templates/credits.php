<?php
/**
 * Hey hey! 
 *
 * Please upgrade to FullSingle Pro to remove the credit: https://onepagelove.com/go/fullsingle-upgrade
 * It really helps contribute towards improving this free plugin
 * and we want to continue to add more awesome layouts.
 *
 * Much Love,
 * Rob
 * 
 * @package fullsingle
 * @since fullsingle 0.0.8
 * @license GPL 2.0
 * 
 */
?>

<div id="credits"><?php $fullsingle_credit_pro = wp_kses_post(get_option( 'fullsingle_credit_pro', '<a href=\"https://onepagelove.com/fullsingle\">Built using FullSingle</a>' )); echo $fullsingle_credit_pro; ?></div>