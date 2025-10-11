<?php #=========================================================================
$PATH_TO_ROOT = '.';
require_once($PATH_TO_ROOT.'/lib/base.php');
require_once($PATH_TO_ROOT.'/lib/html.php');

#-------------------------------------------------------------------------------
startHtmlPage('Alt0.nl &rarr; On AI');
#============================================================================ ?>

<h1><a href="<?php echo $alt0_url; ?>"><span class="link-button">Alt0.nl</span></a></h1>
<h3><?php	echo oneLiner(); ?></h3>
<div id="spacer">&nbsp;</div>

<table id="alternatives"><tr><td>
<div id="choices">
<h5>On AI:</h5>
<ul>
  <li><a href="https://www.theregister.com/2025/06/29/ai_agents_fail_a_lot/">AI agents get office tasks wrong around 70% of the time, and a lot of them aren't AI at all</a></li>
  <li><a href="https://www.theregister.com/2025/09/05/ai_code_assistants_security_problems/">AI code assistants make developers more efficient at creating security problems</a></li>
  <li><a href="https://www.reddit.com/r/vibecoding/comments/1mo0j3p/never_touching_cursor_again/">AI deletes database</a></li>
  <li><a href="https://vu.nl/nl/nieuws/2025/ai-hard-op-weg-om-grootste-energieverbruiker-te-worden">AI hard op weg om grootste energieverbruiker te worden</a></li>
  <li><a href="https://os-sci.nl/blog/dutch-blogs-3/ai-verlaagt-de-productiviteit-van-ervaren-programmeurs-120">AI verlaagt de productiviteit van ervaren programmeurs</a></li>
  <li><a href="https://www.computerworld.com/article/4059383/openai-admits-ai-hallucinations-are-mathematically-inevitable-not-just-engineering-flaws.html">OpenAI admits AI hallucinations are mathematically inevitable, not just engineering flaws</a></li>
  <li><a href="https://tweakers.net/nieuws/238390/ai-browser-van-perplexity-trapt-in-simpele-en-bekende-phishingtrucs.html">AI-browser van Perplexity trapt in simpele en bekende phishingtrucs</a></li>
  <li><a href="https://www.theregister.com/2025/09/11/cobalt_strikes_ai_successor_downloaded/">AI-powered penetration tool, an attacker's dream, downloaded 10K times in 2 months</a></li>
  <li><a href="https://www.theregister.com/2025/09/09/ai_security_review_risks/">Anthropic's Claude Code runs code to test if it is safe – which might be a big mistake</a></li>
</ul>

<h5>On Meta:</h5>
<ul>
  <li><a href="https://tweakers.net/nieuws/203926/meta-krijgt-265-miljoen-euro-avg-boete-om-gescrapete-data-van-533-miljoen-users.html">Meta krijgt 265 miljoen euro AVG-boete om gescrapete data van 533 miljoen users</a></li>
  <li><a href="https://tweakers.net/nieuws/211816/noorse-privacywaakhond-geeft-meta-88000-euro-boete-per-dag-voor-overtreden-avg.html">Noorse privacywaakhond geeft Meta 88.000 euro boete per dag voor overtreden AVG</a></li>
  <li><a href="https://tweakers.net/nieuws/235760/meta-had-vanaf-september-inzage-in-surfgedrag-van-android-gebruikers.html">Meta had vanaf september inzage in surfgedrag van Android-gebruikers</a></li>
  <li><a href="https://tweakers.net/nieuws/237058/meta-moet-duitser-5000-euro-schadevergoeding-betalen-vanwege-illegale-tracking.html">Meta moet Duitser 5000 euro schadevergoeding betalen vanwege illegale tracking</a></li>
  <li><a href="https://decorrespondent.nl/16421/mag-meta-bepalen-wat-jij-ziet-op-instagram-en-facebook-nee-vindt-de-rechter/3a5ebc2a-ba4a-0a90-22f6-cb9a2c021dc5">Mag Meta bepalen wat jij ziet op Instagram en Facebook? Nee, vindt de rechter</a></li>
</ul>

<h5>On Privacy:</h5>
<ul>
  <li><a href="https://pluralistic.net/2025/08/14/bellovin/#wont-someone-think-of-the-cryptographers">Privacy preserving age verification” is bullshit</a></li>
  <li><a href="https://decorrespondent.nl/209/nee-je-hebt-wel-iets-te-verbergen/6428004-ab2d5fc2">Nee, je hebt wél iets te verbergen</a></li>
  <li><a href="https://substack.com/home/post/p-170674285">Hoe de EU kinderen gebruikt voor haar agenda</a></li>
</ul>
</div>
</td><td>
<?php #=========================================================================
echo "<div id=\"links\"><h5>Alternatives listings:</h5><div>\n";
echo linksList('alternatives', NULL);
echo "</div></div>\n";

echo "</td></tr></table>\n";

endHtmlPage();
#============================================================================ ?>
