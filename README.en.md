LikeCoin Button Plugin
===
[繁體中文版](./README.md)  

A simple LikeCoin Button plugin, esaily for setting LikeCoin ID and referrer url.  

Usage
----
Add LikeCoin Component into a page. You can find it in Component/LIKECOIN PLUGIN/LikeCoin Button. Then, add following code to desired place.
` {% component "likeCoinButton" %} `  

Click LikeCoin Button at the top, set `Creator` as your LikeCoin ID. (LikeCoin ID will display on right-top after you login into [LikeCoin](https://like.co/))  

Default referrer link is current page url. If the page need a specific link, you can set `url` property.  
` {% component "likeCoinButton" url="http://example.com/somewhere" %} `  

Styling
----
If you want to change the style of LikeCoin Button, create partial naming `likeCoinButton/default.htm`. Following is default content, you can modify from this.  
```html
<iframe scrolling="no" frameborder="0" style="height: 212px; width: 100%; overflow: hidden;"
  src="https://button.like.co/in/embed/{{ __SELF__.creator }}/button?referrer={{ __SELF__.url }}"></iframe>
```
But you may want to know, LikeCoin Button is embed from LikeCoin website. Therefore, changing the style inside is incapable.    

Note
----
Hi, if you think this document is shitty and you know Chinese or how to use, please update this document for better reading.