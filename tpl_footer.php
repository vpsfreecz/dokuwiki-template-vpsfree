<?php
/**
 * Template footer, included in the main and detail files
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();
?>

<!-- ********** FOOTER ********** -->
<div id="dokuwiki__footer"><div class="pad">
    <?php tpl_license(''); // license text ?>

    <div class="buttons">
        <?php
            tpl_license('button', true, false, false); // license button, no wrapper
            $target = ($conf['target']['extern']) ? 'target="'.$conf['target']['extern'].'"' : '';
        ?>
        <a href="http://www.dokuwiki.org/donate" title="Donate" <?php echo $target?>><img
            src="<?php echo tpl_basedir(); ?>images/button-donate.gif" width="80" height="15" alt="Donate" /></a>
        <a href="http://www.php.net" title="Powered by PHP" <?php echo $target?>><img
            src="<?php echo tpl_basedir(); ?>images/button-php.gif" width="80" height="15" alt="Powered by PHP" /></a>
        <a href="http://validator.w3.org/check/referer" title="Valid HTML5" <?php echo $target?>><img
            src="<?php echo tpl_basedir(); ?>images/button-html5.png" width="80" height="15" alt="Valid HTML5" /></a>
        <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3" title="Valid CSS" <?php echo $target?>><img
            src="<?php echo tpl_basedir(); ?>images/button-css.png" width="80" height="15" alt="Valid CSS" /></a>
        <a href="http://dokuwiki.org/" title="Driven by DokuWiki" <?php echo $target?>><img
            src="<?php echo tpl_basedir(); ?>images/button-dw.png" width="80" height="15" alt="Driven by DokuWiki" /></a>
    </div>
</div></div><!-- /footer -->

<script type="text/javascript"> window._pt_lt = new Date().getTime(); window._pt_sp_2 = []; _pt_sp_2.push('setAccount,71a1570e'); var _protocol = (("https:" == document.location.protocol) ? " https://" : " http://"); (function() { var atag = document.createElement('script'); atag.type = 'text/javascript'; atag.async = true; atag.src = _protocol + 'js.ptengine.com/pta.js'; var stag = document.createElement('script'); stag.type = 'text/javascript'; stag.async = true; stag.src = _protocol + 'js.ptengine.com/pts.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(atag, s);s.parentNode.insertBefore(stag, s); })(); 
</script>
<!-- Hotjar Tracking Code for kb.vpsfree.cz -->
<script>
    (function(f,b){
        var c;
        f.hj=f.hj||function(){(f.hj.q=f.hj.q||[]).push(arguments)};
        f._hjSettings={hjid:31442, hjsv:4};
        c=b.createElement("script");c.async=1;
        c.src="//static.hotjar.com/c/hotjar-"+f._hjSettings.hjid+".js?sv="+f._hjSettings.hjsv;
        b.getElementsByTagName("head")[0].appendChild(c); 
    })(window,document);
</script>



<?php
tpl_includeFile('footer.html');
