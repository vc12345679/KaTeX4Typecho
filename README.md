# KaTeX4Typecho

## New Features
### v0.2

* Use CDN for loading `.js` and `.css` resources.

* Delimiters and IgnoredTags can be configured in Config Page.

* 使用外部CDN来加载`.js`和`.css`资源。

* 可以在配置页面进行 标识符 和 禁用标签 的设置了。

### v0.1

* First Release

---

## Summary

<a name="eng" href="#chs"> 中文 </a>

A plugin providing [LaTeX](http://www.latex-project.org/ "LaTeX") equation support for [Typecho](https://github.com/typecho/typecho "Typecho")

> This plugin is based on [KaTeX](https://github.com/Khan/KaTeX "KaTeX")

### Have a Show

* inline mode

An inline equation $$ \sum_{k=1}^n k^2 = \frac{1}{2} n (n+1) $$

* standalone mode

\[ \sum_{k=1}^n k^2 = \frac{1}{2} n (n+1) \]

### How It Works

KaTeX4Typecho auto-renders the whole page with KaTeX. 

### Usage

1. Download the latest [KaTeX4Typecho](https://github.com/vc12345679/KaTeX4Typecho/archive/master.zip).
2. Extract the files into directory, **$TYPECHO_DIR$/usr/plugins/KaTeX4Typecho**.
3. Enable the plugin in the management back-end of Typecho.
4. Configure the plugin. More details are illustrated in the following instructions.
5. Enjoy the plugin in your Typecho posts, with `$$ ... $$` brackets for inline equations, and `\\[ ... \\]` brackets for standalone equations. 

### Instructions for Plugin Configuratoin

Currently, the plugin Configuratoin has two settings, "***Delimiters for equations***" and "***Ignored Tags***".
These settings decide which content the plugin will render.

#### *Delimiters for equations*

You can define delimiters for equations here. The default configuration is,

`{left: "$$", right: "$$", display: false},{left: "\\[", right: "\\]", display: true}`

* A pair of `{}` brackets corresponds to a set of delimiters. These sets are seperated by comma, `,`.
* In each set, `left` stands for the left delimiter (bracket), `right` for the right one. `display: true` means standalone equation mode, and `display: false` means inline equation mode.
* Here we only define two sets of delimiters by default. You may define much more sets.

#### *Ignored Tags*

This area indicates which tags will be ignored during the process of rendering. Default setting is,

`"script", "noscript", "style", "textarea", "pre", "code"`

### TODO List

* It is a waste for loading the `.js` and `.css` resources in the posts which contains no LaTeX expressions. I'm going to solve this by adding a judgement for `category` or `TAG`.

### Suggestions

Having any suggestions or other feedbacks, feel free to contact me through [GitHub](https://github.com/vc12345679/) or [Email](mailto:chensiwei1990@gmail.com) or [Blog](https://blog.chensiwei.space/blog/katex4typecho.html).

> MIT License.
> Copyright (c) 2016 vc12345679

---
---

## 
<a name="chs" href="#eng"> English </a>

这是一个为 [Typecho](https://github.com/typecho/typecho "Typecho") 提供 [LaTeX](http://www.latex-project.org/ "LaTeX") 公式支持的插件。
> 本项目基于 [KaTeX](https://github.com/Khan/KaTeX "KaTeX")

### 展示一下

* 行内模式

一个行内公式 $$ \sum_{k=1}^n k^2 = \frac{1}{2} n (n+1) $$

* 独立模式

\\[ \sum_{k=1}^n k^2 = \frac{1}{2} n (n+1) \\]

### 工作原理

KaTeX4Typecho 使用 KaTeX 渲染整个页面。

### 使用方法

1. 下载最新版本的 [KaTeX4Typecho](https://github.com/vc12345679/KaTeX4Typecho/archive/master.zip)。
2. 解压到文件夹 **$TYPECHO_DIR$/usr/plugins/KaTeX4Typecho**。
3. 在 Typecho 的后台管理页面开启插件。
4. 配置插件。根据使用的主题，这一步可能是可缺省的。具体的配置方法在下面的插件配置说明中会有详细的描述。
5. 可以在 Typecho 里体验插件了，括号 `$$ ... $$` 表明这是一个行内公式，括号 `\\[ ... \\]` 表明这是一个独立公式。

### 插件配置说明

目前，插件的配置只有两项， "***Delimiters for equations***" 和 "***Ignored Tags***"。
这些配置决定了插件将会渲染的内容。

#### *Delimiters for equations*

你可以在这里定义公式所使用的标识符，默认配置为：

`{left: "$$", right: "$$", display: false},{left: "\\[", right: "\\]", display: true}`

* 每一对 `{}` 对应一组标识符，每组标识符由逗号 `,` 分隔；
* 在每一组标识符的设置里，`left` 代表左标识符（括号），`right` 代表右标识符（括号），`display: true` 表示独立公式模式，`display: false` 表示行内公式模式；
* 这里仅定义了两组标识符，你还可以定义更多组标识符。

#### *Ignored Tags*

这项配置用来标识禁止 KaTeX 渲染的标签，默认配置为：

`"script", "noscript", "style", "textarea", "pre", "code"`

### 开发计划

* 目前使用的是 `$$ ... $$` 和 `\[ ... \]` 这两种固定的括号，有时这些括号可能会带来一些麻烦，下一步我会针对括号的选择在插件配置页面中增加一些配置项。

### 建议

如果有什么建议或者其他反馈，请不吝赐教，[GitHub](https://github.com/vc12345679/) 或者 [电子邮件](mailto:chensiwei1990@gmail.com) 或者 [Blog](https://blog.chensiwei.space/blog/katex4typecho.html) 均可。

> MIT License.
> Cgopyright (c) 2016 vc12345679
