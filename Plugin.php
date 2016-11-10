<?php

/**
 * KaTeX for Typecho
 * 
 * @package KaTeX4Typecho 
 * @author vc12345679
 * @version 0.0.1
 * @link https://blog.chensiwei.net.cn/archives/6.html
 */
class KaTeX4Typecho_Plugin implements Typecho_Plugin_Interface {
    /**
     * 激活插件方法,如果激活失败,直接抛出异常
     * 
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function activate() {
        Typecho_Plugin::factory('Widget_Archive')->header = array('KaTeX4Typecho_Plugin', 'header');
        Typecho_Plugin::factory('Widget_Archive')->footer = array('KaTeX4Typecho_Plugin', 'footer');
    }

    /**
     * 禁用插件方法,如果禁用失败,直接抛出异常
     * 
     * @static
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function deactivate() {
    }

    /**
     * 获取插件配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form 配置面板
     * @return void
     */
	public static function config(Typecho_Widget_Helper_Form $form) {
		$delimiter = new Typecho_Widget_Helper_Form_Element_Text('delimiter', NULL, _t('{left: "$$", right: "$$", display: false},{left: "\\\\[", right: "\\\\]", display: true}'), _t('公式标识符 Delimiters for equations:'), _t('输入识别公式所用的标识符，每个{}内为一组，left 后为左标识符，right 后为右标识符,display 后 true 表示段落模式，false 表示行内模式。Input the DELIMITERS for recognizing equations. Each {} for a set. "left" means left delimiter. "right" means right delimiter. In "display", "true" means standalone mode; “false” means inline mode.'));
        $form->addInput($delimiter);
		$ignoredtag = new Typecho_Widget_Helper_Form_Element_Text('ignoredtag', NULL, _t('"script", "noscript", "style", "textarea", "pre", "code"'), _t('忽略的标签 Ignored Tags:'), _t('输入禁止公式渲染的标签。Input the IGNORED TAGS for KaTeX rendering.'));
        $form->addInput($ignoredtag);
    }

    /**
     * 个人用户的配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form
     * @return void
     */
    public static function personalConfig(Typecho_Widget_Helper_Form $form) {
    }

    /**
     * 输出头部js和css
     *
     * @access public
     * @param unknown $header
     * @return void
     */
    public static function header() {
	    $settings = Helper::options()->plugin('KaTeX4Typecho');
		echo<<<EOF
<script type="text/javascript" src="https://cdn.bootcss.com/KaTeX/0.6.0/katex.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.bootcss.com/KaTeX/0.6.0/katex.min.css" />
<script type="text/javascript" src="https://cdn.bootcss.com/KaTeX/0.6.0/contrib/auto-render.min.js"></script>
EOF;
    }

     /**
     * 输出尾部js
     *
     * @access public
     * @param unknown $footer
     * @return void
     */
    public static function footer() {
	    $settings = Helper::options()->plugin('KaTeX4Typecho');
		echo '<script type="text/javascript">renderMathInElement(document.body,{delimiters:[';
		echo $settings->delimiter;
		echo '],ignoredTags:[';
		echo $settings->ignoredtag;
		echo ']});</script>';
    }
}
