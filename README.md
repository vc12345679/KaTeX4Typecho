# KaTeX4Typecho

<a name="eng" href="#chs"> 中文 </a>

A plugin providing [LaTeX](http://www.latex-project.org/ "LaTeX") equation support for [Typecho](https://github.com/typecho/typecho "Typecho")

> This plugin is based on [KaTeX](https://github.com/Khan/KaTeX "KaTeX")

## Have a Show

* inline mode

An inline equation $$ \sum_{k=1}^n k^2 = \frac{1}{2} n (n+1) $$

* standalone mode

\[ \sum_{k=1}^n k^2 = \frac{1}{2} n (n+1) \]

## How It Works

KaTeX4Typecho gets the element which contains content of a post, then auto-render LaTeX expressions in this element with KaTeX. 

## Usage

1. Download the latest [KaTeX4Typecho](https://github.com/vc12345679/KaTeX4Typecho/archive/master.zip).
2. Extract the files into directory, **$TYPECHO_DIR$/usr/plugins/KaTeX4Typecho**.
3. Enable the plugin in the management back-end of Typecho.
4. Configure the plugin. This operation is optional, depends on the theme you use. More details are illustrated in the following instructions.
5. Enjoy the plugin in your Typecho posts, with `$$ ... $$` brackets for inline equations, and `\[ ... \]` brackets for standalone equations. 

## Instructions for Plugin Configuratoin

Currently, the plugin Configuratoin has two settings, "***Working type of getting element***" and "***Keyword for getting element***".
These settings decide which particular element the plugin will get for rendering. 

### *Working type of getting element*

This area has four options, each corresponds to a `getElementByXXX()` method of JavaScript.

* `Id` - `getElementById()`
* `TagName` - `getElementsByTagName()`
* `ClassName` - `getElementsByClassName()`
* `Name` - `getElementsByName()`

### *Keyword for getting element*

This area indicates which **KEYWORD** should the former `getElementByXXX()` method use.

### Examples

For example, with the theme "**Typecho Replica Theme**", the default theme of Typecho 0.9, post content is in `<div class="post-content" itemprop="articleBody"></div>`. So the settings should be,

* ***Working type of getting element*** => `ClassName`
* ***Keyword for getting element*** => `post-content`

Another example, with the theme "**[Theme.Material](https://github.com/viosey/typecho-theme-material)**", post content is in `<div id="article-content-div"></div>`. Thus the corresponding settings are,

* ***Working type of getting element*** => `Id`
* ***Keyword for getting element*** => `article-content-div`

## Defects and Plan of Next Step

* Current brackets `$$ ... $$` and `\[ ... \]` are fixxed, may bring some inconveniences sometimes. I'm going to add a setting area in configuration page.
* It is a waste for loading the `.js` and `.css` resources in the posts which contains no LaTeX expressions. I'm going to solve this by adding a judgement for `category` or `TAG`.
* For latter three of the four getting element types, it will only render the first element which fits the keyword. To my opinion, if the settings are precise enough, it won't matter. However, it needs some professional knowledge and is not that user-friendly. I'll try to make the plugin more smarter.
* The plugin only make use of browser-side rendering, it spends more network traffic. I'm going to work out the server-side rendering function in the plugin. 

## Suggestions

Having any suggestions or other feedbacks, feel free to contact me through [GitHub](https://github.com/vc12345679/) or [Email](mailto:chensiwei1990@gmail.com) or [Blog](https://blog.chensiwei.net.cn/archives/6.html).

> MIT License.
> Copyright (c) 2016 vc12345679

---
---

<a name="chs" href="#eng"> English </a>

这是一个为 [Typecho](https://github.com/typecho/typecho "Typecho") 提供 [LaTeX](http://www.latex-project.org/ "LaTeX") 公式支持的插件。
> 本项目基于 [KaTeX](https://github.com/Khan/KaTeX "KaTeX")

## 展示一下

* 行内模式

一个行内公式 $$ \sum_{k=1}^n k^2 = \frac{1}{2} n (n+1) $$

* 独立模式

\[ \sum_{k=1}^n k^2 = \frac{1}{2} n (n+1) \]

## 工作原理

KaTeX4Typecho 获取博客文章所在的HTML元素，然后通过 KaTeX 对文章内的 LaTeX 公式进行自动渲染。

## 使用方法

1. 下载最新版本的 [KaTeX4Typecho](https://github.com/vc12345679/KaTeX4Typecho/archive/master.zip)。
2. 解压到文件夹 **$TYPECHO_DIR$/usr/plugins/KaTeX4Typecho**。
3. 在 Typecho 的后台管理页面开启插件。
4. 配置插件。根据使用的主题，这一步可能是可缺省的。具体的配置方法在下面的插件配置说明中会有详细的描述。
5. 可以在 Typecho 里体验插件了，括号 `$$ ... $$` 表明这是一个行内公式，括号 `\[ ... \]` 表明这是一个独立公式。

## 插件配置说明

目前，插件的配置只有两项，"***Working type of getting element***" 和 "***Keyword for getting element***"。
这些配置决定了插件会对页面中的哪一个元素进行渲染。 

### *文章内容获取方式*

这项设置有四个可选项，每一个对应了 JavaScript 中的一种获取元素 `getElementByXXX()` 的方法。

* `Id` - `getElementById()`
* `TagName` - `getElementsByTagName()`
* `ClassName` - `getElementsByClassName()`
* `Name` - `getElementsByName()`

### *文章内容获取关键字*

这项设置指明了上面的文章内容获取方式所使用的 **关键字**。

### 举例

一个例子，如果使用的是 Typecho 0.9 的默认主题 "**Typecho Replica Theme**"，文章内容是在 `<div class="post-content" itemprop="articleBody"></div>` 内的，因此相应的设置为：

* ***Working type of getting element*** => `ClassName`
* ***Keyword for getting element*** => `post-content`

另一个例子，假如使用的是 "**[Theme.Material](https://github.com/viosey/typecho-theme-material)**" 主题, 文章内容是包含在 `<div id="article-content-div"></div>` 内的，所以相应的设置为：

* ***Working type of getting element*** => `Id`
* ***Keyword for getting element*** => `article-content-div`

## 一些缺陷和之后的开发计划

* 目前使用的是 `$$ ... $$` 和 `\[ ... \]` 这两种固定的括号，有时这些括号可能会带来一些麻烦，下一步我会针对括号的选择在插件配置页面中增加一些配置项。
* 如果对那些不含有 LaTeX 公式表达式的博客文章，也同样载入 `.js` 和 `.css` 资源，会比较浪费，我预计会修改插件，增加一项功能，针对特定的 `分类` 或者 `标签` 来自动选择是否开启插件。
* 对后三种文章内容获取方式，插件只会自动选择页面中满足关键字的第一个元素，对于之后的元素并不会渲染。当然，我认为如果方式和关键字选择得准确的话，这完全不是问题，但这需要一定的专业知识。我会争取做一些改进，使得插件更傻瓜。
* 插件只实现了 KaTeX 在浏览器端的渲染模式，这种方式消耗了相对多一些的网络流量。我会尝试实现服务器端的渲染模式。

## 建议

如果有什么建议或者其他反馈，请不吝赐教，[GitHub](https://github.com/vc12345679/) 或者 [电子邮件](mailto:chensiwei1990@gmail.com) 或者 [Blog](https://blog.chensiwei.net.cn/archives/6.html) 均可。

> MIT License.
> Copyright (c) 2016 vc12345679