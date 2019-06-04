$(document).ready(function(){
    $(".addcomment").hide();
    $(".allComments").hide();
    $("img[src='']").hide();
    $(".showCommentsectionbutton").click(function()
    {
        var specificStory = $(this).data("id");
        $(this).fadeOut(250);
        $(this).fadeOut("slow");
        $(".addid"+specificStory).fadeIn(2000);
        $(".allid"+specificStory).fadeIn(2000);
        // $(".showCommentsectionbutton").animate({height: 'toggle'});
     });
     $("a").on('click', function(event) {

        if (this.hash !== "") {
          event.preventDefault();
          var hash = this.hash;
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function(){
            window.location.hash = hash;
          });
        } // End if
      });

      $(document).keydown(function(e) {
        switch(e.which) {
          case 37: // left
            navigate('left');
            break;
           case 39: // right
            navigate('right');
           break;
           default: return;
       }
       e.preventDefault();
      });


});

var docuArray = ['A1.1', 'A1.2','A1.3','A1.4','A1.5','A2.3','A2.5','A2.6','A2.7','A3.1','A3.3','A3.4','A4.1','A4.2','A4.3','A4.4','A4.5','B1.1'];

document.addEventListener("DOMContentLoaded", function(event) {
  var Required = document.getElementById("FilterRequired");
  var Reset = document.getElementById("FilterReset");
  var Item = document.querySelectorAll(".ProcessItem");
  var LoadedDocu = document.querySelectorAll(".LoadedDocu");
  var currentItem = '';
  if (Required && Reset && Item && LoadedDocu) {
    Required.addEventListener('click', FilterRequired);
    Reset.addEventListener('click', FilterReset);
    Item.forEach(element => {
      element.addEventListener('click', ShowItemFull);
    });
    document.getElementById('right_button').addEventListener('click', function() {navigate('right')});
    document.getElementById('left_button').addEventListener('click', function() {navigate('left')});
  }
});
function FilterRequired() {
  var itemClass = document.querySelectorAll('.processItem');
  itemClass.forEach(element => {
    element.style.display = "none";
  });
  var stripedClass = document.querySelectorAll('.Striped');
  stripedClass.forEach(element => {
    element.style.display = "none";
  });
  var requiredClass = document.querySelectorAll('.Required');
  requiredClass.forEach(element => {
    element.style.display = "";
  });
}
function FilterReset() {
  var StripedClass = document.querySelectorAll('.Striped');
  StripedClass.forEach(element => {
    element.style.display = "";
  });
  var itemClass = document.querySelectorAll('.processItem');
  itemClass.forEach(element => {
    element.style.display = "";
  });
}
function ShowItemFull(event) {
  if (docuArray.indexOf(event.target.id) > -1 ) {
    document.getElementsByClassName('wrappertje')[0].style.display = 'block';
    document.getElementById('backgroundstyle').style.display = 'none';
    currentItem = event.target.id;
    toggleItem(currentItem);
  }
}
function navigate(direction) {
  console.log('navigating: ', direction);
  if (direction === 'left') {
    var arraynummer = docuArray.indexOf(currentItem) -1;
    if (arraynummer === -1) {
      arraynummer = docuArray.length -1;
    }
    var idnummer = docuArray[arraynummer];
    toggleItem(idnummer);
  } else if (direction === 'right') {
    var arraynummer = docuArray.indexOf(currentItem) +1;
    console.log("Arraynummer = " + arraynummer);
    if (arraynummer === 18) {
      arraynummer = 0;
    }
    var idnummer = docuArray[arraynummer];
    toggleItem(idnummer);
  }
}
function toggleItem(itemId) {
  docuArray.forEach(function(item) {
    document.getElementById(item).style.display = 'none';
  });
  document.getElementById(itemId).style.display = 'inline-block';
  console.log(itemId);
  var divId = document.getElementById(itemId);
  divId.setAttribute("class", 'ItemShowcase')
  currentItem = itemId;
}

