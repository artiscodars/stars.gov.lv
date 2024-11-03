<ul class="m-0 p-0">
    <li class="relative group ">
        <button
            class="flex items-center justify-center w-10 h-10 bg-warning rounded-full font-medium group-hover:outline outline-gray-400 outline-offset-2 group/level">
            AB
        </button>

        <!-- Dropdown on Hover and Focus -->
        <div class="absolute right-0 top-0 w-64 hidden group-hover:block group-focus-within:block pt-12">
            <div
                class=" bg-white shadow-lg rounded-md p-4 overflow-y-auto max-h-60 border border-gray-200 peer-hover:block peer group-hover/level:outline">
                <!-- User Info -->
                <div class="flex items-center space-x-3 mb-4">
                    <svg width="16" height="19" viewBox="0 0 16 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="8" cy="5" r="4" stroke="#2D233D" stroke-width="2" />
                        <path d="M15 19C15 15.134 11.866 12 8 12C4.13401 12 1 15.134 1 19" stroke="#2D233D"
                            stroke-width="2" />
                    </svg>

                    <div>
                        <p class="text-lg font-medium">Andris Bērziņš</p>
                    </div>
                </div>

                <!-- Available Amount -->
                <div class="bg-warning font-medium rounded-md px-3 py-2 mb-4 flex justify-between items-center">
                    <span>Pieejamā summa</span>
                    <span>€ 500 EUR</span>
                </div>

                <!-- Account and Logout Links -->
                <div>
                    <a href="#" class="hover:opacity-70 block mb-2">Mans konts</a>
                    <a href="#" class="text-third hover:opacity-70 flex items-center justify-end">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2 21V19H4V4.83499C4 4.35099 4.346 3.93699 4.821 3.85099L14.293 2.12899C14.619 2.06899 14.931 2.28599 14.99 2.61199C14.997 2.64699 15 2.68199 15 2.71899V3.99899L19 3.99999C19.552 3.99999 20 4.44799 20 4.99999V19H22V21H18V5.99999H15V21H2ZM12 11H10V13H12V11Z"
                                fill="#9680BD" />
                        </svg>
                        Beigt darbu

                    </a>
                </div>
            </div>
        </div>
    </li>
</ul>