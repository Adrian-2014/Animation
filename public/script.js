
 document.getElementById("next").addEventListener("mouseenter", function () {
     let lists = document.querySelectorAll(".item");
     document.getElementById("slide").appendChild(lists[0]);
 });

 document.getElementById("next").addEventListener("click", function () {
     let lists = document.querySelectorAll(".item");
     document.getElementById("slide").appendChild(lists[0]);
 });

