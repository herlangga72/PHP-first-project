text = '';
menu= [ ['/admin/home','Home','<img src="/static/icons/home.svg">'],
        ['/admin/staff','Staff','<img src="/static/icons/account-tie.svg">'],
        ['/admin/buku','Buku','<img src="/static/icons/book.svg">'],
        ['/admin/peminjaman','Peminjaman','<img src="/static/icons/book-clock.svg">'],
        ['/admin/anggota','Anggota','<img src="/static/icons/account-group.svg">']];
for (let i = 0; i < menu.length; i++) {
    text += ''+
    '<li class="my-2 md:my-0">'+
    '    <a href="../../'+menu[i][0]+'" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">'+
    '        <i class="mr-1">'+menu[i][2]+'</i><span  class="w-full inline-block pb-1 md:pb-0 text-sm">'+menu[i][1]+'</span>'+
    '    </a>'+
    '</li>'; 
}
document.getElementById('test').innerHTML=text; 

var userMenuDiv = document.getElementById("userMenu");
var userMenu = document.getElementById("userButton");
document.onclick = check;
function check(e) {
    var target = (e && e.target) || (event && event.srcElement);
    if (!checkParent(target, userMenuDiv)) {
        if (checkParent(target, userMenu)) {
            if (userMenuDiv.classList.contains("invisible")) {
                userMenuDiv.classList.remove("invisible");
            } else {
                userMenuDiv.classList.add("invisible");
            }
        } else {
            userMenuDiv.classList.add("invisible");
        }
    }
}
function checkParent(t, elm) {
    while (t.parentNode) { 
        if (t == elm) { 
            return true; 
        } 
        t = t.parentNode; 
    }
    return false;
}