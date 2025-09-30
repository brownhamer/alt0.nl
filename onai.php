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
<div id="choices"><h5>On AI:</h5>
<ul>
  <li><a href="https://www.theregister.com/2025/06/29/ai_agents_fail_a_lot/">AI agents get office tasks wrong around 70% of the time, and a lot of them aren't AI at all</a></li>
  <li><a href="https://www.theregister.com/2025/09/05/ai_code_assistants_security_problems/">AI code assistants make developers more efficient at creating security problems</a></li>
  <li><a href="https://www.reddit.com/r/vibecoding/comments/1mo0j3p/never_touching_cursor_again/">AI deletes database</a></li>
  <li><a href="https://vu.nl/nl/nieuws/2025/ai-hard-op-weg-om-grootste-energieverbruiker-te-worden">AI hard op weg om grootste energieverbruiker te worden</a></li>
  <li><a href="https://os-sci.nl/blog/dutch-blogs-3/ai-verlaagt-de-productiviteit-van-ervaren-programmeurs-120">AI verlaagt de productiviteit van ervaren programmeurs</a></li>
  <li><a href="https://www.computerworld.com/article/4059383/openai-admits-ai-hallucinations-are-mathematically-inevitable-not-just-engineering-flaws.html">OpenAI admits AI hallucinations are mathematically inevitable, not just engineering flaws</a></li>
  <li><a href="https://tweakers.net/nieuws/238390/ai-browser-van-perplexity-trapt-in-simpele-en-bekende-phishingtrucs.html">AI-browser van Perplexity trapt in simpele en bekende phishingtrucs</a></li>
</ul>
</div>
</td><td>
<?php #=========================================================================
# No right side content yet
#echo "<div id=\"links\"><h5>Alternatives listings:</h5><div>\n";
#echo linksList('alternatives', NULL);
#echo "</div></div>\n";

echo "</td></tr></table>\n";

endHtmlPage();
#============================================================================ ?>
