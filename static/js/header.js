document.getElementById('header').innerHTML = '' +
// '<!--search-->' + 
// '<div class="relative w-full max-w-3xl px-6 order-last">' + 
// '    <div class="absolute h-10 mt-1 left-0 top-0 flex items-center pl-10">' + 
// '        <svg class="h-4 w-4 fill-current text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">' + 
// '            <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>' + 
// '        </svg>' + 
// '    </div>' + 
// '    <input id="search-toggle" type="search" placeholder="search" class="block w-full bg-gray-200 focus:outline-none focus:bg-white focus:shadow-md text-gray-700 font-bold rounded-full pl-12 pr-4 py-3" onkeyup="updateSearchResults(this.value);">' + 
// '</div>' + 
// '<!-- / Search-->' + 
'<!--Menu-->' + 
'<div class="flex relative inline-block pr-6">' + 
'    <div class="relative text-sm">' + 
'        <button id="userButton" class="flex items-center focus:outline-none mr-3">' + 
'            <span class="hidden md:inline-block">Menu</span>' + 
'            <svg class="pl-2 h-2" version="1.1" viewBox="0 0 129 129" enable-background="new 0 0 129 129">' + 
'                <g>' + 
'                    <path d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z"></path>' + 
'                </g>' + 
'            </svg>' + 
'        </button>' + 
'        <div id="userMenu" class="bg-white nunito rounded shadow-md mt-2 absolute mt-12 top-0 right-0 min-w-full overflow-auto z-30 invisible">' + 
'            <ul class="list-reset">' + 
'                <li><a href="/admin/logoff.php" class="px-4 py-2 block text-gray-900 hover:bg-indigo-400 hover:text-white no-underline hover:no-underline">Logout</a></li>' + 
'            </ul>' + 
'        </div>' + 
'    </div>' + 
'</div>'