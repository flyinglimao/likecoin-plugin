LikeCoin Button 插件
===
[English Version](./README.en.md)  

一個簡易的 LikeCoin Button 插件，可輕易設定創作者的 LikeCoin ID 與參照網址。  

使用方式
----
在需要加入 LikeCoin 頁面，從左方的 Components / 組件中，找到 LIKECOIN PLUGIN，點擊 LikeCoin Button，將組件加入到頁面中
` {% component "likeCoinButton" %} `  

點擊上方的 LikeCoin Button，設定 Creator 為創作者的 ID。（登入 LikeCoin 後，右上角顯示的字串。）  

預設的參考連結是當前頁面的 URL，若是頁面需要使用指定網址，可以指定 URL。  
` {% component "likeCoinButton" url="http://example.com/somewhere" %} `  

自訂樣式
----
若是有自訂 LikeCoin Button 樣式的需求，可以在 Partials / 部件中心新增文件，命名為 `likeCoinButton/default.htm`，以下是預設內容。  
```html
<iframe scrolling="no" frameborder="0" style="height: 212px; width: 100%; overflow: hidden;"
  src="https://button.like.co/in/embed/{{ __SELF__.creator }}/button?referrer={{ __SELF__.url }}"></iframe>
```
請留意，LikeCoin Button 是透過嵌入式頁面載入的，因此並無法改變內部內容。  