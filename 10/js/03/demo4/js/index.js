// JavaScript Document
document.write("<br />-------内置函数--------<br />");
var str = "我++++很++++爱++++国";
//document.write(escape(str)+"<br />");
//document.write(unescape(escape(str)));
document.write("<br />");
// 建议使用下面两个方法
document.write(encodeURI(str)+"<br />");
document.write(decodeURI(encodeURI(str)));


document.write("<br />-------内置函数 eval--------<br />");
var str1 =  "alert('123')"; //普通字符串 不会弹出
//document.write(str1);
window.eval(str1);





document.write("<br />-------其他函数--------<br />");

document.write(String(1)+String(2));