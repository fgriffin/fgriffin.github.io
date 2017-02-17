var navHeight = document.getElementById("navigation").offsetHeight;

var abz = document.getElementById("abzats");
    
abz.style.marginTop = navHeight + 5 + 'px';

function adjustContentOffset() {
    var navHeight = document.getElementById("navigation").offsetHeight;
    var abz = document.getElementById("abzats");
    abz.style.marginTop = navHeight + 5 + 'px';
}

document.getElementById('b-menu').addEventListener('click', function() {
    setTimeout(function(){ adjustContentOffset(); }, 300);

});
document.getElementById('menu-items').addEventListener('click', function() {
    setTimeout(function(){ adjustContentOffset(); }, 300);
});
