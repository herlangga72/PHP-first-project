document.getElementById('header').innerHTML = '' +
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