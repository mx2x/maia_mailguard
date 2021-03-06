{include file="html_head.tpl"}

<h3 align="center">
As of {$smarty.now|date_format:"%Y-%m-%d %H:%M:%S %Z"}
</h3>

<div align="center">
{if $enable_charts}
<a target="_new" href="chart_rules.php"><img src="chart_rules.php?thumb=1" alt="" border="0"></a><br>(Click on the chart for a more detailed view)
{/if}
</div><br>

<div class="styledform ui-widget-content">
  <fieldset><legend>{$lang.header_rules1} : {$lang.header_rules2}</legend>
    <ol>
{if $data}
<li>
<table class="ui-list-table">
<tr>
    <td class="spamheader" align="center">{$lang.header_rule_name}</td>
    <td class="spamheader" align="center">{$lang.header_rule_description}</td>
    <td class="spamheader" align="center">{$lang.header_rule_score}</td>
    <td class="spamheader" align="center">{$lang.header_rule_count}</td>
    <td class="spamheader" align="center">{$lang.header_percent}</td>
</tr>
{foreach from=$data key=key item=row}
<tr>
    <td class="spambody" align="center">{$row.rule_name}</td>
{if strlen($row.rule_description) > 0}
    <td class="spambody" align="center">{$row.rule_description}</td>
{else}
    <td class="spambody" align="center">{$lang.text_no_description}</td>
{/if}
    <td class="spambody" align="center">{$row.rule_score|string_format:"%.3f"}</td>
    <td class="spambody" align="center">{$row.rule_count}</td>
    <td class="spambody" align="center">{$row.rule_count*100/$total|string_format:"%.1f"}</td>
</tr>
{/foreach}
<tr>
    <td class="spamheader" align="center">{$rcount} {$lang.text_rules}</td>
    <td class="spamheader" align="center">&nbsp;</td>
    <td class="spamheader" align="center">&nbsp;</td>
    <td class="spamheader" align="center">{$total}</td>
    <td class="spamheader" align="center">100%</td>
</tr>
</table></li>
{else}
    <li>
    {$lang.message_no_rules}
    </li>
{/if}
</ol></fieldset></div>

<div class="styledform">
<a href="stats.php{$msid}id=0">[ {$lang.link_system_stats} ]</a>
</div>

{include file="html_foot.tpl"}
