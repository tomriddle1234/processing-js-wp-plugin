=== Plugin Name ===
Contributors: Jianming Guo
Previous Plugin Author: Ramoonus
Web Url: vfxware.com
Tags: jquery, processing, javascript, java, processingjs
Requires at least: 3.0
Tested up to: 4.0
Stable tag: 1.4.8

Processing.js is the sister project of the popular Processing visual programming language, designed for the web. Processing.js makes your data visualizations, digital art, interactive animations, educational graphs, video games, etc. work using web standards and without any plug-ins. 

This version of the processing.js plugin is a fork from original Ramoonus's version https://wordpress.org/plugins/processing-js/ .
In the original plugin the position of the sketch was not right, and not robust to empty lines in the code.

To use this plugin, simply as the example. In the wordpress add post interface, insert:

[processingjs]
void setup() {
size(400, 400, JAVA2D);
smooth();
stroke(255);
background(192, 64, 0);
}

void draw() {
line(0, 0, mouseX, mouseY);
}

[/processingjs]

Currently this version of plugin is robust to empty lines, however, please remove all comments in your code, because the comments will cause wordpress alter your final html code in the page.

== Description ==
Processing.js is the sister project of the popular Processing visual programming language, designed for the web. Processing.js makes your data visualizations, digital art, interactive animations, educational graphs, video games, etc. work using web standards and without any plug-ins. You write code using the Processing language, include it in your web page, and Processing.js does the rest. It's not magic, but almost.

Originally developed by Ben Fry and Casey Reas, Processing started as an open source programming language based on Java to help the electronic arts and visual design communities learn the basics of computer programming in a visual context. Processing.js takes this to the next level, allowing Processing code to be run by any HTML5 compatible browser, including current versions of Firefox, Safari, Chrome, Opera, and Internet Explorer. Processing.js brings the best of visual programming to the web, both for Processing and web developers.

Everything you need to work with Processing.js is here. You can download the most recent version of Processing.js, read Quick Start Guides for Processing Developers or JavaScript Developers, learn about the Processing language and Processing.js render modes, consult the Reference, and of course view many existing demos that use Processing.js. You can also get involved with the Processing and Processing.js communities, both of which are active and and looking for new users and developers.

Whether you're an advanced Processing developer or completely new, whether you're a pro with web technologies or just getting started, Processing.js bridges the gap between these two powerful technologies.

== Installation ==
1. Upload `processing-js/` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions == 
None at this moment.


== Screenshots ==
Not relevant.

== Changelog ==
= 1.4.8 =
* Fork from the original Ramoonus's processing.js plugin for wordpress.
