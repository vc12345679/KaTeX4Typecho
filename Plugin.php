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
		$getType = new Typecho_Widget_Helper_Form_Element_Select('getType', array('Id' => 'Id',
            'TagName' => 'TagName',
            'ClassName' => 'ClassName',
            'Name' => 'Name'), 'ClassName', _t('文章内容获取方式 Working type of getting element:'), _t('JS获取文章内容所在元素时采用的选取方式。默认主题时采用 ClassName 。The type by which Js would get the element containing post content. Use ClassName under default theme.'));
        $form->addInput($getType);


		$getName = new Typecho_Widget_Helper_Form_Element_Text('getName', NULL, _t('post-content'), _t('文章内容获取关键字 Keyword for getting element:'), _t('输入JS获取文章内容所在元素时采用的关键字。默认主题时采用 post-content 。Input the KEYWORD when JS gets the element containing post content. Use post-content under default theme.'));
        $form->addInput($getName);
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
	    $currentPath = Helper::options()->pluginUrl . '/KaTeX4Typecho/';

	    echo '<script type="text/javascript" src="' . $currentPath . 'katex/katex.min.js"></script>' . "\n";
        echo '<link rel="stylesheet" type="text/css" href="' . $currentPath . 'katex/katex.min.css" />' . "\n";
        echo '<script type="text/javascript" src="' . $currentPath . 'katex/contrib/auto-render.min.js"></script>' . "\n";
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
	    echo <<<EOF
<script type="text/javascript">
	renderMathInElement(
		
EOF;
		if($settings->getType == "Id")
			echo 'document.getElementById("' . $settings->getName . '")';
		else
			echo 'document.getElementsBy' . $settings->getType . '("' . $settings->getName . '")[0]';
		echo <<<EOF
,{
            delimiters:[
                {left: "$$", right: "$$", display: false},
                {left: "\\[", right: "\\]", display: true},
            ]
        }
    );
</script>
EOF;
	    echo "\n";
    }
}
