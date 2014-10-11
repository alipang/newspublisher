<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" {if $_config.manager_direction EQ 'rtl'}dir="rtl"{/if} lang="{$_config.manager_lang_attribute}" xml:lang="{$_config.manager_lang_attribute}">
<head>
<title>MODX :: {$_lang.modx_resource_browser}</title>
<meta http-equiv="Content-Type" content="text/html; charset={$_config.modx_charset}" />

<link rel="stylesheet" type="text/css" href="{$_config.manager_url}assets/ext3/resources/css/ext-all-notheme-min.css"/>
<link rel="stylesheet" type="text/css" href="{$_config.manager_url}templates/{$_config.manager_theme}/css/index.css"/>

<style>
/* overrides interferring MODx style */
.container {
  margin-top: 0;    
}
</style>

<script src="{$_config.manager_url}assets/ext3/adapter/ext/ext-base.js" type="text/javascript"></script>
<script src="{$_config.manager_url}assets/ext3/ext-all.js" type="text/javascript"></script>
<script src="{$_config.manager_url}assets/modext/core/modx.js" type="text/javascript"></script>
<script src="{$_config.manager_url}assets/modext/widgets/media/browser.js" type="text/javascript"></script>


<script src="{$_config.connectors_url}lang.js.php?ctx=mgr&topic=category,file,resource&action={$smarty.get.a|strip_tags}" type="text/javascript"></script>
<script src="{$_config.connectors_url}/modx.config.js.php?action={$smarty.get.a|strip_tags}{if $wctx}&wctx={$wctx}{/if}" type="text/javascript"></script>

{$maincssjs}

{foreach from=$cssjs item=scr}
{$scr}
{/foreach}

<!--[if IE]>
<style type="text/css">body { behavior: url("{$_config.manager_url}templates/{$_config.manager_theme}/css/csshover3.htc"); }</style>
<link rel="stylesheet" type="text/css" href="templates/{$_config.manager_theme}/css/ie.css" />
<![endif]-->
</head>
<body>

{literal}
<script type="text/javascript">

Ext.onReady(function() {
    Ext.QuickTips.init();
    Ext.BLANK_IMAGE_URL = MODx.config.manager_url+'assets/ext3/resources/images/default/s.gif';
    browser = MODx.load({
        xtype: 'modx-browser-np'
        ,hideFiles: true
        ,wctx: '{/literal}{$wctx}{literal}' || 'web'
        ,source: '{/literal}{$source}{literal}'
        ,openTo: '{/literal}{$openTo}{literal}' || ''
        ,listeners: {
            hide: {fn: function() { window.close(); }, scope: this}
            ,select: {fn: function(data) {
                // add file url to text field
                var target = window.opener.browserPathInput
                target.value = data.relativeUrl;
                target.onchange && target.onchange();
				window.close();
            }, scope: this}
        }
    });
    browser.show(document.body);
});
</script>
{/literal}
</body>
</html>
