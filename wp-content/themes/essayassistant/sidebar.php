<!--SIDEBAR-->
<aside class="site_sidebar">

    <?php if (is_front_page()) : ?>
			<div class="openx-wrap">
				<!--OpenX banner begin-->
					<script type='text/javascript'>
						<!--//<![CDATA[
							var m3_u = (location.protocol == 'https:' ? 'https://openx.mcemcw.com/www/delivery/ajs.php' : 'http://openx.mcemcw.com/www/delivery/ajs.php');
							var m3_r = Math.floor(Math.random() * 99999999999);
							if (!document.MAX_used) document.MAX_used = ',';
							document.write("<scr" + "ipt type='text/javascript' src='" + m3_u);
							document.write("?zoneid=330");
							document.write('&amp;cb=' + m3_r);
							if (document.MAX_used != ',') document.write("&amp;exclude=" + document.MAX_used);
							document.write(document.charset ? '&amp;charset=' + document.charset : (document.characterSet ? '&amp;charset=' + document.characterSet : ''));
							document.write("&amp;loc=" + escape('http://' + window.location.hostname + '/'));
							if (document.referrer) document.write("&amp;referer=" + escape(document.referrer));
							if (document.context) document.write("&context=" + escape(document.context));
							if (document.mmm_fo) document.write("&amp;mmm_fo=1");
							document.write("'><\/scr" + "ipt>");
						//]]>-->
					</script>
					<noscript>
						<a href='http://openx.mcemcw.com/www/delivery/ck.php?n=ac89a4d7&amp;cb=INSERT_RANDOM_NUMBER_HERE' target='_blank'><img src='http://openx.mcemcw.com/www/delivery/avw.php?zoneid=330&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;n=ac89a4d7' border='0' alt=''/></a>
					</noscript>
				<!-- OpenX banner end -->
			</div>
    <?php endif; ?>

        <div class="cornered">
            <div class="green_block_side">
                <i class="fa fa-trophy" aria-hidden="true"></i>
                Our advantages
            </div>
            <?php if(is_page('home')):?>
            <ul class="advantages-items">
                <li>Guaranteed 100% Original and Plagiarism-free</li>
                <li>All writers have at least MA or PhD</li>
                <li>You're making money with Loyalty and Referral programs</li>
                <li>Money-back and Confidentiality guarantees</li>
                <li>Reasonable and competitive prices</li>
                <li>Responsive 24/7 Client Support</li>
            </ul>
            <?php else :?>
                <img src="<?php bloginfo('template_url'); ?>/img/advantages_page.png">
            <?php endif;?>
        </div>
    <p style="margin-bottom:20px;">
    <table border="0" >
        <tr style="overflow: hidden;">
            <td valign="top" style="padding-right: 5px;">
                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=147180985453226";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                <div class="fb-share-button" data-href="//bestessay4u.com//" data-layout="button"></div>
            </td>
            <td valign="top" style="padding-right: 5px;">
                <a href="https://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            </td>
            <td valign="top"><span id="fb-root"></span>
                <!-- Place this tag in your head or just before your close body tag. -->
                <script src="https://apis.google.com/js/platform.js" async defer></script>
                <!-- Place this tag where you want the share button to render. -->
                <div class="g-plus" data-action="share" data-annotation="none"></div>
            </td>
        </tr>
    </table>

    <script type="text/javascript">
        function extractParamFromUri(uri, paramName) {
            if (!uri) {
                return;
            }
            var uri = uri.split('#')[0];  // Remove anchor.
            var parts = uri.split('?');  // Check for query params.
            if (parts.length == 1) {
                return;
            }
            var query = decodeURI(parts[1]);

            // Find url param.
            paramName += '=';
            var params = query.split('&');
            for (var i = 0, param; param = params[i]; ++i) {
                if (param.indexOf(paramName) === 0) {
                    return unescape(param.split('=')[1]);
                }
            }
        }
    </script>

    </p>
        <div class="cornered">
            <div class="green_block_side">
                <i class="fa fa-comments-o" aria-hidden="true"></i>
                Clients feedback
            </div>
            <?php if(is_page('home')):?>
                <div class="aside_text">
                    <p>
                        This paper was so much more than I expected! No revision is necessary. The writer did exactly what I asked for, provided perfect sources, and wrote a very organized paper for me. I wasn’t sure what I would get back, but I wasn’t expecting this high quality, especially since the subject was so difficult. Thank you!</p>
                </div>
                <p class="aside_name">Angela S., USA</p>
            <?php else :?>
                <img src="<?php bloginfo('template_url'); ?>/img/feedback_page.png">
            <?php endif;?>

        </div>



        <div class="cornered">
            <div class="green_block_side">
                <i class="fa fa-cogs" aria-hidden="true"></i>
                Our services
            </div>
            <div class="cornered-title"><span>Writing Services</span></div>
            <ul class="cornered-items">
                <li><a href="/essay">Essay</a></li>
                <li><a href="/book-report">Book Report</a></li>
                <li><a href="/coursework">Coursework</a></li>
                <li><a href="/term-paper">Term Paper</a></li>
                <li><a href="/research-paper">Research Paper</a></li>
                <li><a href="/thesis">Thesis</a></li>
                <li><a href="/dissertation">Dissertation</a></li>
            </ul>
            <div class="cornered-title"><span>Admission Services</span></div>
            <ul class="cornered-items">
                <li><a href="/admission-essay">Admission Essay</a></li>
                <li><a href="/personal-statement">Personal Statement</a></li>
                <li><a href="/scholarship-essay">Scholarship Essay</a></li>
            </ul>
            <div class="cornered-title"><span>Editing Services</span></div>
            <ul class="cornered-items">
                <li><a href="/editing">Editing</a></li>
                <li><a href="/proofreading">Proofreading</a></li>
            </ul>

    </div>
</aside>
