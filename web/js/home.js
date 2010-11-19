$(document).ready(function() {
  $(".loginform").hide()
  $(".premioslocales li").fadeTo(0, 0.2)
  $(".premioslocales li").hover( function(){$(this).fadeTo(0, 1)}, function(){$(this).fadeTo(0, 0.2)})
//     $(".login").click(function(){$(".loginform").slideToggle()})
  $('.buttons a').hover(
function(e){
s=""
$(this.parentNode).children(".display")[0].textContent = this.firstChild.textContent

/*
t = $(this.parentNode).children( ".display" )[0]
for (attr in t){

if (t[attr] != undefined && typeof t[attr] != "function")
s = s + attr +":"+ t[attr] + "\n";
}
alert(s)*/
//alert($(this).parent().classname)


},
function(e){
$(this.parentNode).children(".display")[0].textContent = ""
}
)

$(".buttons a").fadeTo(0, 0.5)

    $(".buttons a").hover( function(){
        $(this).fadeTo(0, 1)
    }, function(){
        $(this).fadeTo(0, 0.5)
        })
    $(".buttons a").hover(function(){

        var b = this.firstChild.innerText

        if (!b){
            b = this.firstChild.textContent
        }
        $(this.parentNode.parentNode).children(".display").html(b)
    },
    function(){
        $(this.parentNode.parentNode).children(".display").html("")
    })


});
