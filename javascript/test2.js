
//parseInt = Gjøre om fra tekst til tall
/*
var tall1 = parseInt(prompt("Tall1"));
var tall2 = parseInt(prompt("Tall2"));
var sum = tall1 + tall2;
var differanse = tall1 - tall2;
var produktet = tall1 * tall2;
var kvotienten = tall1 / tall2;
document.write("Summen er " + sum + "<br /");
document.write("Differansen er " + differanse + "<br /");
document.write("Produktet er " + produktet + "<br /");
document.write("Kvotienten er " + kvotienten + "<br /");
*/
var tall1=parseInt(prompt("Tall1 "));
var tall2=parseInt(prompt("Tall2 "));    /* variable gitt verdier ved bruk av promt-funksjonen */

var sum=tall1+tall2;
var differanse=tall1-tall2
var produkt=tall1*tall2;
var kvotient=tall1/tall2;    /* beregninger  utført */

document.write("Tall 1 er " + tall1 + "<br/>");
document.write("Tall 2 er " + tall2 + "<br/>");
document.write("<br/>");
document.write("Summen er " + sum + "<br/>");
document.write("Differansen er " + differanse + "<br/>");
document.write("Produktet er " + produkt + "<br/>");
document.write("Kvotienten er " + kvotient + "<br/>");    /* resultater skrevet ut */
