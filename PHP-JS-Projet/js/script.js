
$(document).ready(function(){
  $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true,
  });
    $('.sidenav').sidenav();
    $('.materialboxed').materialbox();
    $('.parallax').parallax()
  });

$("#btn-prev").on('click' , function() {
  $('.carousel').carousel('prev');
})
$("#btn-next").on('click' , function() {
  $('.carousel').carousel('next');
});

function sendMail() {
    var link = "mailto:lepapfr4nc015@gmail.com"
            + "?cc=lepapfr4nc015@gmail.com.com"
            + "&subject=" + encodeURIComponent("Retour site projet 2")
            + "&body=" + encodeURIComponent(document.getElementById('myText').value)
            ;
    
    window.location.href = link;
  }

  var a;
  function show()
  {
    if(a==1)
        {
            document.getElementById("disparition").style.display="inline";
            return a=0;
        }

        else
        {
            document.getElementById("disparition").style.display="none";
            return a=1;
        }
  } 

  function changeimage()
{
document.getElementById("image").src="img/stonks-meme.jpg";
}

  window.addEventListener("keydown", checkKeypress, true)

  function checkKeypress(key){
    if (key.keyCode == "76"){
      alert("L BOZO")
    }
  }
  

  function handleClicks() {
    let clickCount = 0;
    $('.indicator-item').click(event => {
      clickCount += 1;
    });
  }

  $("#chad-1").hover(
    function () {
      $(this).attr('src','https://i.kym-cdn.com/photos/images/facebook/002/301/351/ecc.png');  
    },
    function () {
       $(this).attr('src','https://www.ipnoze.com/wordpress/wp-content/uploads/2020/05/chats-piquer-par-abeilles-guepes-025.jpg');  
    }
 );
 